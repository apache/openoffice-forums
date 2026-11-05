<?php
/**
*
* recaptcha [Japanese]
*
* @package language
*
* This file is part of the phpBB Forum Software package.
*
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
	'RECAPTCHA_LANG'				=> 'ja',

	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha v2',
	'CAPTCHA_RECAPTCHA_V3'			=> 'reCaptcha v3',

	'RECAPTCHA_INCORRECT'				=> '入力した 認証コード が間違っています',
	'RECAPTCHA_NOSCRIPT'				=> '問題を読み込むために JavaScript を有効にしてください',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'reCaptcha を利用するには <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a> でアカウントを作成する必要があります',
	'RECAPTCHA_INVISIBLE'				=> 'このCAPTCHAは実際には見えません。動作を確認するには、このページの右下に小さなアイコンが表示されるはずです。',
	'RECAPTCHA_V3_LOGIN_ERROR_ATTEMPTS'	=> '許可されている最大のログイン試行回数を超えています。<br>ユーザー名とパスワードに加えて、不可視の reCAPTCHA v3 がセッションの認証に使用されます。',

	'RECAPTCHA_PUBLIC'				=> 'サイトキー',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'サイト reCAPTCHA キー は <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a> から入手できます。reCAPTCHA v2 &gt; Invisible reCAPTCHA バッジタイプを使用してください。',
	'RECAPTCHA_V3_PUBLIC_EXPLAIN'	=> 'サイト reCAPTCHA キー は <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a> から入手できます。reCAPTCHA v3 を使用してください。',
	'RECAPTCHA_PRIVATE'				=> '非公開キー',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> '非公開 reCAPTCHA キーは <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a> から入手できます。reCAPTCHA v2 &gt; Invisible reCAPTCHA バッジタイプを使用してください。',
	'RECAPTCHA_V3_PRIVATE_EXPLAIN'	=> '非公開 reCAPTCHA キーは <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a> から入手できます。reCAPTCHA v3 を使用してください。',

	'RECAPTCHA_V3_DOMAIN'				=> 'リクエストドメイン',
	'RECAPTCHA_V3_DOMAIN_EXPLAIN'		=> 'スクリプトを取得するドメインと、リクエストを検証する際に使用するドメインを指定します。<br><samp>google.com</samp>にアクセスできない場合は、<samp>recaptcha.net</samp>を使用してください。',

	'RECAPTCHA_V3_METHOD'				=> 'リクエストメソッド',
	'RECAPTCHA_V3_METHOD_EXPLAIN'		=> 'リクエストを検証する際に使用するメソッド。<br>無効化されたオプションは、設定内では使用できません。',
	'RECAPTCHA_V3_METHOD_CURL'			=> 'cURL',
	'RECAPTCHA_V3_METHOD_POST'			=> 'POST',
	'RECAPTCHA_V3_METHOD_SOCKET'		=> 'Socket',

	'RECAPTCHA_V3_THRESHOLD_DEFAULT'			=> 'デフォルトのしきい値',
	'RECAPTCHA_V3_THRESHOLD_DEFAULT_EXPLAIN'	=> '他のアクションが適用されない場合に使用されます',
	'RECAPTCHA_V3_THRESHOLD_LOGIN'				=> 'ログインしきい値',
	'RECAPTCHA_V3_THRESHOLD_POST'				=> '投稿しきい値',
	'RECAPTCHA_V3_THRESHOLD_REGISTER'			=> '登録しきい値',
	'RECAPTCHA_V3_THRESHOLD_REPORT'				=> 'レポートしきい値',
	'RECAPTCHA_V3_THRESHOLDS'					=> 'しきい値',
	'RECAPTCHA_V3_THRESHOLDS_EXPLAIN'			=> 'reCAPTCHA v3 はスコアを返します（<samp>1.0</samp>は良いインタラクションである可能性が高く、<samp>0.0</samp>はボットである可能性が高いです）。ここではアクションごとの最小スコアを設定することができます。',
	'EMPTY_RECAPTCHA_V3_REQUEST_METHOD'			=> 'reCAPTCHA v3では、リクエストを検証する際に、どの利用可能なメソッドを使用するかを知る必要があります。',
]);
