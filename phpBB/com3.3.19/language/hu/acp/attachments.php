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

$lang = array_merge($lang, array(
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Itt a csatolmányok főbb beállításait adhatod meg, valamint a speciális kategóriák egyedi opcióit módosíthatod.', //?
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Itt felvehetsz, illetve törölheted, módosíthatod, vagy kikapcsolhatod a kiterjesztéscsoportokat. Ezen felül lehetőséged van a kiterjesztéscsoportokhoz speciális kategóriát rendelni, vagy megadni egy feltöltési ikont, amely minden a csoporthoz tartozó csatolmány előtt meg fog jelenni.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Itt az engedélyezett kiterjesztéseket kezelheted. Egy kiterjesztés aktiválásához használd a kiterjesztéscsoportok kezelése részt. Határozottan tanácsoljuk, hogy ne engedélyezz szkript kiterjesztéseket (mint például <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, és így tovább…).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Itt az „árvává” vált állományokat láthatod. Ilyen legtöbbször akkor keletkezik, ha egy felhasználó csatol egy állományt, de a hozzászólást végül nem küldi el. Ezeket az állományokat törölheted, vagy hozzácsatolhatod egy létező hozzászóláshoz. Ez utóbbihoz szükség van a hozzászólás azonosítójára, amit neked kell megállapítanod. Ezzel a már feltöltött csatolmány hozzárendelésre kerül a megadott hozzászóláshoz.',
	'ADD_EXTENSION'						=> 'Kiterjesztés hozzáadása',
	'ADD_EXTENSION_GROUP'				=> 'Kiterjesztéscsoport hozzáadása',
	'ADMIN_UPLOAD_ERROR'				=> 'Hiba történt az állomány csatolása közben: „%s”.',
	'ALLOWED_FORUMS'					=> 'Engedélyezett fórumok',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'A hozzárendelt kiterjesztésű állományokat az itt kijelölt fórumokba lehet majd küldeni.',
	'ALLOWED_IN_PM_POST'				=> 'Engedélyezés',
	'ALLOW_ATTACHMENTS'					=> 'Csatolmányok engedélyezése',
	'ALLOW_ALL_FORUMS'					=> 'Engedélyezés az összes fórumban',
	'ALLOW_IN_PM'						=> 'Engedélyezés privát üzenetben',
	'ALLOW_PM_ATTACHMENTS'				=> 'Csatolmányok engedélyezése privát üzenetben',
	'ALLOW_SELECTED_FORUMS'				=> 'Csak az alább kijelölt fórumokban',
	'ASSIGNED_EXTENSIONS'				=> 'Hozzárendelt kiterjesztések',
	'ASSIGNED_GROUP'					=> 'Hozzárendelt kiterjesztéscsoport',
	'ATTACH_EXTENSIONS_URL'				=> 'Kiterjesztések',
	'ATTACH_EXT_GROUPS_URL'				=> 'Kiterjesztéscsoportok',
	'ATTACH_ID'							=> 'Azonosító',
	'ATTACH_MAX_FILESIZE'				=> 'Maximum állományméret',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Legfeljebb ekkorák lehetnek az állományok. A 0 érték megadásakor csak a PHP beállítások korlátoznak.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Maximum állományméret privát üzenetnél',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Privát üzenethez csatolható legnagyobb állomány mérete. A 0 érték kikapcsolja a korlátozást.',
	'ATTACH_ORPHAN_URL'					=> 'Árva csatolmányok',
	'ATTACH_POST_ID'					=> 'Hozzászólás azonosító',
	'ATTACH_POST_TYPE'					=> 'Hozzászólás típusa',
	'ATTACH_QUOTA'						=> 'Csatolmányok tárhelye', //?
	'ATTACH_QUOTA_EXPLAIN'				=> 'Az egész fórumon a csatolmányok legfeljebb ekkora helyet foglalhatnak el összesen. A 0 érték kikapcsolja a korlátozást.', //?
	'ATTACH_TO_POST'					=> 'Állomány csatolása hozzászóláshoz', //?

	'CAT_IMAGES'				=> 'Képek',
	'CHECK_CONTENT'				=> 'Csatolt állományok ellenőrzése',
	'CHECK_CONTENT_EXPLAIN'		=> 'Néhány böngésző rávehető, hogy a feltöltött állományokhoz helytelen MIME típust állapítson meg. Ezzel a beállítással az ennek okozására hajlamos állományok visszautasításra kerülnek.',
	'CREATE_GROUP'				=> 'Új csoport létrehozása',
	'CREATE_THUMBNAIL'			=> 'Kiskép készítése',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Minden lehetséges esetben készítsen kisképet.',

	'DEFINE_ALLOWED_IPS'			=> 'Engedélyezett IP-k/hosztnevek megadása',
	'DEFINE_DISALLOWED_IPS'			=> 'Nem engedélyezett IP-k/hosztnevek megadása',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Egynél több IP-címet vagy hosztnevet mindegyiket új sorba írva tudsz megadni. IP-cím tartomány megadásához használj kötőjelet (-), valamint használhatod a * jokerkaraktert.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Egyszerre több IP-címet is eltávolíthatsz az egered és a billentyűzeted a böngésződnek megfelelő kombinációjának használatával. A kizárt IP-címek kék háttérrel szerepelnek.',
	'DISPLAY_INLINED'				=> 'Képek megjelenítése közvetlenül a hozzászólásokban',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Ha nemre van állítva, a kép csatolmányok linkként fognak megjelenni.',
	'DISPLAY_ORDER'					=> 'Csatolmányok megjelenítési sorrendje', //?
	'DISPLAY_ORDER_EXPLAIN'			=> 'A csatolmányok a feltöltés ideje szerint kerülnek rendezésre.', //? jelentés

	'EDIT_EXTENSION_GROUP'			=> 'Kiterjesztéscsoport szerkesztése',
	'EXCLUDE_ENTERED_IP'			=> 'Állítsd igenre, hogy a megadott IP/hosztnév kizárásra kerüljön.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'IP-cím kizárása az engedélyezett IP-k/hosztnevek közül',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'IP-cím kizárása a nem engedélyezett IP-k/hosztnevek közül',
	'EXTENSIONS_UPDATED'			=> 'A kiterjesztés sikeresen frissítésre került.',
	'EXTENSION_EXIST'				=> 'A %s kiterjesztés már létezik.',
	'EXTENSION_GROUP'				=> 'Kiterjesztéscsoport',
	'EXTENSION_GROUPS'				=> 'Kiterjesztéscsoportok',
	'EXTENSION_GROUP_DELETED'		=> 'A kiterjesztéscsoport sikeresen törlésre került.',
	'EXTENSION_GROUP_EXIST'			=> 'A %s kiterjesztéscsoport már létezik.',

	'EXT_GROUP_ARCHIVES'			=> 'Archívumok',
	'EXT_GROUP_DOCUMENTS'			=> 'Dokumentumok',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Letölthető állományok',
	'EXT_GROUP_IMAGES'				=> 'Képek',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Sima szöveg',

	'GO_TO_EXTENSIONS'		=> 'Ugrás a kiterjesztések kezeléséhez',
	'GROUP_NAME'			=> 'Csoport neve',

	'FILES_GONE'			=> 'Néhány törlésre kiválasztott csatolmány nem létezik. Ezek lehet, hogy már korábban törölve lettek. A létezők törölve lettek.',
	'FILES_STATS_WRONG'		=> 'A csatolmány statisztikád pontatlan lehet, ezért újraszinkronizálásra lehet szükség. Jelenlegi értékek: csatolmányok száma = %1$d, csatolmányok összes mérete = %2$s.<br />%3$sKattints ide%4$s az újraszinkronizáláshoz.',

	'IMAGE_LINK_SIZE'			=> 'Linkkép méret', //? "Image link dimensions"
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Ha a csatolt kép ennél nagyobb, akkor csak egy link lesz megjelenítve hozzá, ahelyett, hogy közvetlenül szerepelne a hozzászólásban. A funkció kikapcsolásához állítsd mindkét értéket 0-ra.',
	'IMAGE_QUALITY'				=> 'A feltöltött kép típusú csatolmányok minősége (csak JPEG képek)', //? Quality of uploaded image attachments (JPEG only)
	'IMAGE_QUALITY_EXPLAIN'		=> 'Adj meg egy értéket 50% (kisebb fájlméret) és 90% (magasabb minőség) között. A 90%-nál nagyobb minőség növeli a fájl méretét, ezért nem engedélyezett. Ez a beállítás csak akkor jut érvényre, ha a legnagyobb megengedett képméret 0px-től eltérő értékre van beállítva.', //? Setting only applies if maximum image dimensions are set to a value other than 0px by 0px.
	'IMAGE_STRIP_METADATA'		=> 'Kép metaadatok eltávolítása (csak JPEG képek)',
	'IMAGE_STRIP_METADATA_EXPLAIN'	=> 'Exif metaadatok eltávolítása, úgy mint szerző, GPS koordináták vagy a kamera adatai. Ez a beállítás csak akkor jut érvényre, ha a legnagyobb megengedett képméret 0px-től eltérő értékre van beállítva.',

	'MAX_ATTACHMENTS'				=> 'Maximum csatolható állományok száma hozzászólásonként',
	'MAX_ATTACHMENTS_PM'			=> 'Maximum csatolható állományok száma privát üzenetenként',
	'MAX_EXTGROUP_FILESIZE'			=> 'Maximum állományméret',
	'MAX_IMAGE_SIZE'				=> 'Maximum képméret',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Legfeljebb ekkorák lehetnek a kép csatolmányok. Az ellenőrzés kikapcsolásához állítsd mindkét értéket 0-ra.',
	'MAX_THUMB_WIDTH'				=> 'Maximum kiskép szélesség/magasság pixelben',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'A generált kiskép nem fogja túllépni az itt megadott szélességet.',
	'MIN_THUMB_FILESIZE'			=> 'Minimum kiskép állományméret',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Ennél kisebb képeknél nem lesz kiskép készítve.',
	'MODE_INLINE'					=> 'Közvetlen', //? nem használják
	'MODE_PHYSICAL'					=> 'Átirányítás az állományhoz', //?

	'NOT_ALLOWED_IN_PM'			=> 'Csak hozzászólásokban engedélyezett',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Nem engedélyezett',
	'NOT_ASSIGNED'				=> 'Nincs hozzárendelve',
	'NO_ATTACHMENTS'			=> 'Ehhez az időszakhoz nem található csatolmány.',
	'NO_EXT_GROUP'				=> 'Nincs',
	'NO_EXT_GROUP_ALLOWED_PM'	=> 'Nincs <a href="%s">engedélyezett kiterjesztéscsoport</a> a privát üzenetekhez.',
	'NO_EXT_GROUP_ALLOWED_POST'	=> 'Nincs <a href="%s">engedélyezett kiterjesztéscsoport</a> a hozzászólásokhoz.',
	'NO_EXT_GROUP_NAME'			=> 'A csoport neve nem lett megadva.',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Nem lett megadva kiterjesztéscsoport.',
	'NO_FILE_CAT'				=> 'Nincs',
	'NO_IMAGE'					=> 'Nincs kép',
	'NO_UPLOAD_DIR'				=> 'A megadott feltöltési könyvtár nem létezik.',
	'NO_WRITE_UPLOAD'			=> 'A megadott feltöltési könyvtár nem írható. Kérjük, módosítsd a könyvtár jogosultságait, hogy a webszerver tudjon írni bele.',

	'ONLY_ALLOWED_IN_PM'	=> 'Csak privát üzenetekben engedélyezett',
	'ORDER_ALLOW_DENY'		=> 'Engedélyezettek',
	'ORDER_DENY_ALLOW'		=> 'Tiltottak',

	'REMOVE_ALLOWED_IPS'		=> '<em>Engedélyezett</em> IP-k/hosztnevek eltávolítása vagy kizárásuk megszüntetése',
	'REMOVE_DISALLOWED_IPS'		=> '<em>Nem engedélyezett</em> IP-k/hosztnevek eltávolítása vagy kizárásuk megszüntetése',
	'RESYNC_FILES_STATS_CONFIRM'	=> 'Újra szeretnéd szinkronizálni a csatolmányok statisztikáját?',

	'SECURE_ALLOW_DENY'				=> 'Engedélyezettek/tiltottak listája',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Hogyan viselkedjen az engedélyezettek/tiltottak listája, ha be van kapcsolva a biztonságos letöltések funkció. Ha engedélyezettekre van állítva, akkor ún. <strong>fehérlistaként</strong> fog működni (csak azok tölthetnek le, akik szerepelnek a listában), ha tiltottakra, <strong>feketelistaként</strong>.',
	'SECURE_DOWNLOADS'				=> 'Biztonságos letöltések bekapcsolása',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Ha bekapcsolod ezt a funkciót, a csatolmányok letöltésének lehetősége csak a meghatározott IP-kre/hosztnevekre korlátozódik.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'A biztonságos letöltések funkció nincs bekapcsolva. Az alábbi beállítások csak a funkció bekapcsolása után kerülnek alkalmazásra.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'Az IP-cím lista sikeresen frissítésre került.',
	'SECURE_EMPTY_REFERRER'			=> 'Üres referrer engedélyezése', //?? referrer fordítása??
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'A biztonságos letöltések funkció a referrerökön alapszik. Szeretnéd azok számára is engedélyezni a letöltést, akik nem adják meg a referrert?',
	'SETTINGS_CAT_IMAGES'			=> 'Képkategória beállítások',
	'SPECIAL_CATEGORY'				=> 'Speciális kategória',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'A speciális kategóriák a hozzászólásokban való megjelenítési módban különböznek.',
	'SUCCESSFULLY_UPLOADED'			=> 'Sikeresen feltöltésre került.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'A kiterjesztéscsoport sikeresen felvételre került.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'A kiterjesztéscsoport sikeresen frissítésre került.',

	'UPLOADING_FILES'				=> 'Állományok feltölétse',
	'UPLOADING_FILE_TO'				=> '„%1$s” állomány feltöltése a %2$d azonosítójú hozzászóláshoz…',
	'UPLOAD_DENIED_FORUM'			=> 'Nincs jogosultságod állományt feltölteni a „%s” fórumba.',
	'UPLOAD_DIR'					=> 'Feltöltési könyvtár',
	'UPLOAD_DIR_EXPLAIN'			=> 'A csatolmányok tárolási helye. Kérjük, vedd figyelembe, hogy ha megváltoztatod ezt a könyvtárat, miközben már vannak feltöltött csatolmányok, ezeket az állományokat kézzel kell átmásolnod az új helyre.',
	'UPLOAD_ICON'					=> 'Feltöltési ikon',
	'UPLOAD_NOT_DIR'				=> 'A megadott feltöltési hely úgy tűnik, nem könyvtár.',
	'UPLOAD_POST_NOT_EXIST'			=> '“%1$s” állomány nem tölthető fel a %2$d azonosítójú hozzászóláshoz, mert az nem létezik.',
));
