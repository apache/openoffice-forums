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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>A jogosultságok igen finoman állíthatók, és a következő négy főbb részbe vannak csoportosítva:</p>

		<h2>Globális jogosultságok</h2>
		<p>Ezekkel globális szinten lehet a hozzáféréseket szabályozni, a fórum egészére vonatkoznak. Tovább fel van osztva Felhasználók jogosultságaira, Csoportok jogosultságaira, Adminisztrátorokra és Globális moderátorokra.</p>

		<h2>Fórum alapú jogosultságok</h2>
		<p>Ezekkel az egyes fórumok hozzáférései szabályozhatók. Tovább fel van osztva Fórum jogosultságokra, Fórum moderátorokra, Felhasználók fórum jogosultságaira és Csoportok fórum jogosultságaira.</p>

		<h2>Jogosultság szerepek</h2>
		<p>Ezekkel jogosultságsémákat lehet létrehozni különböző hozzáférés-típusokhoz, melyeket később szerepként hozzá lehet rendelni felhasználókhoz/csoportokhoz. Az alap szerepeknek elvileg le kell fedniük midenféle fórum igényét, a kisebbektől a nagyobbakig, noha mind a négy részben lehetőséged van felvenni/szerkeszteni/törölni a szerepeket, ahogy jónak látod.</p>

		<h2>Effektív jogosultságok</h2>
		<p>Ezzel meg tudod nézni, hogy ténylegesen milyen jogosultságok érvényesülnek.</p>

		<br />

		<p>További információért a phpBB3 jogosultságkezeléséről és beállításáról lásd az angol <a href="https://www.phpbb.com/support/docs/en/3.3/ug/quickstart/permissions/">gyorstalpaló Setting permissions fejezetét</a>.</p>
	', //? további "honosítás"/lokalizáció...

	'ACL_NEVER'				=> 'Soha',
	'ACL_SET'				=> 'Jogosultságok beállítása',
	'ACL_SET_EXPLAIN'		=> 'A jogosultságok egy egyszerű <strong>IGEN</strong>/<strong>NEM</strong> rendszeren alapszanak. Ha egy jogosultságot <strong>SOHÁ</strong>ra állítasz, az felül fogja írni az összes többi értéket. Ha egy jogosultságnak nem kívánsz értéket adni, állítsd <strong>NEM</strong>re. Ha máshol hozzá lett rendelve egy érték, az lesz használva, ellenkező esetben a <strong>SOHA</strong> értéket veszi föl. A beállított jogosultságok minden (az előtte lévő jelölőnégyzettel) megjelölt elemre átmásolásra kerülnek.', //? egy kicsit jobb magyarázat jó lenne "Permissions are based on a simple <strong>YES</strong>/<strong>NO</strong> system. Setting an option to <strong>NEVER</strong> for a user or usergroup overrides any other value assigned to it. If you do not wish to assign a value for an option for this user or group select <strong>NO</strong>. If values are assigned for this option elsewhere they will be used in preference, else <strong>NEVER</strong> is assumed. All objects marked (with the checkbox in front of them) will copy the permission set you defined." 'A jogosultságok egy egyszerű <strong>IGEN</strong>/<strong>NEM</strong> rendszeren alapszanak. Alapból minden jogosultság a <strong>NEM</strong> értéket veszi fel, ezt lehet módosítani. Ha egy jogosultságot <strong>SOHÁ</strong>ra állítasz, az minden értéket felülír, és véglegesen <strong>NEM</strong> lesz. Ha egy jogosultságot <strong>IGEN</strong>re állítasz, az értelemszerűen igen lesz (kivéve ha előtte <strong>SOHÁ</strong>ra lett állítva).<br />Minden (az előtte lévő jelölőnégyzettel) megjelölt elemre átmásolásra kerülnek a beállított jogosultságok.'
	'ACL_SETTING'			=> 'Beállítás', //? 'Jogosultság' - nem véletlenül

	'ACL_TYPE_A_'			=> 'Adminisztrátori jogosultságok',
	'ACL_TYPE_F_'			=> 'Fórum jogosultságok',
	'ACL_TYPE_M_'			=> 'Moderátori jogosultságok',
	'ACL_TYPE_U_'			=> 'Felhasználói jogosultságok',

	'ACL_TYPE_GLOBAL_A_'	=> 'Adminisztrátori jogosultságok',
	'ACL_TYPE_GLOBAL_U_'	=> 'Felhasználói jogosultságok',
	'ACL_TYPE_GLOBAL_M_'	=> 'Globális moderátori jogosultságok',
	'ACL_TYPE_LOCAL_M_'		=> 'Fórum moderátori jogosultságok',
	'ACL_TYPE_LOCAL_F_'		=> 'Fórum jogosultságok',

	'ACL_NO'				=> 'Nem',
	'ACL_VIEW'				=> 'Jogosultságok megtekintése',
	'ACL_VIEW_EXPLAIN'		=> 'Itt egy felhasználó vagy egy csoport tényleges, effektív jogosultságait tudod megtekinteni. A piros négyzet azt jelöli, hogy az adott felhasználónak/csoportnak nincs olyan jogosultsága, míg a zöld négyzet azt, hogy rendelkezik az adott jogosultsággal.',
	'ACL_YES'				=> 'Igen',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Itt felhasználókhoz, illetve csoportokhoz adminisztrációs jogosultságokat tudsz rendelni. Minden adminisztrátori jogosultsággal rendelkező felhasználó láthatja az adminisztrátori vezérlőpultot.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Itt felhasználókat vagy csoportokat jelölhetsz ki fórum moderátoroknak. Felhasználóknak fórumhozzáférés biztosításához, globális moderátori jogosultságok kiosztásához vagy adminisztrátorok meghatározásához, kérjük, használd a megfelelő oldalt.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Itt meg tudod határozni, hogy melyik felhasználók, illetve csoportok férjenek hozzá az egyes fórumokhoz. Moderátorok kijelöléséhez vagy adminisztrátorok meghatározásához, kérjük, használd a megfelelő oldalt.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> 'Itt át tudod másolni egy fórum jogosultságait egy vagy több másik fórumra.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Itt globális moderátori jogosultságokat adhatsz a felhasználóknak vagy csoportoknak. Ezek a moderátorok ugyanolyanok, mint a többi moderátor, kivéve hogy minden fórumhoz van hozzáférésük.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Itt csoportoknak adhatsz fórum hozzáférést.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Itt globális jogosultságokat adhatsz a csoportoknak: felhasználói, globális moderátori és adminisztrátori jogosultságokat. A felhasználói jogosultságok szabályozzák például az avatarok használatát, privát üzenetek küldését stb.; a globális moderátori jogosultságok körébe tartozik a hozzászólások jóváhagyása, témák kezelése, kitiltások felügyelete stb.; végül pedig adminisztrátori jogosultságok birtokában lehet a jogosultságokat módosítani, egyéni BBCode-okat felvenni, a fórumokat kezelni stb. Külön, néhány felhasználó jogosultságait megváltoztatni nem ajánlott, helyette tanácsos a felhasználókat csoportba rakni, és a csoportnak meghatározni jogosultságokat.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Itt az adminisztrációs jogosultságokhoz lévő szerepeket tudod kezelni. A szerepek effektítv jogosultságként viselkednek, ha megváltoztatsz egy szerepet, akkor azon elemek jogosultsága is megváltozik, melyekhez a szerep hozzá van rendelve.', //? 'Itt az adminisztrációs jogosultságokat tartalmazó/rendelkező szerepeket tudod kezelni.'
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Itt a fórum jogosultságokhoz lévő szerepeket tudod kezelni. A szerepek effektítv jogosultságként viselkednek, ha megváltoztatsz egy szerepet, akkor azon elemek jogosultsága is megváltozik, melyekhez a szerep hozzá van rendelve.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Itt a moderátori jogosultságokhoz lévő szerepeket tudod kezelni. A szerepek effektítv jogosultságként viselkednek, ha megváltoztatsz egy szerepet, akkor azon elemek jogosultsága is megváltozik, melyekhez a szerep hozzá van rendelve.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Itt a felhasználói jogosultságokhoz lévő szerepeket tudod kezelni. A szerepek effektítv jogosultságként viselkednek, ha megváltoztatsz egy szerepet, akkor azon elemek jogosultsága is megváltozik, melyekhez a szerep hozzá van rendelve.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Itt felhasználóknak adhatsz fórumokhoz jogosultságokat.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Itt globális jogosultságokat adhatsz a felhasználóknak: felhasználói, globális moderátori és adminisztrátori jogosultságokat. A felhasználói jogosultságok szabályozzák például az avatarok használatát, privát üzenetek küldését stb.; a globális moderátori jogosultságok körébe tartozik a hozzászólások jóváhagyása, témák kezelése, kitiltások felügyelete stb.; végül pedig adminisztrátori jogosultságok birtokában lehet a jogosultságokat módosítani, egyéni BBCode-okat felvenni, a fórumokat kezelni stb. Nagy számú felhasználó jogosultságainak megváltoztatásához a csoport jogosultságok használata ajánlott. Külön felhasználók jogosultságainak megváltoztatására csak ritkán lehet szükség, helyette tanácsos a felhasználókat csoportba rakni, és a csoportnak meghatározni jogosultságokat.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Itt meg tudod tekinteni a kiválasztott felhasználók/csoportok effektív, tényleges adminisztrátori jogosultságait.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Itt meg tudod tekinteni a kiválasztott felhasználók/csoportok effektív, tényleges globális moderátori jogosultságait.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Itt meg tudod tekinteni a kiválasztott felhasználók/csoportok a kiválasztott fórumra vonatkozó effektív, tényleges fórum jogosultságait.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Itt meg tudod tekinteni a kiválasztott felhasználók/csoportok a kiválasztott fórumra vonatkozó effektív, tényleges moderátori jogosultságait',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Itt meg tudod tekinteni a kiválasztott felhasználók/csoportok effektív, tényleges felhasználói jogosultságait.',

	'ADD_GROUPS'				=> 'Csoportok hozzáadása',
	'ADD_PERMISSIONS'			=> 'Jogosultságok hozzáadása',
	'ADD_USERS'					=> 'Felhasználók hozzáadása',
	'ADVANCED_PERMISSIONS'		=> 'Részletes jogosultságok', //? haladó?
	'ALL_GROUPS'				=> 'Összes csoport kiválasztása',
	'ALL_NEVER'					=> 'Összes <strong>SOHA</strong>',
	'ALL_NO'					=> 'Összes <strong>NEM</strong>',
	'ALL_USERS'					=> 'Összes felhasználó kiválasztása',
	'ALL_YES'					=> 'Összes <strong>IGEN</strong>',
	'APPLY_ALL_PERMISSIONS'		=> 'Összes jogosultság alkalmazása', //?
	'APPLY_PERMISSIONS'			=> 'Jogosultságok alkalmazása',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Az erre az elemre meghatározott jogosultságok és szerepek csak erre és a többi kijelölt elemre kerülnek alkalmazásra.',
	'AUTH_UPDATED'				=> 'A jogosultságok frissítésre kerültek.',

	'COPY_PERMISSIONS_CONFIRM'				=> 'Biztosan végre akarod hajtani ezt a műveletet? Kérjük, vedd figyelembe, hogy a kiválasztott célfórumok jogosultságai felülírásra kerülnek.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'A fórum, amelyik jogosultságait le szeretnéd másolni.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> 'A célfórumok, amelyeknek meg szeretnéd változtatni a jogosultságait.',
	'COPY_PERMISSIONS_FROM'					=> 'Fórum a másolandó jogosultságokkal',
	'COPY_PERMISSIONS_TO'					=> 'Jogosultságok alkalmazása',

	'CREATE_ROLE'				=> 'Szerep létrehozása',
	'CREATE_ROLE_FROM'			=> 'Jogosultságok másolása…',
	'CUSTOM'					=> 'Egyéni…',

	'DEFAULT'					=> 'Alapértelmezett', //? egyáltalán hol használják?
	'DELETE_ROLE'				=> 'Szerep törlése',
	'DELETE_ROLE_CONFIRM'		=> 'Biztosan törölni szeretnéd ezt a szerepet? Az elemek, melyekhez a szerep hozzárendelésre került, <strong>nem</strong> fogják elveszíteni a jogosultságbeállításaikat.',
	'DISPLAY_ROLE_ITEMS'		=> 'A szerepet használó elemek megtekintése',

	'EDIT_PERMISSIONS'			=> 'Jogosultságok szerkesztése',
	'EDIT_ROLE'					=> 'Szerep szerkesztése',

	'GROUPS_NOT_ASSIGNED'		=> 'A szerephez nincs csoport hozzárendelve.',

	'LOOK_UP_GROUP'				=> 'Csoport keresése',
	'LOOK_UP_USER'				=> 'Felhasználó keresés',

	'MANAGE_GROUPS'		=> 'Csoportok keresése',
	'MANAGE_USERS'		=> 'Felhasználók kezelése',

	'NO_AUTH_SETTING_FOUND'		=> 'Nem lett meghatározva jogosultságbeállítás.',
	'NO_ROLE_ASSIGNED'			=> 'Nincs hozzárendelt szerep…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Azzal, hogy beállítod ezt a szerepet, a jogosultságok nem fognak megváltozni. Ha vissza szeretnéd vonni a jogosultságokat, kattints az „Összes <strong>NEM</strong>” linkre.',
	'NO_ROLE_AVAILABLE'			=> 'Nincs elérhető szerep',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Kérünk, adj a szerepnek egy nevet.',
	'NO_ROLE_SELECTED'			=> 'A szerep nem található.',
	'NO_USER_GROUP_SELECTED'	=> 'Nem választottál ki egy felhasználót vagy csoportot se.',

	'ONLY_FORUM_DEFINED'	=> 'Csak fórumokat választottál ki. Kérünk, válassz ki legalább egy felhasználót vagy csoportot.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'A jogosultságok és a szerepek az összes kijelölt elemre is alkalmazásra kerülnek.',
	'PLUS_SUBFORUMS'				=> '+alfórumai',

	'REMOVE_PERMISSIONS'			=> 'Jogosultságok törlése',
	'REMOVE_ROLE'					=> 'Szerep törlése',
	'RESULTING_PERMISSION'			=> 'Eredményezett jogosultság',
	'ROLE'							=> 'Szerep',
	'ROLE_ADD_SUCCESS'				=> 'A szerep sikeresen hozzáadásra került.',
	'ROLE_ASSIGNED_TO'				=> '%s szerephez hozzárendelt felhasználók/csoportok',
	'ROLE_DELETED'					=> 'A szerep sikeresen törlésre került.',
	'ROLE_DESCRIPTION'				=> 'Szerep leírása',

	'ROLE_ADMIN_FORUM'			=> 'Fórum adminisztrátor',
	'ROLE_ADMIN_FULL'			=> 'Teljes adminisztrátor',
	'ROLE_ADMIN_STANDARD'		=> 'Normál adminisztrátor', //? "Standard Admin" 'Átlagos adminisztrátor'
	'ROLE_ADMIN_USERGROUP'		=> 'Felhasználói és csoportadminisztrátor',
	'ROLE_FORUM_BOT'			=> 'Robot hozzáférés',
	'ROLE_FORUM_FULL'			=> 'Teljes hozzáférés',
	'ROLE_FORUM_LIMITED'		=> 'Korlátozott hozzáférés',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Korlátozott hozzáférés + szavazás',
	'ROLE_FORUM_NOACCESS'		=> 'Semmi hozzáférés', //?
	'ROLE_FORUM_ONQUEUE'		=> 'Jóváhagyandó', //? "On Moderation Queue"
	'ROLE_FORUM_POLLS'			=> 'Normál hozzáférés + szavazás',
	'ROLE_FORUM_READONLY'		=> 'Csak olvasási hozzáférés', //? akár read-only is maradhatna :)
	'ROLE_FORUM_STANDARD'		=> 'Normál hozzáférés',
	'ROLE_FORUM_NEW_MEMBER'		=> 'Újonnan regisztrált felhasználó',
	'ROLE_MOD_FULL'				=> 'Teljes moderátor',
	'ROLE_MOD_QUEUE'			=> 'Jóváhagyó moderátor', //? "Queue Moderator"
	'ROLE_MOD_SIMPLE'			=> 'Egyszerű moderátor',
	'ROLE_MOD_STANDARD'			=> 'Normál moderátor',
	'ROLE_USER_FULL'			=> 'Összes funkció',
	'ROLE_USER_LIMITED'			=> 'Korlátozott funkciók',
	'ROLE_USER_NOAVATAR'		=> 'Nincs avatar',
	'ROLE_USER_NOPM'			=> 'Nincsenek privát üzenetek',
	'ROLE_USER_STANDARD'		=> 'Normál funkciók',
	'ROLE_USER_NEW_MEMBER'		=> 'Újonnan regisztrált felhasználó',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Hozzáfér a fórumok kezeléséhez és a fórumok jogosultságbeállításaihoz.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Hozzáfér a fórum összes adminisztrátori funkciójához.<br />Nem ajánlott.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Hozzáfér a legtöbb adminisztrátori funkcióhoz, de nem használhatja a szerverrel, ill. a rendszerrel kapcsolatos eszközöket.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Kezelheti a felhasználókat és a csoportokat: megváltoztathatja a jogosultságokat, beállításokat, kezelheti a kitiltásokat, rangokat.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Ez a szerep a kereső- és bármilyen más robotoknak ajánlott.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Használhatja a fórum összes funkcióját, például küldhet közleményeket vagy kiemelt témákat. Figyelmen kívül hagyhatja a flood időközt is.<br />Nem ajánlott normál felhasználóknak.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Használhat néhány fórum funkciót, de nem csatolhat állományokat, és nem használhat hozzászólás ikonokat.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Ugyanaz, mint a korlátozott hozzáférésnél, de készíthet szavazást.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Nem láthatja, és nem is férhet hozzá a fórumhoz.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Használhatja a fórum legtöbb funkcióját, állományokat is csatolhat, de hozzászólásait és nyitott témáit egy moderátornak jóvá kell hagynia.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Ugyanaz, mint a normál hozzáférésnél, de készíthet szavazást.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Olvashatja a fórum tartalmát, de nem nyithat témát, illetve nem küldhet hozzászólást.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Használhatja a fórum legtöbb funkcióját, állományokat is csatolhat, de nem zárhatja le a saját témáit, és nem készíthet szavazást.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> 'A speciális újonnan regisztrált felhasználók csoporthoz készült szerep; <strong>SOHA</strong> jogosultságokat tartalmaz, hogy lezárjon néhány funkciót az új felhasználók elől.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Használhatja az összes moderátori funkciót, beleértve a kitiltást is.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Szerkesztheti a hozzászólásokat, és jóváhagyhatja a moderálandókat, de semmi mást nem csinálhat.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Csak a témákkal kapcsolatos műveleteket végezhet. Nem adhat figyelmeztetést, és nem hagyhat jóvá hozzászólásokat.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Használhatja a legtöbb moderátori eszközt, de nem tilthat ki felhasználókat, és nem változtathatja meg a hozzászólások szerzőjét.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Használhatja a fórum összes felhasználói funkcióját, beleértve a felhasználónév-változtatást és a flood időköz figyelmen kívül hagyását.<br />Nem ajánlott.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Használhat néhány felhasználói funkciót. A csatolmányok, az e-mailek, illetve az azonnali üzenetküldés nem engedélyezett.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Korlátozott funkciókat használhat, és nem állíthat be avatart.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Korlátozott funkciókat használhat, és nem használhatja a privát üzenetek funkciót.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Használhatja a legtöbb, de nem az összes felhasználói funkciót. Például nem változtathatja meg a felhasználónevét, illetve nem hagyhatja figyelmen kívül a flood időközt.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> 'A speciális újonnan regisztrált felhasználók csoporthoz készült szerep; <strong>SOHA</strong> jogosultságokat tartalmaz, hogy lezárjon néhány funkciót az új felhasználók elől.',

	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Megadhatsz egy rövid magyarázatot, hogy mit csinál a szerep, vagy mire való. Az itt megadott leírás a jogosultság oldalakon is meg fog jelenni.',
	'ROLE_DESCRIPTION_LONG'			=> 'A szerep leírása túl hosszú, kérjük, tartsd 4000 karakteren belül.',
	'ROLE_DETAILS'					=> 'Szerep adatok',
	'ROLE_EDIT_SUCCESS'				=> 'A szerep sikeresen szerkesztésre került.',
	'ROLE_NAME'						=> 'Szerep neve',
	'ROLE_NAME_ALREADY_EXIST'		=> 'Már létezik egy <strong>%s</strong> nevű szerep a megadott jogosultságtípushoz.',
	'ROLE_NOT_ASSIGNED'				=> 'A szerep még nem került hozzárendelésre.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'A kiválasztott fórum(ok) nem léteznek.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'A kiválasztott csoport(ok) nem léteznek.',
	'SELECTED_USER_NOT_EXIST'		=> 'A kiválasztott felhasználó(k) nem léteznek.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Az itt kiválasztott fórum alfórumai is benne lesznek a kiválasztásban.',
	'SELECT_ROLE'					=> 'Szerep kiválasztása…',
	'SELECT_TYPE'					=> 'Típus kiválasztása',
	'SET_PERMISSIONS'				=> 'Jogosultságok beállítása',
	'SET_ROLE_PERMISSIONS'			=> 'Szerep jogosultságok beállítása',
	'SET_USERS_PERMISSIONS'			=> 'Felhasználói jogosultságok beállítása',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Felhasználó fórum jogosultságainak beállítása',

	'TRACE_DEFAULT'					=> 'Alapból minden jogosultság <strong>NEM</strong> (nem beállított). Így ezt a jogosultságot más beállítások felülírhatják.',
	'TRACE_FOR'						=> 'Jogosultság követése',
	'TRACE_GLOBAL_SETTING'			=> '%s (globális)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'A csoport jogosultsága <strong>SOHÁ</strong>-ra van állítva, ami az eddigi eredmény, így a régi eredmény kerül megtartásra.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'A csoport jogosultsága erre a fórumra <strong>SOHÁ</strong>-ra van állítva, ami az eddigi eredmény, így a régi eredmény kerül megtartásra.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'A csoport jogosultsága <strong>SOHÁ</strong>-ra van állítva, és ez lesz az új érték, mivel eddig nem volt beállítva (<strong>NEM</strong> volt az érték).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'A csoport jogosultsága erre a fórumra <strong>SOHÁ</strong>-ra van állítva, és ez lesz az új érték, mivel eddig nem volt beállítva (<strong>NEM</strong> volt az érték).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'A csoport jogosultsága <strong>SOHÁ</strong>-ra van állítva, ami felülírja az eddig <strong>IGEN</strong>-t a <strong>SOHÁ</strong>-val.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'A csoport jogosultsága erre a fórumra <strong>SOHÁ</strong>-ra van állítva, ami felülírja az eddig <strong>IGEN</strong>t a <strong>SOHÁ</strong>-val.',
	'TRACE_GROUP_NO'				=> 'A csoport jogosultsága <strong>NEM</strong>, így megmarad a régi érték.',
	'TRACE_GROUP_NO_LOCAL'			=> 'A csoport jogosultsága erre a fórumra <strong>NEM</strong>, így megmarad a régi érték.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'A csoport jogosultsága <strong>IGEN</strong>-re van állítva, de az eddigi <strong>SOHA</strong> nem írható felül.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'A csoport jogosultsága erre a fórumra <strong>IGEN</strong>-re van állítva, de az eddigi <strong>SOHA</strong> nem írható felül.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'A csoport jogosultsága <strong>IGEN</strong>-re van állítva, és ez lesz az új érték, mivel eddig nem volt beállítva (<strong>NEM</strong> volt az érték).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'A csoport jogosultsága erre a fórumra <strong>IGEN</strong>-re van állítva, és ez lesz az új érték, mivel eddig nem volt beállítva (<strong>NEM</strong> volt az érték).',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'A csoport jogosultsága <strong>IGEN</strong>-re van állítva, és az eddigi érték is <strong>IGEN</strong>, így az eredmény megtartásra kerül.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'A csoport jogosultsága erre a fórumra <strong>IGEN</strong>re van állítva, és az eddigi érték is <strong>IGEN</strong>, így az eredmény megtartásra kerül.',
	'TRACE_PERMISSION'				=> 'Jogosultság követése – %s',
	'TRACE_RESULT'					=> 'Követés eredménye',
	'TRACE_SETTING'					=> 'Beállítás követése',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'A fórumtól független felhasználói jogosultságok kiértékelése <strong>IGEN</strong>, de az eddig érték is <strong>IGEN</strong>, így a régi eredmény kerül megtartásra. %sGlobális jogosultság követése%s', //? kiértékelése (eredménye)
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'A fórumtól független felhasználói jogosultságok kiértékelése <strong>IGEN</strong>, ami felülírja a jelenlegi helyi <strong>SOHA</strong> értéket. %sGlobális jogosultság követése%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'A fórumtól független felhasználói jogosultságok kiértékelése <strong>SOHA</strong>, ami nem befolyásolja a helyi jogosultságot. %sGlobális jogosultság követése%s',

	'TRACE_USER_FOUNDER'					=> 'A felhasználó alapító, így minden adminisztrátori jogosultsága <strong>IGEN</strong>-re van állítva.',
	'TRACE_USER_KEPT'						=> 'A felhasználó jogosultsága <strong>NEM</strong>, így megmarad a régi érték.',
	'TRACE_USER_KEPT_LOCAL'					=> 'A felhasználó jogosultsága erre a fórumra <strong>NEM-</strong>, így megmarad a régi érték.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'A felhasználó jogosultsága <strong>SOHÁ</strong>-ra van állítva, és az eddigi eredmény is <strong>SOHA</strong>, így semmi sem változik.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'A felhasználó jogosultsága erre a fórumra <strong>SOHÁ</strong>-ra van állítva, és az eddigi eredmény is <strong>SOHA</strong>, így semmi sem változik.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'A felhasználó jogosultsága <strong>SOHÁ</strong>-ra van állítva, és ez lesz az új érték, mivel eddig <strong>NEM</strong> volt.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'A felhasználó jogosultsága erre a fórumra <strong>SOHÁ</strong>-ra van állítva, és ez lesz az új érték, mivel eddig <strong>NEM</strong> volt.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'A felhasználó jogosultsága <strong>SOHÁ</strong>-ra van állítva, ami felülírja az előző <strong>IGEN</strong>-t.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'A felhasználó jogosultsága erre a fórumra <strong>SOHÁ</strong>-ra van állítva, ami felülírja az előző <strong>IGEN</strong>-t.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'A felhasználó jogosultsága <strong>NEM</strong>, és az eddigi érték is <strong>NEM</strong>, így <strong>SOHA</strong> lesz a végső eredmény.', //? to default
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'A felhasználó jogosultsága erre a fórumra <strong>NEM</strong>, és az eddigi érték is <strong>NEM</strong>, így <strong>SOHA</strong> lesz a végső eredmény.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'A felhasználó jogosultsága <strong>IGEN</strong>-re van állítva, de az eddigi <strong>SOHA</strong> nem írható felül.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'A felhasználó jogosultsága erre a fórumra <strong>IGEN</strong>-re van állítva, de az eddigi <strong>SOHA</strong> nem írható felül.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'A felhasználó jogosultsága <strong>IGEN</strong>-re van állítva, és ez lesz az új érték, mivel eddig <strong>NEM</strong> volt.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'A felhasználó jogosultsága erre a fórumra <strong>IGEN</strong>-re van állítva, és ez lesz az új érték, mivel eddig <strong>NEM</strong> volt.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'A felhasználó jogosultsága <strong>IGEN</strong>-re van állítva, és az eddigi érték is <strong>IGEN</strong>, így semmi sem változik.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'A felhasználó jogosultsága erre a fórumra <strong>IGEN</strong>-re van állítva, és az eddigi érték is <strong>IGEN</strong>, így semmi sem változik.',
	'TRACE_WHO'								=> 'Alany', //? "Who"
	'TRACE_TOTAL'							=> 'Eredmény', //? "Total" 'Összeg'

	'USERS_NOT_ASSIGNED'			=> 'A szerephez nincs felhasználó hozzárendelve.',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'a következő előre definiált csoportok tagja',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'a következő felhasználói csoportok tagja',

	'VIEW_ASSIGNED_ITEMS'	=> 'Hozzárendelt elemek megtekintése',
	'VIEW_LOCAL_PERMS'		=> 'Helyi jogosultságok',
	'VIEW_GLOBAL_PERMS'		=> 'Globális jogosultságok',
	'VIEW_PERMISSIONS'		=> 'Jogosultságok megtekintése',

	'WRONG_PERMISSION_TYPE'				=> 'Rossz jogosultságtípus lett kiválasztva.',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'A jogosultságbeállítások rossz formátumban vannak, a phpBB nem tudja őket rendesen feldolgozni.',

));
