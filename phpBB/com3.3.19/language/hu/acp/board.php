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
* Magyar fordítás (c) 2007-2020 „Magyar phpBB Közösség fordítók”,
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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Itt a fórumod alapvető működését tudod meghatározni, adhatsz neki egy hozzáillő nevet és leírást, valamint többek között beállíthatod az alapértelmezett nyelvet és időzónát.',
	'BOARD_INDEX_TEXT'				=> 'Fórum kezdőlap megnevezése',
	'BOARD_INDEX_TEXT_EXPLAIN'		=> 'Ez a szöveg lesz megjelenítve a navigációs sávban a fórum kezdőlapjaként. Ha nincs megadva, “Fórum kezdőlap” lesz.',
	'BOARD_STYLE'					=> 'Fórum megjelenés',
	'CUSTOM_DATEFORMAT'				=> 'Egyéni…',
	'DEFAULT_DATE_FORMAT'			=> 'Dátum formátum',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'A formátum megegyezik a PHP <code><a href="https://secure.php.net/manual/function.date.php">date()</a></code> függvényével.',
	'DEFAULT_LANGUAGE'				=> 'Alapértelmezett nyelv',
	'DEFAULT_STYLE'					=> 'Alapértelmezett megjelenés',
	'DEFAULT_STYLE_EXPLAIN'			=> 'Az új felhasználók megjelenése.',
	'DISABLE_BOARD'					=> 'Fórum kikapcsolása',
	'DISABLE_BOARD_EXPLAIN'			=> 'Ennek igenre állításával a fórum nem lesz elérhető azon felhasználók számára, akik nem adminisztrátorok vagy moderátorok. Egy rövid üzenetet is megadhatsz (legfeljebb 255 karakter), mely meg fog jelenni a felhasználóknak.',
	'DISPLAY_LAST_SUBJECT'			=> 'Utolsó hozzászólás témájának megjelenítése a fórumok listáján',
	'DISPLAY_LAST_SUBJECT_EXPLAIN'	=> 'Az utoljára beküldött hozzászólás témája megjelenítésre kerül a fórumok listáján egy a hozzászólásra mutató hivatkozással. Azok a hozzászólások, amelyek jelszóval védett vagy olyan fórumokban keletkeztek, amelyekre a felhasználónak nincs jogosultsága nem kerülnek megjelenítésre.',
	'DISPLAY_UNAPPROVED_POSTS'		=> 'Nem jóváhagyott hozzászólások megjelenítése a szerzőnek',
	'DISPLAY_UNAPPROVED_POSTS_EXPLAIN'	=> 'A hozzászólás írója láthatja a még nem jóváhagyott hozzászólásait. Nem vonatkozik a vendégek által írt hozzászólásokra.',
	'GUEST_STYLE'					=> 'Vendég megjelenés',
	'GUEST_STYLE_EXPLAIN'			=> 'A vendégek által használt megjelenés.', //? használt?
	'OVERRIDE_STYLE'				=> 'Felhasználó megjelenésének felülírása',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Kicseréli a felhasználó (és a vendég) megjelenését az alapértelmezettre.',
	'SITE_DESC'						=> 'Oldal leírása',
	'SITE_HOME_TEXT'				=> 'Honlap megnevezése',
	'SITE_HOME_TEXT_EXPLAIN'		=> 'Ez a szöveg lesz megjelenítve a navigációs útvonalban honlapként. Ha nincs megadva, “Kezdőlap” lesz.',
	'SITE_HOME_URL'					=> 'Honlap URL-je',
	'SITE_HOME_URL_EXPLAIN'			=> 'Ha meg van adva, egy erre a címre mutató link lesz elhelyezve a navigációs sávban és a fórum logója is ide fog mutatni a fórum kezdőlapja helyett. Egy teljes URL-t kell megadnod, pl. <samp>http://www.phpbb.com</samp>.', //???
	'SITE_NAME'						=> 'Oldal neve',
	'SYSTEM_TIMEZONE'				=> 'Rendszer időzóna',
	'SYSTEM_TIMEZONE_EXPLAIN'		=> 'A nem belépett felhasználók (vendégek, robotok) ezen időzóna szerint fogják látni az időpontokat. A belépett felhasználók a regisztráció során állítják be az időzónájukat, és később ezt a felhasználói vezérlőpultban tudják módosítani.',
	'WARNINGS_EXPIRE'				=> 'Figyelmeztetés időtartama',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Ennyi nap elteltével jár le a felhasználó figyelmeztetése. Állítsd 0-ra, hogy ne járjon le a figyelmeztetés.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Itt ki- illetve bekapcsolhatod a fórum különböző funkcióit.',

	// Nem lenne jobb a bekapcsolás jobb az engedélyezés helyett?
	'ALLOW_ATTACHMENTS'			=> 'Csatolmányok engedélyezése',
	'ALLOW_BIRTHDAYS'			=> 'Születésnapok engedélyezése',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'A születésnapok megadási és a profilban való megjelenési lehetőségének engedélyezése. Kérjük, vedd figyelembe, hogy a születésnaposok főoldalon való megjelenítését a terhelés beállításoknál tudod be- ill. kikapcsolni.',
	'ALLOW_BOOKMARKS'			=> 'Kedvencek engedélyezése',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'A felhasználó eltárolhatja a kedvenc témáit.',
	'ALLOW_BBCODE'				=> 'BBCode engedélyezése',
	'ALLOW_FORUM_NOTIFY'		=> 'Fórumokra való feliratkozás engedélyezése',
	'ALLOW_NAME_CHANGE'			=> 'Felhasználónév-váltás engedélyezése',
	'ALLOW_NO_CENSORS'			=> 'Szócenzúra kikapcsolásának engedélyezése',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'A felhasználók ha, szeretnék, kikapcsolhatják az automatikus szócenzúrát a hozzászólásokban és a privát üzenetekben.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Csatolmányok engedélyezése privát üzenetekben',
	'ALLOW_PM_REPORT'			=> 'Privát üzenetek jelentésének engedélyezése a felhasználóknak',
	'ALLOW_PM_REPORT_EXPLAIN'	=> 'Ha ez a lehetőség engedélyezve van, a felhasználók jelenthetik a fórum moderátorainak a nekik, ill. az általuk küldött privát üzeneteket. Ezek a privát üzenetek aztán láthatóak lesznek a moderátori vezérlőpultban.',
	'ALLOW_QUICK_REPLY'			=> 'Gyors válasz engedélyezése',
	'ALLOW_QUICK_REPLY_EXPLAIN'	=> 'Itt ki tudod kapcsolni a gyors válasz funkciót a teljes fórumon. Ha engedélyezve van, a fórum specifikus beállítások fogják megállapítani, hogy az egyes fórumokban megjelenik-e a gyors válasz doboz.',
	'ALLOW_QUICK_REPLY_BUTTON'	=> 'Elküldés és a gyors válasz engedélyezése az összes fórumban',
	'ALLOW_SIG'					=> 'Aláírás engedélyezése',
	'ALLOW_SIG_BBCODE'			=> 'BBCode engedélyezése aláírásban',
	'ALLOW_SIG_FLASH'			=> '<code>[FLASH]</code> BBCode címke használatának engedélyezése aláírásban',
	'ALLOW_SIG_IMG'				=> '<code>[IMG]</code> BBCode címke használatának engedélyezése aláírásban',
	'ALLOW_SIG_LINKS'			=> 'Linkek használatának engedélyezése aláírásban',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Ha nem engedélyezett, az <code>[URL]</code> BBCode címke nem használható, és az automatikus linkké alakítás ki van kapcsolva.',
	'ALLOW_SIG_SMILIES'			=> 'Emotikonok használatának engedélyezése az aláírásban',
	'ALLOW_SMILIES'				=> 'Emotikonok engedélyezése',
	'ALLOW_TOPIC_NOTIFY'		=> 'Témákra való feliratkozás engedélyezése',
	'BOARD_PM'					=> 'Privát üzenetek bekapcsolása',
	'BOARD_PM_EXPLAIN'			=> 'A privát üzenetküldő rendszer bekapcsolása az összes felhasználó számára.',
	'ALLOW_BOARD_NOTIFICATIONS' => 'Értesítések engedélyezése',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Az avatarok általánosan kis, egyedi képek, melyeket a felhasználók magukhoz társítanak. A témák megtekintésénél általában a felhasználónév alatt jelennek meg a használt megjelenéstől függően. Ezen az oldalon meghatározhatod, hogy a felhasználók milyen módon adhatják meg az avatarukat. Kérjük, vedd figyelembe, hogy az avatarok feltöltésének működéséhez az alább megadott könyvtárnak léteznie kell, és meg kell győződnöd róla, hogy írható a webszerver által. Kérjük, azt is vedd figyelembe, hogy a maximális állomány méretek csak a feltöltött avatarokra vonatkoznak, a kívülről linkeltekre nem.',

	'ALLOW_AVATARS'					=> 'Avatarok bekapcsolása',
	'ALLOW_AVATARS_EXPLAIN'			=> 'Avatarok használatának engedélyezése általánosságban.<br />Amikor kikapcsolod az avatar funkciót vagy az egyes módon feltöltött avatar képeket, az érintett avatarok nem jelennek meg többet, de a felhasználók továbbra is le tudják tölteni a saját avatarukat a felhasználói vezérlőpultból.',
	'ALLOW_GRAVATAR'				=> 'Gravatar avatarok engedélyezése',
	'ALLOW_LOCAL'					=> 'Avatar galéria bekapcsolása',
	'ALLOW_REMOTE'					=> 'Külső avatarok engedélyezése',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Olyan avatarok, melyek egy másik weboldalról vannak linkelve.<br><em><strong class="error">Figyelmeztetés:</strong> Ennek a funkciónak az engedélyezésével a felhasználók ellenőrizni tudják bizonyos, csak a webszerver helyi hálózatból elérhető fájlok és szolgáltatások létezését.</em>', // ? Enabling this feature might allow users to check for the existence of files and services that are only accessible on the local network
	'ALLOW_REMOTE_UPLOAD'			=> 'Avatar feltöltésének engedélyezése külső helyről',
	'ALLOW_REMOTE_UPLOAD_EXPLAIN'	=> 'Lehetővé teszi avatar feltöltését egy másik weboldalról.<br><em><strong class="error">Figyelmeztetés:</strong> Ennek a funkciónak az engedélyezésével a felhasználók ellenőrizni tudják bizonyos, csak a webszerver helyi hálózatból elérhető fájlok és szolgáltatások létezését.</em>',
	'ALLOW_UPLOAD'					=> 'Avatarfeltöltés engedélyezése',
	'AVATAR_GALLERY_PATH'			=> 'Avatar galéria elérési út',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'A phpBB-d gyökérkönyvtárától viszonyított elérési út az előre feltöltött képekhez, pl. <samp>images/avatars/gallery</samp>.<br />Az elérési útban található dupla pontok (<samp>../</samp>) biztonsági okokból eltávolításra kerülnek.',
	'AVATAR_STORAGE_PATH'			=> 'Avatarok tárolási helyének elérési útja',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'A phpBB-d gyökérkönyvtárától viszonyított elérési út, pl. <samp>images/avatars/upload</samp>.<br />Az avatar feltöltési lehetőség <strong>nem lesz elérhető</strong>, ha ez az elérési út nem írható.<br />Az elérési útban található dupla pontok (<samp>../</samp>) biztonsági okokból eltávolításra kerülnek.',
	'MAX_AVATAR_SIZE'				=> 'Maximum avatar méret',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Szélesség x magasság pixelben.',
	'MAX_FILESIZE'					=> 'Maximum avatar állomány méret',
	'MAX_FILESIZE_EXPLAIN'			=> 'Csak a feltöltött avatarokra vonatkozik. A 0 érték megadásakor csak a PHP beállítások korlátoznak.',
	'MIN_AVATAR_SIZE'				=> 'Minimum avatar méret',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Szélesség x magasság pixelben.',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Ezen az oldalon a privát üzenetekkel kapcsolatos beállításokat adhatod meg.',

	'ALLOW_BBCODE_PM'			=> 'BBCode engedélyezése privát üzenetben',
	'ALLOW_FLASH_PM'			=> '<code>[FLASH]</code> BBCode címke használatának engedélyezése',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Kérjük vedd figyelembe, hogy ha igenre van állítva, a beállítás még a jogosultságoktól is függ.',
	'ALLOW_FORWARD_PM'			=> 'Privát üzenetek továbbküldésének engedélyezése',
	'ALLOW_IMG_PM'				=> '<code>[IMG]</code> BBCode címke használatának engedélyezése',
	'ALLOW_MASS_PM'				=> 'Privát üzenet küldésének engedélyezése egyszerre több felhasználónak és csoportnak',
	'ALLOW_MASS_PM_EXPLAIN'		=> 'A csoport beállítások oldalon külön-külön meghatározható, hogy az adott csoportnak lehet-e küldeni.',
	'ALLOW_PRINT_PM'			=> 'Privát üzenetek nyomtatóbarát verziójának engedélyezése',
	'ALLOW_QUOTE_PM'			=> 'Idézetek engedélyezése privát üzenetekben',
	'ALLOW_SIG_PM'				=> 'Aláírás engedélyezése privát üzenetekhez',
	'ALLOW_SMILIES_PM'			=> 'Emotikonok engedélyezése privát üzenetekben',
	'BOXES_LIMIT'				=> 'Maximum privát üzenetek száma mappánként',
	'BOXES_LIMIT_EXPLAIN'		=> 'A felhasználók legfeljebb ennyi privát üzenetet kaphatnak az egyes mappájukba. Állítsd 0-ra, hogy ne legyen korlát.',
	'BOXES_MAX'					=> 'Maximum privát üzenet mappák száma',
	'BOXES_MAX_EXPLAIN'			=> 'Alapból a felhasználók ennyi személyes mappát hozhatnak létre a privát üzeneteiknek.',
	'ENABLE_PM_ICONS'			=> 'Téma ikonok használatának engedélyezése privát üzenetekben',
	'FULL_FOLDER_ACTION'		=> 'Alapértelmezett művelet egy mappa megtelése esetén',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Ez a művelet kerül elvégzésre, ha egy mappa megtelik, és a felhasználó beállítása – ha egyáltalán megadta – nem alkalmazható. Az egyedüli kivétel az „Elküldött üzenetek” mappa, ahol mindig a régi üzenetek törlése az alapértelmezett.',
	'HOLD_NEW_MESSAGES'			=> 'Új üzenetek visszatartása',
	'PM_EDIT_TIME'				=> 'Szerkesztés idejének korlátozása',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Korlátozza, hogy mennyi ideig lehet szerkeszteni a még nem kézbesített privát üzeneteket. A 0 érték megadásával kikapcsolható ez a viselkedés.', //?
	'PM_MAX_RECIPIENTS'			=> 'Engedélyezett címzettek maximum száma',
	'PM_MAX_RECIPIENTS_EXPLAIN'	=> 'Egy privát üzenetnek legfeljebb ennyi címzettje lehet. Ha 0-t adsz meg, nem lesz korlátozás. A beállítás a csoport beállítások oldalon csoportonként megváltoztatható.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Itt a hozzászólásküldéssel kapcsolatos beállításokat adhatod meg.',
	'ALLOW_POST_LINKS'					=> 'Linkek engedélyezése hozzászólásokban ill. privát üzenetekben',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Ha nem engedélyezett, az <code>[URL]</code> BBCode címke nem használható, és az automatikus linkké alakítás ki van kapcsolva.',
	'ALLOWED_SCHEMES_LINKS'				=> 'Engedélyezett sémák a linkekben',
	'ALLOWED_SCHEMES_LINKS_EXPLAIN'		=> 'A felhasználók csak olyan URL-eket használhatnak, amik séma nélküliek vagy szerepelnek a vesszővel elválasztott felsorolásban.',
	'ALLOW_POST_FLASH'					=> '<code>[FLASH]</code> BBCode címke használatának engedélyezése hozzászólásokban',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'Ha nem engedélyezett, a <code>[FLASH]</code> címke nem használható a hozzászólásokban. Máskülönben a jogosultságoktól függ, használható-e a <code>[FLASH]</code> BBCode címke.',

	'BUMP_INTERVAL'					=> 'Előreugrasztás időköz', //?
	'BUMP_INTERVAL_EXPLAIN'			=> 'Az utolsó hozzászólás után ennyi idő múlva lehet előreugrasztani egy témát. A 0 érték teljesen kikapcsolja a téma előreugrasztás funkciót.',
	'CHAR_LIMIT'					=> 'Hozzászólásonkénti maximum karakterszám',
	'CHAR_LIMIT_EXPLAIN'			=> 'Hány karakter engedélyezett egy hozzászólásban. Állítsd 0-ra a korlátozás megszüntetéséhez.',
	'DELETE_TIME'					=> 'Törlési időkorlát',
	'DELETE_TIME_EXPLAIN'			=> 'Korlátozza, hogy az elküldés után mennyi ideig lehet törölni a hozzászólást. 0 érték megadásával a korlátozás kikapcsolható.',
	'DISPLAY_LAST_EDITED'			=> 'Utolsó szerkesztés információk megjelenítése',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Megjelenjen-e egy hozzászólásnál, hogy ki és mikor szerkesztette utoljára.',
	'EDIT_TIME'						=> 'Szerkesztési időkorlát',
	'EDIT_TIME_EXPLAIN'				=> 'Korlátozza, hogy az elküldés után mennyi ideig lehet szerkeszteni a hozzászólást. 0 érték megadásával a korlátozás kikapcsolható.',
	'FLOOD_INTERVAL'				=> 'Flood időköz', //?
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Ennyi másodpercet kell várnia a felhasználónak két hozzászólás elküldése között. A jogosultságok segítségével beállíthatod, hogy bizonyos felhasználókra ez ne vonatkozzon.',
	'HOT_THRESHOLD'					=> 'Népszerűségi küszöb',
	'HOT_THRESHOLD_EXPLAIN'			=> 'A legalább ennyi hozzászólást tartalmazó témák kerülnek népszerűként megjelölésre. A népszerű témák funkció kikapcsolásához állítsd ezt az értéket 0-ra.',
	'MAX_POLL_OPTIONS'				=> 'Maximum választási lehetőségek száma szavazásoknál',
	'MAX_POST_FONT_SIZE'			=> 'Maximum betűméret egy hozzászólásban',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Maximum betűméret, ami megengedett a hozzászólásokban. Állítsd 0-ra, hogy ne legyen korlátozás.',
	'MAX_POST_IMG_HEIGHT'			=> 'Maximum flash állomány magasság egy hozzászólásban',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Legfeljebb ilyen magas lehet egy flash állomány. Állítsd 0-ra, hogy ne legyen korlátozás.',
	'MAX_POST_IMG_WIDTH'			=> 'Maximum flash állomány szélesség egy hozzászólásban',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Legfeljebb ilyen széles lehet egy flash állomány. Állítsd 0-ra, hogy ne legyen korlátozás.',
	'MAX_POST_URLS'					=> 'Maximum linkszám egy hozzászólásban',
	'MAX_POST_URLS_EXPLAIN'			=> 'Legfeljebb ennyi URL-t tartalmazhat egy hozzászólás. Állítsd 0-ra, hogy ne legyen korlátozás.',
	'MIN_CHAR_LIMIT'				=> 'Hozzászólás/privát üzenet minimum hossza',
	'MIN_CHAR_LIMIT_EXPLAIN'		=> 'A felhasználók csak legalább ennyi karakterből álló hozzászólást, ill. privát üzenetet küldhetnek. A minimális megadható érték 1.', //? 'A felhasználók nem küldhetnek ennél kevesebb karaktert tartalmazó hozzászólást, ill. privát üzenetet.'
	'POSTING'						=> 'Hozzászólásküldés',
	'POSTS_PER_PAGE'				=> 'Hozzászólások száma oldalanként',
	'QUOTE_DEPTH_LIMIT'				=> 'Maximum egymásba ágyazott idézet egy hozzászólásban',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Legfeljebb ennyi idézet lehet egymásba ágyazva egy hozzászólásban. Állítsd 0-ra, hogy ne legyen korlátozás.',
	'SMILIES_LIMIT'					=> 'Maximum emotikonszám egy hozzászólásban',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Legfeljebb ennyi emotikont tartalmazhat egy hozzászólás. Állítsd 0-ra, hogy ne legyen korlátozás.',
	'SMILIES_PER_PAGE'				=> 'Egy oldalon megjelenítendő emotikonok száma', //? 'Emotikonok oldalanként'
	'TOPICS_PER_PAGE'				=> 'Témák száma oldalanként',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Itt az aláírással kapcsolatos beállításokat adhatod meg.',

	'MAX_SIG_FONT_SIZE'				=> 'Maximum betűméret az aláírásban',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Legfeljebb ekkora betűméret használata engedélyezett az aláírásban. Állítsd 0-ra, hogy ne legyen korlátozás.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Maximum képmagasság az aláírásban',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Legfeljebb ilyen magas kép/flash állomány engedélyezett az aláírásban. Állítsd 0-ra, hogy ne legyen korlátozás.',
	'MAX_SIG_IMG_WIDTH'				=> 'Maximum képszélesség az aláírásban',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Legfeljebb ilyen széles kép/flash állomány engedélyezett az aláírásban. Állítsd 0-ra, hogy ne legyen korlátozás.',
	'MAX_SIG_LENGTH'				=> 'Maximum aláírás hossz',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Legfeljebb ennyi karaktert tartalmazhat az aláírás.',
	'MAX_SIG_SMILIES'				=> 'Maximum emotikonszám az aláírásban',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Legfeljebb ennyi emotikon engedélyezett az aláírásban. Állítsd 0-ra, hogy ne legyen korlátozás.',
	'MAX_SIG_URLS'					=> 'Maximum linkszám az aláírásban',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Legfeljebb ennyi link engedélyezett az aláírásban. Állítsd 0-ra, hogy ne legyen korlátozás.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Itt a regisztrációval és a profillal kapcsolatos beállításokat adhatsz meg.',

	'ACC_ACTIVATION'				=> 'Azonosító aktiválása',
	'ACC_ACTIVATION_EXPLAIN'		=> 'Ez dönti el, hogy a felhasználók azonnal hozzáférnek-e a fórumhoz, vagy megerősítés szükséges. A regisztrálás lehetőségét teljesen ki is kapcsolhatod. <em>A felhasználói vagy adminisztrátori aktiválás használatához a fórum e-mail küldés funkciójának engedélyezve kell lennie.</em>',
	'ACC_ACTIVATION_WARNING'		=> 'Kérjük, vedd figyelembe, hogy a jelenleg kiválasztott azonosító aktiválási módhoz az e-mail küldésnek engedélyezve kell lennie, egyébként a regisztrálás lehetősége le lesz tiltva. Javasoljuk, hogy válassz másik aktiválási módot vagy engedélyezd újra az e-mail küldést.',
	'NEW_MEMBER_POST_LIMIT'			=> 'Új tag hozzászólás határ',
	'NEW_MEMBER_POST_LIMIT_EXPLAIN'	=> 'Az új tagok az <em>Újonnan regisztrált felhasználók</em> csoportba kerülnek, amíg el nem érik az itt megadott hozzászólásszámot. Ennek a csoportnak a segítségével például meggátolhatod számukra privát üzenetek küldését, vagy moderátori jóváhagyáshoz kötheted a hozzászólásaikat. <strong>A 0 érték kikapcsolja ezt a funkciót.</strong>',
	'NEW_MEMBER_GROUP_DEFAULT'		=> 'Újonnan regisztrált felhasználók csoport elsődlegessé tétele',
	'NEW_MEMBER_GROUP_DEFAULT_EXPLAIN'	=> 'Ha igent adsz meg, és az új tag hozzászólás határ is be van állítva, az újonnan regisztrált felhasználók nemcsak bekerülnek az <em>Újonnan regisztrált felhasználók</em> csoportba, de ez lesz az elsődleges csoportjuk is. Ez hasznos lehet, ha meg szeretnél adni egy alapértelmezett csoport rangot és/vagy avatart, amit aztán a felhasználók örökölnek.',

	'ACC_ADMIN'					=> 'Adminisztrátori',
	'ACC_DISABLE'				=> 'Regisztráció kikapcsolása',
	'ACC_NONE'					=> 'Nincs (azonnal bejelentkezhet)',
	'ACC_USER'					=> 'Felhasználói (e-mail megerősítés)',
//	'ACC_USER_ADMIN'			=> 'Felhasználói + adminisztrátori',
	'ALLOW_EMAIL_REUSE'			=> 'E-mail címek újrahasználásának engedélyezése',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Több felhasználó is regisztrálhat ugyanazzal az e-mail címmel.',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'COPPA fax szám',
	'COPPA_MAIL'				=> 'COPPA postai cím',
	'COPPA_MAIL_EXPLAIN'		=> 'Erre a címre küldik a szülők a COPPA regisztrációs nyilatkozatot.',
	'ENABLE_COPPA'				=> 'COPPA engedélyezése',
	'ENABLE_COPPA_EXPLAIN'		=> 'A felhasználóknak nyilatkozniuk kell, hogy 13 év fölött vannak-e az amerikai COPPA törvény miatt. Más országokban nem szükséges bekapcsolni. Ha ki van kapcsolva, a COPPA-val kapcsolatos csoportok sem jelennek meg.',
	'MAX_CHARS'					=> 'legfeljebb',
	'MIN_CHARS'					=> 'legalább',
	'NO_AUTH_PLUGIN'			=> 'Nem található megfelelő azonosítási bővítmény.',
	'PASSWORD_LENGTH'			=> 'Jelszó hossza',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Minimum mennyi karakterből állhat a jelszó. A jelszó maximális hossza nincs korlátozva.',
	'REG_LIMIT'					=> 'Regisztrációs kísérletek',
	'REG_LIMIT_EXPLAIN'			=> 'Legfeljebb ennyi kísérletet tehet a felhasználó az anti-robot feladat megoldására, mielőtt ki lenne zárva arra a munkamenetre.',
	'USERNAME_ALPHA_ONLY'		=> 'Csak alfanumerikus',
	'USERNAME_ALPHA_SPACERS'	=> 'Alfanumerikus és térköz',
	'USERNAME_ASCII'			=> 'ASCII (nincsenek nemzetközi unicode karakterek)',
	'USERNAME_LETTER_NUM'		=> 'Bármilyen betű és szám',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Bármilyen betű, szám és térköz',
	'USERNAME_CHARS'			=> 'Felhasználónév karaktereinek korlátozása',
	'USERNAME_CHARS_ANY'		=> 'Bármilyen karakter',
	'USERNAME_CHARS_EXPLAIN'	=> 'A felhasználónévben használható karakterek típusának korlátozása; a térköz karakterek a következők: szóköz, -, +, _, [ és ].',
	'USERNAME_LENGTH'			=> 'Felhasználónév hossza',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Minimum illetve maximum mennyi karakterből állhat a felhasználónév.',
));

// Feeds
$lang = array_merge($lang, array(
	'ACP_FEED_MANAGEMENT'				=> 'Általános ATOM csatorna beállítások',
	'ACP_FEED_MANAGEMENT_EXPLAIN'		=> 'Ez a modul különböző ATOM csatornákat tesz elérhetővé. A hozzászólások BBCode-ja is feldolgozásra kerül, hogy a hozzászólások a külső olvasókban is úgy jelenjenek meg, mint egyébként.',

	'ACP_FEED_GENERAL'					=> 'Általános csatorna beállítások',
	'ACP_FEED_POST_BASED'				=> 'Hozzászólás csatorna beállítások',
	'ACP_FEED_TOPIC_BASED'				=> 'Téma csatorna beállítások',
	'ACP_FEED_SETTINGS_OTHER'			=> 'Más csatornák és beállítások',

	'ACP_FEED_ENABLE'					=> 'Csatornák bekapcsolása',
	'ACP_FEED_ENABLE_EXPLAIN'			=> 'Az ATOM csatornák be- vagy kikapcsolása az egész fórumon.<br />Ha kikapcsolod, az alábbi beállításoktól függetlenül, az összes csatorna kikapcsolásra kerül.',
	'ACP_FEED_LIMIT'					=> 'Bejegyzések száma',
	'ACP_FEED_LIMIT_EXPLAIN'			=> 'Legfeljebb ennyi bejegyzés kerül megjelenítésre a csatornákban.',

/*	'ACP_FEED_OVERALL_FORUMS'			=> 'Fórum összesító csatorna bekapcsolása', //? "Enable overall forums feed" overall - összesítő?
	'ACP_FEED_OVERALL_FORUMS_EXPLAIN'	=> 'Ez a csatorna a legújabb hozzászólásokat jeleníti meg a fórum összes témájából.',
	'ACP_FEED_OVERALL_FORUMS_LIMIT'		=> 'Megjelenítendő bejegyzések száma oldalanként a fórumok csatorában',

	'ACP_FEED_OVERALL_TOPIC'			=> 'Téma összesítő csatorna bekapcsolása', //?
	'ACP_FEED_OVERALL_TOPIC_EXPLAIN'	=> 'Bekapcsolja az „Összes téma” csatornát',
	'ACP_FEED_OVERALL_TOPIC_LIMIT'		=> 'Megjelenítendő bejegyzések száma oldalanként a témák csatorában',*/
	'ACP_FEED_OVERALL'					=> 'Globális fórum csatorna bekapcsolása',
	'ACP_FEED_OVERALL_EXPLAIN'			=> 'Új hozzászólások az összes fórumból.',
	'ACP_FEED_FORUM'					=> 'Fórumonkénti csatornák bekapcsolása',
	'ACP_FEED_FORUM_EXPLAIN'			=> 'Az egyes fórumok új hozzászólásai a saját csatornájukban.',
	'ACP_FEED_TOPIC'					=> 'Témánkénti csatornák bekapcsolása',
	'ACP_FEED_TOPIC_EXPLAIN'			=> 'Az egyes témák új hozzászólásai a saját csatornájukban.',

	'ACP_FEED_TOPICS_NEW'				=> 'Új témák csatorna bekapcsolása',
	'ACP_FEED_TOPICS_NEW_EXPLAIN'		=> 'Bekapcsolja az „Új témák” csatornát, amely az újonnan létrehozott témákat jeleníti meg az első hozzászólásukkal együtt.',
	'ACP_FEED_TOPICS_ACTIVE'			=> 'Aktív témák csatorna bekapcsolása',
	'ACP_FEED_TOPICS_ACTIVE_EXPLAIN'	=> 'Bekapcsolja az „Aktív témák” csatornát, amely az utoljára aktív témákat jeleníti meg az utolsó hozzászólásukkal együtt.',
	'ACP_FEED_NEWS'						=> 'Hírcsatorna',
	'ACP_FEED_NEWS_EXPLAIN'				=> 'A hírcsatorna ezen fórumok első hozzászólásait jeleníti meg. Ha ki szeretnéd kapcsolni, ne válassz ki egy fórumot se.<br />Több fórumot a <samp>CTRL</samp> gomb nyomvatartásával tudsz kiválasztani.',

	'ACP_FEED_OVERALL_FORUMS'			=> 'Fórum csatorna bekapcsolása',
	'ACP_FEED_OVERALL_FORUMS_EXPLAIN'	=> 'Bekapcsolja az „Összes fórum” csatornát, amely a fórumok listáját jeleníti meg..',

	'ACP_FEED_HTTP_AUTH'				=> 'HTTP azonosítás engedélyezése',
	'ACP_FEED_HTTP_AUTH_EXPLAIN'		=> 'Engedélyezi a HTTP azonosítást, aminek segítségével a felhasználók a vendég felhasználók elől elzárt tartalmakhoz is hozzáférnek, ha a csatorna URL-jét kiegészítik a <samp>auth=http</samp> paraméterrel. Kérjük, vedd figyelembe, hogy egyes PHP környezetekben további változtatásokat kell elvégezni a .htaccess állományban. A teendők megtalálhatóak ebben az állományban.',
	'ACP_FEED_ITEM_STATISTICS'			=> 'Bejegyzés statisztikák',
	'ACP_FEED_ITEM_STATISTICS_EXPLAIN'	=> 'Különböző statisztikai adatokat jelenít meg a csatorna bejegyzései alatt.<br />(Például szerző, dátum, válaszok száma, megtekintések száma)',
	'ACP_FEED_EXCLUDE_ID'				=> 'Kizárandó fórumok',
	'ACP_FEED_EXCLUDE_ID_EXPLAIN'		=> 'Ezen fórumok tartalma <strong>nem kerül megjelenítésre a csatornákban</strong>. <br />Több fórumot kijelölni, illetve a kijelölést megszüntetni a <samp>CTRL</samp> gomb nyomvatartásával lehet.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'				=> 'Itt az anti-robot bővítményeket tudod kezelni, melyek különböző módokon próbálják megakadályozni az ún. spamrobotok regisztrációját. Ezek a bővítmények általában egy olyan feladat megoldását követelik meg a felhasználótól, melyek a robotok számára nehezek.',
	'ACP_VC_EXT_GET_MORE'					=> 'További anti-robot bővítményekért látogasd meg a <a href="https://www.phpbb.com/go/anti-spam-ext"><strong>phpBB.com Extensions Database</strong></a>-t. A SPAM megelőzésével kapcsolatos további információkért látogasd meg a <a href="https://www.phpbb.com/go/anti-spam"><strong>phpBB.com Knowledge Base</strong></a>-t.', //?
	'AVAILABLE_CAPTCHAS'					=> 'Elérhető bővítmények',
	'CAPTCHA_UNAVAILABLE'					=> 'Ezt a bővítményt nem lehet kiválasztani, mivel a működéséhez szükséges követelmények nem teljesülnek.',
	'CAPTCHA_GD'							=> 'GD kép',
	'CAPTCHA_GD_3D'							=> 'GD 3D kép',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'Előtéri zaj',
	'CAPTCHA_GD_EXPLAIN'					=> 'A GD-vel jobb anti-robot kép állítható elő.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Az előtéri zajosítás használatával nehezebben olvashatóvá lehet tenni a képet.',
	'CAPTCHA_GD_X_GRID'						=> 'Hátteri x-tengely zaj',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'A kisebb értékek nehezebben olvashatóvá teszik a képet. A 0 kikapcsolja az x-tengelyi zajosítást.',
	'CAPTCHA_GD_Y_GRID'						=> 'Hátteri y-tengely zaj',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'A kisebb értékek nehezebben olvashatóvá teszik a képet. A 0 kikapcsolja az y-tengelyi zajosítást.',
	'CAPTCHA_GD_WAVE'						=> 'Hullámtorzítás',
	'CAPTCHA_GD_WAVE_EXPLAIN'				=> 'Ez a beállítás hullámszerűen eltorzítja a képet.',
	'CAPTCHA_GD_3D_NOISE'					=> '3D zajosítás',
	'CAPTCHA_GD_3D_NOISE_EXPLAIN'			=> 'A betűk fölé plusz 3D-s objektumok kerülnek.',
	'CAPTCHA_GD_FONTS'						=> 'Különböző betűtípusok használata',
	'CAPTCHA_GD_FONTS_EXPLAIN'				=> 'Itt megadhatod, mennyi különbőző betűforma legyen használva. Használhatod csak az alap formákat, vagy bevezethetsz módosított betűket, illetve a kisbetűket is beállíthatod.', //?
	'CAPTCHA_FONT_DEFAULT'					=> 'Alap',
	'CAPTCHA_FONT_NEW'						=> 'Új formák',
	'CAPTCHA_FONT_LOWER'					=> 'Kisbetűk is',
	'CAPTCHA_NO_GD'							=> 'Egyszerű kép',
	'CAPTCHA_PREVIEW_MSG'					=> 'A beállításaid nem kerültek elmentésre, ez csak egy előnézet.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'Így nézne ki a bővítmény a jelenlegi beállításokkal.',

	'CAPTCHA_SELECT'						=> 'Telepített bővítmények',
	'CAPTCHA_SELECT_EXPLAIN'				=> 'A legördülő menü tartalmazza a fórum által felismert bővítményeket. A szürkével írottak jelenleg nem érhetőek el, és a használatba vételük előtt lehet, hogy konfigurálni kell őket.',
	'CAPTCHA_CONFIGURE'						=> 'Bővítmények konfigurálása',
	'CAPTCHA_CONFIGURE_EXPLAIN'				=> 'A kiválasztott bővítmény beállításainak megváltoztatása.',
	'CONFIGURE'								=> 'Konfiguráció',
	'CAPTCHA_NO_OPTIONS'					=> 'Ennek a bővítménynek nincsenek beállítási lehetőségei.',

	'VISUAL_CONFIRM_POST'					=> 'Anti-robot bővítmény használata vendég hozzászólásküldéskor',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'A tömeges hozzászólás elkerülése végett a nem regisztrált felhasználóknak teljesítenük kell az anti-robot bővítmény által megszabott feladatot.',
	'VISUAL_CONFIRM_REG'					=> 'Anti-robot bővítmény használata regisztrációnál',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'A tömeges regisztráció elkerülése végett az új felhasználóknak teljesítenük kell az anti-robot bővítmény által megszabott feladatot.',
	'VISUAL_CONFIRM_REFRESH'				=> 'Megerősítés kép frissítésének engedélyezése',
	'VISUAL_CONFIRM_REFRESH_EXPLAIN'		=> 'Ha a felhasználó nem tudja megoldani az anti-robot bővítmény által generált feladatot, újat kérhet. Ezt a funkciót nem minden bővítmény támogatja.',

));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Ezek a beállítások határozzák meg, hogy a felhasználóid böngészőjének milyen sütik kerülnek elküldésre. A legtöbb esetben az alapbeállítások megfelelőek. Ha mégis meg kell változtatnod egy beállítást, tedd figyelemmel, mivel a nem helyes beállítások következtében előfordulhat, hogy a felhasználók nem tudnak majd belépni. Ha a felhasználóknak problémái vannak a fórumon való bejelentkezve maradással, akkor látogasd meg az angol nyelvű <strong><a href="https://www.phpbb.com/support/go/cookie-settings/">phpBB.com Knowledge Base - Fixing incorrect cookie settings</a></strong> oldalt.',

	'COOKIE_DOMAIN'				=> 'Süti domain',
	'COOKIE_DOMAIN_EXPLAIN'		=> 'A legtöbb esetben a süti domaint nem kell megadni. Hagyd üresen, ha nem vagy biztos az értékében.<br /><br /> Abban az esetben, ha a fórum integrálva van weboldallal vagy más programmal, esetleg több domain névről is elérhető, akkor a következőket kell tenned a megadandó érték eldöntésére. Ha van például egy <i>example.com</i> és egy <i>forums.example.com</i> címed, vagy <i>forums.example.com</i> és <i>blog.example.com</i>, akkor távolítsd el a címek elején lévő aldomaineket addig, amíg meg nem kapod a közös domain nevet, ami ebben az esetben <i>example.com</i>. Most tegyél egy pontot a domain elé és add meg a .example.com címet (figyelj a cím elején lévő pontra).',
	'COOKIE_NAME'				=> 'Süti név',
	'COOKIE_NAME_EXPLAIN'		=> 'Ez bármi lehet, amit szeretnél, legyen egyedi. Ha a süti beállítások változnak, a süti nevét is módosítani kell.',
	'COOKIE_NOTICE'				=> 'Süti használati figyelmeztetés',
	'COOKIE_NOTICE_EXPLAIN'		=> 'Ha engedélyezed, a látogatóidnak egy süti használati figyelmeztetés kerül megjelenítésre a fórumod felkeresésekor. Erre jogi okokból lehet szükség a fórumod tartalmától és az engedélyezett kiterjesztésektől függően.', //? "If enabled a cookie notice will be displayed to users when visiting your board. This might be required by law depending on the content of your board and enabled extensions."
	'COOKIE_PATH'				=> 'Süti elérési út',
	'COOKIE_PATH_EXPLAIN'		=> 'Ez általában ugyanaz lesz, mint a fórum elérési útja vagy egy perjel, ha a sütit az egész domainen elérhetővé szeretnéd tenni.', // ? script path
	'COOKIE_SECURE'				=> 'Süti biztonság',
	'COOKIE_SECURE_EXPLAIN'		=> 'Ha a szervered SSL-en fut, kapcsold be, egyébként hagyd kikapcsolva. Ha be van állítva, de nincs SSL, az átirányítások során szerver hibák fognak fellépni.',
	'ONLINE_LENGTH'				=> 'Ki van itt megjelenési időtartam',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Ennyi perc után nem fognak az inaktív felhasználók megjelenni a „Ki van itt” listában. Minél nagyobb érték van megadva, annál több időbe telik a lista generálása.',
	'SESSION_LENGTH'			=> 'Munkamenet hossza',
	'SESSION_LENGTH_EXPLAIN'	=> 'A munkamenet ennyi idő elteltével jár le, másodpercben.',
));

// Contact Settings
$lang = array_merge($lang, array(
	'ACP_CONTACT_SETTINGS_EXPLAIN'		=> 'Itt be- vagy kikapcsolhatod a fórum kapcsolat oldalát, valamint megadhatsz egy az oldalon megjelenő üzenetet.',

	'CONTACT_US_ENABLE'				=> 'Kapcsolat oldal engedélyezése',
	'CONTACT_US_ENABLE_EXPLAIN'		=> 'Ezen az oldalon a felhasználók e-mailt küldhetnek a fórum adminisztrátorainak. Kérjük, vedd figyelembe, hogy a fórum e-mail küldésnek bekapcsolva kell lennie az Általános &gt; Kommunikáció a kliensekkel &gt; E-mail beállítások pontban. Az e-mail a kapcsolat e-mail címnél megadott címre kerül elküldésre.',

	'CONTACT_US_INFO'				=> 'Kapcsolati információk',
	'CONTACT_US_INFO_EXPLAIN'		=> 'Ez az üzenet lesz megjelenítve a kapcsolat oldalon.',
	'CONTACT_US_INFO_PREVIEW'		=> 'Kapcsolati információk - Előnézet',
	'CONTACT_US_INFO_UPDATED'		=> 'A kapcsolati információk sikeresen frissítésre kerültek.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Itt be- vagy kikapcsolhatod a fórum bizonyos funkcióit a jobb teljesítmény érdekében. A legtöbb szerveren nincs szükség semmilyen funkció kikapcsolására. Azonban egyes rendszereken vagy másokkal megosztott tárhelyszolgáltatás esetében előnyös lehet kikapcsolni néhány igazából nem használt lehetőséget. Emellett korlátokat is meghatározhatsz a rendszer terhelésére vagy az aktív munkamenetek számára, melyek fölött a fórum automatikusan szünetelni fog.',

	'ALLOW_CDN'						=> 'Külső CDN használata',
	'ALLOW_CDN_EXPLAIN'				=> 'Ha ez a beállítás engedélyezve van, akkor bizonyos fájlok harmadik fél által üzemeltetett Content Delivery Network-ről kerülnek kiszolgálásra a szervered helyett. Ez csökkenti a szerver által igényelt sávszélességet, azonban adatvédelmi aggályokat vethet fel. Az alap phpBB telepítésben a “jQuery” függvénykönyvtár és az “Open Sans” betűtípus kerül kiszolgálásra a Google Content Delivery Network-ről.',	//?
	'ALLOW_LIVE_SEARCHES'			=> 'Azonnali keresési találatok engedélyezése',
	'ALLOW_LIVE_SEARCHES_EXPLAIN'	=> 'Ha ez a beállítás engedélyezve van, akkor a felhasználó a fórum bizonyos mezőiben gépelés közben keresési találatokat kap.', //?
	'CUSTOM_PROFILE_FIELDS'			=> 'Egyedi profil mezők',
	'LIMIT_LOAD'					=> 'Rendszerterhelés korlátozása',
	'LIMIT_LOAD_EXPLAIN'			=> 'Ha a rendszer egy perces átlagos terhelése meghaladja ezt az értéket, a fórum automatikusan szünetelni fog. Az 1.0 érték megegyezik egy processzor ~100%-os használatával. A funkció csak UNIX alapú rendszereken működik, és akkor is csak akkor, ha elérhető ez az információ. Amennyiben a phpBB-nek nem sikerül meghatároznia a terheléskorlátot, ez az érték automatikusan 0-ra állítódik.',
	'LIMIT_SESSIONS'				=> 'Munkamenetek korlátozása',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Ha a munkamenetek száma egy perc alatt meghaladja ezt az értéket, a fórum automatikusan szünetelni fog. Állítsd 0-ra, hogy ne legyen korlátozás.',
	'LOAD_CPF_MEMBERLIST'			=> 'Egyedi profil mezők megjelenítése a taglistában',
	'LOAD_CPF_PM'					=> 'Egyedi profil mezők megjelenítése a privát üzeneteknél',
	'LOAD_CPF_VIEWPROFILE'			=> 'Egyedi profil mezők megjelenítése a felhasználók profiljában',
	'LOAD_CPF_VIEWTOPIC'			=> 'Egyedi profil mezők megjelenítése a téma oldalakon',
	'LOAD_USER_ACTIVITY'			=> 'Felhasználó aktivitásának mutatása',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Legaktívabb téma/fórum megjelenítése a felhasználók profiljában és a felhasználói vezérlőpultban. Több, mint egymillió hozzászólással rendelkező fórumoknál ajánlott kikapcsolni.',
	'LOAD_USER_ACTIVITY_LIMIT'		=> 'Felhasználó aktivitás mutatásának korlátja',
	'LOAD_USER_ACTIVITY_LIMIT_EXPLAIN'	=> 'A legaktívabb téma/fórum nem kerül megjelenítésre azkonál a felhasználóknál, akiknek a megadottnál több hozzászólásuk van. Állítsd 0-ra, hogy ne legyen korlátozás.',
	'READ_NOTIFICATION_EXPIRE_DAYS'	=> 'Olvasási értesítés lejárata',
	'READ_NOTIFICATION_EXPIRE_DAYS_EXPLAIN' => 'Az olvasási értesítések automatikus törlése előtti napok száma. Állítsd 0-ra az automatikus törlés megszüntetéséhez.',
	'RECOMPILE_STYLES'				=> 'Elévült megjelenés komponensek újrafeldolgozása',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Megnézi, hogy frissült-e az adott megjelenés komponens, és ha igen, újra feldolgozza.',
	'YES_ACCURATE_PM_BUTTON'			=> 'Jogosultságfüggő PÜ gomb a fórum témák oldalain', // ? Enable permission specific PM button in topic pages
	'YES_ACCURATE_PM_BUTTON_EXPLAIN'	=> 'Ha engedélyezve van, csak azoknak a felhasználóknak a hozzászólás melletti mini profiljában jelenik meg a privát üzenet küldése gomb, akiknek joguk van privát üzenetek olvasására.', // ? If this setting is enabled, only post profiles of users who are permitted to read private messages will have a private message button.
	'YES_ANON_READ_MARKING'			=> 'Olvasottságmegjelölés engedélyezése vendégeknek',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'A vendégeknek is eltárolja az olvasott témákat/fórumokat. Kikapcsolt állapotban a vendégeknek minden hozzászólás olvasott.',
	'YES_BIRTHDAYS'					=> 'Születésnaposok kiírásának bekapcsolása',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Ha ki van kapcsolva, nem jelenik meg a kezdőoldalon a születésnaposok listája. A beállítás érvényesüléséhez a születésnaposok funkciónak is bekapcsolva kell lennie.',
	'YES_JUMPBOX'					=> 'Fórum ugrás doboz bekapcsolása',
	'YES_MODERATORS'				=> 'Moderátorok megjelenítésének bekapcsolása',
	'YES_ONLINE'					=> 'Jelenlévő felhasználók felsorolásának bekapcsolása',
	'YES_ONLINE_EXPLAIN'			=> 'Információ megjelenítése a jelen lévő felhasználókról a kezdőoldalon és a fórum ill. téma oldalakon.',
	'YES_ONLINE_GUESTS'				=> 'Vendégek megjelenítésének bekapcsolása a jelenlévők között',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Információ megjelenítése a jelen lévő vendégekről a jelenlévő felhasználóknál.',
	'YES_ONLINE_TRACK'				=> 'Felhasználó online/offline állapotának megjelenítésének bekapcsolása',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'A profilban és a téma oldalakon jelzi, hogy az adott felhasználó éppen online-e.',
	'YES_POST_MARKING'				=> 'Csillagozott témák bekapcsolása',
	'YES_POST_MARKING_EXPLAIN'		=> 'Jelzi, hogy a felhasználó hozzászólt-e a témához.',
	'YES_READ_MARKING'				=> 'Szerveroldali olvasottságmegjelölés bekapcsolása',
	'YES_READ_MARKING_EXPLAIN'		=> 'Az olvasott témákról/fórumokról az információt az adatbázisban tárolja süti helyett.',
	'YES_UNREAD_SEARCH'				=> 'Olvasatlan hozzászólások keresésének engedélyezése',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'A phpBB különböző azonosítási bővítményeket vagy modulokat is támogat. Ezek határozzák meg, hogy mi történik, amikor egy felhasználó belép a fórumra. Alapból négy bővítmény áll rendelkezésre: DB (adatbázis), LDAP, Apache és OAuth. Nem mindegyiknek van szüksége kiegészítő információkra, így csak azokat a mezőket töltsd ki, amelyek a kiválasztott bővítményhez tartoznak.',

	'AUTH_METHOD'				=> 'Azonosítási mód',

	'AUTH_PROVIDER_OAUTH_ERROR_ELEMENT_MISSING'	=> 'A key-t és a secret-et is meg kell adnod minden engedélyezett OAuth szolgáltatáshoz, azonban te csak az egyiket adtad meg.',
	'AUTH_PROVIDER_OAUTH_EXPLAIN'				=> 'Minden OAuth szolgáltatónak szüksége van egy egyedi secret-re és egy key-re, hogy azonosítani tudja a felhasználót egy külső szerveren történő belépéskor. Ezeket az OAuth szolgáltató adja meg a náluk történt regisztráció után, és pontosan abban a formában kell megadnod, ahogy azt a szolgáltató megadta.<br />Azok a szolgáltatók, amelyekhez nincs megadva secret és key is, nem lesznek használhatóak. Megjegyzés: a felhasználók továbbra is tudnak regisztrálni és bejelentkezni a DB azonosítás használatával.', //?
	'AUTH_PROVIDER_OAUTH_KEY'					=> 'Key',
	'AUTH_PROVIDER_OAUTH_TITLE'					=> 'OAuth',
	'AUTH_PROVIDER_OAUTH_SECRET'				=> 'Secret',

	'APACHE_SETUP_BEFORE_USE'	=> 'Az apache azonosítást előbb kell beállítanod, mint hogy a phpBB-t erre az azonosítási módra állítanád. Ne felejtesd el, hogy az apache azonosításhoz használt felhasználónévnek meg kell egyeznie a phpBB-beli felhasználónévvel. Az apache azonosítás csak mod_php-vel használható (CGI verzióval nem).',

	'LDAP'							=> 'LDAP',
	'LDAP_DN'						=> 'LDAP base <var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> 'A felhasználóról információt tartalmazó Distinguished Name, pl. <samp>o=My Company,c=US</samp>.',
	'LDAP_EMAIL'					=> 'LDAP e-mail attribútum',
	'LDAP_EMAIL_EXPLAIN'			=> 'Add meg a felhasználók e-mail címét tartalmazó attribútum nevét (ha van), hogy az új felhasználók e-mail címe automatikusan beállításra kerüljön. Ha üresen hagyod, az első alkalommal belépő felhasználóknak üres lesz az e-mail címük.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'Nem sikerült az LDAP szervert összekötni a megadott felhasználó/jelszó páros használatával.',
	'LDAP_NO_EMAIL'					=> 'A megadott e-mail paraméter nem létezik.',
	'LDAP_NO_IDENTITY'				=> 'Nem található belépési azonosító: %s.',
	'LDAP_PASSWORD'					=> 'LDAP jelszó',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Névtelen hozzáférés használatához hagyd üresen, egyébként add meg a fenti felhasználóhoz tartozó jelszót. Active Directory szervereknél szükséges.<br /><em><strong>Figyelmeztetés:</strong> Ez a jelszó az adatbázisban sima szövegként kerül tárolásra, így bárki által hozzáférhető, aki hozzáfér az adatbázishoz vagy látja ezt a beállítás oldalt.</em>',
	'LDAP_PORT'						=> 'LDAP szerver port',
	'LDAP_PORT_EXPLAIN'				=> 'Ha kell, az alap 389-es helyett megadhatsz egy másik portot, mely használva lesz az LDAP szerverhez való kapcsolódáshoz.',
	'LDAP_SERVER'					=> 'LDAP szervernév',
	'LDAP_SERVER_EXPLAIN'			=> 'LDAP használata esetén a szerver neve vagy IP-címe. Megadhatsz egy URL-t is, mint például ldap://hosztnév:port/',
	'LDAP_UID'						=> 'LDAP <var>uid</var>',
	'LDAP_UID_EXPLAIN'				=> 'Ezzel a kulccsal történik a keresés az adott belépési azonosítóra, pl. <var>uid</var>, <var>sn</var> stb.',
	'LDAP_USER'						=> 'LDAP felhasználó <var>dn</var>',
	'LDAP_USER_EXPLAIN'				=> 'Névtelen hozzáférés használatához hagyd üresen. Ha ki van töltve, a phpBB belépéskor a megadott distinguished name-t fogja használni a megfelelő felhasználó megtalálásához, pl. <samp>uid=Username,ou=MyUnit,o=MyCompany,c=US</samp>. ',
	'LDAP_USER_FILTER'				=> 'LDAP felhasználószűrő',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'Tetszőlegesen tovább korlátozhatod a keresett objektumokat további szűrőkkel. Például a <samp>objectClass=posixGroup</samp> megadása a <samp>(&amp;(uid=$username)(objectClass=posixGroup))</samp> használatát eredményezné.',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Itt a szerverrel és a domainnel kapcsolatos beállításokat adhatod meg. Kérünk, győződj meg róla, hogy az adatok pontosak, mivel nem helyes megadás esetén az e-mailek hibás információt fognak tartalmazni. A domain név megadásánál ne felejtsd el, hogy a http:// vagy más protokollspecifikáció nem része a címnek. A portot csak akkor módosítsd, ha biztosan tudod, hogy a szerver egy másikat használ, a 80-as port a legtöbb esetben megfelelő.',

	'ENABLE_GZIP'				=> 'GZip tömörítés bekapcsolása',
	'ENABLE_GZIP_EXPLAIN'		=> 'A generált tartalom a felhasználónak való elküldés előtt tömörítésre kerül. Ezzel csökkenteni lehet a hálózati forgalmat, ugyanakkor a CPU-igénybevétel nőni fog, mind a szerver-, mind a kliensoldalon. A működéséhez a zlib PHP bővítménynek betöltve kell lennie.',
	'FORCE_SERVER_VARS'			=> 'Szerver URL beállítások használata', //? force így kimaradt? van rá magyar megfelelő?
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Ha igenre van állítva, az itt megadott beállítások kerülnek használatra az automatikus megállapítás helyett.',
	'ICONS_PATH'				=> 'Hozzászólás ikonok elérési útja',
	'ICONS_PATH_EXPLAIN'		=> 'A phpBB-d gyökérkönyvtárától viszonyított elérési út, pl. <samp>images/icons</samp>.',
	'MOD_REWRITE_ENABLE'		=> 'URL átírás engedélyezése',
	'MOD_REWRITE_ENABLE_EXPLAIN' => 'Ha engedélyezve van, akkor az ’app.php’-t tartalmazó URL-ekből a fájlnév eltávolításra kerül (pl. app.php/valami-ből /valami lesz). <strong>A funkció használatához az Apache webszerver mod_rewrite modulja szükséges. Ha ennek megléte nélkül engedélyezed, a fórumod URL-jei hibásak lehetnek.</strong>',
	'MOD_REWRITE_DISABLED'		=> 'A <strong>mod_rewrite</strong> Apache webszerver modul le van tiltva. Engedélyezd a modult vagy lépj kapcsolatba a tárhelyszolgáltatóddal, ha használni szeretnéd ezt a funkciót.',
	'MOD_REWRITE_INFORMATION_UNAVAILABLE' => 'Nem sikerült megállapítani, hogy a szerver támogatja-e az URL átírást. Engedélyezheted ezt a beállítást, azonban ha az URL átírás a szerveren nem elérhető, a fórum által generált linkek hibásak lesznek. Lépj kapcsolatba a tárhelyszolgáltatóddal, ha nem vagy biztos abban, hogy ezt a funkciót biztonsággal engedélyezheted-e.',
	'PATH_SETTINGS'				=> 'Elérési utak',
	'RANKS_PATH'				=> 'Rang képek elérési útja',
	'RANKS_PATH_EXPLAIN'		=> 'A phpBB-d gyökérkönyvtárától viszonyított elérési út, pl. <samp>images/ranks</samp>.',
	'SCRIPT_PATH'				=> 'Szkript elérési út',
	'SCRIPT_PATH_EXPLAIN'		=> 'A phpBB relatív elérési útvonala a domainnévhez képest, pl. <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'Domainnév',
	'SERVER_NAME_EXPLAIN'		=> 'A fórum domainneve, amin fut (például: <samp>valami.hu</samp>).',
	'SERVER_PORT'				=> 'Szerver port',
	'SERVER_PORT_EXPLAIN'		=> 'Milyen porton fut a szerver, általában 80-as, csak akkor változtasd meg, ha más.',
	'SERVER_PROTOCOL'			=> 'Szerver protokoll',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Ez kerül használatra szerver protokollként, ha ezek a beállítások használva vannak. Ha a mező üres, vagy a beállítások nincsenek használva, a protokoll a „biztonságos süti” beállítás alapján kerül megállapításra (<samp>http://</samp> vagy <samp>https://</samp>).', //?
	'SERVER_URL_SETTINGS'		=> 'Szerver URL beállítások',
	'SMILIES_PATH'				=> 'Emotikonok elérési útja',
	'SMILIES_PATH_EXPLAIN'		=> 'A phpBB-d gyökérkönyvtárától viszonyított elérési út, pl. <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'			=> 'Kiterjesztéscsoport ikonok elérési útja',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'A phpBB-d gyökérkönyvtárától viszonyított elérési út, pl. <samp>images/upload_icons</samp>.',
	'USE_SYSTEM_CRON'		=> 'Ismétlődő feladtok futtatása a rendszer cron-ból',
	'USE_SYSTEM_CRON_EXPLAIN'		=> 'Ha ki van kapcsolva, a phpBB gondoskodik az ismétlődő feladatok rendszeres futtatásáról. Ha be van kapcsolva, a phpBB nem fog egy feladatot sem ütemezetten futtatni. Ekkor egy rendszer adminisztrátornak kell a <code>bin/phpbbcli.php cron:run</code> utasítást a rendszer feladatütemező eszközében rendszeres futtatásra beállítania (pl. minden 5 percben).',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Itt a munkamenetekkel és a belépéssel kapcsolatos beállításokat tudsz megadni.',

	'ALL'							=> 'Teljes',
	'ALLOW_AUTOLOGIN'				=> 'Tartós bejelentkezés bejelentkezés engedélyezése',
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'A felhasználók használhatják-e az automatikus bejelentkezést.', //?megjelenjen-e a "Tartós bejelentkezés" opció a fórum meglátogatásakor.'
	'ALLOW_PASSWORD_RESET'			=> 'Jelszó helyreállítás engedélyezése ("Elfelejtett jelszó")',
	'ALLOW_PASSWORD_RESET_EXPLAIN'	=> 'A felhasználóknak megjelenjen-e az "Elfelejtett jelszó" hivatkozás. Külső felhasználó azonosítási rendszer használatakor érdemes lehet letiltanod ezt a funkciót.',
	'AUTOLOGIN_LENGTH'				=> '“Emlékezz rám” bejelentkezési kulcs lejárati hossza',
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Ennyi nap elteltével törlésre kerülnek a “Emlékezz rám” bejelentkezési kulcsok. A 0 kikapcsolja ezt.',
	'BROWSER_VALID'					=> 'Böngésző ellenőrzése', //?
	'BROWSER_VALID_EXPLAIN'			=> 'A böngésző típusa ellenőrzésre kerül, ezáltal javítva a munkamenet biztonságát.',
	'CHECK_DNSBL'					=> 'IP összevetése a DNSBL feketelistával',
	'CHECK_DNSBL_EXPLAIN'			=> 'Ha be van kapcsolva, akkor a regisztrációkor vagy hozzászóláskor a felhasználó IP-címe összevetésre kerül a következő DNSBL-szolgáltatások adatbázisával: <a href="http://spamcop.net">spamcop.net</a>, <a href="http://dsbl.org">dsbl.org</a> és <a href="http://www.spamhaus.org">www.spamhaus.org</a>. Ez a művelet a szervertől függően eltarthat egy ideig. Ha lassulások tapasztalhatók, vagy ha sok a téves tiltás, ajánlott ezt az ellenőrzést kikapcsolni.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Érvényes e-mail domain MX rekord létezésének ellenőrzése ', //? "Check e-mail domain for valid MX record" 'Érvényes MX bejegyzés létezésének ellenőrzése az e-mail domainhez'
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Ha be van kapcsolva, akkor a regisztrációkor vagy a profil megváltoztatásakor megadott e-mail cím domainje ellenőrzésre kerül, hogy van-e hozzá érvényes MX rekord.',
	'FORCE_PASS_CHANGE'				=> 'Kötelező jelszómegváltoztatás gyakorisága', //?
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Megköveteli a felhasználótól, hogy bizonyos időközönként megváltoztassa a jelszavát. A 0 érték megadása kikapcsolja ezt.',
	'FORM_TIME_MAX'					=> 'Maximum idő űrlap elküldéséhez', //? 'Űrlap elküldéséhez rendelkezésre álló maximum idő'
	'FORM_TIME_MAX_EXPLAIN'			=> 'Ennyi időn belül a felhasználónak el kell küldenie az űrlapokat. A kikapcsoláshoz adj meg -1-et. Vedd figyelembe, hogy ettől a beállítástól függetlenül az űrlap a munkamenet lejártával is érvénytelenné válhat.',
	'FORM_SID_GUESTS'				=> 'Űrlapok hozzákötése vendég munkamenetekhez',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'Ha be van kapcsolva, minden vendég munkamenethez külön űrlapazonosító lesz generálva. Ez néhány internetszolgáltatónál gondot okozhat.', //? token
	'FORWARDED_FOR_VALID'			=> '<var>X_FORWARDED_FOR</var> fejléc ellenőrzése',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'A munkamenetek csak akkor kerülnek folytatásra, ha a küldött <var>X_FORWARDED_FOR</var> fejléc megegyezik az előző kérés alkalmával küldöttel. Emellett az <var>X_FORWARDED_FOR</var> is összevetésre kerül a kitiltott IP-címekkel.',
	'IP_VALID'						=> 'Munkamenet IP ellenőrzés',
	'IP_VALID_EXPLAIN'				=> 'A felhasználó IP-címének mekkora része lesz használva a munkamenet érvényesítéséhez; a <samp>Teljes</samp> az egész címet összeveti, az <samp>A.B.C</samp> az első x.x.x részt, az <samp>A.B</samp> az első x.x részt, a <samp>Nincs</samp> pedig teljesen kikapcsolja az ellenőrzést. IPv6 címeknél az <samp>A.B.C</samp> az első 4 blokkot, az <samp>A.B</samp> pedig az első 3 blokkot veti össze.',
	'IP_LOGIN_LIMIT_MAX'			=> 'Egy IP-címről engedélyezett belépési kísérletek száma',
	'IP_LOGIN_LIMIT_MAX_EXPLAIN'	=> 'Ennyi IP-címenkénti sikertelen belépési kísérlet után a felhasználónak meg kell oldania az anti-robot bővítmény által megszabott feladatot. A 0 érték kikapcsolja az anti-robot feladat megjelenítését.',
	'IP_LOGIN_LIMIT_TIME'			=> 'IP-címenkénti belépési kísérletek lejárati ideje',
	'IP_LOGIN_LIMIT_TIME_EXPLAIN'	=> 'A belépési kísérletek ennyi idő elteltével évülnek el, másodpercben.',
	'IP_LOGIN_LIMIT_USE_FORWARDED'	=> 'Belépési kísérletek limitálása a <var>X_FORWARDED_FOR</var> fejléc alapján',
	'IP_LOGIN_LIMIT_USE_FORWARDED_EXPLAIN'	=> 'A belépési kísérletek IP-cím szerinti korlátozása helyett a fórum az <var>X_FORWARDED_FOR</var> HTTP fejléc értékét használja. <br /><em><strong>Figyelem:</strong> Ezt a funkciót csak akkor kapcsold be, ha a fórumot egy olyan proxy szerveren keresztül lehet elérni, amely megbízhatóan állítja be ezt az értéket.</em>',
	'MAX_LOGIN_ATTEMPTS'			=> 'Belépési kísérletek felhasználónevenkénti maximális száma',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Ennyi felhasználónevenkénti sikertelen belépési kísérlet után a felhasználónak meg kell oldania az anti-robot bővítmény által megszabott feladatot. A 0 érték kikapcsolja az anti-robot feladat megjelenítését.',
	'NO_IP_VALIDATION'				=> 'Nincs',
	'NO_REF_VALIDATION'				=> 'Nincs',
	'PASSWORD_TYPE'					=> 'Jelszóbonyolultság',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Milyen bonyolultnak kell lennie egy jelszónak. A lejjebbi beállítási lehetőségek tartalmazzák az előzőket.',
	'PASS_TYPE_ALPHA'				=> 'Tartalmaznia kell betűket és számokat',
	'PASS_TYPE_ANY'					=> 'Nincs követelmény',
	'PASS_TYPE_CASE'				=> 'Tartalmaznia kell kis- és nagybetűket',
	'PASS_TYPE_SYMBOL'				=> 'Tartalmaznia kell szimbólumokat',
	'REF_HOST'						=> 'Csak hoszt ellenőrzése',
	'REF_PATH'						=> 'Elérési út ellenőrzése is',
	'REFERRER_VALID'				=> 'Hivatkozó oldal (referer) ellenőrzése',
	'REFERRER_VALID_EXPLAIN'		=> 'Ha be van kapcsolva, a POST kérések hivatkozó oldalainak címe (referer) összevetésre kerül a hoszt/szkript elérési út beállításokkal. Ez gondot okozhat egyszerre több domaint vagy külső bejelentkező oldalt használó fórumoknál.',
	'TPL_ALLOW_PHP'					=> 'Php engedélyezése sablonokban',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Ha be van kapcsolva a beállítás, akkor a sablonokban a <code>PHP</code> és az <code>INCLUDEPHP</code> címkék is értelmezésre kerülnek.',
	'UPLOAD_CERT_VALID'             => 'Külső feltöltés tanúsítványának ellenőrzése',
	'UPLOAD_CERT_VALID_EXPLAIN'		=> 'Ha be van kapcsolva, akkor a külső feltöltések tanúsítványa ellenőrizve lesz. Ehhez szükséges, hogy a CA bundle meg legyen adva a php.ini <samp>openssl.cafile</samp> vagy <samp>curl.cainfo</samp> beállításában.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Az alábbi információkat használja a fórum e-mailek küldésekor. Kérünk, győződj meg róla, hogy az e-mail cím, amit megadsz, helyes, mivel minden nem kézbesíthető levél erre a címre fog menni. Ha a tárhelyszolgáltatód nem biztosítja a natív (PHP alapú) e-mail küldést, használhatsz helyette SMTP-t. Ehhez szükség van egy megfelelő szerver címére (ha szükséges, kérdezd meg a szolgáltatód). Ha (és csak ha) a szerver megköveteli az azonosítást, add meg a szükséges felhasználónevet, jelszót és azonosítási módot.',

	'ADMIN_EMAIL'					=> 'Feladó e-mail cím',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Ez a technikai kapcsolat cím. Mindig ez a cím kerül megadásra a levelek <samp>Sender</samp> (küldő) fejlécének.',
	'BOARD_EMAIL_FORM'				=> 'Felhasználói levélküldés a fórumon keresztül',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'Ahelyett, hogy a felhasználók e-mail címe megjelenítésre kerülne, a felhasználók a fórumon keresztül küldhetnek egymásnak e-mailt.',
	'BOARD_HIDE_EMAILS'				=> 'E-mail címek elrejtése',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Ez a funkció gondoskodik róla, hogy az e-mail címek teljesen privátak maradjanak.',
	'CONTACT_EMAIL'					=> 'Kapcsolat e-mail cím',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Ez az e-mail cím kerül megadásra, ha szükség van bármilyen kapcsolatbalépési lehetőségre, pl. spam, hibaüzenet stb. Mindig ez a cím kerül megadásra a levelek <samp>From</samp> (feladó) és <samp>Reply-To</samp> (válaszcím) fejlécének.',
	'CONTACT_EMAIL_NAME'			=> 'Kapcsolat név',
	'CONTACT_EMAIL_NAME_EXPLAIN'	=> 'Ez az a kapcsolati név, amit az e-mailek címzettjei látni fognak. Ha nem szeretnél nevet megadni, hagyd üresen.',
	'EMAIL_FORCE_SENDER'			=> 'Feladó e-mail cím használata', // ? force email sender
	'EMAIL_FORCE_SENDER_EXPLAIN'	=> 'Beállítja a <samp>Return-Path</samp> (visszaküldési útvonal) értékének a feladó e-mail címet a szerver helyi felhasználója és hosztneve helyett. Ez a beállítás nincs figyelembe véve SMTP használatakor.<br /><em><strong>Figyelmeztetés:</strong> A beállítás használatához szükséges, hogy a felhasználó, akinek a nevében a webszerver fut a megbízható felhasználók között szerepeljen a sendmail parancs beállításaiban.</em>', // ? This will set the <samp>Return-Path</samp> to the from email address instead of using the local user and hostname of the server. This setting does not apply when using SMTP.<br><em><strong>Warning:</strong> Requires the user that the webserver runs as to be added as trusted user to the sendmail configuration.</em>
	'EMAIL_PACKAGE_SIZE'			=> 'E-mail csomag mérete',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Legfeljebb ennyi e-mail kerül kiküldésre egy csomagban. Ez a beállítás a belső várakozási sorra vonatkozik. Ha problémák lépnének föl nem megérkező értesítő e-mailekkel kapcsolatban, állítsd ezt az értéket 0-ra.',
	'EMAIL_MAX_CHUNK_SIZE'			=> 'Címzettek maximális száma',
	'EMAIL_MAX_CHUNK_SIZE_EXPLAIN'	=> 'Ha szükséges, állítsd be arra az értékre, amit a levelező szerver az egy e-mailben lévő címzettek maximális számának megenged.', //? If necessary, set this to not exceed the maximum number of recipients that your email server will allow in one email message.
	'EMAIL_SIG'						=> 'E-mail aláírás',
	'EMAIL_SIG_EXPLAIN'				=> 'Ez a szöveg hozzáfűzésre kerül az összes fórum által küldött e-mailhez.',
	'ENABLE_EMAIL'					=> 'Fórum e-mail küldés bekapcsolása',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Ha ki van kapcsolva, a fórum egyáltalán nem fog e-mailt küldeni. <em>Kérjük, vedd figyelembe, hogy ebben az esetben a „felhasználói”, ill. „adminisztrátori” azonosító aktiválási mód nem működik. Ha jelenleg ezen aktivális módok egyikét használod, és nemre állítod ezt a beállítást, az letiltja a regisztrálás lehetőségét.</em>',
	'SEND_TEST_EMAIL'				=> 'Teszt e-mail küldése',
	'SEND_TEST_EMAIL_EXPLAIN'		=> 'Egy teszt e-mailt küldhetsz a felhasználói fiókodban megadott e-mail címre.',
	'SMTP_ALLOW_SELF_SIGNED'		=> 'Önaláírt SSL tanúsítványok engedélyezése',
	'SMTP_ALLOW_SELF_SIGNED_EXPLAIN'=> 'Csatlakozás engedélyezése önaláírt (self-signed) tanúsítvánnyal rendelkező SMTP szerverekhez. <br /><em><strong>Figyelmeztetés:</strong> Az önaláírt tanúsítványok használatának engedélyezése biztonsági következményekkel járhat.</em>',
	'SMTP_AUTH_METHOD'				=> 'SMTP azonosítási mód',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Csak akkor van használva, ha egy felhasználónév/jelszó páros meg van adva. Ha nem vagy biztos benne, melyik módot használd, kérdezd meg a szolgáltatódat.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'SMTP jelszó',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Csak akkor adj meg jelszót, ha a használt SMTP szerver megköveteli.<br /><em><strong>Figyelmeztetés:</strong> Ez a jelszó az adatbázisban sima szövegként kerül tárolásra, így bárki által hozzáférhető, aki hozzáfér az adatbázishoz vagy látja ezt a beállítás oldalt.</em>',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'SMTP szerver port',
	'SMTP_PORT_EXPLAIN'				=> 'Csak akkor változtasd meg, ha tudod, hogy az SMTP szerver más porton van.',
	'SMTP_SERVER'					=> 'SMTP szerver cím',
	'SMTP_SERVER_EXPLAIN'			=> 'Ne add meg a protokollt (<samp>ssl://</samp> vagy <samp>tls://</samp>), kivéve, ha a tárhelyszolgáltatód miatt szükséges.',
	'SMTP_SETTINGS'					=> 'SMTP beállítások',
	'SMTP_USERNAME'					=> 'SMTP felhasználónév',
	'SMTP_USERNAME_EXPLAIN'			=> 'Csak akkor adj meg felhasználónevet, ha a használt SMTP szerver megköveteli.',
	'SMTP_VERIFY_PEER'				=> 'SSL tanúsítvány ellenőrzése',
	'SMTP_VERIFY_PEER_EXPLAIN'		=> 'Az SMTP szerver által használt tanúsítvány ellenőrzésének megkövetelése. <br /><em><strong>Figyelmeztetés:</strong> Az ellenőrizetlen SSL tanúsítvánnyal rendelkező szerverekhez való kapcsolódás biztonsági következményekkel járhat.</em>',
	'SMTP_VERIFY_PEER_NAME'			=> 'SMTP szervernév ellenőrzése',
	'SMTP_VERIFY_PEER_NAME_EXPLAIN'	=> 'Az SMTP szerver által használt gépnév ellenőrzésének megkövetelése SSL / TLS kapcsolatok használatakor.<br /><em><strong>Figyelmeztetés:</strong> Az ellenőrizetlen SSL tanúsítvánnyal rendelkező szerverekhez való kapcsolódás biztonsági következményekkel járhat.</em>',
	'TEST_EMAIL_SENT'				=> 'A teszt e-mail kiküldésre került.<br />Ha nem érkezik meg, kérjük, ellenőrizd az e-mail küldési beállításokat.<br /><br />Ha segítségre van szükséged, kérjük, látogasd meg a <a href="https://www.phpbb.com/community/">phpBB angol nyelvű támogatási fórumát</a>.',
	'USE_SMTP'						=> 'SMTP használata e-mail küldésére',
	'USE_SMTP_EXPLAIN'				=> 'Állítsd igenre, ha a helyi mail függvény helyett egy meghatározott szerveren keresztül szeretnéd az e-maileket kiküldeni.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Itt bekapcsolhatod, illetve szabályozhatod a Jabber használatát azonnali üzenetküldésre és az értesítésekhez. A Jabber egy nyílt protokoll, így bárki által elérhető. Néhány Jabber szerver lehetővé teszi, hogy más hálózaton lévő felhasználókat is elérj. Nem minden szerver teremt lehetőséget erre, és a protokollban történő változások is megakadályozhatják ezt. Kérünk, győződj meg róla, hogy egy már létező azonosító adatait adod meg, mivel a phpBB további ellenőrzés nélkül fogja használni ezeket.',

	'JAB_ALLOW_SELF_SIGNED'			=> 'Önaláírt SSL tanúsítványok engedélyezése',
	'JAB_ALLOW_SELF_SIGNED_EXPLAIN'	=> 'Önaláírt (self-signed) tanúsítvánnyal rendelkező Jabber szerverhez való kapcsolódás engedélyezése. <br /><em><strong>Figyelmeztetés:</strong> Az önaláírt tanúsítványok használatának engedélyezése biztonsági következményekkel járhat.</em>',
	'JAB_ENABLE'				=> 'Jabber bekapcsolása',
	'JAB_ENABLE_EXPLAIN'		=> 'A Jabber üzenet- és értesítőküldés bekapcsolása.',
	'JAB_GTALK_NOTE'			=> 'Kérjük, vedd figyelembe, hogy a GTalk nem fog működni, mivel a <samp>dns_get_record</samp> függvény nem található. Ez a függvény PHP4-ben nem elérhető, illetve nincs implementálva Windows rendszereken. Jelenleg BSD alapú rendszereken sem működik, beleértve a Mac OS-t is.',
	'JAB_PACKAGE_SIZE'			=> 'Jabber csomag méret',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Egy csomagban ennyi üzenet kerül kiküldésre. 0-ra állítva az üzenetek azonnal kiküldésre kerülnek, és nem lesznek berakva egy sorba későbbi elküldéshez.',
	'JAB_PASSWORD'				=> 'Jabber jelszó',
	'JAB_PASSWORD_EXPLAIN'		=> '<br /><em><strong>Figyelmeztetés:</strong> Ez a jelszó az adatbázisban sima szövegként kerül tárolásra, így bárki által hozzáférhető, aki hozzáfér az adatbázishoz vagy látja ezt a beállítás oldalt.</em>',
	'JAB_PORT'					=> 'Jabber port',
	'JAB_PORT_EXPLAIN'			=> 'Hagyd üresen, hacsak nem tudod, hogy a port nem 5222.',
	'JAB_SERVER'				=> 'Jabber szerver',
	'JAB_SERVER_EXPLAIN'		=> 'A szerverek listájához lásd a %sjabber.org%s-ot.',
	'JAB_SETTINGS_CHANGED'		=> 'A Jabber beállítások sikeresen megváltoztatásra kerültek.',
	'JAB_USE_SSL'				=> 'SSL használata a kapcsolódáshoz',
	'JAB_USE_SSL_EXPLAIN'		=> 'Ha be van kapcsolva, egy biztonságos kapcsolat kerül kiépítésre. A Jabber portja 5223-ra lesz módosítva, ha az 5222-es port volt megadva.',
	'JAB_USERNAME'				=> 'Jabber felhasználónév vagy JID',
	'JAB_USERNAME_EXPLAIN'		=> 'Adj meg egy regisztrált felhasználónevet vagy egy valós JID-t. A felhasználónév létezése nem kerül ellenőrzésre. Ha csak egy felhasználónevet adsz meg, a JID a felhasználónév és a fent megadott szerver lesz. Ha nem ezt szeretnéd, adj meg egy helyes JID-t, pl. felhasznalo@jabber.org.',
	'JAB_VERIFY_PEER'				=> 'SSL tanúsítvány ellenőrzése',
	'JAB_VERIFY_PEER_EXPLAIN'		=> 'A Jabber szerver által használt tanúsítvány ellenőrzésének megkövetelése. <br /><em><strong>Figyelmeztetés:</strong> Az ellenőrizetlen SSL tanúsítvánnyal rendelkező szerverekhez való kapcsolódás biztonsági következményekkel járhat.</em>',
	'JAB_VERIFY_PEER_NAME'			=> 'Jabber szervernév ellenőrzése',
	'JAB_VERIFY_PEER_NAME_EXPLAIN'	=> 'A Jabber szerver által használt gépnév ellenőrzésének megkövetelése SSL / TLS kapcsolatok használatakor.<br /><em><strong>Figyelmeztetés:</strong> Az ellenőrizetlen SSL tanúsítvánnyal rendelkező szerverekhez való kapcsolódás biztonsági következményekkel járhat.</em>',
));
