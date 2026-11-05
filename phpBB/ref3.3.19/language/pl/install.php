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
 * @Polish locale 2014-07-07 18:24:32 Zespół Olympus.pl $
 * @Polska wersja językowa phpBB 3.3.19 - 26.09.2026, Mateusz Dutko (vader) www.rnavspotters.pl
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

// Common installer pages
$lang = array_merge($lang, array(
	'INSTALL_PANEL'	=> 'Panel instalacji',
	'SELECT_LANG'	=> 'Wybierz język',

	'STAGE_INSTALL'	=> 'Instalacja phpBB',

	// Introduction page
	'INTRODUCTION_TITLE'	=> 'Wprowadzenie',
	'INTRODUCTION_BODY'		=> 'Witamy w phpBB3!<br /><br />phpBB® jest najczęściej używanym systemem forów internetowych na świecie. phpBB3 jest najnowszą wersją pakietu, który miał swoją premierę w 2000 roku. Tak, jak i jego poprzednie wersje, phpBB3 jest bogate w funkcje przyjazne dla użytkowników i w pełni wspierane przez zespół phpBB. phpBB3 wspaniale rozwija to, co uczyniło phpBB2 popularnym i zawiera najczęściej zgłaszane przez użytkowników funkcje, które nie były obecne w poprzedniej wersji. Mamy nadzieję, że ta wersja spełni twoje oczekiwania.<br /><br />Instalator poprowadzi cię przez proces instalacji phpBB3, konwersji innego typu witryny lub aktualizacji poprzedniej wersji. Aby uzyskać więcej informacji, polecamy zapoznać się z <a href="%1$s">instrukcją instalacji</a>.<br /><br /> Aby zapoznać się z licencją phpBB3 lub dowiedzieć się o zakresie naszej pomocy i jak ją uzyskać, wybierz daną opcję z bocznego menu. Aby kontynuować, wybierz na górze odpowiednią kartę.',

	// Support page
	'SUPPORT_TITLE'		=> 'Pomoc',
	'SUPPORT_BODY'		=> 'Pełna pomoc dla tego wydania phpBB3 jest darmowa. Zakres pomocy obejmuje:</p><ul><li>instalację</li><li>konfigurację</li><li>zapytania techniczne</li><li>problemy związane z potencjalnymi błędami oprogramowania</li><li>aktualizację wersji testowej RC do najnowszej, stabilnej wersji</li><li>konwersję z phpBB 2.0.x na phpBB3</li><li>konwersję z innych systemów forów dyskusyjnych na phpBB3 (przejdź na <a href="https://www.phpbb.com/community/viewforum.php?f=486">Convertors Forum</a>)</li></ul><p>Zachęcamy użytkowników korzystających z wersji testowych phpBB3, aby dokonali aktualizacji do najnowszej stabilnej wersji.</p><h2>Rozszerzenia / Style</h2><p>W sprawach dotyczących rozszerzeń, należy kierować się na <a href="https://www.phpbb.com/community/viewforum.php?f=451">Extensions Forum</a>.<br />W sprawach związanych ze stylami, szablonami, zestawami obrazków, proszę kierować się na <a href="https://www.phpbb.com/community/viewforum.php?f=471">Styles Forum</a>.<br /><br />Jeśli pytania dotyczą konkretnego pakietu, proszę zadać je bezpośrednio w temacie dedykowanym temu pakietowi.</p><h2>Pomoc</h2><p><a href="https://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">The phpBB Welcome Package</a><br /><a href="https://www.phpbb.com/support/">Support Section</a><br /><a href="https://www.phpbb.com/support/docs/en/3.3/ug/quickstart/">Quick Start Guide</a><br /><br />Aby otrzymywać najnowsze informacje o aktualizacjach, <a href="https://www.phpbb.com/support/">subskrybuj naszą listę mailingową</a>.<br /><br />',
				    
	// License
	'LICENSE_TITLE'		=> 'Licencja GPL',

	// Install page
	'INSTALL_INTRO'		=> 'Witamy w instalatorze phpBB3!',
	'INSTALL_INTRO_BODY'	=> 'Ten kreator pomoże ci zainstalować phpBB3 na twoim serwerze.</p><p>Podczas instalacji trzeba będzie podać informacje o ustawieniach twojej bazy danych. Jeżeli ich nie znasz, skontaktuj się z osobami zarządzającymi twoim serwerem i spytaj o nie. Bez nich nie będzie można zainstalować phpBB3. Musisz znać następujące dane:</p>

	<ul>
		<li>Typ bazy danych – rodzaj bazy danych, której chcesz użyć,</li>
		<li>Nazwę serwera bazy danych lub DSN (Data Source Name) – adres serwera bazy danych,</li>
		<li>Port serwera bazy danych – port serwera bazy danych, na którym działa baza (zazwyczaj nie jest konieczny),</li>
		<li>Nazwę bazy danych – nazwa bazy danych na serwerze,</li>
		<li>Login i hasło do bazy danych – informacje potrzebne do zalogowania do bazy danych.</li>
	</ul>

	<p><strong>Informacja:</strong> Jeśli do instalacji używasz bazy SQLite, w polu DSN (Data Source Name) podaj pełną ścieżkę do pliku z bazą danych i pozostaw pola loginu i hasła puste. Z powodów bezpieczeństwa sprawdź, czy plik bazy danych nie jest przechowywany w miejscu dostępnym przez sieć.</p>

	<p>phpBB3 współdziała z następującymi typami baz danych:</p>
	<ul>
		<li>MySQL w wersji 4.1.3 lub nowszej (MySQLi wspierane)</li>
		<li>PostgreSQL w wersji 8.3 lub nowszej</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server w wersji wyższej lub równej 2000 (bezpośrednio lub przez ODBC)</li>
		<li>MS SQL Server 2005 lub nowszy (natywny)</li>
		<li>Oracle</li>
	</ul>

	<p>W trakcie instalacji zostaną wyświetlone tylko bazy obsługiwane przez twój serwer.',

	'ACP_LINK'	=> 'Zaloguj się do <a href="%1$s">Panelu Administratora</a>',

	'INSTALL_PHPBB_INSTALLED'		=> 'Skrypt phpBB został już zainstalowany.',
	'INSTALL_PHPBB_NOT_INSTALLED'	=> 'Skrypt phpBB nie został jeszcze zainstalowany.',
	'INSTALL_RESTART'				=> 'Restart instalacji',
));

// Requirements translation
$lang = array_merge($lang, array(
	// Filesystem requirements
	'FILE_NOT_EXISTS'						=> 'Plik nie istnieje',
	'FILE_NOT_EXISTS_EXPLAIN'				=> 'Aby zainstalować phpBB, plik %1$s musi istnieć.',
	'FILE_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'Zaleca się, aby plik %1$s istniał do poprawnego korzystania z forum.',
	'FILE_NOT_WRITABLE'						=> 'Plik jest zabezpieczony przed zapisem.',
	'FILE_NOT_WRITABLE_EXPLAIN'				=> 'Aby zainstalować phpBB, plik %1$s musi być zapisywalny.',
	'FILE_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Zaleca się, aby plik %1$s był zapisywalny do poprawnego korzystania z forum.',

	'DIRECTORY_NOT_EXISTS'						=> 'Katalog nie istnieje',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'				=> 'Aby zainstalować phpBB, katalog %1$s musi istnieć.',
	'DIRECTORY_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'Zaleca się, aby katalog %1$s istniał do poprawnego korzystania z forum.',
	'DIRECTORY_NOT_WRITABLE'					=> 'Katalog jest zabezpieczony przed zapisem.',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'			=> 'Aby zainstalować phpBB, katalog %1$s musi być zapisywalny.',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Zaleca się, aby katalog %1$s był zapisywalny do poprawnego korzystania z forum.',

	// Server requirements
	'PHP_VERSION_REQD'					=> 'Wersja PHP',
	'PHP_VERSION_REQD_EXPLAIN'			=> 'phpBB wymaga wersji PHP 7.2.0 lub wyższej.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'Funkcja PHP getimagesize() jest dostępna',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Wymagane</strong> – Aby phpBB działało prawidłowo, funkcja „getimagesize” musi być dostępna.',
	'PCRE_UTF_SUPPORT'					=> 'Obsługa UTF-8 przez PCRE',
	'PCRE_UTF_SUPPORT_EXPLAIN'			=> 'phpBB <strong>nie</strong> uruchomi się, jeśli instalacja PHP nie jest skompilowana ze wsparciem UTF-8 w rozszerzeniu PCRE.',
	'PHP_JSON_SUPPORT'					=> 'Obsługa PHP JSON',
	'PHP_JSON_SUPPORT_EXPLAIN'			=> '<strong>Wymagane</strong> - Aby phpBB działało prawidłowo, rozszerzenie PHP JSON musi być dostępne.',
	'PHP_MBSTRING_SUPPORT'				=> 'Obsługa PHP mbstring',
	'PHP_MBSTRING_SUPPORT_EXPLAIN'		=> '<strong>Wymagane</strong> - Aby phpBB działało prawidłowo, rozszerzenie PHP mbstring musi być dostępne.',
	'PHP_XML_SUPPORT'					=> 'Obsługa PHP XML/DOM',
	'PHP_XML_SUPPORT_EXPLAIN'			=> '<strong>Wymagane</strong> - Aby phpBB działało prawidłowo, rozszerzenie PHP XML/DOM musi być dostępne.',
	'PHP_SUPPORTED_DB'					=> 'Obsługiwane bazy danych',
	'PHP_SUPPORTED_DB_EXPLAIN'			=> '<strong>Wymagane</strong> – Należy mieć przynajmniej jedną z obsługiwanych przez PHP baz danych. Jeśli żaden z modułów baz danych nie jest wyświetlony jako dostępny, należy skontaktować się z dostawcą usługi hostingowej lub przejrzeć odpowiednią dokumentację instalacji PHP w poszukiwaniu porady.',

	'RETEST_REQUIREMENTS'	=> 'Ponownie sprawdź wymagania',

	'STAGE_REQUIREMENTS'	=> 'Sprawdź wymagania',
));

// General error messages
$lang = array_merge($lang, array(
	'INST_ERR_MISSING_DATA'		=> 'Należy wypełnić wszystkie pola w tym formularzu.',

	'TIMEOUT_DETECTED_TITLE'	=> 'Instalator wykrył przekroczenie limitu czasu',
	'TIMEOUT_DETECTED_MESSAGE'	=> 'Przekroczono limit czasu. Możesz odświeżyć stronę, lecz może to spowodować utratę danych. Sugerujemy zwiększenie limitu czasu lub skorzystać z wiersza poleceń (CLI).',
));

// Data obtaining translations
$lang = array_merge($lang, array(
	'STAGE_OBTAIN_DATA'	=> 'Dane instalacyjne',

	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR'	=> 'Administrator',

	// Form labels
	'ADMIN_CONFIG'				=> 'Ustawienia administratora',
	'ADMIN_PASSWORD'			=> 'Hasło administratora',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Potwierdź hasło administratora',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Wprowadź hasło o długości 6 – 30 znaków.',
	'ADMIN_USERNAME'			=> 'Login administratora',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Wprowadź nazwę użytkownika o długości 3 – 20 znaków.',

	// Errors
	'INST_ERR_EMAIL_INVALID'		=> 'Podany adres e-mail jest nieprawidłowy.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Podane hasła nie są jednakowe.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Wprowadzone hasło jest za długie. Maksymalna długość to 30 znaków.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Wprowadzone hasło jest za krótkie. Minimalna długość to 6 znaków.',
	'INST_ERR_USER_TOO_LONG'		=> 'Wprowadzony login jest za długi. Maksymalna długość to 20 znaków.',
	'INST_ERR_USER_TOO_SHORT'		=> 'Wprowadzony login jest za krótki. Minimalna długość to 3 znaki.',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'		=> 'Ustawienia witryny',
	'DEFAULT_LANGUAGE'	=> 'Domyślny język witryny',
	'BOARD_NAME'		=> 'Nazwa witryny',
	'BOARD_DESCRIPTION'	=> 'Opis witryny',

	//
	// Database data
	//
	'STAGE_DATABASE'	=> 'Ustawienia bazy danych',

	// Form labels
	'DB_CONFIG'				=> 'Konfiguracja bazy danych',
	'DBMS'					=> 'Typ bazy danych',
	'DB_HOST'				=> 'Nazwa serwera bazy danych lub DSN',
	'DB_HOST_EXPLAIN'		=> 'Nazwa DSN (Data Source Name) jest właściwa tylko dla instalacji ODBC, a z bazą PostgreSQL, należy użyć localhost, aby połączyć się z lokalnym serwerem uniksowym lub 127.0.0.1, aby połączyć się przez TCP. Dla bazy SQLite wprowadź pełną ścieżkę do pliku bazy danych.',
	'DB_PORT'				=> 'Port serwera bazy danych',
	'DB_PORT_EXPLAIN'		=> 'Pozostaw to pole puste, chyba że baza używa do połączenia niestandardowego portu.',
	'DB_PASSWORD'			=> 'Hasło bazy danych',
	'DB_NAME'				=> 'Nazwa bazy danych',
	'DB_USERNAME'			=> 'Nazwa użytkownika bazy danych',
	'DATABASE_VERSION'		=> 'Wersja bazy danych',
	'TABLE_PREFIX'			=> 'Prefiks nazw tabel w bazie danych',
	'TABLE_PREFIX_EXPLAIN'	=> 'Prefiks musi rozpoczynać się literą i może zawierać tylko litery, cyfry oraz znak podkreślenia.',

	// Database options
	'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Server 2000+ via ODBC',
	'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Server 2005+ [ Native ]',
	'DB_OPTION_MYSQLI'		=> 'MySQL with MySQLi Extension',
	'DB_OPTION_ORACLE'		=> 'Oracle',
	'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
	'DB_OPTION_SQLITE3'		=> 'SQLite 3',

	// Errors
	'INST_ERR_DB'					=> 'Błąd instalacji bazy danych',
	'INST_ERR_NO_DB'				=> 'Nie można załadować modułu PHP obsługującego wybrany typ bazy danych.',
	'INST_ERR_DB_INVALID_PREFIX'	=> 'Podany prefiks jest nieprawidłowy. Musi rozpoczynać się literą i może zawierać tylko litery, cyfry oraz znak podkreślenia.',
	'INST_ERR_PREFIX_TOO_LONG'		=> 'Podany prefiks tabel jest za długi. Maksymalna długość to %d znaków.',
	'INST_ERR_DB_NO_NAME'			=> 'Nie podano nazwy bazy danych.',
	'INST_ERR_DB_FORUM_PATH'		=> 'Podany plik bazy danych znajduje się wewnątrz katalogu głównego witryny. Należy umieścić go w miejscu niedostępnym przez Internet.',
	'INST_ERR_DB_CONNECT'			=> 'Nie można połączyć się z bazą danych. Poniżej znajduje się opis błędu.',
	'INST_ERR_DB_NO_WRITABLE'		=> 'Baza danych oraz zwierający ją katalog muszą mieć prawa do zapisu.',
	'INST_ERR_DB_NO_ERROR'			=> 'Brak informacji o błędach.',
	'INST_ERR_PREFIX'				=> 'Już istnieją tabele z takim prefiksem. Wybierz inny prefiks.',
	'INST_ERR_DB_NO_MYSQLI'			=> 'Wersja MySQL zainstalowana na tym serwerze nie jest kompatybilna z wybraną opcją „MySQL z rozszerzeniem MySQLi”. Spróbuj użyć opcji „MySQL”.',
	'INST_ERR_DB_NO_SQLITE3'		=> 'Zainstalowana wersja rozszerzenia SQLite jest przestarzała i należy ją zaktualizować do wersji 3.6.15.',
	'INST_ERR_DB_NO_ORACLE'			=> 'Wersja Oracle zainstalowana na tym serwerze wymaga ustawienia parametru <var>NLS_CHARACTERSET</var> na <var>UTF8</var>. Zmień ten parametr lub zaktualizuj bazę do wersji 9.2 lub nowszej.',
	'INST_ERR_DB_NO_POSTGRES'		=> 'Wybrana baza danych nie została utworzona w kodowaniu <var>UNICODE</var> lub <var>UTF8</var>. Spróbuj zainstalować witrynę z bazą danych o kodowaniu <var>UNICODE</var> lub <var>UTF8</var>.',
	'INST_SCHEMA_FILE_NOT_WRITABLE'	=> 'Nie można zapisać pliku schematu bazy danych.',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> 'Konfiguracja adresu e-mail',

	// Package info
	'PACKAGE_VERSION'					=> 'Zainstalowana wersja pakietu',
	'UPDATE_INCOMPLETE'				=> 'Twój skrypt phpBB nie został poprawnie zaktualizowany.',
	'UPDATE_INCOMPLETE_MORE'		=> 'Przeczytaj poniższe informacje, aby naprawić ten błąd.',
	'UPDATE_INCOMPLETE_EXPLAIN'		=> '<h1>Aktualizacja jest niekompletna</h1>

		<p>Zarejestrowaliśmy, że ostatnia aktualizacja skryptu phpBB nie została zakończona. Przejdź do <a href="%1$s" title="%1$s">aktualizacji bazy danych</a>, następnie upewnij się, że zaznaczono <em>Zaktualizuj bazę danych</em> i kliknij <strong>Wyślij</strong>. Nie zapomnij skasować katalogu "install", jeśli aktualizacja bazy danych została pomyślnie zakończona.</p>',

	//
	// Server data
	//
	// Form labels
	'UPGRADE_INSTRUCTIONS'			=> 'Dostępna jest nowa wersja skryptu <strong>%1$s</strong>. Przeczytaj <a href="%2$s" title="%2$s"><strong>informacje o wydaniu</strong></a>, aby dowiedzieć się o nowościach i sposobie aktualizacji.',
	'SERVER_CONFIG'				=> 'Konfiguracja serwera',
	'SCRIPT_PATH'				=> 'Ścieżka do skryptu',
	'SCRIPT_PATH_EXPLAIN'		=> 'Jest to ścieżka do skryptu phpBB relatywna do nazwy domeny. Na przykład: <samp>/phpBB3</samp>.',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Zespół administracyjny',
	'CONFIG_SITE_DESC'				=> 'Krótki opis witryny',
	'CONFIG_SITENAME'				=> 'twoja_domena.pl',

	'DEFAULT_INSTALL_POST'			=> '<t>To jest przykładowy post na tej witrynie phpBB3. Wygląda na to, że wszystko działa prawidłowo. Możesz, jeśli chcesz, usunąć ten post i przystąpić do konfiguracji witryny. Podczas procesu instalacji pierwsze forum otrzymało odpowiedni zestaw uprawnień dla predefiniowanych grup użytkowników – administratorów, botów, globalnych moderatorów, gości, zarejestrowanych użytkowników i zarejestrowanych użytkowników COPPA. Jeśli zamierzasz usunąć pierwsze forum i subforum, nie zapomnij przydzielić uprawnień wszystkim wcześniej wymienionym grupom użytkowników w tworzonych przez ciebie nowych forach i subforach. Zaleca się zmienić nazwę pierwszego forum i subforum i skopiować ich uprawnienia dla nowo tworzonych forów i subforów. Życzymy przyjemnej zabawy z twoją nową witryną phpBB3!</t>',

	'FORUMS_FIRST_CATEGORY'			=> 'Pierwsze forum typu „Kategoria”',
	'FORUMS_TEST_FORUM_DESC'		=> 'To jest twoje pierwsze forum typu „Forum”',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Pierwsze forum',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Administrator',
	'REPORT_WAREZ'					=> 'Post zawiera odnośniki do nielegalnego oprogramowania.',
	'REPORT_SPAM'					=> 'Post zawiera reklamy strony internetowej lub innych produktów.',
	'REPORT_OFF_TOPIC'				=> 'Treść postu nie dotyczy tematu dyskusji.',
	'REPORT_OTHER'					=> 'Powód zgłoszenia nie pasuje do żadnej kategorii. Podaj w polu opisu więcej informacji.',

	'SMILIES_ARROW'					=> 'Strzałka',
	'SMILIES_CONFUSED'				=> 'Zakłopotanie',
	'SMILIES_COOL'					=> 'Wyluzowanie',
	'SMILIES_CRYING'				=> 'Płacz',
	'SMILIES_EMARRASSED'			=> 'Zakłopotanie',
	'SMILIES_EVIL'					=> 'Złość',
	'SMILIES_EXCLAMATION'			=> 'Okrzyk',
	'SMILIES_GEEK'					=> 'Maniak',
	'SMILIES_IDEA'					=> 'Pomysł',
	'SMILIES_LAUGHING'				=> 'Śmiech',
	'SMILIES_MAD'					=> 'Wściekłość',
	'SMILIES_MR_GREEN'				=> 'Mr.Green',
	'SMILIES_NEUTRAL'				=> 'Neutralny',
	'SMILIES_QUESTION'				=> 'Wątpliwość',
	'SMILIES_RAZZ'					=> 'Żartowanie z kogoś',
	'SMILIES_ROLLING_EYES'			=> 'Sfrustrowanie',
	'SMILIES_SAD'					=> 'Smutek',
	'SMILIES_SHOCKED'				=> 'Szok',
	'SMILIES_SMILE'					=> 'Szczęście, dobry humor',
	'SMILIES_SURPRISED'				=> 'Zaskoczenie',
	'SMILIES_TWISTED_EVIL'			=> 'Szalony',
	'SMILIES_UBER_GEEK'				=> 'Super maniak',
	'SMILIES_VERY_HAPPY'			=> 'Duże szczęście, bardzo dobry humor',
	'SMILIES_WINK'					=> 'Sarkazm',

	'TOPICS_TOPIC_TITLE'			=> 'Witamy w phpBB3!',
));

// Common navigation items' translation
$lang = array_merge($lang, array(
	'MENU_OVERVIEW'		=> 'Przegląd',
	'MENU_INTRO'		=> 'Wprowadzenie',
	'MENU_LICENSE'		=> 'Licencja',
	'MENU_SUPPORT'		=> 'Pomoc',
));

// Task names
$lang = array_merge($lang, array(
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'	=> 'Tworzenie pliku konfiguracyjnego',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'			=> 'Zapisywanie ustawień konfiguracyjncych',
	'TASK_ADD_DEFAULT_DATA'				=> 'Zapisywanie domyślnych ustawień w bazie danych',
	'TASK_CREATE_DATABASE_SCHEMA_FILE'	=> 'Tworzenie schematu bazy danych',
	'TASK_SETUP_DATABASE'				=> 'Konfigurowanie bazy danych',
	'TASK_CREATE_TABLES'				=> 'Tworzenie tabel',

	// Install data
	'TASK_ADD_AI_CRAWLERS'		=> 'Rejestrowanie botów AI',
	'TASK_ADD_BOTS'				=> 'Rejestrowanie botów',
	'TASK_ADD_LANGUAGES'		=> 'Instalowanie dostępnych języków',
	'TASK_ADD_MODULES'			=> 'Instalowanie modułów',
	'TASK_CREATE_SEARCH_INDEX'	=> 'Tworzenie indeksu wyszukiwania',

	// Install finish tasks
	'TASK_INSTALL_EXTENSIONS'	=> 'Instalowanie rozszerzeń',
	'TASK_NOTIFY_USER'			=> 'Wysyłanie powiadomień na e-mail',
	'TASK_POPULATE_MIGRATIONS'	=> 'Wypełnianie migracji',

	// Installer general progress messages
	'INSTALLER_FINISHED'	=> 'Instalacja została zakończona pomyślnie.',
));

// Installer's general messages
$lang = array_merge($lang, array(
	'MODULE_NOT_FOUND'				=> 'Moduł jest niedostępny',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> 'Moduł nie został znaleziony, ponieważ usługa %s jest niezdefiniowana.',

	'TASK_NOT_FOUND'				=> 'Zadanie jest niedostępne',
	'TASK_NOT_FOUND_DESCRIPTION'	=> 'Zadanie nie zostało znalezione, ponieważ usługa %s jest niezdefiniowana.',

	'SKIP_MODULE'	=> 'Pomiń moduł “%s”',
	'SKIP_TASK'		=> 'Pomiń zadanie “%s”',

	'TASK_SERVICE_INSTALLER_MISSING'	=> 'Wszystkie usługi zadań instalacyjnych muszą rozpocząć się od “installer”',
	'TASK_CLASS_NOT_FOUND'				=> 'Definicja usług zadań instalacyjnych jest niepoprawna. Podana nazwa usługi to “%1$s”. Oczekiwana klasa przestrzeni nazw to “%2$s”. Aby dowiedzieć się więcej, przeczytaj dokumentację zadań instalacyjnych.',

	'INSTALLER_CONFIG_NOT_WRITABLE'	=> 'Plik konfiguracyjny instalatora jest zabezpieczony przed zapisem.',
));

// CLI messages
$lang = array_merge($lang, array(
	'CLI_INSTALL_BOARD'				=> 'Zainstaluj phpBB',
	'CLI_UPDATE_BOARD'				=> 'Zaktualizuj phpBB',
	'CLI_INSTALL_SHOW_CONFIG'		=> 'Pokaż konfigurację, która będzie wykorzystana',
	'CLI_INSTALL_VALIDATE_CONFIG'	=> 'Sprawdź plik konfiguracyjny',
	'CLI_CONFIG_FILE'				=> 'Plik konfiguracyjny',
	'MISSING_FILE'					=> 'Brak dostępu do pliku %1$s',
	'MISSING_DATA'					=> 'Plik konfiguracyjny jest niepoprawny lub zawiera złe ustawienia.',
	'INVALID_YAML_FILE'				=> 'Nie można sparsować pliku YAML - %1$s',
	'CONFIGURATION_VALID'			=> 'Plik konfiguracyjny jest poprawny',
));

// Common updater messages
$lang = array_merge($lang, array(
	'UPDATE_INSTALLATION'			=> 'Aktualizuj forum phpBB',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Za pomocą tej funkcji można wykonać aktualizację skryptu phpBB do najnowszej wersji.<br />W czasie procesu aktualizacji wszystkie stare pliki zostaną porównane z plikami nowej wersji. Przed aktualizacją będzie można przejrzeć wszystkie pliki i różnice.<br /><br />Aktualizacja plików może być wykonana na dwa różne sposoby:</p><h2>Aktualizacja ręczna</h2><p>Stosując tę metodę aktualizacji, należy pobrać zestaw zmienionych plików, sprawdzić je, aby nie stracić wcześniej ręcznie wprowadzonych modyfikacji – w razie potrzeby uzupełnić o te modyfikacje nowe pliki i wgrać je na serwer we właściwe dla nich miejsca w skrypcie witryny. Po wykonaniu tej operacji należy sprawdzić, czy pliki te znajdują się we właściwych miejscach w skrypcie.</p><h2>Automatyczna aktualizacja za pomocą FTP</h2><p>Ta metoda jest podobna do pierwszej, ale zamiast pobierać pliki z serwera aktualizacji i wgrywać je do katalogu głównego skryptu witryny, wystarczy podać kilka danych dotyczących używanego serwera FTP. Po zakończeniu wgrywania plików przez serwer FTP nastąpi przekierowanie do sprawdzenia plików, by upewnić się, czy wszystko zostało prawidłowo wykonane.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Informacje o wydaniu</h1>

		<p>Przed wykonaniem aktualizacji, przeczytaj komunikat o najnowszej wersji. Może on zawierać istotne informacje. Komunikat ten zawiera odnośniki do pobrania aktualizacji oraz opis zmian.</p>

		<br />

		<h1>Jak zaktualizować zainstalowaną wersję za pomocą pełnego pakietu aktualizacyjnego („Full Package”)</h1>

		<p>Zalecanym sposobem aktualizacji skryptu jest użycie pełnego pakietu aktualizacyjnego. Jeśli zostały zmodyfikowane główne pliki phpBB, można użyć zaawansowanej aktualizacji („Advanced Update Package”), aby zachować wprowadzone zmiany. Można także dokonać aktualizacji skryptu za pomocą metod opisanych w dokumencie INSTALL.html. Aby wykonać aktualizację phpBB3 przy pomocy pełnego pakietu aktualizacyjnego, należy wykonać następujące kroki:</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li><strong class="error">Zrób kopię bazy danych oraz wszystkich plików forum.</strong></li>
			<li>Przejdź do <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">strony pobierania</a> i pobierz archiwum zawierające pełen pakiet aktualizacyjny („Full Package”).</li>
			<li>Rozpakuj archiwum.</li>
			<li>Usuń plik <code class="inline">config.php</code> oraz katalogi <code class="inline">/images</code>, <code class="inline">/store</code> i <code class="inline">/files</code> z <em>wypakowanego archiwum na dysku</em> (Nie usuwaj tych plików z serwera!).</li>
			<li>Zaloguj się do Panelu administratora > Ustawienia witryny i ustaw Prosilver jako domyślny styl forum.</li>
			<li>Usuń katalogi <code class="inline">/vendor</code> oraz <code class="inline">/cache</code> z serwera, gdzie zainstalowany jest phpBB.</li>
			<li>Poprzez klienta FTP lub SSH wgraj pozostałe pliki z wypakowanego archiwum do głównego katalogu forum na serwerze. Nadpisz pliki. (UWAGA: Upewnij się, aby nie skasować żadnych plików z katalogu <code class="inline">/ext</code> podczas wgrywania nowych plików.)</li>
			<li><strong><a href="%1$s" title="%1$s">Rozpocznij instalację, wprowadzając w pasku adresu swojej przeglądarki ścieżkę do katalogu „install” lub kliknij ten odnośnik</a>.</strong></li>
			<li>Postępuj zgodnie z kolejnymi krokami instalacji, aby zaktualizować bazę danych. Poczekaj na zakończenie tej operacji.</li>
			<li>Poprzez klienta FTP lub SSH usuń katalog <code class="inline">/install</code> z katalogu głównego forum na serwerze.<br><br></li>
		</ol>
		
		<p>Witryna forum została zaktualizowana do najnowszej wersji. Następnie wykonaj poniższe kroki:</p>
		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Zaktualizuj pakiety językowe</li>
			<li>Zaktualizuj style forum<br><br></li>
		</ul>
		
		<h1>Jak zaktualizować zainstalowaną wersję za pomocą pakietu zaawansowanej aktualizacji („Advanced Update Package”)</h1>

		<p>Pakiet zaawansowanej aktualizacji jest zalecany wyłącznie dla doświadczonych użytkowników w przypadku, gdy zostały zmodyfikowane główne pliki phpBB. Można także dokonać aktualizacji skryptu za pomocą metod opisanych w dokumencie INSTALL.html. Aby wykonać zaawansowaną aktualizację phpBB3, należy wykonać następujące kroki:</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li>Przejdź do <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">strony pobierania</a> i pobierz archiwum zawierające pakiet zaawansowanej aktualizacji "Advanced Update Package".</li>
			<li>Rozpakuj archiwum.</li>
			<li>Wgraj rozpakowane katalogi „install” i „vendor” do głównego katalogu phpBB na serwerze – to katalog, w którym znajduje się plik „config.php”.<br><br></li>
		</ol>

		<p>Po wgraniu powyższych katalogów na serwer witryna będzie niedostępna dla zwykłych użytkowników z powodu obecności folderu „install” w katalogu głównym phpBB.<br /><br />
		<strong><a href="%1$s" title="%1$s">Uruchom proces aktualizacji, klikając ten odnośnik</a>.</strong><br /><br />
		Proces aktualizacji możesz również uruchomić, wprowadzając w pasku adresu swojej przeglądarki ścieżkę do katalogu „install”, np. http://www.nazwa_witryny.com/phpBB3/install/.<br /><br />
		Postępuj według wskazówek kreatora aktualizacji. Po zakończeniu procesu aktualizacji zostanie wyświetlone stosowne powiadomienie.
		</p>
	',
));

// Updater forms
$lang = array_merge($lang, array(
	// Updater types
	'UPDATE_TYPE'			=> 'Metoda aktualizacji',

	'UPDATE_TYPE_ALL'		=> 'Zaktualizuj pliki i bazę danych',
	'UPDATE_TYPE_DB_ONLY'	=> 'Zaktualizuj bazę danych',

	// File updater methods
	'UPDATE_FILE_METHOD_TITLE'		=> 'Metody aktualizacji plików',

	'UPDATE_FILE_METHOD'			=> 'Metoda aktualizacji plików',
	'UPDATE_FILE_METHOD_DOWNLOAD'	=> 'Pobierz archiwum zaktualizowanych plików',
	'UPDATE_FILE_METHOD_FTP'		=> 'Aktualizuj pliki poprzez FTP (Automatycznie)',
	'UPDATE_FILE_METHOD_FILESYSTEM'	=> 'Aktualizuj pliki poprzez bezpośredni dostęp plików (Automatycznie)',

	// File updater archives
	'SELECT_DOWNLOAD_FORMAT'	=> 'Wybierz format archiwum do pobrania',

	// FTP settings
	'FTP_SETTINGS'			=> 'Ustawienia FTP',
));

// Requirements messages
$lang = array_merge($lang, array(
	'UPDATE_FILES_NOT_FOUND'	=> 'Nie znaleziono prawidłowego katalogu aktualizacyjnego. Sprawdź, czy na serwer zostały wysłane właściwe pliki.',

	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Zainstalowana wersja jest aktualna. Nie ma potrzeby uruchamiania narzędzia aktualizującego. Jeśli chcesz sprawdzić integralność swoich plików sprawdź najpierw, czy na serwer zostały wysłane właściwe pliki aktualizacyjne.',
	'OLD_UPDATE_FILES'				=> 'Pliki aktualizacyjne są nieaktualne. Pliki te służą do aktualizacji phpBB %1$s do wersji %2$s, a najnowsza wersja phpBB to %3$s.',
	'INCOMPATIBLE_UPDATE_FILES'		=> 'Pliki aktualizacyjne są niekompatybilne z zainstalowaną wersją. Zainstalowana wersja to %1$s, a pliki aktualizacyjne aktualizują phpBB %2$s do wersji %3$s.',
));

// Update files
$lang = array_merge($lang, array(
	'STAGE_UPDATE_FILES'		=> 'Aktualizuj pliki',

	// Check files
	'UPDATE_CHECK_FILES'	=> 'Sprawdź pliki do aktualizacji',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> 'Sprawdzenie pliku %s nie było możliwe.',

	'UPDATE_FILE_DIFF'		=> 'Sprawdzanie zmian w plikach',
	'ALL_FILES_DIFFED'		=> 'Wszystkie zmodyfikowane pliki zostały sprawdzone.',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE'	=> 'Aktualizuj pliki',

	'DOWNLOAD'							=> 'Pobierz',
	'DOWNLOAD_CONFLICTS'				=> 'Błędy pobierania tego pliku',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Szukaj &lt;&lt;&lt;, aby zobaczyć błędy',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Pobierz archiwum zmodyfikowanych plików',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'W pobranym archiwum znajdują się zmodyfikowane pliki, które po rozpakowaniu archiwum należy wysłać na serwer we właściwe im miejsca w katalogu głównym phpBB. Po wykonaniu tej operacji należy sprawdzić ponownie pliki, używając przycisku znajdującego się poniżej.',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Ten plik jest aktualny.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Wykonanie porównania pliku nie jest możliwe.',
	'FILE_USED'						=> 'Informacja pobrana z',			// Single file
	'FILES_CONFLICT'				=> 'Konflikty w plikach',
	'FILES_CONFLICT_EXPLAIN'		=> 'Poniższe pliki zostały zmodyfikowane i nie obrazują oryginalnych plików starej wersji. Próba ich połączenia może powodować konflikty. Sprawdź, jakie to są konflikty i spróbuj je rozwiązać ręcznie lub kontynuuj aktualizację, wybierając preferowaną metodę połączenia. Po ręcznym rozwiązaniu konfliktów poprzez modyfikację plików sprawdź je ponownie. Dla każdego pliku można wybrać inną, z preferowanych metod połączenia. Pierwsza metoda spowoduje usunięcie ze starego pliku wierszy powodujących konflikt, druga – usunięcie zmian wprowadzonych w nowej wersji pliku.',
	'FILES_DELETED'					=> 'Usunięte pliki',
	'FILES_DELETED_EXPLAIN'			=> 'Następujące pliki nie istnieją w nowej wersji. Pliki te należy usunąć.',
	'FILES_MODIFIED'				=> 'Zmodyfikowane pliki',
	'FILES_MODIFIED_EXPLAIN'		=> 'Poniższe pliki zostały zmodyfikowane i nie obrazują oryginalnych plików starej wersji. Pliki zostaną połączone i nowa wersja pliku będzie zawierać modyfikacje z nowej wersji i modyfikacje wykonane wcześniej.',
	'FILES_NEW'						=> 'Nowe pliki',
	'FILES_NEW_EXPLAIN'				=> 'Poniższe pliki nie istnieją w zainstalowanej wersji phpBB. Pliki te zostaną dodane do instalacji.',
	'FILES_NEW_CONFLICT'			=> 'Nowe pliki powodujące konflikty',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Poniższe pliki zostały dodane w najnowszej wersji, ale pliki o takich nazwach i w tym samym położeniu znajdują się już w zainstalowanej wersji. Pliki te zostaną zastąpione nowymi.',
	'FILES_NOT_MODIFIED'			=> 'Pliki niezmodyfikowane',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Poniższe pliki nie zostały zmodyfikowane i są oryginalnymi plikami wersji phpBB, którą zamierzasz zaktualizować.',
	'FILES_UP_TO_DATE'				=> 'Pliki już zaktualizowane',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Poniższe pliki są aktualne i nie muszą być aktualizowane.',
	'FILES_VERSION'					=> 'Wersja plików',
	'TOGGLE_DISPLAY'				=> 'Pokaż/Ukryj listę plików',

	// File updater
	'UPDATE_UPDATING_FILES'	=> 'Aktualizacja plików',

	'UPDATE_FILE_UPDATER_HAS_FAILED'	=> 'Niepowodzenia aktualizacji pliku “%1$s“. Instalator przywróci plik “%2$s“.',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> 'Niepowodzenie aktualizacji plików. Brak dostępnych opcji przywrócenia plików.',

	'UPDATE_CONTINUE_UPDATE_PROCESS'	=> 'Kontynuuj proces aktualizacji',
	'UPDATE_RECHECK_UPDATE_FILES'		=> 'Sprawdź pliki ponownie',
));

// Update database
$lang = array_merge($lang, array(
	'STAGE_UPDATE_DATABASE'		=> 'Aktualizuj bazę danych',

	'INLINE_UPDATE_SUCCESSFUL'		=> 'Aktualizacja bazy danych została zakończona.',

	'TASK_UPDATE_EXTENSIONS'	=> 'Aktualizacja rozszerzeń',
));

// Converter
$lang = array_merge($lang, array(
	// Common converter messages
	'CONVERT_NOT_EXIST'			=> 'Wybrany konwerter nie istnieje.',
	'DEV_NO_TEST_FILE'			=> 'Zmienna test_file w konwerterze nie ma wartości. Użytkownik tego konwertera nie powinien widzieć tego błędu. Poinformuj o tym autora konwertera. Jeśli jesteś autorem konwertera, musisz podać nazwę pliku, który istnieje w źródłowej witrynie, co umożliwi sprawdzanie ścieżki.',
	'COULD_NOT_COPY'			=> 'Nie udało się skopiować pliku <strong>%1$s</strong> do <strong>%2$s</strong><br><br>Sprawdź, czy katalog docelowy istnieje i czy serwer ma do niego uprawnienia do zapisu.',
 	'COULD_NOT_FIND_PATH'		=> 'Nie można znaleźć ścieżki do poprzedniej witryny. Sprawdź ustawienia i spróbuj ponownie. Podana ścieżka do źródłowej witryny to %s.',
	'CONFIG_PHPBB_EMPTY'		=> 'Zmienna konfiguracji dla „%s” nie zawiera danych.',

	'MAKE_FOLDER_WRITABLE'		=> 'Sprawdź, czy ten katalog istnieje i nie jest zabezpieczony przed zapisem i spróbuj ponownie:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Sprawdź, czy te katalogi istnieją i nie są zabezpieczone przed zapisem i spróbuj ponownie:<br />»<strong>%s</strong>.',

	'INSTALL_TEST'				=> 'Testuj',

	'NO_TABLES_FOUND'			=> 'Nie znaleziono żadnych tabel.',
	'TABLES_MISSING'			=> 'Nie znaleziono następujących tabel<br />» <strong>%s</strong>.',
	'CHECK_TABLE_PREFIX'		=> 'Sprawdź prefiks tabel i spróbuj ponownie.',

	// Conversion in progress
	'CATEGORY'					=> 'Kategoria',
	'CONTINUE_CONVERT'			=> 'Kontynuuj konwersję',
	'CONTINUE_CONVERT_BODY'		=> 'Wykryto poprzednią próbę konwersji. Można teraz rozpocząć nową konwersję lub kontynuować poprzednią.',
	'CONVERT_NEW_CONVERSION'	=> 'Nowa konwersja',
	'CONTINUE_OLD_CONVERSION'	=> 'Kontynuuj poprzednio rozpoczętą konwersję',
	'POST_ID'					=> 'ID posta',

	// Start conversion
	'SUB_INTRO'					=> 'Wprowadzenie',
	'CONVERT_INTRO'				=> 'Witamy w konwerterze phpBB',
	'CONVERT_INTRO_BODY'		=> 'Z tego miejsca można dokonać importu danych z innych, zainstalowanych systemów forów dyskusyjnych. Lista poniżej zawiera wszystkie dostępne moduły konwertujące. Jeśli na liście nie ma potrzebnego konwertera sprawdź na naszej stronie internetowej, czy nie jest on już dostępny. Aby rozpocząć konwersję, kliknij odnośnik <em>Konwersja</em> znajdujący się w polu Opcje wybranego konwertera.',
	'AVAILABLE_CONVERTORS'		=> 'Dostępne konwertery',
	'NO_CONVERTORS'				=> 'Nie ma dostępnych żadnych konwerterów.',
	'CONVERT_OPTIONS'			=> 'Opcje',
	'SOFTWARE'					=> 'Oprogramowanie witryny',
	'VERSION'					=> 'Wersja',
	'CONVERT'					=> 'Konwertuj',

	// Settings
	'STAGE_SETTINGS'			=> 'Ustawienia',
	'TABLE_PREFIX_SAME'			=> 'Prefiks tabel musi być prefiksem używanym przez bazę danych, z której nastąpi konwersja.<br />» Podany prefiks tabel to %s.',
	'DEFAULT_PREFIX_IS'			=> 'Konwerter nie mógł znaleźć tabel o wybranym prefiksie. Sprawdź, czy zostały podane poprawnie informacje o starej witrynie. Domyślny prefiks tabel dla %1$s to <strong>%2$s</strong>.',
	'SPECIFY_OPTIONS'			=> 'Określ opcje konwersji',
	'FORUM_PATH'				=> 'Ścieżka do starej witryny',
	'FORUM_PATH_EXPLAIN'		=> 'To jest <strong>relatywna</strong> ścieżka na dysku z <strong>głównego katalogu tej instalacji phpBB3</strong> do starej witryny.',
	'REFRESH_PAGE'				=> 'Odśwież stronę, aby kontynuować konwersję',
	'REFRESH_PAGE_EXPLAIN'		=> 'Włączenie tej funkcji spowoduje, że po zakończeniu każdego kroku, aby kontynuować konwersję, konwerter automatycznie odświeży stronę. Jeśli jest to twoja pierwsza, testowa konwersja wykonywana w celu wyeliminowania w przyszłości błędów, sugerujemy, aby wyłączyć tę funkcję.',

	// Conversion
	'STAGE_IN_PROGRESS'			=> 'Konwersja w toku…',

	'AUTHOR_NOTES'				=> 'Informacje o autorze<br />» %s',
	'STARTING_CONVERT'			=> 'Rozpoczynanie konwersji',
	'CONFIG_CONVERT'			=> 'Konwertowanie konfiguracji',
	'DONE'						=> 'Wykonano',
	'PREPROCESS_STEP'			=> 'Wykonywanie czynności przygotowujących',
	'FILLING_TABLE'				=> 'Wypełnianie tabeli <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Wypełnianie tabel',
	'DB_ERR_INSERT'				=> 'Błąd w czasie przetwarzania zapytania <code>INSERT</code>.',
	'DB_ERR_LAST'				=> 'Błąd w czasie przetwarzania <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Błąd w czasie wykonywania <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Błąd w czasie wykonywania <var>query_first</var>, %s („%s”).',
	'DB_ERR_SELECT'				=> 'Błąd w czasie uruchamiania zapytania <code>SELECT</code>.',
	'STEP_PERCENT_COMPLETED'	=> 'Krok <strong>%d</strong> z <strong>%d</strong>',
	'FINAL_STEP'				=> 'Przetwarzanie ostatniego etapu',
	'SYNC_FORUMS'				=> 'Rozpoczynanie synchronizacji forów',
	'SYNC_POST_COUNT'			=> 'Synchronizacja liczników postów',
	'SYNC_POST_COUNT_ID'		=> 'Synchronizacja liczników postów od <var>wpisu</var> %1$s do %2$s.',
	'SYNC_TOPICS'				=> 'Rozpoczynanie synchronizacji tematów',
	'SYNC_TOPIC_ID'				=> 'Synchronizacja tematów od <var>ID tematu</var> %1$s do %2$s.',
	'PROCESS_LAST'					=> 'Wykonywanie czynności końcowych',
	'UPDATE_TOPICS_POSTED'		=> 'Generowanie informacji o tematach',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'W czasie generowania informacji o tematach wystąpił błąd. Po zakończeniu konwersji będzie można powtórzyć ten krok z poziomu panelu administracji.',
	'CONTINUE_LAST'				=> 'Kontynuuj wykonanie instrukcji końcowych',
	'CLEAN_VERIFY'				=> 'Czyszczenie i weryfikacja struktury końcowej',
	'NOT_UNDERSTAND'			=> 'Nie można zrozumieć %s #%d, tabela %s (“%s”).',
	'NAMING_CONFLICT'			=> 'Konflikt w nazewnictwie: %s i %s to aliasy<br /><br />%s',

	// Finish conversion
	'CONVERT_COMPLETE'			=> 'Konwersja zakończona',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Witryna została skonwertowana na phpBB 3.3. Możesz teraz zalogować się i <a href="../">wejść na swoją witrynę</a>. Zanim odblokujesz swoją witrynę, usuwając katalog „install/” sprawdź, czy ustawienia zostały skonwertowane prawidłowo. Pomoc możesz uzyskać na stronie internetowej phpBB3, zapoznając się z <a href="https://www.phpbb.com/support/docs/en/3.3/ug/">dokumentacją</a> oraz na forum <a href="https://www.phpbb.com/community/viewforum.php?f=661">pomocy</a>.',

	'COLLIDING_CLEAN_USERNAME'			=> '<strong>%s</strong> to nazwa użytkownika składająca się wyłącznie z małych liter dla:',
	'COLLIDING_USER'					=> '» id użytkownika: <strong>%d</strong> nazwa użytkownika: <strong>%s</strong> (%d postów)',
	'COLLIDING_USERNAMES_FOUND'			=> 'Na starym forum znaleziono kolidujące nazwy użytkowników. Aby zakończyć konwersję, usuń lub zmień nazwy tych użytkowników, tak aby na starym forum był tylko jeden użytkownik o takiej samej nazwie składającej się wyłącznie z małych liter.',
	'CONV_ERR_FATAL'					=> 'Krytyczny błąd konwersji',
	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'Na starej witrynie jest włączona funkcja wysyłania załączników przez FTP. Wyłącz ją i sprawdź, czy jest podany właściwy katalog docelowy, a następnie skopiuj wszystkie załączniki do nowego, dostępnego przez Internet katalogu. Po wykonaniu tych operacji ponownie uruchom proces konwersji.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Nie ma dostępnych informacji konfiguracyjnych dla konwersji.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Nie można uzyskać informacji o dostępie do forów.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Nie można uzyskać informacji o kategoriach.',
	'CONV_ERROR_GET_CONFIG'				=> 'Nie można uzyskać informacji o konfiguracji witryny.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Nie można otworzyć/przeczytać „%s”.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Nie można uzyskać informacji o uwierzytelnieniu grup.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'W „add_bots()” wykryto niespójność w tabeli grup – dodaj wszystkie grupy specjalne samodzielnie.',
	'CONV_ERROR_INSERT_BOT'				=> 'Nie można wstawić bota do tabeli z użytkownikami.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Nie można wstawić bota do tabeli z botami.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Nie można wstawić użytkownika do tabeli „user_group”.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Błąd przetwarzania wiadomości',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Informacja dla dewelopera: Trzeba określić $convertor[\'avatar_path\'], aby używać %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Nie podano relatywnej ścieżki do źródłowej witryny.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Informacja dla dewelopera: Trzeba podać $convertor[\'avatar_gallery_path\'], aby używać %s.',
	'CONV_ERROR_NO_GROUP'				=> 'W %2$s nie znaleziono grupy „%1$s”.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Informacja dla dewelopera: Trzeba podać $convertor[\'ranks_path\'], aby używać %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Informacja dla dewelopera: Trzeba podać $convertor[\'smilies_path\'], aby używać %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Informacja dla dewelopera: Trzeba podać $convertor[\'upload_path\'], aby używać %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Nie można wstawić/zmienić zezwolenia.',
	'CONV_ERROR_PM_COUNT'				=> 'Nie można wybrać folderu do policzenia PW.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Nie można wstawić nowego forum, zamieniając starą kategorię.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Nie można wstawić nowego forum, zamieniając stare forum.',
	'CONV_ERROR_USER_ACCESS'			=> 'Nie można uzyskać informacji o uwierzytelnianiu użytkowników.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Niewłaściwa grupa „%1$s” zdefiniowana w %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Ta strona zbiera dane wymagane do dostępu do źródłowej witryny. Podaj informacje o bazie danych twojej poprzedniej witryny. Konwerter nie zmieni niczego w podanej poniżej bazie danych. Aby umożliwić spójną konwersję, źródłowa witryna powinna być wyłączona.',
	'CONV_SAVED_MESSAGES'				=> 'Zapisane wiadomości',

	'PRE_CONVERT_COMPLETE'			=> 'Wszystkie kroki poprzedzające konwersję zostały wykonane poprawnie. Teraz można rozpocząć proces konwersji. Najprawdopodobniej trzeba będzie ręcznie przystosować kilka różnych elementów. Po konwersji należy sprawdzić przydział uprawnień, przebudować indeks wyszukiwania, który nie jest konwertowany, a także sprawdzić, czy pliki zostały prawidłowo skopiowane, np. awatary i emotikony.',
));
