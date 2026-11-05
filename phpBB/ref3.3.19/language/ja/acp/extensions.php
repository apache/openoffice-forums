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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'EXTENSION'			=> '拡張モジュール',
	'EXTENSIONS'			=> '拡張モジュール',
	'EXTENSIONS_ADMIN'		=> '拡張モジュールの管理（Extension Manager）',
	'EXTENSIONS_EXPLAIN'		=> '拡張モジュールマネージャ（Extension Manager）はあなたのphpBBの中の全ての拡張モジュールのステータスを管理し、その情報を閲覧するツールです。',
	'EXTENSION_INVALID_LIST'	=> '拡張モジュール “%s” が有効ではありません<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> '選択した拡張モジュールは利用可能ではありません。phpBBソフトウェアとPHP バージョンが動作を許可しているか検証してください。 (詳細ページを参照してください)。',
	'EXTENSION_DIR_INVALID'		=> '選択した拡張モジュールは有効でないディレクトリに構築されており、有効化できません。',
	'EXTENSION_NOT_ENABLEABLE'	=> '選択した拡張モジュールは有効化できません。モジュールの動作条件を検証してください。',
	'EXTENSION_NOT_INSTALLED'	=> '拡張モジュール %s は利用出来ません。正しくインストールされているかどうか確認してください。',

	'DETAILS'			=> '詳細',

	'EXTENSIONS_NOT_INSTALLED'	=> 'インストールされていない拡張モジュール',
	'EXTENSIONS_DISABLED'		=> '非表示の拡張モジュール',
	'EXTENSIONS_ENABLED'		=> '拡張モジュールの有効化',

	'EXTENSION_DELETE_DATA'		=> '削除',
	'EXTENSION_DISABLE'		=> '停止',
	'EXTENSION_ENABLE'		=> '有効化',

	'EXTENSION_DELETE_DATA_EXPLAIN'	=> '拡張モジュールのデータ・設定の全てを削除しますが、拡張モジュールファイルは保持されており、再度有効化できます。',
	'EXTENSION_DISABLE_EXPLAIN'	=> '拡張モジュールを停止すると、そのファイル、データ、設定自体は保持されますが、モジュールに備わった機能自体は使えなくなります。',
	'EXTENSION_ENABLE_EXPLAIN'	=> '拡張モジュールを有効化すると、掲示板上でモジュールを使えるようになります。',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'	=> '拡張モジュールのデータを削除中です。完了するまでページを移動・リフレッシュしないでください。',
	'EXTENSION_DISABLE_IN_PROGRESS'	=> '拡張モジュールを停止中です。完了するまでページを移動・リフレッシュしないでください。',
	'EXTENSION_ENABLE_IN_PROGRESS'	=> '拡張モジュールを有効化中です。完了するまでページを移動・リフレッシュしないでください。',

	'EXTENSION_DELETE_DATA_SUCCESS'		=> '拡張モジュールのデータを削除しました',
	'EXTENSION_DISABLE_SUCCESS'		=> '拡張モジュールを停止しました',
	'EXTENSION_ENABLE_SUCCESS'		=> '拡張モジュールを有効化しました',

	'EXTENSION_NAME'			=> '拡張モジュール名',
	'EXTENSION_ACTIONS'			=> 'アクション',
	'EXTENSION_OPTIONS'			=> 'オプション',
	'EXTENSION_INSTALL_HEADLINE'=> '拡張モジュールのインストール手順',
	'EXTENSION_INSTALL_EXPLAIN'	=> '<ol>
			<li>phpBBの extensions database からモジュールをダウンロードします。</li>
			<li>圧縮ファイルを解凍し、phpBB の <samp>ext/</samp> ディレクトリにアップロードします。</li>
			<li>こちらの Extensions manager でモジュールを有効化します。</li>
		</ol>',
	'EXTENSION_UPDATE_HEADLINE'	=> '拡張モジュールのアップデート手順',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>拡張モジュールを停止します</li>
			<li>拡張モジュールのファイルを削除します</li>
			<li>更新ファイルをアップロードします</li>
			<li>拡張モジュールを有効化します</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> '拡張モジュールの完全削除手順',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>拡張モジュールを停止します</li>
			<li>拡張モジュールのデータを削除します</li>
			<li>拡張モジュールのファイルを削除します</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'	=> 'モジュール“%s”に連動しているデータも削除してよろしいですか？?<br /><br />データ・設定を全て削除するとやり直しは出来ません。',
	'EXTENSION_DISABLE_CONFIRM'		=> '拡張モジュール “%s” を本当に停止してもよろしいですか？',
	'EXTENSION_ENABLE_CONFIRM'		=> '拡張モジュール “%s” を本当に有効化してもよろしいですか？',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'	=> '動作保証されていないバージョンのモジュールを使用しますか？',

	'RETURN_TO_EXTENSION_LIST'	=> '拡張モジュールリストに戻る',

	'EXT_DETAILS'			=> 'モジュールの詳細情報',
	'DISPLAY_NAME'			=> '表示名称',
	'CLEAN_NAME'			=> 'Clean Name',
	'TYPE'				=> 'タイプ',
	'DESCRIPTION'			=> '説明',
	'VERSION'			=> 'バージョン',
	'HOMEPAGE'			=> '公式サイト',
	'PATH'				=> 'File Path',
	'TIME'				=> 'リリース日',
	'LICENSE'			=> 'ライセンス',

	'REQUIREMENTS'			=> '動作条件',
	'PHPBB_VERSION'			=> '対応 phpBB バージョン',
	'PHP_VERSION'			=> 'PHP バージョン',
	'AUTHOR_INFORMATION'		=> '作成者の情報',
	'AUTHOR_NAME'			=> '作成者',
	'AUTHOR_EMAIL'			=> 'メールアドレス',
	'AUTHOR_HOMEPAGE'		=> '公式サイト',
	'AUTHOR_ROLE'			=> 'Role',

	'NOT_UP_TO_DATE'		=> '%s は更新されていません',
	'UP_TO_DATE'			=> '%s は更新されています',
	'ANNOUNCEMENT_TOPIC'		=> 'リリース告知',
	'DOWNLOAD_LATEST'		=> 'ダウンロードバージョン',
	'NO_VERSIONCHECK'		=> 'バージョン情報は提供されていません',

	'VERSIONCHECK_FORCE_UPDATE_ALL'		=> '全てのバージョンを再チェックする',
	'FORCE_UNSTABLE'			=> '非安定バージョンをチェックする',
	'EXTENSIONS_VERSION_CHECK_SETTINGS'	=> 'バージョンチェックの設定',

	'BROWSE_EXTENSIONS_DATABASE'		=> '拡張モジュールのデータベースを見る',

	'META_FIELD_NOT_SET'	=> '必要なメタフィールド %s が設定されていません',
	'META_FIELD_INVALID'	=> 'メタフィールド %s が不正です',
));
