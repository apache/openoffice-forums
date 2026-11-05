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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'A BBCode a HTML nyelv egy speciális változata, mely nagy teret enged egy szövegrészlet megformázásához. Ezen az oldalon felvehetsz, törölheted és szerkesztehted az egyedi BBCode-okat.',
	'ADD_BBCODE'				=> 'Új BBCode felvétele',

	'BBCODE_DANGER'				=> 'A felvenni kívánt BBCode nem tűnik biztonságosnak. Ha a BBCode a {TEXT} jelölőt olyan környezetben használja, ahol az potenciális biztonsági rést jelenthet, akkor használj inkább helyette kevésbé megengedő jelölő típusokat. Csak akkor lépj tovább, ha tisztában vagy a veszélyekkel, és a {TEXT} jelölő használatát elkerülhetetlennek tartod.',
	'BBCODE_DANGER_PROCEED'		=> 'Tisztában vagyok a veszélyekkel', // 'Proceed',

	'BBCODE_ADDED'				=> 'A BBCode sikeresen felvételre került.',
	'BBCODE_EDITED'				=> 'A BBCode sikeresen szerkesztésre került.',
	'BBCODE_DELETED'			=> 'A BBCode sikeresen törlésre került.',
	'BBCODE_NOT_EXIST'			=> 'A kiválasztott BBCode nem létezik.',
	'BBCODE_HELPLINE'			=> 'Segítség',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Ennek a mezőnek a tartalma fog megjelenni, ha a BBCode fölé viszed az egeret.', //?
	'BBCODE_HELPLINE_TEXT'		=> 'Segítség szöveg',
	'BBCODE_HELPLINE_TOO_LONG'	=> 'A megadott segítség szöveg túl hosszú.',

	'BBCODE_INVALID_TAG_NAME'	=> 'A megadott BBCode címkenév már létezik.',
	'BBCODE_INVALID'			=> 'A BBCode-od formátuma nem helyes.', //? "Your BBCode is constructed in an invalid form."
	'BBCODE_INVALID_TEMPLATE'	=> 'A BBCode-od sablonja nem helyes.',
	'BBCODE_TAG'				=> 'Címke',
	'BBCODE_TAG_TOO_LONG'		=> 'A megadott címkenév túl hosszú.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'A megadott címke meghatározás túl hosszú, kérjük, rövidítsd le.',
	'BBCODE_USAGE'				=> 'BBCode használata',
	'BBCODE_USAGE_EXAMPLE'		=> '[kiemeles={COLOR}]{TEXT}[/kiemeles]<br /><br />[betutipus={SIMPLETEXT1}]{SIMPLETEXT2}[/betutipus]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Itt tudod megadni, hogy hogyan lehessen használni a BBCode-ot. Minden változó részt helyettesítsd a megfelelő jelölővel (%slásd alább%s).',

	'EXAMPLE'						=> 'Példa:',
	'EXAMPLES'						=> 'Példák:',

	'HTML_REPLACEMENT'				=> 'HTML csere',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Itt tudod megadni, hogy milyen HTML-re legyen kicserélve a BBCode. Ne felejtsd el visszarakni a fentebb használt jelölőket!', //?

	'TOKEN'					=> 'Jelölő',
	'TOKENS'				=> 'Jelölők',
	'TOKENS_EXPLAIN'		=> 'A jelölők a felhasználó által megadott adatokhoz használhatók. A BBCode csak akkor lesz feldolgozva, ha a megadott adatok megfelelnek a meghatározásnak. Ha kell, a jelölőket meg is számozhatod, ehhez a lezáró kapcsos zárójel elé írj egy számot, pl. {TEXT1}, {TEXT2}.<br /><br />A HTML cserében bármilyen a language/ könyvtárban megtalálható nyelvi elemet használhatsz a következőképp: {L_<em>&lt;ELEMNÉV&gt;</em>}, ahol az <em>&lt;ELEMNÉV&gt;</em> a hozzáadni kívánt lefordított elem. Például az {L_WROTE} „írta”-ként kerül megjelenítésre a felhasználó nyelvi beállításainak megfelelően.<br /><br /><strong>Kérjük, vedd figyelembe, hogy az egyedi BBCode-okban csak az alább felsorolt jelölők használhatók.</strong>', //?
	'TOKEN_DEFINITION'		=> 'Mi lehet?',
	'TOO_MANY_BBCODES'		=> 'Nem tudsz több BBCode-ot készíteni. Kérünk, törölj egy vagy több BBCode-ot, és próbálkozz újra.',

	'tokens'	=>	array(
		'TEXT'			=> 'Bármilyen szöveg beleértve a külföldi karaktereket, számokat stb.',
		'SIMPLETEXT'	=> 'A latin ábécé betűje (A-Z), szám, szóköz, vessző, pont, mínusz jel, plusz jel, kötőjel és alulvonás.',
		'INTTEXT'		=> 'Unicode betű, szám, szóköz, vessző, pont, mínusz jel, plusz jel, kötőjel, alulvonás és térközök.',
		'IDENTIFIER'	=> 'A latin ábécé betúje (A-Z), szám, kötőjel és alulvonás.',
		'NUMBER'		=> 'Bármilyen szám.',
		'EMAIL'			=> 'Egy érvényes e-mail cím.',
		'URL'			=> 'Egy érvényes URL, mely bármilyen engedélyezett protokollt használhat (http, ftp, stb., nem használható fel javascript támadásokhoz). Ha nincs protokoll megadva, a szöveg elé „http://” kerül elhelyezésre.',
		'LOCAL_URL'		=> 'Egy helyi URL. Az URL-nek a téma oldaltól kell lennie viszonyítva, valamint nem tartalmazhat szervernevet, illetve protokollt, a link kezdete “%s” lesz.',
		'RELATIVE_URL'	=> 'Egy relatív URL. Egy URL részlet megfeleltetésére használhatod, de légy elővigyázatos: a teljes URL egy érvényes relatív URL. Ha a fórumod relatív URL-jét szeretnéd használni, akkor helyette a LOCAL_URL jelölőt használd.', //? You can use this to match parts of a URL, but be careful: a full URL is a valid relative URL.
		'COLOR'			=> 'Egy HTML szín, lehet a <samp>#FF1234</samp> numerikus formában, vagy lehet egy <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS szín kulcsszó</a>, mint például a <samp>fuchsia</samp> vagy az <samp>InactiveBorder</samp>.'
	),
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Ezen az oldalon hozzáadhatsz, valamint törölheted, és szerkesztheted az ikonokat, melyeket a felhasználók csatolhatnak a hozzászólásaikhoz. Ezek az ikonok általában a fórum oldalakon a témák címe, a téma oldalakon pedig a hozzászólások témája mellett jelennek meg. Emellett telepíthetsz ikon csomagokat, vagy készíthetsz újat.',
	'ACP_SMILIES_EXPLAIN'	=> 'Az emotikonok általánosan kicsi, néha animált képek, melyek egy érzelmet vagy hangulatot fejeznek ki. Ezen az oldalon hozzáadhatsz, valamint törölheted és szerkesztheted az emotikonokat, melyeket a felhasználók a hozzászólásaikban, ill. privát üzeneteikben használhatnak. Emellett telepítetsz emotikon csomagokat, vagy készíthetsz újat.',
	'ADD_SMILIES'			=> 'Emotikonok felvétele', //? multiple
	'ADD_SMILEY_CODE'		=> 'További emotikon kód hozzáadása',
	'ADD_ICONS'				=> 'Ikonok felvétele',
	'AFTER_ICONS'			=> '%s után',
	'AFTER_SMILIES'			=> '%s után',

	'CODE'						=> 'Kód',
	'CURRENT_ICONS'				=> 'Jelenlegi ikonok',
	'CURRENT_ICONS_EXPLAIN'		=> 'Válaszd ki mit szeretnél tenni a jelenleg telepített ikonokkal.',
	'CURRENT_SMILIES'			=> 'Jelenlegi emotikonok',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Válaszd ki mit szeretnél tenni a jelenleg telepített emotikonokkal.',

	'DISPLAY_ON_POSTING'		=> 'Megjelenítés a hozzászólásküldő oldalon',
	'DISPLAY_POSTING'			=> 'Hozzászólásküldő oldalon', //? használják
	'DISPLAY_POSTING_NO'		=> 'Nincs a hozzászólásküldő oldalon',

	'EDIT_ICONS'				=> 'Ikonok szerkesztése',
	'EDIT_SMILIES'				=> 'Emotikonok szerkesztése',
	'EMOTION'					=> 'Érzelem',
	'EXPORT_ICONS'				=> 'Icons.pak exportálása és letöltése',
	'EXPORT_ICONS_EXPLAIN'		=> '%sErre a linkre kattintva a telepített ikonok konfigurációja ki lesz írva az <samp>icons.pak</samp> állományba, mely segítségével a letöltés után létre lehet hozni az összes ikont plusz ezt a konfigurációs állományt tartalmazó <samp>.zip</samp> vagy <samp>.tgz</samp> csomagot.%s',
	'EXPORT_SMILIES'			=> 'Smilies.pak exportálása és letöltése',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sErre a linkre kattintva a telepített emotikonok konfigurációja ki lesz írva a <samp>smilies.pak</samp> állományba, mely segítségével a letöltés után létre lehet hozni az összes emotikont plusz ezt a konfigurációs állományt tartalmazó <samp>.zip</samp> vagy <samp>.tgz</samp> csomagot.%s',

	'FIRST'			=> 'Legelejére',

	'ICONS_ADD'				=> 'Új ikon felvétele',
	'ICONS_ADDED'			=> array(
		0	=> 'Nem került felvételre ikon.',
		1	=> 'Az ikon sikeresen felvételre került.',
		2	=> 'Az ikonok sikeresen felvételre kerültek.',
	),
	'ICONS_CONFIG'			=> 'Ikon konfiguráció',
	'ICONS_DELETED'			=> 'Az ikon sikeresen törlésre került.',
	'ICONS_EDIT'			=> 'Ikon szerkesztése',
	'ICONS_EDITED'			=> array(
		0	=> 'Nem került ikon frissítésre.',
		1	=> 'Az ikon sikeresen frissítésre került.',
		2	=> 'Az ikonok sikeresen frissítésre kerültek.',
	),
	'ICONS_HEIGHT'			=> 'Ikon magasság',
	'ICONS_IMAGE'			=> 'Ikon kép',
	'ICONS_IMPORTED'		=> 'Az ikon csomag sikeresen telepítésre került.',
	'ICONS_IMPORT_SUCCESS'	=> 'Az ikon csomag sikeresen importálásra került.',
	'ICONS_LOCATION'		=> 'Ikon helye',
	'ICONS_NOT_DISPLAYED'	=> 'A következő ikonok nem jelennek meg a hozzászólásküldő oldalon',
	'ICONS_ORDER'			=> 'Ikon sorrend',
	'ICONS_URL'				=> 'Ikon képállomány',
	'ICONS_WIDTH'			=> 'Ikon szélesség',
	'IMPORT_ICONS'			=> 'Ikon csomag telepítése',
	'IMPORT_SMILIES'		=> 'Emotikon csomag telepítése',

	'KEEP_ALL'			=> 'Összes megtartása',

	'MASS_ADD_SMILIES'	=> 'Több emotikon felvétele', //?

	'NO_ICONS_ADD'		=> 'Nincs felvehető ikon.',
	'NO_ICONS_EDIT'		=> 'Nincs módosítható ikon.',
	'NO_ICONS_EXPORT'	=> 'Nincs ikonod, melyből csomagot készíthetnél.',
	'NO_ICONS_PAK'		=> 'Nem található ikon csomag.',
	'NO_SMILIES_ADD'	=> 'Nincs felvehető emotikon',
	'NO_SMILIES_EDIT'	=> 'Nincs módosítható emotikon.',
	'SMILIE_NO_CODE'	=> 'Az „%s” emotikon nem lett figyelembe véve, mivel nem lett hozzá kód megadva.',
	'SMILIE_NO_EMOTION'	=> 'Az „%s” emotikon nem lett figyelembe véve, mivel nem lett hozzá kitöltve az érzelem mező.',
	'SMILIE_NO_FILE'	=> 'Az „%s” emotikon nem lett figyelembe véve, mivel a képfájl nem létezik.',
	'NO_SMILIES_EXPORT'	=> 'Nincs emotikonod, melyből csomagot készíthetnél.',
	'NO_SMILIES_PAK'	=> 'Nem található emotikon csomag.',

	'PAK_FILE_NOT_READABLE'		=> 'A <samp>.pak</samp> állományt nem sikerült olvasni.',

	'REPLACE_MATCHES'	=> 'Egyezők kicserélése', //? "Replace matches"

	'SELECT_PACKAGE'			=> 'Csomag állomány kiválasztása',
	'SMILIES_ADD'				=> 'Új emotikon felvétele',
	'SMILIES_ADDED'				=> array(
		0	=> 'Nem került felvételre emotikon.',
		1	=> 'Az emotikon sikeresen hozzáadásra került.',
		2	=> 'Az emotikonok sikeresen felvételre kerültek.',
	),
	'SMILIES_CODE'				=> 'Emotikon kód',
	'SMILIES_CONFIG'			=> 'Emotikon konfiguráció',
	'SMILIES_DELETED'			=> 'Az emotikon sikeresen törlésre került.',
	'SMILIES_EDIT'				=> 'Emotikon szerkesztése',
	'SMILIES_EDITED'			=> array(
		0	=> 'Nem került frissítésre emotikon.',
		1	=> 'Az emotikon sikeresen frissítésre került.',
		2	=> 'Az emotikonok sikeresen frissítésre kerültek.',
	),
	'SMILIES_EMOTION'			=> 'Érzelem',
	'SMILIES_HEIGHT'			=> 'Emotikon magasság',
	'SMILIES_IMAGE'				=> 'Emotikon kép',
	'SMILIES_IMPORTED'			=> 'Az emotikon csomag sikeresen telepítésre került.',
	'SMILIES_IMPORT_SUCCESS'	=> 'Az emotikon csomag sikeresen importálásra került.',
	'SMILIES_LOCATION'			=> 'Emotikon helye',
	'SMILIES_NOT_DISPLAYED'		=> 'A következő emotikonok nem jelennek meg a hozzászólásküldő oldalon',
	'SMILIES_ORDER'				=> 'Emotikon sorrend',
	'SMILIES_URL'				=> 'Emotikon képállomány',
	'SMILIES_WIDTH'				=> 'Emotikon szélesség',

	'TOO_MANY_SMILIES'			=> array(
		1	=> 'A %d emotikonos korlát elérésre került.',
		2	=> 'A %d emotikonos korlát elérésre került.',
	),

	'WRONG_PAK_TYPE'	=> 'A megadott csomag nem tartalmazza a megfelelő adatokat.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'Ezen az oldalon felvehetsz, valamint szerkesztheted és eltávolíthatod a szavakat, melyek automatikusan kicenzúrázásra kerülnek a fórumon. A korlátozás a felhasználónevekre nem vonatkozik, továbbra is lehet ilyen szót tartalmazó felhasználónévvel regisztrálni. A szavak megadásánál használhatod a * jokerkaraktert, pl. az alaplap szó illeszkedni fog a „*lap*”-ra, a „lap*”-ra a lapszám, „*lap”-ra pedig a főlap.',
	'ADD_WORD'				=> 'Új szó felvétele',

	'EDIT_WORD'		=> 'Szócenzúra szerkesztése',
	'ENTER_WORD'	=> 'Meg kell adnod egy szót és a helyettesítését.',

	'NO_WORD'	=> 'Nincs szó kiválasztva szerkesztéshez.',

	'REPLACEMENT'	=> 'Helyettesítés',

	'UPDATE_WORD'	=> 'Szócenzúra frissítése',

	'WORD'				=> 'Szó',
	'WORD_ADDED'		=> 'A cenzúrázott szó sikeresen felvételre került.',
	'WORD_REMOVED'		=> 'A kiválasztott cenzúrázott szó sikeresen eltávolításra került.',
	'WORD_UPDATED'		=> 'A kiválasztott cenzúrázott szó sikeresen frissítésre került.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'Ennek az űrlapnak segítségével hozzáadhatsz, valamit szerkesztheted, és törölheted a rangokat. Speciális rangot is készíthetsz, melyet a felhasználók kezelése funkció segítségével rendelhetsz hozzá a felhasználókhoz.',
	'ADD_RANK'				=> 'Új rang hozzáadása',

	'MUST_SELECT_RANK'		=> 'Ki kell választanod egy rangot.',

	'NO_ASSIGNED_RANK'		=> 'Nincs speciális rang hozzárendelve.',
	'NO_RANK_TITLE'			=> 'Nem adtál nevet a rangnak.',
	'NO_UPDATE_RANKS'		=> 'A rang sikeresen törlésre került, azonban az ezt a rangot használó felhasználók profiljai nem lettek frissítve. Ezeken az azonosítókon kézzel kell újra beállítanod a rangokat.',

	'RANK_ADDED'			=> 'A rang sikeresen hozzáadásra került.',
	'RANK_IMAGE'			=> 'Rang kép',
	'RANK_IMAGE_EXPLAIN'	=> 'Ezzel a ranghoz egy kis képet lehet társítani. Az elérési út relatív, a phpBB gyökérkönyvtárától viszonyított.',
	'RANK_IMAGE_IN_USE'		=> '(használatban)',
	'RANK_MINIMUM'			=> 'Minimum hozzászólásszám',
	'RANK_REMOVED'			=> 'A rang sikeresen törlésre került.',
	'RANK_SPECIAL'			=> 'Speciális rang',
	'RANK_TITLE'			=> 'Rang neve',
	'RANK_UPDATED'			=> 'A rang sikeresen frissítésre került.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Itt a nem használható felhasználóneveket kezelheted. A letiltott felhasználónevekben használhatod a * jokerkaraktert.', //? nem használják?
	'ADD_DISALLOW_EXPLAIN'	=> 'Használhatod a * jokerkaraktert, mely minden karakterre illeszkedik.',
	'ADD_DISALLOW_TITLE'	=> 'Letiltott felhasználónév felvétele',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Egy letiltott felhasználónév eltávolításához válaszd ki a megfelelő nevet a listából, és kattints az elküld gombra',
	'DELETE_DISALLOW_TITLE'		=> 'Letiltott felhasználónév eltávolítása',
	'DISALLOWED_ALREADY'		=> 'A megadott név már le lett tiltva.',
	'DISALLOWED_DELETED'		=> 'A letiltott felhasználónév sikeresen eltávolításra került.',
	'DISALLOW_SUCCESSFUL'		=> 'A letiltott felhasználónév sikeresen felvételre került.',

	'NO_DISALLOWED'				=> 'Nincs letiltott felhasználónév.',
	'NO_USERNAME_SPECIFIED'		=> 'Nem adtál meg felhasználónevet, amin el lehetne végezni a műveletet.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Itt a jelentésekben és a hozzászólások elutasításakor küldött üzenetekben használt okokat kezelheted. Van egy alapértelmezett ok (a *-gal megjelölt), melyet nem lehet eltávolítani, ezt lehet használni egyedi üzenetek megadásához, ha egyik ok sem felel meg.',
	'ADD_NEW_REASON'		=> 'Új ok felvétele',
	'AVAILABLE_TITLES'		=> 'Elérhető honosított ok nevek',

	'IS_NOT_TRANSLATED'			=> '<strong>Nem</strong> honosított ok',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'Az ok <strong>nincs</strong> honosítva. Ha meg akarod adni a honosított formáját, add meg a megfelelő nyelvi kulcsot a nyelvi állományok jelentés okok részéből.',
	'IS_TRANSLATED'				=> 'Honosított ok',
	'IS_TRANSLATED_EXPLAIN'		=> 'Az ok honosítva van. Ha az itt megadott név szerepel a nyelvi állományok jelentés okok részében, a honosított név és leírás lesz használva.',

	'NO_REASON'					=> 'Az ok nem található.',
	'NO_REASON_INFO'			=> 'Meg kell adnod egy nevet és egy leírást az oknak.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Az alapértelmezett „Egyéb” okot nem tudod eltávolítani.',

	'REASON_ADD'				=> 'Jelentés/visszautasítás ok felvétele',
	'REASON_ADDED'				=> 'A jelentés/visszautasítás ok sikeresen felvételre került.',
	'REASON_ALREADY_EXIST'		=> 'Már létezik ok ilyen névvel, kérünk, adj más nevet az oknak.',
	'REASON_DESCRIPTION'		=> 'Ok leírás',
	'REASON_DESC_TRANSLATED'	=> 'Megjelenített ok leírás',
	'REASON_EDIT'				=> 'Jelentés/visszautasítás ok szerkesztése',
	'REASON_EDIT_EXPLAIN'		=> 'Itt fel tudsz venni, illetve szerkeszteni tudsz egy okot. Ha az ok le van fordítva, a honosított formája lesz használva az itt megadott leírás helyett.',
	'REASON_REMOVED'			=> 'A jelentés/visszautasítás ok sikeresen eltávolításra került.',
	'REASON_TITLE'				=> 'Ok neve',
	'REASON_TITLE_TRANSLATED'	=> 'Megjelenített ok név',
	'REASON_UPDATED'			=> 'A jelentés/visszautasítás ok sikeresen frissítésre került.',

	'USED_IN_REPORTS'		=> 'Használat száma',
));
