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
* Magyar fordítás (c) 2007-2022 „Magyar phpBB Közösség fordítók”,
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

// Common installer pages
$lang = array_merge($lang, array(
	'INSTALL_PANEL'	=> 'Telepítőrendszer',
	'SELECT_LANG'	=> 'Nyelv kiválasztása',

	'STAGE_INSTALL'	=> 'phpBB telepítése',

	// Introduction page
	'INTRODUCTION_TITLE'	=> 'Bevezető',
	'INTRODUCTION_BODY'		=> 'Üdvözlünk a phpBB3-ban!<br /><br />A phpBB® a legelterjedtebb nyílt forrású fórumrendszer a világon. A phpBB3 a 2000-ben kezdődött fejlesztés legfrissebb eleme, mely az elődeihez hasonlóan funkciógazdag, felhasználóbarát és teljes mértékben támogatott a phpBB Team által. A phpBB3 nagyot lép előre a phpBB2-t népszerűvé tevő területeken, számos általánosan kívánt funkciót tesz elérhetővé, melyek a korábbi verziókban nem voltak jelen. Reméljük, meghaladja várakozásaidat.<br /><br />Ez a telepítőrendszer végig fog vezetni a phpBB3 telepítésén, a phpBB3 legújabb verziójára való frissítésén, valamint más fórumrendszer phpBB3-ra való konvertálásán (beleértve a phpBB2-t). További információért, bátorítunk, hogy olvasd el az (angol nyelvű) <a href="../docs/INSTALL.html">telepítési útmutatót</a>.<br /><br />A phpBB3 licencének megtekintéséhez, a támogatás elérésének helyéhez, ill. a phpBB Team ehhez való hozzáállásának megismeréséhez, válaszd ki a megfelelő elemet az oldalsó menüből. A folytatáshoz, kérjük, válaszd ki fentebb a megfelelő fület.',

	// Support page
	'SUPPORT_TITLE'		=> 'Támogatás',
	'SUPPORT_BODY'		=> 'A phpBB3 aktuális stabil kiadásához teljes támogatás elérhető, térítésmentesen. Ez magában foglalja az alábbiakat:</p><ul><li>telepítés,</li><li>konfiguráció,</li><li>technikai kérdések,</li><li>a szoftverben lévő lehetséges hibákkal kapcsolatos problémák,</li><li>frissítés a Release Candidate (RC) verziókról a legfrissebb stabil verzióra,</li><li>konvertálás phpBB 2.0.x-ről phpBB3-ra,</li><li>konvertálás más fórumszoftverről phpBB3-ra (ezzel kapcsolatban lásd a <a href="https://www.phpbb.com/community/viewforum.php?f=486">Konvertálók fórumot</a>)</li></ul><p>A phpBB3 még béta verzióját futtató felhasználóinknak tanácsoljuk, hogy a jelenlegi fórumukat cseréljék le egy friss telepítésűre a legújabb verzióból.</p><h2>Kiterjesztések, megjelenések</h2><p>A kiterjesztésekkel kapcsolatos ügyekkel, kérünk, a megfelelő, <a href="https://www.phpbb.com/community/viewforum.php?f=451">Kiterjesztések fórumba</a> írj.<br />A megjelenésekkel kapcsolatban kérünk, szintén fordulj az ezeknek megfelelő, <a href="https://www.phpbb.com/community/viewforum.php?f=471">Megjelenések fórumba</a>.<br /><br />Ha a kérdésed egy bizonyos csomagra irányul, kérünk, közvetlenül a csomaggal foglalkozó témába küldd a hozzászólásod.</p><h2>Támogatás elérhetősége</h2><p><a href="https://www.phpbb.com/support/">Támogatás részleg</a><br /><a href="https://www.phpbb.com/support/docs/en/3.3/ug/quickstart/">Gyorstalpaló</a><br /><br />Hogy mindig azonnal értesülj a phpBB frissítéseiről, kövesd a phpBB-t <a href="https://www.twitter.com/phpbb/">Twitter</a>-en és <a href="https://www.facebook.com/phpbb/">Facebook</a>-on.</p><h2>Saját nyelvű támogatás</h2><p>A phpBB.com angol nyelvű támogatása mellett a <a href="https://www.phpbb.com/support/intl/">nemzetközi phpBB oldalak</a> is örömmel állnak rendelkezésre. Ez a magyar nyelv esetében a <a href="http://phpbb.hu/">Magyar phpBB Közösség</a> oldalát jelenti. Ezeken a webhelyeken főképp az alap phpBB-hez nyújtanak támogatást, kiterjesztésekhez, megjelenésekhez többnyire csak részlegesen, nem minden esetben lehet segítséget kapni. Amennyiben az adott oldalon nem foglalkoznak az adott bővítménnyel, keresd fel a phpBB.com megfelelő fórumtémáját.<br /><br />',

	// License
	'LICENSE_TITLE'		=> 'General Public License (GNU Általános Nyilvános Licenc)',

	// Install page
	'INSTALL_INTRO'			=> 'Üdvözlünk a telepítőben',
	'INSTALL_INTRO_BODY'	=> 'Ezen menüpont segítségével feltelepítheted a phpBB3-mat a szerveredre.</p><p>A folytatás során szükséged lesz az adatbázis adatokra. Ha nem ismered ezeket, lépj kapcsolatba a tárhelyszolgáltatóddal, és tájékozódj róluk. Ezen adatok nélkül nem tudsz továbblépni. A következőkre lesz szükséged:</p>
	<ul>
		<li>az adatbázis típusára – milyen adatbázisrendszert fogsz használni;</li>
		<li>az adatbáziskiszolgáló hosztnevére vagy DSN-jére – az adatbázisszerver címe, elérhetősége;</li>
		<li>az adatbáziskiszolgáló portjára – milyen porton lehet csatlakozni az adatbázisszerverhez (az esetek nagy többségében ez nem szükséges);</li>
		<li>az adatbázis nevére – az adatbázis neve a szerveren;</li>
		<li>az adatbázis-felhasználónévre és az ehhez tartozó jelszóra – a kapcsolódáshoz szükséges adatok.</li>
	</ul>

	<p><strong>Megjegyzés:</strong> ha SQLite-ot használsz, a DSN mezőben a teljes elérési utat add meg az adatbázishoz, valamint hagyd a felhasználónév és a jelszó mezőt üresen. Biztonsági szempontból fontos, hogy az adatbázis-állomány ne egy webről elérhető könyvtárban legyen tárolva.</p>

	<p>A phpBB3 a következő adatbázisrendszereket támogatja:</p>
	<ul>
		<li>MySQL 4.1.3 vagy újabb (MySQLi szükséges)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 vagy újabb (közvetlenül ODBC-n keresztül)</li>
		<li>MS SQL Server 2005 vagy újabb (natív)</li>
		<li>Oracle</li>
	</ul>

	<p>A választásnál csak a szerver által támogatott adatbázisok kerülnek majd megjelenítésre.',

	'ACP_LINK'	=> 'Tovább <a href="%1$s">az AVP-re</a>',

	'INSTALL_PHPBB_INSTALLED'		=> 'phpBB már telepítve van.',
	'INSTALL_PHPBB_NOT_INSTALLED'	=> 'phpBB még nincs telepítve.',
));

// Requirements translation
$lang = array_merge($lang, array(
	// Filesystem requirements
	'FILE_NOT_EXISTS'						=> 'Nem létező fájl',
	'FILE_NOT_EXISTS_EXPLAIN'				=> 'phpBB telepítéséhez a(z) %1$s fájlnak léteznie kell.',
	'FILE_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'Javasoljuk, hogy a(z) %1$s fájlt hozd létre a legjobb felhasználói élmény biztosítása érdekében.',
	'FILE_NOT_WRITABLE'						=> 'Nem írható fájl',
	'FILE_NOT_WRITABLE_EXPLAIN'				=> 'phpBB telepítéséhez a(z) %1$s fájlnak írhatónak kell lennie.',
	'FILE_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Javasoljuk, hogy a(z) %1$s fájlt tedd írhatóvá a legjobb felhasználói élmény biztosítása érdekében.',

	'DIRECTORY_NOT_EXISTS'						=> 'Nem létező könyvtár',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'				=> 'phpBB telepítéséhez a(z) %1$s könyvtárnak léteznie kell.',
	'DIRECTORY_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'Javasoljuk, hogy a(z) %1$s könyvtárat hozd létre a legjobb felhasználói élmény biztosítása érdekében.',
	'DIRECTORY_NOT_WRITABLE'					=> 'Nem írható könyvtár',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'			=> 'phpBB telepítéséhez a(z) %1$s könyvtárnak írhatónak kell lennie.',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Javasoljuk, hogy a(z) %1$s könyvtárat tedd írhatóvá a legjobb felhasználói élmény biztosítása érdekében.',

	// Server requirements
	'PHP_VERSION_REQD'					=> 'PHP verzió',
	'PHP_VERSION_REQD_EXPLAIN'			=> 'phpBB telepítéséhez 7.1.3 vagy nagyobb PHP verzió szükséges.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'getimagesize() PHP függvény',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> 'phpBB helyes működéséhez a getimagesize PHP függvény elérhetősége szükséges.',
	'PCRE_UTF_SUPPORT'					=> 'PCRE UTF-8 támogatás',
	'PCRE_UTF_SUPPORT_EXPLAIN'			=> 'phpBB nem fog működni, amennyiben a PHP telepítésedben nem érhető el a UTF-8 támogatás PCRE kiegészítőben.',
	'PHP_JSON_SUPPORT'					=> 'PHP JSON támogatás',
	'PHP_JSON_SUPPORT_EXPLAIN'			=> 'phpBB helyes működéséhez a PHP JSON kiegészítésnek telepítve kell lennie.',
	'PHP_MBSTRING_SUPPORT'				=> 'PHP mbstring támogatás',
	'PHP_MBSTRING_SUPPORT_EXPLAIN'		=> 'phpBB helyes működéséhez a PHP mbstring kiegészítésnek telepítve kell lennie.',
	'PHP_XML_SUPPORT'					=> 'PHP XML/DOM támogatás',
	'PHP_XML_SUPPORT_EXPLAIN'			=> 'phpBB helyes működéséhez a PHP XML/DOM kiegészítésnek telepítve kell lennie.',
	'PHP_SUPPORTED_DB'					=> 'Támogatott Adatbázisok',
	'PHP_SUPPORTED_DB_EXPLAIN'			=> 'Legalább egy támogatott adatbázis típusnak támogatottnak kell lennie a telepített PHP verzióban. Ha egyik adatbázis típus sem jelenik meg támogatottként, lépj kapcsolatba a tárhely szolgáltatóddal, vagy tanulmányozd a releváns PHP dokumentációt.',

	'RETEST_REQUIREMENTS'	=> 'Követelmények ellenőrzése mégegyszer',

	'STAGE_REQUIREMENTS'	=> 'Követelmények ellenőrzése',
));

// General error messages
$lang = array_merge($lang, array(
	'INST_ERR_MISSING_DATA'		=> 'A blokkban található összes mezőt ki kell töltened.',

	'TIMEOUT_DETECTED_TITLE'	=> 'A telepítő időtúllépéses hibát érzékelt',
	'TIMEOUT_DETECTED_MESSAGE'	=> 'A telepítő időtúllépéses hibát érzékelt. Megpróbálhatod újra tölteni ezt az oldalt, azonban ez korrumpálhatja az adatokat. Azt javasoljuk, hogy vagy növeld a futtatási idő beállításokat, vagy használd a parancssort.',
));

// Data obtaining translations
$lang = array_merge($lang, array(
	'STAGE_OBTAIN_DATA'	=> 'Telepítéshez szükséges adatok',

	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR'	=> 'Adminisztrátor adatok',

	// Form labels
	'ADMIN_CONFIG'				=> 'Adminisztrátor beállítások',
	'ADMIN_PASSWORD'			=> 'Adminisztrátor jelszó',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Adminisztrátor jelszó mégegyszer',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Az adminisztrátor jelszavának hosszának 6 és 30 karakter között kell lennie.',
	'ADMIN_USERNAME'			=> 'Adminisztrátor felhasználó neve',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Az adminisztrátor felhasználó nevének hosszának 3 és 20 karakter között kell lennie.',

	// Errors
	'INST_ERR_DB'					=> 'Adatbázis telepítési hiba', // ? Database installation error
	'INST_ERR_EMAIL_INVALID'		=> 'A megadott e-mail cím hibás.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'A megadott jelszavak nem azonosoak.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'A megadott jelszó túl hosszú. A jelszó legfeljebb 30 karakter hosszú lehet.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'A megadott jelszó túl rövid. A jelszónak legalább 6 karakter hosszúnak kell lennie.',
	'INST_ERR_USER_TOO_LONG'		=> 'A megadott felhasználói név túl hosszú. A felhasználói név legfeljebb 20 karakter hosszú lehet.',
	'INST_ERR_USER_TOO_SHORT'		=> 'A megadott felhasználói név túl rövid. A felhasználói névnek legalább 3 karakter hosszúnak kell lennie.',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'		=> 'Fórum beállítások',
	'DEFAULT_LANGUAGE'	=> 'Alapértelmezett nyelv',
	'BOARD_NAME'		=> 'A fórum címe',
	'BOARD_DESCRIPTION'	=> 'A fórum rövid leírása',

	//
	// Database data
	//
	'STAGE_DATABASE'	=> 'Adatbázis beállítások',

	// Form labels
	'DB_CONFIG'				=> 'Adatbázis beállítások',
	'DBMS'					=> 'Adatbázis típusa',
	'DB_HOST'				=> 'Adatbázisszerver hosztneve vagy DSN',
	'DB_HOST_EXPLAIN'		=> 'A DSN az angol Data Source Name rövidítése, csak ODBC telepítéskor érdekes. PostgreSQL esetében a lokális szerverhez való kapcsolódáskor TCP kapcsolat esetén használj localhost-ot, míg UNIX domain socket esetén 127.0.0.1-et. SQLite esetében az adatbázis fájl teljes elérési útját add meg.',
	'DB_PORT'				=> 'Adatbázis szerver port',
	'DB_PORT_EXPLAIN'		=> 'Hagyd üresen, kívéve ha az adatbázis szerver nem az alapértelmezett portot használja.',
	'DB_PASSWORD'			=> 'Adatbázis jelszó',
	'DB_NAME'				=> 'Adatbázis név',
	'DB_USERNAME'			=> 'Adatbázis felhasználó név',
	'DATABASE_VERSION'		=> 'Adatbázis verzió',
	'TABLE_PREFIX'			=> 'Adatbázis táblák előtagja',
	'TABLE_PREFIX_EXPLAIN'	=> 'Az adatbázis tábla előtagnak egy betűvel kell kezdődnie, és csak betűket, számokat és alulvonást tartalmazhat.',

	// Database options
	'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Szerver 2000+ ODBC-n keresztül',
	'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Szerver 2005+ [ natív ]',
	'DB_OPTION_MYSQLI'		=> 'MySQL MySQLi kiterjesztéssel',
	'DB_OPTION_ORACLE'		=> 'Oracle',
	'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
	'DB_OPTION_SQLITE3'		=> 'SQLite 3',

	// Errors
	'INST_ERR_NO_DB'				=> 'Nem sikerült a megadott adatbázis típushoz tartozó PHP kiegészítő betöltése.',
	'INST_ERR_DB_INVALID_PREFIX'	=> 'A megadott adatbázis tábla előtag helytelen. Az előtagnak egy betűvel kell kezdődnie, és csak betűket, számokat és alulvonásokat tartalmazhat.',
	'INST_ERR_PREFIX_TOO_LONG'		=> 'A megadott adatbázis tábla előtag túl hosszú, legfeljebb %d karakter hosszú lehet.',
	'INST_ERR_DB_NO_NAME'			=> 'Nem adtad meg az adatbázis nevét.',
	'INST_ERR_DB_FORUM_PATH'		=> 'A megadott adatbázis fájl a fórum fájlok között található. Biztonsági szempontok miatt javasoljuk, hogy tartsd az adatbázis fájlt egy olyan könyvtárban, ami nem elérhető az internetről.',
	'INST_ERR_DB_CONNECT'			=> 'Nem sikerült csatlakozni az adatbázishoz. A hiba üzenetet alább láthatod.',
	'INST_ERR_DB_NO_WRITABLE'		=> 'Az adatbázisnak és az azt tartalmazó könyvtárnak is írhatónak kell lennie.',
	'INST_ERR_DB_NO_ERROR'			=> 'A hibaüzenet nem elérhető.',
	'INST_ERR_PREFIX'				=> 'A megadott adatbázis előtagú táblák már léteznek, válassz egy másikat.',
	'INST_ERR_DB_NO_MYSQLI'			=> 'A telepített MySQL adatbázis verziója nem kompatibilis a választott “MySQL MySQLi kiterjesztéssel” opcióval. Kérünk, használd a “MySQL” opciót.',
	'INST_ERR_DB_NO_SQLITE3'		=> 'A telepített SQLite kiegészítő túl régi, frissíts legalább 3.6.15-re.',
	'INST_ERR_DB_NO_ORACLE'			=> 'A telepített Oracle verzió megköveteli, hogy <var>NLS_CHARACTERSET</var> beállítást <var>UTF8</var>-ra állítsd. Vagy frissítsd az adatbázis szervert 9.2+ verzióra, vagy alkalmazd az előbbi beállítást.',
	'INST_ERR_DB_NO_POSTGRES'		=> 'A megadott adatbázis nem <var>UNICODE</var> vagy <var>UTF8</var> karakterkódolással lett létrehozva. Válassz egy olyan adatbázist, ami <var>UNICODE</var> vagy <var>UTF8</var> karakterkódolást használ.',
	'INST_SCHEMA_FILE_NOT_WRITABLE'	=> 'Az adatbázis schema fájl nem írható.',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> 'E-mail beállítások',

	// Package info
	'PACKAGE_VERSION'					=> 'Telepített csomag verziója',
	'UPDATE_INCOMPLETE'				=> 'A phpBB telepítésed nem lett megfelelően frissítve.',
	'UPDATE_INCOMPLETE_MORE'		=> 'Kérjük, olvasd el a lent található információkat a hiba javításához.',
	'UPDATE_INCOMPLETE_EXPLAIN'		=> '<h1>Hiányos frissítés</h1>

		<p>Észleltük, hogy a phpBB legutóbbi frissítése nem fejeződött be. Nyisd meg az <a href="%1$s" title="%1$s">adatbázis frissítőt</a>, bizonyosodj meg róla, hogy <em>Az adatbázis frissítése</em> van kiválasztva és kattints az <strong>Elküld</strong> gombra. Ne felejtsd el törölni az "install" könyvtárat az adatbázis frissítésének befejezése után.</p>',

	//
	// Server data
	//
	// Form labels
	'UPGRADE_INSTRUCTIONS'			=> 'Egy új <strong>%1$s</strong> verzió érhető el. Kérjük, olvasd el az angol nyelvű <a href="%2$s" title="%2$s"><strong>kiadási közleményt</strong></a>, hogy megismerd az újdonságokat és a frissítés menetét.',
	'SERVER_CONFIG'				=> 'Szerver beállítások',
	'SCRIPT_PATH'				=> 'Elérési útvonal',
	'SCRIPT_PATH_EXPLAIN'		=> 'A phpBB domain névhez viszonyított relatív elérési útja, pl. <samp>/phpBB3</samp>.',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Köszönettel: A csapat',
	'CONFIG_SITE_DESC'				=> 'Rövid leírás a fórumodról.',
	'CONFIG_SITENAME'				=> 'domained.hu',

	'DEFAULT_INSTALL_POST'			=> '<t>Ez egy példa hozzászólás a frissen telepített phpBB3-madban. Úgy néz ki, minden működik. Ha gondolod, törölheted ezt a hozzászólást, és folytathatod a fórumod felállítását. A telepítés alatt az első kategóriádhoz és az első fórumodhoz hozzárendelésre került egy jól használható jogosultságkészlet az előre meghatározott csoportok számára (adminisztrátorok, robotok, globális moderátorok, vendégek, regisztrált felhasználók és regisztrált COPPA felhasználók). Ha úgy döntesz, törlöd az első kategóriád és az első fórumod, az új fórumok, ill. kategóriák felvételénél ne felejts el jogosultságokat hozzárendelni a fentebb említett csoportoknak. Ajánlott ezt a kezdeti kategóriát és fórumot átnevezni, majd később az új kategóriák, fórumok létrehozásánál a jogosultságokat ezekről másolni át. Sok sikert a fórumodhoz!</t>',

	'FORUMS_FIRST_CATEGORY'			=> 'Az első kategóriád',
	'FORUMS_TEST_FORUM_DESC'		=> 'Az első fórumod leírása.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Az első fórumod',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Adminisztátor',
	'REPORT_WAREZ'					=> 'A hozzászólás linket tartalmaz illegális vagy kalóz szoftverre.',
	'REPORT_SPAM'					=> 'A hozzászólás egyetlen célja egy weboldal vagy egy termék reklámozása.',
	'REPORT_OFF_TOPIC'				=> 'A hozzászólás nem kapcsolódik a témához.',
	'REPORT_OTHER'					=> 'A hozzászólás nem tartozik semelyik másik kategóriába, kérjük, töltsd ki a további információ mezőt.',

	'SMILIES_ARROW'					=> 'nyíl',
	'SMILIES_CONFUSED'				=> 'összezavarodott',
	'SMILIES_COOL'					=> 'laza',
	'SMILIES_CRYING'				=> 'sír vagy nagyon szomorú',
	'SMILIES_EMARRASSED'			=> 'zavarban',
	'SMILIES_EVIL'					=> 'gonosz vagy nagyon mérges',
	'SMILIES_EXCLAMATION'			=> 'felkiáltás',
	'SMILIES_GEEK'					=> 'kocka',
	'SMILIES_IDEA'					=> 'ötlet',
	'SMILIES_LAUGHING'				=> 'nevető',
	'SMILIES_MAD'					=> 'dühös',
	'SMILIES_MR_GREEN'				=> 'Zöld úr',
	'SMILIES_NEUTRAL'				=> 'semleges',
	'SMILIES_QUESTION'				=> 'kérdés',
	'SMILIES_RAZZ'					=> 'vicces',
	'SMILIES_ROLLING_EYES'			=> 'forgó szemek',
	'SMILIES_SAD'					=> 'szomorú',
	'SMILIES_SHOCKED'				=> 'sokkolt',
	'SMILIES_SMILE'					=> 'mosoly',
	'SMILIES_SURPRISED'				=> 'meglepett',
	'SMILIES_TWISTED_EVIL'			=> 'nagyon őrült',
	'SMILIES_UBER_GEEK'				=> 'nagyon kocka',
	'SMILIES_VERY_HAPPY'			=> 'nagyon boldog',
	'SMILIES_WINK'					=> 'kacsint',

	'TOPICS_TOPIC_TITLE'			=> 'Üdvözlünk a phpBB3-ban!',
));

// Common navigation items' translation
$lang = array_merge($lang, array(
	'MENU_OVERVIEW'		=> 'Áttekintés',
	'MENU_INTRO'		=> 'Bevezető',
	'MENU_LICENSE'		=> 'Licenc',
	'MENU_SUPPORT'		=> 'Támogatás',
));

// Task names
$lang = array_merge($lang, array(
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'	=> 'Konfigurációs fájl készítése',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'			=> 'Beállítások hozzáadása',
	'TASK_ADD_DEFAULT_DATA'				=> 'Beállítások adatbázisba írása',
	'TASK_CREATE_DATABASE_SCHEMA_FILE'	=> 'Adatbázis schema készítése',
	'TASK_SETUP_DATABASE'				=> 'Adatbázis előkészítése',
	'TASK_CREATE_TABLES'				=> 'Adatbázis táblák készítése',

	// Install data
	'TASK_ADD_BOTS'			=> 'Robotok regisztrálása',
	'TASK_ADD_LANGUAGES'	=> 'Elérhető nyelvek telepítése',
	'TASK_ADD_MODULES'		=> 'Modulok telepítése',
	'TASK_CREATE_SEARCH_INDEX'	=> 'Kereső index létrehozása',

	// Install finish tasks
	'TASK_INSTALL_EXTENSIONS'	=> 'Becsomagolt kiterjesztések telepítése', //? "Installing packaged extensions"
	'TASK_NOTIFY_USER'			=> 'Értesítő e-mail kiküldése',
	'TASK_POPULATE_MIGRATIONS'	=> 'Adatbázis migrációk regisztrálása',

	// Installer general progress messages
	'INSTALLER_FINISHED'	=> 'A telepítés sikeresen befejeződött',
));

// Installer's general messages
$lang = array_merge($lang, array(
	'MODULE_NOT_FOUND'				=> 'Modul nem található',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> 'A modul nem található, mert a %s nevű folyamat nem létezik.',

	'TASK_NOT_FOUND'				=> 'Feladat nem található',
	'TASK_NOT_FOUND_DESCRIPTION'	=> 'A feladat nem található, mert a %s nevű folyamat nem létezik.',

	'SKIP_MODULE'	=> '“%s” modul kihagyása',
	'SKIP_TASK'		=> '“%s” feladat kihagyása',

	'TASK_SERVICE_INSTALLER_MISSING'	=> 'Minden telepítő folyamat nevének “installer”-el kell kezdődnie',
	'TASK_CLASS_NOT_FOUND'				=> 'A telepítő feladat folyamatának neve hibás. Jelenleg a folyamat neve “%1$s”, míg az elvárt névtér (namespace) “%2$s” lenne. A hibáról több információt a task_interface dokumentációjában találhatsz.',

	'INSTALLER_CONFIG_NOT_WRITABLE'	=> 'A telepítő konfigurációs fájlja nem írható.',
));

// CLI messages
$lang = array_merge($lang, array(
	'CLI_INSTALL_BOARD'				=> 'phpBB telepítése',
	'CLI_UPDATE_BOARD'				=> 'phpBB frissítése',
	'CLI_INSTALL_SHOW_CONFIG'		=> 'A telepítő által használt konfigurációs fájl mutatása',
	'CLI_INSTALL_VALIDATE_CONFIG'	=> 'A konfigurációs fájl ellenőrzése',
	'CLI_CONFIG_FILE'				=> 'A használni kívánt konfigurációs fájl',
	'MISSING_FILE'					=> 'A(z) %1$s fájl nem található',
	'MISSING_DATA'					=> 'A telepítési konfigurációs fájlból valamely beállítás hiányzik, vagy nem definiált opciót tartalmaz.',
	'INVALID_YAML_FILE'				=> 'A YAML fájl (%1$s) helytelen formátumú',
	'CONFIGURATION_VALID'			=> 'A konfigurációs fájlban nincsenek hibák',
));

// Common updater messages
$lang = array_merge($lang, array(
	'UPDATE_INSTALLATION'			=> 'phpBB frissítése',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Itt frissítheted a phpBB-d a legújabb verzióra.<br />A frissítés folyamata során minden állomány ellenőrzésre kerül. A tényleges frissítés előtt minden különbséget átnézhetsz.<br /><br />Maga az állományok frissítése két módon végezhető el.</p><h2>Kézi frissítés</h2><p>Ezen frissítési mód használatakor csak a saját megváltozott állományaidat töltöd le, így meggyőződhetsz róla, hogy nem vesztesz el semmilyen módosítást, amit csinálhattál. Miután letöltötted ezt a csomagot, a benne lévő állományokat fel kell töltened a phpBB-d gyökérkönyvtárába, a megfelelő helyükre. Ezután mégegyszer összevetheted az állományokat, hogy leellenőrizd, a megfelelő helyre töltötted fel őket.</p><h2>Haladó frissítés FTP-vel</h2><p>Ez a frissítési mód hasonló az előbbihez, azonban ennél nem kell saját magadnak letöltened, majd feltöltened a megváltozott állományokat – ezt megteszi a phpBB. Ezen mód használatához ismerned kell az FTP-belépéshez szükséges dolgokat, mivel egy űrlapon meg kell adnod ezeket. Miután ezt befejezted, át leszel irányítva az állományok összevetéséhez, hogy meggyőződhess, minden sikeresen frissítésre került.<br /><br />', //? Advanced Update with FTP
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Verziómegjelenési közlemény</h1>

		<p>A frissítés folytatása előtt, kérjük, olvasd el a legfrissebb verziót bejelentő közleményt, mivel hasznos információkat tartalmazhat. Mindenképp szerepel benne a változások listája és közvetlen link az új verzió letöltésére.</p>

		<br />
		
		<h1>Frissítés módja a telepítő csomag használatával</h1>

		<p>A javasolt frissítési mód a teljes telepítő csomag használata. Azonban, ha a phpBB alap fájljai is módosításra kerültek, úgy a módosítások megtartása érdekében a phpBB üzemeltetésében jártas felhasználóknak a haladó frissítő csomag használata is javasolt. A telepített phpBB az INSTALL.html-ben felsorolt egyéb módszerekkel is frissíthető. A phpBB3 telepítő csomaggal történő frissítése a következő lépésekből áll:</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li><strong class="error">Készíts biztonsági mentést a fórum fájljairól és adatbázisáról.</strong></li>
			<li>Menj a <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com letöltések oldalára</a>, és töltsd le a legújabb "Full Package" csomagot.</li>
			<li>Csomagold ki a telepítő csomagot.</li>
			<li>Távolítsd el (töröld) a <code class="inline">config.php</code> fájlt, és az <code class="inline">/images</code>, <code class="inline">/store</code> és <code class="inline">/files</code> könyvtárakat <em>a kicsomagolt telepítőből</em> (ne az oldaladról).</li>
			<li>Menj az Adminisztrátori vezérlőpult, Fórum beállítások pontjába és ellenőrizd, hogy a prosilver az alapértelmezett megjelenés. Ha más lenne, állítsd át prosilver megjelenésre.</li>
			<li>Töröld a <code class="inline">/vendor</code> és <code class="inline">/cache</code> könyvtárakat a szerveren a fórum gyökérkönyvtárából.</li>
			<li>FTP-n vagy SSH-n keresztül töltsd fel a telepítő csomag megmaradt fájljait és könyvtárait (a phpBB3 könyvtár tartalmát) a szerveren a fórum gyökérkönyvtárába. (Megjegyzés: Figyelj rá, hogy ne töröld a fórumon használt kiterjesztéseket az <code class="inline">/ext</code> könyvtár feltöltésekor.)</li>
			<li><strong><a href="%1$s" title="%1$s">Indítsd el a frissítési folyamatot az install könyvtár böngészőből való megnyitásával</a>.</strong></li>
			<li>Válaszd ki a használandó nyelvet a jobb felső sarokban.</li>
			<li>Kövesd a Frissítés fül lépéseit az adatbázis frissítésére.</li>
			<li>FTP-n vagy SSH-n keresztül töröld az <code class="inline">/install</code> könyvtárat a fórumod gyökérkönyvtárából.<br /><br /></li>
		</ol>
		
		<p>Ezzel lett egy új, naprakész fórumod, ami tartalmazza az összes felhasználót és hozzászólást. További feladatok:</p>
		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Használatban lévő nyelvi csomagok frissítése</li>
			<li>Használatban lévő megjelenések frissítése<br /><br /></li>
		</ul>

		<h1>Frissítés módja a haladó frissítő csomag használatával</h1>

		<p>Az itt részletezett javasolt frissítési mód a haladó frissítő csomag használatát feltételezi. Ez csak abban az esetben javasolt, ha a phpBB alap fájljai is szerkesztésre kerültek. A phpBB-det az INSTALL.html-ben leírt módokon is frissítheted. A phpBB3 automatikusan történő frissítése a következő lépésekből áll:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Menj a <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com letöltések oldalára</a>, és töltsd le a megfelelő haladó frissítő csomagot.<br /><br /></li>
			<li>Csomagold ki a csomagot.<br /><br /></li>
			<li>A kicsomagolt csomag install és vendor könyvtárait töltsd fel a phpBB-d gyökérkönyvtárába (ahol a config.php található).<br /><br /></li>
		</ul>

		<p>Miután feltöltötted, a normál felhasználók nem tudják majd elérni a fórumot az install könyvtár létezése miatt.<br /><br />
		<strong><a href="%1$s" title="%21s">Most kezdd el a frissítést az install könyvtárba lépéssel.</a></strong><br />
		<br />
		Ez után a rendszer végigvezet a frissítés folyamatán. A frissítés végeztével meg fog jelenni egy értesítő üzenet.
		</p>
	', //? Advanced Update
));

// Updater forms
$lang = array_merge($lang, array(
	// Updater types
	'UPDATE_TYPE'			=> 'Frissítés típuse',

	'UPDATE_TYPE_ALL'		=> 'Fájlok és adatbázis frissítése',
	'UPDATE_TYPE_DB_ONLY'	=> 'Csak az adatbázis frissítése',

	// File updater methods
	'UPDATE_FILE_METHOD_TITLE'		=> 'Fájl frissítési módszer',

	'UPDATE_FILE_METHOD'			=> 'Fájlok frissítése',
	'UPDATE_FILE_METHOD_DOWNLOAD'	=> 'A módosított fájlok letöltése archívumként',
	'UPDATE_FILE_METHOD_FTP'		=> 'Fájlok frissítése automatikusan FTP-n keresztül',
	'UPDATE_FILE_METHOD_FILESYSTEM'	=> 'Fájlok automatikus frissítése fájlrendszeri hozzáférésen keresztül',

	// File updater archives
	'SELECT_DOWNLOAD_FORMAT'	=> 'Letöltendő csomag formátumának kiválasztása',

	// FTP settings
	'FTP_SETTINGS'			=> 'FTP beállítások',
));

// Requirements messages
$lang = array_merge($lang, array(
	'UPDATE_FILES_NOT_FOUND'	=> 'Nem sikerült frissítő csomagot találni, tölts fel egyet, vagy mozgasd az általad feltöltött csomagot a megfelelő helyre.',

	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'A phpBB-d a legújabb verziójú. Nincs szükség a frissítő futtatására. Ha le szeretnéd ellenőrizni a phpBB-d állományait, győződj meg róla, hogy feltöltötted a megfelelő frissítő állományokat.',
	'OLD_UPDATE_FILES'				=> 'A frissítő állományok elavultak. A phpBB %1$s verzióról %2$s verzióra való frissítésre szolgálnak, de a phpBB legújabb verziója a %3$s.',
	'INCOMPATIBLE_UPDATE_FILES'		=> 'A talált frissítő állományok nem megfelelőek a phpBB-d verziójának. A jelenlegi phpBB-d verziója %1$s, a frissítő állományok pedig %2$s verzióról %3$s verzióra való frissítésre szolgálnak.',
));

// Update files
$lang = array_merge($lang, array(
	'STAGE_UPDATE_FILES'		=> 'Fájlok frissítése',

	// Check files
	'UPDATE_CHECK_FILES'	=> 'Frissítendő fájlok keresése',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> 'Nem sikerült megnyitni a(z) %s fájlt a változtatások ellenőrzéséhez.',

	'UPDATE_FILE_DIFF'		=> 'Módosított fájlok keresése',
	'ALL_FILES_DIFFED'		=> 'Minden módosított fájlban megkerestük a változtatásokat.',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE'	=> 'Fájlok frissítése',

	'DOWNLOAD'							=> 'Letöltés',
	'DOWNLOAD_CONFLICTS'				=> 'Csak az ütközéseket tartalmazó fájlok letöltése',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Az ütközések megvizsgálásához keress a &lt;&lt;&lt;-re',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Megváltozott állományokat tartalmazó csomag letöltése',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'A letöltés befejezése után csomagold ki a tömörített fájlt, majd a kibontott állományban navigálj a phpBB telepítésed gyökérkönyvtárának megfelelő helyre. Ez után töltsd fel a megfelelő fájlokat a megadott helyükre. Miután minden fájl feltöltődött, folytathatod a frissítést.',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Az állomány már a legújabb verziójú.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Ezen az állományon nem végezhető diff.',
	'FILE_USED'						=> 'Információ a következő állományból',			// Single file
	'FILES_CONFLICT'				=> 'Ütközéseket tartalmazó állományok',
	'FILES_CONFLICT_EXPLAIN'		=> 'A következő állományok korábban módosítva lettek, és nem teljesen egyeznek meg a régiverzió-beli állománnyal. Az egyesítésük során ütközés lép fel. Kérünk, járj utána ezeknek az ütközéseknek, és próbáld meg megoldani őket kézzel, vagy folytasd a frissítést a kívánt egyesítési mód kiválasztásával. Ha saját magad oldod meg az ütközések problémáját, miután megváltoztattad az állományokat, vesd őket újra össze. Emellett választhatsz különböző egyesítési módok közül is. Az első használata eredményeképp az új állományban a régi állomány ütköző sorai nem lesznek megtalálhatók, míg a második használatakor az új állomány változásai vesznek el.',
	'FILES_DELETED'					=> 'Törölt állományok',
	'FILES_DELETED_EXPLAIN'			=> 'A következő állományok nem léteznek az új verzióban. Ezeket az állományokat törölni kell a a fórum állományai közül.',
	'FILES_MODIFIED'				=> 'Módosított állományok',
	'FILES_MODIFIED_EXPLAIN'		=> 'A következő állományok korábban módosítva lettek, és nem teljesen egyeznek meg a régiverzió-beli állománnyal. A frissített állomány a saját módosításaid és az új állomány egyesítése lesz.',
	'FILES_NEW'						=> 'Új állományok',
	'FILES_NEW_EXPLAIN'				=> 'A következő állományok jelenleg nincsenek ott a phpBB-dben. Ezek az állományok hozzáadásra kerülnek a fórumodhoz.',
	'FILES_NEW_CONFLICT'			=> 'Új ütköző állományok',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'A következő állományok a legújabb verzióban jelentek meg, de megállapításra került, hogy ezen új állomány helyén neked már van egy ilyen nevű állományod. Ezek az állományok felülírásra kerülnek az új állományokkal.',
	'FILES_NOT_MODIFIED'			=> 'Nem módosított állományok',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'A következő állományok nem lettek módosítva, megegyeznek a phpBB azon verziójú állományaival, melyről frissíteni szeretnél.',
	'FILES_UP_TO_DATE'				=> 'Már frissített fájlok',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'A következő állományok már a legújabb verziójúak, ezért nem kell frissíteni őket.',
	'FILES_VERSION'					=> 'Állományok verziója',
	'TOGGLE_DISPLAY'				=> 'Állományok listájának megjelenítése/elrejtése',

	// File updater
	'UPDATE_UPDATING_FILES'	=> 'Állományok frissítése',

	'UPDATE_FILE_UPDATER_HAS_FAILED'	=> 'A(z) “%1$s“ nevű állomány frissítő működése közben hibát észlelt. A telepítő a(z) “%2$s“ állomány frissítőt fogja használni a frissítéshez.',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> 'Az állomány frissítő működése közben hibát észlelt. További állomány frissítők nem állnak rendelkezésre.',

	'UPDATE_CONTINUE_UPDATE_PROCESS'	=> 'Frissítés folytatása',
	'UPDATE_RECHECK_UPDATE_FILES'		=> 'Állományok ismételt ellenörzése',
));

// Update database
$lang = array_merge($lang, array(
	'STAGE_UPDATE_DATABASE'		=> 'Adatbázis frissítése',

	'TASK_UPDATE_EXTENSIONS'	=> 'Kiterjesztések frissítése',

	'INLINE_UPDATE_SUCCESSFUL'		=> 'Az adatbázis frissítése sikeresen befejeződött.',
));

// Converter
$lang = array_merge($lang, array(
	// Common converter messages
	'CONVERT_NOT_EXIST'			=> 'A megadott konvertáló nem létezik.',
	'DEV_NO_TEST_FILE'			=> 'Nem került megadásra a test_file változó értéke a konvertálóban. Ha csak egy használója vagy ennek a konvertálónak, nem szabadna ezt a hibaüzenetet látnod – kérjük, értesítsd a konvertáló készítőjét. Ha a konvertáló készítője vagy, meg kell adnod egy az eredeti fórumban lévő állomány helyét, hogy le lehessen ellenőrizni az eredeti fórum elérési útját.',
	'COULD_NOT_FIND_PATH'		=> 'Nem sikerült megtalálni az elérési utat az eredeti fórumodhoz. Kérjük, ellenőrizd a beállításokat, és próbálkozz újra.<br />» Megadott elérési út: %s',
	'CONFIG_PHPBB_EMPTY'		=> 'A phpBB3 „%s” konfigurációs változója üres.',

	'MAKE_FOLDER_WRITABLE'		=> 'Kérünk, győződj meg róla, hogy a következő könyvtár létezik, és írható a webszerver által, majd próbálkozz újra:<br />»<strong>%s</strong>',
	'MAKE_FOLDERS_WRITABLE'		=> 'Kérünk, győződj meg róla, hogy a következő könyvtárak léteznek, és írhatóak a webszerver által, majd próbálkozz újra:<br />»<strong>%s</strong>',

	'INSTALL_TEST'				=> 'Tesztelés újra',

	'NO_TABLES_FOUND'			=> 'Nem találhatók adatbázistáblák.',
	'TABLES_MISSING'			=> 'Az alábbi táblák nem találhatók:<br />» <strong>%s</strong>.',
	'CHECK_TABLE_PREFIX'		=> 'Kérjük, ellenőrizd az adatbázis-előtagot, és próbálkozz újra.',

	// Conversion in progress
	'CONTINUE_CONVERT'			=> 'Konvertálás folytatása',
	'CONTINUE_CONVERT_BODY'		=> 'A phpBB talált egy korábbi, nem befejezett konverziót. Választhatsz, hogy ezt folytatod, vagy egy újat kezdesz.',
	'CONVERT_NEW_CONVERSION'	=> 'Új konvertálás',
	'CONTINUE_OLD_CONVERSION'	=> 'Korábban megkezdett konverzió folytatása',

	// Start conversion
	'SUB_INTRO'					=> 'Bevezető',
	'CONVERT_INTRO'				=> 'Üdvözlünk a phpBB Egytesített Konvertáló Keretrendszerben!',
	'CONVERT_INTRO_BODY'		=> 'Itt adatokat importálhatsz másik (telepített) fórumrendszerekből. Az alábbi lista tartalmazza az elérhető konvertálókat. Ha a listában nem szerepel a kívánt fórumszoftverről konvertáló modul, látogass el a phpBB weboldalára, ahonnan lehet, hogy letöltheted.',
	'AVAILABLE_CONVERTORS'		=> 'Elérhető konvertálók',
	'NO_CONVERTORS'				=> 'Nincs elérhető konvertáló.',
	'CONVERT_OPTIONS'			=> 'Beállítások',
	'SOFTWARE'					=> 'Fórumszoftrver',
	'VERSION'					=> 'Verzió',
	'CONVERT'					=> 'Konvertálás',

	// Settings
	'STAGE_SETTINGS'			=> 'Beállítások',
	'TABLE_PREFIX_SAME'			=> 'Annak a szoftvernek a tábla előtagját add meg, amelyről konvertálsz.<br />» A megadott tábla előtag %s volt.',
	'DEFAULT_PREFIX_IS'			=> 'A konvertáló nem talált táblákat a megadott előtaggal. Kérünk, győződj meg róla, hogy helyesen adtad meg az eredeti fórum adatait. A %1$s alapértelmezett tábla előtagja <strong>%2$s</strong>.',
	'SPECIFY_OPTIONS'			=> 'Konvertálás beállításainak megadása',
	'FORUM_PATH'				=> 'Fórum elérési útja',
	'FORUM_PATH_EXPLAIN'		=> 'Az eredeti fórum <strong>relatív</strong> elérési útja a <strong>jelenlegi phpBB3-mad gyökérkönyvtárához viszonyítva</strong>.',
	'REFRESH_PAGE'				=> 'Automatikus továbblépés',
	'REFRESH_PAGE_EXPLAIN'		=> 'Ha igenre állítod, a konvertáló egy lépés befejezése után mindig újratölti az oldalt, ezzel továbblépve a következő lépésre. Ha most konvertálsz az első alkalommal, és csak tesztelni szeretnél, illetve előre tájékozódni az esetlegesen felmerülő hibákról, ajánljuk, hogy állítsd ezt a beállítást nemre.',

	// Conversion
	'STAGE_IN_PROGRESS'			=> 'Konvertálás…',

	'AUTHOR_NOTES'				=> 'Készítő megjegyzései<br />» %s',
	'STARTING_CONVERT'			=> 'Konvertálás elkezdése',
	'CONFIG_CONVERT'			=> 'Konfiguráció konvertálása',
	'DONE'						=> 'Kész',
	'PREPROCESS_STEP'			=> 'Függvények/parancsok előfeldolgozásának végrehajtása',
	'FILLING_TABLE'				=> '<strong>%s</strong> tábla feltöltése',
	'FILLING_TABLES'			=> 'Táblák feltöltése',
	'DB_ERR_INSERT'				=> 'Hiba <code>INSERT</code> parancs végrehajtása közben.',
	'DB_ERR_LAST'				=> 'Hiba a <var>query_last</var> végrehajtása közben.',
	'DB_ERR_QUERY_FIRST'		=> 'Hiba a <var>query_first</var> végrehajtása közben.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Hiba a <var>query_first</var> végrehajtása közben, %s („%s”).',
	'DB_ERR_SELECT'				=> 'Hiba <code>SELECT</code> lekérdezés végrehajtása közben.',
	'STEP_PERCENT_COMPLETED'	=> 'Lépés: <strong>%d</strong> / <strong>%d</strong>',
	'FINAL_STEP'				=> 'Végső lépés végrehajtása',
	'SYNC_FORUMS'				=> 'Fórumok szinkronizációjának megkezdése',
	'SYNC_POST_COUNT'			=> 'Hozzászólásszámok szinkronizálása',
	'SYNC_POST_COUNT_ID'		=> 'Hozzászólásszámok szinkronizálása; <var>entry</var> %1$s – %2$s.',
	'SYNC_TOPICS'				=> 'Témák szinkronizációjának megkezdése',
	'SYNC_TOPIC_ID'				=> 'Témák szinkronizálása; <var>topic_id</var>: %1$s – %2$s.',
	'PROCESS_LAST'				=> 'Végső műveletek végrehajtása',
	'UPDATE_TOPICS_POSTED'		=> 'Téma információk generálása',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Hiba lépett fel a téma információk generálása közben. A konvertálás befejezése után az adminisztrátori vezérlőpultban újra megpróbálhatod ezt a lépést.',
	'CONTINUE_LAST'				=> 'Végső műveletek folytatása',
	'CLEAN_VERIFY'				=> 'Végleges struktúra rendbe tétele és ellenőrzése',
	'NOT_UNDERSTAND'			=> 'Nem sikerült értelmezni: %s #%d, %s tábla („%s”).',
	'NAMING_CONFLICT'			=> 'Nevezési ütközés: a %s és a %s is fedőnév.<br /><br />%s',

	// Finish conversion
	'CONVERT_COMPLETE'			=> 'Konvertálás befejeződött',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Sikeresen konvertáltad a fórumod phpBB 3.3-ra. Most bejelentkezhetsz és <a href="../">használhatod a fórumod</a>. Kérünk, ellenőrizd, hogy minden beállítás helyesen megtörtént, mielőtt aktiválnád a fórumod az install könyvtár törlésével. Ha segítségre lenne szükséged, olvasd el az online <a href="https://www.phpbb.com/support/docs/en/3.3/ug/">dokumentációt</a> vagy tedd fel kérdésed a <a href="https://www.phpbb.com/community/viewforum.php?f=661">fórumban</a>.',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'A régi fórumon engedélyezve volt az FTP-n keresztüli csatolmányfeltöltés. Kérjük, kapcsold ki az FTP feltöltést, bizonyosodj meg róla, hogy helyes feltöltési könyvtár került megadásra, majd másold át az összes csatolmány állományt az új, webről is elérhető könyvtárba. Ha végeztél ezzel, indítsd újra a konvertálót.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Nincs elérhető konfigurációs információ a konvertáláshoz.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Nem sikerült lekérdezni a fórum hozzáférési jogosultságokat.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Nem sikerült lekérdezni a kategóriákat.',
	'CONV_ERROR_GET_CONFIG'				=> 'Nem sikerült lekérdezni a fórum konfigurációját.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Nem sikerült hozzáférni/olvasni: „%s”.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Nem sikerült lekérdezni a csoport jogosultságokat.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Az add_bots() függvény végrehajtása során ellentmondást találtunk a csoportok táblában – az összes speciális csoportot hozzá kell adnod, ha manuálisan csinálod.',
	'CONV_ERROR_INSERT_BOT'				=> 'Nem sikerült beilleszteni egy robotot a felhasználók táblába.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Nem sikerült beilleszteni egy robotot a robotok táblába.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Nem sikerült beilleszteni egy felhasználót a csoportok táblába.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Üzenetfeldolgozó hiba',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Megjegyzés fejlesztőknek: a %s használatához meg kell adnod a $convertor[\'avatar_path\'] értékét.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Nem került megadásra a relatív elérési út az eredeti fórumhoz.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Megjegyzés fejlesztőknek: a %s használatához meg kell adnod a $convertor[\'avatar_gallery_path\'] értékét.',
	'CONV_ERROR_NO_GROUP'				=> 'A „%1$s” csoport nem található a %2$s-ban.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Megjegyzés fejlesztőknek: a %s használatához meg kell adnod a $convertor[\'ranks_path\'] értékét.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Megjegyzés fejlesztőknek: a %s használatához meg kell adnod a $convertor[\'smilies_path\'] értékét.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Megjegyzés fejlesztőknek: a %s használatához meg kell adnod a $convertor[\'upload_path\'] értékét.',
	'CONV_ERROR_PERM_SETTING'			=> 'Nem sikerült beilleszteni/frissíteni a jogosultság beállításokat.',
	'CONV_ERROR_PM_COUNT'				=> 'Nem sikerült lekérdezni egy mappa PÜ-inek számát.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Nem sikerült beilleszteni egy régi kategóriát helyettesítő új fórumot.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Nem sikerült beilleszteni egy régi fórumot helyettesítő új fórumot.',
	'CONV_ERROR_USER_ACCESS'			=> 'Nem sikerült lekérdezni a felhasználóazonosítói információkat.',
	'CONV_ERROR_WRONG_GROUP'			=> 'ossz csoport („%1$s”) került meghatározásra a %2$s-ban.',
	'CONV_OPTIONS_BODY'					=> 'Ezen az oldalon az eredeti fórum hozzáférési adatait kell megadni. Add meg a régi fórumod adatbázisának adatait, a konvertáló nem fog benne semmit se megváltoztatni. Az inkonzisztencia elkerülése végett az eredeti fórumot tanácsos kikapcsolni a konvertálás idejére.',
	'CONV_SAVED_MESSAGES'				=> 'Elmentett üzenetek',

	'PRE_CONVERT_COMPLETE'			=> 'Az előfeldolgozó lépések sikeresen végrehajtásra kerültek. Most már elkezdheted a tényleges konvertálást. Kérjük, vedd figyelembe, hogy néhány dolgot, lehet, hogy neked kell majd kézzel elvégezned, beállítanod. A konvertálás után különösen is ellenőrizd le a jogosultságokat, ha szükséges építsd újra a keresési indexet, és ellenőrizd, hogy az állományok sikeresen átmásolásra kerültek-e (például avatarok, emotikonok).',
));
