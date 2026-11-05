<?php
/**
 *
 * This file is part of the phpBB Forum Software package.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>, phpBBservice.nl <http://www.phpbbservice.nl>, phpBB.nl <http://www.phpbb.nl>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For full copyright and license information, please see
 * the docs/CREDITS.txt file.
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Common installer pages
$lang = array_merge($lang, array(
	'INSTALL_PANEL'	=> 'Installatiepaneel',
	'SELECT_LANG'	=> 'Taal selecteren',

	'STAGE_INSTALL'	=> 'phpBB installeren',

	// Introduction page
	'INTRODUCTION_TITLE'	=> 'Introductie',
	'INTRODUCTION_BODY'		=> 'Welkom bij phpBB3!<br /><br />phpBB® is wereldwijd de meest gebruikte open source forumsoftware. phpBB3 is de laatste versie van een pakket dat is gestart met de ontwikkeling in 2000. Zoals zijn voorgangers is phpBB3 functie-rijk, gebruiksvriendelijk en het wordt volledig ondersteund door het phpBB-team. phpBB3 verbetert alles wat phpBB2 zo populair maakte en voegt de meestgevraagde functies toe die nog niet aanwezig waren in vorige versies. Wij hopen dat het je verwachtingen overtreft.<br /><br />Het installatiesysteem doorloopt samen met je de stappen om phpBB3 te installeren, oudere versies bijwerken naar de meest recente phpBB3-versie en ook nog het converteren naar phpBB3 vanaf een andere forumsoftware (inclusief phpBB2). Voor meer informatie adviseren we je de <a href="../docs/INSTALL.html">installatiehandleiding</a> te lezen. Als je de phpBB3-licentie wil lezen of als je wil weten hoe je ondersteuning kunt krijgen en onze mening daarover, klik dan op de juiste optie in het menu aan de linkerkant van deze pagina. Om verder te gaan selecteer je het juiste tabblad bovenaan de pagina.',

	// Support page
	'SUPPORT_TITLE'		=> 'Support',
	'SUPPORT_BODY'		=> 'Volledige ondersteuning word gegegeven voor de huidige stabiele versie van phpBB, helemaal gratis. Dit is inclusief:</p><ul><li>Installatie</li><li>Configuratie</li><li>Technische vragen</li><li>Problemen die zijn gerelateerd aan potentiële fouten in de software</li><li>Updaten van een Release Candidate (RC) versie naar de laatste stabiele versie</li><li>Converteren van een oudere versie naar een stabiele versie</li><li>Converteren van andere forumsoftware naar phpBB3</li></ul><p>Wij moedigen gebruikers aan die nog steeds beta-versies hebben van phpBB3 hun installatie te vervangen met een nieuwe kopie van de laatste versie.</p><h2>Verkijgen van support</h2><p><a href="http://www.phpbb.nl/forums">phpBB.nl Supportforums</a><br /><br />',

	// License
	'LICENSE_TITLE'		=> 'General Public License',

	// Install page
	'INSTALL_INTRO'			=> 'Welkom bij de installatie',
	'INSTALL_INTRO_BODY'	=> 'Met deze optie is het mogelijk om phpBB3 te kunnen installeren op je server.</p><p>Om verder te gaan heb je de database-instellingen nodig. Als je niet je database-instellingen weet, neem dan contact op met je host en vraag het aan hen. Je kunt niet doorgaan met de installatie zonder die gegevens. Je hebt nodig:</p>

		<ul>
			<li>Het type van je database - De database dat je wil gebruiken.</li>
			<li>De hostnaam of DSN van je databaseserver - Het adres van de databaseserver.</li>
			<li>De poort van de databaseserver (in de meeste gevallen is dit niet nodig).</li>
			<li>De naam van de database op de server.</li>
			<li>De gebruikersnaam en het wachtwoord van de database - De aanmeldingsgegevens om toegang te hebben tot de database.</li>
		</ul>

		<p><strong>Opmerking:</strong> Als je de installatie uitvoert met SQLite, zul je het volledige pad moeten invoeren van je databasebestand in het DSN-veld en het veld van de gebruikersnaam en wachtwoord leeg moeten laten. Om veiligheidsredenen moet je er zeker van zijn dat je databasebestand niet is opgeslagen in een locatie die toegankelijk is via internet.</p>

		<p>phpBB3 ondersteunt de volgende databases:</p>
		<ul>
			<li>MySQL 4.1.3 of hoger (MySQLi-ondersteuning)</li>
			<li>PostgreSQL 8.3+</li>
			<li>SQLite 3.6.15+</li>
			<li>MS SQL Server 2000 of hoger (direct of met ODBC)</li>
			<li>MS SQL Server 2005 of hoger (native)</li>
			<li>Oracle</li>
		</ul>

		<p>Alleen de databases die worden ondersteund door uw server zullen worden weergegeven.',

	'ACP_LINK'	=> 'Ga naar het <a href="%1$s">beheerderspaneel</a>',

	'INSTALL_PHPBB_INSTALLED'		=> 'phpBB is al geïnstalleerd.',
	'INSTALL_PHPBB_NOT_INSTALLED'	=> 'phpBB is nog niet geïnstalleerd.',
));

// Requirements translation
$lang = array_merge($lang, array(
	// Filesystem requirements
	'FILE_NOT_EXISTS'			=> 'Het bestand bestaat niet',
	'FILE_NOT_EXISTS_EXPLAIN'	=> 'Om phpBB te kunnen installeren moet het bestand %1$s op de server aanwezig zijn.',
	'FILE_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'Het is aan te bevelen dat het bestand %1$s aanwezig is op de server voor een betere gebruikerservaring.',
	'FILE_NOT_WRITABLE'			=> 'Het bestand is niet schrijfbaar',
	'FILE_NOT_WRITABLE_EXPLAIN'	=> 'Om phpBB te kunnen installeren moet het bestand %1$s schrijfbaar zijn.',
	'FILE_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Het is aan te bevelen om het bestand %1$s schrijfbaar te maken voor een betere gebruikerservaring.',

	'DIRECTORY_NOT_EXISTS'				=> 'De map bestaat niet',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'		=> 'Om phpBB te kunnen installeren moet de map %1$s op de server aanwezig zijn.',
	'DIRECTORY_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'Het is aan te bevelen dat de map %1$s aanwezig is op de server voor een betere gebruikerservaring.',
	'DIRECTORY_NOT_WRITABLE'			=> 'De map is niet schrijfbaar',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'	=> 'Om phpBB te kunnen installeren moet de map %1$s schrijfbaar zijn.',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Het is aan te bevelen om de map %1$s schrijfbaar te maken voor een betere gebruikerservaring.',

	// Server requirements
	'PHP_VERSION_REQD'					=> 'PHP-versie',
	'PHP_VERSION_REQD_EXPLAIN'			=> 'phpBB vereist PHP versie 7.1.3 of hoger.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP-functie getimagesize() is beschikbaar',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Vereist</strong> - Om phpBB correct te laten functioneren, zal de getimagesize-functie beschikbaar moeten zijn.',
	'PCRE_UTF_SUPPORT'				=> 'Ondersteuning voor PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'phpBB zal <strong>niet</strong> werken als je PHP-installatie niet is gecompileerd met UTF-8-ondersteuning in de PCRE-extensie.',
	'PHP_JSON_SUPPORT'				=> 'Ondersteuning voor PHP-JSON',
	'PHP_JSON_SUPPORT_EXPLAIN'		=> '<strong>Verplicht</strong> - Om phpBB correct te laten functioneren, zal de PHP-JSON-extensie beschikbaar moeten zijn.',
	'PHP_MBSTRING_SUPPORT'				=> 'PHP mbstring-ondersteuning',
	'PHP_MBSTRING_SUPPORT_EXPLAIN'		=> 'Om phpBB correct te laten functioneren, zal de PHP mbstring-extensie beschikbaar moeten zijn.',
	'PHP_XML_SUPPORT'					=> 'Ondersteuning PHP XML/DOM',
	'PHP_XML_SUPPORT_EXPLAIN'			=> 'Om phpBB correct te laten functioneren, zal de PHP XML/DOM-extensie beschikbaar moeten zijn.',
	'PHP_SUPPORTED_DB'				=> 'Ondersteunde databases',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>Verplicht</strong> - Er moet tenminste één type databasemodule worden ondersteund binnen PHP. Als er geen databasemodule beschikbaar is moet je contact opnemen met je webhost of de documentatie van de betreffende PHP-installatie bekijken voor advies.',

	'RETEST_REQUIREMENTS'	=> 'Vereisten opnieuw controleren',

	'STAGE_REQUIREMENTS'	=> 'Controleer vereisten',
));

// General error messages
$lang = array_merge($lang, array(
	'INST_ERR_MISSING_DATA'		=> 'Alle velden in dit blok moeten ingevuld zijn.',

	'TIMEOUT_DETECTED_TITLE'	=> 'Het installatieprogramma heeft een time-out geconstateerd',
	'TIMEOUT_DETECTED_MESSAGE'	=> 'Het installatieprogramma heeft een time-out geconstateerd. Je kunt proberen de pagina te vernieuwen, maar dat kan leiden tot corrupte data. We adviseren om je time-out-instellingen aan te passen of het via de CLI te proberen.',
));

// Data obtaining translations
$lang = array_merge($lang, array(
	'STAGE_OBTAIN_DATA'	=> 'Installatiegegevens instellen',

	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR'	=> 'Gegevens beheerder',

	// Form labels
	'ADMIN_CONFIG'				=> 'Beheerdersconfiguratie',
	'ADMIN_PASSWORD'			=> 'Beheerderswachtwoord',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Bevestig beheerderswachtwoord',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Voer een wachtwoord in wat tussen 6 en 30 tekens lang is.',
	'ADMIN_USERNAME'			=> 'Beheerdersgebruikersnaam',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Voer een gebruikersnaam in wat tussen 3 en 20 tekens lang is.',

	// Errors
	'INST_ERR_EMAIL_INVALID'		=> 'Het e-mailadres dat je hebt ingevoerd is ongeldig.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'De wachtwoorden die je hebt ingevoerd komen niet overeen.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Het wachtwoord dat je hebt ingevoerd is te lang. De maximale lengte is 30 tekens.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Het wachtwoord dat je hebt ingevoerd is te kort. De minimale lengte is 6 tekens.',
	'INST_ERR_USER_TOO_LONG'		=> 'De gebruikersnaam die je hebt ingevoerd is te lang. De maximale lengte is 20 tekens.',
	'INST_ERR_USER_TOO_SHORT'		=> 'De gebruikersnaam die je hebt ingevoerd is te kort. De minimale lengte is 3 tekens.',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'		=> 'Forumconfiguratie',
	'DEFAULT_LANGUAGE'	=> 'Standaard taal',
	'BOARD_NAME'		=> 'Sitenaam',
	'BOARD_DESCRIPTION'	=> 'Korte sitebeschrijving',

	//
	// Database data
	//
	'STAGE_DATABASE'	=> 'Database-instellingen',

	// Form labels
	'DB_CONFIG'				=> 'Databaseconfiguratie',
	'DBMS'					=> 'Databasetype',
	'DB_HOST'				=> 'Hostnaam of DSN databaseserver',
	'DB_HOST_EXPLAIN'		=> 'DSN staat voor Data Source Name en is alleen relevant voor ODBC-installaties. Gebruik op PostgreSQL localhost om verbinding te maken met de lokale server via de UNIX-domein socket en via 127.0.0.1 om verbinding te maken via TCP. Voor SQLite moet je het volledige pad invoeren van het databasebestand.',
	'DB_PORT'				=> 'Databaseserverpoort',
	'DB_PORT_EXPLAIN'		=> 'Laat dit veld leeg, tenzij de server op een niet-standaard poort werkt.',
	'DB_PASSWORD'			=> 'Databasewachtwoord',
	'DB_NAME'				=> 'Databasenaam',
	'DB_USERNAME'			=> 'Databasegebruikersnaam',
	'DATABASE_VERSION'		=> 'Databaseversie',
	'TABLE_PREFIX'			=> 'Prefix voor tabellen in de database',
	'TABLE_PREFIX_EXPLAIN'	=> 'De prefix moet starten met een letter en mag alleen letters, getallen en onderstrepingen bevatten.',

	// Database options
	'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Server 2000+ via ODBC',
	'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Server 2005+ [ Native ]',
	'DB_OPTION_MYSQLI'		=> 'MySQL met MySQLi Extensie',
	'DB_OPTION_ORACLE'		=> 'Oracle',
	'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
	'DB_OPTION_SQLITE3'		=> 'SQLite 3',

	// Errors
	'INST_ERR_DB'					=> 'Database-installatiefout',
	'INST_ERR_NO_DB'				=> 'De PHP-module kon niet worden geladen voor het geselecteerde databasetype.',
	'INST_ERR_DB_INVALID_PREFIX'	=> 'De prefix die je hebt ingevoerd is onjuist. Het moet starten met een letter en mag alleen letters, getallen en onderstrepingen bevatten.',
	'INST_ERR_PREFIX_TOO_LONG'		=> 'De tabelprefix dat je hebt ingevoerd is te lang. De maximale lengte is %d tekens.',
	'INST_ERR_DB_NO_NAME'			=> 'Geen databasenaam opgegeven.',
	'INST_ERR_DB_FORUM_PATH'		=> 'Het databasebestand dat is opgegeven bevindt zich binnen de forum-mappen structuur. Je zal dit bestand moeten plaatsen in een locatie die niet via het web toegankelijk is.',
	'INST_ERR_DB_CONNECT'			=> 'Kon geen verbinding leggen met de database, zie de foutmelding hieronder.',
	'INST_ERR_DB_NO_WRITABLE'		=> 'Zowel de database en de map daarvan moeten schrijfbaar zijn.',
	'INST_ERR_DB_NO_ERROR'			=> 'Geen foutmelding gegeven.',
	'INST_ERR_PREFIX'				=> 'Tabellen met de opgegeven prefix bestaan al, kies een andere prefix.',
	'INST_ERR_DB_NO_MYSQLI'			=> 'De versie van MySQL die geïnstalleerd is op deze server werkt niet met de “MySQL met MySQLi-extensie”-optie die je hebt geselecteerd. Probeer in plaats daarvan de optie “MySQL”.',
	'INST_ERR_DB_NO_SQLITE3'		=> 'De versie van de SQLite-extensie die je hebt geïnstalleerd is te oud, het moet bijgewerkt worden naar versie 3.6.15.',
	'INST_ERR_DB_NO_ORACLE'			=> 'De versie van Oracle die geïnstalleerd is op deze server verplicht je om de <var>NLS_CHARACTERSET</var>-parameter te laten instellen naar <var>UTF8</var>. Je kunt de installatie updaten naar 9.2+ of de parameter veranderen.',
	'INST_ERR_DB_NO_POSTGRES'		=> 'De database die je hebt geselecteerd is niet aangemaakt in <var>UNICODE</var> of <var>UTF8</var>-codering. Probeer de database te installeren in <var>UNICODE</var> of <var>UTF8</var>-codering.',
	'INST_SCHEMA_FILE_NOT_WRITABLE'	=> 'Geen schrijfpermissie op deze database',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> 'E-mail-configuratie',

	// Package info
	'PACKAGE_VERSION'					=> 'Pakketversie geïnstalleerd',
	'UPDATE_INCOMPLETE'				=> 'Je phpBB-installatie is niet correct bijgewerkt.',
	'UPDATE_INCOMPLETE_MORE'		=> 'Lees onderstaande informatie om het probleem op te lossen.',
	'UPDATE_INCOMPLETE_EXPLAIN'		=> '<h1>Incomplete update</h1>

		<p>We hebben geconstateerd dat de laatste update van je phpBB-installatie niet is afgerond. Volg de <a href="%1$s" title="%1$s">database-updater</a>, zorg ervoor dat <em>Aleen database bijwerken</em> is geselecteerd en klik op <strong>Verstuur</strong>. Vergeet niet om de "install"-map te verwijderen nadat de database met succes is bijgewerkt.</p>',

	//
	// Server data
	//
	// Form labels
	'UPGRADE_INSTRUCTIONS'			=> 'Een nieuwe versie met nieuwe functionaliteiten <strong>%1$s</strong> is beschikbaar. Lees a.u.b. <a href="%2$s" title="%2$s"><strong>de aankondiging</strong></a> om te weten te komen wat dit inhoudt en hoe je kunt upgraden.',
	'SERVER_CONFIG'				=> 'Serverconfiguratie',
	'SCRIPT_PATH'				=> 'Scriptpad',
	'SCRIPT_PATH_EXPLAIN'		=> 'Het pad waar phpBB zich bevindt, relatief ten opzichte van het domeinnaam, bijvoorbeeld <samp>/phpBB3</samp>.',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Bedankt, het beheer',
	'CONFIG_SITE_DESC'				=> 'Een korte beschrijving van je forum',
	'CONFIG_SITENAME'				=> 'jedomein.nl',

	'DEFAULT_INSTALL_POST'			=> '<t>Dit is een voorbeeldbericht van je phpBB3-installatie. Alles lijkt te werken. Je mag dit bericht verwijderen als je wil en verdergaan met het instellen van je forum. Tijdens het installatieproces zijn je eerste categorie en je eerste forum ingesteld met de juiste permissies voor de voorgeïnstalleerde gebruikersgroepen beheerders, zoekrobots, algemene moderators, gasten, geregistreerde gebruikers en geregistreerde COPPA-gebruikers. Als je je eerste categorie en je eerste forum wil verwijderen, vergeet dan niet voor al deze gebruikersgroepen voor alle nieuwe categorieën en forums die je hebt aangemaakt de permissies in te stellen. Het is aan te bevelen om je eerste categorie en je eerste forum te hernoemen en de permissies hiervan te kopiëren wanneer je nieuwe categorieën en forums aanmaakt. Veel plezier!</t>',

	'FORUMS_FIRST_CATEGORY'			=> 'Je eerste categorie',
	'FORUMS_TEST_FORUM_DESC'		=> 'Beschrijving van je eerste forum.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Je eerste forum',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Beheerder',
	'REPORT_WAREZ'					=> 'Dit bericht bevat links naar illegale software.',
	'REPORT_SPAM'					=> 'Het gemelde bericht heeft als enig doel om te adverteren voor een website of ander product.',
	'REPORT_OFF_TOPIC'				=> 'Het gemelde bericht is off-topic.',
	'REPORT_OTHER'					=> 'Het gemelde bericht valt niet in een andere categorie, gebruik het informatieveld hieronder:',

	'SMILIES_ARROW'					=> 'Pijl',
	'SMILIES_CONFUSED'				=> 'Verward',
	'SMILIES_COOL'					=> 'Cool',
	'SMILIES_CRYING'				=> 'Huilen',
	'SMILIES_EMARRASSED'			=> 'Beschaamd',
	'SMILIES_EVIL'					=> 'Erg boos',
	'SMILIES_EXCLAMATION'			=> 'Uitroep',
	'SMILIES_GEEK'					=> 'Geek',
	'SMILIES_IDEA'					=> 'Idee',
	'SMILIES_LAUGHING'				=> 'Lachend',
	'SMILIES_MAD'					=> 'Gek',
	'SMILIES_MR_GREEN'				=> 'Mr. Groen',
	'SMILIES_NEUTRAL'				=> 'Neutraal',
	'SMILIES_QUESTION'				=> 'Vraag',
	'SMILIES_RAZZ'					=> 'Razz',
	'SMILIES_ROLLING_EYES'			=> 'Rollende ogen',
	'SMILIES_SAD'					=> 'Bedroefd',
	'SMILIES_SHOCKED'				=> 'Geschokt',
	'SMILIES_SMILE'					=> 'Lach',
	'SMILIES_SURPRISED'				=> 'Verrast',
	'SMILIES_TWISTED_EVIL'			=> 'Kwaadaardig',
	'SMILIES_UBER_GEEK'				=> 'Uber geek',
	'SMILIES_VERY_HAPPY'			=> 'Erg blij',
	'SMILIES_WINK'					=> 'Knipoog',

	'TOPICS_TOPIC_TITLE'			=> 'Welkom bij phpBB3',
));

// Common navigation items' translation
$lang = array_merge($lang, array(
	'MENU_OVERVIEW'		=> 'Overzicht',
	'MENU_INTRO'		=> 'Introductie',
	'MENU_LICENSE'		=> 'Licentie (Engelstalig)',
	'MENU_SUPPORT'		=> 'Support',
));

// Task names
$lang = array_merge($lang, array(
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'	=> 'Configuratiebestand creëren',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'			=> 'Configuratieinstellingen toevoegen',
	'TASK_ADD_DEFAULT_DATA'				=> 'Standaardinstellingen aan de database toevoegen',
	'TASK_CREATE_DATABASE_SCHEMA_FILE'	=> 'Databaseschemabestand creëren',
	'TASK_SETUP_DATABASE'				=> 'Database opzetten',
	'TASK_CREATE_TABLES'				=> 'Tabellen creëren',

	// Install data
	'TASK_ADD_BOTS'			=> 'Bots registreren',
	'TASK_ADD_LANGUAGES'	=> 'Beschikbare talen installeren',
	'TASK_ADD_MODULES'		=> 'Modules installeren',
	'TASK_CREATE_SEARCH_INDEX'	=> 'Zoekindex aanmaken',

	// Install finish tasks
	'TASK_INSTALL_EXTENSIONS'	=> 'Gebundelde extensies installeren',
	'TASK_NOTIFY_USER'			=> 'Notificatie-e-mail versturen',
	'TASK_POPULATE_MIGRATIONS'	=> 'Migraties vullen',

	// Installer general progress messages
	'INSTALLER_FINISHED'	=> 'De installatie is succesvol voltooid',
));

// Installer's general messages
$lang = array_merge($lang, array(
	'MODULE_NOT_FOUND'				=> 'Module niet gevonden',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> 'Een module kon niet gevonden worden omdat de service %s niet is gedefiniëerd.',

	'TASK_NOT_FOUND'				=> 'Taak niet gevonden',
	'TASK_NOT_FOUND_DESCRIPTION'	=> 'Een taak kon niet gevonden worden omdat de service %s niet is gedefiniëerd.',

	'SKIP_MODULE'	=> 'Sla module “%s” over',
	'SKIP_TASK'		=> 'Sla taak “%s” over',

	'TASK_SERVICE_INSTALLER_MISSING'	=> 'Alle installatietaakservices horen te beginnen met “installer”',
	'TASK_CLASS_NOT_FOUND'				=> 'Installatietaakservicedefinitie is onjuist. Servicenaam is “%1$s”, de verwachte namespace hiervoor is “%2$s”. Raadpleeg voor meer informatie de documentatie over task_interface.',

	'INSTALLER_CONFIG_NOT_WRITABLE'	=> 'Het installatieprogrammaconfiguratiebestand is niet schrijfbaar.',
));

// CLI messages
$lang = array_merge($lang, array(
	'CLI_INSTALL_BOARD'				=> 'phpBB installeren',
	'CLI_UPDATE_BOARD'				=> 'phpBB updaten',
	'CLI_INSTALL_SHOW_CONFIG'		=> 'De configuratie die gebruikt zal worden weergeven',
	'CLI_INSTALL_VALIDATE_CONFIG'	=> 'Valideer een configuratiebestand',
	'CLI_CONFIG_FILE'				=> 'Configuratiebestand dat gebruikt moet worden',
	'MISSING_FILE'					=> 'Niet in staat om toegang te krijgen tot het bestand %1$s',
	'MISSING_DATA'					=> 'Het configuratiebestand is niet aanwezig of bevat ongeldige instellingen.',
	'INVALID_YAML_FILE'				=> 'Kan het YAML-bestand niet parsen %1$s',
	'CONFIGURATION_VALID'			=> 'Het configuratiebestand is geldig',
));

// Common updater messages
$lang = array_merge($lang, array(
	'UPDATE_INSTALLATION'			=> 'phpBB-installatie bijwerken',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Met deze optie is het mogelijk om je phpBB-installatie bij te werken naar de laatste versie.<br />Tijdens het proces zullen alle bestanden gecontroleerd worden op hun integriteit. Je kunt ook alle verschillen bekijken van de bestanden voordat je gaat bijwerken.<br /><br />De bestandsupdate kun je op twee manieren doen.</p><h2>Handmatige update</h2><p>Met deze update download je alleen je persoonlijke set van gewijzigde bestanden om er zeker van te zijn dat je geen extensies kwijt raakt die je hebt geïnstalleerd. Nadat je dit pakket hebt gedownload, zul je de bestanden handmatig moeten uploaden naar hun correcte plaats in je phpBB-hoofdmap (root), dus waar je het bestand config.php, memberlist etc. kunt terugvinden. Wanneer je dat hebt gedaan, kun je opnieuw een bestandscontrole doen om te zien of de bestanden correct zijn geüpload naar de juiste locatie.</p><h2>Geavanceerde update met de FTP</h2><p>Deze methode is bijna hetzelfde als de eerste maar met deze methode hoef je niet de gewijzigde bestanden te downloaden naar je eigen computer. Dit wordt namelijk gedaan voor je. Om deze methode te gebruiken heb je de FTP-aanmeldgegevens nodig wanneer er naar wordt gevraagd. Wanneer dit klaar is, zul je worden doorgestuurd naar de bestandscontrolemethode die controleert of alles correct is bijgewerkt.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Versiemededeling</h1>

		<p>Lees de (Engelstalige) aankondiging voordat je begint met het updaten van je forum, het kan belangrijke informatie bevatten. Je vindt daar ook de volledige downloadlinks en een overzicht van de wijzigingen ( changelog ).</p>

		<br />
		<h1>Hoe kan ik mijn forum updaten met het volledige pakket?</h1>

		<p>De aanbevolen manier van updaten is gebruik maken van het volledige pakket. Indien je basisbestanden van phpBB aangepast hebt kun je ervoor kiezen om het Automatische update-pakket te gebruiken om deze aanpassingen niet kwijt te raken. Je kunt je forum ook updaten met de methodes die beschreven zijn in het <a href="../docs/INSTALL.html">INSTALL.html</a>-document. De stappen om phpBB te updaten met het volledige pakket zijn als volgt:</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li><strong class="error">Maak een back-up van alle bestanden en de database.</strong></li>
			<li>Ga naar <a href="https://www.phpbb.nl/downloads" title="https://www.phpbb.nl/downloads">phpBB.nl</a> en download het laatste "Volledige pakket".</li>
			<li>Pak het archiefbestand uit.</li>
			<li>Verwijder het <code class="inline">config.php</code>-bestand en de mappen <code class="inline">/images</code>, <code class="inline">/store</code> en <code class="inline">/files</code> <em>van het gedownloade pakket</em> (NIET van je website).</li>
			<li>Ga naar het beheerderspaneel, Foruminstellingen en zorg dat prosilver ingesteld is als standaard stijl.</li>
			<li>Verwijder de map <code class="inline">/vendor</code> en <code class="inline">/cache</code> uit de root-map van je forum bij je host.</li>
			<li>Upload via FTP of SSH de overgebleven bestanden en mappen (d.w.z. de overgebleven INHOUD van de phpBB3-map) naar de root map van je forum op de server, daarbij de bestaande bestanden overschrijvend. (Let op: zorg dat je geen eventueel aanwezige extensies in de <code class="inline">/ext</code>-map overschrijft tijdens het uploaden.)</li>
			<li><strong><a href="%1$s" title="%1$s">Start nu het updateproces door met je browser naar de install map te gaan</a>.</strong></li>
			<li>Volg de stappen op het scherm om de database bij te werken, zorg dit proces volledig voltooid.</li>
			<li>Verwijder via FTP of SSH de <code class="inline">/install</code> map uit de root-map van je forum bij je host.<br><br></li>
		</ol>
		
		<p>Je hebt nu een nieuw en bijgewerkt forum met alle gebruikers en berichten. De volgende taken:</p>
		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Werk eventuele andere taalpakketten bij</li>
			<li>Werk je stijl bij<br><br></li>
		</ul>
		
		<h1>Hoe kan ik mijn forum updaten met het Geavanceerde update-pakket?</h1>

		<p>Het Geavanceerde update-pakket is alleen aanbevolen indien de basisbestanden op je forum zijn aangepast. Je kunt je forum ook updaten met de methodes die beschreven zijn in het <a href="../docs/INSTALL.html">INSTALL.html</a>-document. De stappen om phpBB3 automatisch te updaten zijn als volgt:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Ga naar de downloadspagina van <a href="https://www.phpbb.nl/downloads/" title="http://www.phpbb.nl/downloads/">phpBB.nl</a> en download het "Geavandceerde update-pakket".</li>
			<li>Pak het archiefbestand uit.</li>
			<li>Upload de uitgepakte "install"- en "vendor"-mappen naar je phpBB-hoofdmap (waar je config.php staat).<br /><br /></li>
		</ul>

		<p>Eenmaal geüpload, zal je forum, door het uploaden van de install-map, voor gewone gebruikers uitgeschakeld zijn.<br /><br />
		<strong><a href="%1$s" title="%1$s">Ga nu naar de install-map en begin met het updaten van je forum</a>.</strong><br />
		<br />
		Daar zal je geholpen worden met het updaten. Je wordt ook op de hoogte gebracht zodra alles geüpdatet is.
		</p>
	',
));

// Updater forms
$lang = array_merge($lang, array(
	// Updater types
	'UPDATE_TYPE'			=> 'Updatetype dat gedraaid moet worden',

	'UPDATE_TYPE_ALL'		=> 'Het bestandssysteem en de database updaten',
	'UPDATE_TYPE_DB_ONLY'	=> 'Alleen de database updaten',

	// File updater methods
	'UPDATE_FILE_METHOD_TITLE'		=> 'Bestandenupdatemethodes',

	'UPDATE_FILE_METHOD'			=> 'Bestandenupdatemethode',
	'UPDATE_FILE_METHOD_DOWNLOAD'	=> 'Aangepast bestandsarchief downloaden',
	'UPDATE_FILE_METHOD_FTP'		=> 'Updaten via FTP (automatisch)',
	'UPDATE_FILE_METHOD_FILESYSTEM'	=> 'Update via directe bestandstoegang (automatisch)',

	// File updater archives
	'SELECT_DOWNLOAD_FORMAT'	=> 'Bestandsformaat voor het archief kiezen',

	// FTP settings
	'FTP_SETTINGS'			=> 'FTP-instellingen',
));

// Requirements messages
$lang = array_merge($lang, array(
	'UPDATE_FILES_NOT_FOUND'	=> 'Er is geen geldige update map gevonden, controleer of de de juiste bestanden naar de juiste locatie hebt geüpload.',

	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Je versie is up-to-date. Het is niet nodig om het updatehulpmiddel uit te voeren. Als je een integriteitscontrole wil uitvoeren op de bestanden, wees er dan zeker van dat je de correcte updatebestanden upload.',
	'OLD_UPDATE_FILES'				=> 'De updatebestanden zijn niet up-to-date. De updatebestanden die gevonden zijn, zijn voor een update van phpBB %1$s naar phpBB %2$s maar de laatste versie van phpBB is %3$s.',
	'INCOMPATIBLE_UPDATE_FILES'		=> 'De updatebestanden zijn onverenigbaar met de geïnstalleerde versie. De geïnstalleerde versie is %1$s en de updatebestanden zijn voor het bijwerken van phpBB %2$s naar %3$s.',
));

// Update files
$lang = array_merge($lang, array(
	'STAGE_UPDATE_FILES'		=> 'Bestanden updaten',

	// Check files
	'UPDATE_CHECK_FILES'	=> 'Controleer bestanden om te updaten',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> 'Het bestanden vergelijken kon niet geopend worden %s.',

	'UPDATE_FILE_DIFF'		=> 'Aangepaste bestanden vergelijken',
	'ALL_FILES_DIFFED'		=> 'Alle aangepaste bestanden zijn vergeleken.',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE'	=> 'Bestanden updaten',

	'DOWNLOAD'							=> 'Download',
	'DOWNLOAD_CONFLICTS'				=> 'Conflicten voor dit bestand downloaden',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Zoek voor &lt;&lt;&lt; om te kijken voor conflicten',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Aangepast bestandsarchief downloaden',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Wanneer je het archief hebt gedownload, moet je het archief uitpakken. Je vindt de aangepaste bestanden die je moet uploaden naar je phpBB-hoofdmap (waar je o.a het bestand config.php, memberlist.php etc kan terugvinden) in het archief. Upload de bestanden dan naar de juiste locaties. Wanneer je alle bestanden hebt geüpload, controleer je de bestanden opnieuw met de andere knop hieronder.',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Bestand is al bijgewerkt.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Bestand niet toegestaan om ge-diff-t te worden.',
	'FILE_USED'						=> 'Informatie gebruikt van',			// Single file
	'FILES_CONFLICT'				=> 'Conflicterende bestanden',
	'FILES_CONFLICT_EXPLAIN'		=> 'De volgende bestanden zijn aangepast en vertegenwoordigen niet de originele bestanden van de oude versie. phpBB heeft ontdekt dat deze bestanden conflicten veroorzaken als ze worden samengevoegd. Onderzoek deze conflicten en probeer ze handmatig op te lossen of hervat het updateproces en kies dan de samenvoegingsmethode van je voorkeur. Wanneer je de conflicten handmatig oplost, vergeet dan niet om de bestanden daarna opnieuw te controleren nadat je ze hebt aangepast. Je kunt ook nog kiezen welke samenvoegingsmethode je wil gebruiken voor elk bestand. De eerste methode zal het resultaat hebben dat de regels die een conflict veroorzaakten in het bestand zullen worden verwijderd, de andere manier zal als resultaat hebben dat je al je aanpassingen kwijtraakt van het nieuwere bestand.',
	'FILES_DELETED'					=> 'Verwijderde bestanden',
	'FILES_DELETED_EXPLAIN'			=> 'De volgende bestanden bestaan niet meer in de nieuwe versie. Deze bestanden zullen verwijderd moeten worden van je installatie.',
	'FILES_MODIFIED'				=> 'Aangepaste bestanden',
	'FILES_MODIFIED_EXPLAIN'		=> 'De volgende bestanden zijn aangepast en vertegenwoordigen niet de originele bestanden van de oude versie. Het bijgewerkte bestand zal worden samengevoegd met je aanpassingen en het nieuwe bestand.',
	'FILES_NEW'						=> 'Nieuwe bestanden',
	'FILES_NEW_EXPLAIN'				=> 'De volgende bestanden bestaan momenteel niet in je installatie. Deze bestanden zullen worden toegevoegd aan je installatie.',
	'FILES_NEW_CONFLICT'			=> 'Nieuwe conflicterende bestanden',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'De volgende bestanden zijn nieuw in de laatste versie, maar er is bepaald dat er al een bestand bestaat met dezelfde naam op dezelfde positie. Dit bestand zal worden overschreven door het nieuwe bestand.',
	'FILES_NOT_MODIFIED'			=> 'Niet aangepaste bestanden',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'De volgende bestanden zijn niet aangepast, en zijn gelijk aan de originele phpBB-bestanden van de versie die je wil bijwerken.',
	'FILES_UP_TO_DATE'				=> 'Bestanden die al zijn bijgewerkt',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'De volgende bestanden zijn al up-to-date en hoeven niet te worden bijgewerkt.',
	'FILES_VERSION'					=> 'Versie bestanden',
	'TOGGLE_DISPLAY'				=> 'Bestandslijst bekijken/verbergen',

	// File updater
	'UPDATE_UPDATING_FILES'	=> 'Bestanden updaten',

	'UPDATE_FILE_UPDATER_HAS_FAILED'	=> 'Updaten van bestanden via “%1$s“ is mislukt. Het installatieprogramma zal het proberen via de “%2$s“ methode.',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> 'Alle methoden om de bestanden bij te werken zijn mislukt. Er zijn geen alternatieven meer.',

	'UPDATE_CONTINUE_UPDATE_PROCESS'	=> 'Updateproces vervolgen',
	'UPDATE_RECHECK_UPDATE_FILES'		=> 'Bestanden opnieuw controleren',
));

// Update database
$lang = array_merge($lang, array(
	'STAGE_UPDATE_DATABASE'		=> 'Database updaten',

	'INLINE_UPDATE_SUCCESSFUL'		=> 'Het bijwerken van de database is succesvol voltooid.',

	'TASK_UPDATE_EXTENSIONS'	=> 'Extensies bijwerken',
));

// Converter
$lang = array_merge($lang, array(
	// Common converter messages
	'CONVERT_NOT_EXIST'			=> 'De opgegeven convertor bestaat niet.',
	'DEV_NO_TEST_FILE'			=> 'Geen waarde opgegeven voor de test_file variabele in de convertor. Als je een gebruiker bent van deze convertor hoor je deze foutmelding niet te zien, meld dit bericht aan de auteur van de convertor. Als je de convertor-auteur bent, moet je de naam of een bestand opgeven die bestaat in het bronforum om het pad erheen te verifiëren.',
	'COULD_NOT_FIND_PATH'		=> 'Kan het pad naar je oude forum niet vinden. Controleer a.u.b. je instelligen en probeer het opnieuw.<br>» %s was opgegeven als pad.',
	'CONFIG_PHPBB_EMPTY'		=> 'De phpBB3-configuratievariabele voor “%s” is leeg.',

	'MAKE_FOLDER_WRITABLE'		=> 'Wees er zeker van dat de map bestaat en schrijfbaar is voor de webserver en probeer het dan opnieuw:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Wees er zeker van dat deze mappen bestaan en schrijfbaar zijn voor de webserver en probeer het dan opnieuw:<br />»<strong>%s</strong>.',

	'INSTALL_TEST'				=> 'Opnieuw testen',

	'NO_TABLES_FOUND'			=> 'Er zijn geen tabellen gevonden.',
	'TABLES_MISSING'			=> 'De volgende tabellen kunnen niet worden gevonden<br />» <strong>%s</strong>.',
	'CHECK_TABLE_PREFIX'		=> 'Controleer de tabelprefix en probeer opnieuw.',

	// Conversion in progress
	'CONTINUE_CONVERT'			=> 'Conversie hervatten',
	'CONTINUE_CONVERT_BODY'		=> 'Een vorige conversiepoging is gevonden. Je kunt nu kiezen tussen het starten van een nieuwe conversie of doorgaan met de vorige conversie.',
	'CONVERT_NEW_CONVERSION'	=> 'Nieuwe conversie',
	'CONTINUE_OLD_CONVERSION'	=> 'Doorgaan met vorige conversie',

	// Start conversion
	'SUB_INTRO'					=> 'Introductie',
	'CONVERT_INTRO'				=> 'Welkom bij de phpBB Unified Convertor Framework',
	'CONVERT_INTRO_BODY'		=> 'Vanuit hier kun je de data van andere geïnstalleerde forumsoftware overzetten. Hieronder zie je alle convertors die momenteel beschikbaar zijn. Als er geen convertor is weergegeven voor de forumsoftware die je wenst te gaan converteren, controleer dan op onze website of de modules beschikbaar zijn om te kunnen downloaden.',
	'AVAILABLE_CONVERTORS'		=> 'Beschikbare convertors',
	'NO_CONVERTORS'				=> 'Er zijn geen convertors beschikbaar om te gebruiken.',
	'CONVERT_OPTIONS'			=> 'Opties',
	'SOFTWARE'					=> 'Forumsoftware',
	'VERSION'					=> 'Versie',
	'CONVERT'					=> 'Converteer',

	// Settings
	'STAGE_SETTINGS'			=> 'Instellingen',
	'TABLE_PREFIX_SAME'			=> 'De tabelprefix moet hetzelfde zijn als de software waarvan je wil converteren.<br />» Ingevoerde tabelprefix was %s.',
	'DEFAULT_PREFIX_IS'			=> 'De convertor was niet in staat om de tabel te vinden met de opgegeven prefix. Wees er zeker van dat je de juiste gegevens hebt ingevuld van het forum waarvan je wil converteren. De standaard tabelprefix voor %1$s is <strong>%2$s</strong>.',
	'SPECIFY_OPTIONS'			=> 'Opties opgeven voor de conversie',
	'FORUM_PATH'				=> 'Forumpad',
	'FORUM_PATH_EXPLAIN'		=> 'Dit is het <strong>relatieve</strong> pad op de server naar je oude forum vanaf de <strong>root van je phpBB3-installatie</strong>.',
	'REFRESH_PAGE'				=> 'Vernieuw de pagina om door te gaan met de conversie',
	'REFRESH_PAGE_EXPLAIN'		=> 'Als je dit instelt op ja, dan zal de convertor de pagina vernieuwen om door te gaan met de conversie nadat er een stap is voltooid. Als dit je eerste conversie is voor testdoeleinden en om te bepalen of er enige fouten optreden, raden wij je aan om deze optie op nee in te stellen.',

	// Conversion
	'STAGE_IN_PROGRESS'			=> 'Bezig met converteren',

	'AUTHOR_NOTES'				=> 'Opmerkingen van de auteur<br />» %s',
	'STARTING_CONVERT'			=> 'Conversieproces starten',
	'CONFIG_CONVERT'			=> 'Bezig met het converteren van de configuratie',
	'DONE'						=> 'Klaar',
	'PREPROCESS_STEP'			=> 'Bezig met het uitvoeren van de voorprocedure van functies/query\'s',
	'FILLING_TABLE'				=> 'Vullen van tabel <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Vullen van tabellen',
	'DB_ERR_INSERT'				=> 'Fout tijdens het verwerken van de <code>INSERT</code>-query.',
	'DB_ERR_LAST'				=> 'Fout tijdens het verwerken van de <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Fout tijdens het verwerken van de <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Fout tijdens het verwerken van de <var>query_first</var>, %s (“%s”).',
	'DB_ERR_SELECT'				=> 'Fout opgetreden tijdens het uitvoeren van een <code>SELECT</code>-query.',
	'STEP_PERCENT_COMPLETED'	=> 'Stap <strong>%d</strong> van <strong>%d</strong>',
	'FINAL_STEP'				=> 'Doorgaan met de laatste stap',
	'SYNC_FORUMS'				=> 'Synchronisatie van forums gestart',
	'SYNC_POST_COUNT'			=> 'Bezig met het synchroniseren van post_counts',
	'SYNC_POST_COUNT_ID'		=> 'Bezig met het synchroniseren van post_counts van <var>entry</var> %1$s tot en met %2$s.',
	'SYNC_TOPICS'				=> 'Synchronisatie van onderwerpen gestart',
	'SYNC_TOPIC_ID'				=> 'Bezig met het synchroniseren van onderwerpen van <var>topic_id</var> %1$s tot %2$s.',
	'PROCESS_LAST'				=> 'Bezig met de laatste stappen',
	'UPDATE_TOPICS_POSTED'		=> 'Genereren van informatie geplaatste onderwerpen',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Er is een fout ontstaan terwijl er informatie over geplaatste onderwerpen werd gegenereerd. Je kunt deze stap opnieuw uitvoeren in het beheerderspaneel nadat het conversieproces is voltooid.',
	'CONTINUE_LAST'				=> 'Doorgaan met de laatste stappen',
	'CLEAN_VERIFY'				=> 'Opschonen en bevestigen van de uiteindelijke structuur',
	'NOT_UNDERSTAND'			=> 'Kan het volgende niet begrijpen %s #%d, tabel %s (“%s”)',
	'NAMING_CONFLICT'			=> 'Naamconflict: %s en %s zijn beide aliasen<br /><br />%s',

	// Finish conversion
	'CONVERT_COMPLETE'			=> 'Conversie compleet',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Je hebt succesvol je forum geconverteerd naar phpBB 3.3. Je kunt je nu <a href="../">aanmelden op je forum</a>. Voordat je de install-map verwijderd en je forum ingeschakeld, controleer of alle instellingen correct zijn overgezet. Online hulp is beschikbaar via de volgende Nederlandstalige support-website <a href="http://www.phpbb.nl/">phpBB.nl</a>.',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'FTP-upload voor bijlagen is ingeschakeld op het oude forum. Schakel de FTP-uploadoptie uit en zorg ervoor dat je een geldige uploadmap opgeeft, kopieer daarna alle bijlagenbestanden naar de nieuwe web toegankelijke map. Wanneer je dit hebt gedaan, herstart je de convertor.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Er is geen configuratie-informatie beschikbaar voor de conversie.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Kan geen forumtoegangsinformatie verkrijgen.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Kan geen categorieën verkrijgen.',
	'CONV_ERROR_GET_CONFIG'				=> 'Kan niet je forumconfiguratie ophalen.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Onmogelijk om “%s” te openen/lezen.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Kan geen groepsauthenticatie-informatie verkijgen.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Onregelmatigheden in de “groups”-tabel gevonden in add_bots() - je moet alle speciale groepen handmatig toevoegen.',
	'CONV_ERROR_INSERT_BOT'				=> 'Kan de bot niet toevoegen aan de “user”-tabel.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Kan de bot niet toevoegen aan de “bots”-tabel.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Kan de gebruiker niet toevoegen aan de “user_group”-tabel.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Berichtenparserfout',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Bericht aan de ontwikkelaar: je moet $convertor[\'avatar_path\'] opgeven door %s te gebruiken.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Het relatieve pad naar het bronforum is niet opgegeven.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Bericht aan de ontwikkelaar: je moet $convertor[\'avatar_gallery_path\'] opgeven door %s te gebruiken.',
	'CONV_ERROR_NO_GROUP'				=> 'Groep “%1$s” kan niet worden gevonden in %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Bericht aan de ontwikkelaar: je moet $convertor[\'ranks_path\'] opgeven door %s te gebruiken.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Bericht aan de ontwikkelaar: je moet $convertor[\'smilies_path\'] opgeven door %s te gebruiken.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Bericht aan de ontwikkelaar: je moet $convertor[\'upload_path\'] opgeven door %s te gebruiken.',
	'CONV_ERROR_PERM_SETTING'			=> 'Kan de permissiesinstellingen niet bijwerken of toevoegen.',
	'CONV_ERROR_PM_COUNT'				=> 'Kan de PB-tellermap niet selecteren.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Kan het nieuwe forum niet toevoegen tijdens het vervangen van een oude categorie.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Kan het nieuwe forum niet vervangen met het oude forum.',
	'CONV_ERROR_USER_ACCESS'			=> 'Kan de gebruikersauthenticatie-informatie niet verkrijgen.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Verkeerde groep “%1$s” opgegeven in %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Deze pagina verzamelt alle nodige gegevens die nodig zijn om toegang te hebben tot het bronforum. Voer de databasegegevens in van je vorige forum; de convertor zal niks veranderen in de database die je hieronder opgeeft. Het bronforum zal uitgeschakeld moeten zijn om een zo goed als mogelijke conversie te krijgen.',
	'CONV_SAVED_MESSAGES'				=> 'Opgeslagen berichten',

	'PRE_CONVERT_COMPLETE'			=> 'Alle voorbereidende conversiestappen zijn succesvol voltooid. Je mag nu beginnen met het werkelijke conversieproces. Hou in de gaten dat je waarschijnlijk diverse dingen handmatig moet aanpassen. Na de conversie zul je vooral de toegewezen permissies moeten controleren en de zoekindex moeten herbouwen, aangezien die niet mee wordt geconverteerd. Kijk ook of bestanden correct zijn gekopiëerd, bijvoorbeeld de avatars en smilies.',
));
