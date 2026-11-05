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
* @Polish locale 2014-10-07 18:24:32 Zespół Olympus.pl $
* @Polska wersja językowa phpBB 3.3.14 - 02.01.2025, Mateusz Dutko (vader) www.rnavspotters.pl
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
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_APCU_CACHE_NOTICE'				=> 'Pamięć podręczną APC należy wyczyścić z poziomu Panelu Administracyjnego.',
	
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Ustaw tę opcję, jeśli opcja konfiguracji zmienia się zbyt często, aby być skutecznie buforowana.',
	'CLI_CONFIG_CURRENT'				=> 'Bieżąca wartość konfiguracyjna. Użyj 0 i 1, aby określić wartości logiczne.',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Usunięto konfigurację %s.',
	'CLI_CONFIG_NEW'					=> 'Nowa wartość konfiguracyjna. Użyj 0 i 1, aby określić wartości logiczne.',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Nie ma konfiguracji %s',
	'CLI_CONFIG_OPTION_NAME'			=> 'Nazwa opcji konfiguracyjnej',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Ustaw tę opcję, jeśli wartość powinna być drukowana bez nowej linii na końcu.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Zwiększaj wartość o',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Zwiększono konfigurację %s',
	'CLI_CONFIG_SET_FAILURE'			=> 'Nie można określić konfiguracji %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Określono konfigurację %s',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Drukuje listę gotowych i niegotowych zadań dla crona.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Uruchamia wszystkie gotowe zadania dla crona.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Nazwa zadania do uruchomienia',
	'CLI_DESCRIPTION_DB_LIST'					=> 'Lista zainstalowanych i dostępnych migracji.',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Aktualizuje bazę danych poprzez zastosowanie migracji.',
	'CLI_DESCRIPTION_DB_REVERT'					=> 'Przywróć bazę danych przed migracją.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Usuwa opcję konfiguracji.',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Wyłącza wybrane rozszerzenie.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Włącza wybrane rozszerzenie.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Znajduje niewymagane migracje.',
	'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'		=> 'Naprawia strukturę for i modułów.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Pobiera wartość konfiguracyjną opcji.',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Zwiększa wartość konfiguracyjną opcji.',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Wyświetla wszystkie rozszerzenia w bazie danych i w systemie plików.',
	
	'CLI_DESCRIPTION_OPTION_ENV'				=> 'Nazwa środowiska.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Uruchom w trybie awaryjnym (bez rozszerzeń).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Uruchom powłokę.',
	
	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Usuwa wybrane rozszerzenie.',
	
	'CLI_DESCRIPTION_REPARSER_LIST'						=> 'Lista typów tekstu, które mogą być zreparsowane.',
	'CLI_DESCRIPTION_REPARSER_AVAILABLE'				=> 'Dostępne reparsery:',
	'CLI_DESCRIPTION_REPARSER_REPARSE'					=> 'Zreparsuj zachowany tekst z obecnie używaną usługą text_formatter.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'			=> 'Typ tekstu do reparsowania. Zostaw puste, aby zreparsować wszystko.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> 'Nie zapisuj żadnych zmian; wyświetl co się stanie.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_FORCE_BBCODE'	=> 'Ponownie przetwórz wszystkie kody BB bez wyjątku. Należy pamiętać, że wszystkie wcześniej wyłączone kody BB zostaną ponownie przetworzone, włączone i w pełni wyrenderowane.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> 'Najniższy ID rekordu do przetworzenia',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> 'Najwyższy ID rekordu do przetworzenia',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> 'Przybliżona liczba rekordów do przetworzenia.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> 'Rozpocznij reparsowanie od momentu ostatniego zatrzymania.',
	
	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'					=> 'Ustawia wartość opcji konfiguracyjnej tylko, jeśli stara wartość pasuje do nowej wartości',
	'CLI_DESCRIPTION_SET_CONFIG'						=> 'Ustawia wartość opcji konfiguracyjnej',
	
	'CLI_DESCRIPTION_THUMBNAIL_DELETE'					=> 'Usuń wszystkie miniatury.',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'				=> 'Utwórz brakujące miniatury.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'				=> 'Odtwórz wszystkie miniatury.',
	
	'CLI_DESCRIPTION_UPDATE_CHECK'					=> 'Sprawdź, czy witryna jest aktualna..',
	'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'		=> 'Nazwa rozszerzenie do sprawdzenia (jeśli wszystkie, sprawdź wszystkie rozszerzenia)',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'		=> 'Uruchom polecenie Sprawdź z pamięcią podręczną.',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY'	=> 'Uruchom polecenie, aby sprawdzić stabilną lub niestabilną wersję.',	
	
	'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT'		=> 'Aktualizowanie hash wygasłych haseł, które będą zaszyfrowane używając bcrypt.',

	'CLI_ERROR_INVALID_STABILITY' => '"%s" musi zostać ustawione jako stabilne lub nie - "stable" lub "unstable".',
	
	'CLI_DESCRIPTION_USER_ACTIVATE'				=> 'Aktywuj (lub dezaktywuj) konto użytkownika.',
	'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'	=> 'Nazwa użytkownika do aktywacji.',
	'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'	=> 'Dezaktywuj konto użytkownika',
	'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'		=> 'Użytkownik jest aktywny.',
	'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'	=> 'Użytkownik jest nieaktywny.',
	'CLI_DESCRIPTION_USER_ADD'					=> 'Dodaj nowego użytkownika.',
	'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'	=> 'Nazwa nowego użytkownika',
	'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'	=> 'Hasło nowego użytkownika',
	'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'		=> 'Adres e-mail nowego użytkownika',
	'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'	=> 'Wyślij e-mail aktywacyjny do nowego użytkownika (domyślnie nie jest wysyłany)',
	'CLI_DESCRIPTION_USER_DELETE'				=> 'Usuń konto użytkownika.',
	'CLI_DESCRIPTION_USER_DELETE_USERNAME'		=> 'Nazwa użytkownika do usunięcia',
	'CLI_DESCRIPTION_USER_DELETE_ID'			=> 'Usuwanie kont użytkowników według identyfikatora ID.',
	'CLI_DESCRIPTION_USER_DELETE_ID_OPTION_ID'	=> 'Identyfikatory użytkowników do usunięcia',
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'	=> 'Usuń wszystkie posty użytkownika. Bez tej opcji, wszystko posty zostaną zachowane.',
	'CLI_DESCRIPTION_USER_RECLEAN'				=> 'Sprawdź nazwy użytkowników.',
	
	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Nie można wyłączyć rozszerzenia %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Wyłączono rozszerzenie %s',
	'CLI_EXTENSION_DISABLED'			=> 'Rozszerzenie %s nie jest włączone',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Nie można włączyć rozszerzenia %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Włączono rozszerzenie %s',
	'CLI_EXTENSION_ENABLED'				=> 'Rozszerzenie %s jest już włączone',
	'CLI_EXTENSION_NOT_EXIST'			=> 'Rozszerzenie %s nie istnieje.',
	'CLI_EXTENSION_NAME'				=> 'Nazwa rozszerzenia',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Nie można usunąć rozszerzenia %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Usunięto rozszerzenie %s',
	'CLI_EXTENSION_UPDATE_FAILURE'		=> 'Nie można zaktualizować rozszerzenia %s',
	'CLI_EXTENSION_UPDATE_SUCCESS'		=> 'Pomyślnie zaktualizowano rozszerzenie %s',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Nie znaleziono żadnych rozszerzeń.',
	'CLI_EXTENSION_NOT_ENABLEABLE'		=> 'Rozszerzenie %s nie jest włączalne.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Dostępne',
	'CLI_EXTENSIONS_DISABLED'			=> 'Wyłączone',
	'CLI_EXTENSIONS_ENABLED'			=> 'Włączone',

	'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'		=> 'Pomyślnie zakończono naprawę struktury for i modułów.',
	'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'		=> 'Pomyślnie zaktualizowano hash wygasłych haseł przez bcrypt.',
	
	'CLI_MIGRATION_NAME'					=> 'Nazwa migracji wraz z przestrzenią nazw (aby uniknąć błędów, użyj slasha zamiast backslash).',
	'CLI_MIGRATIONS_AVAILABLE'				=> 'Dostępne migracje',
	'CLI_MIGRATIONS_INSTALLED'				=> 'Zainstalowane migracje',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'		    => 'Pokaż wyłącznie dostępne migracje',
	'CLI_MIGRATIONS_EMPTY'                  => 'Brak migracji.',

	'CLI_REPARSER_REPARSE_REPARSING'		=> 'Reparsowanie %1$s (przedział %2$d..%3$d)',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> 'Reparsowanie %s...',
	'CLI_REPARSER_REPARSE_SUCCESS'			=> 'Pomyślnie zakończono reparsowanie',
	
	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'		=> 'Usunięto %1$s (%2$s).',
	'CLI_THUMBNAIL_DELETING'	=> 'Usuwanie miniatur',
	'CLI_THUMBNAIL_SKIPPED'		=> 'Pominięto %1$s (%2$s).',
	'CLI_THUMBNAIL_GENERATED'	=> 'Utworzono %1$s (%2$s).',
	'CLI_THUMBNAIL_GENERATING'	=> 'Tworzenie miniatur',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> 'Wszystkie miniatury zostały utworzone.',
	'CLI_THUMBNAIL_DELETING_DONE'	=> 'Wszystkie miniatury zostały usunięte.',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> 'Brak miniatur do utworzenia.',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> 'Brak miniatur do usunięcia.',

	'CLI_USER_ADD_SUCCESS'		=> 'Pomyślnie dodano użytkownika %s.',
	'CLI_USER_DELETE_CONFIRM'	=> 'Czy na pewno chcesz usunąć użytkownika ‘%s’? [Y/N]',
	'CLI_USER_DELETE_ID_CONFIRM'	=> 'Czy na pewno chcesz usunąć użytkownika wg identyfikatora ID ‘%s’? [Y/N]',
	'CLI_USER_DELETE_ID_SUCCESS'	=> 'Pomyślnie usunięto użytkowników wg identyfikatora ID.',
	'CLI_USER_DELETE_ID_START'		=> 'Usuwanie użytkowników wg identyfikatora ID.',
	'CLI_USER_DELETE_NONE'			=> 'Żaden użytkownik nie został usunięty wg identyfikatora ID.',
	'CLI_USER_RECLEAN_START'	=> 'Ponowne sprawdzanie nazw użytkowników.',
	'CLI_USER_RECLEAN_DONE'		=> [
		0	=> 'Ponowne sprawdzanie zostało zakończone. Brak nazw użytkowników do przetworzenie.',
		1	=> 'Ponowne sprawdzanie zostało zakończone. %d nazwa użytkownika została przetworzona.',
		2	=> 'Ponowne sprawdzanie zostało zakończone. %d nazw(y) użytkowników zostało przetworzonych.',
	],
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' Opcjonalnie możesz podać nazwę zadania crona, aby uruchomić wyłącznie określone zadanie crona.',
	'CLI_HELP_USER_ACTIVATE'	=> 'Aktywuj lub dezaktywuj konto użytkownika, używając opcję <info>--deactivate</info>.
Aby wysłać e-mail aktywacyjny do użytkownika, użyj opcji <info>--send-email</info>.',
	'CLI_HELP_USER_ADD'			=> 'Polecenie <info>%command.name%</info> dodaje nowego użytkownika:
Jeśli uruchomiono to polecenie bez opcji, zostaniesz poproszony o ich wprowadzenie.
Aby wysłać e-mail do użytkownika, użyj opcji <info>--send-email</info>.',
	'CLI_HELP_USER_RECLEAN'		=> 'Wszystkie przechowywane nazwy użytkowników zostaną sprawdzone, a po weryfikacji ponownie zapisane. Wielkość liter w nazwie użytkowników nie ma znaczenia. Są one znormalizowane zgodnie z NFC i zapisane w ASCII.',
));
