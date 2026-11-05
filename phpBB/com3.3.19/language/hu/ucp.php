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

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'	=> 'Azzal, hogy használod a „%1$s” fórumot (a továbbiakban „mi”, „a fórum”, „%1$s”, „%2$s”) elfogadod, hogy betartod az alábbi feltételeket. Ha nem fogadod el, kérjük ne használd, illetve ne is keresd fel a fórumot. A feltételeket bármikor megváltoztathatjuk, és habár a lehető legtöbbet megtesszük, hogy értesítsünk a változásról, érdemes rendszeresen áttekinteni ezt az oldalt, mivel a fórum használati feltételeinek megváltoztatása utáni további használatával beleegyezel az új feltételek betartásába.
	<br><br>
	A fórumot a phpBB hajtja, mely egy a „<a href="http://opensource.org/licenses/gpl-2.0.php">GNU General Public License v2</a>” (a továbbiakban „GPL”) licenc alatt kiadott fórumszoftver, és a <a href="https://www.phpbb.com/">www.phpbb.com</a>, valamint magyarul a <a href="http://phpbb.hu/">phpbb.hu</a> weboldalról tölthető le. A phpBB csak lehetőséget nyújt az internet alapú kommunikációra; a phpBB Limited nem felelős azért, hogy milyen tartalmakat, illetve magatartást engedélyezünk. További információért a phpBB-ről, kérjük, látogasd meg a <a href="https://www.phpbb.com/">https://www.phpbb.com/</a> weboldalt.
	<br><br>
	Beleegyezel, hogy nem küldesz semmilyen sértegető, obszcén, vulgáris, rágalmazó, gyűlöletkeltő, támadó, közízlést sértő vagy bármely más olyan tartalmat, mely sérti a hazádban, a fórumot kiszolgáló szerver országában érvényben lévő vagy a nemzetközi törvényeket. A fentiek megsértése azonnali és végleges kitiltáshoz vezethet az internetszolgáltatód értesítésével együtt, ha ezt szükségesnek tartjuk. A feltételek betartatásának érdekében az összes hozzászóláshoz tartozó IP-címet tároljuk. Elfogadod, hogy a fórum fenntartóinak jogukban áll eltávolítani, szerkeszteni a hozzászólásaid vagy lezárni az általad nyitott témákat, amennyiben úgy ítélik meg, hogy ez szükséges. Mint felhasználó, elfogadod, hogy bármely adat, melyet megadsz, tárolásra kerül a fórum adatbázisában. Ezek az információk a beleegyezésed nélkül semmilyen módon nem kerülnek átadásra egy harmadik félnek, de a fórum fenntartói nem tudnak felelősséget vállalni az adatokért egy esetleges „hackertámadás” esetén.
	',

	'PRIVACY_POLICY'		=> 'Ezen nyilatkozat írja le, hogy a phpBB és a „%1$s” fórum (a továbbiakban „mi”, „a fórum”, „%1$s”, „%2$s”) üzemeltetői hogyan kezelik a fórum használata közben keletkező információkat.
	<br><br>
	Ezen információk két módon jönnek létre. Egyrészt automatikusan: azzal, hogy felkeresed a fórumot, a phpBB ún. sütiket hoz létre (kis szöveges állományok, melyeket a böngésződ letölt az ideiglenes állományok könyvtárába). Ezen sütik olyan fontos adatokat tartalmaznak, melyek a fórum használatához feltétlenül szükségesek. Ilyen információt tárol az első két süti: a felhasználói azonosítót, illetve egy névtelen munkamenet azonosítót, amit a rendszer a böngésződhöz rendel. A harmadik süti akkor jön létre, amikor a fórumot böngészed – ebben kerül tárolásra melyik témákat olvastad, így javítva a felhasználói élményt. A „%1$s” oldal böngészése során a phpBB-n kívül más szoftverek is létrehozhatnak sütiket, ezeket azonban nem tárgyalja ez a dokumentum, ugyanis csak a phpBB által létrehozott oldalakkal foglalkozik.
	<br><br>
	A másik mód, ami tárolásra kerülő információt generál, az maga az interakció: például ha vendégként vagy regisztrált tagként hozzászólást írsz vagy regisztrálsz. Ez utóbbi folyamat során meg kell adnod egy egyedien azonosítható nevet („a felhasználói neved”), egy – a belépéshez használt – személyes jelszót („a jelszavad”), illetve egy valós e-mail címet („az e-mail címed”). Az általad létrehozott azonosítót azon ország adatvédelmi törvényei védelmezik, melyben a fórum szervere található. A regisztráció során megadott egyéb adatok kötelezősége az adott fórum adminisztrátorainak döntésétől függ. Lehetőséged van rá, hogy megválaszd, milyen információk jelenjenek meg rólad nyilvánosan a profilodban. Ezen felül ki-, illetve bekapcsolhatod a számodra küldött automatikus leveleket.
	<br><br>
	A jelszavad biztonságosan, egyirányúan kódolva tároljuk. Javasoljuk, hogy teljesen egyedi jelszavat használj! Ezen jelszóval férhetsz hozzá a fórumos azonosítódhoz, így kérjük, gondosan kezeld. Semmilyen körülmények közt ne add ki harmadik személynek, még ha az az oldal üzemeltetője is, vagy ha a phpBB-vel kapcsolatban kérik! Amennyiben elfelejted a jelszavad, használd az „Elfelejtettem a jelszavam” funkciót. A rendszer kérni fogja a felhasználóneved és az e-mail címed, majd generálni fog egy új jelszót, így újra használhatod az azonosítód.
	',
));

// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'				=> 'Az azonosítód aktiválása megtörtént. Köszönjük, hogy regisztráltál.',
	'ACCOUNT_ACTIVE_ADMIN'			=> 'Az azonosító aktiválása megtörtént.',
	'ACCOUNT_ACTIVE_PROFILE'		=> 'Az azonosítód sikeresen újraaktiválásra került.',
	'ACCOUNT_ADDED'					=> 'Köszönjük, hogy regisztráltál, az azonosítód elkészült.',
	'ACCOUNT_COPPA'					=> 'Az azonosítód elkészült, azonban jóváhagyásra vár. További információért, kérjük, nézd meg az e-mail fiókod.',
	'ACCOUNT_EMAIL_CHANGED'			=> 'Az azonosítód beállításai sikeresen frissítésre kerültek, azonban újra kell aktiválnod az azonosítód, mivel megváltoztattad az e-mail címedet. Az aktivációs kulcs elküldésre került a megadott új e-mail címre. További információért, kérjük, nézd meg az e-mail fiókod.',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> 'Az azonosítód beállításai sikeresen frissítésre kerültek, azonban az adminisztrátornak újra kell aktiválnia az azonosítód, mivel megváltoztattad az e-mail címedet. Az adminisztrátor értesítésre került, és amint újraaktiválja az azonosítód téged is értesítünk.',
	'ACCOUNT_INACTIVE'				=> 'Az azonosítód elkészült, azonban hogy használni tudd, aktiválnod kell. Az aktivációs kulcsot elküldtük az e-mail címedre. További információért, kérjük, nézd meg az e-mail fiókod, különös tekintettel a Levélszemét mappára. Az e-mail megérkezése időbe telhet az e-mail címed szolgáltatójától függően.',
	'ACCOUNT_INACTIVE_ADMIN'		=> 'Az azonosítód elkészült, azonban hogy használni tudd, az adminisztrátornak aktiválnia kell. Az adminisztrátort értesítettük, amint aktiválja az azonosítód, értesíteni fogunk.', //? szóismétlés
	'ACTIVATION_EMAIL_SENT'			=> 'Az aktivációs e-mail sikeresen elküldésre került az e-mail címedre.',
	'ACTIVATION_EMAIL_SENT_ADMIN'	=> 'Az aktivációs e-mail elküldésre került az adminisztrátorok e-mail címére.',
	'ADD'							=> 'Hozzáadás',
	'ADD_BCC'						=> 'Hozzáadás [titkos másolat]', //? + titkos másolat
	'ADD_FOES'						=> 'Új haragosok felvétele', //? kell az új?
	'ADD_FOES_EXPLAIN'				=> 'Több felhasználónevet is megadhatsz, mindegyiket külön sorba írva.',
	'ADD_FOLDER'					=> 'Mappa hozzáadása',
	'ADD_FRIENDS'					=> 'Új barátok felvétele', //? kell az új?
	'ADD_FRIENDS_EXPLAIN'			=> 'Több felhasználónevet is megadhatsz, mindegyiket külön sorba írva.',
	'ADD_NEW_RULE'					=> 'Új szűrő létrehozása', //? kell az új?
	'ADD_RULE'						=> 'Szűrő létrehozása',
	'ADD_TO'						=> 'Hozzáadás [címzett]', //? + címzett
	'ADD_USERS_UCP_EXPLAIN'			=> 'Itt új felhasználókat vehetsz fel a csoportba. Választhatsz, hogy ez a csoport legyen-e az új tagok elsődleges csoportja. Kérünk, minden felhasználónevet külön sorba írj.',
	'ADMIN_EMAIL'					=> 'Információs e-mailek fogadása adminisztrátoroktól',
	'AGREE'							=> 'Elfogadom a feltételeket',
	'ALLOW_PM'						=> 'Privát üzenetek fogadása felhasználóktól',
	'ALLOW_PM_EXPLAIN'				=> 'Kérjük, vedd figyelembe, hogy az adminisztrátorok és a moderátorok mindig fognak tudni privát üzenetet küldeni neked.',
	'ALREADY_ACTIVATED'				=> 'Az azonosítód aktiválása már korábban megtörtént.',
	'ATTACHMENTS_EXPLAIN'			=> 'Az alábbi lista a fórumon a hozzászólásaidhoz csatolt állományokat tartalmazza.',
	'ATTACHMENTS_DELETED'			=> 'A csatolmányok sikeresen törlésre kerültek.', //? sikeresen törlésrere kerültek??
	'AUTOLOGIN_SESSION_KEYS_DELETED'=> 'A kiválasztott "Emlékezz rám" munkamenet bejegyzések sikeresen törlésre kerültek.',
	'ATTACHMENT_DELETED'			=> 'A csatolmány sikeresen törlésre került.', //? sikeresen törlésre kerültek??
	'ATTACHMENT_LOCKED'				=> 'A csatolmány nem törölhető, mert lezárt témában van.', //? This topic is locked, you cannot delete the attachment
	'AVATAR_CATEGORY'				=> 'Kategória',
	'AVATAR_DRIVER_GRAVATAR_TITLE'	=> 'Gravatar',
	'AVATAR_DRIVER_GRAVATAR_EXPLAIN'=> 'A Gravatar szolgáltatás segítségével ugyanazt az avatart használhatod a Gravatart támogató összes oldalon. További információkat a <a href="http://www.gravatar.com/">Gravatar</a> weboldalán találsz.',
	'AVATAR_DRIVER_LOCAL_TITLE'		=> 'Avatar galéria',
	'AVATAR_DRIVER_LOCAL_EXPLAIN'	=> 'Kiválaszthatod avatarodat egy helyi galériából.',
	'AVATAR_DRIVER_REMOTE_TITLE'	=> 'Külső avatar',
	'AVATAR_DRIVER_REMOTE_EXPLAIN'	=> 'Linkelés az oldalon kívüli helyről.',
	'AVATAR_DRIVER_UPLOAD_TITLE'	=> 'Avatar feltöltése',
	'AVATAR_DRIVER_UPLOAD_EXPLAIN'	=> 'Saját avatar képed feltöltése számítógépről.',
	'AVATAR_EXPLAIN'				=> 'Maximális méret: szélesség %1$s, magasság %2$s, állomány mérete %3$.2f KiB.',
	'AVATAR_EXPLAIN_NO_FILESIZE'	=> 'Maximális méret; szélesség: %1$s, magasság: %2$s.',
	'AVATAR_FEATURES_DISABLED'		=> 'Az avatarok funkció jelenleg ki van kapcsolva.',
	'AVATAR_GALLERY'				=> 'Helyi galéria', //?
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> 'Nem sikerült feltölteni az avatart a következő helyre: %s.',
	'AVATAR_NOT_ALLOWED'			=> 'Az avatarod nem lehet megjeleníteni, mivel az avatarok kikapcsolásra kerültek.',
	'AVATAR_PAGE'					=> 'Oldal', //?
	'AVATAR_SELECT'					=> 'Válaszd ki avatarod',
	'AVATAR_TYPE'					=> 'Avatar típusa',
	'AVATAR_TYPE_NOT_ALLOWED'		=> 'A jelenlegi avatarod nem lehet megjeleníteni, mivel a típusa kikapcsolásra került.',

	'BACK_TO_DRAFTS'			=> 'Vissza az elmentett piszkozatokhoz',
	'BACK_TO_LOGIN'				=> 'Vissza a belépéshez',
	'BIRTHDAY'					=> 'Születésnap',
	'BIRTHDAY_EXPLAIN'			=> 'Ha megadod a születési éved, a születésnapodkor látszani fog a korod is.',
	'BOARD_DATE_FORMAT'			=> 'Dátum formátum',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'A formátum megegyezik a PHP <a href="https://secure.php.net/manual/function.date.php">date()</a> függvényéjével.', //? fogalmazás
	'BOARD_LANGUAGE'			=> 'Nyelv',
	'BOARD_STYLE'				=> 'Megjelenés',
	'BOARD_TIMEZONE'			=> 'Időzóna',
	'BOOKMARKS'					=> 'Kedvencek',
	'BOOKMARKS_EXPLAIN'			=> 'Fel tudsz venni témákat a kedvenceid közé, hogy aztán később felkeresd őket. Ha törölni szeretnél egy témát a kedvencekből, jelöld be a jelölőnégyzetét, majd kattints a <em>Kijelölt kedvencek törlése</em> gombra.', //? Első mondat második fele kicsit mást jelent: "You can bookmark topics for future reference."
	'BOOKMARKS_DISABLED'		=> 'A kedvencek funkció nem elérhető ezen a fórumon.',
	'BOOKMARKS_REMOVED'			=> 'A megjelölt témák sikeresen törlésre kerültek a kedvencekből.',

	'CANNOT_EDIT_MESSAGE_TIME'	=> 'Már nem szerkesztheted vagy törölheted az üzenetet.', //? az üzenet = that message
	'CANNOT_MOVE_TO_SAME_FOLDER'=> 'Az üzenetek nem helyezhetők át abba a mappába, amelyet épp törölni szeretnél.',
	'CANNOT_MOVE_FROM_SPECIAL'	=> 'A kimenő mappából nem helyezhető át üzenet.',
	'CANNOT_RENAME_FOLDER'		=> 'Ez a mappa nem átnevezhető.',
	'CANNOT_REMOVE_FOLDER'		=> 'Ez a mappa nem áthelyezhető.',
	'CHANGE_DEFAULT_GROUP'		=> 'Elsődleges csoport megváltoztatása',
	'CHANGE_PASSWORD'			=> 'Jelszó megváltoztatása',
	'CLICK_GOTO_FOLDER'			=> '%1$sUgrás a “%3$s” mappába%2$s',
	'CLICK_RETURN_FOLDER'		=> '%1$sVissza a „%3$s” mappához%2$s',
	'CONFIRMATION'				=> 'Regisztráció megerősítése',
	'CONFIRM_CHANGES'			=> 'Változtatások megerősítése',
	'CONFIRM_EXPLAIN'			=> 'A robot regisztrációk megakadályozása érdekében meg kell adnod egy megerősítő kódot. A kód az alábbi képen szerepel. Ha látási vagy egyéb problémák miatt nem tudod elolvasni a kódot, lépj kapcsolatba a %sfórum adminisztrátorával%s.',
	'VC_REFRESH'				=> 'Megerősítő kód frissítése', //? frissítés? (újratöltés?)
	'VC_REFRESH_EXPLAIN'		=> 'Ha nem tudod elolvasni a kódot, a gombra kattintva kérhetsz újat.',

	'CONFIRM_PASSWORD'			=> 'Jelszó megerősítése',
	'CONFIRM_PASSWORD_EXPLAIN'	=> 'Csak akkor kell megadnod, ha meg szeretnéd változtatni a jelszavad.',
	'COPPA_BIRTHDAY'			=> 'A regisztráció folytatásához, kérjük, add meg, mikor születtél.',
	'COPPA_COMPLIANCE'			=> 'COPPA egyeztetés', //?? complience - mondjuk úgyse hasznája senki :)
	'COPPA_EXPLAIN'				=> 'Kérjük, vedd figyelembe, hogy az elküld gombra kattintva elkészül az azonosítód, azonban addig nem lesz aktiválva, míg egy szülőd vagy gondviselőd jóvá nem hagyja a regisztrációd. E-mailben elküldjük a megfelelő űrlapot, illetve a címet, hogy hova küldd vissza.',
	'CREATE_FOLDER'				=> 'Mappa létrehozása…',
	'CURRENT_IMAGE'				=> 'Jelenlegi kép',
	'CURRENT_PASSWORD'			=> 'Jelenlegi jelszó',
	'CURRENT_PASSWORD_EXPLAIN'	=> 'Meg kell adnod a jelenlegi jelszavad, ha meg szeretnéd változtatni az e-mail címed vagy a felhasználóneved.',
	'CURRENT_CHANGE_PASSWORD_EXPLAIN' => 'Meg kell adnod a jelenlegi jelszavad, ha meg szeretnéd változtatni a jelszavad, az e-mail címed vagy a felhasználóneved.',
	'CUR_PASSWORD_EMPTY'		=> 'Nem adtad meg az aktuális jelszavad.',
	'CUR_PASSWORD_ERROR'		=> 'A megadott jelenlegi jelszó hibás.',
	'CUSTOM_DATEFORMAT'			=> 'Egyéni…',

	'DEFAULT_ACTION'			=> 'Alapértelmezett viselkedés', //? alapértelmezett? művelet, viselkedés
	'DEFAULT_ACTION_EXPLAIN'	=> 'Ez fog történni, ha a fenti műveletek közül egyik sem alkalmazható. ', //? végrehajtható
	'DEFAULT_ADD_SIG'			=> 'Aláírás csatolása alapból', //? alapból...
	'DEFAULT_BBCODE'			=> 'BBCode bekapcsolása alapból',
	'DEFAULT_NOTIFY'			=> 'Értesítés a válaszokról alapból',
	'DEFAULT_SMILIES'			=> 'Emotikonok bekapcsolása alapból', //? emotikonokat bekapcsolni?
	'DEFINED_RULES'				=> 'Szűrők', //? "Defined rules" - 'Létező szűrők'
	'DELETED_TOPIC'				=> 'A téma törölve lett.', //? nem tudom hol használják, így csak a passzívot lehet használni
	'DELETE_ATTACHMENT'			=> 'Csatolmány törlése',
	'DELETE_ATTACHMENTS'		=> 'Csatolmányok törlése',
	'DELETE_ATTACHMENT_CONFIRM'	=> 'Biztosan törölni akarod ezt a csatolmányt?',
	'DELETE_ATTACHMENTS_CONFIRM'=> 'Biztosan törölni akarod ezeket a csatolmányokat?',
	'DELETE_AVATAR'				=> 'Kép törlése',
	'DELETE_COOKIES_CONFIRM'	=> 'Biztosan törölni akarod a fórum által létrehozott sütiket?', //? beállított, készített, küldött
	'DELETE_MARKED_PM'			=> 'Kijelölt üzenetek törlése',
	'DELETE_MARKED_PM_CONFIRM'	=> 'Biztosan törölni akarod az összes kijelölt üzenetet?',
	'DELETE_OLDEST_MESSAGES'	=> 'Legrégebbi üzenetek törlése',
	'DELETE_MESSAGE'			=> 'Üzenet törlése',
	'DELETE_MESSAGE_CONFIRM'	=> 'Biztosan törölni akarod ezt a privát üzenetet?',
	'DELETE_MESSAGES_IN_FOLDER'	=> 'A törölt mappában lévő összes üzenet törlése', //? kisbetű (van egy és előtte, de távol)?
	'DELETE_RULE'				=> 'Szűrő törlése',
	'DELETE_RULE_CONFIRM'		=> 'Biztosan törölni akarod ezt a szűrőt?',
	'DEMOTE_SELECTED'			=> 'Lemondás a csoportvezetőségről', //? visszalépés...
	'DISABLE_CENSORS'			=> 'Szavak cenzúrázása',
	'DISPLAY_GALLERY'			=> 'Galéria megjelenítése',
	'DOWNLOADS'					=> 'Letöltések száma', //? remélem csak ilyen értelemben használják...
	'DRAFTS_DELETED'			=> 'Az összes piszkozat sikeresen törlésre került.',
	'DRAFTS_EXPLAIN'			=> 'Itt megtekintheted, szerkesztheted és törölheted az elmentett piszkozataidat.',
	'DRAFT_UPDATED'				=> 'A piszkozat sikeresen frissítésre került.', //? "Draft successfully updated."

	'EDIT_DRAFT_EXPLAIN'		=> 'Itt szerkesztheted a piszkozatodat. A piszkozatokhoz nem kapcsolható csatolmány, illetve szavazás.', //? "Here you are able to edit your draft. Drafts do not contain attachment and poll information." - ' A piszkozatok nem tartalmaznak csatolmányokat, illetve szavazási információkat.'
	'EMAIL_BANNED_EMAIL'		=> 'A megadott e-mail cím használata nem engedélyezett.',
	'EMAIL_REMIND'				=> 'Az azonosítódhoz tartozó e-mail cím. Ha nem változtattad meg a felhasználó vezérlőpultban, akkor ez az, amit a regisztrációkor megadtál.',
	'EMAIL_TAKEN_EMAIL'			=> 'A megadott e-mail cím már használatban van.', //? "is already in use" - 'már használja valaki' - valaki..., valószínűleg ő maga
	'EMPTY_DRAFT'				=> 'Az üzenet nem lehet üres.',
	'EMPTY_DRAFT_TITLE'			=> 'Meg kell adnod az üzenet témáját.',
	'EXPORT_AS_XML'				=> 'Kimentés XML-ként', //? 'Kimentés x-ként'
	'EXPORT_AS_CSV'				=> 'Kimentés CSV-ként',
	'EXPORT_AS_CSV_EXCEL'		=> 'Kimentés CSV-ként (Excel)',
	'EXPORT_AS_TXT'				=> 'Kimentés TXT-ként',
	'EXPORT_AS_MSG'				=> 'Kimentés MSG-ként',
	'EXPORT_FOLDER'				=> 'Aktuális nézet kimentése', //? kell az aktuális?

	'FIELD_REQUIRED'					=> 'A „%s” mezőt nem hagyhatod üresen.',
	'FIELD_TOO_SHORT'					=> array(
		1	=> 'A „%2$s” mező tartalma túl rövid, legalább %1$d karakter hosszúnak kell lennie.',
		2	=> 'A „%2$s” mező tartalma túl rövid, legalább %1$d karakter hosszúnak kell lennie.',
	),
	'FIELD_TOO_LONG'					=> array(
		1	=> 'A „%2$s” mező tartalma túl hosszú, legfeljebb %1$d karakter engedélyezett.',
		2	=> 'A „%2$s” mező tartalma túl hosszú, legfeljebb %1$d karakter engedélyezett.',
	),
	'FIELD_TOO_SMALL'					=> 'A „%2$s” mező értéke túl kicsi, legalább %1$d-nek kell lennie.',
	'FIELD_TOO_LARGE'					=> 'A „%2$s” mező értéke túl nagy, legfeljebb %1$d engedélyezett.', //? kell lennie? - nyelvtan
	'FIELD_INVALID_CHARS_INVALID'		=> 'A “%s” mező érvénytelen karaktereket tartalmaz.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> 'A „%1$s” mező érvénytelen karaktereket tartalmaz, csak számok engedélyezettek.', //? hibás (invalid)?
	'FIELD_INVALID_CHARS_ALPHA_DOTS'	=> 'A “%s” mező érvénytelen karaktereket tartalmaz, csak alfanumerikus karakterek és . jel használata engedélyezett.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> 'A „%1$s” mező érvénytelen karaktereket tartalmaz, csak alfanumerikus karakterek használata engedélyezett.',
	'FIELD_INVALID_CHARS_ALPHA_PUNCTUATION'	=> 'A “%s” mező érvénytelen karaktereket tartalmaz, csak alfanumerikus karakterek és _,-. jelek használata engedélyezett, és az első karakternek betűnek kell lennie.',
	'FIELD_INVALID_CHARS_ALPHA_SPACERS'	=> 'A „%1$s” mező érvénytelen karaktereket tartalmaz, csak alfanumerikus karakterek, szóköz és -+_[] jelek használata engedélyezett.', //? 'jel'? jelek elválasztása?
	'FIELD_INVALID_CHARS_ALPHA_UNDERSCORE'	=> 'A “%s” mező érvénytelen karaktereket tartalmaz, csak alfanumerikus karakterek és _ jel használata engedélyezett.',
	'FIELD_INVALID_CHARS_LETTER_NUM_DOTS'	=> 'A “%s” mező érvénytelen karaktereket tartalmaz, csak betűk, számok és . jelek használata engedélyezett.',
	'FIELD_INVALID_CHARS_LETTER_NUM_ONLY'	=> 'A “%s” mező érvénytelen karaktereket tartalmaz, csak betűk és számok használata engedélyezett.',
	'FIELD_INVALID_CHARS_LETTER_NUM_PUNCTUATION'	=> 'A “%s” mező érvénytelen karaktereket tartalmaz, csak betűk, számok és _,-. jelek használata engedélyezett, valamint az első karakternek betűnek kell lennie.',
	'FIELD_INVALID_CHARS_LETTER_NUM_SPACERS'		=> 'A “%s” mező érvénytelen karaktereket tartalmaz, csak betűk, számok, szóköz és -+_[] jelek használata engedélyezett.',
	'FIELD_INVALID_CHARS_LETTER_NUM_UNDERSCORE'		=> 'A “%s” mező érvénytelen karaktereket tartalmaz, csak betűk, számok és _ jel használata engedélyezett.',
	'FIELD_INVALID_DATE'				=> 'A „%1$s” mező érvénytelen dátumot tartalmaz.',
	'FIELD_INVALID_URL'					=> 'A “%s” mező érvénytelen URL-t tartalmaz.',
	'FIELD_INVALID_VALUE'				=> 'A “%s” mező érvénytelen értéket tartalmaz.',

	'FOE_MESSAGE'				=> 'Üzenet haragostól',
	'FOES_EXPLAIN'				=> 'A haragosok olyan felhasználók, akik alapból mellőzésre kerülnek. A hozzászólásaik nem teljesen jelennek meg, privát üzenetet azonban küldhetnek. Kérjük, vedd figyelembe, hogy nem mellőzhetsz egy moderátort vagy egy adminisztrátort.', //? mellőzésre kerülnek :)
	'FOES_UPDATED'				=> 'A haragosaid listája sikeresen frissítésre került.',
	'FOLDER_ADDED'				=> 'A mappa sikeresen hozzáadásra került.',
	'FOLDER_MESSAGE_STATUS'		=> array(
		1	=> '%1$d / %2$s üzenet',
		2	=> '%1$d / %2$s üzenet',
	),
	'FOLDER_NAME_EMPTY'			=> 'Nevet kell adnod a mappának.',
	'FOLDER_NAME_EXIST'			=> '<strong>%s</strong> nevű mappa már létezik.',
	'FOLDER_OPTIONS'			=> 'Mappa beállítások',
	'FOLDER_RENAMED'			=> 'A mappa sikeresen átnevezésre került.',
	'FOLDER_REMOVED'			=> 'A mappa sikeresen törlésre került.',
	'FOLDER_STATUS_MSG'			=> array(
		1	=> 'A mappa %3$d%%-a telt meg (%2$d / %1$s üzenet).',
		2	=> 'A mappa %3$d%%-a telt meg (%2$d / %1$s üzenet).',
	),
	'FORWARD_PM'				=> 'PÜ továbbítása',
	'FORCE_PASSWORD_EXPLAIN'	=> 'Mielőtt továbbléphetnél a fórumon, meg kell változtatnod a jelszavad.',
	'FRIEND_MESSAGE'			=> 'Üzenet baráttól',
	'FRIENDS'					=> 'Barátok',
	'FRIENDS_EXPLAIN'			=> 'A barátok funkció segítségével könnyen elérheted azokat a felhasználókat, akikkel gyakran lépsz kapcsolatba. Ha a megjelenés támogatja, a barátok hozzászólásai kiemelve szerepelhetnek.', //? hozzáférhetsz...
	'FRIENDS_OFFLINE'			=> 'Offline',
	'FRIENDS_ONLINE'			=> 'Online',
	'FRIENDS_UPDATED'			=> 'A barátaid listája sikeresen frissítésre került.',
	'FULL_FOLDER_OPTION_CHANGED'=> 'Az egy mappa megtelése esetén végrehajtandó műveletet sikeresen megváltoztatásra került.', //? Nem teljesen ugyanaz, mint ami a magyarázatban van...
	'FWD_ORIGINAL_MESSAGE'		=> '-------- Eredeti üzenet --------',
	'FWD_SUBJECT'				=> 'Téma: %s',
	'FWD_DATE'					=> 'Dátum: %s',
	'FWD_FROM'					=> 'Feladó: %s',
	'FWD_TO'					=> 'Címzett: %s',

	'GLOBAL_ANNOUNCEMENT'		=> 'Globális közlemény', //? Általános?

	'GRAVATAR_AVATAR_EMAIL'			=> 'Gravatar e-mail',
	'GRAVATAR_AVATAR_EMAIL_EXPLAIN'	=> 'Add meg a <a href="http://www.gravatar.com/">Gravatar</a> szolgáltatás regisztrációjánál használt e-mail címed.',
	'GRAVATAR_AVATAR_SIZE'			=> 'Avatar méretei',
	'GRAVATAR_AVATAR_SIZE_EXPLAIN'	=> 'Add meg az avatar kép méreteit, vagy hagyd üresen az automatikus megállapításhoz.', //? automatic verification

	'HIDE_ONLINE'				=> 'Jelenlét elrejtése',
 	'HIDE_ONLINE_EXPLAIN'		=> 'Ha megváltoztatod, az új beállítás csak a következő látogatáskor fog érvénybe lépni.',
	'HOLD_NEW_MESSAGES'			=> 'Üzenetek fogadásának visszautasítása (az új üzenetek vissza lesznek tartva, amíg elegendő hely nem lesz)',
	'HOLD_NEW_MESSAGES_SHORT'	=> 'Új üzenetek visszatartása',

	'IF_FOLDER_FULL'			=> 'Művelet mappa megtelése esetén',
	'IMPORTANT_NEWS'			=> 'Fontos közlemények',
	'INVALID_USER_BIRTHDAY'		=> 'A megadott születésnap nem érvényes dátum.',
	'INVALID_CHARS_USERNAME'	=> 'A felhasználónév nem engedélyezett karaktereket tartalmaz.',
	'INVALID_EMOJIS_USERNAME'	=> 'A felhasználónév nem engedélyezett karaktereket tartalmaz (Emoji).',
	'INVALID_CHARS_NEW_PASSWORD'=> 'A jelszó nem tartalmazza a szükséges karaktereket.',
	'ITEMS_REQUIRED'			=> 'A *-gal megjelölt mezők kitöltése kötelező.',

	'JOIN_SELECTED'				=> 'Csatlakozás',

	'LANGUAGE'					=> 'Nyelv',
	'LINK_REMOTE_AVATAR'		=> 'Linkelés az oldalon kívülről',
	'LINK_REMOTE_AVATAR_EXPLAIN'=> 'Add meg a linkelendő avatar kép URL-jét (webcímét).', //? "Enter the URL of the location containing the avatar image you wish to link to."
	'LINK_REMOTE_SIZE'			=> 'Avatar mérete',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> 'Add meg az avatar szélességét és magasságát, vagy hagyd üresen a mezőket, hogy ezeket a fórum automatikusan próbálja meg megállapítani.',
	'LOGIN_EXPLAIN_UCP'			=> 'A felhasználói vezérlőpult megtekintéséhez be kell jelentkezned.',
	'LOGIN_LINK'					=> 'Kösd össze vagy regisztráld külső felhasználói azonosítódat a fórum felhasználói azonosítóddal',
	'LOGIN_LINK_EXPLAIN'			=> 'Egy olyan külső szolgáltatás használatával próbáltál meg bejelentkezni, ami még nincs hozákapcsolva a fórumbeli felhasználói azonosítódhoz. Hozzá kell kapcsolnod egy már létezőhöz vagy újat kell regisztrálnod.',
	'LOGIN_LINK_MISSING_DATA'		=> 'Nem érhetőek el azok az adatok, amik szükségesek a felhasználói azonosítód és a külső szolgáltatás összekapcsolásához. Kérjük, próbálj meg újra bejelentkezni.', //? Restart the login process
	'LOGIN_LINK_NO_DATA_PROVIDED'	=> 'Nem kerültek átadásra azok az adatok, amik szükségesek a felhasználói azonosítód és a külső szolgáltatás összekapcsolásához. Kérjük, vedd fel a kapcsolatot egy adminisztrátorral, ha továbbra is problémát tapasztalsz.', //? No data has been provided
	'LOGIN_KEY'					=> 'Bejelentkezési kulcs', //? Login Key
	'LOGIN_TIME'				=> 'Bejelentkezési idő', //? Login Time
	'LOGIN_REDIRECT'			=> 'Sikeresen beléptél.',
	'LOGOUT_FAILED'				=> 'Nem kerültél kiléptetésre, mivel a kérés nem felelt meg a munkamenetednek. Ha továbbra is problémáid lennének, kérünk, lépj kapcsolatba a fórum adminisztrátorával.',
	'LOGOUT_REDIRECT'			=> 'Sikeresen kiléptél.',

	'MARK_IMPORTANT'				=> 'Megjelölés fontosként',
	'MARKED_MESSAGE'				=> 'Fontosként megjelölt üzenet', //?
	'MAX_FOLDER_REACHED'			=> 'Elérted a maximálisan létrehozható felhasználói mappák limitjét.',
	'MESSAGE_BY_AUTHOR'				=> 'Feladó:', //? ha jól néztem, sehol nem használják
	'MESSAGE_COLOURS'				=> 'Üzenet jelölések', //? "Message colours"
	'MESSAGE_DELETED'				=> 'Az üzenet sikeresen törlésre került',
	'MESSAGE_EDITED'				=> 'Az üzenet szerkesztésre került',
	'MESSAGE_HISTORY'				=> 'Kapcsolódó üzenetek',
	'MESSAGE_REPORTED_MESSAGE'		=> 'Jelentett üzenet', //? Reported message
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'Ezt az üzenetet a feladója törölte.',
	'MESSAGE_SENT_ON'				=> 'Dátum:', //?
	'MESSAGE_STORED'				=> 'Az üzenet sikeresen elküldésre került.',
	'MESSAGE_TO'					=> 'Címzett',
	'MESSAGES_DELETED'				=> 'Az üzenet sikeresen törlésre került.',
	'MOVE_DELETED_MESSAGES_TO'		=> 'Töröltmappabeli üzenetek áthelyezése',
	'MOVE_DOWN'						=> 'Lejjebb', //? "Move down"
	'MOVE_MARKED_TO_FOLDER'			=> 'Kijelöltek áthelyezése: %s', //?
	'MOVE_PM_ERROR'					=> array(
		1	=> 'Hiba lépett fel az üzenetek áthelyezése közben, a %1$s üzenetből csak %2$d darabot sikerült áthelyezni.', // 'An error occurred while moving the messages to the new folder, only %2$d out of %1$s was moved.'
		2	=> 'Hiba lépett fel az üzenetek áthelyezése közben, a %1$s üzenetből csak %2$d darabot sikerült áthelyezni.',
	),
	'MOVE_TO_FOLDER'				=> 'Áthelyezés', //? "Move to folder"
	'MOVE_UP'						=> 'Feljebb',

	'NEW_FOLDER_NAME'				=> 'Mappa új neve',
	'NEW_PASSWORD'					=> 'Új jelszó',
	'NEW_PASSWORD_CONFIRM_EMPTY'	=> 'Kétszer kell megadnod az új jelszavad.',
	'NEW_PASSWORD_ERROR'			=> 'A megadott jelszavak nem egyeznek meg.',

	'NOTIFICATIONS_MARK_ALL_READ'						=> 'Összes értesítés megjelölése olvasottként',
	'NOTIFICATIONS_MARK_ALL_READ_CONFIRM'				=> 'Valóban meg szeretnéd jelölni az összes értesítést olvasottként?',
	'NOTIFICATIONS_MARK_ALL_READ_SUCCESS'				=> 'Az összes értesítés olvasottnak lett jelölve.',
	'NOTIFICATION_GROUP_MISCELLANEOUS'					=> 'Egyéb értesítések',
	'NOTIFICATION_GROUP_MODERATION'						=> 'Moderátori értesítések',
	'NOTIFICATION_GROUP_ADMINISTRATION'					=> 'Adminisztrátori értesítések',
	'NOTIFICATION_GROUP_POSTING'						=> 'Hozzászólás értesítések',
	'NOTIFICATION_METHOD_BOARD'							=> 'Értesítések',
	'NOTIFICATION_METHOD_EMAIL'							=> 'E-mail',
	'NOTIFICATION_METHOD_JABBER'						=> 'Jabber',
	'NOTIFICATION_TYPE'									=> 'Értesítés típusa',
	'NOTIFICATION_TYPE_BOOKMARK'						=> 'Valaki válaszol egy témában, amit kedvencnek jelöltél', //?
	'NOTIFICATION_TYPE_GROUP_REQUEST'					=> 'Valaki csatlakozni szeretne egy csoporthoz, ahol vezető vagy', //?
	'NOTIFICATION_TYPE_FORUM'							=> 'Valaki válaszol egy fórumban, amire feliratkoztál',
	'NOTIFICATION_TYPE_IN_MODERATION_QUEUE'				=> 'Egy hozzászólás vagy téma elfogadásra vár', //?
	'NOTIFICATION_TYPE_MODERATION_QUEUE'				=> 'A témád/hozzászólásod elfogadta egy moderátor', //?
	'NOTIFICATION_TYPE_PM'								=> 'Valaki privát üzenetet küld neked', //?
	'NOTIFICATION_TYPE_POST'							=> 'Valaki válaszol egy témában, amire feliratkoztál', //?
	'NOTIFICATION_TYPE_QUOTE'							=> 'Valaki idéz egy hozzászólásban', //?
	'NOTIFICATION_TYPE_REPORT'							=> 'Valaki jelent egy hozzászólást', //?
	'NOTIFICATION_TYPE_REPORT_CLOSED'					=> 'Egy moderátor lezárja a hozzászólás jelentésed', //? Your report on a post is closed by a moderator
	'NOTIFICATION_TYPE_REPORT_PM'						=> 'Valaki jelent egy privát üzenetet',
	'NOTIFICATION_TYPE_REPORT_PM_CLOSED'				=> 'Egy moderátor lezárja a privát üzenet jelentésed', //? Your report on a private message is closed by a moderator
	'NOTIFICATION_TYPE_TOPIC'							=> 'Valaki létrehoz egy témát egy fórumban, amire feliratkoztál', //?
	'NOTIFICATION_TYPE_ADMIN_ACTIVATE_USER'				=> 'Felhasználó aktiválásra vár', //?

	'NOTIFY_METHOD'					=> 'Értesítés módja',
	'NOTIFY_METHOD_BOTH'			=> 'Mindkettő',
	'NOTIFY_METHOD_EMAIL'			=> 'Csak e-mail',
	'NOTIFY_METHOD_EXPLAIN'			=> 'A fórumon keresztül küldött üzenetek milyen módon kerüljenek elküldésre.',
	'NOTIFY_METHOD_IM'				=> 'Csak jabber',
	'NOTIFY_ON_PM'					=> 'Értesítés új privát üzenetről',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'A vendég felhasználót nem veheted fel a barátaid listájára.',
	'NOT_ADDED_FRIENDS_BOTS'		=> 'Nem vehetsz fel robotokat a barátaid listájára.',
	'NOT_ADDED_FRIENDS_FOES'		=> 'Nem vehetsz fel a barátaid listájára olyan felhasználókat, akiket haragosként jelöltél meg.',
	'NOT_ADDED_FRIENDS_SELF'		=> 'Nem veheted fel saját magad a barátaid listájára.',
	'NOT_ADDED_FOES_MOD_ADMIN'		=> 'Nem vehetsz fel adminisztrátorokat és moderátorokat a haragosaid listájára.',
	'NOT_ADDED_FOES_ANONYMOUS'		=> 'Nem veheted fel a vendég felhasználót a haragosaid listájára.',
	'NOT_ADDED_FOES_BOTS'			=> 'Nem vehetsz fel robotokat a haragosaid listájára.',
	'NOT_ADDED_FOES_FRIENDS'		=> 'Nem vehetsz fel a haragosaid listájára olyan felhasználókat, akiket már felvettél a barátaid listájára.',
	'NOT_ADDED_FOES_SELF'			=> 'Nem veheted fel saját magad a haragosaid listájára.',
	'NOT_AGREE'						=> 'Nem fogadom el a feltételeket',
	'NOT_ENOUGH_SPACE_FOLDER'		=> 'A célmappa („%s”) teli van. A végrehajtani kívánt művelet nem került elvégzésre.',
	'NOT_MOVED_MESSAGES'			=> array(
		1	=> 'Teli mappa miatt jelenleg %d privát üzenet van visszatartva.', //?
		2	=> 'Teli mappa miatt jelenleg %d privát üzenet van visszatartva.',
	),
	'NO_ACTION_MODE'				=> 'Nem adtál meg semmilyen teendőt.',
	'NO_AUTHOR'						=> 'Az üzenethez nem tartozik feladó.', //? "No author defined for this message"
	'NO_AVATAR'						=> 'Nincs kiválasztott avatar',
	'NO_AVATAR_CATEGORY'			=> 'Nincs',

	'NO_AUTH_DELETE_MESSAGE'		=> 'Nincs jogosultságod privát üzenetet törölni.',
	'NO_AUTH_EDIT_MESSAGE'			=> 'Nincs jogosultságod privát üzenetet szerkeszteni.',
	'NO_AUTH_FORWARD_MESSAGE'		=> 'Nincs jogosultságod privát üzenetet továbbítani.',
	'NO_AUTH_GROUP_MESSAGE'			=> 'Nincs jogosultságod privát üzenet küldeni csoportok részére.',
	'NO_AUTH_PROFILEINFO'			=> 'Nincs jogosultságod a profil adataid megváltoztatására.',
	'NO_AUTH_READ_HOLD_MESSAGE'		=> 'Nincs jogosultságod visszatartott privát üzenetet olvasni.',
	'NO_AUTH_READ_MESSAGE'			=> 'Nincs jogosultságod privát üzenetek megtekintéséhez.',
	'NO_AUTH_PRINT_MESSAGE'			=> 'Nincs jogosultságod privát üzenetek nyomtatásához.',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> 'Ezt az üzenetet nem tudod elolvasni, mivel a küldője törölte.',
	'NO_AUTH_SEND_MESSAGE'			=> 'Nincs jogosultságod privát üzenetet küldeni.',
	'NO_AUTH_SIGNATURE'				=> 'Nincs jogosultságod aláírás megadásához.',

	'NO_BCC_RECIPIENT'			=> 'Nincs',
	'NO_BOOKMARKS'				=> 'Nincs kedvenced.',
	'NO_BOOKMARKS_SELECTED'		=> 'Nem választottál ki egy kedvencet sem.',
 	'NO_EDIT_READ_MESSAGE'		=> 'A privát üzenetet nem lehet szerkeszteni, mivel már elolvasásra került.',
	'NO_EMAIL_USER'				=> 'Nem található a megadott e-mail címhez és felhasználónévhez tartozó azonosító.',
	'EMAIL_NOT_UNIQUE'			=> 'A megadott e-mail cím több felhasználónál is szerepel. Meg kell adnod a felhasználónevet is.',
	'NO_FOES'					=> 'Jelenleg üres a haragosaid listája.', //? "No foes currently defined" - ide valami az eredetire jobban hasonlító szöveg kéne
	'NO_FRIENDS'				=> 'Jelenleg üres a barátaid listája.',
	'NO_FRIENDS_OFFLINE'		=> 'Nincs offline barátod.',
	'NO_FRIENDS_ONLINE'			=> 'Nincs online barátod.',
	'NO_GROUP_SELECTED'			=> 'Nem adtál meg csoportot.',
	'NO_IMPORTANT_NEWS'			=> 'Jelenleg nincs fontos közlemény.',
	'NO_MESSAGE'				=> 'A privát üzenet nem található.',
	'NO_NEW_FOLDER_NAME'		=> 'Meg kell adnod a mappa új nevét.',
	'NO_NEWER_PM'				=> 'Nincs újabb üzenet.',
	'NO_OLDER_PM'				=> 'Nincs régebbi üzenet.',
	'NO_PASSWORD_SUPPLIED'		=> 'Nem adtad meg a jelszavad.',
	'NO_RECIPIENT'				=> 'Nem adtál meg címzettet.',
	'NO_RESET_TOKEN'			=> 'Nem adtál meg jelszó visszaállítási tokent.', //? You did not provide a password reset token.
	'NO_RULES_DEFINED'			=> 'Nincs szűrő.',
	'NO_SAVED_DRAFTS'			=> 'Nincs piszkozat.',
	'NO_TO_RECIPIENT'			=> 'Nincs',
	'NO_WATCHED_FORUMS'			=> 'Nem iratkoztál fel egy fórumra se.', //? a se-s megfogalmazás helyett valami más ékne
	'NO_WATCHED_SELECTED'		=> 'Nem választottál ki egy témát vagy fórumot se, melyre fel vagy iratkozva.',
	'NO_WATCHED_TOPICS'			=> 'Nem iratkoztál fel egy témára se.',

	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'A jelszó hosszának legalább %1$s karakternek kell lennie, szerepelnie kell benne kis- és nagybetűknek egyaránt, valamint tartalmaznia kell számokat.',
	'PASS_TYPE_ANY_EXPLAIN'		=> 'A hosszának legalább %1$s karakternek kell lennie.', //?
	'PASS_TYPE_CASE_EXPLAIN'	=> 'A jelszó hosszának legalább %1$s karakternek kell lennie, valamint szerepelnie kell benne kis- és nagybetűknek egyaránt.',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'A jelszó hosszának legalább %1$s karakternek kell lennie, szerepelnie kell benne kis- és nagybetűknek egyaránt, valamint tartalmaznia kell számokat és speciális karaktereket is.', //? symbols = speciális karakterek? gondolom...
	'PASSWORD'					=> 'Jelszó',
	'PASSWORD_ACTIVATED'		=> 'Az új jelszavad aktiválásra került.',
	'PASSWORD_RESET'			=> 'A jelszavad sikeresen beállításra került.', //? Your password has been successfully reset.
	'PASSWORD_RESET_LINK_SENT'	=> 'Ha a felhasználód létezik, az új jelszó megadására használható hivatkozás elküldésre került az e-mail címedre. Ha nem kapod meg az e-mailt, annak oka lehet, hogy a felhasználód tiltva van, nincs aktiválva, rövid időn belül több elfelejtett jelszóval kapcsolatos levelet is kértél vagy nincs jogod a jelszavad megváltoztatására. Ezekben az esetekben vedd fel a kapcsolatot a fórum adminisztrátorával. Valamint ellenőrizd, hogy az e-mail nem került-e a levélszemétbe.',
	'PERMISSIONS_RESTORED'		=> 'Az eredeti jogosultságok sikeresen visszaállításra kerültek.', //? eredeti?
	'PERMISSIONS_TRANSFERRED'	=> '<strong>%s</strong> jogosultságai sikeresen átadásra kerültek, most a felhasználó jogosultságaival böngészheted a fórumot.<br />Kérjük, vedd figyelembe, hogy az adminisztrátori jogosultságok nem kerültek átadásra. Az eredeti jogosultságaidat bármikor visszaállíthatod.', //? "Successfully transferred permissions from <strong>%s</strong>, you are now able to browse the forum with the users permissions." - hát ez nagyon nem sikerült
	'PM_DISABLED'				=> 'A privát üzenet részleg ki lett kapcsolva ezen a fórumon.', //?
	'PM_FROM'					=> 'Feladó',
	'PM_FROM_REMOVED_AUTHOR'	=> 'Az üzenetet egy már nem regisztrált felhasználó küldte.',
	'PM_ICON'					=> 'PÜ ikon',
	'PM_INBOX'					=> 'Bejövő', //? 'Bejövő üzenetek'?
	'PM_MARK_ALL_READ'			=> 'Minden üzenet megjelölése olvasottként',
	'PM_MARK_ALL_READ_SUCCESS'	=> 'A mappában minden privát üzenet olvasottként lett megjelölve',
	'PM_NO_USERS'				=> 'A hozzáadni kívánt felhasználók nem léteznek.',
	'PM_OUTBOX'					=> 'Kimenő',
	'PM_SENTBOX'				=> 'Elküldött',
	'PM_SUBJECT'				=> 'Téma',
	'PM_TO'						=> 'Címzett:', //? "send to" - pl. kettőspont?
	'PM_TOOLS'					=> 'PÜ eszközök',
	'PM_USERS_REMOVED_NO_PERMISSION'	=> 'Nem mindegyik felhasználót sikerült hozzáadni, mivel nem mindenkinek van joga privát üzenetet olvasni.',
	'PM_USERS_REMOVED_NO_PM'	=> 'Nem mindegyik felhasználót sikerült hozzáadni, mivel nem mindenki engedélyezte privát üzenetek fogadását.',
	'POST_EDIT_PM'				=> 'Üzenet szerkesztése',
	'POST_FORWARD_PM'			=> 'Üzenet továbbítása',
	'POST_NEW_PM'				=> 'Üzenet küldése',
	'POST_PM_LOCKED'			=> 'A privátüzenet-küldés le van zárva.', //??!
	'POST_PM_POST'				=> 'Hozzászólás idézése',
	'POST_QUOTE_PM'				=> 'Üzenet idézése',
	'POST_REPLY_PM'				=> 'Válasz az üzenetre',
	'PRINT_PM'					=> 'Nyomtatóbarát verzió',
	'PREFERENCES_UPDATED'		=> 'A beállításaid sikeresen frissítésre kerültek.', //? preferences
	'PROFILE_INFO_NOTICE'		=> 'Kérjük, vedd figyelembe, hogy ezek az információk lehet, hogy a többi felhasználó számára is láthatóak lesznek. Légy óvatos bármilyen személyes adat megadásánál. A *-gal megjelölt mezők kitöltése kötelező.', //? "Be careful when including any personal details."
	'PROFILE_UPDATED'			=> 'A profilod sikeresen frissítésre került.',
	'PROFILE_AUTOLOGIN_KEYS'	=> 'Az "Emlékezz rám" kulcsok automatikusan bejelentkeztetnek, ha meglátogatod a fórum egyik oldalát. Kilépéskor a kulcs csak arról a számítógépről kerül törlésre, ahonnan kiléptél. Itt megnézheted azokat a kulcsokat, amiket a fórum más számítógépről történő megtekintéséhez használtál.',
	'PROFILE_NO_AUTOLOGIN_KEYS'	=> 'Nincs mentett "Emlékezz rám" kulcs.',

	'RECIPIENT'							=> 'Címzett',
	'RECIPIENTS'						=> 'Címzettek',
	'REGISTRATION'						=> 'Regisztráció',
	'OAUTH_REGISTRATION'				=> 'Regisztráció külső szolgáltatók használatával',
	'RELEASE_MESSAGES'					=> '%sVisszatartott üzenetek kiengedése:%s ha elegendő hely szabaddá válik, visszakerülnek az eredeti mappájukba.', //? "sRelease all on-hold messages%s… they will be re-sorted into the appropriate folder if enough space is made available."
	'REMOVE_ADDRESS'					=> 'Cím törlése', //? nem találtam sehol, hogy használva lenne
	'REMOVE_SELECTED_BOOKMARKS'			=> 'Kiválasztott kedvencek törlése',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> 'Biztosan törölni akarod a kiválasztott témákat a kedvencekből?',
	'REMOVE_BOOKMARK_MARKED'			=> 'Kijelölt kedvencek törlése',
	'REMOVE_FOLDER'						=> 'Mappa törlése',
	'REMOVE_FOLDER_CONFIRM'				=> 'Biztosan törölni akarod ezt a mappát?',
	'RENAME'							=> 'Átnevezés',
	'RENAME_FOLDER'						=> 'Mappa átnevezése',
	'REPLIED_MESSAGE'					=> 'Megválaszolt üzenet', //? meg?
	'REPLY_TO_ALL'						=> 'Válasz a küldőnek és az összes címzettnek',
	'REPORT_PM'							=> 'Privát üzenet jelentése',
	'RESET_PASSWORD'					=> 'Jelszó visszaállítása', //? Reset password
	'RESET_TOKEN_EXPIRED_OR_INVALID'	=> 'A megadott jelszó visszaállítási token érvénytelen vagy lejárt.',
	'RESIGN_SELECTED'					=> 'Lemondás a csoporttagságról',
	'RETURN_FOLDER'						=> '%1$sVissza az előző mappához%2$s',
	'RETURN_UCP'						=> '%sVissza a felhasználói vezérlőpulthoz%s',
	'RULE_ADDED'						=> 'A szűrő sikeresen létrehozásra került.',
	'RULE_ALREADY_DEFINED'				=> 'Már van egy ilyen szűrő.',
	'RULE_DELETED'						=> 'A szűrő sikeresen törlésre került.',
	'RULE_LIMIT_REACHED'				=> 'Nem adhatsz hozzá további szűrőket, mert elérted a szűrők engedélyezett darabszámát.',
	'RULE_NOT_DEFINED'					=> 'A szűrőt nem helyesen adtad meg.', //? "Rule not correctly specified"
	'RULE_REMOVED_MESSAGES'				=> array(
		1	=> '%d privát üzenet törlésre került a szűrők következtében.',
		2	=> '%d privát üzenet törlésre került a szűrők következtében.',
	),

	'SAME_PASSWORD_ERROR'		=> 'A megadott új jelszó megegyezik a jelenlegi jelszavaddal.',
	'SEARCH_YOUR_POSTS'			=> 'Saját hozzászólások megtekintése',
	'SENT_AT'					=> 'Elküldve',			// Used before dates in private messages
	'SHOW_EMAIL'				=> 'E-mailek fogadása felhasználóktól', //? "Users can contact me by email"
	'SIGNATURE_EXPLAIN'			=> 'Az aláírás egy szöveg, melyet automatikusan hozzáfűzhetsz a hozzászólásaidhoz. Legfeljebb %d karakter hosszú lehet.',
	'SIGNATURE_PREVIEW'			=> 'Így fog megjelenni az aláírásod a hozzászólásaidban',
	'SIGNATURE_TOO_LONG'		=> 'Az aláírásod túl hosszú.',
	'SELECT_CURRENT_TIME'		=> 'Aktuális idő kiválasztása', //? select
	'SELECT_TIMEZONE'			=> 'Időzóna kiválasztása', //? select
	'SORT'						=> 'Rendezés', //?
	'SORT_COMMENT'				=> 'Magyarázat',
	'SORT_DOWNLOADS'			=> 'Letöltések száma', //? száma?
	'SORT_EXTENSION'			=> 'Kiterjesztés',
	'SORT_FILENAME'				=> 'Állomány neve',
	'SORT_POST_TIME'			=> 'Feltöltés ideje',
	'SORT_SIZE'					=> 'Állomány mérete',

	'TIMEZONE'					=> 'Időzóna',
	'TIMEZONE_DATE_SUGGESTION'	=> 'Javaslat: %s',
	'TIMEZONE_INVALID'			=> 'A kiválasztott időzóna érvénytelen.',
	'TO'						=> 'Címzett',
	'TO_MASS'					=> 'Címzettek',
	'TO_ADD'					=> 'Címzett hozzáadása',
	'TO_ADD_MASS'				=> 'Címzettek hozzáadása',
	'TO_ADD_GROUPS'				=> 'Csoportok hozzáadása',
	'TOO_MANY_RECIPIENTS'		=> 'Túl sok címzettet adtál meg.',
	'TOO_MANY_REGISTERS'		=> 'Túllépted a legfeljebb engedélyezett regisztrációkísérletek számát. Kérjük, próbálkozz később.',

	'UCP'						=> 'Felhasználói vezérlőpult',
	'UCP_ACTIVATE'				=> 'Azonosító aktiválása',
	'UCP_ADMIN_ACTIVATE'		=> 'Kérjük, vedd figyelembe, hogy egy valós e-mail címet kell megadnod, hogy az azonosítód aktiválva lehessen. Az adminisztrátor át fogja nézni az azonosítód, és ha jóváhagyja, kapni fogsz egy e-mailt a megadott címre.', //? "Please note that you will need to enter a valid email address before your account is activated. The administrator will review your account and if approved you will receive an email at the address you specified."
	'UCP_ATTACHMENTS'			=> 'Csatolmányok',
	'UCP_AUTH_LINK'				=> 'Külső felhasználói azonosítók',
	'UCP_AUTH_LINK_ASK'			=> 'Jelenleg nincs ezzel a külső szolgáltatással összekapcsolt felhasználói azonosítód. Kattints a lent található gombra, hogy összekapcsold a fórumbeli felhasználói azonosítód a külső szolgáltatás felhasználói azonosítójával.',
	'UCP_AUTH_LINK_ID'			=> 'Egyedi azonosító',
	'UCP_AUTH_LINK_LINK'		=> 'Összekapcsolás',
	'UCP_AUTH_LINK_MANAGE'		=> 'Külső felhasználói azonosító összekapcsolások kezelése',
	'UCP_AUTH_LINK_NOT_SUPPORTED'	=> 'Fórum felhasználói azonosítók külső szolgáltatással történő összekapcsolása nem támogatott a fórum jelenleg használt azonosítási eljárásával.',
	'UCP_AUTH_LINK_TITLE'		=> 'Külső felhasználói azonosító összekapcsolások kezelése',
	'UCP_AUTH_LINK_UNLINK'		=> 'Összekapcsolás megszüntetése',
	'UCP_COPPA_BEFORE'			=> '%s előtt',
	'UCP_COPPA_ON_AFTER'		=> '%s-én vagy utána',
	'UCP_EMAIL_ACTIVATE'		=> 'Kérjük, vedd figyelembe, hogy egy valós e-mail címet kell megadnod, hogy az azonosítód aktiválva lehessen. A regisztráció után kapni fogsz egy e-mailt a megadott címre, amely tartalmazni fogja az aktivációs linket.',
	'UCP_JABBER'				=> 'Jabber azonosító',
	'UCP_LOGIN_LINK'			=> 'Külső felhasználói azonosító beállítása', //? set up association

	'UCP_MAIN'					=> 'Áttekintés',
	'UCP_MAIN_ATTACHMENTS'		=> 'Csatolmányok kezelése', //? kell a kezelése?? (szerintem nem annyira...)
	'UCP_MAIN_BOOKMARKS'		=> 'Kedvencek kezelése',
	'UCP_MAIN_DRAFTS'			=> 'Piszkozatok kezelése',
	'UCP_MAIN_FRONT'			=> 'Kezdőlap', //? "Front page"
	'UCP_MAIN_SUBSCRIBED'		=> 'Feliratkozások kezelése',

	'UCP_NO_ATTACHMENTS'		=> 'Nem töltöttél fel csatolmányt a fórumra.', //? "You have posted no files"

	'UCP_NOTIFICATION_LIST'				=> 'Értesítések kezelése',
	'UCP_NOTIFICATION_LIST_EXPLAIN'		=> 'Itt megnézheted az összes régi értesítést.',
	'UCP_NOTIFICATION_OPTIONS'			=> 'Értesítési beállítások módosítása',
	'UCP_NOTIFICATION_OPTIONS_EXPLAIN'	=> 'Itt beállíthatod a fórum által használandó értesítési módokat.', //? preferred

	'UCP_PREFS'					=> 'Fórum beállítások',
	'UCP_PREFS_PERSONAL'		=> 'Általános beállítások szerkesztése', //? kell a szerkesztése?? - és a beállítások?
	'UCP_PREFS_POST'			=> 'Hozzászólás beállítások szerkesztése', //?
	'UCP_PREFS_VIEW'			=> 'Megjelenítési beállítások szerkesztése',

	'UCP_PM'					=> 'Privát üzenetek',
	'UCP_PM_COMPOSE'			=> 'Üzenet írása',
	'UCP_PM_DRAFTS'				=> 'PÜ piszkozatok kezelése',
	'UCP_PM_OPTIONS'			=> 'Szűrők, mappák és beállítások',
	'UCP_PM_UNREAD'				=> 'Olvasatlan üzenet',
	'UCP_PM_VIEW'				=> 'Üzenetek megtekintése',

	'UCP_PROFILE'				=> 'Profil',
	'UCP_PROFILE_AVATAR'		=> 'Avatar szerkesztése',
	'UCP_PROFILE_PROFILE_INFO'	=> 'Profil szerkesztése',
	'UCP_PROFILE_REG_DETAILS'	=> 'Azonosító beállítások szerkesztése', //? "Edit account settings"
	'UCP_PROFILE_SIGNATURE'		=> 'Aláírás szerkesztése',
	'UCP_PROFILE_AUTOLOGIN_KEYS'=> '“Emlékezz rám” kulcsok kezelése',

	'UCP_USERGROUPS'			=> 'Csoportok',
	'UCP_USERGROUPS_MEMBER'		=> 'Tagságok szerkesztése',
	'UCP_USERGROUPS_MANAGE'		=> 'Csoportok kezelése',

	'UCP_PASSWORD_RESET_DISABLED'	=> 'A jelszó visszaállítási funkció le lett tiltva. Ha segítségre van szükséged az azonosítód eléréséhez, vedd fel a kapcsolatot a %sfórum adminisztrátoraival%s',
	'UCP_REGISTER_DISABLE'			=> 'Jelenleg nem lehet létrehozni új azonosítót.',
	'UCP_RESEND'					=> 'Aktivációs e-mail elküldése',
	'UCP_WELCOME'					=> 'Köszöntünk a felhasználói vezérlőpulton! Itt megtekintheted, illetve megváltoztathatod a profilodat, a fórum beállításaidat és a feliratkozásaidat. Privát üzenetet is küldhetsz más felhasználóknak (ha engedélyezve van). Mielőtt továbblépnél, kérünk győződj meg róla, hogy elolvastad a közleményeket.', //? Légy köszöntve a felhasználói vezérlőpulton! üdvözlünk? "Welcome to the User Control Panel. From here you can monitor, view and update your profile, preferences, subscribed forums and topics. You can also send messages to other users (if permitted). Please ensure you read any announcements before continuing."
	'UCP_ZEBRA'						=> 'Barátok és haragosok',
	'UCP_ZEBRA_FOES'				=> 'Haragosok kezelése',
	'UCP_ZEBRA_FRIENDS'				=> 'Barátok kezelése',
	'UNDISCLOSED_RECIPIENT'			=> 'Rejtett címzett',
	'UNKNOWN_FOLDER'				=> 'Ismeretlen mappa',
	'UNWATCH_MARKED'				=> 'Leiratkozás a kijelöltekről',
	'UPLOAD_AVATAR_FILE'			=> 'Feltöltés a számítógépről',
	'UPLOAD_AVATAR_URL'				=> 'Feltöltés webcímről',
	'UPLOAD_AVATAR_URL_EXPLAIN'		=> 'Add meg a kép URL-jét (webcímét). A kép átmásolásra kerül erre az oldalra.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> 'A felhasználónév hosszának %1$s és %2$s között kell lennie, és csak alfanumerikus karaktereket tartalmazhat.', //? ez egy phpBB beli bug? - mindenesetre maradt az eredeti angol szöveg
	'USERNAME_ALPHA_SPACERS_EXPLAIN'=> 'A felhasználónév hosszának %1$s és %2$s között kell lennie, valamint csak alfanumerikus karaktereket, szóközt és -+_[] jeleket tartalmazhat.',
	'USERNAME_ASCII_EXPLAIN'		=> 'A felhasználónév hosszának %1$s és %2$s között kell lennie, valamint csak ASCII karaktereket tartalmazhat, tehát ékezetes betűket és szimbólumokat nem.',
	'USERNAME_LETTER_NUM_EXPLAIN'	=> 'A felhasználónév hosszának %1$s és %2$s között kell lennie, valamint csak betűket és számokat tartalmazhat.',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'=> 'A felhasználónév hosszának %1$s és %2$s között kell lennie, valamint csak betűket, számokat, szóközt és -+_[] jeleket tartmazhat.',
	'USERNAME_CHARS_ANY_EXPLAIN'	=> 'A hosszának %1$s és %2$s között kell lennie.',
	'USERNAME_TAKEN_USERNAME'		=> 'A megadott felhasználónév már használatban van, kérünk válassz másikat.',
	'USERNAME_DISALLOWED_USERNAME'	=> 'A megadott felhasználónév le lett tiltva vagy nem engedélyezett szót tartalmaz. Kérünk válassz egy másik nevet.',
	'USER_NOT_FOUND_OR_INACTIVE'	=> 'A megadott felhasználónévek nem találhatók, vagy még nem aktivált felhsználók.', //?


	'VIEW_AVATARS'				=> 'Avatarok megjelenítése',
	'VIEW_EDIT'					=> 'Megtekintés/szerkesztés',
	'VIEW_FLASH'				=> 'Flash animációk megjelenítése',
	'VIEW_IMAGES'				=> 'Képek megjelenítése a hozzászólásokban',
	'VIEW_NEXT_HISTORY'			=> 'Következő kapcsolódó PÜ', //? kapcsolódó PÜ?
	'VIEW_NEXT_PM'				=> 'Következő PÜ',
	'VIEW_PM'					=> 'Üzenet megtekintése',
	'VIEW_PM_INFO'				=> 'Üzenet adatok',
	'VIEW_PM_MESSAGES'			=> array(
		1	=> '%d üzenet',
		2	=> '%d üzenet',
	),
	'VIEW_PREVIOUS_HISTORY'		=> 'Előző kapcsolódó PÜ',
	'VIEW_PREVIOUS_PM'			=> 'Előző PÜ',
	'VIEW_PROFILE'				=> 'Profil megtekintése',
	'VIEW_SIGS'					=> 'Aláírások megjelenítése',
	'VIEW_SMILIES'				=> 'Emotikonok megjelenítése képként',
	'VIEW_TOPICS_DAYS'			=> 'Témák megjelenítése a következő időszakból', //? kimondom: utálom a 'következőt'
	'VIEW_TOPICS_DIR'			=> 'Témák rendezésének iránya',
	'VIEW_TOPICS_KEY'			=> 'Témák rendezése a következő szerint', //?
	'VIEW_POSTS_DAYS'			=> 'Hozzászólások megjelenítése a következő időszakból', //?
	'VIEW_POSTS_DIR'			=> 'Hozzászólások rendezésének iránya',
	'VIEW_POSTS_KEY'			=> 'Hozzászólások rendezése a következő szerint', //?

	'WATCHED_EXPLAIN'			=> 'Az alábbi lista azokat a fórumokat, illetve témákat tartalmazza, melyekre feliratkoztál. Az ezekbe érkező új hozzászólásokról értesítést kapsz. A leiratkozáshoz jelöld ki a fórumot vagy témát, majd kattints a <em>Leiratkozás a kijelöltekről</em> gombra.',
	'WATCHED_FORUMS'			=> 'Figyelt fórumok',
	'WATCHED_TOPICS'			=> 'Figyelt témák',
	'WRONG_ACTIVATION'			=> 'A megadott aktivációs kulcs nem egyezik meg az adatbázisban lévővel.',

	'YOUR_DETAILS'				=> 'Fórumbeli aktivitásod', //? 'Aktivitásod'??
	'YOUR_FOES'					=> 'Haragosaid',
	'YOUR_FOES_EXPLAIN'			=> 'Hogy eltávolíts egy felhasználót, válaszd ki, majd kattints az elküld gombra.', //?
	'YOUR_FRIENDS'				=> 'Barátaid',
	'YOUR_FRIENDS_EXPLAIN'		=> 'Hogy eltávolíts egy felhasználót, válaszd ki, majd kattints az elküld gombra.', //?
	'YOUR_WARNINGS'				=> 'Figyelmeztetési szint', //?

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> 'áthelyezés',
		'MARK_AS_READ'		=> 'megjelölés olvasottként',
		'MARK_AS_IMPORTANT'	=> 'megjelölés fontosként',
		'DELETE_MESSAGE'	=> 'törlés',
	),
	'PM_CHECK' => array(
		'SUBJECT'	=> 'Ha a téma',
		'SENDER'	=> 'Ha a küldő',
		'MESSAGE'	=> 'Ha az üzenet tartalma',
		'STATUS'	=> 'Ha az üzenet állapota',
		'TO'		=> 'Ha a címzett',
	),
	'PM_RULE' => array(
		'IS_LIKE'		=> 'hasonlít a következőre:',
		'IS_NOT_LIKE'	=> 'nem hasonlít a következőre:',
		'IS'			=> 'a következő:',
		'IS_NOT'		=> 'nem a következő:',
		'BEGINS_WITH'	=> 'a következővel kezdődik:',
		'ENDS_WITH'		=> 'a következővel végződik:',
		'IS_FRIEND'		=> 'a barátom',
		'IS_FOE'		=> 'a haragosom',
		'IS_USER'		=> 'a következő felhasználó:',
		'IS_GROUP'		=> 'a következő csoport tagja:',
		'ANSWERED'		=> 'megválaszolt',
		'FORWARDED'		=> 'továbbküldött',
		'TO_GROUP'		=> 'az elsődleges csoportom',
		'TO_ME'			=> 'én vagyok',
	),


	'GROUPS_EXPLAIN'	=> 'A csoportok lehetővé teszik az adminisztrátorok számára, hogy könnyebben kezelhessék a felhasználókat. Alapból egy meghatározott csoport tagja leszel, ez az elsődleges csoportod. Ez a csoport határozza meg, hogy hogyan jelensz meg más felhasználók számára, például a felhasználóneved színét, az avatarod, a rangod stb. Attól függően, hogy az adminisztrátor engedélyezi-e, megváltoztathatod az elsődleges csoportodat. Fel is vehetnek egy másik csoportba, vagy lehetőséget biztosíthatnak, hogy csatlakozz. A csoportokkal plusz jogosultságok is járhatnak.',
	'GROUP_LEADER'		=> 'Vezetőségi tagságok', //?
	'GROUP_MEMBER'		=> 'Tagságok',
	'GROUP_PENDING'		=> 'Függő tagságok',
	'GROUP_NONMEMBER'	=> 'Egyéb csoportok',
	'GROUP_DETAILS'		=> 'Csoport adatok',

	'NO_LEADER'		=> 'Nem vagy egy csoportnak se a vezetője.', //?
	'NO_MEMBER'		=> 'Nem vagy egy csoportnak se a tagja.', //?
	'NO_PENDING'	=> 'Nincs függő csoporttagság.', //?
	'NO_NONMEMBER'	=> 'Nincs olyan csoport, melynek nem vagy tagja.', //?
));
