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
	'RECAPTCHA_LANG'				=> 'vi',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'Ðể sử dụng reCaptcha, bạn cần tạo một tài khoản tại <a href="http://recaptcha.net">reCaptcha.net</a>.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'Thông tin hình ảnh bạn nhập chưa chính xác',
	'RECAPTCHA_NOSCRIPT'			=> 'Please enable JavaScript in your browser to load the challenge.',

	'RECAPTCHA_PUBLIC'				=> 'Mã reCaptcha công cộng',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Mã reCaptcha công cộng của bạn. Mã này có thể đăng ký tại trang web <a href="http://recaptcha.net">reCaptcha.net</a>.',
	'RECAPTCHA_PRIVATE'				=> 'Mã reCaptcha bí mật',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Mã reCaptcha bí mật của bạn. Mã này có thể đăng ký tại trang web <a href="http://recaptcha.net">reCaptcha.net</a>.',

	'RECAPTCHA_EXPLAIN'				=> 'Để chắc rằng bạn không phải là các máy đăng ký tự động, cảm phiền bạn nhập vào hai chữ nhìn thấy vào trong ô bên duới.',
));
