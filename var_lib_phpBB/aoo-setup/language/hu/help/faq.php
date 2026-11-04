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

$lang = array_merge($lang, array(
	'HELP_FAQ_ATTACHMENTS_ALLOWED_ANSWER'	=> 'Az adminisztrátorok saját maguk állíthatják be, hogy milyen típusú csatolmányokat engedélyeznek. Ha nem vagy biztos benne, mi engedélyezett, lépj kapcsolatba az adminisztrátorral.',
	'HELP_FAQ_ATTACHMENTS_ALLOWED_QUESTION'	=> 'Milyen csatolmányok engedélyezettek ezen a fórumon?',
	'HELP_FAQ_ATTACHMENTS_OWN_ANSWER'	=> 'Az általad feltöltött csatolmányok eléréséhez, menj a felhasználói vezérlőpultra, és kövesd a linkeket a csatolmányok részhez.',
	'HELP_FAQ_ATTACHMENTS_OWN_QUESTION'	=> 'Hogyan érem el a saját csatolmányaimat?',

	'HELP_FAQ_BLOCK_ATTACHMENTS'	=> 'Csatolmányok',
	'HELP_FAQ_BLOCK_BOOKMARKS'	=> 'Feliratkozások és kedvencek',
	'HELP_FAQ_BLOCK_FORMATTING'	=> 'Formázás és téma típusok',
	'HELP_FAQ_BLOCK_FRIENDS'	=> 'Barátok és haragosok',
	'HELP_FAQ_BLOCK_GROUPS'	=> 'Felhasználói szintek és csoportok',
	'HELP_FAQ_BLOCK_ISSUES'	=> 'phpBB kérdések',
	'HELP_FAQ_BLOCK_LOGIN'	=> 'Belépési és regisztrációs kérdések',
	'HELP_FAQ_BLOCK_PMS'	=> 'Privát üzenetek',
	'HELP_FAQ_BLOCK_POSTING'	=> 'Hozzászólással kapcsolatos kérdések',
	'HELP_FAQ_BLOCK_SEARCH'	=> 'Keresés a fórumban',
	'HELP_FAQ_BLOCK_USERSETTINGS'	=> 'Felhasználói beállítások',

	'HELP_FAQ_BOOKMARKS_DIFFERENCE_ANSWER'	=> 'A phpBB 3.0 kedvencek funkciója hasonlóan működött a böngésződéhez. Nem kerültél értesítésre, ha frissült a tartalom. A phpBB 3.1-ben viszont a kedvencekbe tétel a feliratkozáshoz hasonlít. Értesítésre kerülhetsz, ha a téma frissül. Feliratkozáskor, ezzel ellentétben, értesítésre kerülsz, amikor a téma vagy a fórum frissül. Az értesítési beállítások testreszabhatóak a felhasználói vezérlőpult „Fórum beállítások” menüpontjában.',
	'HELP_FAQ_BOOKMARKS_DIFFERENCE_QUESTION'	=> 'Mi a különbség a kedvencekbe tétel és a feliratkozás között?',
	'HELP_FAQ_BOOKMARKS_FORUM_ANSWER'	=> 'Egy fórumra úgy tudsz feliratkozni, hogy a fórum oldalán alul a „Feliratkozás a fórumra” linkre kattintasz.',
	'HELP_FAQ_BOOKMARKS_FORUM_QUESTION'	=> 'Hogyan tudok feliratkozni egy fórumra?',
	'HELP_FAQ_BOOKMARKS_REMOVE_ANSWER'	=> 'A leiratkozáshoz menj a felhasználói vezérlőpultra, és kövesd a linkeket a feliratkozásaidhoz.',
	'HELP_FAQ_BOOKMARKS_REMOVE_QUESTION'	=> 'Hogyan tudok leiratkozni?',
	'HELP_FAQ_BOOKMARKS_TOPIC_ANSWER'	=> 'Kedvencekbe tehetsz vagy feliratkozhatsz egy témára a “Téma eszközök” menüpont megfelelő hivatkozására kattintva, ami általában a téma tetején és alján helyezkedik el.<br />A témára úgy is feliratkozhatsz, ha a “Értesítést kérek új válasz érkezésekor” opció bejelölésével küldesz új hozzászólást.',
	'HELP_FAQ_BOOKMARKS_TOPIC_QUESTION'	=> 'Hogyan tudok kedvencekbe tenni vagy feliratkozni egy témára?',

	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_ANSWER'	=> 'A közlemények gyakran fontos információkat tartalmaznak az adott fórummal kapcsolatban, ezért olvasd el őket valahányszor csak tudod. A közlemények a fórum összes oldalán, felül jelennek meg. Hasonlóan a globális közleményekhez, közlemények küldéséhez is az adminisztrátor adhat jogosultságot.',
	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_QUESTION'	=> 'Mik azok a közlemények?',
	'HELP_FAQ_FORMATTING_BBOCDE_ANSWER'	=> 'A BBCode a HTML nyelv egy speciális változata, mely nagy teret enged egy szövegrészlet megformázásához. A BBCode használatának engedélyezése az adminisztrátortól függ, de neked is lehetőséged van ki- vagy bekapcsolni a hozzászólásaidnál. A BBCode hasonló felépítésű, mint a HTML, kivéve hogy a címkék nem kacsacsőrök között („&lt;” , ill. „&gt;”), hanem szögletes zárójelben („[”, ill. „]”) vannak. További információért lásd a BBCode útmutatót, melyet a hozzászólásküldő oldalról érhetsz el.',
	'HELP_FAQ_FORMATTING_BBOCDE_QUESTION'	=> 'Mi az a BBCode?',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_ANSWER'	=> 'A globális közlemények fontos információkat tartalmaznak, ezért olvasd el őket valahányszor csak tudod. A felhasználói vezérlőpultban és minden fórum tetején jelennek meg. Globális közlemények küldéséhez az adminisztrátor adhat jogosultságot.',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_QUESTION'	=> 'Mik azok a globális közlemények?',
	'HELP_FAQ_FORMATTING_HTML_ANSWER'	=> 'Nem. Nem lehetséges HTML-t küldeni, majd azt HTML-ként is megjeleníteni. A legtöbb HTML-lel létrehozható formázás BBCode használatával is elérhető.',
	'HELP_FAQ_FORMATTING_HTML_QUESTION'	=> 'Használhatok HTML-t?',
	'HELP_FAQ_FORMATTING_ICONS_ANSWER'	=> 'A téma ikonok kis képek, melyeket a küldő társít a hozzászólásához jelképezve annak tartalmát. A téma ikonok használatának lehetősége az adminisztrátortól függ.',
	'HELP_FAQ_FORMATTING_ICONS_QUESTION'	=> 'Mik azok a téma ikonok?',
	'HELP_FAQ_FORMATTING_IMAGES_ANSWER'	=> 'Igen, megjeleníthetsz képeket a hozzászólásaidban. Azonban, ha az adminisztrátor engedélyezte a csatolmányok hozzáadását, akkor a képeket egyenesen a fórumra is feltöltheted. Ellenkező esetben a képeket egy publikus, mindenki által elérhető szerveren kell tárolnod, és onnan belinkelned – például: http://www.akarmi.hu/en-kepem.gif. Nem tudsz belinkelni képeket a saját gépedről (hacsak az nem érhető el kívülről is), azonosítást igénylő oldalakról (mint például freemail, gmail, yahoo postafiókok), jelszóval védett weblapokról stb. A képek megjelenítéséhez használd az [img] BBCode címkét.',
	'HELP_FAQ_FORMATTING_IMAGES_QUESTION'	=> 'Küldhetek képeket?',
	'HELP_FAQ_FORMATTING_LOCKED_ANSWER'	=> 'A lezárt témák olyan témák, melyekbe nem lehet hozzászólást küldeni vagy szavazni bennük. Egy téma lezárásának több oka lehet, és egy témát egy adminisztrátor vagy egy moderátor zárhat le. Ha a fórum adminisztrátora megadta a szükséges jogosultságokat, lehetőséged lehet lezárni a saját témáidat.',
	'HELP_FAQ_FORMATTING_LOCKED_QUESTION'	=> 'Mik azok a lezárt témák?',
	'HELP_FAQ_FORMATTING_SMILIES_ANSWER'	=> 'A smiley-k vagy más néven emotikonok kis grafikák, melyekkel érzéseket lehet kifejezni. Például a :) vidámot/boldogot, a :( szomorút jelent. A használható emotikonok teljes listája megtalálható a hozzászólás küldésénél. Lehetőleg ne használj túl sok emotikont, mert nehezen lesz olvasható a hozzászólás, ezért pedig egy moderátor kiszerkesztheti őket, vagy akár az egész hozzászólást törölheti. A fórum adminisztrátora beállíthat egy felső korlátot, melynél nem használhatsz több emotikont egy hozzászólásban.',
	'HELP_FAQ_FORMATTING_SMILIES_QUESTION'	=> 'Mik azok az emotikonok?',
	'HELP_FAQ_FORMATTING_STICKIES_ANSWER'	=> 'A kiemelt témák a közlemények alatt jelennek meg a fórumokban, de csak az első oldalon. Gyakran elég fontosak, úgyhogy érdemes őket elolvasnod, ha lehetséges. Hasonlóan a globális és nem globális közleményekhez, kiemelt témák küldéséhez az adminisztrátor adhat jogosultságot.',
	'HELP_FAQ_FORMATTING_STICKIES_QUESTION'	=> 'Mik azok a kiemelt témák?',

	'HELP_FAQ_FRIENDS_BASIC_ANSWER'	=> 'Ezen listák segítségével rendszerezheted a fórum többi tagját. A barátok listában szereplő felhasználók megjelennek a felhasználói vezérlőpultban, így gyorsan elérheted őket, küldhetsz nekik privát üzenetet, és láthatod, hogy éppen jelen vannak-e. A használt megjelenés támogatásától függően, a barátok hozzászólásai kiemelve szerepelhetnek. Ha egy felhasználót haragosként jelölsz meg, akkor a hozzászólásai alapból nem fognak megjelenni.',
	'HELP_FAQ_FRIENDS_BASIC_QUESTION'	=> 'Mire valók a barátok és haragosok listák?',
	'HELP_FAQ_FRIENDS_MANAGE_ANSWER'	=> 'A listáidra két módon vehetsz fel felhasználókat. Minden felhasználó profiljában található egy link, melynek segítségével felveheted a barátaid vagy a haragosaid közé. Emellett a felhasználói vezérlőpultban is felvehetsz embereket, közvetlenül megadva a felhasználónevüket. Ugyanezen oldalon el is távolíthatsz felhasználókat a listáidról.',
	'HELP_FAQ_FRIENDS_MANAGE_QUESTION'	=> 'Hogyan adhatok hozzá, illetve távolíthatok el felhasználókat a barátok vagy haragosok listáról?',

	'HELP_FAQ_GROUPS_ADMINISTRATORS_ANSWER'	=> 'Az adminisztrátorok a fórum legmagasabb rangú és jogú tagjai, ők üzemeltetik, és tartják karban. A fórum minden részletét szabályozhatják, például jogosultságokat adhatnak, kitilthatnak felhasználókat, csoportokat hozhatnak létre, moderátorokat nevezhetnek ki stb. attól függően, hogy a fórumalapító milyen jogosultságokat adott a többi adminisztrátornak. Teljesjogú moderátorok is lehetnek az összes fórumban.',
	'HELP_FAQ_GROUPS_ADMINISTRATORS_QUESTION'	=> 'Kik azok az adminisztrátorok?',
	'HELP_FAQ_GROUPS_COLORS_ANSWER'	=> 'Az adminisztrátor színeket rendelhet egy csoport tagjaihoz, hogy könnyen azonosíthatók legyenek.',
	'HELP_FAQ_GROUPS_COLORS_QUESTION'	=> 'Miért jelenik meg néhány csoport más színnel?',
	'HELP_FAQ_GROUPS_DEFAULT_ANSWER'	=> 'Ha több csoport tagja is vagy, akkor ez a csoport határozza meg, hogy milyen színnel jelenik meg a neved, és hogy alapból milyen csoport avatar jelenik meg nálad. Az adminisztrátor engedélyezheti, hogy megváltoztasd az elsődleges csoportodat a felhasználói vezérlőpultban.',
	'HELP_FAQ_GROUPS_DEFAULT_QUESTION'	=> 'Mi az az „elsődleges csoport”?',
	'HELP_FAQ_GROUPS_MODERATORS_ANSWER'	=> 'A moderátorok olyan különleges jogosultságokkal rendelkező tagok, akik napról napra figyelemmel követik a fórumokat. Jogukban áll szerkeszteni, törölni a hozzászólásokat, valamint lezárni, megnyitni, áthelyezni, törölni és szétválasztani a témákat az általuk moderált fórumban. Általánosságban a moderátorok azért vannak, hogy meggátolják a témába nem illő, sértegető vagy támadó hangvételű hozzászólások küldését. ',
	'HELP_FAQ_GROUPS_MODERATORS_QUESTION'	=> 'Kik azok a moderátorok?',
	'HELP_FAQ_GROUPS_TEAM_ANSWER'	=> 'Ezen az oldalon egy listát találhatsz a fórum üzemeltetőiről: az adminisztrátorokról és a moderátorokról (utóbbiaknál jelezve például azt is, hogy melyik fórumot moderálják).',
	'HELP_FAQ_GROUPS_TEAM_QUESTION'	=> 'Mi az az „A csapat” link?',
	'HELP_FAQ_GROUPS_USERGROUPS_ANSWER'	=> 'A felhasználói csoportok segítségével felosztható a közösség olyan egységekre, melyeket az adminisztrátor könnyen kezelhet. Minden felhasználó több csoportba is tartozhat, és mindegyik csoporthoz saját jogosultságok rendelhetők. Ezzel az adminisztrátor könnyedén létrehozhat zártkörű fórumokat, moderátorrá tehet egyszerre több felhasználót stb.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_ANSWER'	=> 'A fórumon lévő csoportokat a felhasználói vezérlőpultban tekintheted meg a „Csoportok” linkre kattintva. Ha csatlakozni szeretnél egy csoporthoz, kattints a megfelelő gombra. Mindemellett nem az összes csoport <em>nyílt hozzáférésű</em>, néhánynál jóváhagyás szükséges a csatlakozáshoz, néhány zárt, néhány pedig egyenesen rejtett. Ha a csoport nyitott, akkor a megfelelő gombra kattintva tudsz csatlakozni. Ezután a csoport vezetőjének jóvá kell hagynia a kérelmed – ennek kapcsán megkérdezheti, hogy miért szeretnél csatlakozni a csoporthoz. Kérjük, ne zaklasd a csoportvezetőt, ha elutasítja a kérelmed, biztosan megvan az oka.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_QUESTION'	=> 'Hol látom a csoportokat, és hogyan csatlakozhatok egyhez?',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_ANSWER'	=> 'Amikor az adminisztrátor létrehoz egy csoportot, általában egy csoportvezető is kijelölésre kerül. Ha szeretnél létrehozni egy csoportot, akkor lépj kapcsolatba egy adminisztrátorral – például egy privát üzenet küldésével.',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_QUESTION'	=> 'Hogyan lehetek csoportvezető?',
	'HELP_FAQ_GROUPS_USERGROUPS_QUESTION'	=> 'Mik azok a csoportok?',

	'HELP_FAQ_ISSUES_ADMIN_ANSWER'	=> 'Sértő, illetve illegális tartalmak kapcsán az „A csapat” oldalon felsorolt adminisztrátorok közül kell egyet felkeresni. Ha nem kapsz választ, akkor a domain tulajdonosát. Ha a fórum egy ingyenes tárhelyen található, akkor azt a szolgáltatót értesítsd. Kérjük, vedd figyelembe, hogy a phpBB Limited-nek és a Magyar phpBB Közösségnek semmilyen köze, hozzáférése vagy beleszólása nincs a fórumon olvasható tartalomhoz, ezért nem tehető semmilyen módon felelőssé amiatt, hogy ki mire használja ezt a fórumot.',
	'HELP_FAQ_ISSUES_ADMIN_QUESTION'	=> 'Ki az illetékes a fórumon olvasható tartalommal kapcsolatban?',
	'HELP_FAQ_ISSUES_FEATURE_ANSWER'	=> 'A magyar fordítást a <a href="http://phpbb.hu/">Magyar phpBB Közösség</a> <a href="http://phpbb.hu/forditas">fordító</a> készítik, és tartják karban. A fordítást Fodor Bertalan és Menyhárt Zsolt készítette Berentés Marcell, Joó Ádám és Bartus Máté közreműködésével. Ha bármilyen hibát találsz, kérjük, jelezd a <a href="http://phpbb.hu/bugs">hibabejelentőnkben</a>.',
	'HELP_FAQ_ISSUES_FEATURE_QUESTION'	=> 'Ki készítette ezt a magyar fordítást?',
	'HELP_FAQ_ISSUES_LEGAL_ANSWER'	=> 'Ezt a szoftvert a phpBB Limited készítette, és licenceli. Ha úgy gondolod, hogy újabb szolgáltatások, funkciók szükségesek a fórumba, vagy valamilyen működési hibát találtál, látogasd meg a <a href="https://www.phpbb.com/ideas/">phpBB Ideas Centre</a> weboldalt, ahol ezzel kapcsolatban további információkat kaphatsz.',
	'HELP_FAQ_ISSUES_LEGAL_QUESTION'	=> 'Miért nem érhető el az X szolgáltatás?',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_ANSWER'	=> 'Ezt a szoftvert (eredeti formájában) a <a href="https://www.phpbb.com/">phpBB Limited</a> készítette, adta ki, és gyakorolja a szerzői jogokat felette. A GNU General Public License alatt érhető el, és szabadon terjeszthető. További információért lásd a linket.',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_QUESTION'	=> 'Ki készítette ezt a fórumot?',

	'HELP_FAQ_LOGIN_AUTO_LOGOUT_ANSWER'	=> 'Ha belépéskor nem jelölöd be az <em>Emlékezzen rám</em> opciót, a rendszer csak egy előre meghatározott ideig hagy belépve. Ez a viselkedés meggátolja az azonosítóddal való visszaélést. A tartós belépve maradáshoz jelöld be az említett opciót. Ezen funkció használata nem ajánlott, ha nyilvános helyről használod a fórumot, például könyvtárból, internetkávézóból vagy egyetemi laborból. Ha nem látod a jelölőnégyzetet, a fórumon valószínűleg nincs bekapcsolva ez a funkció.',
	'HELP_FAQ_LOGIN_AUTO_LOGOUT_QUESTION'	=> 'Miért kerülök kiléptetésre automatikusan?',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANSWER'	=> 'Ennek számos oka lehet. Először is ellenőrizd, hogy jól adtad-e meg a felhasználóneved és a jelszavad. Ha igen, lépj kapcsolatba a fórum adminisztrátorával, hogy meggyőződj róla, nem lettél kitiltva. Az is lehetséges, hogy a weboldal üzemeltetőjének oldalán lépett fel valamilyen konfigurációs hiba, melyet javítaniuk kéne.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_ANSWER'	=> 'Keresd elő a regisztrációkor kapott e-mailt, ellenőrizd le a felhasználóneved és a jelszavad, majd próbálkozz újra. Lehetséges, hogy az adminisztrátor valamilyen okból kifolyólag inaktiválta, vagy törölte az azonosítód. Ez utóbbinak egy lehetséges oka, hogy nem küldtél egy hozzászólást se. Néhány fórumon ugyanis szokás, hogy bizonyos időközönként eltávolítják az olyan felhasználókat, akik nem küldtek hozzászólást, hogy csökkentsék az adatbázis méretét. Próbálj meg újra regisztrálni és bekapcsolódni a társalgásba.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_QUESTION'	=> 'Korábban regisztráltam magam, azonban már nem tudok belépni?!',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_QUESTION'	=> 'Miért nem tudok belépni?',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_ANSWER'	=> 'Lehet, hogy a weboldal tulajdonosa letiltotta az IP-címed vagy a regisztrálni kívánt felhasználónevet. Az is előfordulhat, hogy a regisztráció kikapcsolásra került, hogy ne tudjanak új felhasználók regisztrálni. További segítségért lépj kapcsolatba a fórum egyik adminisztrátorával.',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_QUESTION'	=> 'Miért nem tudok regisztrálni?',
	'HELP_FAQ_LOGIN_COPPA_ANSWER'	=> 'A COPPA, vagyis az 1998-as „Child Online Privacy and Protection Act” (gyerekek online adatvédelméről intézkedő törvény) egy egyesült államokbeli törvény, mely megköveteli a honlapoktól, hogy írásos szülői vagy gondviselői beleegyezéssel rendelkezzenek 13 éven aluli személyektől való adatgyűjtéshez. Ez a törvény csak az Amerikai Egyesült Államokban lévő szervereken működő fórumokra érvényes, tehát Magyarországon nem. Ha nem vagy biztos benne, hogy ez a törvény vonatkozik-e rád vagy a fórumra, melyre regisztrálsz, kérj jogi segítséget. Kérjük, tartsd szem előtt, hogy a phpBB Limited nem tud jogi tanácsot adni, és az alább leírtakon kívül semmilyen aggály esetén sem hozzájuk kell fordulni.',
	'HELP_FAQ_LOGIN_COPPA_QUESTION'	=> 'Mi az a COPPA?',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_ANSWER'	=> 'Ez a funkció törli az összes phpBB3 által küldött sütit. A sütik feladata az azonosítás, illetve a beléptetés, valamint – ha a fórum tulajdonosa beállította – a hozzászólások olvasottságának követése és ehhez hasonló funkciók. Ha problémáid vannak a belépéssel vagy a kilépéssel, a sütik törlése segíthet.',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_QUESTION'	=> 'Mit csinál a „Sütik törlése”?',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_ANSWER'	=> 'Semmi pánik! A jelszavad ugyan nem lehet utólag kideríteni, de lehetőséged van új készítésére. Ehhez menj a belépés oldalra, majd kattints az <em>Elfelejtettem a jelszavam</em> linkre. Kövesd az utasításokat, és rövid időn belül újra be kell tudnod lépned.',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_QUESTION'	=> 'Elfelejtettem a jelszavamat!',
	'HELP_FAQ_LOGIN_REGISTER_ANSWER'	=> 'A regisztráció nem feltétlenül kötelező, a fórum adminisztrátorán múlik, hogy megköveteli-e hozzászólások küldéséhez. Mindemellett a regisztrációval plusz lehetőségek is elérhetővé válnak a számodra, mint például avatar használata, privát üzenetek, illetve e-mailek küldése, csatlakozás csoportokhoz stb. A regisztráció csupán néhány másodpercet vesz igénybe, így javasoljuk, hogy éljél vele.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_ANSWER'	=> 'Először is ellenőrizd le, hogy helyesen adtad-e meg a felhasználóneved és a jelszavad. Ha igen, akkor két dolog történhetett. Amennyiben a COPPA-támogatás be van kapcsolva, és a regisztráció során megadtad, hogy 13 évesnél fiatalabb vagy, követned kell a kapott utasításokat. Számos fórum megköveteli, hogy az új azonosítók aktiválásra kerüljenek, mielőtt használatba lehetne venni őket. Ezt vagy egy adminisztrátornak vagy a felhasználónak kell megtennie. Mindenesetre a regisztrációnál elvileg tájékoztatásra kerültél, hogy szükséges-e az azonosító aktiválása. Ha kaptál egy e-mailt, akkor kövesd az utasításait, ha nem, lehet, hogy rossz e-mail címet adtál meg, vagy a spamszűrőd kiszűrte. Ha biztos vagy benne, hogy helyes e-mail címet adtál meg, próbálj meg kapcsolatba lépni a fórum adminisztrátorával.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_QUESTION'	=> 'Regisztráltam, de mégsem tudok belépni',
	'HELP_FAQ_LOGIN_REGISTER_QUESTION'	=> 'Miért kell regisztrálnom?',

	'HELP_FAQ_PMS_CANNOT_SEND_ANSWER'	=> 'Ennek három oka lehet: nem regisztráltál, vagy nem vagy belépve; az adminisztrátor nem engedélyezte a fórumon privát üzenetek küldését; vagy az adminisztrátor nem engedélyezte neked, hogy privát üzenetet küldjél. További információért lépj kapcsolatba egy adminisztrátorral.',
	'HELP_FAQ_PMS_CANNOT_SEND_QUESTION'	=> 'Nem tudok privát üzenetet küldeni!',
	'HELP_FAQ_PMS_SPAM_ANSWER'	=> 'Ezt sajnálattal halljuk. A fórum e-mail funkciója tartalmaz ez irányú óvintézkedéseket. Értesítsd a fórum adminisztrátorát, küldd el neki a kapott e-mail teljes másolatát is – fontos, hogy ez a fejlécet is tartalmazza, ugyanis ebben szerepelnek az adatok az e-mail küldőjéről. A fórum adminisztrátora megteheti a szükséges lépéseket.',
	'HELP_FAQ_PMS_SPAM_QUESTION'	=> 'Kéretlen vagy sértegető e-mailt kaptam valakitől a fórumról!',
	'HELP_FAQ_PMS_UNWANTED_ANSWER'	=> 'A felhasználói vezérlőpultban beállítható szűrők segítségével letilthatsz embereket, hogy ne tudjanak neked privát üzenetet küldeni. Ha sértegető üzeneteket kapsz valakitől, értesíts egy adminisztrátort, ő ugyanis beállíthatja, hogy egy felhasználó ne tudjon privát üzenetet küldeni.',
	'HELP_FAQ_PMS_UNWANTED_QUESTION'	=> 'Folyamatosan kéretlen üzeneteket kapok!',

	'HELP_FAQ_POSTING_BUMP_ANSWER'	=> 'A téma megtekintésénél megjelenő „Téma előreugrasztása” linkre kattintva „előreugraszthatsz” egy témát a fórum tetejére, hogy a témák felsorolásánál elsőként jelenjen meg. Ha nem látod ezt a linket, akkor ez a funkció nincs bekapcsolva a fórumon, vagy még nem telt le az előugrasztáshoz szükséges idő. Egy témát úgy is előreugraszthatsz, hogy küldesz bele egy hozzászólást – ennél viszont vigyázz az aktuális fórum szabályainak betartására.',
	'HELP_FAQ_POSTING_BUMP_QUESTION'	=> 'Hogyan ugraszthatok előre egy témát?',
	'HELP_FAQ_POSTING_CREATE_ANSWER'	=> 'Ha egy fórumban új témát szeretnél nyitni, kattints az "Új téma" gombra a fórumban. Hozzászólás küldéséhez egy már létező témába kattints az "Új hozzászólás" gombra. Hozzászólás küldéséhez lehet, hogy előbb regisztrálnod kell. A jogosultságaidat a fórum vagy téma oldalak alján találod meg. Például: Nyithatsz új témákat, Küldhetsz hozzászólást csatolmánnyal stb.',
	'HELP_FAQ_POSTING_CREATE_QUESTION'	=> 'Hogyan készíthetek egy új témát vagy válaszolhatok egy témában?',
	'HELP_FAQ_POSTING_DRAFT_ANSWER'	=> 'Ezzel elmentheted a még nem befejezett üzeneted, majd később folytathatod, és elküldheted. Egy piszkozat betöltéséhez menj a felhasználói vezérlőpultra és kövesd a maguktól értetődő lépéseket.',
	'HELP_FAQ_POSTING_DRAFT_QUESTION'	=> 'Mire való az „Elmentés” gomb hozzászólás küldésénél?',
	'HELP_FAQ_POSTING_EDIT_DELETE_ANSWER'	=> 'Ha nem vagy adminisztrátor vagy moderátor, akkor csak azokat a hozzászólásokat szerkesztheted vagy törölheted, melyeket te küldtél. Egy hozzászólást a szerkesztés gombra kattintva tudsz szerkeszteni, általában csak a beküldés utáni korlátozott időtartamban. Abban az esetben, ha valaki már válaszolt a hozzászólásodra, a hozzászólásod alatt egy apró szöveg fog megjelenni, mely jelzi, a hozzászólás hányszor és ki által került szerkesztésre. Ez csak akkor fog megjelenni, ha utánad küldött már valaki egy hozzászólást, akkor nem, ha még nem válaszolt senki, illetve ha egy moderátor vagy egy adminisztrátor szerkesztette a hozzászólásod, bár ők hagyhatnak egy megjegyzést jelezve a szerkesztés okát. Kérjük, vedd figyelembe, hogy a normál felhasználók nem törölhetik a hozzászólásukat, miután már másvalaki válaszolt.',
	'HELP_FAQ_POSTING_EDIT_DELETE_QUESTION'	=> 'Hogyan szerkeszthetek, illetve törölhetek egy hozzászólást?',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_ANSWER'	=> 'Csak regisztrált felhasználók vehetnek részt a szavazásokban (a többszöri szavazás elkerülése végett). Amennyiben regisztrált felhasználó vagy de mégsem tudsz szavazni, akkor valószínűleg nincs jogosultságod a szavazáshoz.',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_QUESTION'	=> 'Miért nem tudok szavazni?',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_ANSWER'	=> 'A csatolmányok feltöltéséhez szükséges jogosultság megadható fórumokra, csoportokra vagy felhasználókra. Lehet, hogy az adminisztrátor nem engedélyezte csatolmányok hozzáadását a fórumba, melybe írni szeretnél, vagy talán csak bizonyos csoportok tagjai küldhetnek csatolmányokat. Ha nem vagy biztos benne, miért nem tudsz csatolmányokat hozzáadni, lépj kapcsolatba az adminisztrátorral.',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_QUESTION'	=> 'Miért nem tudok hozzáadni csatolmányokat?',
	'HELP_FAQ_POSTING_POLL_ADD_ANSWER'	=> 'A hozzászólásokhoz hasonlóan a szavazásokat is csak a készítő, egy moderátor vagy egy adminisztrátor szerkesztheti. Egy szavazás szerkesztéséhez menj a téma első hozzászólásához – mindig ehhez tartozik a szavazás, és kattints a <em>szerkeszt</em> gombra. Ha még senki sem szavazott, a készítő még törölheti a szavazást, vagy megváltoztathatja a választási lehetőségeket, de ha már érkezett szavazat, csak egy adminisztrátor vagy egy moderátor törölheti vagy szerkesztheti a szavazást. Így nem lehet manipulálni a szavazást a szavazási lehetőségek megváltoztatásával.',
	'HELP_FAQ_POSTING_POLL_ADD_QUESTION'	=> 'Hogyan szerkeszthetek vagy törölhetek egy szavazást?',
	'HELP_FAQ_POSTING_POLL_CREATE_ANSWER'	=> 'Amikor egy új témát nyitsz, vagy egy téma első hozzászólását szerkeszted, kattints a „Szavazás készítése” fülre az üzenet mező alatt. Ha nem látod ezt a fület, az azért lehet, mert nincs jogosultságod szavazás készítéséhez. Add meg a szavazás címét, majd legalább két választási lehetőséget mindegyiket új sorba írva. A „Felhasználónként válaszható lehetőségek” mező használatával megadhatod azt is, hogy egy felhasználó hány választási lehetőségre szavazhat; beállíthatsz a szavazásnak egy időkorlátot (napokban megadva); és végül választhatsz, hogy lehetséges legyen-e a szavazatokat megváltoztatatni.',
	'HELP_FAQ_POSTING_POLL_CREATE_QUESTION'	=> 'Hogyan készíthetek szavazást?',
	'HELP_FAQ_POSTING_POLL_EDIT_ANSWER'	=> 'Néhány fórum lehet, hogy csak bizonyos felhasználók, illetve csoportok számára érhető el. A fórum megtekintéséhez, olvasásához, benne hozzászólás küldéséhez stb. lehet, hogy speciális jogosultság kell. Lépj kapcsolatba egy moderátorral vagy egy adminisztrátorral, és kérelmezd a jogosultságot.',
	'HELP_FAQ_POSTING_POLL_EDIT_QUESTION'	=> 'Miért nem férek hozzá egy fórumhoz?',
	'HELP_FAQ_POSTING_QUEUE_ANSWER'	=> 'A fórum adminisztrátora beállíthatta, hogy a fórumban, melybe hozzászólást szeretnél küldeni, csak olyan hozzászólások jelenhetnek meg, melyeket egy moderátor átnézett. Az is lehet, hogy az adminisztrátor egy olyan csoportba helyezett téged, akiknek a hozzászólásait át kell néznie egy moderátornak. További információért, lépj kapcsolatba a fórum adminisztrátorával.',
	'HELP_FAQ_POSTING_QUEUE_QUESTION'	=> 'Miért kell a hozzászólásomat jóváhagynia egy moderátornak?',
	'HELP_FAQ_POSTING_REPORT_ANSWER'	=> 'Menj a hozzászóláshoz, melyet jelenteni szeretnél, és ha a fórum adminisztrátora engedélyezte, látnod kell egy gombot, mely erre való. Ha erre kattintasz, végigkísérésre kerülsz a hozzászólás jelentéséhez szükséges lépéseken.',
	'HELP_FAQ_POSTING_REPORT_QUESTION'	=> 'Hogyan jelenthetek egy hozzászólást a moderátoroknak?',
	'HELP_FAQ_POSTING_SIGNATURE_ANSWER'	=> 'A csatoláshoz először el kell készítened az aláírásod – ezt a felhasználói vezérlőpultban teheted meg. Ezután a hozzászólás küldésénél csak jelöld be az <em>Aláírás hozzáadása</em> opciót. Az aláírás automatikusan is hozzáadható minden hozzászóláshoz, ehhez is a felhasználói vezérlőpultban kell megváltoztatnod a megfelelő beállítást. Ha így teszel, az egyes hozzászólásoknál a küldéskor a megfelelő opció kikapcsolásával még mindig megadhatod, hogy ne kerüljön csatolásra az aláírásod.',
	'HELP_FAQ_POSTING_SIGNATURE_QUESTION'	=> 'Hogyan csatolhatom az aláírásomat a hozzászólásomhoz?',
	'HELP_FAQ_POSTING_WARNING_ANSWER'	=> 'Minden adminisztrátornak megvan a saját szabályzata az oldalára. Ha megsértettél egy szabályt, figyelmeztethetnek téged. Kérjük, vedd figyelembe, hogy ez a fórum adminisztrátorának döntése – a phpBB Limited-nak semmi köze nincs a fórumokon kiosztott figyelmeztetésekhez.',
	'HELP_FAQ_POSTING_WARNING_QUESTION'	=> 'Miért kaptam figyelmeztetést?',

	'HELP_FAQ_SEARCH_BLANK_ANSWER'	=> 'A keresésed olyan sok találatot adott vissza, hogy azt a webszerver már nem tudta kezelni. Használd a „Részletes keresést”, jobban körülhatárolt kifejezést adj meg, és válaszd ki, hogy csak melyik fórumban szeretnél keresni.',
	'HELP_FAQ_SEARCH_BLANK_QUESTION'	=> 'A keresésem miért ad vissza üres oldalt!?',
	'HELP_FAQ_SEARCH_FORUM_ANSWER'	=> 'Írd be a keresendő kifejezést közvetlenül a keresődobozba, mely rendelkezésre áll a fórum kezdőlapon, egy fórumban vagy egy témában. A részletes keresést a „Részletes keresés” linkre kattintva tudod elérni, mely a fórum összes oldalán elérhető. Ennek a helye a használt megjelenéstől függ.',
	'HELP_FAQ_SEARCH_FORUM_QUESTION'	=> 'Hogyan kereshetek egy fórumban?',
	'HELP_FAQ_SEARCH_MEMBERS_ANSWER'	=> 'Menj a „Taglista” oldalra, és kattints a „Felhasználó keresése” linkre.',
	'HELP_FAQ_SEARCH_MEMBERS_QUESTION'	=> 'Hogyan kereshetek a tagok között?',
	'HELP_FAQ_SEARCH_NO_RESULT_ANSWER'	=> 'Valószínűleg a keresés túl általános volt, és sok gyakori szót tartalmazhatott, melyeket a phpBB3 nem indexel. Próbálj meg egy jobban körülhatárolt kifejezést megadni, és használd ki a részletes keresés lehetőségeit.',
	'HELP_FAQ_SEARCH_NO_RESULT_QUESTION'	=> 'Miért nem ad vissza találatot a keresésem?',
	'HELP_FAQ_SEARCH_OWN_ANSWER'	=> 'A saját hozzászólásaidhoz kétféleképpen férhetsz hozzá: vagy a felhasználói vezérlőpultban a „Saját hozzászólások megtekintése” linkre kattintva vagy a profilodon keresztül. A témáid eléréséhez használd a részletes keresést.',
	'HELP_FAQ_SEARCH_OWN_QUESTION'	=> 'Hogyan találhatom meg a saját hozzászólásaimat és témáimat?',

	'HELP_FAQ_USERSETTINGS_AVATAR_ANSWER'	=> 'A hozzászólások megtekintésénél a felhasználónév mellett két kép szerepelhet. Az egyik általában a rangodhoz kapcsolódik (ezek általában csillagok vagy más elemek formájában kerülnek megjelenítésre, a számuk mutatja mennyi hozzászólást küldtél eddig a fórumon, vagy hogy milyen státuszod van). A másik – általában egy nagyobb kép – az avatar, mely a legtöbb felhasználónak egyedi és személyes. A fórum adminisztrátorától függ, hogy engedélyezett-e az avatarok használata, illetve milyen módot lehet megadni ezt a képet. Ha nem tudsz avatart beállítani, lépj kapcsolatba egy adminisztrátorral, és tájékozódj nála az okokról.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_ANSWER'	=> 'A felhasználói vezérlőpult “Profil” menüpontjában adhatsz meg avatart a következő módokon: Gravatar szolgáltatás használatával, avatar galériából történő választással, külső URL megadásával és feltöltéssel. A fórum adminisztrátorától függ, hogy engedélyezett-e az avatarok használta, illetve milyen módon lehet megadni ezt a képet. Ha nem tudsz avatart beállítani, lépj kapcsolatba egy adminisztrátorral, és tájékozódj nála az okokról.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_QUESTION'	=> 'Hogyan tudok avatart megjeleníteni?',
	'HELP_FAQ_USERSETTINGS_AVATAR_QUESTION'	=> 'Mik azok a képek a felhasználónevem mellett?',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_ANSWER'	=> 'Amennyiben regisztrált felhasználó vagy, minden beállításod az adatbázisban kerül tárolásra. Ezek megváltoztatásához kattints a <em>Felhasználói vezérlőpult</em> linkre (általában az oldal tetején található). Itt megváltoztathatod az összes beállításodat.',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_QUESTION'	=> 'Hogyan tudom megváltoztatni a beállításaimat?',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_ANSWER'	=> 'Csak regisztrált felhasználók küldhetnek e-mailt a beépített e-mail funkció segítségével (ha az adminisztrátor bekapcsolta ezt a lehetőséget). Ez a névtelen emberek nemkívánt leveleinek elkerülése végett szükséges. ',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_QUESTION'	=> 'Miért kell bejelentkeznem e-mail küldéséhez?',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_ANSWER'	=> 'A Felhasználói vezérlőpultban a „Fórum beállítások” menüpont alatt található a „Jelenlét elrejtése” beállítás. Ha ezt <samp>Igen</samp>re állítod, csak az adminisztrátorok, a moderátorok, illetve saját magad fogod látni, hogy jelen vagy-e.',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_QUESTION'	=> 'Hogyan tudom megakadályozni, hogy mások lássák, mikor vagyok jelen?',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_ANSWER'	=> 'Ennek az az oka, hogy az adminisztrátor nem telepítette a megfelelő nyelvi csomagot, vagy hogy még nem készült fordítás a kívánt nyelvre. Kérd meg az adminisztrátort, hogy telepítse a nyelvi csomagot, amennyiben viszont még nem létezik, nyugodtan készítsd el a fordítást. További információért keresd fel a phpBB Limited weboldalát (a link az oldal alján található).',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_QUESTION'	=> 'A használni kívánt nyelv nincs a listában!',
	'HELP_FAQ_USERSETTINGS_RANK_ANSWER'	=> 'A rang, mely a felhasználók neve alatt jelenik meg, arra való, hogy mutassa, a felhasználó hozzászólásainak számát, illetve megkülönböztessen egyes felhasználókat, például a moderátorokat és adminisztrátorokat. Általában a felhasználók nem tudják közvetlenül megváltoztatni a rangjukat, mivel azt az adminisztrátor állítja be. Kérünk, ne szólj hozzá feleslegesen a témákhoz, csak hogy növeld a hozzászólásaid számát, hiszen valószínű, hogy ezt a moderátorok fel fogják fedezni, és egyszerűen csökkenteni fogják a hozzászólásaid számát.',
	'HELP_FAQ_USERSETTINGS_RANK_QUESTION'	=> 'Mi az a rang, hogyan tudom megváltoztatni a rangomat?',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_ANSWER'	=> 'Ha biztos vagy benne, hogy helyes időzónát adtál meg, de az idő még mindig más, akkor a szerver órája pontatlan. Kérjük, értesíts erről egy adminisztrátort.',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_QUESTION'	=> 'Megváltoztattam az időzónát, de még mindig pontatlan az idő!',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_ANSWER'	=> 'Feltehetően az időpontok más időzóna szerint kerülnek megjelenítésre, mint amiben vagy. Ez esetben változtasd meg a felhasználói vezérlőpultban az időzónád a tartózkodási helyednek megfelelően. Kérjük, vedd figyelembe, hogy az időzónát – mint a legtöbb más felhasználói beállítást – csak regisztrált felhasználók változtathatják meg. Tehát ha még nem regisztráltál, ez egy jó alakalom, hogy megtedd.',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_QUESTION'	=> 'Nem pontos az idő!',
));
