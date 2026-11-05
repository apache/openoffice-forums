<?php
/**
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) 2010-2013 Moxiecode Systems AB
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
	'PLUPLOAD_ADD_FILES'		=> 'Fájlok hozzáadása',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'Adj fájlokat a feltöltési sorhoz és kattints az indítás gombra.',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s már a feltöltési sorban van.',
	'PLUPLOAD_CLOSE'			=> 'Bezárás',
	'PLUPLOAD_DRAG'				=> 'Húzz ide fájlokat.',
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'Fájl kettőzési hiba.', //? Duplicate file error
	'PLUPLOAD_DRAG_TEXTAREA'	=> 'Hozzáadhatsz fájlokat azok üzenet dobozba húzásával is.', //?
	'PLUPLOAD_ERR_INPUT'		=> 'Nem sikerült a bemeneti stream megnyitása.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'Nem sikerült a feltöltött fájl átmozgatása.',
	'PLUPLOAD_ERR_OUTPUT'		=> 'Nem sikerült a kimeneti stream megnyitása.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'A fájl túl nagy:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'Fájl mennyiség hiba.', // count error
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'Érvénytelen fájlkiterjesztés:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'Elfogyott a szabad memória.',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'A feltöltés URL-je hibás vagy nem létezik.',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'Fájlkiterjesztés hiba.',
	'PLUPLOAD_FILE'				=> 'Fájl: %s',
	'PLUPLOAD_FILE_DETAILS'		=> 'Fájl: %s, méret: %d, maximális fájl méret: %d', //?
	'PLUPLOAD_FILENAME'			=> 'Fájlnév',
	'PLUPLOAD_FILES_QUEUED'		=> '%d fájl van a sorban',
	'PLUPLOAD_GENERIC_ERROR'	=> 'Általános hiba.',
	'PLUPLOAD_HTTP_ERROR'		=> 'HTTP hiba.',
	'PLUPLOAD_IMAGE_FORMAT'		=> 'A kép formátuma hibás vagy nem támogatott.',
	'PLUPLOAD_INIT_ERROR'		=> 'Inicializációs hiba.',
	'PLUPLOAD_IO_ERROR'			=> 'IO hiba.',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'N/A',
	'PLUPLOAD_SECURITY_ERROR'	=> 'Biztonsági error.',
	'PLUPLOAD_SELECT_FILES'		=> 'Válassz fájlokat',
	'PLUPLOAD_SIZE'				=> 'Méret',
	'PLUPLOAD_SIZE_ERROR'		=> 'Fájlméret hiba',
	'PLUPLOAD_STATUS'			=> 'Állapot',
	'PLUPLOAD_START_UPLOAD'		=> 'Feltöltés indítása', //?
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'Feltöltési sor indítása', //?
	'PLUPLOAD_STOP_UPLOAD'		=> 'Feltöltés leállítása', //?
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'Aktuális feltöltés leállítása', //?
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> '%d/%d fájl feltöltve',
));
