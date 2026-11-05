<?php
/**
*
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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//oly
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_APCU_CACHE_NOTICE'				=> 'APCu cache-t törölni kell az Adminisztrátori vezérlőpultban.',

	'CLI_CONFIG_CANNOT_CACHED'			=> 'Állítsd be ezt az opciót, ha a konfigurációs beállítás olyan gyakorisággal változik, hogy nem lehet hatékonyan gyorsítótárazni.',
	'CLI_CONFIG_CURRENT'				=> 'Aktuális konfigurációs érték, használd a 0-t és 1-et logikai értékek megadásához.',
	'CLI_CONFIG_DELETE_SUCCESS'			=> '%s beállítás sikeresen törölve.',
	'CLI_CONFIG_NEW'					=> 'Új beállítási érték, használd a 0-t és 1-et logikai értékek megadásához.',
	'CLI_CONFIG_NOT_EXISTS'				=> '%s beállítás nem létezik',
	'CLI_CONFIG_OPTION_NAME'			=> 'A beállítás neve',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Állítsd be ezt, hogy az érték sortörés nélkül kerüljün kiírásra.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Növelendő beállítási érték',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> '%s beállítási érték sikeresen megnövelve',
	'CLI_CONFIG_SET_FAILURE'			=> '%s értéket nem lehet beállítani',
	'CLI_CONFIG_SET_SUCCESS'			=> '%s érték sikeresen beállítva',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Kilistázza a befejezett és még nem befejezett cron jobokat.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Lefuttatja az összes elkészült cron jobot.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Futtatandó feladat neve',
	'CLI_DESCRIPTION_DB_LIST'					=> 'Az összes telepített vagy elérhető adatbázis frissítés listázása.',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Adatbázis frissítések futtatása.',
	'CLI_DESCRIPTION_DB_REVERT'					=> 'Adatbázis frissítés visszaállítása a korábbi állapotba.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Töröl egy konfigurációs opciót',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Letilt egy megadott kiterjesztést.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Engedélyez egy meghatározott kiterjesztést.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Megkeresi azokat a migration-öket, amik nem függenek tőle.', //?
	'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'		=> 'A fórum és modulok faszerkezetének megjavítása.', //?
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Konfigurációs beállítás értékét kéri le',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Megnöveli egy egész számot tartalmazó konfigurációs beállítás értékét',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Kilistázza az adatbázisban és a fájlrendszerben lévő összes kiterjesztést.',

	'CLI_DESCRIPTION_OPTION_ENV'				=> 'A futtatási környezet neve.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Futtatás csökkentett módban (kiterjesztések nélkül).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Shell indítása.',

	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Törli a megadott kiterjesztés adatait.', //? purge extension

	'CLI_DESCRIPTION_REPARSER_LIST'						=> 'Az újraformázható szöveg típusok listázása.',
	'CLI_DESCRIPTION_REPARSER_AVAILABLE'				=> 'Elérhető újraformázók:',//? "Available reparsers"
	'CLI_DESCRIPTION_REPARSER_REPARSE'					=> 'Újraformázza a tárolt szövegeket a jelenlegi text_formatter szolgáltatással.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'			=> 'Az újraformázandó szöveg típusa. Hagyd üresen, ha mindent újra szeretnél formázni.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> 'Ne mentsen el semmit, csak mutassa meg mi lenne az eredmény',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> 'A legkissebb bejegyzés azonosító a folyamatban',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> 'A legnagyobb bejegyzés azonosító a folyamatban',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> 'A folyamatonként feldolgozandó bejegyzések számának megbecslése',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> 'Az újraformázás folytatása onnan, ahol az utolsó folyamat abbahagyta',

	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'					=> 'Csak akkor állítja be a konfigurációs beállítás értékét, ha annak eredeti értéke megegyezik az aktuális értékkel.', //?
	'CLI_DESCRIPTION_SET_CONFIG'						=> 'Beállítja egy opció értékét',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'					=> 'Bélyegképek törlése.', // thumbnail
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'				=> 'Hiányzó bélyegképek generálása.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'				=> 'Összes bélyegkép újragenerálása.',

	'CLI_DESCRIPTION_UPDATE_CHECK'					=> 'Ellenőrzi, hogy a fórum naprakész.',
	'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'		=> 'Ellenőrizendő kiterjesztés neve (ha az összes, jelöld be az összes kiterjesztést)',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'		=> 'Ellenőrző parancs futtatása gyorsítótárral.', //? "Run check command with cache."
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY'	=> 'Parancs futtatása megadva, hogy csak a stabil vagy fejlesztői verziókat ellenőrizze.', //? "Run command choosing to check only stable or unstable versions."

	'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT'		=> 'Régebbi, elavult jelszó hash-ek frissítése, hogy bcrypt használatával legyenek hashelve.', //? Updates outdated password hashes to be hashed with bcrypt.

	'CLI_ERROR_INVALID_STABILITY' => '"%s"-nek "stable"-nek vagy "unstable"-nek kell lennie.',

	'CLI_DESCRIPTION_USER_ACTIVATE'				=> 'Felhasználói fiók aktiválása (vagy deaktiválása).',
	'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'	=> 'Felhasználói fiókhoz tartozó felhasználó név.',
	'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'	=> 'Felhasználási fiók deaktiválása',
	'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'		=> 'A felhasználói fiók már aktiválva van.',
	'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'	=> 'A felhasználói fiók már deaktiválva van.',
	'CLI_DESCRIPTION_USER_ADD'					=> 'Új felhasználói fiók létrehozása.',
	'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'	=> 'Az új felhasználó felhasználó neve',
	'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'	=> 'Az új felhasználó jelszava',
	'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'		=> 'Az új felhasználó e-mail címe',
	'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'	=> 'Az új felhasználónak aktivációs e-mail küldése (alapértelmezés szerint nem kap e-mail-t)',
	'CLI_DESCRIPTION_USER_DELETE'				=> 'Felhasználói fiók törlése.',
	'CLI_DESCRIPTION_USER_DELETE_USERNAME'		=> 'A törlendő felhasználói fiókhoz tartozó felhasználó név',
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'	=> 'A felhasználó összes hozzászólásának törlése. Az opció használata nélkül a hozzászólások nem kerülnek törlésre.',
	'CLI_DESCRIPTION_USER_RECLEAN'				=> 'Felhasználói nevek tisztítása.',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Nem lehet letiltani a %s kiterjesztést',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> '%s kiterjesztés sikeresen letiltva',
	'CLI_EXTENSION_DISABLED'			=> '%s kiterjesztés nincs engedélyezve',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Nem lehet engedélyezni a %s kiterjesztést',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> '%s kiterjesztés sikeresen engedélyezve',
	'CLI_EXTENSION_ENABLED'				=> '%s kiterjesztés már engedélyezve van',
	'CLI_EXTENSION_NOT_EXIST'			=> '%s kiterjesztés nem létezik',
	'CLI_EXTENSION_NAME'				=> 'Kiterjesztés neve',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Nem lehet törölni a %s kiterjesztés adatait',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'A %s kiterjesztés adatai sikeresen törlésre kerültek',
	'CLI_EXTENSION_UPDATE_FAILURE'		=> '%s kiterjesztést nem sikerült frissíteni',
	'CLI_EXTENSION_UPDATE_SUCCESS'		=> '%s kiterjesztés sikeresen frissítve lett',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Nem találhatóak kiterjesztések.',
	'CLI_EXTENSION_NOT_ENABLEABLE'		=> '%s kiterjesztés nem engedélyezhető.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Elérhető',
	'CLI_EXTENSIONS_DISABLED'			=> 'Letiltott',
	'CLI_EXTENSIONS_ENABLED'			=> 'Engedélyezett',

	'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'		=> 'A fórumok és modulok faszerkezete sikeresen javításra került.',
	'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'		=> 'A régebbi, elavult jelszó hash-ek sikeresen bcrypt-re lettek frissítve.',

	'CLI_MIGRATION_NAME'					=> 'Adatbázis migráció neve, a teljes namespace-el együtt (használj perjeleket visszaperjelek helyett, a problémák elkerülése érdekében).',
	'CLI_MIGRATIONS_AVAILABLE'				=> 'Elérhető adatbázis migrációk',
	'CLI_MIGRATIONS_INSTALLED'				=> 'Telepített adatbázis migrációk',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'		    => 'Csak az elérhető (nem telepített) adatbázis migrációk mutatása',
	'CLI_MIGRATIONS_EMPTY'                  => 'Nincsenek adatbázis migrációk.',

	'CLI_REPARSER_REPARSE_REPARSING'		=> 'Újraformázás: %1$s (%2$d-tól %3$d-ig)',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> 'Újraformázás %s...',
	'CLI_REPARSER_REPARSE_SUCCESS'			=> 'Az újraformázás sikeresen megtörtént',

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'		=> '%1$s (%2$s) törölve.',
	'CLI_THUMBNAIL_DELETING'	=> 'Bélyegképek törlése',
	'CLI_THUMBNAIL_SKIPPED'		=> '%1$s (%2$s) kihagyva.',
	'CLI_THUMBNAIL_GENERATED'	=> '%1$s (%2$s) generálva.', // ? generated
	'CLI_THUMBNAIL_GENERATING'	=> 'Bélyegképek generálása',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> 'Az összes bélyegkép újragenerálásra került.',
	'CLI_THUMBNAIL_DELETING_DONE'	=> 'Az összes bélyegkép törlésre került.',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> 'Nincsenek generálandó bélyegképek.', // No thumbnails to generate.
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> 'Nincsenek törlendő bélyegképek.', // No thumbnails to delete.

	'CLI_USER_ADD_SUCCESS'		=> 'A felhasználói fiók (%s) létrehozása sikeresen megtörtént.',
	'CLI_USER_DELETE_CONFIRM'	=> 'Biztos vagy benne hogy törlöd ‘%s’ felhasználói fiókját? [y/N]',
	'CLI_USER_RECLEAN_START'	=> 'Felhasználói nevek tisztítása',
	'CLI_USER_RECLEAN_DONE'		=> [
			0	=> 'A tisztítás sikeresen befejeződött. Egy felhasználó nevet sem kellett megtisztítani.',
			1	=> 'A tisztítás sikeresen befejeződött. %d felhasználó név került megtisztításra.',
			2	=> 'A tisztítás sikeresen befejeződött. %d felhasználó név került megtisztításra.',
		],
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' Csak az adott cron task futtatásához opcionálisan megadhatsz egy cron task nevet.',
	'CLI_HELP_USER_ACTIVATE'	=> 'Aktivál egy felhasználói fiókat vagy deaktiválja azt, ha a <info>--deactivate</info> opcióval kerül futtatásra.
Ha szeretnél aktivációs e-mailt küldeni a felhasználónak, akkor használd a <info>--send-email</info> opciót.',
	'CLI_HELP_USER_ADD'			=> 'A <info>%command.name%</info> parancsal új felhasználót lehet létrehozni:
Ha nem adsz meg opciókat, akkor a futás során kell ezen információkat megadni.
Ha szeretnél aktivációs e-mailt küldeni a felhasználónak, akkor használd a <info>--send-email</info> opciót.',
	'CLI_HELP_USER_RECLEAN'		=> 'A felhasználói nevek tisztítása ellenőrzi az összes tárolt felhasználói nevet és megtisztítja őket amennyiben ez szükséges. A tisztított felhasználói név érzéketlen a kis- és nagybetűkre, NFC normalizált és ASCII formátumú.',
));
