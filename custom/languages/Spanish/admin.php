<?php
/*
 *	Made by TheSuperSkills
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr3
 *
 *  License: MIT
 *
 *  Spanish Language - Admin
 */

$language = array(
	/*
	 *  Admin Control Panel
	 */
	// Login
	're-authenticate' => 'Vuelva a autenticar',

	// Sidebar
	'admin_cp' => 'Panel de Administración',
	'administration' => 'Administración',
	'overview' => 'Vision de conjunto',
	'core' => 'Configuraciones',
	'minecraft' => 'Minecraft',
	'modules' => 'Modulos',
	'security' => 'Seguridad',
	'styles' => 'Estilos',
	'users_and_groups' => 'Usuarios y grupos',

	// Overview
	'running_nameless_version' => 'Versión en ejecución de NamelessMC <strong>{x}</strong>', // Don't replace "{x}"
	'running_php_version' => 'Versión en ejecución de PHP <strong>{x}</strong>', // Don't replace "{x}"
	'statistics' => 'Estadisticas',
	'registrations' => 'Registros',
	'topics' => 'Temas',
	'posts' => 'Publicaciones',
    'notices' => 'Noticias',
    'no_notices' => 'No hay noticias.',
    'email_errors_logged' => 'Se han registrado los errores de correo electrónico. Click <a href="{x}">aquí</a> para ver.', // Don't replace "{x}"
	// Core
	'settings' => 'Ajustes',
	'general_settings' => 'Ajustes Generales',
	'sitename' => 'Nombre del sitio',
	'default_language' => 'Lenguaje por defecto',
	'default_language_help' => 'Los usuarios podran elegir entre los idiomas instalados.',
	'installed_languages' => 'Todos los nuevos idiomas se han instalado correctamente.',
	'default_timezone' => 'Zona horaria por defecto',
	'registration' => 'Registro',
	'enable_registration' => 'Activar registro?',
	'verify_with_mcassoc' => 'Verificar cuentas de Usuarios con MCAssoc?',
	'email_verification' => 'Habilitar la verificación de correo electrónico?',
	'homepage_type' => 'Tipo de pagina de inicio',
	'post_formatting_type' => 'Tipo de formato posterior',
	'portal' => 'Portal',
	'missing_sitename' => 'Introduzca un nombre del sitio entre 2 y 64 caracteres.',
	'use_friendly_urls' => 'Amistoso URLs',
	'use_friendly_urls_help' => 'IMPORTANTE: Tu servidor debe estar configurado para permitir el uso de los archivos mod_rewrite y .htaccess para que esto funcione.',
	'config_not_writable' => 'Tu <strong>core/config.php</strong> archivo no es escribible. Compruebe los permisos de archivo.',
	'social_media' => 'Redes sociales',
	'youtube_url' => 'Youtube URL',
	'twitter_url' => 'Twitter URL',
	'twitter_dark_theme' => 'Usar tema oscuro de Twitter?',
	'discord_id' => 'Discord Server ID',
	'google_plus_url' => 'Google Plus URL',
	'facebook_url' => 'Facebook URL',
	'successfully_updated' => 'Actualizado exitosamente',
    'debugging_and_maintenance' => 'Depuracion y Mantenimiento',
    'enable_debug_mode' => 'Habilitar modo de depuracion?',
    'force_https' => 'Forzar https?',
    'force_https_help' => 'Si habilita esto, todas las solicitudes a su sitio web seran redirigidas a https. Debe tener un certificado SSL valido activo para que funcione correctamente.',
    'contact_email_address' => 'Correo electronico de contacto',
    'emails' => 'Correos electronicos',
    'email_errors' => 'Errores de correo electronico',
    'registration_email' => 'Correo electronico de registro',
    'contact_email' => 'Correo de contacto',
    'forgot_password_email' => '¿Olvidaste tu contraseña?',
    'unknown' => 'Desconocido',
    'delete_email_error' => 'Eliminar error',
    'confirm_email_error_deletion' => '¿Seguro que quieres eliminar este error?',
    'viewing_email_error' => 'Error de visualizacion',
    'unable_to_write_email_config' => 'No se puede escribir en el archivo <strong>core/email.php</core>. Compruebe los permisos de archivo.',
    'enable_mailer' => 'Activar PHPMailer?',
    'enable_mailer_help' => 'Habilite esto si los correos electronicos no se envian por defecto. El uso de PHPMailer requiere que usted tenga un servicio capaz de enviar correos electronicos, como Gmail o un proveedor de SMTP.',
    'outgoing_email' => 'Direccion de correo saliente',
    'outgoing_email_info' => 'Esta es la dirección de correo electronico que NamelessMC utilizara para enviar correos electronicos.',
    'mailer_settings_info' => 'Los campos siguientes son obligatorios si ha habilitado PHPMailer. Para obtener más informacion sobre como rellenar estos campos, consulta en <a href="https://github.com/NamelessMC/Nameless/wiki/Setting-up-Gmail-or-SMTP-with-Nameless" target="_blank">the wiki</a>.',
    'host' => 'Host',
	'email_port' => 'Port',
    'email_password_hidden' => 'La contraseña no se muestra por razones de seguridad.',
    'send_test_email' => 'Enviar prueba de correo electrónico',
    'send_test_email_info' => 'El siguiente botón intentará enviar un correo electrónico a su dirección de correo electrónico, <strong>{x}</strong>. Se mostrarán todos los errores lanzados mientras se envía el correo.', // Don't replace {x}
    'send' => 'Enviar',
    'test_email_error' => 'Error de prueba de correo electrónico:',
    'test_email_success' => 'Correo electrónico de prueba enviado con éxito!',
    'terms_error' => 'Asegúrese de que sus términos y condiciones no superen los 2048 caracteres..',
    'terms_updated' => 'Términos actualizados con éxito.',
    'avatars' => 'Avatares',
    'allow_custom_avatars' => 'Permitir avatares de usuario personalizados?',
    'default_avatar' => 'Avatar por defecto',
    'custom_avatar' => 'Avatar personalizado',
    'minecraft_avatar' => 'Minecraft avatar',
    'minecraft_avatar_source' => 'Minecraft avatar fuente',
    'built_in_avatars' => 'Servicio de avatar integrado',
    'minecraft_avatar_perspective' => 'Minecraft avatar perspectiva',
    'face' => 'Cara',
    'head' => 'Cabeza',
    'select_default_avatar' => 'Seleccione un nuevo avatar predeterminado:',
    'no_avatars_available' => 'No hay avatares disponibles. Sube una nueva imagen por encima de la primera.',
    'avatar_settings_updated_successfully' => 'Configuración de avatar actualizada correctamente.',
    'navigation' => 'Navegación',
    'navbar_order' => 'Orden de la barra de navegación',
    'navbar_order_instructions' => 'Puede dar a cada elemento un número superior a 0 para ordenar artículos en la barra de navegación, siendo 1 el primer artículo y los números más altos que vendrán después.',
    'navbar_icon' => 'Icono de navegación',
    'navbar_icon_instructions' => 'También puede agregar un ícono a cada elemento de la barra de navegación aquí, por ejemplo usando <a href="https://fontawesome.com/v4.7.0/" target="_blank" rel="noopener nofollow">Font Awesome</a>.',
    'dropdown_items' => 'Elementos desplegables',
    'enable_page_load_timer' => 'Activar tiempo de carga?',
    'google_recaptcha' => 'Activar Google reCAPTCHA?',
    'recaptcha_site_key' => 'reCAPTCHA Site Key',
    'recaptcha_secret_key' => 'reCAPTCHA Secret Key',
    'registration_disabled_message' => 'Registro deshabilitado',
    'enable_nicknames_on_registration' => 'Habilitar nicknames para registrar usuarios?',
    'validation_promote_group' => 'Grupo de validación posterior',
    'validation_promote_group_info' => 'Este es el grupo al que se proporcionará a un usuario una vez que haya validado su cuenta.',
    'login_method' => 'Método de ingreso',
    'privacy_and_terms' => 'Política de privacidad y términos y condiciones',

	// Reactions
	'icon' => 'Icono',
	'type' => 'Tipo',
	'positive' => 'Me gusta',
	'neutral' => 'Neutral',
	'negative' => 'No me gusta',
	'editing_reaction' => 'Editar reacciones',
	'html' => 'HTML',
	'new_reaction' => '<i class="fa fa-plus-circle"></i> Nueva Reacción',
	'creating_reaction' => 'Crear Reacción',

	// Custom profile fields
	'custom_fields' => 'Campos del perfil personalizado',
	'new_field' => '<i class="fa fa-plus-circle"></i> Nuevo campo',
	'required' => 'Requiere',
	'public' => 'Publico',
	'text' => 'Texto',
	'textarea' => 'Area de texto',
	'date' => 'Fecha',
	'creating_profile_field' => 'Creación de un campo de perfil',
	'editing_profile_field' => 'Edición del campo de perfil',
	'field_name' => 'Field Name',
	'profile_field_required_help' => 'Los campos obligatorios deben ser llenados por el usuario, y aparecerán durante el registro.',
	'profile_field_public_help' => 'Los campos públicos se mostrarán a todos los usuarios, si está desactivado sólo los moderadores pueden ver los valores.',
	'profile_field_error' => 'Introduzca un nombre de campo entre 2 y 16 caracteres.',
	'description' => 'Descripción',
	'display_field_on_forum' => 'Mostrar campo en el foro?',
	'profile_field_forum_help' => 'Si está activado, el campo se mostrará por el usuario junto a los mensajes del foro.',

    // Minecraft
    'enable_minecraft_integration' => 'Habilitar la integración de Minecraft?',
    'mc_service_status' => 'Estado del servicio Minecraft',
    'service_query_error' => 'No se puede recuperar el estado del servicio.',
    'authme_integration' => 'Integración AuthMe',
    'authme_integration_info' => 'Cuando la integración de AuthMe está habilitada, los usuarios sólo pueden registrarse en el juego.',
    'enable_authme' => 'Habilitar la integración de AuthMe?',
    'authme_db_address' => 'AuthMe Database Dirección',
    'authme_db_port' => 'Puerto de base de datos AuthMe',
    'authme_db_name' => 'Nombre de la base de datos AuthMe',
    'authme_db_user' => 'AuthMe Database Nombre de usuario',
    'authme_db_password' => 'Contraseña de la base de datos AuthMe',
    'authme_hash_algorithm' => 'AuthMe Hashing Algorithm',
    'authme_db_table' => 'Tabla de usuarios de AuthMe',
    'enter_authme_db_details' => 'Introduce datos válidos de la base de datos.',
    'authme_password_sync' => 'Sincronizar contraseña AuthMe?',
    'authme_password_sync_help' => 'Si está activada, siempre que la contraseña de un usuario se actualice en el juego, la contraseña también se actualizará en el sitio web.',
    'minecraft_servers' => 'Minecraft Servidores',
    'account_verification' => 'Verificación de la cuenta de Minecraft',
    'server_banners' => 'Banners de servidor',
    'query_errors' => 'Errores de consulta',
    'add_server' => '<i class="fa fa-plus-circle"></i> Agregar servidor',
    'no_servers_defined' => 'No se han definido aún servidores',
    'query_settings' => 'Configuración de consultas',
    'default_server' => 'Servidor predeterminado',
    'no_default_server' => 'No hay servidor predeterminado',
    'external_query' => 'Usar consulta externa?',
    'external_query_help' => 'Si la consulta predeterminada del servidor no funciona, habilite esta opción.',
    'adding_server' => 'Adición de servidor',
    'server_name' => 'Nombre del Servidor',
    'server_address' => 'IP del servidor',
    'server_address_help' => 'Esta es la dirección IP o dominio utilizado para conectarse a su servidor, sin el puerto.',
    'server_port' => 'Puerto del servidor',
    'parent_server' => 'Parent Server',
    'parent_server_help' => 'Un servidor padre suele ser la instancia de BungeeCord a la que está conectado el servidor, si es que existe.',
    'no_parent_server' => 'No hay servidor padre',
    'bungee_instance' => 'BungeeCord instancia?',
    'bungee_instance_help' => 'Seleccione esta opción si el servidor es una instancia de BungeeCord.',
    'server_query_information' => 'Con el fin de mostrar una lista de jugadores en línea en su sitio web, su servidor <strong>must</strong> tener   el \'enable-query\' habilitada en el servidor <strong>server.properties</strong> archivo',
    'enable_status_query' => 'Habilitar consulta de estado?',
    'status_query_help' => 'Si esta opción está activada, la página de estado mostrará este servidor en línea o fuera de línea.',
    'enable_player_list' => 'Activar lista de jugadores?',
    'pre_1.7' => 'Minecraft versión anterior a 1.7?',
    'player_list_help' => 'Si está activado, la página de estado mostrará una lista de jugadores en línea.',
    'server_query_port' => 'Puerto de consulta del servidor',
    'server_query_port_help' => 'Esta es la opción query.port en el archivo server.properties de su servidor, siempre que la opción enable-query del mismo archivo esté establecida en true.',
    'server_name_required' => 'Introduzca el nombre del servidor',
    'server_name_minimum' => 'Asegúrese de que su nombre de servidor sea un mínimo de 1 carácter',
    'server_name_maximum' => 'Asegúrese de que su nombre de servidor sea un máximo de 20 caracteres',
    'server_address_required' => 'Introduzca la dirección del servidor',
    'server_address_minimum' => 'Asegúrese de que la dirección de su servidor es de un mínimo de 1 carácter',
    'server_address_maximum' => 'Asegúrese de que la dirección de su servidor sea un máximo de 64 caracteres',
    'server_port_required' => 'Introduzca el puerto del servidor',
    'server_port_minimum' => 'Asegúrese de que su puerto de servidor sea un mínimo de 2 caracteres',
    'server_port_maximum' => 'Asegúrese de que el puerto del servidor tenga un máximo de 5 caracteres',
    'server_parent_required' => 'Seleccione un servidor principal',
    'query_port_maximum' => 'Asegúrese de que su puerto de consulta tenga un máximo de 5 caracteres',
    'server_created' => 'Servidor se a creado correctamente.',
    'confirm_delete_server' => '¿Está seguro de que desea eliminar este servidor??',
    'server_updated' => 'Servidor actualizado con éxito.',
    'editing_server' => 'Edición del servidor',
    'server_deleted' => 'Servidor eliminado correctamente',
    'unable_to_delete_server' => 'No se puede eliminar el servidor.',
    'leave_port_empty_for_srv' => 'Puede el puerto vacío si es 25565, o si su dominio utiliza un registro SRV',
    'viewing_query_error' => 'Visualización del error de consulta',
    'confirm_query_error_deletion' => '¿Está seguro de que desea eliminar este error de consulta?',
    'no_query_errors' => 'No se han registrado errores de consulta.',
    'new_banner' => '<i class="fa fa-plus-circle"></i> Nuevo Banner',
    'purge_errors' => 'Errores de purga',
    'confirm_purge_errors' => '¿Está seguro de que desea purgar todos los errores??',
    'mcassoc_help' => 'Mcassoc es un servicio externo que se puede utilizar para verificar que los usuarios poseen la cuenta de Minecraft con la que se han registrado. Para utilizar esta función, deberá registrarse en una clave compartida <a href="https://mcassoc.lukegb.com/" target="_blank">here</a>.',
    'mcassoc_key' => 'Mcassoc llave compartida',
    'mcassoc_instance' => 'Mcassoc llave de instancia',
    'mcassoc_instance_help' => '<a href="#" onclick="generateInstance();">Click para generar una clave de instancia</a>',
    'mcassoc_error' => 'Asegúrese de que ha introducido correctamente su clave compartida y de que ha generado correctamente una clave de instancia.',
    'updated_mcassoc_successfully' => 'Mcassoc configuración actualizada correctamente.',
    'force_premium_accounts' => 'Forzar cuentas premium de Minecraft?',
    'banner_background' => 'Banner background',
    'query_interval' => 'Query interval (in minutes, must be between 5 and 60)',
    'player_graphs' => 'Gráficos del jugador',
    'player_count_cronjob_info' => 'You can set up a cron job to query your servers every {x} minutes with the following command:',

	// Modules
	'modules_installed_successfully' => 'Any new modules have been installed successfully.',
	'enabled' => 'Activado',
	'disabled' => 'Disactivado',
	'enable' => 'Activado',
	'disable' => 'Disactivado',
	'module_enabled' => 'Modulo activado.',
	'module_disabled' => 'Modulo disactivado.',
	'author' => 'Author:',

	// Styles
	'templates' => 'Temas',
	'template_outdated' => 'Hemos detectado que su plantilla está destinada a la versión Namelessmc {x}, pero estás ejecutando la versión Namelessmc {y}', // Don't replace "{x}" or "{y}"
	'active' => 'Activo',
	'deactivate' => 'Desactivado',
	'activate' => 'Activado',
	'warning_editing_default_template' => '¡Advertencia! Se recomienda no editar la plantilla predeterminada.',
	'images' => 'Imagenes',
	'upload_new_image' => 'Subir nueva imagen',
	'reset_background' => 'Restablecer fondo',
	'install' => '<i class="fa fa-plus-circle"></i> Instalar',
	'template_updated' => 'Plantilla actualizada correctamente.',
	'default' => 'Por defecto',
	'make_default' => 'Hacer por defecto',
	'default_template_set' => 'Plantilla predeterminada establecida en {x} exitosamente.', // Don't replace {x}
	'template_deactivated' => 'Tema deactivado.',
	'template_activated' => 'Tema activado.',
	'permissions' => 'Permisos',
	'setting_perms_for_x' => 'Setting permissions for template {x}', // Don't replace {x}
	'templates_installed_successfully' => 'Any new templates have been installed successfully.',
	'confirm_delete_template' => 'Are you sure you want to delete this template?',
	'delete' => 'Delete',
	'template_deleted_successfully' => 'Template deleted successfully.',
    'background_image_x' => 'Background image: <strong>{x}</strong>', // Don't replace {x}

	// Users & groups
	'users' => 'Usuarios',
	'groups' => 'Grupos',
	'group' => 'Grupo',
	'new_user' => '<i class="fa fa-plus-circle"></i> Nuevo Usuario',
	'creating_new_user' => 'Crear nuevo usuario',
	'registered' => 'Registrado',
	'user_created' => 'Usuario creado correctamente.',
	'cant_delete_root_user' => 'No se puede eliminar el usuario root!',
	'cant_modify_root_user' => 'No se puede modificar el grupo del usuario root!',
	'user_deleted' => 'Usuario eliminado correctamente.',
	'confirm_user_deletion' => '¿Está seguro de que desea eliminar el usuario <strong>{x}</strong>?', // Don't replace {x}
	'validate_user' => 'Validar usuario',
	'update_uuid' => 'Actualizar UUID',
	'update_mc_name' => 'Actualizar el nombre de usuario de Minecraft',
	'reset_password' => 'Restablecer la contraseña',
	'punish_user' => 'Castigar usuario',
	'delete_user' => 'Borrar usuario',
	'minecraft_uuid' => 'Minecraft UUID',
	'other_actions' => 'Otras acciones',
	'disable_avatar' => 'Desactivar Avatar',
	'select_user_group' => 'Debe seleccionar un grupo de usuarios.',
	'uuid_max_32' => 'El UUID debe tener un máximo de 32 caracteres.',
	'title_max_64' => 'El título de usuario debe tener un máximo de 64 caracteres.',
	'group_id' => 'Grupo ID',
	'name' => 'Nombre',
	'title' => 'Titulo del usuario',
	'new_group' => '<i class="fa fa-plus-circle"></i> Nuevo Grupo',
	'group_name_required' => 'Introduzca un nombre de grupo.',
	'group_name_minimum' => 'Asegúrese de que su nombre de grupo tenga un mínimo de 2 caracteres.',
	'group_name_maximum' => 'Please ensure your group name is a maximum of 20 characters long.',
	'creating_group' => 'Crear nuevo grupo',
	'group_html_maximum' => 'Asegúrese de que el HTML de su grupo no tenga más de 1024 caracteres.',
	'group_html' => 'Grupo HTML',
	'group_html_lg' => 'Grupo HTML grande',
	'group_username_colour' => 'Nombre de usuario del grupo',
	'group_staff' => 'Es el grupo un grupo de personal?',
	'group_modcp' => 'Puede el grupo ver el ModCP?',
	'group_admincp' => 'Puede el grupo ver el AdminCP?',
	'delete_group' => 'Eliminar grupo',
	'confirm_group_deletion' => 'Seguro que desea eliminar el grupo {x}?', // Don't replace {x}
	'group_not_exist' => 'Ese grupo no existe.',
	'secondary_groups' => 'Secondary Groups',
	'secondary_groups_info' => 'The user will gain any additional permissions from these groups. Ctrl+click to select/deselect multiple groups.',
	'unable_to_update_uuid' => 'No se puede actualizar UUID.',
	'default_group' => 'Is the group the default group (for new users)?',

	// Permissions
	'select_all' => 'Select All',
	'deselect_all' => 'Deselect All',
	'background_image' => 'Background image',
	'can_edit_own_group' => 'Can edit own group\'s permissions',
	'permissions_updated_successfully' => 'Permissions updated successfully.',
	'cant_edit_this_group' => 'You can\'t edit this group\'s permissions!',

	// General Admin language
	'task_successful' => 'Tarea exitosa.',
	'invalid_action' => 'Acción no válida.',
	'enable_night_mode' => 'Activar modo nocturno',
	'disable_night_mode' => 'Desactivar el modo nocturno',
	'view_site' => 'Ver el sitio',
	'signed_in_as_x' => 'Registrado como {x}', // Don't replace {x}
    'warning' => 'Advertencia',

    // Maintenance
    'maintenance_mode' => 'Modo de mantenimiento',
    'maintenance_enabled' => 'El modo de mantenimiento está activado.',
    'enable_maintenance_mode' => 'Habilitar modo de mantenimiento?',
    'maintenance_mode_message' => 'Mensaje de modo de mantenimiento',
    'maintenance_message_max_1024' => 'Asegúrese de que su mensaje de mantenimiento tenga un máximo de 1024 caracteres.',

	// Security
	'acp_logins' => 'AdminCP Inicios de sesión',
	'please_select_logs' => 'Por favor, seleccione registros para ver',
	'ip_address' => 'Direccion IP',
	'template_changes' => 'Cambios de temas',
	'file_changed' => 'Archivo cambiado',

	// Updates
	'update' => 'Actualizar',
	'current_version_x' => 'Versión actual: <strong>{x}</strong>', // Don't replaec {x}
	'new_version_x' => 'Nueva versión: <strong>{x}</strong>', // Don't replace {x}
	'new_update_available' => 'Hay una nueva actualización disponible',
	'up_to_date' => 'La instalación de NamelessMC está actualizada!',
	'urgent' => 'Esta actualización es una actualización urgente',
	'changelog' => 'Registro de cambios',
	'update_check_error' => 'Se ha producido un error al comprobar si hay una actualización:',
	'instructions' => 'Instrucciones',
	'download' => 'Descargar',
	'install_confirm' => 'Asegúrese de haber descargado el paquete y cargado primero los archivos contenidos!',

	// Widgets
	'widgets' => 'Widgets',
	'widget_enabled' => 'Widget enabled.',
	'widget_disabled' => 'Widget disabled.',
	'editing_widget_x' => 'Editing widget {x}', // Don't replace {x}
	'module_x' => 'Module: {x}', // Don't replace {x}

    // Online users widget
    'include_staff_in_user_widget' => 'Include staff members in user widget?',

    // Custom Pages
    'pages' => 'Pages',
    'new_page' => '<i class="fa fa-plus-circle"></i> New Page',
    'no_custom_pages' => 'No pages have been created yet.',
    'creating_new_page' => 'Creating Page',
    'page_title' => 'Page Title',
    'page_path' => 'Page Path (with preceding /, eg /example)',
    'page_icon' => 'Page Icon',
    'page_link_location' => 'Page Link Location',
    'page_link_navbar' => 'Navbar',
    'page_link_footer' => 'Footer',
    'page_link_more' => '"More" Dropdown',
    'page_link_none' => 'No link',
    'page_content' => 'Page Content',
    'page_redirect' => 'Page Redirect?',
    'page_redirect_to' => 'Redirect Link (with preceding http://)',
    'unsafe_html' => 'Allow unsafe HTML?',
    'unsafe_html_warning' => 'Enabling this option means any HTML can be used on the page, including potentially dangerous JavaScript. Only enable this if you are sure your HTML is safe.',
    'page_permissions' => 'Page Permissions',
    'view_page' => 'View Page?',
    'editing_page_x' => 'Editing Page {x}', // Don't replace {x}
    'unable_to_create_page' => 'Unable to create page:',
    'page_title_required' => 'A page title is required.',
    'page_url_required' => 'A page path is required.',
    'link_location_required' => 'A link location is required.',
    'page_title_minimum_2' => 'The page title must be a minimum of 2 characters.',
    'page_url_minimum_2' => 'The page path must be a minimum of 2 characters.',
    'page_title_maximum_30' => 'The page title must be a maximum of 30 characters.',
    'page_icon_maximum_64' => 'The page icon must be a maximum of 64 characters.',
    'page_url_maximum_20' => 'The page path must be a maximum of 20 characters.',
    'page_content_maximum_20480' => 'The page content must be a maximum of 20480 characters.',
    'page_redirect_link_maximum_512' => 'The page redirect link must be a maximum of 512 characters.',
    'confirm_delete_page' => 'Are you sure you want to delete this page?',

    // API
    'api' => 'API',
    'enable_api' => 'Enable API?',
    'api_info' => 'The API allows for plugins and other services to interact with your website, such as the <a href="https://namelessmc.com/resources/resource/5-namelessplugin/" target="_blank" >official Nameless plugin</a>.',
    'enable_legacy_api' => 'Enable legacy API?',
    'legacy_api_info' => 'The legacy API allows plugins which use the old Nameless version 1 API to work with your version 2 website.',
    'confirm_api_regen' => 'Are you sure you want to regenerate your API key?',
    'api_registration_email' => 'API Registration Email',
    'link_to_complete_registration' => 'Link to complete registration: {x}', // Don't replace {x}
    'api_verification' => 'Enable API verification?',
    'api_verification_info' => 'If enabled, accounts can only be verified through the API, for example ingame using the official Nameless plugin. <strong>This option will override email verification, and accounts will be automatically activated!</strong><br />You should set up your default group to have limited permissions, and then update the post-validation group in the AdminCP -> Core -> Registration tab to the full member group with normal permissions.',
    'enable_username_sync' => 'Enable username sync?',
    'enable_username_sync_info' => 'If enabled, website usernames will be updated to match ingame usernames.',

	// File uploads
	'drag_files_here' => 'Arrastre los archivos aquí para cargarlos.',
	'invalid_file_type' => 'Tipo de archivo invalido!',
	'file_too_big' => 'Archivo demasiado grande! Su archivo pesa {{filesize}} y el límite es {{maxFilesize}}', // Don't replace {{filesize}} or {{maxFilesize}}
	'allowed_proxies' => 'Allowed Proxies',
	'allowed_proxies_info' => 'Line separated list of allowed proxy IPs.',

	// Error logs
	'error_logs' => 'Error Logs',
	'notice_log' => 'Notice log',
	'warning_log' => 'Warning log',
	'custom_log' => 'Custom log',
	'other_log' => 'Other log',
	'fatal_log' => 'Fatal log',
	'log_file_not_found' => 'Log file not found.',

	// Hooks
	'discord_hooks' => 'Discord Hooks',
	'discord_hooks_info' => 'Send a message to a Discord channel when something happens on your site. Create a Discord hook in your Discord Server Settings -> Webhooks tab.',
	'discord_hook_url' => 'Discord webhook URL',
	'discord_hook_events' => 'Enabled Discord hook events (Ctrl+click to select multiple events)',
	'register_hook_info' => 'User registration',
	'validate_hook_info' => 'User validation'
);
