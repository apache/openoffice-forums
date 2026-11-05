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
* @Polish locale 2014-10-28 18:24:32 Zespół Olympus.pl $
* @Polska wersja językowa phpBB 3.3.7 - 02.04.2022, Mateusz Dutko (vader) www.rnavspotters.pl
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
	'CONFIG_NOT_EXIST'					=> 'Nie ma ustawienia „%s”.',

	'GROUP_NOT_EXIST'					=> 'Nie ma grupy „%s”.',

	'MIGRATION_APPLY_DEPENDENCIES'		=> 'Zastosuj zależności z %s.',
	'MIGRATION_DATA_DONE'				=> 'Zainstalowano dane: %1$s; Czas: %2$.2f s',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'Instalowanie danych: %1$s; Czas: %2$.2f s',
	'MIGRATION_DATA_RUNNING'			=> 'Instalowanie danych: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'Migracja została już dokonana (pominięta): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'Nie udało się poprawnie wykonać zadania i informacje dotyczące tego błędu zostały zapisane. Zmiany wykonane przed wystąpieniem błędu zostały anulowane, ale należy sprawdzić czy na witrynie nie ma błędów.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'Migracja „%1$s” jest niezadowalająca, brakuje „%2$s”.',
	'MIGRATION_NOT_INSTALLED'			=> 'Migracja „%s” jest niezainstalowana.',
	'MIGRATION_NOT_VALID'				=> 'Migracja %s nie jest prawidłową migracją.',
	'MIGRATION_SCHEMA_DONE'				=> 'Zainstalowano schemat bazy danych: %1$s; Czas: %2$.2f s',
	'MIGRATION_SCHEMA_IN_PROGRESS' 		=> 'Instalowanie schematu bazy danych: %1$s; Czas: %2$.2f s',
	'MIGRATION_SCHEMA_RUNNING'			=> 'Instalowanie schematu bazy danych: %s.',

	'MIGRATION_REVERT_DATA_DONE'		=> 'Przywrócono dane: %1$s; Czas: %2$.2f s',
	'MIGRATION_REVERT_DATA_IN_PROGRESS'	=> 'Przywracanie danych: %1$s; Czas: %2$.2f s',
	'MIGRATION_REVERT_DATA_RUNNING'		=> 'Przywracanie danych: %s.',
	'MIGRATION_REVERT_SCHEMA_DONE'		=> 'Przywrócono schemat bazy danych: %1$s; Czas: %2$.2f s',
	'MIGRATION_REVERT_SCHEMA_IN_PROGRESS'	=> 'Przywracanie schematu bazy danych: %1$s; Czas: %2$.2f s',
	'MIGRATION_REVERT_SCHEMA_RUNNING'	=> 'Przywracanie schematu bazy danych: %s.',
	
	'MIGRATION_INVALID_DATA_MISSING_CONDITION'		=> 'Migracja się nie powiodła. W instrukcji „if” brakuje warunku.',
	'MIGRATION_INVALID_DATA_MISSING_STEP'			=> 'Migracja się nie powiodła. W instrukcji „if” brakuje poprawnego wywołania etapu migracji.',
	'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE'	=> 'Migracja się nie powiodła. Nie można wywołać wymaganej funkcji.',
	'MIGRATION_INVALID_DATA_UNKNOWN_TYPE'			=> 'Migracja się nie powiodła. Napotkano nieznany typ narzędzia migracji.',
	'MIGRATION_INVALID_DATA_UNDEFINED_TOOL'			=> 'Migracja się nie powiodła. Napotkano niezdefiniowane narzędzie migracji.',
	'MIGRATION_INVALID_DATA_UNDEFINED_METHOD'		=> 'Migracja się nie powiodła. Napotkano niezdefiniowaną metodę migracji.',
	
	'MODULE_ERROR'						=> 'W trakcie tworzenia modułu %s wystąpił błąd',
	'MODULE_EXISTS'						=> 'Moduł istnieje: %s',
	'MODULE_EXIST_MULTIPLE'				=> 'Kilka modułów z podanymi nazwami modułów nadrzędnych już istnieją: %s. Spróbuj użyć kluczy przed / po, aby określić położenie modułu.',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'Brakuje wymaganego pliku informacyjnego: %2$s',
	'MODULE_NOT_EXIST'					=> 'Nie ma wymaganego modułu: %s',
	
	'PARENT_MODULE_FIND_ERROR'			=> 'Nie można określić identyfikatora modułu nadrzędnego: %s',
	'PERMISSION_NOT_EXIST'				=> 'Nie istnieje ustawienie „%s”.',
	
	'ROLE_ASSIGNED_NOT_EXIST'			=> 'Nie istnieje rola przypisana do grupy "%1$s". Numer roli: "%2$s"',
	'ROLE_NOT_EXIST'					=> 'Nie istnieje rola „%s”.',
));
