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
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine


$lang = array_merge($lang, array(
	'EXTENSION'					=> 'Kiterjesztés',
	'EXTENSIONS'				=> 'Kiterjesztések',
	'EXTENSIONS_ADMIN'			=> 'Kiterjesztés kezelő',
	'EXTENSIONS_EXPLAIN'		=> 'A kiterjesztés kezelővel a phpBB fórumod kiterjesztéseit kezelheted, illetve kiterjesztésekkel kapcsolatos információkat tekinthetsz meg.', //?
	'EXTENSION_INVALID_LIST'	=> 'A “%s” kiterjesztés érvénytelen.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> 'A kiválasztott kiterjesztés nem telepíthető erre a fórumra, kérjük ellenőrizd a támogatott phpBB és PHP verziókat a részletek oldalon.',
	'EXTENSION_DIR_INVALID'		=> 'A kiválasztott kiterjesztés könyvtárszerkezete hibás, ezért a kiterjesztés nem engedélyezhető.',
	'EXTENSION_NOT_ENABLEABLE'	=> 'A kiválasztott kiterjesztés nem engedélyezhető. Kérjük, ellenőrizd a kiterjesztés követelményeit.',
	'EXTENSION_NOT_INSTALLED'	=> 'A %s kiterjesztés nem elérhető. Kérjük, ellenőrizd, hogy a kiterjesztés megfelelően került telepítésre.',

	'DETAILS'				=> 'Részletek',

	'EXTENSIONS_DISABLED'	=> 'Letiltott kiterjesztések',
	'EXTENSIONS_ENABLED'	=> 'Engedélyezett kiterjesztések',

	'EXTENSION_DELETE_DATA'	=> 'Adatok törlése',
	'EXTENSION_DISABLE'		=> 'Letiltás',
	'EXTENSION_ENABLE'		=> 'Engedélyezés',

	'EXTENSION_DELETE_DATA_EXPLAIN'	=> 'A kiterjesztés adatainak törlése eltávolítja a kiterjesztés által létrehozott adatokat és beállításokat. A kiterjesztés állományai megmaradnak, így a kiterjesztés később újra engedélyezhető.',
	'EXTENSION_DISABLE_EXPLAIN'		=> 'A kiterjesztés letiltása megtartja a kiterjesztés fájljait, adatait és beállításait, azonban eltávolít minden a kiterjesztés által nyújtott funkcionalitást.',
	'EXTENSION_ENABLE_EXPLAIN'		=> 'A kiterjesztés engedélyezésével az használhatóvá válik a fórumodon.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'	=> 'A kiterjesztés adatainak törlése folyik. Kérjük, ne hagyd el vagy frissítsd az oldalt, amíg a művelet be nem fejeződik.',
	'EXTENSION_DISABLE_IN_PROGRESS'	=> 'A kiterjesztés letiltása folyik. Kérjük, ne hagyd el vagy frissítsd az oldalt, amíg a művelet be nem fejeződik.',
	'EXTENSION_ENABLE_IN_PROGRESS'	=> 'A kiterjesztés engedélyezése folyik. Kérjük, ne hagyd el vagy frissítsd az oldalt, amíg a művelet be nem fejeződik.',

	'EXTENSION_DELETE_DATA_SUCCESS'	=> 'A kiterjesztés adatai sikeresen törlésre kerültek.',
	'EXTENSION_DISABLE_SUCCESS'		=> 'A kiterjesztés sikeresen letiltásra került.',
	'EXTENSION_ENABLE_SUCCESS'		=> 'A kiterjesztés sikeresen engedélyezésre került.',

	'EXTENSION_NAME'			=> 'Kiterjesztés neve',
	'EXTENSION_ACTIONS'			=> 'Műveletek',
	'EXTENSION_OPTIONS'			=> 'Beállítások',
	'EXTENSION_INSTALL_HEADLINE'=> 'Kiterjesztés telepítése',
	'EXTENSION_INSTALL_EXPLAIN'	=> '<ol>
			<li>Tölts le egy kiterjesztést a phpBB.com kiterjesztés adatbázisából</li>
			<li>Csomagold ki a letöltött fájlt és másold fel a fórumod <samp>ext/</samp> könyvtárába</li>
			<li>Engedélyezd a kiterjesztést</li>
		</ol>',
	'EXTENSION_UPDATE_HEADLINE'	=> 'Kiterjesztés frissítése',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>Tiltsd le a kiterjesztést</li>
			<li>Töröld a kiterjesztés állományait a fájlrendszerből</li>
			<li>Töltsd fel az új állományokat</li>
			<li>Engedélyezd a kiterjesztést</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> 'Kiterjesztés teljes eltávolítása',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>Tiltsd le a kiterjesztést</li>
			<li>Töröld a kiterjesztés adatait</li>
			<li>Töröld a kiterjesztés állományait a fájlrendszerből</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'	=> 'Biztosan törölni akarod “%s” adatait?<br /><br />Ez a művelet törli az összes adatot és beállítást, és nem vonható vissza!',
	'EXTENSION_DISABLE_CONFIRM'		=> 'Biztosan letiltod a “%s” kiterjesztést?',
	'EXTENSION_ENABLE_CONFIRM'		=> 'Biztosan engedélyezed a “%s” kiterjesztést?',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'	=> 'Biztosan használni szeretnél egy nem stabil verziót?',

	'RETURN_TO_EXTENSION_LIST'	=> 'Vissza a kiterjesztésekhez',

	'EXT_DETAILS'			=> 'Kiterjesztés részletei',
	'DISPLAY_NAME'			=> 'Megjelenítendő név',
	'CLEAN_NAME'			=> 'Egyszerű név',
	'TYPE'					=> 'Típus',
	'DESCRIPTION'			=> 'Leírás',
	'VERSION'				=> 'verzió',
	'HOMEPAGE'				=> 'Honlap',
	'PATH'					=> 'Elérési út',
	'TIME'					=> 'Kiadás dátuma',
	'LICENSE'				=> 'Licenc',

	'REQUIREMENTS'			=> 'Követelmények',
	'PHPBB_VERSION'			=> 'phpBB verzió',
	'PHP_VERSION'			=> 'PHP verzió',
	'AUTHOR_INFORMATION'	=> 'Készítő adatai',
	'AUTHOR_NAME'			=> 'Név',
	'AUTHOR_EMAIL'			=> 'E-mail',
	'AUTHOR_HOMEPAGE'		=> 'Honlap',
	'AUTHOR_ROLE'			=> 'Szerep',

	'NOT_UP_TO_DATE'		=> '%s nem a legfrissebb',
	'UP_TO_DATE'			=> '%s a legfrissebb',
	'ANNOUNCEMENT_TOPIC'	=> 'Kiadási közlemény',
	'DOWNLOAD_LATEST'		=> 'Legfrissebb verzió letöltése',
	'NO_VERSIONCHECK'		=> 'No version check information given.', //?

	'VERSIONCHECK_FORCE_UPDATE_ALL'		=> 'Összes verzió újraellenőrzése',
	'FORCE_UNSTABLE'					=> 'Mindig ellenőrizze a nem stabil verziókat is',
	'EXTENSIONS_VERSION_CHECK_SETTINGS'	=> 'Verzió ellenőrzés beállításai',

	'BROWSE_EXTENSIONS_DATABASE'		=> 'A phpBB.com kiterjesztés adatbázisának böngészése',

	'META_FIELD_NOT_SET'	=> 'A szükséges %s információ nem lett megadva.', //? meta field
	'META_FIELD_INVALID'	=> '%s információ érvénytelen.',
));
