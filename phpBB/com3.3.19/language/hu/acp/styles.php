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
	$lang = [];
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
	'ACP_STYLES_EXPLAIN'	=> 'Itt a fórumon elérhető megjelenéseket tudod kezelni.<br>Kérjük, vedd figyelembe, hogy a “<strong>prosilver</strong>”-t nem tudod eltávolítani, mivel az a phpBB alapértelmezettje és más megjelenések szülője is.', //?

	'CANNOT_BE_INSTALLED'			=> 'Nem telepíthető',
	'CONFIRM_UNINSTALL_STYLES'		=> 'Biztosan el szeretnéd távolítani a kiválasztott stílust?', //? styles
	'COPYRIGHT'						=> 'Copyright', //? kell valami?

	'DEACTIVATE_DEFAULT'		=> 'Nem tudod deaktiválni az alapértelmezett megjelenést.',
	'DELETE_FROM_FS'			=> 'Törlés a fájlrendszerből',
	'DELETE_STYLE_FILES_FAILED'	=> 'Hiba történt a "%s" stílus állományainak törlése közben.', //? style
	'DELETE_STYLE_FILES_SUCCESS'	=> '"%s" stílus állományai törlésre kerültek.', //? style
	'DETAILS'					=> 'Adatok', //? Részletek?

	'INHERITING_FROM'			=> 'Öröklés',
	'INSTALL_STYLE'				=> 'Megjelenés telepítése',
	'INSTALL_STYLES'				=> 'Megjelenések telepítése',
	'INSTALL_STYLES_EXPLAIN'		=> 'Itt telepíteni tudod az új stílust.<br>Ha nem találod a lent lévő listában, akkor ellenőrizd, hogy már telepítésre került-e. Ha nincs telepítve, nézd meg, hogy megfelelően került-e feltöltésre.', //? style
	'INVALID_STYLE_ID'			=> 'Érvénytelen stílus azonosító.',

	'NO_MATCHING_STYLES_FOUND'	=> 'Nincs a feltételeknek megfelelő megjelenés.',
	'NO_UNINSTALLED_STYLE'		=> 'Nincs telepítetlen megjelenés.',

	'PURGED_CACHE'				=> 'Gyorsítótár törölve.', //? Cache was purged

	'REQUIRES_STYLE'			=> 'Ennek a megjelenésnek szüksége van rá, hogy a "%s" megjelenés telepítve legyen.', //? style

	'STYLE_ACTIVATE'			=> 'Aktiválás',
	'STYLE_ACTIVE'				=> 'Aktív',
	'STYLE_DEACTIVATE'			=> 'Deaktiválás',
	'STYLE_DEFAULT'				=> 'Alapértelmezett megjelenéssé tétel',
	'STYLE_DEFAULT_CHANGE_INACTIVE'	=> 'Engedélyeznek kell a megjelenést, mielőtt alapértelmezett megjelenésnek állítanád be.',
	'STYLE_ERR_INVALID_PARENT'	=> 'Érvénytelen szülő megjelenés.',
	'STYLE_ERR_NAME_EXIST'		=> 'Már létezik megjelenés ilyen névvel.',
	'STYLE_ERR_STYLE_NAME'		=> 'Meg kell adnod a megjelenés nevét.',
	'STYLE_INSTALLED'			=> 'A "%s" megjelenés telepítésre került.',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> 'Vissza a telepített megjelenésekhez', //? megjelenések listájához
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> 'További megjelenések telepítése',
	'STYLE_NAME'				=> 'Megjelenés neve',
	'STYLE_NAME_RESERVED'		=> 'A "%s" megjelenés nem telepíthető, mert a neve fenntartott szót tartalmaz.', //? name reserved
	'STYLE_NOT_INSTALLED'		=> '"%s" megjelenés nincs telepítve.', //? style
	'STYLE_PATH'				=> 'Megjelenés elérési útja',
	'STYLE_UNINSTALL'			=> 'Eltávolítás',
	'STYLE_UNINSTALL_DEPENDENT'	=> 'A "%s" megjelenés nem távolítható el, amíg van rá épülő megjelenés telepítve.',
	'STYLE_UNINSTALLED'			=> '"%s" megjelenés sikeresen eltávolításra került.',
	'STYLE_PHPBB_VERSION'		=> 'phpBB verziója', // ? phpBB Version
	'STYLE_USED_BY'				=> 'Használók száma (robotok beleértve)',
	'STYLE_VERSION'				=> 'Megjelenés verziója',

	'UNINSTALL_PROSILVER'		=> 'Nem távolíthatod el a “prosilver” megjelenést.',
	'UNINSTALL_DEFAULT'		=> 'Nem távolíthatod el az alapértelmezett megjelenést.',

	'BROWSE_STYLES_DATABASE'	=> 'A phpBB.com megjelenés adatbázisának böngészése',
));
