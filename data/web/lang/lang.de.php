<?php
/*
 * German language file
 */

$lang['footer']['loading'] = 'Einen Moment bitte...';
$lang['header']['restart_sogo'] = 'SOGo neustarten';
$lang['footer']['restart_sogo'] = 'SOGo neustarten';
$lang['footer']['restart_now'] = 'Jetzt neustarten';
$lang['footer']['restart_sogo_info'] = 'Einige Änderungen an Domains benötigen einen Neustart SOGos. Hier können Sie SOGo neustarten.<br><br><b>Wichtig:</b> Ein korrekter Neustart SOGos kann eine Weile in Anspruch nehmen, bitte warten Sie, bis der Prozess vollständig beendet wurde.';

$lang['footer']['confirm_delete'] = 'Löschen bestätigen';
$lang['footer']['delete_these_items'] = 'Sind Sie sicher, dass die Änderungen an Elementen mit folgender ID durchgeführt werden sollen?';
$lang['footer']['delete_now'] = 'Jetzt löschen';
$lang['footer']['cancel'] = 'Abbrechen';

$lang['dkim']['confirm'] = 'Sind Sie sicher?';
$lang['danger']['dkim_not_found'] = 'DKIM-Key nicht gefunden';
$lang['danger']['dkim_remove_failed'] = 'Kann DKIM-Key nicht entfernen';
$lang['danger']['dkim_add_failed'] = 'Kann DKIM-Key nicht hinzufügen';
$lang['danger']['dkim_domain_or_sel_invalid'] = 'DKIM-Domain oder -Selector nicht korrekt';
$lang['danger']['dkim_key_length_invalid'] = 'DKIM Schlüssellänge ungültig';
$lang['success']['dkim_removed'] = 'DKIM-Key wurde entfernt';
$lang['success']['dkim_added'] = 'DKIM-Key wurde hinzugefügt';
$lang['danger']['access_denied'] = 'Zugriff verweigert oder unvollständige/ungültige Daten';
$lang['danger']['whitelist_from_invalid'] = 'Whitelist-Eintrag ist ungültig';
$lang['danger']['domain_invalid'] = 'Domainname ist ungültig';
$lang['danger']['mailbox_quota_exceeds_domain_quota'] = 'Maximale Größe für Mailboxen überschreitet das Domain Speicherlimit';
$lang['danger']['object_is_not_numeric'] = 'Wert %s ist nicht numerisch';
$lang['success']['domain_added'] = 'Domain %s wurde angelegt';
$lang['success']['items_deleted'] = "Objekt(e) %s wurde(n) erfolgreich entfernt";
$lang['danger']['alias_empty'] = 'Alias-Adresse darf nicht leer sein';
$lang['danger']['goto_empty'] = 'Ziel-Adresse darf nicht leer sein';
$lang['danger']['policy_list_from_exists'] = 'Ein Eintrag mit diesem Wert existiert bereits';
$lang['danger']['policy_list_from_invalid'] = 'Eintrag hat ungültiges Format';
$lang['danger']['alias_invalid'] = 'Alias-Adresse ist ungültig';
$lang['danger']['goto_invalid'] = 'Ziel-Adresse ist ungültig';
$lang['danger']['last_key'] = 'Letzter Key kann nicht gelöscht werden';
$lang['danger']['alias_domain_invalid'] = 'Alias-Domain ist ungültig';
$lang['danger']['target_domain_invalid'] = 'Ziel-Domain ist ungültig';
$lang['danger']['object_exists'] = 'Objekt %s existiert bereits';
$lang['danger']['domain_exists'] = 'Domain %s existiert bereits';
$lang['danger']['alias_goto_identical'] = 'Alias- und Ziel-Adresse dürfen nicht identisch sein';
$lang['danger']['aliasd_targetd_identical'] = 'Alias-Domain darf nicht gleich Ziel-Domain sein';
$lang['danger']['maxquota_empty'] = 'Max. Speicherplatz pro Mailbox darf nicht 0 sein.';
$lang['success']['alias_added'] = 'Alias-Adresse(n) wurden angelegt';
$lang['success']['alias_modified'] = 'Änderungen an Alias %s wurden gespeichert';
$lang['success']['aliasd_modified'] = 'Änderungen an Alias-Domain %s wurden gespeichert';
$lang['success']['mailbox_modified'] = 'Änderungen an Mailbox %s wurden gespeichert';
$lang['success']['resource_modified'] = "Änderungen an Ressource %s wurden gespeichert";
$lang['success']['object_modified'] = "Änderungen an Objekt %s wurden gespeichert";
$lang['success']['f2b_modified'] = "Änderungen an Fail2ban Parametern wurden gespeichert";
$lang['success']['msg_size_saved'] = 'Limit wurde gesetzt';
$lang['danger']['aliasd_not_found'] = 'Alias-Domain nicht gefunden';
$lang['danger']['targetd_not_found'] = 'Ziel-Domain nicht gefunden';
$lang['danger']['aliasd_exists'] = 'Alias-Domain existiert bereits';
$lang['success']['aliasd_added'] = 'Alias-Domain %s wurde angelegt';
$lang['success']['aliasd_modified'] = 'Änderungen an Alias-Domain %s wurden gespeichert';
$lang['success']['domain_modified'] = 'Änderungen an Domain %s wurden gespeichert';
$lang['success']['domain_admin_modified'] = 'Änderungen an Domain-Administrator %s wurden gespeichert';
$lang['success']['domain_admin_added'] = 'Domain-Administrator %s wurde angelegt';
$lang['success']['changes_general'] = 'Änderungen wurden gespeichert';
$lang['success']['admin_modified'] = 'Änderungen am Administrator wurden gespeichert';
$lang['danger']['exit_code_not_null'] = 'Fehler: Exit-Code ist %d';
$lang['danger']['mailbox_not_available'] = 'Mailbox nicht verfügbar';
$lang['danger']['username_invalid'] = 'Benutzername kann nicht verwendet werden';
$lang['danger']['password_mismatch'] = 'Passwort-Wiederholung stimmt nicht überein';
$lang['danger']['password_complexity'] = 'Passwort entspricht nicht den Richtlinien';
$lang['danger']['password_empty'] = 'Passwort darf nicht leer sein';
$lang['danger']['login_failed'] = 'Anmeldung fehlgeschlagen';
$lang['danger']['mailbox_invalid'] = 'Mailboxname ist ungültig';
$lang['danger']['resource_invalid'] = 'Ressourcenname ist ungültig';
$lang['danger']['description_invalid'] = 'Ressourcenbeschreibung ist ungültig';
$lang['danger']['mailbox_invalid_suggest'] = 'Mailboxname ist ungültig, meinten Sie vielleicht %s?';
$lang['danger']['is_alias'] = '%s lautet bereits eine Alias-Adresse';
$lang['danger']['is_alias_or_mailbox'] = "Eine Mailbox oder ein Alias mit der Adresse %s ist bereits vorhanden";
$lang['danger']['is_spam_alias'] = '%s lautet bereits eine Spam-Alias-Adresse';
$lang['danger']['quota_not_0_not_numeric'] = 'Speicherplatz muss numerisch und >= 0 sein';
$lang['danger']['domain_not_found'] = 'Domain %s nicht gefunden';
$lang['danger']['max_mailbox_exceeded'] = 'Anzahl an Mailboxen überschritten (%d von %d)';
$lang['danger']['max_alias_exceeded'] = 'Anzahl an Alias-Adressen überschritten';
$lang['danger']['mailbox_quota_exceeded'] = 'Speicherplatz überschreitet das Limit (max. %d MiB)';
$lang['danger']['mailbox_quota_left_exceeded'] = 'Nicht genügend Speicherplatz vorhanden (Speicherplatz anwendbar: %d MiB)';
$lang['success']['mailbox_added'] = 'Mailbox %s wurde angelegt';
$lang['success']['resource_added'] = 'Ressource %s wurde angelegt';
$lang['success']['domain_removed'] = 'Domain %s wurde entfernt';
$lang['success']['alias_removed'] = 'Alias-Adresse %s wurde entfernt';
$lang['success']['alias_domain_removed'] = 'Alias-Domain %s wurde entfernt';
$lang['success']['domain_admin_removed'] = 'Domain-Administrator %s wurde entfernt';
$lang['success']['mailbox_removed'] = 'Mailbox %s wurde entfernt';
$lang['success']['eas_reset'] = "ActiveSync Gerät des Benutzers %s wurden zurückgesetzt";
$lang['success']['resource_removed'] = 'Ressource %s wurde entfernt';
$lang['danger']['max_quota_in_use'] = 'Mailbox Speicherplatzlimit muss größer oder gleich %d MiB sein';
$lang['danger']['domain_quota_m_in_use'] = 'Domain Speicherplatzlimit muss größer oder gleich %d MiB sein';
$lang['danger']['mailboxes_in_use'] = 'Maximale Anzahl an Mailboxen muss größer oder gleich %d sein';
$lang['danger']['aliases_in_use'] = 'Maximale Anzahl an Aliassen muss größer oder gleich %d sein';
$lang['danger']['sender_acl_invalid'] = 'Sender ACL Wert muss eine Adresse oder Domain sein';
$lang['danger']['domain_not_empty'] = 'Kann nur leere Domains entfernen';
$lang['warning']['spam_alias_temp_error'] = 'Kann zur Zeit keinen Spam-Alias erstellen, bitte versuchen Sie es später noch einmal.';
$lang['danger']['spam_alias_max_exceeded'] = 'Maximale Anzahl an Spam-Alias-Adressen erreicht';
$lang['danger']['validity_missing'] = 'Bitte geben Sie eine Gültigkeitsdauer an';
$lang['user']['on'] = 'Ein';
$lang['user']['off'] = 'Aus';
$lang['user']['messages'] = "Nachrichten";
$lang['user']['in_use'] = "Verwendet";
$lang['user']['user_change_fn'] = '';
$lang['user']['user_settings'] = 'Benutzereinstellungen';
$lang['user']['mailbox_settings'] = 'Mailbox-Einstellungen';
$lang['user']['mailbox_details'] = 'Mailbox-Details';
$lang['user']['change_password'] = 'Passwort ändern';
$lang['user']['new_password'] = 'Neues Passwort';
$lang['user']['save_changes'] = 'Änderungen speichern';
$lang['user']['password_now'] = 'Aktuelles Passwort (Änderungen bestätigen)';
$lang['user']['new_password_repeat'] = 'Neues Passwort (Wiederholung)';
$lang['user']['new_password_description'] = 'Mindestanforderung: 6 Zeichen lang, Buchstaben und Zahlen.';
$lang['user']['did_you_know'] = '<b>Wussten Sie schon?</b> Sie können Ihre E-Mail-Adresse mit Tags versehen, etwa "ich+<b>Privat</b>@example.com", um Nachrichten automatisch in einem Unterordner (Beispiel: "Privat") abzulegen.';
$lang['user']['spam_aliases'] = 'Temporäre E-Mail Aliasse';
$lang['user']['alias'] = 'Alias';
$lang['user']['aliases'] = 'Aliasse';
$lang['user']['domain_aliases'] = 'Domain-Alias Adressen';
$lang['user']['is_catch_all'] = 'Ist Catch-All Adresse für Domain(s)';
$lang['user']['aliases_also_send_as'] = 'Darf außerdem versenden als Benutzer';
$lang['user']['aliases_send_as_all'] = 'Absender für folgende Domains und zugehörige Alias-Domains nicht prüfen';
$lang['user']['alias_create_random'] = 'Zufälligen Alias generieren';
$lang['user']['alias_extend_all'] = 'Gültigkeit +1h';
$lang['user']['alias_valid_until'] = 'Gültig bis';
$lang['user']['alias_remove_all'] = 'Alle entfernen';
$lang['user']['alias_time_left'] = 'Zeit verbleibend';
$lang['user']['alias_full_date'] = 'd.m.Y, H:i:s T';
$lang['user']['syncjob_full_date'] = 'd.m.Y, H:i:s T';
$lang['user']['alias_select_validity'] = 'Bitte Gültigkeit auswählen';
$lang['user']['sync_jobs'] = 'Sync Jobs';
$lang['user']['hour'] = 'Stunde';
$lang['user']['hours'] = 'Stunden';
$lang['user']['day'] = 'Tag';
$lang['user']['week'] = 'Woche';
$lang['user']['weeks'] = 'Wochen';
$lang['user']['spamfilter'] = 'Spamfilter';
$lang['admin']['spamfilter'] = 'Spamfilter';
$lang['user']['spamfilter_wl'] = 'Whitelist';
$lang['user']['spamfilter_wl_desc'] = 'Für E-Mail-Adressen, die vom Spamfilter <b>nicht</b> erfasst werden sollen. Die Verwendung von Wildcards ist gestattet.';
$lang['user']['spamfilter_bl'] = 'Blacklist';
$lang['user']['spamfilter_bl_desc'] = 'Für E-Mail-Adressen, die vom Spamfilter <b>immer</b> als Spam erfasst und abgelehnt werden. Die Verwendung von Wildcards ist gestattet.';
$lang['user']['spamfilter_table_rule'] = 'Regel';
$lang['user']['spamfilter_table_action'] = 'Aktion';
$lang['user']['spamfilter_table_empty'] = 'Keine Einträge vorhanden';
$lang['user']['spamfilter_table_remove'] = 'entfernen';
$lang['user']['spamfilter_table_add'] = 'Eintrag hinzufügen';
$lang['user']['spamfilter_behavior'] = 'Bewertung';
$lang['user']['spamfilter_default_score'] = 'Spam-Score:';
$lang['user']['spamfilter_green'] = 'Grün: Die Nachricht ist kein Spam';
$lang['user']['spamfilter_yellow'] = 'Gelb: Die Nachricht ist vielleicht Spam, wird als Spam markiert und in den Junk-Ordner verschoben';
$lang['user']['spamfilter_red'] = 'Rot: Die Nachricht ist eindeutig Spam und wird vom Server abgelehnt';
$lang['user']['spamfilter_default_score'] = 'Standardwert:';
$lang['user']['spamfilter_hint'] = 'Der erste Wert beschreibt den "low spam score", der zweite Wert den "high spam score".';
$lang['user']['spamfilter_table_domain_policy'] = "n.v. (Domainrichtlinie)";

$lang['user']['tls_policy_warning'] = '<strong>Vorsicht:</strong> Entscheiden Sie sich unverschlüsselte Verbindungen abzulehnen, kann dies dazu führen, dass Kontakte Sie nicht mehr erreichen.<br>Nachrichten, die die Richtlinie nicht erfüllen, werden durch einen Hard-Fail im Mailsystem abgewiesen.<br>Diese Einstellung ist aktiv für die primäre Mailbox, für alle Alias-Adressen, die dieser Mailbox <b>direkt zugeordnet</b> sind (lediglich eine einzige Ziel-Adresse) und der Adressen, die sich aus Alias-Domains ergeben. Ausgeschlossen sind temporäre Aliasse ("Spam-Alias-Adressen"), Catch-All Alias-Adressen sowie Alias-Adressen mit mehreren Zielen.';
$lang['user']['tls_policy'] = 'Verschlüsselungsrichtlinie';
$lang['user']['tls_enforce_in'] = 'TLS eingehend erzwingen';
$lang['user']['tls_enforce_out'] = 'TLS ausgehend erzwingen';
$lang['user']['no_record'] = 'Kein Eintrag';

$lang['user']['misc_settings'] = 'Sonstige Kontoeinstellungen';
$lang['user']['misc_delete_profile'] = 'Sonstige Kontoeinstellungen';

$lang['user']['tag_handling'] = 'Umgang mit getaggten E-Mails steuern';
$lang['user']['tag_in_subfolder'] = 'In Unterordner';
$lang['user']['tag_in_subject'] = 'In Betreff';
$lang['user']['tag_help_explain'] = 'Als Unterordner: Es wird ein Ordner mit dem Namen des Tags unterhalb der Inbox erstellt ("INBOX/Facebook").<br>
In Betreff: Der Name des Tags wird dem Betreff angefügt, etwa "[Facebook] Meine Neuigkeiten".';
$lang['user']['tag_help_example'] = 'Beispiel für eine getaggte E-Mail-Adresse: ich<b>+Facebook</b>@example.org';
$lang['user']['eas_reset'] = 'ActiveSync Geräte-Cache zurücksetzen';
$lang['user']['eas_reset_now'] = 'Jetzt zurücksetzen';
$lang['user']['eas_reset_help'] = 'In vielen Fällen kann ein ActiveSync Profil durch das Zurücksetzen des Caches repariert werden.<br><b>Vorsicht:</b> Alle Elemente werden erneut heruntergeladen!';

$lang['user']['encryption'] = 'Verschlüsselung';
$lang['user']['username'] = 'Benutzername';
$lang['user']['password'] = 'Password';
$lang['user']['last_run'] = 'Letzte Ausführung';
$lang['user']['excludes'] = 'Ausschlüsse';
$lang['user']['interval'] = 'Intervall';
$lang['user']['active'] = 'Aktiv';
$lang['user']['action'] = 'Aktion';
$lang['user']['edit'] = 'Bearbeiten';
$lang['user']['remove'] = 'Entfernen';
$lang['user']['delete_now'] = 'Sofort löschen';
$lang['user']['create_syncjob'] = 'Neuen Sync-Job erstellen';

$lang['start']['dashboard'] = '%s - Dashboard';
$lang['start']['start_rc'] = 'Roundcube öffnen';
$lang['start']['start_sogo'] = 'SOGo öffnen';
$lang['start']['mailcow_apps_detail'] = 'Verwenden Sie mailcow Apps, um E-Mails abzurufen, Kalender- und Kontakte zu verwalten und vieles mehr.';
$lang['start']['mailcow_panel'] = 'mailcow UI starten';
$lang['start']['mailcow_panel_description'] = 'Die mailcow Steuerung steht sowohl für Administratoren als auch Mailbox-Benutzer zur Verfügung.';
$lang['start']['mailcow_panel_detail'] = '<b>Domain-Administratoren</b> erstellen, verändern oder löschen Mailboxen, verwalten die Domäne und sehen sonstige Einstellungen ein.<br>
	Als <b>Mailbox-Benutzer</b> erstellen Sie hier zeitlich limitierte Aliasse, ändern das Verhalten des Spamfilters, setzen ein neues Passwort und vieles mehr.';
$lang['start']['recommended_config'] = 'Empfohlene Software-Konfiguration (ohne ActiveSync)';
$lang['start']['imap_smtp_server'] = 'IMAP- und SMTP-Server';
$lang['start']['imap_smtp_server_description'] = 'Für eine optimale Verbindung empfehlen wir die Verwendung des <a href="%s" target="_blank"><b>Mozilla Thunderbirds</b></a>.';
$lang['start']['imap_smtp_server_badge'] = 'E-Mail lesen und schreiben';
$lang['start']['imap_smtp_server_auth_info'] = 'Bitte verwenden Sie Ihre vollständige E-Mail-Adresse sowie das PLAIN-Authentifizierungsverfahren.<br>
Ihre Anmeldedaten werden durch die obligatorische Verschlüsselung entgegen des Begriffes "PLAIN" nicht unverschlüsselt übertragen.';
$lang['start']['managesieve'] = 'ManageSieve';
$lang['start']['managesieve_badge'] = 'E-Mail-Filter';
$lang['start']['managesieve_description'] = 'Bitte verwenden Sie <b>Mozilla Thunderbirds</b> zusammen mit der <a style="text-decoration:none" target="_blank" href="%s"><b>Sieve Erweiterung</b></a>.<br>Nach dem Herunterladen der Erweiterung starten Sie Thunderbird, öffnen das Fenster für Erweiterungen und ziehen die heruntergeladene Datei in das offene Fenster.<br>Der Servername lautet <b>%s</b>, als Port konfigurieren Sie bitte <b>4190</b>. Die Anmeldedaten entsprechen dem E-Mail Login.';
$lang['start']['service'] = 'Dienstname';
$lang['start']['encryption'] = 'Verschlüsselungstyp';
$lang['start']['help'] = 'Hilfe ein-/ausblenden';
$lang['start']['hostname'] = 'Hostname';
$lang['start']['port'] = 'Port';
$lang['start']['footer'] = '';
$lang['header']['mailcow_settings'] = 'Konfiguration';
$lang['header']['administration'] = 'Administration';
$lang['header']['mailboxes'] = 'Mailboxen';
$lang['header']['user_settings'] = 'Benutzereinstellungen';
$lang['header']['login'] = 'Anmeldung';
$lang['header']['logged_in_as_logout'] = 'Eingeloggt als <b>%s</b> (abmelden)';
$lang['header']['logged_in_as_logout_dual'] = 'Eingeloggt als <b>%s <span class="text-info">[%s]</span></b>';
$lang['header']['locale'] = 'Sprache';
$lang['mailbox']['domain'] = 'Domain';
$lang['mailbox']['spam_aliases'] = 'Temp. Alias';
$lang['mailbox']['alias'] = 'Alias';
$lang['mailbox']['aliases'] = 'Aliasse';
$lang['mailbox']['multiple_bookings'] = 'Mehrfachbuchen';
$lang['mailbox']['kind'] = 'Art';
$lang['mailbox']['description'] = 'Beschreibung';
$lang['mailbox']['resources'] = 'Ressourcen';
$lang['mailbox']['resource_name'] = 'Ressourcenname';
$lang['mailbox']['domains'] = 'Domains';
$lang['mailbox']['mailboxes'] = 'Mailboxen';
$lang['mailbox']['mailbox_quota'] = 'Max. Größe einer Mailbox';
$lang['mailbox']['domain_quota'] = 'Gesamtspeicher';
$lang['mailbox']['ratelimit'] = 'Limit ausgehend/Stunde';
$lang['mailbox']['active'] = 'Aktiv';
$lang['mailbox']['action'] = 'Aktion';
$lang['mailbox']['backup_mx'] = 'Backup MX';
$lang['mailbox']['domain_aliases'] = 'Domain-Aliasse';
$lang['mailbox']['target_domain'] = 'Ziel-Domain';
$lang['mailbox']['target_address'] = 'Ziel-Adresse';
$lang['mailbox']['username'] = 'Benutzername';
$lang['mailbox']['fname'] = 'Name';
$lang['mailbox']['filter_table'] = 'Tabelle filtern';
$lang['mailbox']['yes'] = '&#10004;';
$lang['mailbox']['no'] = '&#10008;';
$lang['mailbox']['quota'] = 'Speicherplatz';
$lang['mailbox']['in_use'] = 'Prozentualer Gebrauch';
$lang['mailbox']['msg_num'] = 'Anzahl Nachrichten';
$lang['mailbox']['remove'] = 'Entfernen';
$lang['mailbox']['edit'] = 'Bearbeiten';
$lang['mailbox']['archive'] = 'Archiv-Zugriff';
$lang['mailbox']['no_record'] = 'Kein Eintrag für Objekt %s';
$lang['mailbox']['no_record_single'] = 'Kein Eintrag';
$lang['mailbox']['add_domain'] = 'Domain hinzufügen';
$lang['mailbox']['add_domain_alias'] = 'Domain-Alias hinzufügen';
$lang['mailbox']['add_mailbox'] = 'Mailbox hinzufügen';
$lang['mailbox']['add_resource'] = 'Ressource hinzufügen';
$lang['mailbox']['add_alias'] = 'Alias hinzufügen';
$lang['mailbox']['empty'] = 'Keine Einträge vorhanden';
$lang['mailbox']['toggle_all'] = 'Alle';
$lang['mailbox']['quick_actions'] = 'Aktionen';
$lang['mailbox']['activate'] = 'Aktivieren';
$lang['mailbox']['deactivate'] = 'Deaktivieren';
$lang['mailbox']['owner'] = 'Besitzer';
$lang['mailbox']['mins_interval'] = 'Intervall (min)';
$lang['mailbox']['last_run'] = 'Letzte Ausführung';

$lang['info']['no_action'] = 'Keine Aktion anwendbar';
$lang['delete']['title'] = 'Objekt entfernen';
$lang['delete']['remove_domain_warning'] = '<b>Warnung:</b> Sie entfernen die Domain <b>%s</b>!';
$lang['delete']['remove_domainalias_warning'] = '<b>Warnung:</b> Sie entfernen die Alias-Domain <b>%s</b>!';
$lang['delete']['remove_domainadmin_warning'] = '<b>Warnung:</b> Sie entfernen den Domain-Administrator <b>%s</b>!';
$lang['delete']['remove_alias_warning'] = '<b>Warnung:</b> Sie entfernen die Alias-Adresse <b>%s</b>!';
$lang['delete']['remove_syncjob_warning'] = '<b>Warnung:</b> Sie entfernen einen Sync-Job des Benutzers <b>%s</b>!';
$lang['delete']['remove_mailbox_warning'] = '<b>Warnung:</b> Sie entfernen die Mailbox <b>%s</b>!';
$lang['delete']['remove_mailbox_details'] = 'Die Mailbox wird <b>vollständig und permanent</b> entfernt!';
$lang['delete']['remove_resource_warning'] = '<b>Warnung:</b> Sie entfernen die Ressource <b>%s</b>!';
$lang['delete']['remove_resource_details'] = 'Die Ressource wird <b>vollständig und permanent</b> entfernt!';
$lang['delete']['remove_domain_details'] = 'Diese Aktion entfernt ebenfalls Domain-Aliasse.<br><br><b>Eine Domain muss leer sein, um entfernt zu werden.</b>';
$lang['delete']['remove_syncjob_details'] = 'Objekte dieses Sync-Jobs werden nicht mehr vom entfernten Server abgeholt.';
$lang['delete']['remove_alias_details'] = 'Benutzer werden keine Nachrichten mehr von dieser Adresse erhalten und versenden koennen!</b>';
$lang['delete']['remove_button'] = 'Entfernen';
$lang['delete']['previous'] = 'Vorherige Seite';

$lang['edit']['syncjob'] = 'Sync-Job bearbeiten';
$lang['edit']['save'] = 'Änderungen speichern';
$lang['edit']['username'] = 'Benutzername';
$lang['edit']['hostname'] = 'Servername';
$lang['edit']['encryption'] = 'Verschlüsselungsmethode';
$lang['edit']['maxage'] = 'Maximales Alter in Tagen einer Nachricht, die kopiert werden soll</br ><small>(0 = alle Nachrichten kopieren)</small>';
$lang['edit']['subfolder2'] = 'Ziel-Ordner<br><small>(leer = kein Unterordner)</small>';
$lang['edit']['mins_interval'] = 'Intervall (min)';
$lang['edit']['exclude'] = 'Elemente ausschließen (Regex)';
$lang['edit']['archive'] = 'Archiv-Zugriff';
$lang['edit']['max_mailboxes'] = 'Max. Mailboxanzahl:';
$lang['edit']['title'] = 'Objekt bearbeiten';
$lang['edit']['target_address'] = 'Ziel-Adresse(n) <small>(getrennt durch Komma)</small>:';
$lang['edit']['active'] = 'Aktiv';
$lang['edit']['target_domain'] = 'Ziel-Domain:';
$lang['edit']['password'] = 'Passwort:';
$lang['edit']['ratelimit'] = 'Limit ausgehender Nachrichten/Stunde:';
$lang['danger']['ratelimt_less_one'] = 'Limit ausgehender Nachrichten/Stunde darf nicht kleiner als 1 sein';
$lang['edit']['password_repeat'] = 'Passwort (Wiederholung):';
$lang['edit']['domain_admin'] = 'Domain-Administrator bearbeiten';
$lang['edit']['domain'] = 'Domain bearbeiten';
$lang['edit']['edit_alias_domain'] = 'Alias-Domain bearbeiten';
$lang['edit']['alias_domain'] = 'Alias-Domain';
$lang['edit']['domains'] = 'Domains';
$lang['edit']['destroy'] = 'Manuelle Eingabe des Wertes';
$lang['edit']['alias'] = 'Alias bearbeiten';
$lang['edit']['mailbox'] = 'Mailbox bearbeiten';
$lang['edit']['description'] = 'Beschreibung:';
$lang['edit']['max_aliases'] = 'Max. Aliasse:';
$lang['edit']['max_quota'] = 'Max. Größe per Mailbox (MiB):';
$lang['edit']['domain_quota'] = 'Domain Speicherplatz gesamt (MiB):';
$lang['edit']['backup_mx_options'] = 'Backup MX Optionen:';
$lang['edit']['relay_domain'] = 'Relay Domain';
$lang['edit']['relay_all'] = 'Alle Empfänger-Adressen relayen';
$lang['edit']['dkim_signature'] = 'ARC + DKIM-Signatur:';
$lang['edit']['dkim_record_info'] = '<small>Bitte hinterlegen Sie einen TXT-Record mit obigem Wert in den DNS-Einstellungen Ihrer Domainverwaltung.</small>';
$lang['edit']['relay_all_info'] = '<small>Wenn Sie <b>nicht</b> alle Empfänger-Adressen relayen möchten, müssen Sie eine ("blinde") Mailbox für jede Adresse, die relayt werden soll, erstellen.</small>';
$lang['edit']['full_name'] = 'Voller Name';
$lang['edit']['quota_mb'] = 'Speicherplatz (MiB)';
$lang['edit']['sender_acl'] = 'Darf Nachrichten versenden als';
$lang['edit']['sender_acl_info'] = 'Aliasse sind nicht abwählbar und vorausgewählt.';
$lang['edit']['dkim_txt_name'] = 'TXT-Record Name:';
$lang['edit']['dkim_txt_value'] = 'TXT-Record Wert:';
$lang['edit']['previous'] = 'Vorherige Seite';
$lang['edit']['unchanged_if_empty'] = 'Unverändert, wenn leer';
$lang['edit']['dont_check_sender_acl'] = 'Absender für Domain %s u. Alias-Dom. nicht prüfen';
$lang['edit']['multiple_bookings'] = 'Mehrfaches Buchen';
$lang['edit']['kind'] = 'Art';
$lang['edit']['resource'] = 'Ressource';

$lang['add']['syncjob'] = 'Sync-Job erstellen';
$lang['add']['syncjob_hint'] = 'Passwörter werden unverschlüsselt abgelegt!';
$lang['add']['hostname'] = 'Servername';
$lang['add']['port'] = 'Port';
$lang['add']['username'] = 'Benutzername';
$lang['add']['enc_method'] = 'Verschlüsselungsmethode';
$lang['add']['maxage'] = 'Maximales Alter von Nachrichten, welche vom Remote abgefragt werden (0 = Alter ignorieren)';
$lang['add']['subfolder2'] = 'Synchronisation in Unterordner am Ziel';
$lang['add']['mins_interval'] = 'Abrufintervall (Minuten)';
$lang['add']['exclude'] = 'Elemente ausschließen (Regex)';
$lang['add']['delete2duplicates'] = 'Lösche Duplikate im Ziel';
$lang['add']['delete1'] = 'Lösche Nachricht nach Übertragung vom Quell-Server';
$lang['edit']['delete2duplicates'] = 'Lösche Duplikate im Ziel';
$lang['edit']['delete1'] = 'Lösche Nachricht nach Übertragung vom Quell-Server';

$lang['add']['title'] = 'Objekt anlegen';
$lang['add']['domain'] = 'Domain';
$lang['add']['active'] = 'Aktiv';
$lang['add']['multiple_bookings'] = 'Mehrfaches Buchen möglich';
$lang['add']['save'] = 'Änderungen speichern';
$lang['add']['description'] = 'Beschreibung';
$lang['add']['max_aliases'] = 'Max. mögliche Aliasse';
$lang['add']['max_mailboxes'] = 'Max. mögliche Mailboxen';
$lang['add']['mailbox_quota_m'] = 'Max. Speicherplatz pro Mailbox (MiB)';
$lang['add']['domain_quota_m'] = 'Domain Speicherplatz gesamt (MiB)';
$lang['add']['backup_mx_options'] = 'Backup MX Optionen';
$lang['add']['relay_all'] = 'Alle Empfänger-Adressen relayen';
$lang['add']['relay_domain'] = 'Relay Domain';
$lang['add']['relay_all_info'] = '<small>Wenn Sie <b>nicht</b> alle Empfänger-Adressen relayen möchten, müssen Sie eine Mailbox für jede Adresse, die relayt werden soll, erstellen.</small>';
$lang['add']['alias'] = 'Alias(se)';
$lang['add']['alias_spf_fail'] = '<b>Hinweis:</b> Wählen Sie ein externes Postfach als Ziel-Adresse, kann es unter Umständen zu fehlerhaften Spam-Erkennungen <b>beim Empfänger</b> kommen. Weitere Informationen zu diesem Thema finden Sie <a href="https://www.heinlein-support.de/blog/news/gmx-de-und-web-de-haben-mail-rejects-durch-spf/" target="_blank">hier.</a>';
$lang['add']['alias_address'] = 'Alias-Adresse(n)';
$lang['add']['alias_address_info'] = '<small>Vollständige E-Mail-Adresse(n) oder @example.com, um alle Nachrichten einer Domain weiterzuleiten. Getrennt durch Komma. <b>Nur eigene Domains</b>.</small>';
$lang['add']['alias_domain_info'] = '<small>Nur gültige Domains. Getrennt durch Komma.</small>';
$lang['add']['target_address'] = 'Ziel-Adresse(n)';
$lang['add']['target_address_info'] = '<small>Vollständige E-Mail-Adresse(n). Getrennt durch Komma.</small>';
$lang['add']['alias_domain'] = 'Alias-Domain';
$lang['add']['select'] = 'Bitte auswählen';
$lang['add']['target_domain'] = 'Ziel-Domain';
$lang['add']['mailbox'] = 'Mailbox';
$lang['add']['resource'] = 'Ressource';
$lang['add']['kind'] = 'Art';
$lang['add']['mailbox_username'] = 'Benutzername (linker Teil der E-Mail-Adresse)';
$lang['add']['resource_name'] = 'Ressourcenname';
$lang['add']['full_name'] = 'Vor- und Zuname';
$lang['add']['quota_mb'] = 'Speicherplatz (MiB)';
$lang['add']['select_domain'] = 'Bitte zuerst eine Domain auswählen';
$lang['add']['password'] = 'Passwort';
$lang['add']['password_repeat'] = 'Passwort (Wiederholung)';
$lang['add']['previous'] = 'Vorherige Seite';
$lang['add']['restart_sogo_hint'] = 'Der SOGo Container muss nach dem Hinzufügen einer neuen Domain neugestartet werden!';

$lang['login']['title'] = 'Anmeldung';
$lang['login']['administration'] = 'Administration';
$lang['login']['administration_details'] = 'Bitte verwenden Sie Ihre Administrator Anmeldedaten, um administrative Aufgaben wie das Anlegen einer Mailbox zu starten.';
$lang['login']['user_settings'] = 'Benutzereinstellungen';
$lang['login']['user_settings_details'] = 'Als E-Mail Benutzer vewenden Sie bitte Ihre E-Mail Anmeldedaten, um Passwörter zu verändern, temporäre (Spam-)Aliasse zu erstellen, den Spamfilter einzustellen oder auch um E-Mails zu importieren.';
$lang['login']['username'] = 'Benutzername';
$lang['login']['password'] = 'Passwort';
$lang['login']['reset_password'] = 'Mein Passwort zurücksetzen';
$lang['login']['login'] = 'Anmelden';
$lang['login']['previous'] = 'Vorherige Seite';
$lang['login']['delayed'] = 'Login wurde zur Sicherheit um %s Sekunde/n verzögert.';

$lang['tfa']['tfa'] = "Zwei-Faktor-Authentifizierung";
$lang['tfa']['set_tfa'] = "Konfiguriere Zwei-Faktor-Authentifizierungsmethode";
$lang['tfa']['yubi_otp'] = "Yubico OTP Authentifizierung";
$lang['tfa']['key_id'] = "Ein Name für diesen YubiKey";
$lang['tfa']['key_id_totp'] = "Ein eindeutiger Name";
$lang['tfa']['api_register'] = 'mailcow verwendet die Yubico Cloud API. Ein API-Key für den Yubico Stick kann <a href="https://upgrade.yubico.com/getapikey/" target="_blank">hier</a> bezogen werden.';
$lang['tfa']['u2f'] = "U2F Authentifizierung";
$lang['tfa']['hotp'] = "HOTP Authentifizierung";
$lang['tfa']['totp'] = "TOTP Authentifizierung";
$lang['tfa']['none'] = "Deaktiviert";
$lang['tfa']['delete_tfa'] = "Deaktiviere 2FA";
$lang['tfa']['disable_tfa'] = "Deaktiviere 2FA bis zur nächsten erfolgreichen Anmeldung";
$lang['tfa']['confirm_tfa'] = "Bitte bestätigen Sie Ihr Einmal-Passwort im unteren Feld";
$lang['tfa']['confirm'] = "Bestätigen";
$lang['tfa']['otp'] = "Einmalpasswort";
$lang['tfa']['totp'] = "Time-based OTP (Google Authenticator etc.)";
$lang['tfa']['trash_login'] = "Login verwerfen";
$lang['tfa']['select'] = "Bitte auswählen";
$lang['tfa']['waiting_usb_auth'] = "<i>Warte auf USB-Gerät...</i><br><br>Bitte jetzt den vorgesehenen Taster des U2F USB-Gerätes berühren.";
$lang['tfa']['waiting_usb_register'] = "<i>Warte auf USB-Gerät...</i><br><br>Bitte zuerst das obere Passwortfeld ausfüllen und erst dann den vorgesehenen Taster des U2F USB-Gerätes berühren.";
$lang['tfa']['scan_qr_code'] = "Bitte scannen Sie jetzt den angezeigten QR-Code:.";
$lang['tfa']['enter_qr_code'] = "Falls Sie den angezeigten QR-Code nicht scannen können, verwenden Sie bitte nachstehenden Sicherheitsschlüssel";
$lang['tfa']['confirm_totp_token'] = "Bitte bestätigen Sie die Änderung durch Eingabe eines generierten Tokens";

$lang['admin']['private_key'] = 'Private Key';
$lang['admin']['import'] = 'Importieren';
$lang['admin']['import_private_key'] = 'Private Key importieren';
$lang['admin']['f2b_parameters'] = 'Fail2ban Parameter';
$lang['admin']['f2b_ban_time'] = 'Banzeit (s)';
$lang['admin']['f2b_max_attempts'] = 'Max. Versuche';
$lang['admin']['f2b_retry_window'] = 'Wiederholungen im Zeitraum von (s)';
$lang['admin']['f2b_whitelist'] = 'Whitelist für Netzwerke und Hosts';
$lang['admin']['restrictions'] = 'Postfix Restriktionen';
$lang['admin']['rr'] = 'Postfix Empfänger Restriktionen';
$lang['admin']['sr'] = 'Postfix Sender Restriktionen';
$lang['admin']['reset_defaults'] = 'Standard wiederherstellen';
$lang['admin']['r_inactive'] = 'Inaktive Restriktionen';
$lang['admin']['r_active'] = 'Aktive Restriktionen';
$lang['admin']['r_info'] = 'Ausgegraute/deaktivierte Elemente sind mailcow nicht bekannt und können nicht in die Liste inaktiver Elemente verschoben werden. Unbekannte Restriktionen werden trotzdem in Reihenfolge der Erscheinung gesetzt.<br>Sie können ein Element in der Datei <code>inc/vars.local.inc.php</code> als bekannt hinzufügen, um es zu bewegen.';
$lang['admin']['public_folders'] = 'Öffentliche Ordner';
$lang['admin']['public_folders_text'] = 'Ein Namespace "Public" wird erstellt. Der untenstehende Ordnername betrifft den Namen der automatisch erstellten Mailbox in diesem Namespace.';
$lang['admin']['public_folder_name'] = 'Ordnername <small>(alphanumerisch)</small>';
$lang['admin']['public_folder_enable'] = 'Öffentliche Ordner aktivieren';
$lang['admin']['public_folder_enable_text'] = 'Das Umschalten dieser Option entfernt keine Nachrichten aus den öffentlichen Ordnern.';
$lang['admin']['public_folder_pusf'] = 'Aktiviere "per-user seen flag"';
$lang['admin']['public_folder_pusf_text'] = 'Ein "per-user seen flag"-aktiviertes System markiert Nachrichten nicht als gelesen, wenn nur ein Benutzer sie gelesen hat. Jeder Benutzer verwaltet seine eigenen "seen flags".';
$lang['admin']['privacy'] = 'Datenschutz';
$lang['admin']['privacy_text'] = 'Diese Option aktiviert eine PCRE-Prüfung, die die Werte der Kopfzeilen "User-Agent", "X-Enigmail", "X-Mailer", "X-Originating-IP" sowie "Received: from" durch "localhost" bzw. "127.0.0.1" ersetzt.';
$lang['admin']['privacy_anon_mail'] = 'Anonymisiere ausgehende Kopfzeilen';
$lang['admin']['msg_size'] = 'Aktuelles Limit der Nachrichtengröße';
$lang['admin']['msg_size_limit'] = 'Aktuelles Limit der Nachrichtengröße';
$lang['admin']['msg_size_limit_details'] = 'Diese Einstellung wird Postfix und den Webserver neuladen.';
$lang['admin']['save'] = 'Änderungen speichern';
$lang['admin']['maintenance'] = 'Wartung und Information';
$lang['admin']['sys_info'] = 'Systeminformation';
$lang['admin']['dkim_add_key'] = 'ARC/DKIM-Key hinzufügen';
$lang['admin']['dkim_keys'] = 'ARC/DKIM-Keys';
$lang['admin']['dkim_key_valid'] = 'Key gültig';
$lang['admin']['dkim_key_unused'] = 'Key ohne Zuweisung';
$lang['admin']['dkim_key_missing'] = 'Key fehlt';
$lang['admin']['dkim_key_hint'] = 'Der Selector für DKIM-Keys lautet immer <code>dkim</code>.';
$lang['admin']['add'] = 'Hinzufügen';
$lang['admin']['configuration'] = 'Konfiguration';
$lang['admin']['password'] = 'Passwort';
$lang['admin']['password_repeat'] = 'Passwort (Wiederholung)';
$lang['admin']['active'] = 'Aktiv';
$lang['admin']['inactive'] = 'Inaktiv';
$lang['admin']['action'] = 'Aktion';
$lang['admin']['add_domain_admin'] = 'Domain-Administrator hinzufügen';
$lang['admin']['admin_domains'] = 'Domain-Zuweisungen';
$lang['admin']['domain_admins'] = 'Domain-Administratoren';
$lang['admin']['username'] = 'Benutzername';
$lang['admin']['edit'] = 'Bearbeiten';
$lang['admin']['remove'] = 'Entfernen';
$lang['admin']['save'] = 'Änderungen speichern';
$lang['admin']['admin'] = 'Administrator';
$lang['admin']['admin_details'] = 'Administrator bearbeiten';
$lang['admin']['unchanged_if_empty'] = 'Unverändert, wenn leer';
$lang['admin']['yes'] = '&#10004;';
$lang['admin']['no'] = '&#10008;';
$lang['admin']['access'] = 'Zugang';
$lang['admin']['invalid_max_msg_size'] = 'Maximale Nachrichtengröße ungültig';
$lang['admin']['site_not_found'] = 'Kann mailcow Seitenkonfiguration nicht finden';
$lang['admin']['public_folder_empty'] = 'Öffentlicher Ordner-Name darf nicht leer sein';
$lang['admin']['set_rr_failed'] = 'Kann Postfix Restriktionen nicht setzen';
$lang['admin']['no_record'] = 'Kein Eintrag';
$lang['admin']['filter_table'] = 'Tabelle Filtern';
$lang['admin']['empty'] = 'Keine Einträge vorhanden';
$lang['admin']['time'] = 'Zeit';
$lang['admin']['priority'] = 'Gewichtung';
$lang['admin']['refresh'] = 'Neu laden';
$lang['admin']['logs'] = 'Logs';
$lang['admin']['to_top'] = 'Nach oben';
$lang['admin']['in_use_by'] = 'Verwendet von';
$lang['admin']['message'] = 'Nachricht';
$lang['admin']['forwarding_hosts'] = 'Weiterleitungs-Hosts';
$lang['admin']['forwarding_hosts_hint'] = 'Eingehende Nachrichten werden von den hier gelisteten Hosts bedingungslos akzeptiert. Diese Hosts werden dann nicht mit DNSBLs abgeglichen oder Greylisting unterworfen. Von ihnen empfangener Spam wird nie abgelehnt, optional kann er aber in den Spam-Ordner einsortiert werden. Die übliche Verwendung für diese Funktion ist, um Mailserver anzugeben, auf denen eine Weiterleitung zu Ihrem mailcow-Server eingerichtet wurde.';
$lang['admin']['forwarding_hosts_add_hint'] = 'Sie können entweder IPv4/IPv6-Adressen, Netzwerke in CIDR-Notation, Hostnamen (die zu IP-Adressen aufgelöst werden), oder Domainnamen (die zu IP-Adressen aufgelöst werden, indem ihr SPF-Record abgefragt wird oder, in dessen Abwesenheit, ihre MX-Records) angeben.';
$lang['admin']['relayhosts_hint'] = 'Erstellen Sie Relayhosts, um diese im Einstellungsdialog einer Domain auszuwählen.';
$lang['admin']['add_relayhost_add_hint'] = 'Bitte beachten Sie, dass Relayhost Anmeldedaten im Klartext gespeichert werden.';
$lang['admin']['host'] = 'Host';
$lang['admin']['source'] = 'Quelle';
$lang['admin']['add_forwarding_host'] = 'Weiterleitungs-Host hinzufügen';
$lang['admin']['add_relayhost'] = 'Relayhost hinzufügen';
$lang['delete']['remove_forwardinghost_warning'] = '<b>Warnung:</b> Sie entfernen den Weiterleitungs-Host <b>%s</b>!';
$lang['success']['forwarding_host_removed'] = "Weiterleitungs-Host %s wurde entfernt";
$lang['success']['forwarding_host_added'] = "Weiterleitungs-Host %s wurde hinzugefügt";
$lang['success']['relayhost_removed'] = "Relayhost %s wurde entfernt";
$lang['success']['relayhost_added'] = "Relayhost %s wurde hinzugefügt";
$lang['admin']['relay_from'] = "Absenderadresse";
$lang['admin']['relay_run'] = "Test durchführen";
