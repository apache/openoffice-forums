<?php
/**
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
* Magyar fordítás (c) 2007-2021 „Magyar phpBB Közösség fordítók”,
* http://phpbb.hu
*
* $Id$
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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Adminisztrátorok',
	'ACP_ADMIN_LOGS'			=> 'Adminisztrátori napló',
	'ACP_ADMIN_ROLES'			=> 'Adminisztrátori szerepek',
	'ACP_ATTACHMENTS'			=> 'Csatolmányok',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Csatolmány beállítások',
	'ACP_AUTH_SETTINGS'			=> 'Azonosítás', //? hitelesítéss
	'ACP_AUTOMATION'			=> 'Automatizálás', //? 'Automatizáció'
	'ACP_AVATAR_SETTINGS'		=> 'Avatar beállítások',

	'ACP_BACKUP'				=> 'Kimentés',
	'ACP_BAN'					=> 'Kitiltások', //? "Banning" használják egyáltalán valahol (milyen értelemben)?
	'ACP_BAN_EMAILS'			=> 'E-mail címek kitiltása',
	'ACP_BAN_IPS'				=> 'IP-címek kitiltása',
	'ACP_BAN_USERNAMES'			=> 'Felhasználók kitiltása',
	'ACP_BBCODES'				=> 'BBCode-ok',
	'ACP_BOARD_CONFIGURATION'	=> 'Fórum konfiguráció', //? "Board configuration" 'Fórum beállítás'
	'ACP_BOARD_FEATURES'		=> 'Fórum funkciók', // szolgáltatások?
	'ACP_BOARD_MANAGEMENT'		=> 'Fórum kezelése', //? "Board management" használják egyáltalán valahol?
	'ACP_BOARD_SETTINGS'		=> 'Fórum beállítások',
	'ACP_BOTS'					=> '(Kereső)robotok', //?

	'ACP_CAPTCHA'				=> 'Vizuális megerősítés', //? 'CAPTCHA'?

	'ACP_CAT_CUSTOMISE'			=> 'Testreszabás',
	'ACP_CAT_DATABASE'			=> 'Adatbázis',
	'ACP_CAT_DOT_MODS'			=> 'Kiterjesztések', //?
	'ACP_CAT_FORUMS'			=> 'Fórumok',
	'ACP_CAT_GENERAL'			=> 'Általános',
	'ACP_CAT_MAINTENANCE'		=> 'Karbantartás',
	'ACP_CAT_PERMISSIONS'		=> 'Jogosultságok',
	'ACP_CAT_POSTING'			=> 'Üzenetküldés', //? 'Hozzászólások', 'Üzenetek', 'Hozzászólásküldés', 'Üzenetküldés'
	'ACP_CAT_STYLES'			=> 'Megjelenések',
	'ACP_CAT_SYSTEM'			=> 'Rendszer',
	'ACP_CAT_USERGROUP'			=> 'Felhasználók és csoportok',
	'ACP_CAT_USERS'				=> 'Felhasználók',
	'ACP_CLIENT_COMMUNICATION'	=> 'Kommunikáció a kliensekkel', //? 'Kapcsolat a kliensekkel', 'Kliens kommunikáció', 'Kommunikáció a kliensekkel'
	'ACP_COOKIE_SETTINGS'		=> 'Süti beállítások',
	'ACP_CONTACT'				=> 'Kapscolat oldal',
	'ACP_CONTACT_SETTINGS'		=> 'Kapcsolat oldal beállítások',
	'ACP_CRITICAL_LOGS'			=> 'Hibanapló',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Egyedi profil mezők',

	'ACP_DATABASE'				=> 'Adatbázis-kezelés',
	'ACP_DISALLOW'				=> 'Letiltás',
	'ACP_DISALLOW_USERNAMES'	=> 'Felhasználónevek letiltása',

	'ACP_EMAIL_SETTINGS'		=> 'E-mail beállítások',
	'ACP_EXTENSION_GROUPS'		=> 'Csatolmány kiterjesztéscsoportok kezelése',
	'ACP_EXTENSION_MANAGEMENT'	=> 'Kiterjesztések kezelése',
	'ACP_EXTENSIONS'			=> 'Kiterjesztések',

	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Fórum alapú jogosultságok', //?? "Forum based permissions" a jogosultságokhoz ki kell találni egy terminológiát
	'ACP_FORUM_LOGS'				=> 'Fórum naplók',
	'ACP_FORUM_MANAGEMENT'			=> 'Fórumok kezelése', //? használják?
	'ACP_FORUM_MODERATORS'			=> 'Fórum moderátorok',
	'ACP_FORUM_PERMISSIONS'			=> 'Fórum jogosultságok',
	'ACP_FORUM_PERMISSIONS_COPY'	=> 'Fórum jogosultságok másolása',
	'ACP_FORUM_ROLES'				=> 'Fórum szerepek',

	'ACP_GENERAL_CONFIGURATION'		=> 'Általános konfiguráció', //? használják
	'ACP_GENERAL_TASKS'				=> 'Általános dolgok', //?? "General tasks" 'Általános feladatok' 'Általános dolgok'
	'ACP_GLOBAL_MODERATORS'			=> 'Globális moderátorok',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Globális jogosultságok',
	'ACP_GROUPS'					=> 'Csoportok',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Csoport fórum jogosultságai', //? "Groups’ forum permissions"
	'ACP_GROUPS_MANAGE'				=> 'Csoportok kezelése',
	'ACP_GROUPS_MANAGEMENT'			=> 'Csoport-kezelés',
	'ACP_GROUPS_PERMISSIONS'		=> 'Csoport jogosultságai',
	'ACP_GROUPS_POSITION'			=> 'Csoport helyének kezelése', //?

	'ACP_HELP_PHPBB'			=> 'Segítsd a phpBB-t', //? "Help support phpBB"

	'ACP_ICONS'					=> 'Téma ikonok',
	'ACP_ICONS_SMILIES'			=> 'Téma ikonok/emotikonok',
	'ACP_INACTIVE_USERS'		=> 'Inaktív felhasználók',
	'ACP_INDEX'					=> 'AVP kezdőlap',

	'ACP_JABBER_SETTINGS'		=> 'Jabber beállítások',

	'ACP_LANGUAGE'				=> 'Nyelv-kezelés',
	'ACP_LANGUAGE_PACKS'		=> 'Nyelvi csomagok',
	'ACP_LOAD_SETTINGS'			=> 'Terhelés beállítások',
	'ACP_LOGGING'				=> 'Naplózás',

	'ACP_MAIN'					=> 'AVP kezdőlap',

	'ACP_MANAGE_ATTACHMENTS'			=> 'Csatolmányok kezelése',
	'ACP_MANAGE_ATTACHMENTS_EXPLAIN'	=> 'Itt kezelheted a hozzászólásokban és privát üzenetekben lévő csatolmáynokat.',

	'ACP_MANAGE_EXTENSIONS'		=> 'Csatolmány kiterjesztések kezelése', //? egybeírás
	'ACP_MANAGE_FORUMS'			=> 'Fórumok kezelése',
	'ACP_MANAGE_RANKS'			=> 'Rangok kezelése',
	'ACP_MANAGE_REASONS'		=> 'Jelentés/visszautasítás okok kezelése',
	'ACP_MANAGE_USERS'			=> 'Felhasználók kezelése',
	'ACP_MASS_EMAIL'			=> 'Csoportos e-mail',
	'ACP_MESSAGES'				=> 'Üzenetek',
	'ACP_MESSAGE_SETTINGS'		=> 'Privát üzenet beállítások',
	'ACP_MODULE_MANAGEMENT'		=> 'Modulok kezelése',
	'ACP_MOD_LOGS'				=> 'Moderátori napló',
	'ACP_MOD_ROLES'				=> 'Moderátori szerepek',

	'ACP_NO_ITEMS'				=> 'Még nincs ilyen elem.',

	'ACP_ORPHAN_ATTACHMENTS'	=> 'Árva csatolmányok',

	'ACP_PERMISSIONS'			=> 'Jogosultságok',
	'ACP_PERMISSION_MASKS'		=> 'Effektív jogosultságok', //?? "Permission masks", 'Tényleges jogosultságok', 'Alkalmazott jogosultságok'
	'ACP_PERMISSION_ROLES'		=> 'Jogosultság szerepek',
	'ACP_PERMISSION_TRACE'		=> 'Jogosultság visszakövetés',
	'ACP_PHP_INFO'				=> 'PHP információ',
	'ACP_POST_SETTINGS'			=> 'Hozzászólás beállítások',
	'ACP_PRUNE_FORUMS'			=> 'Fórumok megtisztítása', //?? alternatívák a prune-re: 'tisztítás', 'tisztogatás', 'automatikus tisztítás', 'automatikus törlés', 'megnyirbálás', 'megtisztítás', 'gyomlálás', 'megnyesés' - egyre jobbak :D
	'ACP_PRUNE_USERS'			=> 'Felhasználók megtisztítása',
	'ACP_PRUNING'				=> 'Megtisztítás', //?

	'ACP_QUICK_ACCESS'			=> 'Gyorsmenü',

	'ACP_RANKS'					=> 'Rangok',
	'ACP_REASONS'				=> 'Jelentés/visszautasítás okok',
	'ACP_REGISTER_SETTINGS'		=> 'Felhasználói regisztrációs beállítások', //? kell a felhasználói? (nem)

	'ACP_RESTORE'				=> 'Visszaállítás',

	'ACP_FEED'					=> 'Csatornák kezelése', //?
	'ACP_FEED_SETTINGS'			=> 'Csatorna beállítások', //? 'Szindikáció beállítások'? 'ATOM beállítások'?

	'ACP_SEARCH'				=> 'Kereső konfiguráció',
	'ACP_SEARCH_INDEX'			=> 'Keresőindex',
	'ACP_SEARCH_SETTINGS'		=> 'Kereső beállítások',

	'ACP_SECURITY_SETTINGS'		=> 'Biztonsági beállítások',
	'ACP_SERVER_CONFIGURATION'	=> 'Szerver konfiguráció', //?
	'ACP_SERVER_SETTINGS'		=> 'Szerver beállítások',
	'ACP_SIGNATURE_SETTINGS'	=> 'Aláírás beállítások',
	'ACP_SMILIES'				=> 'Emotikonok',
	'ACP_STYLE_MANAGEMENT'		=> 'Megjelenések kezelése',
	'ACP_STYLES'				=> 'Megjelenések',
	'ACP_STYLES_CACHE'			=> 'Gyorsítótár törlése',
	'ACP_STYLES_INSTALL'		=> 'Megjelenések telepítése',

	'ACP_SUBMIT_CHANGES'		=> 'Változtatások elküldése',

	'ACP_TEMPLATES'				=> 'Sablonok',
	'ACP_THEMES'				=> 'Stílusok',

	'ACP_UPDATE'					=> 'Frissítés',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Felhasználó fórum jogosultságai',
	'ACP_USERS_LOGS'				=> 'Felhasználói napló',
	'ACP_USERS_PERMISSIONS'			=> 'Felhasználó jogosultságai',
	'ACP_USER_ATTACH'				=> 'Csatolmányok',
	'ACP_USER_AVATAR'				=> 'Avatar',
	'ACP_USER_FEEDBACK'				=> 'Feljegyzések',
	'ACP_USER_GROUPS'				=> 'Csoportok',
	'ACP_USER_MANAGEMENT'			=> 'Felhasználók kezelése', //?
	'ACP_USER_OVERVIEW'				=> 'Áttekintés',
	'ACP_USER_PERM'					=> 'Jogosultságok',
	'ACP_USER_PREFS'				=> 'Beállítások',
	'ACP_USER_PROFILE'				=> 'Profil',
	'ACP_USER_RANK'					=> 'Rang',
	'ACP_USER_ROLES'				=> 'Felhasználói szerepek',
	'ACP_USER_SECURITY'				=> 'Felhasználóbiztonság', //?
	'ACP_USER_SIG'					=> 'Aláírás',
	'ACP_USER_WARNINGS'				=> 'Figyelmeztetések',

	'ACP_VC_SETTINGS'					=> 'Spam megelőzés',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'CAPTCHA kép előnézet', //?
	'ACP_VERSION_CHECK'					=> 'Frissítések keresése',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Adminisztrációs jogosultságok megtekintése', //? "View administrative permissions" 'Adminisztratív'
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Fórum moderátori jogosultságok megtekintése',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Fórum alapú jogosultságok megtekintése',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Globális moderátori jogosultságok megtekintése',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Felhasználó alapú jogosultságok megtekintése', //?

	'ACP_WORDS'					=> 'Szócenzúra', //? "Word censoring" 'Szavak cenzúrázása'

	'ACTION'				=> 'Művelet',
	'ACTIONS'				=> 'Műveletek',
	'ACTIVATE'				=> 'Aktiválás',
	'ADD'					=> 'Hozzáadás',
	'ADMIN'					=> 'Adminisztráció',
	'ADMIN_INDEX'			=> 'Adminisztrátori kezdőlap',
	'ADMIN_PANEL'			=> 'Adminisztrátori vezérlőpult',

	'ADM_LOGOUT'			=> 'AVP&nbsp;kilépés',
	'ADM_LOGGED_OUT'		=> 'Sikeresen kiléptél az adminisztrátori vezérlőpultból.',

	'BACK'					=> 'Vissza',

	'CONTAINER_EXCEPTION' => 'A phpBB a konténer létrehozása közben hibát észlelt, aminek oka egy telepített kiterjesztés. Emiatt az összes kiterjesztés ideiglenesen letiltásra került. Próbáld meg törölni a fórum gyorsítótárat. A hiba kijavítása után az összes kiterjesztés automatikusan újra engedélyezésre kerül. Ha a hiba továbbra is fennáll, segítségért látogasd meg a <a href="https://www.phpbb.com/support">phpBB.com</a> oldalát.',
	'EXCEPTION' => 'Rendszer kivétel',

	'COLOUR_SWATCH'			=> 'Webbiztos színválasztó',
	'CONFIG_UPDATED'		=> 'A konfiguráció sikeresen frissítésre került.', //?
	'CRON_LOCK_ERROR'		=> 'Nem sikerült a cron lock megszerzése.', //? Could not obtain cron lock
	'CRON_NO_SUCH_TASK'		=> '“%s” ütemezett feladat nem található.',
	'CRON_NO_TASK'			=> 'Nincs futtatandó ütemezett feladat.',
	'CRON_NO_TASKS'			=> 'Nem található ütemezett feladat.',
	'CSV_INVALID'			=> 'A megadott “%1$s” vesszővel elválasztott beállítások érvénytelenek. Az értékek csak vesszővel lehetnek elválasztva, és nem tartalmazhatnak semmilyen bevezető vagy sorvégi elválasztó karaktert.', //? The provided comma-separated setting “%1$s” is invalid. The values should be delimited by comma only, it should not contain any leading or trailing delimiters.
	'CURRENT_VERSION'		=> 'Jelenlegi verzió',

	'DEACTIVATE'				=> 'Deaktiválás',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'A megadott „%s” elérési út nem létezik.',
	'DIRECTORY_NOT_DIR'			=> 'A megadott „%s” elérési út nem könyvtár.',
	'DIRECTORY_NOT_WRITABLE'	=> 'A megadott „%s” elérési út nem írható.',
	'DISABLE'					=> 'Kikapcsolás',
	'DOWNLOAD'					=> 'Letöltés',
	'DOWNLOAD_AS'				=> 'Letöltés, mint', //?
	'DOWNLOAD_STORE'			=> 'Állomány letöltése vagy eltárolása', //? "Download or store file" a store simán csak tárolása?
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Az állományt közvetlenül letöltheted, vagy elmentheted a <samp>store/</samp> könyvtáradba.',
	'DOWNLOADS'					=> 'Letöltések',

	'EDIT'					=> 'Szerkesztés',
	'ENABLE'				=> 'Bekapcsolás',
	'EXPORT_DOWNLOAD'		=> 'Letöltés',
	'EXPORT_STORE'			=> 'Eltárolás',

	'GENERAL_OPTIONS'		=> 'Általános beállítások', //? "General options" 'Általános választási lehetőségek'??
	'GENERAL_SETTINGS'		=> 'Általános beállítások',
	'GLOBAL_MASK'			=> 'Globális effektív jogosultságok', //? "Global permission mask"

	'INSTALL'				=> 'Telepítés',
	'IP'					=> 'Felhasználó IP-je',
	'IP_HOSTNAME'			=> 'IP-címek vagy hosztnevek', //? egyesszám?

	'LATEST_VERSION'		=> 'Legfrissebb verzió',
	'LOAD_NOTIFICATIONS'			=> 'Értesítések megjelenítése',
	'LOAD_NOTIFICATIONS_EXPLAIN'	=> 'Értesítések megjelenítése minden oldalon (általában a fejlécben).',
	'LOGGED_IN_AS'			=> 'Bejelentkezve:', //? "You are logged in as:" 'Bejelentkeztél, mint', 'Be vagy lépve, mint', 'Bejelentkezve, mint'
	'LOGIN_ADMIN'			=> 'A fórum adminisztrálásához azonosított felhasználónak kell lenned.',
	'LOGIN_ADMIN_CONFIRM'	=> 'A fórum adminisztrálásához újra azonosítanod kell magad.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Sikeresen azonosításra kerültél, most továbbirányításra kerülsz az adminisztrátori vezérlőpultba.',
	'LOOK_UP_FORUM'			=> 'Fórum kiválasztása',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Több fórumot is kiválaszthatsz.',

	'MANAGE'				=> 'Kezelés', //?
	'MENU_TOGGLE'			=> 'Oldalsó menü elrejtése/mutatása',
	'MORE'					=> 'Továbbiak',			// Not used at the moment //?
	'MORE_INFORMATION'		=> 'További információ »',
	'MOVE_DOWN'				=> 'Mozgatás lejjebb',
	'MOVE_UP'				=> 'Mozgatás feljebb',

	'NOTIFY'				=> 'Értesítés',
	'NO_ADMIN'				=> 'Nincs jogosultságod a fórum adminisztrálásához.',
	'NO_EMAILS_DEFINED'		=> 'Nem található valós e-mail cím.', //? "No valid e-mail addresses found." hol használják?
	'NO_FILES_TO_DELETE'	=> 'A törlésre kiválasztott csatolmányok nem léteznek.',
	'NO_PASSWORD_SUPPLIED'	=> 'Az adminisztrátori vezérlőpulthoz való hozzáféréshez meg kell adnod a jelszavad.',

	'OFF'					=> 'Kikapcsolva',
	'ON'					=> 'Bekapcsolva',

	'PARSE_BBCODE'						=> 'BBCode értelmezése', //? "Parse BBCode" 'BBCode feldolgozása' 'BBCode értelmezése' 'BBCode bekapcsolva' 'BBCode használata'
	'PARSE_SMILIES'						=> 'Emotikonok értelmezése',
	'PARSE_URLS'						=> 'Linkek értelmezése',
	'PERMISSIONS_TRANSFERRED'			=> 'Jogosultságok átruházva',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Jelenleg %1$s jogosultságaival rendelkezel. A fórumot ezen felhasználó jogosultságaival böngészheted, viszont nem férhetsz hozzá az adminisztrációs vezérlőpulthoz, mivel adminisztrátori jogosultságok nem kerültek átruházásra. <a href="%2$s"><strong>Bármikor visszatérhetsz a saját jogosultságaidhoz.</strong></a>',
	'PROCEED_TO_ACP'					=> '%sTovább az AVP-hoz%s',

	'RELEASE_ANNOUNCEMENT'	=> 'Bejelentés',
	'REMIND'				=> 'Emlékeztetés',
	'REPARSE_LOCK_ERROR'	=> 'Az újraformázó folyamat már fut egy másik folyamatból.',
	'RESYNC'				=> 'Újraszinkronizálás',
	'RUNNING_TASK'			=> 'Futó feladat: %s.',

	'SELECT_ANONYMOUS'		=> 'Vendég felhasználó kiválasztása',
	'SELECT_OPTION'			=> 'Opció kiválasztása',

	'SETTING_TOO_LOW'		=> 'A „%1$s” beállításnak megadott érték túl kicsi. A legkisebb elfogadható érték %2$d.',
	'SETTING_TOO_BIG'		=> 'A „%1$s” beállításnak megadott érték túl nagy. A legnagyobb elfogadható érték %2$d.',
	'SETTING_TOO_LONG'		=> 'A „%1$s” beállításnak megadott érték túl hosszú. A leghosszabb elfogadható hossz %2$d karakter.',
	'SETTING_TOO_SHORT'		=> 'A „%1$s” beállításnak megadott érték túl rövid. A legrövidebb elfogadható hossz %2$d karakter.',

	'SHOW_ALL_OPERATIONS'	=> 'Összes művelet megjelenítése',

	'TASKS_NOT_READY'			=> 'Folyamatban lévő feladatok:', //?
	'TASKS_READY'			=> 'Elkészült feladatok:',
	'TOTAL_SIZE'			=> 'Teljes méret',

	'UCP'					=> 'Felhasználói vezérlőpult',
	'URL_INVALID'			=> 'A “%1$s” beállításhoz megadott URL érvénytelen.',
	'URL_SCHEME_INVALID'	=> 'A megadott “%2$s” séma a “%1$s” vesszővel elválasztott beállításokban érvénytelen. A sémának latin karakterrel kell kezdődnie, amit alfanumerikus karakterek, kötőjelek vagy pontok követnek.', //? The provided scheme “%2$s” in comma-separated setting “%1$s” is invalid. Scheme should start with a latin character followed by alphanumeric characters, hyphens or dots.
	'USERNAMES_EXPLAIN'		=> 'Minden felhasználónevet külön sorba írj.',
	'USER_CONTROL_PANEL'	=> 'Felhasználói vezérlőpult',

	'UPDATE_NEEDED'			=> 'A fórum nem naprakész.',
	'UPDATE_NOT_NEEDED'		=> 'A fórum naprakész.',
	'UPDATES_AVAILABLE'		=> 'Elérhető frissítések:',

	'WARNING'				=> 'Figyelmeztetés',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Ez az oldal információkat tartalmaz a szerveren lévő PHP-ról. Az adatok között megtalálod a betöltött modulokat, elérhető változókat és az alap beállításokat. Ezek az információk hasznosak tudnak lenni egy probléma kivizsgálásánál. Kérjük, vedd figyelembe, hogy néhány tárhelyszolgáltató biztonsági okokból korlátozza, milyen információk jelennek meg itt. Az ezen az oldalon szereplő adatokat nem tanácsos kiadni, hacsak nem egy <a href="https://www.phpbb.com/about/team/">hivatalos csapattag</a> kérdezi azokat a támogató fórumokban!',

	'NO_PHPINFO_AVAILABLE'	=> 'Nem lehet információkat megtudni a PHP konfigurációdról. A phpinfo() biztonsági okokból le lett tiltva.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Ez a lista az adminisztrátorok összes műveletét, tevékenységét tartalmazza. Rendezheted felhasználónév, idő, IP-cím vagy művelet szerint. Ha rendelkezel a szükséges jogosultságokkal, törölheted az egyes bejegyzéseket vagy akár a napló teljes tartalmát.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Ez a lista a fórum által végrehajtott műveleteket tartalmazza. Ez a napló olyan információkat nyújt, melyeket fel tudsz használni problémák megoldásához, például hogy miért nem mennek el az e-mailek. Rendezheted felhasználónév, idő, IP-cím vagy művelet szerint. Ha rendelkezel a szükséges jogosultságokkal, törölheted az egyes bejegyzéseket vagy akár a teljes napló tartalmát.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Ez a lista a moderátorok által a fórumokon, témákon és hozzászólásokon végrehajtott műveleteket tartalmazza, ide értve a kitiltásokat is. Rendezheted felhasználónév, idő, IP-cím vagy művelet szerint. Ha rendelkezel a szükséges jogosultságokkal, törölheted az egyes bejegyzéseket vagy akár a teljes napló tartalmát.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Ez a lista a felhasználókon vagy a felhasználók által végrehajtott műveleteket tartalmazza (jelentések, figyelmeztetések és feljegyzések).',
	'ALL_ENTRIES'				=> 'Összes bejegyzés',

	'DISPLAY_LOG'	=> 'Bejegyzések megjelenítése:', //? "Display entries from previous"

	'NO_ENTRIES'	=> 'Ebben az időtartamban nincs napló bejegyzés.',

	'SORT_IP'		=> 'IP-cím',
	'SORT_DATE'		=> 'Dátum',
	'SORT_ACTION'	=> 'Művelet',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Köszönjük, hogy a phpBB-t választottad a fórumodnak. Ezen az oldalon egy áttekintést látsz a fórumod különböző statisztikai adatairól. Az oldal tetején és bal oldalán lévő linkek segítségével a fórumod minden részét részletekbe menően megváltoztathatod. Minden oldalon találsz majd egy leírást az aktuális beállításokhoz.',
	'ADMIN_LOG'					=> 'Naplózott adminisztrátori tevékenységek',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Itt egy áttekintést láthatsz az adminisztrátorok által végrehajtott utolsó öt műveletről. A teljes naplót megtekintheted a menü megfelelő elemére vagy az alább lévő linkre kattintva.',
	'AVATAR_DIR_SIZE'			=> 'Avatar könyvtár mérete',

	'BOARD_STARTED'		=> 'Fórum indulása',
 	'BOARD_VERSION'		=> 'Fórum verziója',

	'DATABASE_SERVER_INFO'	=> 'Adatbázisszerver',
	'DATABASE_SIZE'			=> 'Adatbázis mérete',

	// Environment configuration checks, mbstring related
	'ERROR_MBSTRING_FUNC_OVERLOAD'					=> 'A függvény felüldefiniálás nincs megfelelően konfigurálva', //?
	'ERROR_MBSTRING_FUNC_OVERLOAD_EXPLAIN'			=> 'A <var>mbstring.func_overload</var> értékének 0-nak vagy 4-nek kell lennie. Az aktuális értékét a <samp>PHP információ</samp> oldalon tudod ellenőrizni.',
	'ERROR_MBSTRING_ENCODING_TRANSLATION'			=> 'A transzparens karakterkódolás nincs megfelelően konfigurálva',
	'ERROR_MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> 'A <var>mbstring.encoding_translation</var> értékének 0-nak kell lennie. Az aktuális értékét a <samp>PHP információ</samp> oldalon tudod ellenőrizni.',
	'ERROR_MBSTRING_HTTP_INPUT'						=> 'A HTTP bemeneti karakter konverzió nincs megfelelően konfigurálva',
	'ERROR_MBSTRING_HTTP_INPUT_EXPLAIN'				=> 'A <var>mbstring.http_input</var> értékének üresnek kell lennie. Az aktuális értékét a <samp>PHP információ</samp> oldalon tudod ellenőrizni.',
	'ERROR_MBSTRING_HTTP_OUTPUT'					=> 'A HTTP kimeneti karakter konverzió nincs megfelelően konfigurálva',
	'ERROR_MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> 'A <var>mbstring.http_output</var> értékének üresnek kell lennie. Az aktuális értékét a <samp>PHP információ</samp> oldalon tudod ellenőrizni.',
	'ERROR_DEFAULT_CHARSET'							=> 'Az alapértelmezett karakterkódolás nincs megfelelően konfigurálva',
	'ERROR_DEFAULT_CHARSET_EXPLAIN'					=> 'A <var>default_charset</var> értékének <samp>UTF-8</samp>-nak kell lennie. Az aktuális értékét a <samp>PHP információ</samp> oldalon tudod ellenőrizni.',

	'FILES_PER_DAY'		=> 'Csatolmányok száma naponta',
	'FORUM_STATS'		=> 'Fórum statisztika',

	'GZIP_COMPRESSION'	=> 'GZip tömörítés',

	'NO_SEARCH_INDEX'	=> 'A kiválasztott keresőmodulnak nincs keresőindexe.<br />Kérjük hozd létre a “%1$s” indexét a %2$sKeresőindex%3$s menüpontban.',
	'NOT_AVAILABLE'		=> 'Nem elérhető',
	'NUMBER_FILES'		=> 'Csatolmányok száma',
	'NUMBER_POSTS'		=> 'Hozzászólások száma',
	'NUMBER_TOPICS'		=> 'Témák száma',
	'NUMBER_USERS'		=> 'Felhasználók száma',
	'NUMBER_ORPHAN'		=> 'Árva csatolmányok száma',

	'PHP_VERSION'		=> 'PHP verzió',
	'PHP_VERSION_OLD'	=> 'A szerveren lévő PHP verziót (%1$s) a jövőbeli phpBB kiadások már nem fogják támogatni. A szükséges minimális PHP verzió %s$s. %3$sRészletek%4$s',

	'POSTS_PER_DAY'		=> 'Hozzászólások száma naponta',

	'PURGE_CACHE'			=> 'Gyorsítótár kiürítése', //? megtisztítása?
	'PURGE_CACHE_CONFIRM'	=> 'Biztosan ki akarod üríteni a gyorsítótárat?',
	'PURGE_CACHE_EXPLAIN'	=> 'Minden gyorsítótárazott elem törlésre kerül, beleértve a gyorsítótárazott sablon állományokat és adatbázis-lekérdezéseket is.',
	'PURGE_CACHE_SUCCESS'	=> 'A gyorsítótár sikeresen ürítésre került.',

	'PURGE_SESSIONS'			=> 'Munkamenetek törlése',
	'PURGE_SESSIONS_CONFIRM'	=> 'Bitosan törölni szeretnéd az összes munkamenetet? Ennek folytán az összes felhasználó kiléptetésre fog kerülni.',
	'PURGE_SESSIONS_EXPLAIN'	=> 'Megszakítja és törli az összes munkamenetet. Minden felhasználó kiléptetésre kerül, mivel a munkamenet tábla kiürítődik.',
	'PURGE_SESSIONS_SUCCESS'	=> 'A munkamenetek sikeresen ürítésre kerültek.',

	'RESET_DATE'					=> 'Fórum indulási dátumának lenullázása', //? lenullázás?
	'RESET_DATE_CONFIRM'			=> 'Biztosan meg akarod változtatni a fórum indulásának dátumát mostanra?',
	'RESET_DATE_SUCCESS'				=> 'Fórum indulási dátuma lenullázásra került.',
	'RESET_ONLINE'					=> 'Valaha jelenlévő legtöbb felhasználó számának lenullázása', //?
	'RESET_ONLINE_CONFIRM'			=> 'Biztosan le akarod nullázni a valaha jelenlévő legtöbb felhasználó számlálót?',
	'RESET_ONLINE_SUCCESS'				=> 'Valaha jelenlévő legtöbb felhasználó száma lenullázásra került.',
	'RESYNC_POSTCOUNTS'				=> 'Hozzászólásszámok újraszinkronizálása', //? hozzászólásszámok...
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Csak a létező hozzászólások kerülnek figyelembevételre. Az automatikus tisztítás által törölt hozzászólások nem lesznek beleszámolva.', //?
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Biztosan újra akarod szinkronizálni a hozzászólásszámokat?',
	'RESYNC_POSTCOUNTS_SUCCESS'			=> 'A hozzászólásszámok újraszinkronizálásra kerültek.', //?
	'RESYNC_POST_MARKING'			=> 'Csillagozott témák újraszinkronizálása', //? dotted - csillagozott (prosilverben legalábbis)
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Biztosan újra akarod szinkronizálni a csillagozott témákat?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Először visszavonódik a megjelölés minden témáról, majd helyesen megjelölésre kerülnek azok a témák, melyekben volt valami aktivitás az elmúlt fél évben.', //?
	'RESYNC_POST_MARKING_SUCCESS'	=> 'A csillagozott témák újraszinkronizálásra kerültek.', //?
	'RESYNC_STATS'					=> 'Statisztika újraszinkronizálása', //?
	'RESYNC_STATS_CONFIRM'			=> 'Biztosan újra akarod szinkronizálni a statisztikát?',
	'RESYNC_STATS_EXPLAIN'			=> 'Újraszámolja a fórum hozzászólásait, témáit, felhasználóit és állományait.', //?
	'RESYNC_STATS_SUCCESS'			=> 'A statisztika újraszinkronizálásra került.', //?
	'RUN'							=> 'Futtatás most',

	'STATISTIC'					=> 'Statisztika',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Statisztikák újraszinkronizálása vagy lenullázása',

	'TIMEZONE_INVALID'	=> 'A kiválasztott időzóna érvénytelen.',
	'TIMEZONE_SELECTED'	=> '(jelenleg kiválasztva)',
	'TOPICS_PER_DAY'	=> 'Témák száma naponta',

	'UPLOAD_DIR_SIZE'	=> 'Feltöltött csatolmányok mérete',
	'USERS_PER_DAY'		=> 'Felhasználók száma naponta',

	'VALUE'						=> 'Érték',
	'VERSIONCHECK_FAIL'			=> 'Nem sikerült lekérni a legújabb verzióval kapcsolatos információkat.',
	'VERSIONCHECK_FORCE_UPDATE'	=> 'Verzió ellenőrzése újra',
	'VERSION_CHECK'				=> 'Verzió ellenőrzés',
	'VERSION_CHECK_EXPLAIN'		=> 'Ellenőrzi, hogy a phpBB verziója naprakész-e.',
	'VERSIONCHECK_INVALID_ENTRY'	=> 'A legújabb verzióval kapcsolatos információk nem támogatott bejegyzést tartalmaznak.',
	'VERSIONCHECK_INVALID_URL'		=> 'A legújabb verzióval kapcsolatos információk érvénytelen URL-t tartalmaznak.',
	'VERSIONCHECK_INVALID_VERSION'	=> 'A legújabb verzióval kapcsolatos információk érvénytelen verziószámot tartalmaz.',
	'VERSION_NOT_UP_TO_DATE_ACP'	=> 'A phpBB verziódhoz újabb frissítések érhetőek el.<br />A lentebbi linken az újabb verzió bejelentését és a frissítéshez szükséges instrukciókat találod.',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> 'A phpBB verziódhoz újabb frissítések érhetőek el.',
	'VERSION_UP_TO_DATE_ACP'	=> 'A phpBB verziód a jelenleg elérhető legfrissebb verzió, jelenleg nincsenek telepíthető frissítések.',
	'VIEW_ADMIN_LOG'			=> 'Adminisztrátori napló megtekintése',
	'VIEW_INACTIVE_USERS'		=> 'Inaktív felhasználók megtekintése',

	'WELCOME_PHPBB'			=> 'Üdvözlünk a phpBB-ben!',
	'WRITABLE_CONFIG'		=> 'A konfigurációs állományod (config.php) jelenleg mindenki által írható. Határozottan javasoljuk, hogy változtasd meg a jogosultságait 640-re vagy legalább 644-re (például: <a href="http://phpbb.hu/utmutatok/13" rel="external">chmod</a> 640 config.php).',

));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Inaktiváció dátuma',
	'INACTIVE_REASON'				=> 'Ok',
	'INACTIVE_REASON_MANUAL'		=> 'Adminisztrátor deaktiválta az azonosítót', //? "Account deactivated by administrator"
	'INACTIVE_REASON_PROFILE'		=> 'Profil adatok megváltoztak',
	'INACTIVE_REASON_REGISTER'		=> 'Újonnan regisztrált azonosító',
	'INACTIVE_REASON_REMIND'		=> 'Azonosító újraaktiválásra kötelezve',
	'INACTIVE_REASON_UNKNOWN'		=> 'Ismeretlen',
	'INACTIVE_USERS'				=> 'Inaktív felhasználók',
	'INACTIVE_USERS_EXPLAIN'		=> 'Ez a lista azokat a felhasználókat tartalmazza, akik regisztráltak, de azonosítójuk inaktív. Szándékod szerint aktiválhatod, törölheted vagy emlékeztetheted (egy e-mail küldésével) őket.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Ez a lista az utolsó 10 regisztrált felhasználót tartalmazza, akinek inaktív az azonosítója. Ennek oka lehet, hogy a regisztráció megerősítéshez kötött és ezek a felhasználók még nem kerültek visszaigazolásra, vagy inaktiválva lettek. A teljes listát megtekintheted a menü megfelelő elemére vagy az alább lévő linkre kattintva, ahol aktiválhatod, törölheted vagy emlékeztetheted (egy e-mail küldésével) ezeket a felhasználókat.',

	'NO_INACTIVE_USERS'	=> 'Nincs inaktív felhasználó.',

	'SORT_INACTIVE'		=> 'Inaktiváció dátuma',
	'SORT_LAST_VISIT'	=> 'Utolsó látogatás',
	'SORT_REASON'		=> 'Inaktiváció oka',
	'SORT_REG_DATE'		=> 'Regisztráció dátuma',
	'SORT_LAST_REMINDER'=> 'Utolsó emlékeztetés',
	'SORT_REMINDER'		=> 'Emlékeztető küldése', //? Valószínűleg igen-nem érték, hogy lett-e emlékezetve. Az angol kifjezés se a legegyértelműbb, de attól még a magyaron is lehetne javítani.

	'USER_IS_INACTIVE'		=> 'A felhasználó inaktív.',
));

// Segítsd a phpBB-t
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS'	=> 'Kérünk, küldj információt a phpBB részére a szerveredről és a fórumod beállításairól statisztikai elemzés céljára. Minden adat, ami azonosíthatna téged, eltávolításra került – az adatok teljesen <strong>névtelenek</strong>. Az itt gyűjtött információra alapozva hozunk döntéseket a jövőbeli phpBB verziókról. A statisztikákat nyilvánosan elérhetővé tesszük. Az adatokat ezen felül még megosztjuk a PHP projekttel, amely egy programozási nyelv, amiben a phpBB íródott.', //? '..., azon programozási nyelv fejlesztőivel, amiben a phpBB íródott.'
	'EXPLAIN_SHOW_STATISTICS'	=> 'Az alábbi gomb segítségével áttekintheted az összes elküldésre kerülő változót.',
	'DONT_SEND_STATISTICS'		=> 'Amennyiben nem kívánsz statisztikai adatokat küldeni, térj vissza az AVP kezdőlapjára.',
	'GO_ACP_MAIN'				=> 'Visszatérés az AVP kezdőldalra',
	'HIDE_STATISTICS'			=> 'Adatok elrejtése',
	'SEND_STATISTICS'			=> 'Statisztika küldése',
	'SEND_STATISTICS_LONG'		=> 'Statisztikai adatok küldése',
	'SHOW_STATISTICS'			=> 'Adatok megjelenítése',
	'THANKS_SEND_STATISTICS'	=> 'Köszönjük, hogy segítettél az adatgyűjtésben!',
	'FAIL_SEND_STATISTICS'		=> 'A phpBB nem tudta elküldeni a statisztikai adatokat',
));

// Log Entries
$lang = array_merge($lang, array(
	//? ACL: "Added or edited ..." - simán csak módosítás lett belőle, mivel a 'hozzáadása vagy módosítása/szerkesztése' elég hosszú lenne, és kicsit fura; a többes számot valószínűleg jobb lenne eggyes számra cserélni (magyarban jobban hangzik?) - persze mindkettő előfordulhat
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Felhasználók felhasználói jogosultságainak módosítása</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Csoportok felhasználói jogosultságainak módosítása</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Felhasználók globális moderátori jogosultságainak módosítása</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Csoportok globális moderátori jogosultságainak módosítása</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Felhasználók adminisztrátori jogosultságainak módosítása</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Csoportok adminisztrátori jogosultságainak módosítása</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Adminisztrátorok hozzáadása vagy módosítása</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Globális moderátorok hozzáadása vagy módosítása</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Felhasználók</strong> %1$s <strong>fórum hozzáférésének módosítása</strong><br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Felhasználók</strong> %1$s <strong>fórum moderátori hozzáférésének módosítása</strong><br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Csoportok</strong> %1$s <strong>fórum hozzáférésének módosítása</strong><br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Csoportok</strong> %1$s <strong>fórum moderátori hozzáférésének módosítása</strong><br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Moderátorok hozzáadása vagy módosítása</strong> %1$s fórumban<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Fórum jogosultságok módosítása</strong> %1$s fórumban<br />» %2$s',

	//? eltávolítás helyett törlés (vagy más)?
	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Adminisztrátorok eltávolítása</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Globális moderátorok eltávolítása</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Moderátorok eltávolítása</strong> %1$s fórumból<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Felhasználói/csoport jogosultságok törlése</strong> %1$s fórumban<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Jogosultságok átvétele mástól:</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Saját jogosultságok visszaállítása más jogosultságainak használata után:</strong><br />» %s',

	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Sikertelen adminisztrátori belépési kísérlet</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Sikeres adminisztrátori bejelentkezés</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Felhasználó csatolmányainak törlése</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Csatolmány kiterjesztés hozzáadása vagy szerkesztése</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Csatolmány kiterjesztés törlése</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Csatolmány kiterjesztés frissítése</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Kiterjesztéscsoport hozzáadása</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Kiterjesztéscsoport szerkesztése</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Kiterjesztéscsoport törlése</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Árva csatolmány hozzárendelése egy hozzászóláshoz</strong><br />» azonosító: %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Árva csatolmányok törlése</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Felhasználó feloldása a kitiltások alól</strong> „<em>%1$s</em>” okkal<br />» %2$s', //? exclude
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>IP-cím feloldása a kitiltások alól</strong> „<em>%1$s</em>” okkal<br />» %2$s',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>E-mail cím feloldása a kitiltások alól</strong> „<em>%1$s</em>” okkal<br />» %2$s',
	'LOG_BAN_USER'			=> '<strong>Felhasználó kitiltása</strong> „<em>%1$s</em>” okkal<br />» %2$s',
	'LOG_BAN_IP'			=> '<strong>IP-cím kitiltása</strong> „<em>%1$s</em>” okkal<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>E-mail cím kitiltása</strong> „<em>%1$s</em>” okkal<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Felhasználó kitiltásának feloldása</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>IP-cím kitiltásának feloldása</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>E-mail cím kitiltásának feloldása</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Új BBCode címke felvétele</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>BBCode címke szerkesztése</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>BBCode címke törlése</strong><br />» %s',
	'LOG_BBCODE_CONFIGURATION_ERROR'	=> '<strong>Hiba történt a BBCode konfigurálása közben</strong>: %1$s<br />» %2$s', // ? Error while configuring BBCode

	'LOG_BOT_ADDED'		=> '<strong>Új robot felvétele</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Robot törlése</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Létező robot frissítése</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Adminisztrátori napló kiürítése</strong>', //? kiürítés
	'LOG_CLEAR_CRITICAL'	=> '<strong>Hibanapló kiürítése</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Moderátori napló kiürítése</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Felhasználó naplójának kiürítése</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Felhasználói naplók kiürítése</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Csatolmány beállítások módosítása</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Azonosítás beállítások módosítása</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Avatar beállítások módosítása</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Süti beállítások módosítása</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>E-mail beállítások módosítása</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Fórum funkció beállítások módosítása</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Terhelés beállítások módosítása</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Privát üzenet beállítások módosítása</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Hozzászólás beállítások módosítása</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Felhasználói regisztrációs beállítások módosítása</strong>', //?
	'LOG_CONFIG_FEED'			=> '<strong>Csatorna beállítások módosí</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Kereső beállítások módosítása</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Biztonsági beállítások módosítása</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Szerver beállítások módosítása</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Fórum beállítások módosítása</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Aláírás beállítások módosítása</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Anti-spamrobot beállítások módosítása</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Téma jóváhagyása</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Téma előreugrasztása</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>“%2$s” által írt “%1$s” hozzászólás törlése a következő indokkal</strong><br />» %3$s', // '<strong>Hozzászólás törlése</strong><br />» %s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>Árnyék téma törlése</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>“%2$s” által írt “%1$s” téma törlése a következő indokkal</strong><br />» %3$s', // '<strong>Téma törlése</strong><br />» %s',
	'LOG_FORK'					=> '<strong>Téma másolása</strong><br />» %s',
	'LOG_LOCK'					=> '<strong>Téma lezárása</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Hozzászólás lezárása</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Hozzászólások áthelyezése</strong> másik témába:<br />» %s',
	'LOG_MOVE'					=> '<strong>Téma áthelyezése</strong><br />» %1$s fórumból %2$s fórumba',
	'LOG_MOVED_TOPIC'			=> '<strong>Téma áthelyezése</strong><br />» %s',
	'LOG_PM_REPORT_CLOSED'		=> '<strong>PÜ jelentés lezárása</strong><br />» %s',
	'LOG_PM_REPORT_DELETED'		=> '<strong>PÜ jelentés törlése</strong><br />» %s',
	'LOG_POST_APPROVED'			=> '<strong>Hozzászólás jóváhagyása</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>“%3$s” által írt “%1$s” hozzászólás elutasítása a következő indokkal</strong><br />» %2$s', // <strong>„%1$s” hozzászólás elutasítása</strong><br />» ok: %2$s',
	'LOG_POST_EDITED'			=> '<strong>“%2$s” által írt “%1$s” hozzászólás szerkesztése a következő indokkal</strong><br />» %3$s', // '<strong>„%1$s” hozzászólás szerkesztése</strong><br />» szerző: %2$s',
	'LOG_POST_RESTORED'			=> '<strong>Hozzászólás visszaállítása</strong><br />» %s',
	'LOG_REPORT_CLOSED'			=> '<strong>Jelentés lezárása</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Jelentés törlése</strong><br />» %s',
	'LOG_RESTORE_TOPIC'			=> '<strong>“%1$s” téma visszaállítása</strong><br />» szerző: %2$s', //? <strong>Restored topic “%1$s” written by</strong><br />» %2$s
	'LOG_SOFTDELETE_POST'		=> '<strong>“%2$s” által írt “%1$s” hozzászólás visszaállítható törlése a következő indokkal</strong><br />» %3$s',
	'LOG_SOFTDELETE_TOPIC'		=> '<strong>“%2$s” által írt “%1$s” téma visszaállítható törlése a következő indokkal</strong><br />» %3$s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Szétválasztott hozzászólások áthelyezése</strong><br />» %s témába',
	'LOG_SPLIT_SOURCE'			=> '<strong>Téma szétválasztása</strong><br />» %s',

	'LOG_TOPIC_APPROVED'		=> '<strong>Téma jóváhagyása</strong><br />» %s',
	'LOG_TOPIC_RESTORED'		=> '<strong>Téma visszaállítása</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>„%3$s” által nyitott „%1$s” téma elutasítása</strong><br />ok: %2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Téma újraszinkronizálása</strong><br />» %s', //?
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Téma típusának megváltoztatása</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Téma megnyitása</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Hozzászólás megnyitása</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Letiltott felhasználónév hozzáadása</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Letiltott felhasználónév törlése</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Adatbázis kimentése</strong>',
	'LOG_DB_DELETE'			=> '<strong>Adatbázis-kimentés törlése</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Adatbázis-kimentés visszaállítása</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>IP/hoszt kizárása a letöltési listából</strong><br />» %s', //? letöltési lista?? hoszt(név)?
	'LOG_DOWNLOAD_IP'			=> '<strong>IP/hoszt hozzáadása a letöltési listához</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>IP/hoszt törlése a letöltési listából</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Jabber hiba</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>E-mail hiba</strong><br />» %s',
	'LOG_ERROR_CAPTCHA'		=> '<strong>CAPTCHA hiba</strong><br />» %s',

	'LOG_FORUM_ADD'							=> '<strong>Új fórum létrehozása</strong><br />» %s',
	'LOG_FORUM_COPIED_PERMISSIONS'			=> '<strong>Fórum jogosultságok másolása</strong> a %1$s fórumból<br />» %2$s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Fórum törlése</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Fórum és alfórumainak törlése</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Fórum törlése és alfórumainak átmozgatása</strong> a %1$s fórumba<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Fórum törlése és a hozzászólások áthelyezése</strong> a %1$s fórumba<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Fórum és alfórumainak törlése, hozzászólások áthelyezése</strong> a %1$s fórumba<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Fórum törlése, a hozzászólások áthelyezése</strong> a %1$s fórumba <strong>és az alfórumok áthelyezése</strong> a %2$s fórumba<br />» %3$s', //?
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Fórum és hozzászólásainak törlése</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Fórum és alfórumainak valamint hozzászólásainak törlése</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Fórum és hozzászólásainak törlése, alfórumok áthelyezése</strong> a %1$s fórumba<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Fórum beállítások szerkesztése</strong><br />» %s', //? beállítások - details
	'LOG_FORUM_MOVE_DOWN'					=> '%1$s <strong>fórum mozgatása</strong> %2$s <strong>fórum alá</strong>',
	'LOG_FORUM_MOVE_UP'						=> '%1$s <strong>fórum mozgatása</strong> %2$s <strong>fórum fölé</strong>',
	'LOG_FORUM_SYNC'						=> '<strong>Fórum újraszinkronizálása</strong><br />» %s',

	'LOG_GENERAL_ERROR'	=> '<strong>Általános hiba lépett fel</strong>: %1$s <br />» %2$s',

	'LOG_GROUP_CREATED'		=> '<strong>Új csoport létrehozása</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>„%1$s” csoport elsődlegessé tétele a következő tagoknak:</strong><br />» %2$s', //?
	'LOG_GROUP_DELETE'		=> '<strong>Csoport törlése</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Vezető visszaléptetése</strong> a %1$s csoportban<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Tag előléptetése vezetőnek</strong> a %1$s csoportban<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Tagok törlése</strong> a %1$s csoportból<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Csoport beállítások frissítése</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Új vezetők hozzáadása</strong> a %1$s csoporthoz<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Új tagok felvétele</strong> a %1$s csoportba<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Felhasználók felvételének jóváhagyása</strong> a %1$s csoportba<br />» %2$s',
	'LOG_USERS_PENDING'		=> '<strong>Jóváhagyásra váró felvételi kérelem a „%1$s” csoportba</strong><br />» %2$s',

	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>Hiba kép generálása közben</strong><br />» Hiba az %1$s állomány %2$s sorában: %3$s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Inaktív felhasználók aktiválása</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Inaktív felhasználók törlése</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Emlékeztető e-mail küldése inaktív felhasználóknak</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Konvertálás %1$s verzióról phpBB %2$s verzióra</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>PhpBB %s telepítése</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Sikertelen munkamenet IP/böngésző/X_FORWARDED_FOR összevetés</strong><br />» Felhasználó „<em>%1$s</em>” IP-címének összevetése a „<em>%2$s</em>” munkamenet IP-címmel, felhasználó „<em>%3$s</em>” böngésző azonosítójának összevetése a munkamenet „<em>%4$s</em>” böngésző azonosítójával és a felhasználó „<em>%5$s</em>” X_FORWARDED_FOR értékének összevetése a munkamenet „<em>%6$s</em>” X_FORWARDED_FOR értékével.', //?

	'LOG_JAB_CHANGED'			=> '<strong>Jabber azonosító megváltoztatása</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Jabber jelszó megváltoztatása</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Jabber azonosító regisztrálása</strong>', //?
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Jabber beállítások megváltoztatás</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Nyelvi csomag törlése</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Nyelvi csomag telepítése</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Nyelvi csomag beállítások frissítése</strong><br />» %s', //?
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Nyelvi fájl kicserélése</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Nyelvi fájl elküldése és a store könyvtárba helyezése</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Csoportos e-mail küldése</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Küldő megváltoztatása a „%1$s” témában</strong><br />» %2$s felhasználóról %3$s felhasználóra',

	'LOG_MODULE_DISABLE'	=> '<strong>Modul kikapcsolása</strong><br />» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>Modul bekapcsolása</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '%1$s <strong>modul mozgatása le</strong> a %2$s alá',
	'LOG_MODULE_MOVE_UP'	=> '%1$s <strong>modul mozgatása fel</strong> a %2$s fölé',
	'LOG_MODULE_REMOVED'	=> '<strong>Modul eltávolítása</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Modul hozzáadása</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Modul szerkesztése</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Adminisztrátori szerep hozzáadása</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Adminisztrátori szerep szerkesztése</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Adminisztrátori szerep törlése</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Fórum szerep hozzáadása</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Fórum szerep szerkesztése</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Fórum szerep törlése</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Moderátori szerep hozzáadása</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Moderátori szerep szerkesztése</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Moderátori szerep törlése</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Felhasználói szerep hozzáadása</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Felhasználói szerep szerkesztése</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Felhasználói szerep törlése</strong><br />» %s',

	'LOG_PLUPLOAD_TIDY_FAILED'		=> '<strong>Nem sikerült a %1$s megnyitása, ellenőrizd a jogosultságokat.</strong><br />Exception: %2$s<br />Trace: %3$s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Profil mező aktiválása</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Profil mező hozzáadása</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Profil mező deaktiválása</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Profil mező megváltoztatása</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Profil mező törlése</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Fórumok megtisztítása</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Fórumok automatikus tisztítása</strong><br />» %s',
	'LOG_PRUNE_SHADOW'		=> '<strong>Automatikusan megtisztított árnyék témák</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Felhasználók deaktiválása</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Felhasználók megtisztítása – törölt felhasználók hozzászólásainak törlése</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Felhasználók megtisztítása – törölt felhasználók hozzászólásainak megtartása</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Gyorsítótár kiürítése</strong>',
	'LOG_PURGE_SESSIONS'		=> '<strong>Munkamenetek törlése</strong>',

	'LOG_RANK_ADDED'		=> '<strong>Új rang hozzáadása</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Rang törlése</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Rang frissítése</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Jelentés/visszautasítás ok hozzáadása</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Jelentés/visszautasítás ok törlése</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Jelentés/visszautasítás ok frissítése</strong><br />» %s',

	'LOG_REFERER_INVALID'		=> '<strong>Sikertelen referer összevetés</strong><br />»Referer értéke: “<em>%1$s</em>”. A kérés visszautasításra került, a munkamenet meg lett szüntetve.',
	'LOG_RESET_DATE'			=> '<strong>Fórum indulási dátumának lenullázása</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Valaha jelenlévő legtöbb felhasználó számának lenullázása</strong>',
	'LOG_RESYNC_FILES_STATS'	=> '<strong>Csatolmáyn statisztikák újraszinkronizálása</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Felhasználói hozzászólásszámok újraszinkronizálása</strong>', //?
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Csillagozott témák újraszinkronizálása</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Hozzászólás, téma és felhasználói statisztikák újraszinkronizálása</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Keresőindex létrehozása</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Keresőindex törlése</strong><br />» %s',
	'LOG_SPHINX_ERROR'			=> '<strong>Sphinx hiba</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Új megjelenés felvétele</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Megjelenés törlése</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Megjelenés szerkesztése</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Megjelenés exportálása</strong><br />» %s',

	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Új sablonkészlet felvétele az adatbázisba</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Új sablonkészlet felvétele a fájlrendszerbe</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong><em>%1$s</em> sablonkészletben lévő sablon állományok gyorsítótárazott verzióinak törlése</strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Sablonkészlet törlése</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong><em>%1$s</em> sablonkészlet szerkesztése</strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Sablon részletek szerkesztése</strong><br />» %s', //?
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Sablonkészlet exportálása</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Sablonkészlet újratöltése</strong><br />» %s',

	// @deprecated 3.1
	'LOG_THEME_ADD_DB'			=> '<strong>Új stílus felvétele az adatbázisba</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_ADD_FS'			=> '<strong>Új stílus felvétele a fájlrendszerbe</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Stílus törlése</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Stílus részletek szerkesztése</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong><em>%1$s</em> stílus szerkesztése</strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong><em>%1$s</em> stílus szerkesztése</strong><br />» módosított állomány: <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Stílus exportálása</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_REFRESHED'		=> '<strong>Stílus újratöltése</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Adatbázis frissítése %1$s verzióról %2$s verzióra</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>PhpBB frissítése %1$s verzióról %2$s verzióra</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>Felhasználó aktiválása</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Felhasználó kitiltása a felhasználó kezelése részben</strong> „<em>%1$s</em>” okkal<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>IP-cím kitiltása a felhasználó kezelése részben</strong> „<em>%1$s</em>” okkal<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>E-mail cím kitiltása a felhasználó kezelése részben</strong> „<em>%1$s</em>” okkal<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Felhasználó törlése</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Felhasználó összes feltöltött csatolmányainak törlése</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Felhasználó avatarának törlése</strong><br />» %s',
	'LOG_USER_DEL_OUTBOX'	=> '<strong>Felhasználó kimenő fiókjának kiürítése</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Felhasználó összes hozzászólásának törlése</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Felhasználó aláírásának törlése</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Felhasználó deaktiválása</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Felhasználó hozzászólásainak áthelyezése</strong><br />» „%1$s” hozzászólásainak áthelyezése a „%2$s” fórumba',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Felhasználó jelszavának megváltoztatása</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Felhasználó azonosítójának újraaktiválásra késztetése</strong><br />» %s', //??
	'LOG_USER_REMOVED_NR'	=> '<strong>Felhasználó újonnan regisztrált státuszának megszüntetése</strong><br />» %s',

	'LOG_USER_UPDATE_EMAIL'	=> '<strong>„%1$s” felhasználó saját e-mail címének megváltoztatása</strong><br />» „%2$s”-ról „%3$s”-ra',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Felhasználónév megváltoztatása</strong><br />» „%1$s” névről „%2$s” névre',
	'LOG_USER_USER_UPDATE'	=> '<strong>Felhasználói beállításainak szerkesztése</strong><br />» %s', //?

	'LOG_USER_ACTIVE_USER'		=> '<strong>Felhasználó azonosítójának aktiválása</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Felhasználó avatarának törlése</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Felhasználó aláírásának törlése</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Felhasználói feljegyzés hozzáadása</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Bejegyzés hozzáadása:</strong><br />» %s', //?
	'LOG_USER_INACTIVE_USER'	=> '<strong>Felhasználói azonosító deaktiválása</strong>',
	'LOG_USER_LOCK'				=> '<strong>Felhasználó saját témájának lezárása</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Összes hozzászólás átmozgatása</strong>» a %s fórumba',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Felhasználó azonosítójának újraaktiválásra késztetése</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Felhasználó saját témájának megnyitása</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Felhasználói figyelmeztetés hozzáadása</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>A felhasználó figyelmeztetésben részesítése:</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Elsődleges csoport megváltoztatása</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Lemondás a csoportvezetőségről:</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Csatlakozás a csoporthoz:</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Csatlakozás a csoporthoz, jóváhagyás még szükséges:</strong><br />» %s', //?
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Lemondás a csoporttagságról:</strong><br />» %s',

	'LOG_WARNING_DELETED'		=> '<strong>Felhasználó figyelmeztetésének törlése</strong><br />» %s',
	'LOG_WARNINGS_DELETED'		=> array(
		1 => '<strong>Felhasználó figyelmeztetésének törlése</strong><br />» %1$s',
		2 => '<strong>Felahsználó %2$d figyelmeztetésének törlése</strong><br />» %1$s', // Example: '<strong>Deleted 2 user warnings</strong><br />» username'
	),
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>Felhasználó összes figyelmeztetésének törlése</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Cenzúrázott szó hozzáadása</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Cenzúrázott szó törlése</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Cenzúrázott szó szerkesztése</strong><br />» %s',

	'LOG_EXT_ENABLE'	=> '<strong>Kiterjesztés engedélyezése</strong><br />» %s',
	'LOG_EXT_DISABLE'	=> '<strong>Kiterjesztés tiltása</strong><br />» %s',
	'LOG_EXT_PURGE'		=> '<strong>Kiterjezstés adatainak törlése</strong><br />» %s',
	'LOG_EXT_UPDATE'	=> '<strong>Kiterjesztés frissítve</strong><br />» %s',
));
