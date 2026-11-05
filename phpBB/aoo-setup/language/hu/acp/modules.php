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

$lang = array_merge($lang, array(
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Itt a modulokat tudod kezelni. Kérjük, vedd figyelembe, hogy az AVP-nek háromszintű menüstruktúrája van (kategória -> kategória -> modul), míg a többi kétszintű menüstruktúrával rendelkezik (kategória -> modul), amit meg kell tartani. Arra is ügyelj, hogy ne zárd ki magad, mivel ha kikapcsolod vagy törlöd a modulkezelésért felelős modult, ez is megtörténhet.',
	'ADD_MODULE'					=> 'Modul hozzáadása',
	'ADD_MODULE_CONFIRM'			=> 'Biztosan hozzá akarod adni a kiválasztott modult a kiválasztott móddal?',
	'ADD_MODULE_TITLE'				=> 'Modul hozzáadása',

	'CANNOT_REMOVE_MODULE'	=> 'A modult nem lehet eltávolítani, hozzá vannak rendelve gyerekek. Kérünk, először mozgasd ki az összes gyerek modult a modul alól, hogy a művelet végrehajtható legyen.',
	'CATEGORY'				=> 'Kategória',
	'CHOOSE_MODE'			=> 'Modul módjának kiválasztása',
	'CHOOSE_MODE_EXPLAIN'	=> 'Válaszd ki a modul használandó módját.',
	'CHOOSE_MODULE'			=> 'Modul kiválasztása',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Válaszd ki a modul által meghívandó állományt.',
	'CREATE_MODULE'			=> 'Új modul létrehozása',

	'DEACTIVATED_MODULE'	=> 'Modul deaktiválása',
	'DELETE_MODULE'			=> 'Modul törlése',
	'DELETE_MODULE_CONFIRM'	=> 'Biztosan el akarod távolítani ezt a modult?',

	'EDIT_MODULE'			=> 'Modul szerkesztése',
	'EDIT_MODULE_EXPLAIN'	=> 'Itt modulspecifikus adatokat adhatsz meg.',

	'HIDDEN_MODULE'			=> 'Rejtett modul',

	'MODULE'					=> 'Modul',
	'MODULE_ADDED'				=> 'A modul sikeresen hozzáadásra került.',
	'MODULE_DELETED'			=> 'A modul sikeresen eltávolításra került.',
	'MODULE_DISPLAYED'			=> 'Modul megjelenítése',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Ha nem szeretnéd, hogy a modul megjelenjen, de szeretnéd használni, állítsd nemre.',
	'MODULE_EDITED'				=> 'A modul sikeresen szerkesztésre került.',
	'MODULE_ENABLED'			=> 'Modul bekapcsolása',
	'MODULE_LANGNAME'			=> 'Modul nyelvi neve',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Add meg a megjelenített modulnevet. Használj nyelvi állandót, ha a név nyelvi állományból jön.',
	'MODULE_TYPE'				=> 'Modul típusa',

	'NO_CATEGORY_TO_MODULE'	=> 'A kategóriát nem lehet modullá alakítani. Kérjük, először töröld/mozgasd át a kategória gyerekeit, hogy a művelet elvégezhető legyen.',
	'NO_MODULE'				=> 'Nem található modul.',
	'NO_MODULE_ID'			=> 'Nincs modulazonosító megadva.',
	'NO_MODULE_LANGNAME'	=> 'Nem adtad meg a modul nyelvi nevét.',
	'NO_PARENT'				=> 'Nincs szülő',

	'PARENT'				=> 'Szülő',
	'PARENT_NO_EXIST'		=> 'A szülő nem létezik.',

	'SELECT_MODULE'			=> 'Válassz egy modult',
));
