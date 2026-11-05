<?php
/**
 *
 * VigLink extension for the phpBB Forum Software package.
 *
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
	'ACP_VIGLINK_SETTINGS_EXPLAIN'	=> 'VigLink は、フォーラムのユーザーが投稿したリンクを、ユーザーエクスペリエンスを変更することなく個別に収益化するサードパーティのサービスです。ユーザーが商品やサービスへのアウトバウンドリンクをクリックして何かを購入すると、販売者は VigLink にコミッションを支払い、その一部が phpBB プロジェクトに寄付されます。VigLink を有効にして収益を phpBB プロジェクトに寄付することを選択することで、あなたは私たちのオープンソース組織を支援し、私たちの継続的な財務上のセキュリティを確保しています。',
	'ACP_VIGLINK_SETTINGS_CHANGE'	=> 'これらの設定は “<a href="%1$s">VigLink 設定</a>” パネルでいつでも変更できます。',
	'ACP_VIGLINK_SUPPORT_EXPLAIN'	=> '送信ボタンをクリックして下の希望オプションを送信すると、このページにリダイレクトされなくなります。',
	'ACP_VIGLINK_ENABLE'			=> 'VigLink を有効にする',
	'ACP_VIGLINK_ENABLE_EXPLAIN'	=> 'VigLink サービスの使用を有効にする',
	'ACP_VIGLINK_EARNINGS'			=> 'あなたの収入を請求する（任意）',
	'ACP_VIGLINK_EARNINGS_EXPLAIN'	=> 'VigLink Convert アカウントにサインアップすることであなたは自身の収入を請求できます。',
	'ACP_VIGLINK_DISABLED_PHPBB'	=> 'phpBB は VigLink サービスの使用を許可していません',
	'ACP_VIGLINK_CLAIM'				=> '収入を請求する',
	'ACP_VIGLINK_CLAIM_EXPLAIN'		=> 'あなたは、phpBB プロジェクトに収入を寄付する代わりに、あなたのフォーラムで VigLink マネタイズリンクから得たフォーラムの収入を請求できます。アカウント設定を管理するには、“アカウントの変換”をクリックして“VigLink Convert”アカウントにサインアップします。',
	'ACP_VIGLINK_CONVERT_ACCOUNT'	=> 'アカウントの変換',
	'ACP_VIGLINK_NO_CONVERT_LINK'	=> 'VigLink 変換アカウントのリンクを取得できませんでした。',
));
