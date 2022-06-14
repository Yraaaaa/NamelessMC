<?php

use Symfony\Component\HttpFoundation\IpUtils;

class HttpUtils {

    /**
     * Get the client's true IP address, using proxy headers if necessary.
     *
     * @return ?string Client IP address, or null if there is no remote address, for example in CLI environment
     */
    public static function getRemoteAddress(): ?string {
        if (!self::isTrustedProxy()) {
            return $_SERVER['REMOTE_ADDR'];
        }

        $headers = getallheaders();

        // Try the simple headers first that only contain an IP address...

        // Non-standard header that only contains the origin address
        if (isset($headers['X-Real-Ip'])) {
            return $headers['X-Real-Ip'];
        }

        // Non-standard header sent by CloudFlare that only contains the origin address
        if (isset($headers['Cf-Connecting-Ip'])) {
            return $headers['Cf-Connecting-Ip'];
        }

        // Now the more complicated (X-)Forwarded(-For) headers.
        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-Forwarded-For#parsing:
        // > There may be multiple X-Forwarded-For headers present in a request (per RFC 2616). The IP addresses in
        // > these headers must be treated as a single list, starting with the first IP address of the first header
        // > and continuing to the last IP address of the last header.
        // > It is insufficient to use only one of multiple X-Forwarded-For headers.
        //
        // Unfortunately, we cannot follow this advice since PHP only seems to return the last header. However, since
        // supposedly the addresses should be read from right to left, only using the last header is not insecure, while
        // the using the first header would be.
        // In case of a weirdly behaving proxy that sends an additional Forwarded header instead of appending to an
        // existing one, the worst that would happen is an IP ban affecting the proxy (every user). Under no
        // circumstance would a user be able to spoof their address.
        if (isset($headers['X-Forwarded-For'])) {
            $addresses = [];
            foreach (explode(',', $headers['X-Forwarded-For']) as $part) {
                $addresses[] = trim($part);
            }

            return self::firstNonProxyAddress($addresses);
        }

        if (isset($headers['Forwarded'])) {
            $addresses = [];
            foreach (explode(',', $headers['Forwarded']) as $part1) {
                // Extract the optional 'for=<address>' bit
                foreach (explode(';', trim($part1)) as $part2) {
                    $part2 = explode('=', $part2);
                    if (count($part2) != 2) {
                        die("Invalid Forwarded header");
                    }

                    if ($part2[0] === 'for') {
                        $addresses[] = trim($part2[1]);
                        break;
                    }
                }
            }

            if (count($addresses) > 0) {
                return self::firstNonProxyAddress($addresses);
            }
        }

        return $_SERVER['REMOTE_ADDR'];
    }

    /**
     * Get the protocol used by client's HTTP request, using proxy headers if necessary.
     *
     * @return string 'http' if HTTP or 'https' if HTTPS. If the protocol is not known, for example when using the CLI, 'http' is always returned.
     */
    public static function getProtocol(): string {
        if (isset($_SERVER['HTTP_X_FORWARDED_PROTO'])) {
            $proto = $_SERVER['HTTP_X_FORWARDED_PROTO'];
            if ($proto !== 'http' && $proto !== 'https') {
                die("Invalid X-Forwarded-Proto header, should be 'http' or 'https'.");
            }
            return $proto;
        }

        if (isset($_SERVER['HTTPS'])) {
            return $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http';
        }

        return 'http';
    }

    /**
     * Get port used by client's HTTP request, using proxy headers if necessary.
     *
     * @return ?int Port number, or null when using the CLI
     */
    public static function getPort(): ?int {
        if (isset($_SERVER['HTTP_X_FORWARDED_PORT'])) {
            return (int) $_SERVER['HTTP_X_FORWARDED_PORT'];
        }

        if (isset($_SERVER['SERVER_PORT'])) {
            return (int) $_SERVER['SERVER_PORT'];
        }

        return null;
    }

    /**
     * Determine whether the trusted proxies config option is set to a valid value or not.
     *
     * @return bool Whether the trusted proxies option is configured or not
     */
    public static function isTrustedProxiesConfigured(): bool {
        $config_proxies = Config::get('core.trustedProxies');
        $env_proxies = getenv('NAMELESS_TRUSTED_PROXIES');
        return ($config_proxies !== false && is_array($config_proxies)) || $env_proxies !== false;
    }

    /**
     * @return array List of trusted proxy networks according to config file and environment
     */
    public static function getTrustedProxies(): array {
        $trusted_proxies = [];

        // Add trusted proxies from config file
        $config_proxies = Config::get('core.trustedProxies');
        if ($config_proxies !== false && $config_proxies !== null) {
            if (!is_array($config_proxies)) {
                die('Trusted proxies should be an array');
            }
            $trusted_proxies = array_merge($trusted_proxies, $config_proxies);
        }

        // Add trusted proxies from environment variable (comma-separated string)
        $env_proxies = getenv('NAMELESS_TRUSTED_PROXIES');
        if ($env_proxies !== false && $env_proxies !== 'none') {
            $env_proxies_array = explode(',', $env_proxies);
            $trusted_proxies = array_merge($trusted_proxies, $env_proxies_array);
        }

        return $trusted_proxies;
    }

    /**
     * Checks whether the client making the request is a trusted proxy.
     *
     * @return bool Whether the client is a trusted proxy or not.
     */
    private static function isTrustedProxy(): bool {
        $trusted_proxies = self::getTrustedProxies();

        foreach ($trusted_proxies as $trustedProxy) {
            if (IpUtils::checkIp($_SERVER['REMOTE_ADDR'], $trustedProxy)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Extract trustworthy address from a list of addresses provided by the Forwarded or X-Forwarded-For header.
     *
     * @return string Address that may be used for security purposes
     */
    private static function firstNonProxyAddress(array $addresses): string {
        if (count($addresses) === 0) {
            throw new InvalidArgumentException('Addresses must not be empty');
        }

        $trusted_proxies = self::getTrustedProxies();

        // https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-Forwarded-For#parsing
        // > When choosing the first trustworthy X-Forwarded-For client IP address, additional configuration is required.
        // > The IPs or IP ranges of the trusted reverse proxies are configured. The X-Forwarded-For IP list is searched
        // > from the rightmost, skipping all addresses that are on the trusted proxy list. The first non-matching
        // > address is the target address.
        // > The first trustworthy X-Forwarded-For IP address may belong to an untrusted intermediate proxy rather than
        // > the actual client computer, but it is the only IP suitable for security uses.
        for ($i = count($addresses) - 1; $i >= 0; $i--) {
            $address = $addresses[$i];

            foreach ($trusted_proxies as $trusted_proxy) {
                if (IpUtils::checkIp($address, $trusted_proxy)) {
                    // This address is trusted, move one left
                    continue 2;
                }
            }

            // Address is not trusted, this is the client IP we should use
            return $address;
        }

        // All addresses are in a trusted network, use leftmost address
        return $addresses[0];
    }

}
