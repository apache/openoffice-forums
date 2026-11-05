<?php
/**
*
* plupload [Japanese]
*
* @package language
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) 2010-2013 Moxiecode Systems AB
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
	'PLUPLOAD_ADD_FILES'		=> 'ファイルを追加',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'アップロードキューにファイルを追加し、開始ボタンをクリックしてください。',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s はキューにすでに追加されています',
	'PLUPLOAD_CLOSE'		=> '閉じる',
	'PLUPLOAD_DRAG'			=> 'ここにファイルをドラッグしてください',
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'ファイル複製エラー',
	'PLUPLOAD_DRAG_TEXTAREA'	=> 'メッセージボックス内にドラッグ＆ドロップしてファイルを追加することもできます',
	'PLUPLOAD_ERR_INPUT'		=> 'ファイルの読み込みに失敗しました',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'アップロード済みファイルの移動に失敗しました',
	'PLUPLOAD_ERR_OUTPUT'		=> 'ファイルオープンに失敗しました',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'ファイルが大きすぎます:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'ファイルカウントエラー',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> '不明なファイル拡張子です:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> '使用可能なメモリの不足により強制終了しました',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'アップロードしたURLが間違っているか、あるいは存在していません',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'ファイル拡張子エラー',
	'PLUPLOAD_FILE'			=> 'ファイル: %s',
	'PLUPLOAD_FILE_DETAILS'		=> 'ファイル: %s, サイズ: %d, 最大ファイルサイズ: %d',
	'PLUPLOAD_FILENAME'		=> 'ファイル名',
	'PLUPLOAD_FILES_QUEUED'		=> '%d ファイルが待機状態です',
	'PLUPLOAD_GENERIC_ERROR'	=> '一般的なエラー',
	'PLUPLOAD_HTTP_ERROR'		=> 'HTTP エラー',
	'PLUPLOAD_IMAGE_FORMAT'		=> '画像フォーマットが間違っているか、あるいはサポートされていません。',
	'PLUPLOAD_INIT_ERROR'		=> 'Init エラー',
	'PLUPLOAD_IO_ERROR'		=> 'IO エラー',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'N/A',
	'PLUPLOAD_SECURITY_ERROR'	=> 'セキュリティエラー',
	'PLUPLOAD_SELECT_FILES'		=> 'ファイルを選択',
	'PLUPLOAD_SIZE'			=> 'サイズ',
	'PLUPLOAD_SIZE_ERROR'		=> 'ファイルサイズエラー',
	'PLUPLOAD_STATUS'		=> 'ステータス',
	'PLUPLOAD_START_UPLOAD'		=> 'アップロードを開始する',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'アップロードキューを開始する',
	'PLUPLOAD_STOP_UPLOAD'		=> 'アップロードを中止する',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> '現在のアップロードを中止する',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> ' %d/%d ファイルをアップロードしました',
));
