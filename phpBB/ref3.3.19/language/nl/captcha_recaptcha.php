<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>, phpBBservice.nl <http://www.phpbbservice.nl>, phpBB.nl <http://www.phpbb.nl>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
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

$lang = array_merge($lang, array(
	// Find the language/country code on https://developers.google.com/recaptcha/docs/language
	// If no code exists for your language you can use "en" or leave the string empty
	'RECAPTCHA_LANG'				=> 'nl',

	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha v2',
	'CAPTCHA_RECAPTCHA_V3'			=> 'reCaptcha v3',
	
	'RECAPTCHA_INCORRECT'			=> 'De oplossing die je hebt ingevoerd is onjuist',
	'RECAPTCHA_NOSCRIPT'			=> 'Schakel JavaScript in om de uitdaging te kunnen laden.',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'Om gebruik te kunnen maken van reCaptcha, moet je een account aanmaken op <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_INVISIBLE'			=> 'Deze CAPTCHA is onzichtbaar. Wanneer deze CAPTCHA werkt, staat er een klein icoon in de rechterbenedenhoek van deze pagina.',
	'RECAPTCHA_V3_LOGIN_ERROR_ATTEMPTS'	=> 'Je hebt het maximaal aantal aanmeldpogingen overschreden.<br>Naast je gebruikersnaam en wachtwoord zal de verborgen reCAPTCHA v3 gebruikt worden om je sessie te valideren.',

	'RECAPTCHA_PUBLIC'				=> 'Site sleutel',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Je reCaptcha site-sleutel. Sleutels kunnen verkregen worden via <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Gebruik hiervoor reCAPTCHA v2 &gt; Invisible reCAPTCHA badge als type.',
	'RECAPTCHA_V3_PUBLIC_EXPLAIN'		=> 'Je reCaptcha site-sleutel. Sleutels kunnen verkregen worden via <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Gebruik hiervoor reCAPTCHA v3.',
	'RECAPTCHA_PRIVATE'				=> 'Privésleutel',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Je reCaptcha privé-sleutel. Sleutels kunnen verkregen worden via <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Gebruik hiervoor reCAPTCHA v2 &gt; Invisible reCAPTCHA badge als type.',
	'RECAPTCHA_V3_PRIVATE_EXPLAIN'		=> 'Je reCaptcha privé-sleutel. Sleutels kunnen verkregen worden via <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Gebruik hiervoor reCAPTCHA v3.',

	'RECAPTCHA_V3_DOMAIN'				=> 'Requestdomein',
	'RECAPTCHA_V3_DOMAIN_EXPLAIN'		=> 'Domein waar het script om het request te verifieren vandaan moet komen.<br>Gebruik <samp>recaptcha.net</samp> als <samp>google.com</samp> niet beschikbaar is.',

	'RECAPTCHA_V3_METHOD'				=> 'Requestmethode',
	'RECAPTCHA_V3_METHOD_EXPLAIN'		=> 'De methode die gebruikt moet worden om het request te verifieren.<br>Niet ingeschakelde opties op jouw domein worden niet weergegeven.',
	'RECAPTCHA_V3_METHOD_CURL'			=> 'cURL',
	'RECAPTCHA_V3_METHOD_POST'			=> 'POST',
	'RECAPTCHA_V3_METHOD_SOCKET'		=> 'Socket',

	'RECAPTCHA_V3_THRESHOLD_DEFAULT'			=> 'Standaard maximumscore',
	'RECAPTCHA_V3_THRESHOLD_DEFAULT_EXPLAIN'	=> 'Wordt gebruikt wanneer andere opties niet beschikbaar zijn.',
	'RECAPTCHA_V3_THRESHOLD_LOGIN'				=> 'Login maximumscore',
	'RECAPTCHA_V3_THRESHOLD_POST'				=> 'Berichten maximumscore',
	'RECAPTCHA_V3_THRESHOLD_REGISTER'			=> 'Registratie maximumscore',
	'RECAPTCHA_V3_THRESHOLD_REPORT'				=> 'Rapporteren maximumscore',
	'RECAPTCHA_V3_THRESHOLDS'					=> 'Maximumscores',
	'RECAPTCHA_V3_THRESHOLDS_EXPLAIN'			=> 'reCAPTCHA v3 geeft een score weer (<samp>1.0</samp> is zeer waarschijnlijk een normale interactie, <samp>0.0</samp> is zeer waarschijnlijk een bot). Hier kan je de maximumscore voor elke actie instellen',
	
	'EMPTY_RECAPTCHA_V3_REQUEST_METHOD'			=> 'reCAPTCHA v3 verplicht je om te weten welke manier van verifieren je wilt gebruiken'
));
