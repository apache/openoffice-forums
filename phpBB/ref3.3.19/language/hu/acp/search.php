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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Itt a keresőmodulok indexeit kezelheted. Mivel alapvetően csak egy modult használsz, a többi nem használt modul indexeit érdmes törölnöd. Néhány kereső beállítás megváltoztatása után (pl. a karakterek minimum és maximum száma) tanácsos az indexeket újra létrehozni, hogy azok tükrözzék a változtatásokat.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Itt beállíthatod, hogy a fórum melyik keresőmodult használja a hozzászólások indexeléséhez és a keresésekhez. Emellett további beállításokat adhatsz meg, melyek ezeknek a műveleteknek a teljesítményigényét befolyásolják. A beállítások egy része az összes keresőmodulnál ugyanaz.', //?

	'COMMON_WORD_THRESHOLD'					=> 'Gyakori szó küszöb', //? 'Gyakori szó küszöb', 'Általános/átlagos/mindennapi szó hatérérték' stb.
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'A szavak, melyek a hozzászólások ennél nagyobb százalékában megtalálhatók, gyakorinak lesznek tekintve. A gyakori szavak mellőzésre kerülnek a keresési kifejezésből. A kikapcsoláshoz állítsd 0-ra. Csak akkor lesz alkalmazva, ha 100-nál több hozzászólás van. Ha felül szeretnéd vizsgálni a már gyakorinak tekintett szavakat, újra létre kell hoznod az indexet.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Biztosan át akarsz váltani egy másik keresőmodulra? A váltás után létre kell hoznod az új keresőmodulhoz tartozó indexet. Ha nem tervezel visszaváltani a régi keresőmodulhoz, törölheted az ahhoz tartozó indexet, ezáltal is fölszabadítva a rendszer erőforrásait.',
	'CONTINUE_DELETING_INDEX'				=> 'Korábbi indexeltávolítási folyamat folytatása',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Egy indexeltávolítási folyamat el lett indítva. Hogy hozzáférj a keresőindex oldalhoz, először azt be kell fejezned, vagy törölnöd kell.', //?
	'CONTINUE_INDEXING'						=> 'Korábbi indexelési folyamat folytatása',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Egy indexelési folyamat el lett indítva. Hogy hozzáférj a keresőindex oldalhoz, először azt be kell fejezned, vagy törölnöd kell.',
	'CREATE_INDEX'							=> 'Index létrehozása',

	'DEFAULT_SEARCH_RETURN_CHARS'			=> 'Visszaadott karakterek száma', //? Default number of returned characters
	'DEFAULT_SEARCH_RETURN_CHARS_EXPLAIN'	=> 'Az alapértelmezett karakterszám, amit a keresés visszaad. 0 érték esetén a teljes hozzászólást visszaadja.', //? The default number of characters that will be returned while searching. A value of 0 will return the entire post.
	'DELETE_INDEX'							=> 'Index törlése',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Index törlése folyamatban',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'A keresőmodul jelenleg megtisztítja az indexét. Ez eltarthat néhány percig.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'	=> 'A MySQL fulltext modul csak MySQL4-gyel vagy újabbal használható.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'				=> 'A MySQL fulltext index csak MyISAM vagy InnoDB táblákkal használható. InnoDB típusú táblák használata esetén legalább 5.6.8-as verziószámú MySQL szükséges.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Indexelt hozzászólások száma',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'Legalább ennyi karakterből álló szavak kerülnek indexelésre. Ez a beállítás csak a MySQL konfigurációban történő változtatással módosítható, amit lehet, hogy csak a szolgáltatód tud megtenni.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> 'Legfeljebb ennyi karakterből álló szavak kerülnek indexelésre. Ez a beállítás csak a MySQL konfigurációban történő változtatással módosítható, amit lehet, hogy csak a szolgáltatód tud megtenni.',

	'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'	=> 'A PostgreSQL fulltext modul csak PostgreSQL-lel használható.',
	'FULLTEXT_POSTGRES_TOTAL_POSTS'			=> 'Indexelt hozzászólások száma',
	'FULLTEXT_POSTGRES_VERSION_CHECK'		=> 'PostgreSQL verzió',
	'FULLTEXT_POSTGRES_TS_NAME'				=> 'Szöveg keresési profil:', //? Text search Configuration Profile
	'FULLTEXT_POSTGRES_MIN_WORD_LEN'			=> 'Minimum szó hossz', // Minimum word length for keywords
	'FULLTEXT_POSTGRES_MAX_WORD_LEN'			=> 'Maximum szó hossz', // Maximum word length for keywords
	'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'		=> 'Ez a beállítás csak a PostgreSQL 8.3-as vagy újabb verzióval használható.',
	'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'				=> 'A szöveg keresési profil határozza meg a kereséshez használandó elemzőt és szótárt.',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'			=> 'Legalább ennyi karakterből álló szavak kerülnek indexelésre.',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'			=> 'Legfeljebb ennyi karakterből álló szavak kerülnek indexelésre.',

	'FULLTEXT_SPHINX_CONFIGURE'				=> 'Add meg a következő értékeket a sphinx konfigurációs állomány generálásához',
	'FULLTEXT_SPHINX_DATA_PATH'				=> 'Adatok elérési útja',
	'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'		=> 'Ez a könyvtár lesz használva az index- és naplóállományok tárolásához. A könyvtárat webről el nem érhető helyen hozd létre. (Az elérési utat záró perjellel add meg.)',
	'FULLTEXT_SPHINX_DELTA_POSTS'			=> ' Hozzászólások száma a gyakran frissülő delta indexben', //?
	'FULLTEXT_SPHINX_HOST'					=> 'Sphinx hosztneve', //? Sphinx search daemon host
	'FULLTEXT_SPHINX_HOST_EXPLAIN'			=> 'A kiszolgáló, amin a Sphinx daemon fut. Hagyd üresen az alapértelmezett localhost használatához.',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'		=> 'Indexelő memória limit',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN'	=> 'Az értékének mindig kisebbnek kell lennie, mint a kiszolgálóban található RAM mennyisége. Ha időszakos teljesítmény problémákat tapasztalsz, annak oka lehet az indexelő általi túlzott erőforrás-használat. Ilyenkor segíthet az indexelő számára használható memória mennyiségének csökkentése.',
	'FULLTEXT_SPHINX_MAIN_POSTS'			=> 'Hozzászólások száma a fő indexben', //? main index
	'FULLTEXT_SPHINX_PORT'					=> 'Sphinx portja',
	'FULLTEXT_SPHINX_PORT_EXPLAIN'			=> 'Az a portszám, amin a sphinx search daemon (searchd) figyel. Hagyd üresen az alapértelmezett 9312 használatához.',
	'FULLTEXT_SPHINX_WRONG_DATABASE'		=> 'A Sphinx kereső csak MySQL és PostgreSQL adatbázisokkal használható.',
	'FULLTEXT_SPHINX_CONFIG_FILE'			=> 'Sphinx konfigurációs állomány',
	'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'	=> 'A sphinx konfigurációs állomány tartalma. Ezeket az adatokat be kell másolni a sphinx által használt sphinx.conf állományba. Cseréld le a [dbuser] és [dbpassword] helykitöltőket az adatbázis kapcsolódási adataiddal.',
	'FULLTEXT_SPHINX_NO_CONFIG_DATA'		=> 'A sphinx adat könyvtárának elérési útja nem lett megadva. Kérjük, add meg és mentsd el a beállításokat a konfigurációs állomány generálásához.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Általános kereső beállítások',
	'GO_TO_SEARCH_INDEX'					=> 'Tovább a keresőindex oldalra',

	'INDEX_STATS'							=> 'Index statisztikák',
	'INDEXING_IN_PROGRESS'					=> 'Indexelés folyamatban',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'A keresőmodul éppen indexeli a fórum összes hozzászólását. Ez a fórum nagyságától függően néhány percig, de akár néhány óráig is eltarthat.',

	'LIMIT_SEARCH_LOAD'						=> 'Kereső oldal rendszerterhelés korlát',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Ha a rendszer egy perces átlagos terhelése meghaladja ezt az értéket, akkor a kereső oldal nem lesz elérhető. Az 1.0 érték megegyezik egy processzor ~100%-os igénybevételével. A funkció csak UNIX alapú rendszereken működik.',

	'MAX_SEARCH_CHARS'						=> 'Maximum indexelt karakterszám', //? 'Maximum indexelt karakter'
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'A kereső csak a legfeljebb ennyi karaktert tartalmazó szavakat fogja indexelni.',
	'MAX_NUM_SEARCH_KEYWORDS'				=> 'Kulcsszavak maximum száma',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'Egyszerre legfeljebb ennyi szóra lehet keresni. A 0 érték megszünteti a korlátozást.',
	'MIN_SEARCH_CHARS'						=> 'Minimum indexelt karakterszám',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'A kereső csak a legalább ennyi karaktert tartalmazó szavakat fogja indexelni.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Minimum szerző karakterszám',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'A felhasználóknak, ha jokerkaraktert használva keresnek rá egy felhasználóra, legalább ennyi karaktert meg kell adniuk a névből. Ha a felhasználó neve ennél kevesebb karakterből áll, a teljes felhasználónév megadásával még mindig rá lehet keresni a hozzászólásaira.',

	'PROGRESS_BAR'							=> 'Haladás',

	'SEARCH_GUEST_INTERVAL'					=> 'Vendég keresési flood időköz',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'A vendégeknek két keresés között ennyi másodpercet kell várniuk. Ha egy felhasználó végez egy keresést, az összes többinek várnia kell az időköz leteltéig.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> array(
		2	=> 'A %2$d azonosítóig terjedő hozzászólások lettek eddig indexelve, ebből %1$d ebben a lépésben.<br />',
	),
	'SEARCH_INDEX_CREATE_REDIRECT_RATE'		=> array(
		2	=> 'Az indexelés aktuális sebessége körülbelül %1$.1f hozzászólás másodpercenként.<br />Indexelés folyamatban…',
	),
	'SEARCH_INDEX_DELETE_REDIRECT'			=> array(
		2	=> 'A %2$d azonosítóig terjedő hozzászólások el lettek távolítva a keresőindexből, ebből %1$d ebben a lépésben.<br />',
	),
	'SEARCH_INDEX_DELETE_REDIRECT_RATE'		=> array(
		2	=> 'A törlés aktuális sebessége körülbelül %1$.1f hozzászólás másodpercenként.<br />Törlés folyamatban…',
	),
	'SEARCH_INDEX_CREATED'					=> 'A fórum adatbázisában lévő összes hozzászólás sikeresen indexelésre került.',
	'SEARCH_INDEX_REMOVED'					=> 'A modul keresőindexe sikeresen törlésre került.',
	'SEARCH_INTERVAL'						=> 'Felhasználói keresési időköz',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'A felhasználóknak két keresés között ennyi másodpercet kell várniuk. Ez az időköz az egyes  felhasználóknál külön-külön kerül ellenőrzésre.', //? 'Ez az időköz az egyes  felhasználókra külön-külön vonatkozik'
	'SEARCH_STORE_RESULTS'					=> 'Keresési eredmény gyorsítótárazásának hossza',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'A gyorsítótárazott keresési eredmények ennyi másodperc elteltével járnak le. A kereső gyorsítótár kikapcsolásához állítsd 0-ra .',
	'SEARCH_TYPE'							=> 'Keresőmodul', //? 'Keresőmotor'?!
	'SEARCH_TYPE_EXPLAIN'					=> 'A phpBB lehetővé teszi, hogy kiválaszd milyen motor legyen használva a hozzászólások tartalmában való kereséshez. Alapból a phpBB saját fulltext keresője lesz használva.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Keresőmodult váltottál. Hogy az új keresőmotort használni tudd, győződj meg róla, hogy a kiválasztott keresőmodulhoz való index létezik.',

	'TOTAL_WORDS'							=> 'Indexelt szavak száma',
	'TOTAL_MATCHES'							=> 'Szó–hozzászólás kapcsolatok száma',

	'YES_SEARCH'							=> 'Keresés funkciók bekapcsolása',
	'YES_SEARCH_EXPLAIN'					=> 'Lehetővé teszi a keresők használatát, ide értve a felhasználókeresőt is.',
	'YES_SEARCH_UPDATE'						=> 'Fulltext frissítés bekapcsolása',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Fulltext indexek frissítése hozzászóláskor, a keresés kikapcsolása felülírja.',
));
