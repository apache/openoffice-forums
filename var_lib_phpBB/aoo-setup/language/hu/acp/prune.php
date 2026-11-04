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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Itt törölhetsz (vagy deaktiválhatsz) felhasználókat a fórumodról. Az azonosítók több különböző módon szűrhetők: hozzászólásszám, legutolsó aktivitás stb. alapján. Minden feltétel kombinálható, tehát például törölheteted csak azokat a felhasználókat, akik 2002-01-01 előtt voltak utoljára aktívak, és kevesebb mint 10 hozzászólásszal rendelkeznek. Adj meg * karaktert szöveges mezők joker karakterének. Feltételek helyett beírhatsz közvetlenül felhasználóneveket a szövegmezőbe, mindegyiket külön sorba. Vigyázz ezzel a funkcióval! Ha töröltél egy felhasználót, később nem lehet visszaállítani.', //? Use * as a wildcard for text fields.

	'CRITERIA'				=> 'Feltétel',

	'DEACTIVATE_DELETE'			=> 'Deaktiválás vagy törlés',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Válaszd ki, hogy deaktiválni vagy törölni szeretnéd teljesen a felhasználókat. Kérjük, vedd figyelmbe, hogy nincs mód a visszaállításra!',
	'DELETE_USERS'				=> 'Törlés',
	'DELETE_USER_POSTS'			=> 'Megtisztított felhasználók hozzászólásainak törlése', //?! félreérthető!
	'DELETE_USER_POSTS_EXPLAIN' => 'A törölt felhasználók hozzászólásai törölve legyenek-e. Nincs hatása ha a felhasználók deaktiválásra kerülnek.',

	'JOINED_EXPLAIN'			=> 'Adj meg egy dátumot <kbd>ÉÉÉÉ-HH-NN</kbd> formátumban. Add meg mindkét mezőt egy időszak megadásához, vagy hagyd üresen az egyiket nyitott intervallumhoz.', //?

	'LAST_ACTIVE_EXPLAIN'		=> 'Adj meg egy dátumot <kbd>ÉÉÉÉ-HH-NN</kbd> formátumban. Ha <kbd>0000-00-00</kbd>-t adsz meg, a soha be nem lépett felhasználók kerülnek törlésre – ebben az esetben a korábban/későbben feltétel nem lesz figyelembe véve.',

	'POSTS_ON_QUEUE'			=> 'Engedélyezésre váró hozzászólások',
	'PRUNE_USERS_GROUP_EXPLAIN'	=> 'Csak a kiválasztott csoport tagjai', //?
	'PRUNE_USERS_GROUP_NONE'	=> 'Minden csoport',

	'PRUNE_USERS_LIST'				=> 'Megtisztítandó felhasználók', //? ua mint feljebb
	'PRUNE_USERS_LIST_DELETE'		=> 'A felhasználók megtisztításához jelenleg megadott feltételekkel a következő azonosítók lesznek eltávolítva. A listáról felhasználókat hagyhatsz ki, ha kiveszed a felhasználónevük mellett lévő pipát.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'A felhasználók megtisztításához jelenleg megadott feltételekkel a következő azonosítók lesznek deaktiválva.',

	'SELECT_USERS_EXPLAIN'		=> 'Itt konkrét felhasználóneveket adj meg. Ha kitöltöd, ezek lesznek használva a fentebbi feltételektől függetlenül. Alapítókat nem lehet törölni.',

	'USER_DEACTIVATE_SUCCESS'	=> 'A kiválasztott felhasználók sikeresen deaktiválásra kerültek.',
	'USER_DELETE_SUCCESS'		=> 'A kiválasztott felhasználók sikeresen törlésre kerültek.',
	'USER_PRUNE_FAILURE'		=> 'A megadott feltételeknek nem felelt meg felhasználó.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'A megadott dátum hibás, <kbd>ÉÉÉÉ-HH-NN</kbd> formátumban kell megadni.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Ez törölni fog minden témát, amibe nem küldtek hozzászólást vagy nem tekintették meg az általad megadott napon belül. Ha nem adsz meg egy számot, az összes téma törölve lesz. Alapból nem fog eltávolítani olyan témákat, melyekben szavazás fut, illetve kiemelt témákat és közleményeket.',

	'FORUM_PRUNE'		=> 'Fórum megtisztítása',

	'NO_PRUNE'			=> 'Nem lett fórum megtisztítva.',

	'SELECTED_FORUM'	=> 'Kiválasztott fórum',
	'SELECTED_FORUMS'	=> 'Kiválasztott fórumok',

	'POSTS_PRUNED'					=> 'Megtisztított hozzászólások', //? félrevezető, fentebb
	'PRUNE_ANNOUNCEMENTS'			=> 'Közlemények megtisztítása', //? törlése?
	'PRUNE_FINISHED_POLLS'			=> 'Lezárt szavazások megtisztítása',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Törli a témákat, amikben a szavazás már befejeződött.',
	'PRUNE_FORUM_CONFIRM'			=> 'Biztosan meg akarod tisztítani a kiválasztott fórumokat a megadott beállításokkal? Miután a törlés megtörtént, nincs mód a törölt témák és hozzászólások visszaállítására.',
	'PRUNE_NOT_POSTED'				=> 'Utolsó hozzászólás óta eltelt napok száma',
	'PRUNE_NOT_VIEWED'				=> 'Utolsó megtekintés óta eltelt napok száma',
	'PRUNE_OLD_POLLS'				=> 'Régi szavazások megtisztítása',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Törli a témákat, melyekbe nem érkezett szavazat az utolsó hozzászólás beállításban megadott időtartam óta.',
	'PRUNE_STICKY'					=> 'Kiemeltek megtisztítása',
	'PRUNE_SUCCESS'					=> 'A fórumok megtisztítása sikeres volt.',

	'TOPICS_PRUNED'		=> 'Megtisztított témák',
));
