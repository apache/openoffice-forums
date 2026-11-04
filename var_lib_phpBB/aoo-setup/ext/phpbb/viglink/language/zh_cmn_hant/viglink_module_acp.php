<?php
/**
 *
 * VigLink extension for the phpBB Forum Software package.
* @正體中文化 竹貓星球 <http://phpbb-tw.net/phpbb/>
 * @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
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
	'ACP_VIGLINK_SETTINGS'			=> 'VigLink 設定',
	'ACP_VIGLINK_SETTINGS_EXPLAIN'	=> 'VigLink 是第三方服務，離散地從您的討論區的用戶發布的連結獲利，而不會改變用戶體驗。當用戶點擊您的產品或服務的出站連結而購買東西時，商家向 VigLink 支付佣金，其中部份金額捐贈給 phpBB。通過選擇啟用 VigLink 和捐贈收益到 phpBB，您是支持我們的開源組織，並確保我們持續的金融安全。',
	'ACP_VIGLINK_SETTINGS_CHANGE'	=> '您可以隨時在「<a href="%1$s">VigLink 設定</a>」面板改變設定。',
	'ACP_VIGLINK_SUPPORT_EXPLAIN'	=> '在下面點擊「送出」按鈕，提交您喜歡的選項之後，將不再被重新定向到此頁面。',
	'ACP_VIGLINK_ENABLE'			=> '啟用 VigLink',
	'ACP_VIGLINK_ENABLE_EXPLAIN'	=> '允許使用 VigLink 服務。',
	'ACP_VIGLINK_EARNINGS'			=> '聲明自己的收入（可選）',
	'ACP_VIGLINK_EARNINGS_EXPLAIN'  => '您可以透過註冊 VigLink 轉換帳戶聲明自己的收入。',
	'ACP_VIGLINK_DISABLED_PHPBB'	=> 'VigLink 服務已被 phpBB 禁用。',
	'ACP_VIGLINK_CLAIM'				=> '領取您的收益',
	'ACP_VIGLINK_CLAIM_EXPLAIN'		=> '您可以透過 VigLink 獲利連結聲明您的討論區的收入，而不是將收入捐給 phpBB。要管理您的帳戶設定，請點擊「轉換帳戶」，以註冊「VigLink 轉換」帳戶。',
	'ACP_VIGLINK_CONVERT_ACCOUNT'	=> '轉換帳戶',
	'ACP_VIGLINK_NO_CONVERT_LINK'	=> 'VigLink 轉換帳戶的連結無法被回傳。',
));
