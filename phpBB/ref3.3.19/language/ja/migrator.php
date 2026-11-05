<?php
/**
*
* migrator [Japanese]
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
	'CONFIG_NOT_EXIST'					=> '環境設定 "%s" は存在しません',

	'GROUP_NOT_EXIST'					=> 'グループ "%s" は存在しません',

	'MIGRATION_APPLY_DEPENDENCIES'		=> ' %s の Dependencies を適用します',
	'MIGRATION_DATA_DONE'				=> 'データをインストールしました: %1$s; 時間: %2$.2f 秒',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'データをインストール中: %1$s; 時間: %2$.2f 秒',
	'MIGRATION_DATA_RUNNING'			=> 'データをインストール中: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'マイグレーションは有効にインストールされています (スキップしました): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'リクエスト中に問題が生じ、例外処理が発生しました。変更は出来うる限りエラー発生前の状態に戻しましたが、エラーが発生していないか念のため掲示板をチェックしてください。',
	'MIGRATION_NOT_FULFILLABLE'			=> 'マイグレーション "%1$s" が完了していません。未完了のマイグレーション： "%2$s"',
	'MIGRATION_NOT_INSTALLED'			=> 'マイグレーション "%s" が完了しませんでした',
	'MIGRATION_NOT_VALID'				=> '%s は不明なマイグレーションです',
	'MIGRATION_SCHEMA_DONE'				=> 'スキーマのインストールを完了しました: %1$s; 時間: %2$.2f 秒',
	'MIGRATION_SCHEMA_IN_PROGRESS'			=> 'スキーマをインストール中: %1$s; 時間: %2$.2f 秒',
	'MIGRATION_SCHEMA_RUNNING'			=> 'スキーマをインストール中: %s.',

	'MIGRATION_REVERT_DATA_DONE'		=> 'データを元に戻しました: %1$s; 時間: %2$.2f 秒',
	'MIGRATION_REVERT_DATA_IN_PROGRESS'	=> 'データを元に戻しています: %1$s; 時間: %2$.2f 秒',
	'MIGRATION_REVERT_DATA_RUNNING'		=> 'データを元に戻しています: %s.',
	'MIGRATION_REVERT_SCHEMA_DONE'		=> 'スキーマを元に戻しました: %1$s; 時間: %2$.2f 秒',
	'MIGRATION_REVERT_SCHEMA_IN_PROGRESS'	=> 'スキーマを元に戻しています: %1$s; 時間: %2$.2f 秒',
	'MIGRATION_REVERT_SCHEMA_RUNNING'	=> 'スキーマを元に戻しています: %s.',

	'MIGRATION_INVALID_DATA_MISSING_CONDITION'		=> '無効なマイグレーションです。if ステートメントヘルパーが条件を取得できていません。',
	'MIGRATION_INVALID_DATA_MISSING_STEP'			=> '無効なマイグレーションです。if ステートメントヘルパーがマイグレーションステップへの有効な呼び出しを取得していません。',
	'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE'		=> '無効なマイグレーションです。カスタム呼び出し機能が呼び出されませんでした',
	'MIGRATION_INVALID_DATA_UNKNOWN_TYPE'			=> '無効なマイグレーションです。不明な移行ツールタイプに遭遇しました。',
	'MIGRATION_INVALID_DATA_UNDEFINED_TOOL'			=> '無効なマイグレーションです。未定義の移行ツールに遭遇しました',
	'MIGRATION_INVALID_DATA_UNDEFINED_METHOD'		=> '無効なマイグレーションです。未定義の移行ツールメソッドに遭遇しました。',

	'MODULE_ERROR'						=> 'モジュール作成中にエラーが発生しました: %s',
	'MODULE_EXISTS'						=> 'モジュールはすでに存在しています: %s',
	'MODULE_EXIST_MULTIPLE'				=> '親モジュールの言語名を与えるいくつかのモジュールがすでに存在しています: %s モジュール置換状況を確かめるために before/after キーを試してみてください。',
	'MODULE_INFO_FILE_NOT_EXIST'			=> '必要なモジュール情報ファイルが見つかりません: %2$s',
	'MODULE_NOT_EXIST'				=> '必要なモジュールが存在していません: %s',

	'PARENT_MODULE_FIND_ERROR'			=> '親モジュールの識別子が判定できません。: %s',
	'PERMISSION_NOT_EXIST'				=> 'パーミッション設定 "%s" が存在しません',

	'ROLE_ASSIGNED_NOT_EXIST'			=> 'グループ "%1$s" に割り当てられたパーミッションセットが存在しません。セット ID: "%2$s"',
	'ROLE_NOT_EXIST'					=> 'パーミッションセット "%s" が存在しません',
));
