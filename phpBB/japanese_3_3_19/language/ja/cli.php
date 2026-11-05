<?php
/**
*
* cli [Japanese]
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
	'CLI_APCU_CACHE_NOTICE'				=> 'APCu のキャッシュは、管理用コントロールパネル（ACP）から削除する必要があります。',

	'CLI_CONFIG_CANNOT_CACHED'			=> '設定オプションが頻繁に変更されて効率的にキャッシュされない場合は、このオプションを設定してください',
	'CLI_CONFIG_CURRENT'				=> '現在の設定値。ブール値を指定するには0と1を使用してください。',
	'CLI_CONFIG_DELETE_SUCCESS'			=> '設定“%s”を削除しました',
	'CLI_CONFIG_NEW'				=> '新しい設定値。ブール値を指定するには0と1を使用してください。',
	'CLI_CONFIG_NOT_EXISTS'				=> '設定“%s”が存在しません',
	'CLI_CONFIG_OPTION_NAME'			=> '設定オプションの名前',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'		=> '最後に改行を入れずに値を印刷する場合は、このオプションを設定してください',
	'CLI_CONFIG_INCREMENT_BY'			=> 'インクリメントする量',
	'CLI_CONFIG_INCREMENT_SUCCESS'			=> '設定“%s”を正常にインクリメントしました',
	'CLI_CONFIG_SET_FAILURE'			=> '設定“%s”を設定できませんでした',
	'CLI_CONFIG_SET_SUCCESS'			=> '設定“%s”を設定しました',

	'CLI_DESCRIPTION_CRON_LIST'			=> '準備完了および未実行のcronジョブのリストを印刷します',
	'CLI_DESCRIPTION_CRON_RUN'			=> 'すべての準備完了cron タスクを実行します',

	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'			=> '実行するタスクの名前',
	'CLI_DESCRIPTION_DB_LIST'				=> 'インストール済みおよび使用可能なすべてのマイグレーションを一覧表示します',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> '移行を適用してデータベースを更新します',
	'CLI_DESCRIPTION_DB_REVERT'				=> '移行を元に戻します',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> '設定オプションを削除します',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> '指定された拡張子を無効にします',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> '指定された拡張子を有効にします',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> '依存していない移行を見つけます',
	'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'			=> 'フォーラムとモジュールのツリー構造を修復します',
	'CLI_DESCRIPTION_GET_CONFIG'				=> '設定オプションの値を取得します',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> '設定オプションの整数値をインクリメントします',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'データベース内およびファイルシステム上のすべての拡張子を一覧表示します',

	'CLI_DESCRIPTION_OPTION_ENV'				=> '環境の名前',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'セーフモード（拡張機能なし）で実行してください',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'シェルを起動します',

	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> '指定された拡張子を削除します',

	'CLI_DESCRIPTION_REPARSER_LIST'				=> '再解析できるテキストの種類を一覧表示します',
	'CLI_DESCRIPTION_REPARSER_AVAILABLE'			=> '利用可能なリパーサー：',
	'CLI_DESCRIPTION_REPARSER_REPARSE'			=> '保存されているテキストを現在のtext_formatterサービスで再解析します',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'		=> '再解析するテキストの種類。すべてを再解析するには空白のままにします。',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> '変更を保存しないでください。何が起こるかを単に印刷します',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_FORCE_BBCODE'	=> 'すべての BBCode を例外なく再解析します。以前に無効化された BBCode も再処理され、有効化されて完全にレンダリングされます。',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> '処理する最小のレコードID',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> '処理する最大のレコードID',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> '一度に処理するおおよそのレコード数',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> '最後の実行が停止した場所で再解析を開始します',

	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> '古い値が現在の値と一致する場合にのみ、設定オプションの値を設定します',
	'CLI_DESCRIPTION_SET_CONFIG'				=> '設定オプションの値を設定します',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'				=> '既存のサムネイルをすべて削除します',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'				=> '見つからないサムネイルをすべて生成します',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'				=> 'すべてのサムネイルを再作成します',

	'CLI_DESCRIPTION_UPDATE_CHECK'					=> '掲示板システムが最新であるかどうかを確認してください',
	'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'		=> '確認する拡張子の名前（すべての場合は、すべての拡張子を確認します）',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'		=> 'キャッシュ付きでcheckコマンドを実行します',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY'		=> '安定版または不安定版のみをチェックするコマンドを実行します',

	'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT'		=> 'bcryptでハッシュされるように古いパスワードハッシュを更新します',

	'CLI_ERROR_INVALID_STABILITY' 			=> '"%s" を"stable"または"unstable"に設定する必要があります',

	'CLI_DESCRIPTION_USER_ACTIVATE'			=> 'ユーザーアカウントを有効化（または無効化）します',
	'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'	=> '有効化するアカウントのユーザー名',
	'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'	=> 'ユーザーのアカウントを無効にする',
	'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'		=> 'ユーザーは既に有効化されています',
	'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'	=> 'ユーザーは既に無効化されています',
	'CLI_DESCRIPTION_USER_ADD'			=> '新しいユーザーを追加します',
	'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'	=> '新しいユーザーのユーザー名',
	'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'	=> '新しいユーザーのパスワード',
	'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'		=> '新しいユーザーのメールアドレス',
	'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'	=> 'アカウント有効化メールを新しいユーザーに送信します（デフォルトでは送信されません）',
	'CLI_DESCRIPTION_USER_DELETE'			=> 'ユーザーアカウントを削除します',
	'CLI_DESCRIPTION_USER_DELETE_USERNAME'		=> '削除するユーザーのユーザー名',
	'CLI_DESCRIPTION_USER_DELETE_ID'			=> 'ユーザー ID でユーザーアカウントを削除します。',
	'CLI_DESCRIPTION_USER_DELETE_ID_OPTION_ID'	=> '削除するユーザーの ID',
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'	=> 'ユーザーによる投稿をすべて削除します。このオプションがなければ、ユーザーの投稿は保持されます。 ',
	'CLI_DESCRIPTION_USER_RECLEAN'			=> 'ユーザー名を再クリーニングします',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> '拡張機能“%s”を無効にできませんでした',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> '拡張機能“%s”を無効にしました',
	'CLI_EXTENSION_DISABLED'		=> '拡張機能“%s”は有効になっていません',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> '拡張機能“%s”を有効にできませんでした',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> '拡張機能“%s”を有効にしました',
	'CLI_EXTENSION_ENABLED'			=> '拡張機能“%s”は既に有効になっています',
	'CLI_EXTENSION_NOT_EXIST'		=> '拡張機能“%s”は存在しません',
	'CLI_EXTENSION_NAME'			=> '拡張機能名',
	'CLI_EXTENSION_PURGE_FAILURE'		=> '拡張機能“%s”を削除できませんでした',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> '拡張機能“%s”を削除しました',
	'CLI_EXTENSION_UPDATE_FAILURE'		=> '拡張機能“%s”を更新出来ませんでした',
	'CLI_EXTENSION_UPDATE_SUCCESS'		=> '拡張機能“%s”を更新しました',
	'CLI_EXTENSION_NOT_FOUND'		=> '拡張機能は見つかりませんでした',
	'CLI_EXTENSION_NOT_ENABLEABLE'		=> '拡張機能“%s”は有効化出来ません',
	'CLI_EXTENSIONS_AVAILABLE'		=> '利用可能',
	'CLI_EXTENSIONS_DISABLED'		=> '無効',
	'CLI_EXTENSIONS_ENABLED'		=> '有効',

	'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'		=> 'フォーラムとモジュールのツリー構造の修復に成功しました',
	'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'		=> '古くなったパスワードハッシュをbcryptに更新しました',

	'CLI_MIGRATION_NAME'				=> '名前空間を含むマイグレーション名（問題を回避するためにバックスラッシュの代わりにスラッシュを使用してください）',
	'CLI_MIGRATIONS_AVAILABLE'			=> '利用可能なマイグレーション',
	'CLI_MIGRATIONS_INSTALLED'			=> 'インストール済みマイグレーション',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'		    	=> '利用可能なマイグレーションのみを表示します',
	'CLI_MIGRATIONS_EMPTY'                  	=> 'マイグレーションはありません',

	'CLI_REPARSER_REPARSE_REPARSING'		=> '%1$s を再解析しています（範囲 %2$d..%3$d）',
	'CLI_REPARSER_REPARSE_REPARSING_START'		=> '%s を再解析しています ...',
	'CLI_REPARSER_REPARSE_SUCCESS'			=> '再解析は成功終了しました',

	// すべてのケースにおいて %1$s は論理的なファイル名で、%2$s はファイルシステム上の実際のファイル名です。
	// 例）big_image.png (2_a51529ae7932008cf8454a95af84cacd) を生成しました
	'CLI_THUMBNAIL_DELETED'		=> '%1$s (%2$s) を削除しました',
	'CLI_THUMBNAIL_DELETING'	=> 'サムネイルを削除しています',
	'CLI_THUMBNAIL_SKIPPED'		=> '%1$s (%2$s) をスキップしました',
	'CLI_THUMBNAIL_GENERATED'	=> '%1$s (%2$s) を生成しました',
	'CLI_THUMBNAIL_GENERATING'	=> 'サムネイルを生成中',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> 'すべてのサムネイルを再生成しました',
	'CLI_THUMBNAIL_DELETING_DONE'	=> 'すべてのサムネイルを削除しました',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> '生成するサムネイルはありません',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> '削除するサムネイルはありません',

	'CLI_USER_ADD_SUCCESS'			=> 'ユーザー“%s”を追加しました',
	'CLI_USER_DELETE_CONFIRM'		=> 'ユーザー“%s”を削除してもよろしいですか？ [y/N]',
	'CLI_USER_DELETE_ID_CONFIRM'	=> 'ユーザー ID 「%s」を本当に削除してもよろしいですか？ [y/N]',
	'CLI_USER_DELETE_ID_SUCCESS'	=> 'ユーザー ID の削除に成功しました。',
	'CLI_USER_DELETE_ID_START'		=> 'ユーザー ID でユーザーを削除しています',
	'CLI_USER_DELETE_NONE'			=> 'ユーザー ID で削除されたユーザーはいませんでした。',
	'CLI_USER_RECLEAN_START'		=> 'ユーザー名を再クリーニング中です',
	'CLI_USER_RECLEAN_DONE'		=> [
		0	=> '再クリーニングが完了しました。クリーニングが必要なユーザーはいません。',
		1	=> '再クリーニングが完了しました。ユーザー名 %d がクリーニングされました。',
	],
));

// コマンドのための追加ヘルプ
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'		=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' 任意で、指定したcronタスクのみを実行するようにcronタスク名を指定できます。',
	'CLI_HELP_USER_ACTIVATE'	=> 'ユーザーアカウントを有効にするか、 --deactivate オプションを使用してアカウントを無効にします。
任意で有効化メールをユーザーに送信するには、 --send-email オプションを使用します。 ',
	'CLI_HELP_USER_ADD'		=> '％command.name％コマンドは新しいユーザーを追加します：
このコマンドをオプションなしで実行した場合は、入力するように求められます。
任意で新しいユーザーにメールを送信するには、 --send-email オプションを使用します。',
	'CLI_HELP_USER_RECLEAN'		=> 'ユーザー名を再クリーニングすると、保存されているすべてのユーザー名がチェックされ、クリーンバージョンも確実に保存されます。整理されたユーザー名は大文字と小文字を区別しない形式で、NFCは正規化されASCIIに変換されます。',
));
