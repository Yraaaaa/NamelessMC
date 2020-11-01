<?php 
/*
 *  Translations by Svevende & Maiu
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr8
 *
 *  License: MIT
 *
 *  Norwegian Language for Forum module
 */

$language = array(
    /*
     *  Forums
     */ 
    'forum' => 'Forum',
    'forums' => 'Forum',
    'forum_index' => 'Hjem',
    'no_users_online' => 'Ingen brukere pålogget',
    'online_users' => 'Brukere pålogget',
    'discussion' => 'Diskusjon',
    'topic' => 'Tråd',
    'stats' => 'Statistikk',
    'topics' => 'Tråder',
    'views' => 'Visninger',
    'posts' => 'Innlegg',
    'by' => 'Av',
    'x_posts' => '{x} innlegg', // Don't replace {x}
    'x_topics' => '{x} tråder', // Don't replace {x}
    'registered_x' => 'Ble medlem: {x}', // Don't replace {x}
    'in' => 'i',
    'last_reply' => 'Siste kommentar',
    'latest_discussions' => 'Siste diskusjoner',
    'users_registered' => '<strong>Brukere registrert:</strong> {x}', // Don't replace "{x}"
    'latest_member' => '<strong>Siste medlem:</strong> {x}', // Don't replace "{x}"
    'subforums' => 'Underforum',
    'subforum' => 'Underforum',
    'no_topics' => 'Ingen tråder har blitt laget enda.',
    'no_topics_short' => 'Ingen tråder',
    'new_topic' => 'Ny tråd',
    'post_successful' => 'Publisert.',
    'post_edited_successfully' => 'Innlegget har blitt redigert.',
    'user_tag' => 'Du har blitt omtalt.',
    'user_tag_info' => 'Du har blitt omtalt av {x}.', // Don't replace "{x}"
    'creating_topic_in_x' => 'Lager tråd i {x}', // Don't replace "{x}"
    'topic_title' => 'Tittel',
    'new_reply' => 'Nytt svar',
    're' => 'Svar: ',
    'topic_locked' => 'Tråd lukket',
    'mod_actions' => 'Modereringsverktøy',
    'lock_topic' => 'Lukk tråd',
    'unlock_topic' => 'Åpne tråd',
    'merge_topic' => 'Flett tråd',
    'merge_topics' => 'Flett tråder',
    'merge_instructions' => 'Tråden du vil slå sammen med <strong>må</strong> være i samme forum. Flytt tråden hvis den ikke er det.',
    'confirm_delete_short' => 'Slett',
    'confirm_delete_topic' => 'Er du sikker på at du vil slette denne tråden?',
    'confirm_delete_post' => 'Er du sikker på at du vil slette dette innlegget?',
    'delete_topic' => 'Slett tråd',
    'move_topic' => 'Flytt tråd',
    'move_topic_to' => 'Flytt tråd til:',
    'stick_topic' => 'Fest tråd',
    'unstick_topic' => 'Ikke fest tråd',
    'share' => 'Del',
    'share_twitter' => 'Del på Twitter',
    'share_facebook' => 'Del på Facebook',
    'edit' => 'Rediger',
    'edit_post' => 'Rediger innlegg',
    'last_edited' => 'Sist redigert: {x}', // Don't replace "{x}"
    'quote' => 'Sitér',
    'topic_locked_notice' => 'Denne tråden er lukket, men du har tilgang til å svare på den.',
    'title_required' => 'Vennligst oppgi en tittel',
    'content_required' => 'Innlegget ditt må ha et innhold',
    'title_min_2' => 'Tittelen må være minst 2 bokstaver',
    'title_max_64' => 'Tittelen må være maks 64 bokstaver',
    'content_min_2' => 'Innholdet må være minst 2 bokstaver',
    'content_max_50000' => 'Innholdet må være maks 50000 bokstaver',
    'post_already_reported' => 'Du har allerede rapportert dette innlegget',
    'quoted_post' => 'Innlegg lagt til i siterte innlegg.',
    'removed_quoted_post' => 'Innlegg fjernet fra siterte innlegg.',
    'insert_quotes' => 'Legg til sitater',
    'quoting_posts' => 'Legger til sitater..',
    'error_quoting_posts' => 'Beklager, men det oppstod et problem.',
    'error_rating_post' => 'Beklager, men det oppstod et problem.',
    'topic_stuck' => 'Tråden har blitt festet.',
    'topic_unstuck' => 'Tråden har blitt løsnet.',
    'spam_wait' => 'Vennligst vent {x} før du publiserer noe igjen.',
    'overview' => 'Oversikt',
    'no_label' => 'Ingen etikett',
    'forum_redirect_warning' => 'Advarsel: Du er i ferd med å forlate denne siden. Er du sikker på at du vil fortsette til {x}?',
    'follow' => 'Følg',
    'unfollow' => 'Slutt å følge',
    'now_following_topic' => 'Du følger nå denne tråden, og vil bli varslet dersom noen svarer på den.',
    'no_longer_following_topic' => 'Du har sluttet å følge denne tråden, og vil ikke lenger bli varslet dersom noen svarer på den. ',
    'new_reply_in_topic' => '{x} har svart på tråden {y}', // Don't replace {x} (username) or {y} (topic title)
    'started_by_x' => 'Startet av {x}', // Don't replace {x}
    'sticky_topics' => 'Festede tråder',
    
    // Homepage
    'latest_announcements' => 'Siste kunngjøring',
    'read_full_post' => 'Les hele tråden',
    
    // Admin tab
    'labels' => 'Etiketter',
    'new_forum' => '<i class="fa fa-plus-circle"></i> Nytt forum',
    'new_label' => '<i class="fa fa-plus-circle"></i> Ny etikett',
    'new_label_type' => '<i class="fa fa-plus-circle"></i> Ny etikettype',
    'label_types' => 'Etikettyper',
    'creating_label' => 'Lager ny etikett',
    'creating_label_type' => 'Lager ny etikettype',
    'editing_label' => 'Redigerer etikett',
    'editing_label_type' => 'Redigerer etikettype',
    'label_name' => 'Etikettnavn',
    'label_type' => 'Etikettype',
    'label_type_name' => 'Etikettype-navn',
    'label_type_html' => 'Etikettype-HTML',
    'label_type_html_help' => 'HTMLen må inneholde {x} som en plasseholder for etikettnavnet',
    'label' => 'Etikett',
    'label_forums' => 'Etikettforum',
    'label_groups' => 'Etikettgrupper',
    'no_forums' => 'Ingen forum',
    'no_labels_defined' => 'Ingen etiketter er definert.',
    'no_label_types_defined' => 'Ingen etikettyper er definert.',
    'label_edit_success' => 'Etiketten har blitt oppdatert.',
    'label_type_edit_success' => 'Etikettypen har blitt oppdatert.',
    'label_creation_success' => 'Etiketten har blitt opprettet.',
    'label_type_creation_success' => 'Etikettypen har blitt opprettet.',
    'label_creation_error' => 'Beklager, men det oppstod et problem.',
    'label_type_creation_error' => 'Beklager, men det oppstod et problem.',
    'creating_forum' => 'Lager nytt forum',
    'forum_name' => 'Forumnavn',
    'forum_description' => 'Forumbeskrivelse',
    'delete_forum' => 'Slett forum',
    'move_topics_and_posts_to' => 'Flytt tråder og innlegg til',
    'delete_topics_and_posts' => 'Slett tråder og innlegg',
    'forum_permissions' => 'Forumrettigheter',
    'select_a_parent_forum' => 'Velg et overordnet forum',
    'parent_forum' => 'Overordnet forum',
    'parent_forum_x' => 'Overordnet forum: {x}', // Don't replace {x}
    'has_no_parent' => 'Ingen overordnet forum',
    'guests' => 'Gjester',
    'group' => 'Gruppe',
    'can_view_forum' => 'Kan se forum?',
    'can_view_other_topics' => 'Kan se andre brukeres tråder?',
    'can_create_topic' => 'Kan opprette tråder?',
    'can_edit_topic' => 'Kan redigere deres tråder?',
    'can_post_reply' => 'Kan svare på tråden?',
    'can_moderate_forum' => 'Kan moderere tråden?',
    'display_topics_as_news' => 'Skal denne tråden være synlig på forsiden?',
    'forum_created_successfully' => 'Forumet har blitt opprettet',
    'forum_layout' => 'Forumoppsett',
    'table_view' => 'Etikettvisninger:',
    'latest_discussions_view' => 'Siste diskusjoners visninger:',
    'input_forum_title' => 'Vennligst oppgi en tittel.',
    'input_forum_description' => 'Vennligst oppgi en beskrivelse.',
    'forum_name_minimum' => 'Navnet må være minst 2 bokstaver.',
    'forum_description_minimum' => 'Beskrivelsen må være minst 2 bokstaver.',
    'forum_name_maximum' => 'Forumnavnet må være maks 64 bokstaver.',
    'forum_description_maximum' => 'Forumbeskrivelsen må være maks 255 bokstaver.',
    'forum_type' => 'Forumtype',
    'forum_type_forum' => 'Forum',
    'forum_type_category' => 'Kategori',
    'invalid_action' => 'Ugyldig handling',
    'use_reactions' => 'Bruk reaksjoner?',
    'redirect_forum' => 'Omdiriger forum?',
    'redirect_url' => 'Omdirigerings-URL',
    'invalid_redirect_url' => 'Du har aktivert forumomdirigering, men har ikke oppgitt en gyldig URL mellom 1 og 512 tegn.',
    'forum_icon' => 'Forumikon',
    'forum_icon_maximum' => 'Forumikonet må være maksimum 256 tegn.',
    'settings_updated_successfully' => 'Innstillingene har blitt oppdatert',
    'forum_updated_successfully' => 'Forumet har blitt oppdatert.',
    'forum_deleted_successfully' => 'Forumet har blitt slettet.',
    'label_deleted_successfully' => 'Etiketten har blitt slettet.',
    'label_type_deleted_successfully' => 'Etikettypen har blitt slettet.',
    'topic_placeholder' => 'Plassholder for tråd',

    // Search
    'forum_search' => 'Søk i forumet',
    'search_again_in_x_seconds' => 'Vennligst vent {x} sekunder før du søker igjen.',
    'search_results' => 'Søkeresultater',
    'new_search' => 'Nytt søk',
    'invalid_search_query' => 'Søk på nytt.',
    'no_results_found' => 'Ingen resultater funnet.',
    
    // Profile tab
    'user_no_posts' => 'Denne brukeren har ingen innlegg enda.',
    'latest_posts' => 'Siste innlegg',

    // UserCP
    'last_7_days_posts' => 'Foruminnlegg (siste 7 dager)',
    'your_posts' => 'Dine innlegg',
    'average_posts' => 'Gjennomsnittlig antall innlegg',
    'total_posts' => 'Totalt antall innlegg',

    // Hooks
    'new_topic_hook_info' => 'Ny tråd',
    'new_topic_text' => 'Tråd opprettet i {x} av {y}', // Don't replace {x} (forum name), optional variable {y} (topic author)
    'include_in_hook' => 'Inkluder nye tråder fra dette forumet i webhooks?',
    'available_hooks' => 'Tilgjengelig Hooks',
    // Panel statistics
    'recent_topics' => 'Siste tråder',
    'recent_topics_statistic_icon' => '<i class="fas fa-comment"></i>',
    'recent_posts' => 'Siste innlegg',
    'recent_posts_statistic_icon' => '<i class="far fa-comments"></i>',
    'topics_title' => 'Tråder',
    'posts_title' => 'Innlegg',
);
