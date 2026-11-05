<?php
/**
*
* This file is part of the phpBB Forum Software package.
* @正體中文化 竹貓星球 <http://phpbb-tw.net/phpbb/>
* @copyright (c) phpBB Limited <https://www.phpbb.com>
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
	'RECAPTCHA_LANG'				=> 'zh-TW',

	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha v2',
	'CAPTCHA_RECAPTCHA_V3'			=> 'reCaptcha v3',

	'RECAPTCHA_INCORRECT'				=> '您提供的確認代碼是不正確的。',
	'RECAPTCHA_NOSCRIPT'				=> '請在瀏覽器中啟用 JavaScript 以加載挑戰。',
	'RECAPTCHA_NOT_AVAILABLE'			=> '為了使用 reCaptcha，您必須在 <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a> 建立一個帳號。',
	'RECAPTCHA_INVISIBLE'				=> '該驗證碼實際上是不可見的。為了驗證它是否有效，該頁面的右下角應該會出現一個小圖示。',
	'RECAPTCHA_V3_LOGIN_ERROR_ATTEMPTS'	=> '您已經超過了允許的最大登入嘗試次數。<br>除了您的用戶名稱和密碼之外，不可見的 reCAPTCHA v3 還將用於驗證您的 session。',

	'RECAPTCHA_PUBLIC'				=> '網站的關鍵碼',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> '您網站的 reCAPTCHA 關鍵碼。此關鍵碼可以在 <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a> 獲得。請使用 reCAPTCHA v2 &gt; 不可見的 reCAPTCHA 徽章類型。',
	'RECAPTCHA_V3_PUBLIC_EXPLAIN'	=> '您網站的 reCAPTCHA 關鍵碼。此關鍵碼可以在 <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a> 獲得。請使用 reCAPTCHA v3。',
	'RECAPTCHA_PRIVATE'				=> '私密的關鍵碼',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> '您私密的 reCAPTCHA 關鍵碼。此關鍵碼可以在 <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a> 獲得。請使用 reCAPTCHA v2 &gt; 不可見的 reCAPTCHA 徽章類型。',
	'RECAPTCHA_V3_PRIVATE_EXPLAIN'	=> '您私密的 reCAPTCHA 關鍵碼。此關鍵碼可以在 <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a> 獲得。請使用 reCAPTCHA v3。',

	'RECAPTCHA_V3_DOMAIN'				=> '請求網域',
	'RECAPTCHA_V3_DOMAIN_EXPLAIN'		=> '當驗證請求時，從中獲取腳本並使用的網域。<br>當 <samp>google.com</samp> 無法訪問時，使用 <samp>recaptcha.net</samp>。',

	'RECAPTCHA_V3_METHOD'				=> '請求方法',
	'RECAPTCHA_V3_METHOD_EXPLAIN'		=> '當驗證請求時，使用的方法。<br>禁用的選項在您的設定中是無效的。',
	'RECAPTCHA_V3_METHOD_CURL'			=> '網址',
	'RECAPTCHA_V3_METHOD_POST'			=> '文章',
	'RECAPTCHA_V3_METHOD_SOCKET'		=> '接口',

	'RECAPTCHA_V3_THRESHOLD_DEFAULT'			=> '預設門檻',
	'RECAPTCHA_V3_THRESHOLD_DEFAULT_EXPLAIN'	=> '在沒有其他動作適用時使用。',
	'RECAPTCHA_V3_THRESHOLD_LOGIN'				=> '登入門檻',
	'RECAPTCHA_V3_THRESHOLD_POST'				=> '文章門檻',
	'RECAPTCHA_V3_THRESHOLD_REGISTER'			=> '註冊門檻',
	'RECAPTCHA_V3_THRESHOLD_REPORT'				=> '檢舉門檻',
	'RECAPTCHA_V3_THRESHOLDS'					=> '門檻',
	'RECAPTCHA_V3_THRESHOLDS_EXPLAIN'			=> 'reCAPTCHA v3 返回分數（<samp>1.0</samp> 很可能是很好的互動，<samp>0.0</samp> 很可能是機器人）。在這裡，您可以設定每個動作的最低分數。',
	'EMPTY_RECAPTCHA_V3_REQUEST_METHOD'			=> 'reCAPTCHA v3 要求知道，當請求驗證時要使用哪種可用的方法。',
]);
