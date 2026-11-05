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
	'ADMIN_SIG_PREVIEW'		=> 'Aláírás előnézet',
	'AT_LEAST_ONE_FOUNDER'	=> 'Nem léptetheted vissza ezt az alapítót sima felhasználóvá. A fórumon lennie kell legalább egy alapítónak. Ha meg akarod változtatni a felhasználó alapító státuszát, előbb léptess elő egy másik felhasználót alapítóvá.',

	'BAN_ALREADY_ENTERED'	=> 'A kitiltás már korábban sikeresen megadásra került. A kitiltási lista nem lett frissítve.',
	'BAN_SUCCESSFUL'		=> 'A kitiltás sikeresen megadásra került.', //?

	'CANNOT_BAN_ANONYMOUS'			=> 'Nem tilthatod ki a vendég felhasználót. A vendég felhasználó jogosultságai a Jogosultságok fül alatt módosíthatók.',

	'CANNOT_BAN_FOUNDER'			=> 'Alapítói azonosítót nem tudsz kitiltani.',
	'CANNOT_BAN_YOURSELF'			=> 'Nem tudod kitiltani saját magadat.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Robot azonosítókat nem tudsz deaktiválni. Helyette deaktiváld a robotot a robotok oldalon.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Alapítói azonosítót nem tudsz deaktiválni.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'A saját azonosítód nem tudod deaktiválni.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Robot azonosítókat nem tudsz újraaktivációra kötelezni. Helyette aktiváld újra a robotot a robotok oldalon.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Alapítói azonosítókat nem tudsz újraaktivációra kötelezni.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'A saját azonosítód nem tudod újraaktivációra kötelezni.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'A vendég felhasználói azonosítót nem tudod eltávolítani.',
	'CANNOT_REMOVE_FOUNDER'			=> 'Alapítói azonosítót nem tudsz eltávolítani.',
	'CANNOT_REMOVE_YOURSELF'		=> 'A saját azonosítód nem tudod eltávolítani.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Mellőzött felhasználókat nem tudsz alapítóvá előléptetni.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Aktiválnod kell a felhasználókat, mielőtt előléptethetnéd őket alapítóvá, csak aktivált felhasználókat lehet előléptetni.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Csak akkor kell megadnod, ha megváltoztatod a felhasználó e-mail címét.',

	'DELETE_POSTS'			=> 'Hozzászólásainak törlése',
	'DELETE_USER'			=> 'Felhasználó törlése',
	'DELETE_USER_EXPLAIN'	=> 'Kérjük, vedd figyelembe, hogy egy felhasználó törlése végleges, később nem lehet visszaállítani. A felhasználó által küldött, még olvasatlan privát üzenetek is törlésre kerülnek és nem lesznek elérhetőek a címzettek számára.',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Az újraaktivációra kötelezés sikeresen megtörtént.',
	'FOUNDER'						=> 'Alapító',
	'FOUNDER_EXPLAIN'				=> 'Az alapítók az összes adminisztrációs jogosultsággal rendelkeznek, és nem alapító tagok soha nem tilthatják ki, nem törölhetik őket, illetve nem változtathatják meg a beállításaikat.',

	'GROUP_APPROVE'					=> 'Tag jóváhagyása',
	'GROUP_DEFAULT'					=> 'Csoport elsődlegessé tétele a tagnak',
	'GROUP_DELETE'					=> 'Tag törlése a csoportból',
	'GROUP_DEMOTE'					=> 'Csoportvezető visszaléptetése',
	'GROUP_PROMOTE'					=> 'Előléptetés csoportvezetőnek',

	'IP_WHOIS_FOR'			=> 'IP adatok a %s IP-címhez',

	'LAST_ACTIVE'			=> 'Utoljára aktív',

	'MOVE_POSTS_EXPLAIN'	=> 'Kérünk, válaszd ki a fórumot, amelybe át szeretnéd mozgatni a felhasználó által küldött összes hozzászólást.',

	'NO_SPECIAL_RANK'		=> 'Nincs speciális rang hozzárendelve',
	'NO_WARNINGS'			=> 'Nincs kitiltás.',
	'NOT_MANAGE_FOUNDER'	=> 'Alapító státusszal rendelkező felhasználót próbáltál meg kezelni. Csak alapítók kezelhetik a többi alapítót.',

	'QUICK_TOOLS'			=> 'Gyorseszközök',

	'REGISTERED'			=> 'Regisztrált',
	'REGISTERED_IP'			=> 'Regisztrálási IP',
	'RETAIN_POSTS'			=> 'Hozzászólásainak megtartása',

	'SELECT_FORM'			=> 'Űrlap kiválasztása',
	'SELECT_USER'			=> 'Felhasználó kiválasztása',

	'USER_ADMIN'					=> 'Felhasználó adminisztráció',
	'USER_ADMIN_ACTIVATE'			=> 'Azonosító aktiválása',
	'USER_ADMIN_ACTIVATED'			=> 'A felhasználó sikeresen aktiválásra került.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Az avatar sikeresen eltávolításra került a felhasználói azonosítóból.',
	'USER_ADMIN_BAN_EMAIL'			=> 'Kitiltás e-mail alapján',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'Felhasználókezelésnél kitiltott e-mail cím',
	'USER_ADMIN_BAN_IP'				=> 'Kitiltás IP alapján',
	'USER_ADMIN_BAN_IP_REASON'		=> 'Felhasználókezelésnél kitiltott IP-cím',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Felhasználókezelésnél kitiltott felhasználónév',
	'USER_ADMIN_BAN_USER'			=> 'Kitiltás felhasználónév alapján',
	'USER_ADMIN_DEACTIVATE'			=> 'Azonosító deaktiválása',
	'USER_ADMIN_DEACTIVED'			=> 'A felhasználó sikeresen deaktiválásra került.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Összes csatolmány törlése',
	'USER_ADMIN_DEL_AVATAR'			=> 'Avatar törlése',
	'USER_ADMIN_DEL_OUTBOX'			=> 'Kimenő PÜ mappa kiürítése',
	'USER_ADMIN_DEL_POSTS'			=> 'Összes hozzászólás törlése',
	'USER_ADMIN_DEL_SIG'			=> 'Aláírás törlése',
	'USER_ADMIN_EXPLAIN'			=> 'Itt a felhasználóid egyes adatait tudod megváltoztatni, illetve néhány beállításukat.',
	'USER_ADMIN_FORCE'				=> 'Újraaktivációra kötelezés',
	'USER_ADMIN_LEAVE_NR'			=> 'Eltávolítás az újjonan regisztráltak közül',
	'USER_ADMIN_MOVE_POSTS'			=> 'Összes hozzászólás áthelyezése',
	'USER_ADMIN_SIG_REMOVED'		=> 'Az aláírás sikeresen eltávolításra került a felhasználói azonosítótól.',
	'USER_ATTACHMENTS_REMOVED'		=> 'A felhasználó által feltöltött csatolmányok sikeresen eltávolításra kerültek.',
	'USER_AVATAR_NOT_ALLOWED'		=> 'Az avatar nem jeleníthető meg, mivel az avatarok ki vannak kapcsolva.',
	'USER_AVATAR_UPDATED'			=> 'A felhasználó avatar beállításai sikeresen frissítésre kerültek.',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'A jelenlegi avatart nem lehet megjeleníteni, mivel a típusa kikapcsolásra került.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Egyedi profil mezők',
	'USER_DELETED'					=> 'A felhasználó sikeresen törlésre került.',
	'USER_GROUP_ADD'				=> 'Felhasználó felvétele csoportba',
	'USER_GROUP_NORMAL'				=> 'Felhasználói csoportok, melyeknek a felhasználó tagja',
	'USER_GROUP_PENDING'			=> 'Csoportok függő tagsággal',
	'USER_GROUP_SPECIAL'			=> 'Előre meghatározott csoportok, melyeknek a felhasználó tagja',
	'USER_LIFTED_NR'				=> 'A felhasználó újjonnan regisztrált státusza sikeresen eltávolításra került.',
	'USER_NO_ATTACHMENTS'			=> 'Nincs megjelenítendő csatolt állomány.',
	'USER_NO_POSTS_TO_DELETE'			=> 'A felhasználónak nincs megtartható vagy törölhető hozzászólása.',
	'USER_OUTBOX_EMPTIED'			=> 'A felhasználó kimenő privát üzenet mappája sikeresen kiürítésre került.',
	'USER_OUTBOX_EMPTY'				=> 'A felhasználó kimenő privát üzenet mappája már eleve üres volt.',
	'USER_OVERVIEW_UPDATED'			=> 'A felhasználó adatai sikeresen frissítésre kerültek.',
	'USER_POSTS_DELETED'			=> 'A felhasználó által küldött hozzászólások sikeresen eltávolításra kerültek.',
	'USER_POSTS_MOVED'				=> 'A felhasználó hozzászólásai sikeresen átmozgatásra kerültek a célfórumba.',
	'USER_PREFS_UPDATED'			=> 'A felhasználó beállításai frissítésre kerültek.',
	'USER_PROFILE'					=> 'Felhasználó profilja',
	'USER_PROFILE_UPDATED'			=> 'A felhasználó profilja frissítésre került.',
	'USER_RANK'						=> 'Felhasználó rangja',
	'USER_RANK_UPDATED'				=> 'A felhasználó rangja frissítésre került.',
	'USER_SIG_UPDATED'				=> 'A felhasználó aláírása sikeresen frissítésre került.',
	'USER_WARNING_LOG_DELETED'		=> 'Nincs elérhető információ. Valószíleg a napló bejegyzés törlésre került.',
	'USER_TOOLS'					=> 'Alap eszközök', //?
));
