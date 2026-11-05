<?php
/**
*
* acp_styles [Japanese]
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
	'ACP_STYLES_EXPLAIN'					=> 'ここでは掲示板で使用可能なスタイルの管理を行うことができます。<br>“<strong>prosilver</strong>”スタイルは、phpBBのデフォルトの親スタイルであるため、アンインストールできないことに注意してください。',

	'CANNOT_BE_INSTALLED'					=> 'インストール出来ません',
	'CONFIRM_UNINSTALL_STYLES'		=> '選択したスタイルをアンインストールしてもよろしいですか？',
	'COPYRIGHT'										=> '著作権',

	'DEACTIVATE_DEFAULT'					=> 'デフォルトスタイルを無効化する事はできません',
	'DELETE_FROM_FS'							=> 'ファイルの削除',
	'DELETE_STYLE_FILES_FAILED'		=> 'スタイル "%s" のファイル削除にエラーが発生しました',
	'DELETE_STYLE_FILES_SUCCESS'	=> 'スタイル "%s" のファイルを削除しました',
	'DETAILS'											=> '詳細データ',

	'INHERITING_FROM'							=> '次から継承',
	'INSTALL_STYLE'								=> 'スタイルのインストール',
	'INSTALL_STYLES'							=> 'スタイルのインストール',
	'INSTALL_STYLES_EXPLAIN'			=> 'こちらでは新規スタイルをインストールできます。<br>もし下記の一覧からスタイルを指定できない場合は、スタイルがすでにインストール済みかどうか確認してください。インストールされていない場合は、正しくアップロードされているかどうか確認してください。',
	'INVALID_STYLE_ID'						=> '不明なスタイル ID です',

	'NO_MATCHING_STYLES_FOUND'		=> '要求条件に合ったスタイルはありません',
	'NO_UNINSTALLED_STYLE'				=> 'インストールが可能なスタイルはありません',

	'PURGED_CACHE'								=> 'キャッシュは消去されました',

	'REQUIRES_STYLE'							=> 'このスタイルはスタイル "%s" がインストールされている必要があります。',

	'STYLE_ACTIVATE'							=> '有効にする',
	'STYLE_ACTIVE'								=> '有効にする',
	'STYLE_DEACTIVATE'						=> '無効にする',
	'STYLE_DEFAULT'								=> 'デフォルトスタイルに指定する',
	'STYLE_DEFAULT_CHANGE_INACTIVE'		=> 'デフォルトスタイルに設定するには、スタイルを有効にする必要があります。',
	'STYLE_ERR_INVALID_PARENT'				=> '不明な親スタイルです',
	'STYLE_ERR_NAME_EXIST'						=> 'その名前のスタイルは既に存在しています',
	'STYLE_ERR_STYLE_NAME'						=> 'スタイル名を入力する必要があります。',
	'STYLE_INSTALLED'									=> 'スタイル "%s" がインストールされました',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> 'インストール済みのスタイル一覧に戻る',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> 'さらにスタイルをインストールする',
	'STYLE_NAME'										=> 'スタイル名',
	'STYLE_NAME_RESERVED'						=> 'スタイル "%s" はスタイル名がすでに使われているためインストールできません。',
	'STYLE_NOT_INSTALLED'						=> 'スタイル "%s" はインストールされていません',
	'STYLE_PATH'										=> 'スタイルのパス',
	'STYLE_UNINSTALL'								=> 'アンインストール',
	'STYLE_UNINSTALL_DEPENDENT'			=> 'スタイル "%s" は1つ以上の子スタイルを持つためにアンインストールできません。',
	'STYLE_UNINSTALLED'							=> 'スタイル "%s" はアンインストールされました',
	'STYLE_PHPBB_VERSION'						=> 'phpBB バージョン',
	'STYLE_USED_BY'									=> '使用ユーザー数 （ボット含む）',
	'STYLE_VERSION'									=> 'バージョン',

	'UNINSTALL_PROSILVER'						=> 'スタイル “prosilver” はアンインストールできません',
	'UNINSTALL_DEFAULT'							=> 'デフォルトに設定されているスタイルはアンインストールできません',

	'BROWSE_STYLES_DATABASE'				=> 'Styles database を見る',
]);
