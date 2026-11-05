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
* @Polish locale 2014-07-07 18:24:32 Zespół Olympus.pl $
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
	$lang = [];
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

$lang = array_merge($lang, [
	//Znajdź kod swojego języka na stronie https://developers.google.com/recaptcha/docs/language
	//Jeśli kod twojego języka nie istnieje, użyj "en" lub pozostaw puste pole.
	'RECAPTCHA_LANG'				=> 'pl',
	
	'CAPTCHA_RECAPTCHA'				=> 'reCAPTCHA v2',
	'CAPTCHA_RECAPTCHA_V3'			=> 'reCAPTCHA v3',
	
	'RECAPTCHA_INCORRECT'				=> 'Rozwiąż zabezpieczenie reCAPTCHA.',
	'RECAPTCHA_NOSCRIPT'				=> 'Włącz obsługę JavaScript w przeglądarce, aby korzystać z reCAPTCHA.',
	'RECAPTCHA_NOT_AVAILABLE'			=> 'Aby użyć reCAPTCHA, należy stworzyć konto na stronie <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_INVISIBLE'				=> 'Niewidzialna reCAPTCHA. Jeśli działa poprawnie, mała ikona powinna być wyświetlona w prawym, dolnym rogu tej strony.',
	'RECAPTCHA_V3_LOGIN_ERROR_ATTEMPTS'	=> 'Przekroczono limit prób logowania.<br>Teraz, aby się zalogować, należy oprócz nazwy użytkownika i hasła dodatkowo rozwiązać test reCAPTCHA v3.',

	'RECAPTCHA_PUBLIC'				=> 'Klucz witryny',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Twój klucz witryny reCAPTCHA. Klucz można otrzymać na stronie <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Wybierz reCAPTCHA v2 &gt; Invisible reCAPTCHA.',
	'RECAPTCHA_V3_PUBLIC_EXPLAIN'	=> 'Twój klucz witryny reCAPTCHA. Klucz można otrzymać na stronie <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Wybierz reCAPTCHA v3.',
	'RECAPTCHA_PRIVATE'				=> 'Prywatny klucz',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Twój klucz prywatny reCAPTCHA. Klucz można otrzymać na stronie <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Wybierz reCAPTCHA v2 &gt; Invisible reCAPTCHA.',
	'RECAPTCHA_V3_PRIVATE_EXPLAIN'	=> 'Twój klucz prywatny reCAPTCHA. Klucz można otrzymać na stronie <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Wybierz reCAPTCHA v3.',

	'RECAPTCHA_V3_DOMAIN'				=> 'Domena żądania',
	'RECAPTCHA_V3_DOMAIN_EXPLAIN'		=> 'Domena, z której zostanie pobrany skrypt, aby zweryfikować żądanie.<br>Wybierz <samp>recaptcha.net</samp>, jeśli <samp>google.com</samp> jest niedostępne.',

	'RECAPTCHA_V3_METHOD'				=> 'Metoda żądania',
	'RECAPTCHA_V3_METHOD_EXPLAIN'		=> 'Metoda używana podcas weryfikacji żądania.<br>Wyłączone opcje nie są dostępne na twojej witrynie.',
	'RECAPTCHA_V3_METHOD_CURL'			=> 'cURL',
	'RECAPTCHA_V3_METHOD_POST'			=> 'POST',
	'RECAPTCHA_V3_METHOD_SOCKET'		=> 'Socket',

	'RECAPTCHA_V3_THRESHOLD_DEFAULT'			=> 'Domyślny próg',
	'RECAPTCHA_V3_THRESHOLD_DEFAULT_EXPLAIN'	=> 'Użyj, gdy inne opcje nie mają zastosowania.',
	'RECAPTCHA_V3_THRESHOLD_LOGIN'				=> 'Próg logowania',
	'RECAPTCHA_V3_THRESHOLD_POST'				=> 'Próg publikacji',
	'RECAPTCHA_V3_THRESHOLD_REGISTER'			=> 'Próg rejestracji',
	'RECAPTCHA_V3_THRESHOLD_REPORT'				=> 'Próg raportowania',
	'RECAPTCHA_V3_THRESHOLDS'					=> 'Próg',
	'RECAPTCHA_V3_THRESHOLDS_EXPLAIN'			=> 'reCAPTCHA v3 używa wartości progu (<samp>1.0</samp>, jeśli to użytkownik, <samp>0.0</samp> wskazuje na bota). Ustaw tutaj wartość progu.',
	'EMPTY_RECAPTCHA_V3_REQUEST_METHOD'			=> 'reCAPTCHA v3 wymaga znajomości dostępnej metody, z której skorzysta podczas weryfikacji żądania.',
]);
