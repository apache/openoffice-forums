<?php
/**
 *
 * VigLink extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * @Polska wersja językowa phpBB 3.3.5 - 17.10.2021, Mateusz Dutko (vader) www.rnavspotters.pl
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_VIGLINK_SETTINGS'			=> 'Ustawienia VigLink',
	'ACP_VIGLINK_SETTINGS_EXPLAIN'	=> 'VigLink jest zewnętrzną usługą, która dyskretnie zmienia znalezione linki zamieszczone przez użytkowników do portali czy serwisów. Jeśli użytkownik kliknie taki adres, a następnie kupi produkt lub usługę, to VigLink otrzymuje prowizję, której część przekazuje do projektu phpBB. Poprzez włączenie VigLink wspierasz projekt phpBB oraz zapewniasz bezpieczeństwo finansowe naszej opensourcowej organizacji.',
	'ACP_VIGLINK_SETTINGS_CHANGE'	=> 'W każdej chwili można zmienić opcje w “<a href="%1$s">ustawieniach VigLink</a>”.',
	'ACP_VIGLINK_SUPPORT_EXPLAIN'	=> 'Przekierowanie do tej strony, nie będzie możliwe po zapisaniu preferowanych opcji. Klknij “Wyślij”, aby zapisać ustawienia.',
	'ACP_VIGLINK_ENABLE'			=> 'Włącz VigLink',
	'ACP_VIGLINK_ENABLE_EXPLAIN'	=> 'Włącz usługę VigLink.',
	'ACP_VIGLINK_EARNINGS'			=> 'Zastrzeż własne środki (ustawienie opcjonalne)',
	'ACP_VIGLINK_EARNINGS_EXPLAIN'  => 'Można zastrzec własne środki poprzez zalogowanie się do konta “VigLink Convert”.',
	'ACP_VIGLINK_DISABLED_PHPBB'	=> 'Usługa VigLink została wyłączona przez phpBB.',
	'ACP_VIGLINK_CLAIM'				=> 'Odbierz własne środki',
	'ACP_VIGLINK_CLAIM_EXPLAIN'		=> 'Można odebrać środki z przetworzonych linków VigLink, zamiast przekazać je na projekt phpBB. Aby zmienić ustawienia, zaloguj się do konta “VigLink Convert”.',
	'ACP_VIGLINK_CONVERT_ACCOUNT'	=> 'Przekształć konto',
	'ACP_VIGLINK_NO_CONVERT_LINK'	=> 'Nie znaleziono przetworzonych adresów VigLink.',
));
