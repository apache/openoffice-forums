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
	'APPROVE'								=> 'Jóváhagyás', //?
	'ATTACHMENT'						=> 'Csatolmány',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'A csatolmány funkciók nem elérhetők.', //? ki lettek kapcsolva

	'BOOKMARK_ADDED'		=> 'A téma sikeresen hozzáadásra került a kedvencekhez.',
	'BOOKMARK_ERR'			=> 'A témát nem sikerült hozzáadni a kedvencekhez. Kérünk, próbálkozz újra.',
	'BOOKMARK_REMOVED'		=> 'A téma sikeresen eltávolításra került a kedvencekből.',
	'BOOKMARK_TOPIC'		=> 'Hozzáadás a kedvencekhez',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Törlés a kedvencekből',
	'BUMPED_BY'				=> 'Utoljára %1$s ugrasztotta előre %2$s-kor.', //? bump - na ennek ki tud egy magyar megfelelőt?
	'BUMP_TOPIC'			=> 'Előreugrasztás', //? 'Téma előreugrasztása'

	'DELETE_TOPIC'			=> 'Téma törlése',
	'DELETED_INFORMATION'	=> '%1$s törölte %2$s-kor',
	'DISAPPROVE'					=> 'Elutasítás', //?
	'DOWNLOAD_NOTICE'		=> 'Nincs meg a kellő jogosultságod a hozzászóláshoz csatolt állományok megtekintéséhez.',

	'EDITED_TIMES_TOTAL'	=> array(
		1	=> 'A hozzászólást %1$d alkalommal szerkesztették, utoljára %2$s %3$s-kor.', //? 'Utoljára %1$s szerkesztette %2$s-kor; szerkesztések száma: %3$d.'
		2	=> 'A hozzászólást %1$d alkalommal szerkesztették, utoljára %2$s %3$s-kor.',
	),
	'EMAIL_TOPIC'			=> 'Barát értesítése e-mailben', //? email friend -> email topic
	'ERROR_NO_ATTACHMENT'	=> 'A csatolmány már nem létezik.',

	'FILE_NOT_FOUND_404'	=> 'A <strong>%s</strong> fájl nem létezik.',
	'FORK_TOPIC'			=> 'Téma másolása',
	'FULL_EDITOR'			=> 'Teljes szerkesztő &amp; Előnézet',

	'LINKAGE_FORBIDDEN'		=> 'Nem vagy jogosult az oldalt megtekinteni, letölteni róla vagy linkelni rá.', //? fogalmam sincs...
	'LOGIN_NOTIFY_TOPIC'	=> 'Értesítve lettél erről a témáról. Lépj be, hogy megtekinthesd.',
	'LOGIN_VIEWTOPIC'		=> 'A téma megtekintéséhez be kell jelentkezned.',

	'MAKE_ANNOUNCE'				=> 'Közleménnyé tétel',
	'MAKE_GLOBAL'				=> 'Globális közleménnyé tétel',
	'MAKE_NORMAL'				=> 'Normál témává tétel',
	'MAKE_STICKY'				=> 'Kiemeltté tétel',
	'MAX_OPTIONS_SELECT'		=> array(
		1	=> '<strong>%d</strong> választási lehetőségre szavazhatsz.',
		2	=> '<strong>%d</strong> választási lehetőségre szavazhatsz.',
	),
	'MISSING_INLINE_ATTACHMENT'	=> 'A <strong>%s</strong> csatolmány már nem érhető el.',
	'MOVE_TOPIC'				=> 'Téma áthelyezése',

	'NO_ATTACHMENT_SELECTED'=> 'Nem választottál ki csatolmányt a letöltéshez vagy megtekintéshez.',
	'NO_NEWER_TOPICS'		=> 'Nincs újabb téma a fórumban.',
	'NO_OLDER_TOPICS'		=> 'Nincs régebbi téma a fórumban.',
	'NO_UNREAD_POSTS'		=> 'Nincs új olvasatlan hozzászólás a témában.',
	'NO_VOTE_OPTION'		=> 'A szavazáshoz meg kell adnod egy választási lehetőséget.',
	'NO_VOTES'				=> '0 szavazat', //? 'Nincs szavazat'
	'NO_AUTH_PRINT_TOPIC'	=> 'Nincs jogod a téma nyomtatására.',

	'POLL_ENDED_AT'			=> 'A szavazás %s-kor befejeződött.',
	'POLL_RUN_TILL'			=> 'A szavazás %s-ig van érvényben.',
	'POLL_VOTED_OPTION'		=> 'Erre a lehetőségre szavaztál',
	'POST_DELETED_RESTORE'	=> 'A hozzászólás törölve lett, azonban később visszaállítható.',
	'PRINT_TOPIC'			=> 'Nyomtatóbarát verzió',

	'QUICK_MOD'				=> 'Gyors moderátori eszközök', //??
	'QUICKREPLY'			=> 'Gyors válasz',

	'REPLY_TO_TOPIC'		=> 'Hozzászólás a témához',
	'RESTORE'				=> 'Visszaállítás',
	'RESTORE_TOPIC'			=> 'Téma visszaállítása',
	'RETURN_POST'			=> '%sVissza a hozzászóláshoz%s',

	'SUBMIT_VOTE'			=> 'Szavazat elküldése', //? szavazás?

	'TOPIC_TOOLS'			=> 'Téma eszközök', //? topic tools
	'TOTAL_VOTES'			=> 'Szavazatok száma',

	'UNLOCK_TOPIC'			=> 'Téma megnyitása',

	'VIEW_INFO'				=> 'Hozzászólás adatai',
	'VIEW_NEXT_TOPIC'		=> 'Következő téma',
	'VIEW_PREVIOUS_TOPIC'	=> 'Előző téma',
	'VIEW_RESULTS'			=> 'Eredmény megtekintése',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> '%d hozzászólás',
		2	=> '%d hozzászólás',
	),
	'VIEW_UNREAD_POST'		=> 'Első olvasatlan hozzászólás',
	'VOTE_SUBMITTED'		=> 'A szavazatod sikeresen eltárolásra került.',
	'VOTE_CONVERTED'		=> 'A szavazatváltoztatás konvertált szavazásoknál nem támogatott.',
));
