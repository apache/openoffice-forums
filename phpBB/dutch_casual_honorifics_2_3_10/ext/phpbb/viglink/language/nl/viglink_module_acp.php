<?php
/**
 *
 * VigLink extension for the phpBB Forum Software package.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>, phpBB.nl <http://www.phpbb.nl>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
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
	'ACP_VIGLINK_SETTINGS'			=> 'VigLink instellingen',
	'ACP_VIGLINK_SETTINGS_EXPLAIN'	=> 'VigLink is een externe service waarmee automatisch geld verdiend wordt met links in forumberichten zonder dat dit nadelig is voor de gebruikerservaring. Je gebruikers zullen hier dus niks van merken. Wanneer gebruikers op externe links klikken die naar producten of services gaan en vervolgens iets kopen, betaalt de verkopende partij een commissie aan VigLink. Hiervan wordt een deel gedoneerd aan het phpBB project. Door ervoor te kiezen om VigLink in te schakelen en hiermee aan het phpBB project te doneren, ondersteun je onze open source organisatie en verzeker je onze financiële zekerheid.',
	'ACP_VIGLINK_SETTINGS_CHANGE'	=> 'Je kunt deze instellingen op ieder moment wijzigen in de “<a href="%1$s">VigLink instellingen</a>” module.',
	'ACP_VIGLINK_SUPPORT_EXPLAIN'	=> 'Je zult niet langer naar deze pagina worden doorverwezen zodra je hieronder een keuze over de opties hebt gemaakt en deze verzonden hebt door op Verstuur te klikken.',
	'ACP_VIGLINK_ENABLE'			=> 'Schakel VigLink in',
	'ACP_VIGLINK_ENABLE_EXPLAIN'	=> 'Schakelt het gebruik van de Viglink service in.',
	'ACP_VIGLINK_EARNINGS'			=> 'Claim je eigen opbrengsten (optioneel)',
	'ACP_VIGLINK_EARNINGS_EXPLAIN'  => 'Je kunt je eigen opbrengsten claimen door zelf een eigen VigLink Convert account aan te maken.',
	'ACP_VIGLINK_DISABLED_PHPBB'	=> 'VigLink service is uitgeschakeld door phpBB.',
	'ACP_VIGLINK_CLAIM'				=> 'Claim je opbrengsten',
	'ACP_VIGLINK_CLAIM_EXPLAIN'		=> 'Je kunt de Viglink opbrengsten van je forum voor jezelf claimen in plaats van dit te doneren aan het phpBB project. Voor het beheren van je account klik je hiernaast op de link “Convert Account”. Je gaat dan naar de VigLink website waar je kiest voor “Sign Up”.',
	'ACP_VIGLINK_CONVERT_ACCOUNT'	=> 'Convert Account',
	'ACP_VIGLINK_NO_CONVERT_LINK'	=> 'VigLink convert accountkoppeling kon niet worden opgehaald.',
));
