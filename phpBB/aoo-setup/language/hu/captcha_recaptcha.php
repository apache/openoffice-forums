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
* Magyar fordítás (c) 2007-2021 „Magyar phpBB Közösség fordítók”,
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
	// Find the language/country code on https://developers.google.com/recaptcha/docs/language
	// If no code exists for your language you can use "en" or leave the string empty
	'RECAPTCHA_LANG'				=> 'hu', // en-GB

	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha v2',
	'CAPTCHA_RECAPTCHA_V3'			=> 'reCaptcha v3',

	'RECAPTCHA_INCORRECT'			=> 'A megadott megoldás hibás.',
	'RECAPTCHA_NOSCRIPT'			=> 'A feladat betöltéséhez kérjük, engedélyezd böngésződben a JavaScript futtatását.',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'A reCaptcha használatához létre kell hoznod egy azonosítót a <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> oldalon.',
	'RECAPTCHA_INVISIBLE'			=> 'Ez a CAPTCHA nem látható. Ahhoz, hogy ellenőrizni tudd a működését, egy kis ikon jelenik meg az oldal jobb alsó sarkában.',
	'RECAPTCHA_V3_LOGIN_ERROR_ATTEMPTS'	=> 'Elérted az engedélyezett bejelentkezési kísérletek számát.<br>A felhasználóneveden és jelszavadon túl a nem látható reCAPTCHA v3 is felhasználásra kerül a munkameneted azonosításához.', //? You have exceeded the maximum number of login attempts allowed.<br>In addition to your username and password the invisible reCAPTCHA v3 will be used to authenticate your session.

	'RECAPTCHA_PUBLIC'				=> 'Oldal kulcsa',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Az oldalad reCAPTCHA kulcsa. Kulcs a <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> oldalon kérhető. Kérjük, a reCAPTCHA v2 &gt; Invisible reCAPTCHA badge típust használd.',
	'RECAPTCHA_V3_PUBLIC_EXPLAIN'	=> 'Az oldalad reCAPTCHA kulcsa. Kulcs a <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> oldalon kérhető. Kérjük, a reCAPTCHA v3 változatát használd.',
	'RECAPTCHA_PRIVATE'				=> 'Titkos kulcs',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Az oldalad titkos reCAPTCHA kulcsa. Kulcs a <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> oldalon kérhető. Kérjük, a reCAPTCHA v2 &gt; Invisible reCAPTCHA badge típust használd.',
	'RECAPTCHA_V3_PRIVATE_EXPLAIN'	=> 'Az oldalad titkos reCAPTCHA kulcsa. Kulcs a <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> oldalon kérhető. Kérjük, a reCAPTCHA v3 változatát használd.',

	'RECAPTCHA_V3_DOMAIN'				=> 'Kérés domainnév', //? Request domain
	'RECAPTCHA_V3_DOMAIN_EXPLAIN'		=> 'A domainnév, amit a reCAPTCHA script betöltéséhez és a kérés ellenőrzéséhez használ.<br>Használd a <samp>recaptcha.net</samp> címet, ha a <samp>google.com</samp> nem elérhető.', //? The domain to fetch the script from and to use when verifying the request.<br>Use <samp>recaptcha.net</samp> when <samp>google.com</samp> is not accessible.

	'RECAPTCHA_V3_METHOD'				=> 'Kérés metódusa', //? Request method
	'RECAPTCHA_V3_METHOD_EXPLAIN'		=> 'A kérés ellenőrzéséhez használt módszer.<br>A letiltott elemek nem érhetőek el.', //? The method to use when verifying the request.<br>Disabled options are not available within your setup.
	'RECAPTCHA_V3_METHOD_CURL'			=> 'cURL',
	'RECAPTCHA_V3_METHOD_POST'			=> 'POST',
	'RECAPTCHA_V3_METHOD_SOCKET'		=> 'Socket',

	'RECAPTCHA_V3_THRESHOLD_DEFAULT'			=> 'Alapértelmezett határérték', //? Default threshold
	'RECAPTCHA_V3_THRESHOLD_DEFAULT_EXPLAIN'	=> 'Abban az esetben kerül használatra, ha a többi művelet nem értelmezhető.', //? Used when none of the other actions are applicable.
	'RECAPTCHA_V3_THRESHOLD_LOGIN'				=> 'Bejelentkezési határérték', // Login threshold
	'RECAPTCHA_V3_THRESHOLD_POST'				=> 'Hozzászólási határérték', // Post threshold
	'RECAPTCHA_V3_THRESHOLD_REGISTER'			=> 'Regisztrálási határérték', // Register threshold
	'RECAPTCHA_V3_THRESHOLD_REPORT'				=> 'Jelentési határérték', // Report threshold
	'RECAPTCHA_V3_THRESHOLDS'					=> 'Határértékek',
	'RECAPTCHA_V3_THRESHOLDS_EXPLAIN'			=> 'A reCAPTCHA v3 egy pontszámot ad vissza az ellenőrzés eredményeként (<samp>1.0</samp> nagy valószínűséggel egy megfelelő interakció, míg <samp>0.0</samp> nagy valószínűséggel egy bot). Itt tudod megadni az egyes műveletek elvégzéséhez szükséges minimum pontszámot.', // reCAPTCHA v3 returns a score (<samp>1.0</samp> is very likely a good interaction, <samp>0.0</samp> is very likely a bot). Here you can set the minimum score per action.
	'EMPTY_RECAPTCHA_V3_REQUEST_METHOD'			=> 'A reCAPTCHA v3-nak tudnia kell, hogy melyik elérhető módon szeretnéd ellenőrizni a kérést.', //? reCAPTCHA v3 requires to know which available method you want to use when verifying the request.
]);
