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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> 'Automatikus megtisztítás utolsó hozzászólás ideje alapján', //?
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'A téma a bele érkezett utolsó hozzászólás után ennyi nap elteltével kerül eltávolításra.',
	'AUTO_PRUNE_FREQ'			=> 'Automatikus megtisztítás gyakorisága',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'A megtisztítások között eltelt idő napokban.',
	'AUTO_PRUNE_VIEWED'			=> 'Automatikus megtisztítás utolsó megtekintés ideje alapján', //?
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'A téma az utolsó megtekintés után ennyi nap elteltével kerül eltávolításra.',
	'AUTO_PRUNE_SHADOW_FREQ'	=> 'Árnyék témák automatikus megtisztításának gyakorisága',
	'AUTO_PRUNE_SHADOW_DAYS'	=> 'Automatikusan megtisztítandó árnyék témák kora',
	'AUTO_PRUNE_SHADOW_DAYS_EXPLAIN'	=> 'Napok száma, ami után az árnyék téma törlésre kerül.',
	'AUTO_PRUNE_SHADOW_FREQ_EXPLAIN'	=> 'Két automatikus megtisztítás közötti napok száma.',

	'CONTINUE'						=> 'Folytatás',
	'COPY_PERMISSIONS'				=> 'Jogosultságok másolása',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Az új fórum jogosultságbeállításának megkönnyítése érdekében a jogosultságokat egy az egyben átmásolhatod egy másik fórumról.',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'A létrehozás után a fórum ugyanazokkal a jogosultságokkal fog rendelkezni, mint az itt kiválasztott. Ha nem választasz ki fórumot, az újonnan létrehozott fórum nem lesz látható, amíg be nem állítod a rá vonatkozó jogosultságokat.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Ha kiválasztasz egy fórumot, a fórum ugyanazokkal a jogosultságokkal fog rendelkezni, mint az itt kiválasztott. Ezzel az összes korábban beállított jogosultság felülírásra kerül a kiválasztott fórum jogosultságaival. Ha nem választasz ki fórumot, a jelenlegi jogosultságok lesznek megtartva.',
	'COPY_TO_ACL'					=> 'Vagy %súj jogosultságokat is beállíthatsz%s a fórumnak.',
	'CREATE_FORUM'					=> 'Új fórum létrehozása',

	'DECIDE_MOVE_DELETE_CONTENT'		=> 'Tartalom törlése vagy áthelyezése másik fórumba',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'Alfórumok törlése vagy áthelyezése másik fórumba',
	'DEFAULT_STYLE'						=> 'Alapértelmezett megjelenés',
	'DELETE_ALL_POSTS'					=> 'Hozzászólások törlése',
	'DELETE_SUBFORUMS'					=> 'Alfórumok és hozzászólások törlése',
	'DISPLAY_ACTIVE_TOPICS'				=> 'Aktív témák bekapcsolása',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'Ha igenre van állítva, a kiválasztott alfórumok aktív témái megjelenítésre kerülnek ebben a kategóriában.',

	'EDIT_FORUM'					=> 'Fórum szerkesztése',
	'ENABLE_INDEXING'				=> 'Keresőindexelés bekapcsolása',
	'ENABLE_INDEXING_EXPLAIN'		=> 'Ha igenre van állítva, a fórum hozzászólásai indexelésre kerülnek a kereséshez.',
	'ENABLE_POST_REVIEW'			=> 'Hozzászólás-újraáttekintés bekapcsolása', //? felülviszgálat
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Ha igenre van állítva, és egy hozzászólás írása közben másvalaki új üzenetet ír a témába, a felhasználó az elküldés előtt újra áttekintheti a hozzászólását annak fényében. Csevegő fórumoknál ajánlott kikapcsolni.',
	'ENABLE_QUICK_REPLY'			=> 'Gyors válasz bekapcsolása',
	'ENABLE_QUICK_REPLY_EXPLAIN'	=> 'Bekapcsolja a gyors választ ebben a fórumban. Ez a beállítás nem kerül figyelembe vételre, ha a fórumon globálisan ki van kapcsolva a gyors válasz funkció. A gyors válasz doboz csak akkor jelenik meg, ha a felhasználó jogosult a fórumba írni.',
	'ENABLE_RECENT'					=> 'Aktív témák megjelenítése',
	'ENABLE_RECENT_EXPLAIN'			=> 'Ha igenre van állítva, az ebbe a fórumba beküldött témák az aktív témák között is megjelennek.',
	'ENABLE_TOPIC_ICONS'			=> 'Téma ikonok bekapcsolása',

	'FORUM_ADMIN'						=> 'Fórum adminisztráció',
	'FORUM_ADMIN_EXPLAIN'				=> 'A phpBB3-ban minden fórum alapú. A kategóriák is speciális fórumok. Minden fórumnak korlátlan számú alfóruma lehet, és mindegyiknél megadható, hogy lehessen-e bele hozzászólást küldeni (azaz úgy viselkedjen-e, mint egy régi kategória). Itt hozzáadhatsz, valamint szerkesztheted, törölheted, lezárhatod és megnyithatod a fórumokat, illetve további beállításokat is végezhetsz. Ha a hozzászólások és a témák nincsenek szinkronban, akkor használhatod az újraszinkronizációt. <strong>Az újonnan készített fórumoknál le kell másolnod, vagy be kell állítanod a jogosultságokat, hogy láthatók legyenek.</strong>', //? 'Az újonnan készített fórumok láthatóvá tételéhez, le kell másolnod, vagy be kell állítanod a jogosultságokat.'
	'FORUM_AUTO_PRUNE'					=> 'Automatikus megtisztítás bekapcsolása',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'Törli a fórumból a régi témákat.',
	'FORUM_CREATED'						=> 'A fórum sikeresen létrehozásra került.',
	'FORUM_DATA_NEGATIVE'				=> 'A megtisztítás paraméterek nem lehetnek negatívak.',
	'FORUM_DESC_TOO_LONG'				=> 'A fórum leírása túl hosszú, 4000 karakternél rövidebbnek kell lennie.',
	'FORUM_DELETE'						=> 'Fórum törlése',
	'FORUM_DELETE_EXPLAIN'				=> 'Az alábbi űrlap segítségével törölheted a fórumot. Ha a fórumba lehetett hozzászólást küldeni, megválaszthatod, hogy mit szeretnél csinálni a benne lévő témákkal (vagy fórumokkal).',
	'FORUM_DELETED'						=> 'A fórum sikeresen törlésre került.',
	'FORUM_DESC'						=> 'Leírás',
	'FORUM_DESC_EXPLAIN'				=> 'A HTML kódok sima szövegként lesznek megjelenítve. Ha a kiválasztott fórum típusa kategória, a leírás nincs használatban.', // ? If the selected forum type is a category the description is not used.
	'FORUM_EDIT_EXPLAIN'				=> 'Az alábbi űrlap segítségével testreszabhatod a fórumot. Kérjük, vedd figyelembe, hogy a moderációs és hozzászólás-számlálási beállítások minden felhasználónak vagy csoportnak egyedileg állíthatók be a jogosultságok használatával.',
	'FORUM_IMAGE'						=> 'Fórum kép',
	'FORUM_IMAGE_EXPLAIN'				=> 'A fórumhoz társított kiegészítő kép relatív elérési útja, a phpBB gyökérkönyvtárától viszonyítva.',
	'FORUM_IMAGE_NO_EXIST'				=> 'A megadott fórum kép nem létezik.',
	'FORUM_LINK_EXPLAIN'				=> 'Az oldal teljes URL-je (a protokollt beleértve), ami be fog jönni, ha a felhasználó a fórumra kattint, pl. <samp>http://www.phpbb.com/</samp>.',
	'FORUM_LINK_TRACK'					=> 'Link átirányítások követése',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'Számolja hányszor kattintottak a linkre.',
	'FORUM_NAME'						=> 'Fórum neve',
	'FORUM_NAME_EMPTY'					=> 'Nevet kell adnod a fórumnak.',
	'FORUM_NAME_EMOJI'					=> 'A megadott fórum név érvénytelen.<br>A következő nem támogatott karaktereket tartalmazza:<br>%s',
	'FORUM_PARENT'						=> 'Szülő fórum',
	'FORUM_PASSWORD'					=> 'Fórum jelszó',
	'FORUM_PASSWORD_CONFIRM'			=> 'Fórum jelszó megerősítés',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Csak akkor kell megadni, ha a fórum jelszót is kitöltötted.',
	'FORUM_PASSWORD_EXPLAIN'			=> 'A fórum csak ezzel a jelszóval lesz elérhető. Ajánlott inkább a jogosultságrendszert használni.',
	'FORUM_PASSWORD_UNSET'				=> 'Fórum jelszó eltávolítása',
	'FORUM_PASSWORD_UNSET_EXPLAIN'		=> 'Kattints ide, ha törölni akarod a fórum jelszót.',
	'FORUM_PASSWORD_OLD'				=> 'A fórum jelszó régi kódolási eljárást használ, ezért meg kell változtatni.',
	'FORUM_PASSWORD_MISMATCH'			=> 'A megadott jelszavak nem egyeznek meg.',
	'FORUM_PRUNE_SETTINGS'				=> 'Fórum megtisztítás beállítások',
	'FORUM_PRUNE_SHADOW'				=> 'Árnyék témák automatikus megtisztításának engedélyezése',
	'FORUM_PRUNE_SHADOW_EXPLAIN'			=> 'A fórum árnyék témáinak automatikus megtisztítása, a gyakoriságot lejjebb adhatod meg.', //?
	'FORUM_RESYNCED'					=> 'A „%s” fórum sikeresen újraszinkronizálásra került.',
	'FORUM_RULES_EXPLAIN'				=> 'A fórum szabályok az adott fórum összes oldalán megjelennek.',
	'FORUM_RULES_LINK'					=> 'Link a fórum szabályokhoz',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'Megadhatsz egy URL-t az oldalra/hozzászóláshoz, mely tartalmazza a fórum szabályokat. Ez a beállítás felülírja az alább megadott fórum szabályok szöveget.',
	'FORUM_RULES_PREVIEW'				=> 'Fórum szabályok előnézet',
	'FORUM_RULES_TOO_LONG'				=> 'A fórum szabályok szövegének rövidebbnek kell lennie 4000 karakternél.',
	'FORUM_SETTINGS'					=> 'Fórum beállítások',
	'FORUM_STATUS'						=> 'Fórum állapota',
	'FORUM_STYLE'						=> 'Fórum megjelenés',
	'FORUM_TOPICS_PAGE'					=> 'Témák száma oldalanként',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'Ha nem nullát adsz meg, ez a beállítás felül fogja írni az alapértelmezett oldalankénti témaszám beállítást.',
	'FORUM_TYPE'						=> 'Fórum típusa',
	'FORUM_UPDATED'						=> 'A fórum információk sikeresen frissítésre kerültek.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'Ennek a fórumnak alfórumai vannak, és eddig lehetett bele hozzászólást küldeni. Most, hogy linkké szeretnéd változtatni, a folytatás előtt, kérjük, mozgasd ki a fórum alfórumait, mivel az átalakítás után a kapcsolódó alfórumok nem lesznek láthatóak.', //? fogalmazás

	'GENERAL_FORUM_SETTINGS'	=> 'Általános fórum beállítások',

	'LINK'						=> 'Link',
	'LIMIT_SUBFORUMS'			=> 'Csak közvetlen gyerek-alfórumok felsorolása', //? Limit legend to direct child-subforums
	'LIMIT_SUBFORUMS_EXPLAIN'	=> 'A szülő fórum magyarázatában csak a közvetlen (gyerek) alfórumokat jeleníti meg. Kikapcsolásakor az összes olyan alfórumot (és azok alfórumait) megjeleníti, ahol az „Alfórumok megjelenítése a magyarázatban” beállítása igenre van állítva.', //? Limits the subforums to be displayed to subforums that are direct descendants (children) of the current forum. Disabling this will display all subforums with the “List subforums in legend” option enabled, regardless of depth.
	'LIST_INDEX'				=> 'Alfórumok felsorolása a szülő fórum magyarázatában',
	'LIST_INDEX_EXPLAIN'		=> 'A fórum megjelenítése linkként a kezdőlapon és a többi helyen a szülő fórumának leírásában, ha a szülő fórum „Alfórumok megjelenítése a magyarázatban” beállítása igenre van állítva.',
	'LIST_SUBFORUMS'			=> 'Alfórumok megjelenítése a magyarázatban',
	'LIST_SUBFORUMS_EXPLAIN'	=> 'A fórum alfórumainak megjelenítése linkként a kezdőlapon és a többi helyen a magyarázatban, ha az alfórumok „Alfórumok felsorolása a szülő fórum magyarázatában” beállítása igenre van állítva.',
	'LOCKED'					=> 'Lezárt',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'A fórumba, melyet kiválasztottál a hozzászólások új helyéül, nem lehet hozzászólást küldeni. Kérünk, válassz ki egy olyan fórumot, amibe lehet hozzászólást küldeni.', //? fogalmazás
	'MOVE_POSTS_TO'					=> 'Hozzászólások áthelyezése:',
	'MOVE_SUBFORUMS_TO'				=> 'Alfórumok áthelyezése:',

	'NO_DESTINATION_FORUM'			=> 'Nem adtál meg fórumot, ahova a tartalmat át lehetne helyezni.',
	'NO_FORUM_ACTION'				=> 'Nem adtad meg mi történjen a fórum tartalmával.',
	'NO_PARENT'						=> 'Nincs szülő',
	'NO_PERMISSIONS'				=> 'Ne másolja a jogosultságokat',
	'NO_PERMISSION_FORUM_ADD'		=> 'Nincs meg a szükséges jogosultságod fórum hozzáadásához.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'Nincs meg a szükséges jogosultságod fórum törléséhez.',

	'PARENT_IS_LINK_FORUM'		=> 'A megadott szülő egy link fórum. A link fórumok nem tartalmazhatnak további fórumokat, kérünk, a szülő fórumnak adj meg egy kategóriát vagy egy fórumot.',
	'PARENT_NOT_EXIST'			=> 'A szülő nem létezik.',
	'PRUNE_ANNOUNCEMENTS'		=> 'Csatolmányok megtisztítása',
	'PRUNE_STICKY'				=> 'Kiemeltek megtisztítása',
	'PRUNE_OLD_POLLS'			=> 'Régi szavazások megtisztítása',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Törli a témákat, melyek szavazásaiba nem érkezett szavazat a hozzászólás megtisztítás korláttal megegyező ideje.',

	'REDIRECT_ACL'	=> 'Most %sbeállíthatod a fórum jogosultságait%s.',

	'SYNC_IN_PROGRESS'			=> 'Fórum szinkronizálása',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Jelenleg a %1$d/%2$d közötti témák újraszinkronizálása folyik.', //? fogalmazás

	'TYPE_CAT'			=> 'Kategória',
	'TYPE_FORUM'		=> 'Fórum',
	'TYPE_LINK'			=> 'Link',

	'UNLOCKED'			=> 'Nyitott',
));
