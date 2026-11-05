<?php
/**
*
* This file is part of the phpBB Forum Software package.
* @简体中文语言　David Yin <https://www.phpbbchinese.com/>
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
	'RECAPTCHA_LANG'				=> 'zh-CN',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha v2',
	'CAPTCHA_RECAPTCHA_V3'			=> 'reCaptcha v3',
	'RECAPTCHA_INCORRECT'			=> '您的答案不正确',
	'RECAPTCHA_NOSCRIPT'			=> '请在浏览器中启用 JavaScript 再载入验证问题。',
	
	'RECAPTCHA_NOT_AVAILABLE'		=> '要使用 reCaptcha，您必须先在 <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a> 上建立一个账号。',
	'RECAPTCHA_INVISIBLE'			=> '此 CAPTCHA 实际工作时是不可见的。 为了验证它能正常工作，一个小图标会显示在当前页面的右下角。',
	'RECAPTCHA_V3_LOGIN_ERROR_ATTEMPTS'	=> '您已经超过了允许的最大登录尝试次数。<br>除了您的用户名和密码之外，不可见的reCAPTCHA v3将用于验证您的会话。',
 

	'RECAPTCHA_PUBLIC'				=> 'Site key',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> '您的 reCaptcha 公钥。公钥可以从 <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a> 上获得。 选择使用 reCAPTCHA v2 &gt; Invisible reCAPTCHA badge 类型。',
	'RECAPTCHA_V3_PUBLIC_EXPLAIN'	=> '您的 reCaptcha 公钥。公钥可以从 <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a> 上获得。 选择使用 reCAPTCHA v3。',
 	
	'RECAPTCHA_PRIVATE'				=> 'Secret Key',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> '您的 reCaptcha 密钥。密钥可以从 <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a> 上获得，请使用 reCAPTCHA v2 &gt; Invisible reCAPTCHA badge 类型。',
	'RECAPTCHA_V3_PRIVATE_EXPLAIN'	=> '您的 reCaptcha 密钥。密钥可以从 <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a> 上获得，请使用 reCAPTCHA v3。',

	'RECAPTCHA_V3_DOMAIN'				=> '工作域名',
	'RECAPTCHA_V3_DOMAIN_EXPLAIN'		=> '引入 reCaptcha JS 文件以及验证时所访问的域名，当 <samp>google.com</samp> 被墙的时候，可以使用 <samp>recaptcha.net</samp> 替换之。',

	'RECAPTCHA_V3_METHOD'				=> '请求方法',
	'RECAPTCHA_V3_METHOD_EXPLAIN'		=> '验证请求时所用的方法。<br>在您的设置中，禁用的选项不可用。',
	'RECAPTCHA_V3_METHOD_CURL'			=> 'cURL',
	'RECAPTCHA_V3_METHOD_POST'			=> 'POST',
	'RECAPTCHA_V3_METHOD_SOCKET'		=> 'Socket',

	'RECAPTCHA_V3_THRESHOLD_DEFAULT'			=> '默认阈值',
	'RECAPTCHA_V3_THRESHOLD_DEFAULT_EXPLAIN'	=> '当其他操作都不适用时使用。',
	'RECAPTCHA_V3_THRESHOLD_LOGIN'				=> '登录 阈值',
	'RECAPTCHA_V3_THRESHOLD_POST'				=> '发帖 阈值',
	'RECAPTCHA_V3_THRESHOLD_REGISTER'			=> '注册用户 阈值',
	'RECAPTCHA_V3_THRESHOLD_REPORT'				=> '举报 阈值',
	'RECAPTCHA_V3_THRESHOLDS'					=> '阈值',
	'RECAPTCHA_V3_THRESHOLDS_EXPLAIN'			=> 'reCAPTCHA v3 返回一个分数值 (<samp>1.0</samp> 很可能是一个好的交互操作， <samp>0.0</samp> 非常有可能是机器人)。 此处您可以给每一个操作设置一个最低的分数值。',



	'EMPTY_RECAPTCHA_V3_REQUEST_METHOD'			=> 'reCAPTCHA v3 需用知道您在验证请求时要使用哪种可用的方法。',
]);
