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
	'ALREADY_DEFAULT_GROUP'	=> 'A kiválasztott csoport már az elsődleges csoportod.', //?
	'ALREADY_IN_GROUP'		=> 'Már tagja vagy a kiválasztott csoportnak.',
	'ALREADY_IN_GROUP_PENDING'	=> 'Már kérelmezted a csatlakozást a csoporthoz.',

	'CANNOT_JOIN_GROUP'			=> 'Nem tudsz csatlakozni ehhez a csoporthoz. Csak nyitott és szabadon nyitott csoportokhoz csatlakozhatsz.',
	'CANNOT_RESIGN_GROUP'		=> 'Nem tudod lemondani a csoporttagságod ebben a csoportban. Csak nyitott és szabadon nyitott csoportokból léphetsz ki.',
	'CHANGED_DEFAULT_GROUP'		=> 'Az elsődleges csoport sikeresen megváltoztatásra került.',

	'GROUP_AVATAR'						=> 'Csoport avatar',
	'GROUP_CHANGE_DEFAULT'				=> 'Biztosan meg akarod változtatni az elsődleges csoportodat a „%s” csoportra?',
	'GROUP_CLOSED'						=> 'Zárt',
	'GROUP_DESC'						=> 'Csoport leírás',
	'GROUP_HIDDEN'						=> 'Rejtett',
	'GROUP_INFORMATION'					=> 'Csoport információ',
	'GROUP_IS_CLOSED'					=> 'Ez egy zárt csoport: új tagok csak a csoportvezető meghívására tudnak csatlakozni.',
	'GROUP_IS_FREE'						=> 'Ez egy teljesen nyitott csoport: minden új tagot szívesen látnak.', //?
	'GROUP_IS_HIDDEN'					=> 'Ez egy rejtett csoport: csak a csoport tagjai látják.',
	'GROUP_IS_OPEN'						=> 'Ez egy nyitott csoport: felhasználók kérhetik a felvételüket.',
	'GROUP_IS_SPECIAL'					=> 'Ez egy speciális csoport: a speciális csoportokat az adminisztrátor kezeli.',
	'GROUP_JOIN'						=> 'Csatlakozás a csoporthoz',
	'GROUP_JOIN_CONFIRM'				=> 'Biztosan csatlakozni akarsz a kiválasztott csoporthoz?',
	'GROUP_JOIN_PENDING'				=> 'Tagság kérelmezése',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Biztosan kérni akarod a felvételed a kiválasztott csoportba?',
	'GROUP_JOINED'						=> 'Sikeresen csatlakoztál a kiválasztott csoporthoz.',
	'GROUP_JOINED_PENDING'				=> 'Sikeresen kérelmezted a felvételed a csoportba. Kérjük, várj, míg egy csoportvezető elfogadja a jelentkezésed.',
	'GROUP_LIST'						=> 'Felhasználók kezelése',
	'GROUP_MEMBERS'						=> 'Csoporttagok',
	'GROUP_NAME'						=> 'Csoport neve',
	'GROUP_OPEN'						=> 'Nyitott',
	'GROUP_RANK'						=> 'Csoport rang',
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Lemondás a csoporttagságról',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Biztosan le akarod mondani a csoporttagságod a kiválasztott csoportban?',
	'GROUP_RESIGN_PENDING'				=> 'Függő csoporttagság lemondása',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Biztosan le akarod mondani a függő csoporttagságod a kiválasztott csoportban?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Sikeresen eltávolításra kerültél a kiválasztott csoportból.',
	'GROUP_RESIGNED_PENDING'			=> 'A függő csoporttagságod sikeresen törlésre került a kiválasztott csoportból.',
	'GROUP_TYPE'						=> 'Csoport típusa',
	'GROUP_UNDISCLOSED'					=> 'Rejtett csoport',
	'FORUM_UNDISCLOSED'					=> 'Rejtett fórum(ok) moderálása',

	'LOGIN_EXPLAIN_GROUP'	=> 'A csoport adatainak megtekintéséhez be kell jelentkezned.', //? a csoport?

	'NO_LEADERS'					=> 'Nem vagy egy csoport vezetője sem.',
	'NOT_LEADER_OF_GROUP'			=> 'A kért művelet nem végezhető el, mivel nem vagy a kiválasztott csoport vezetője.',
	'NOT_MEMBER_OF_GROUP'			=> 'A kért művelet nem végezhető el, mivel nem vagy a kiválasztott csoport tagja, vagy a csoporttagságod még nem lett jóváhagyva.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Nem mondhatsz le a csoporttagságodról az elsődleges csoportodban.',

	'PRIMARY_GROUP'		=> 'Elsődleges csoport',

	'REMOVE_SELECTED'		=> 'Kiválasztottak törlése',

	'USER_GROUP_CHANGE'			=> '„%1$s” csoportról „%2$s” csoportra',
	'USER_GROUP_DEMOTE'			=> 'Lemondás a csoportvezetőségről',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Biztosan le akarsz mondani a csoportvezetőségről a kiválasztott csoportban?',
	'USER_GROUP_DEMOTED'		=> 'Sikeresen lemondtál a csoportvezetőségről.',
));
