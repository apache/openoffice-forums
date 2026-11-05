<?php
/**
*
* This file is part of the phpBB Forum Software package.
* @正體中文化 竹貓星球 <http://phpbb-tw.net/phpbb/>
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
	'CONFIG_NOT_EXIST'					=> '基本組態「%s」不存在。',

	'GROUP_NOT_EXIST'					=> '群組「%s」不存在。',

	'MIGRATION_APPLY_DEPENDENCIES'		=> '執行繼承的組件 %s 找不到繼承對象',
	'MIGRATION_DATA_DONE'				=> '已安裝的資料：%1$s；耗時：%2$.2f 秒',
	'MIGRATION_DATA_IN_PROGRESS'		=> '安裝中的資料：%1$s；耗時：%2$.2f 秒',
	'MIGRATION_DATA_RUNNING'			=> '安裝中的資料：%s',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'Migration 已經有效安裝（跳過）：%s',
	'MIGRATION_EXCEPTION_ERROR'			=> '在請求執行期間發生異常。過程中所有異動我們已經儘量地還原，建議您再次檢查討論區是否有錯誤。',
	'MIGRATION_NOT_FULFILLABLE'			=> '因為缺少 Migration「%2%s」，無法執行 Migration「%1$s」。',
	'MIGRATION_NOT_INSTALLED'			=> '「%s」Migration 未安裝。',
	'MIGRATION_NOT_VALID'				=> '「%s」是無效的 Migration。',
	'MIGRATION_SCHEMA_DONE'				=> '已安裝的資料庫結構：%1$s；耗時：%2$.2f 秒',
	'MIGRATION_SCHEMA_IN_PROGRESS'		=> '安裝中的資料庫結構：%1$s；耗時：%2$.2f 秒',
	'MIGRATION_SCHEMA_RUNNING'			=> '安裝中的資料庫結構：%s。',

	'MIGRATION_REVERT_DATA_DONE'		=> '已還原的資料：%1$s；耗時：%2$.2f 秒',
	'MIGRATION_REVERT_DATA_IN_PROGRESS'	=> '還原中的資料：%1$s；耗時：%2$.2f 秒',
	'MIGRATION_REVERT_DATA_RUNNING'		=> '還原中的資料：%s。',
	'MIGRATION_REVERT_SCHEMA_DONE'		=> '已還原的資料庫結構：%1$s；耗時：%2$.2f 秒',
	'MIGRATION_REVERT_SCHEMA_IN_PROGRESS'	=> '還原中的資料庫結構：%1$s；耗時：%2$.2f 秒',
	'MIGRATION_REVERT_SCHEMA_RUNNING'	=> '還原中的資料庫結構：%s。',

	'MIGRATION_INVALID_DATA_MISSING_CONDITION'		=> '無效的 Migration。if 語句缺少條件。',
	'MIGRATION_INVALID_DATA_MISSING_STEP'			=> '無效的 Migration。if 語句缺少一個 Migration 步驟的有效調用。',
	'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE'	=> '無效的 Migration。自定義的調用函數不能調用。',
	'MIGRATION_INVALID_DATA_UNKNOWN_TYPE'			=> '無效的 Migration。遇到一個未知的 Migration 工具類型。',
	'MIGRATION_INVALID_DATA_UNDEFINED_TOOL'			=> '無效的 Migration。遇到一個未定義的 Migration 工具。',
	'MIGRATION_INVALID_DATA_UNDEFINED_METHOD'		=> '無效的 Migration。遇到一個未定義的 Migration 工具方法。',

	'MODULE_ERROR'						=> '建立模組 %s 時發生錯誤',
	'MODULE_EXISTS'						=> '模組已存在：%s',
	'MODULE_EXIST_MULTIPLE'				=> '具有給定父模組語言名稱的幾個模組已存在：%s。嘗試使用前/後鍵來確定模組位置。',
	'MODULE_INFO_FILE_NOT_EXIST'		=> '遺失必要的模組資訊檔案：%2$s',
	'MODULE_NOT_EXIST'					=> '必要的模組不存在：%s',

	'PARENT_MODULE_FIND_ERROR'			=> '無法確定父模組識別碼：%s',
	'PERMISSION_NOT_EXIST'				=> '權限設定「%s」不存在。',

	'ROLE_ASSIGNED_NOT_EXIST'			=> '指派給群組「%1$s」的權限角色意外地不存在。角色 ID「%2$s」',
	'ROLE_NOT_EXIST'					=> '權限角色「%s」不存在。',
));
