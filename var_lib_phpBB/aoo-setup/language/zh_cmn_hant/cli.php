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
	'CLI_APCU_CACHE_NOTICE'				=> '必須經由管理員控制台清除 APCu 快取。',

	'CLI_CONFIG_CANNOT_CACHED'			=> '假如這個組態會被頻繁地變更，請加上這個選項。',
	'CLI_CONFIG_CURRENT'				=> '目前組態的值，請使用 0 或 1 來表示布林值。',
	'CLI_CONFIG_DELETE_SUCCESS'			=> '成功刪除組態 %s 。',
	'CLI_CONFIG_NEW'					=> '新的組態值，請使用 0 或 1 來表示布林值。',
	'CLI_CONFIG_NOT_EXISTS'				=> '組態 %s 不存在',
	'CLI_CONFIG_OPTION_NAME'			=> '組態名稱',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> '假如在輸出組態的值時，結尾不要輸出斷行字元，請加上這個選項。',
	'CLI_CONFIG_INCREMENT_BY'			=> '遞增量',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> '遞增組態 %s 成功',
	'CLI_CONFIG_SET_FAILURE'			=> '無法設定組態 %s',
	'CLI_CONFIG_SET_SUCCESS'			=> '設定組態 %s 成功',

	'CLI_DESCRIPTION_CRON_LIST'					=> '列出所有排程工作。',
	'CLI_DESCRIPTION_CRON_RUN'					=> '執行所有已準備的排程任務。',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> '要執行的任務名稱',
	'CLI_DESCRIPTION_DB_LIST'					=> '列出所有已安裝和可用的 Migrations。',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> '透過 Migrations 來更新資料庫。',
	'CLI_DESCRIPTION_DB_REVERT'					=> '還原 Migration。',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> '刪除所有組態選項',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> '停用指定的擴充功能。',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> '啟用指定的擴充功能。',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> '搜尋未被繼承的資料庫變更組件。',
	'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'		=> '修復版面和模組的樹狀結構。',
	'CLI_DESCRIPTION_GET_CONFIG'				=> '取得一個組態選項的值',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> '遞增一個組態選項的值',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> '所出所有在資料庫及檔案系統中的擴充功能。',

	'CLI_DESCRIPTION_OPTION_ENV'				=> '環境名稱。',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> '在安全模式中執行（不使用擴充功能）。',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> '開啟命令列模式。',

	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> '清除指定的擴充功能。',

	'CLI_DESCRIPTION_REPARSER_LIST'						=> '列出可以重新解析的文字類型。',
	'CLI_DESCRIPTION_REPARSER_AVAILABLE'				=> '可用的重新解析：',
	'CLI_DESCRIPTION_REPARSER_REPARSE'					=> '用目前的 text_formatter 服務重新解析已儲存的文字。',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'			=> '重新解析文字類型。留白以重新解析所有內容。',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> '不保存任何更改；只是列印會發生什麼',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> '要處理的最低記錄 ID',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> '要處理的最高記錄 ID',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> '一次處理的記錄之大致數量',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> '從上次執行停止的位置開始重新解析',

	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> '只在目前的組態值等於舊的組態值時才設定組態的新值',
	'CLI_DESCRIPTION_SET_CONFIG'				=> '設定一個組態的值',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'					=> '刪除所有存在的縮圖。',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'				=> '生成所有丟失的縮圖。',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'				=> '重新建立所有縮圖。',

	'CLI_DESCRIPTION_UPDATE_CHECK'					=> '檢查討論區是否是最新的。',
	'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'		=> '要檢查的擴充功能名稱（如果全部，請檢查所有擴充功能）',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'		=> '使用快取運行檢查命令。',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY'	=> '運行命令選擇只檢查穩定版本或不穩定版本。',

	'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT'		=> '使用 bcrypt 更新過時的密碼雜湊值。',

	'CLI_ERROR_INVALID_STABILITY' => '「%s」需要設定為「穩定」或「不穩定」。',

	'CLI_DESCRIPTION_USER_ACTIVATE'				=> '啟用（或停用）會員帳號。',
	'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'	=> '要啟用帳號的會員名稱。',
	'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'	=> '停用會員的帳號',
	'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'		=> '會員已啟用。',
	'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'	=> '會員已停用。',
	'CLI_DESCRIPTION_USER_ADD'					=> '增加新會員。',
	'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'	=> '新會員的會員名稱',
	'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'	=> '新會員的密碼',
	'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'		=> '新會員的電子郵件位址',
	'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'	=> '向新會員發送帳號啟用電子郵件（預設情況下不發送）',
	'CLI_DESCRIPTION_USER_DELETE'				=> '刪除會員的帳號。',
	'CLI_DESCRIPTION_USER_DELETE_USERNAME'		=> '要刪除帳號的會員名稱',
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'	=> '刪除會員的所有文章。沒有此選項，會員的文章將被保留。',
	'CLI_DESCRIPTION_USER_RECLEAN'				=> '重新清理會員名稱。',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> '無法停用擴充功能 %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> '停用擴充功能 %s 成功',
	'CLI_EXTENSION_DISABLED'			=> '擴充功能 %s 未啟用',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> '無法啟用擴充功能 %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> '啟用擴充功能 %s 成功',
	'CLI_EXTENSION_ENABLED'				=> '擴充功能 %s 已啟用',
	'CLI_EXTENSION_NOT_EXIST'			=> '擴充功能 %s 不存在',
	'CLI_EXTENSION_NAME'				=> '擴充功能名稱',
	'CLI_EXTENSION_PURGE_FAILURE'		=> '無法清除擴充功能 %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> '清除擴充功能 %s 成功',
	'CLI_EXTENSION_UPDATE_FAILURE'		=> '無法更新 %s 擴充功能',
	'CLI_EXTENSION_UPDATE_SUCCESS'		=> '成功更新 %s 擴充功能',
	'CLI_EXTENSION_NOT_FOUND'			=> '沒有找到任何擴充功能。',
	'CLI_EXTENSION_NOT_ENABLEABLE'		=> '擴充功能 %s 不可用。',
	'CLI_EXTENSIONS_AVAILABLE'			=> '可安裝',
	'CLI_EXTENSIONS_DISABLED'			=> '已停用',
	'CLI_EXTENSIONS_ENABLED'			=> '已啟用',

	'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'		=> '成功修復版面和模組的樹狀結構。',
	'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'		=> '成功使用 bcrypt 更新過時的密碼雜湊值。',

	'CLI_MIGRATION_NAME'					=> 'Migration 名稱，包括名稱集（使用正斜線而不是反斜線來避免問題）。',
	'CLI_MIGRATIONS_AVAILABLE'				=> '可用的 Migrations',
	'CLI_MIGRATIONS_INSTALLED'				=> '已安裝 Migrations',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'		    => '只顯示可用的 Migrations',
	'CLI_MIGRATIONS_EMPTY'                  => '沒有 Migrations.',

	'CLI_REPARSER_REPARSE_REPARSING'		=> '重新解析 %1$s（範圍 %2$d..%3$d）',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> '重新解析 %s...',
	'CLI_REPARSER_REPARSE_SUCCESS'			=> '重新解析成功結束',

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'		=> '%1$s（%2$s）已刪除。',
	'CLI_THUMBNAIL_DELETING'	=> '正在刪除縮圖',
	'CLI_THUMBNAIL_SKIPPED'		=> '%1$s（%2$s）已跳過。',
	'CLI_THUMBNAIL_GENERATED'	=> '%1$s（%2$s）已生成。',
	'CLI_THUMBNAIL_GENERATING'	=> '正在生成縮圖',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> '所有縮圖已生成。',
	'CLI_THUMBNAIL_DELETING_DONE'	=> '所有縮圖已刪除。',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> '沒有要生成的縮圖。',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> '沒有要刪除的縮圖。',

	'CLI_USER_ADD_SUCCESS'		=> '已成功增加會員：%s。',
	'CLI_USER_DELETE_CONFIRM'	=> '您確定要刪除會員「%s」嗎？[是/否]',
	'CLI_USER_RECLEAN_START'	=> '正在重新清理會員名稱',
	'CLI_USER_RECLEAN_DONE'		=> [
		0	=> '重新清理完成。沒有會員名稱需要被清理。',
		1	=> '重新清理完成。%d 個會員名稱已清理。',
	],
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . '（可選）您可以指定 cron 任務名稱以只運行指定的 cron 任務。',
	'CLI_HELP_USER_ACTIVATE'	=> '啟用或停用會員帳號，使用<info>--deactivate（停用）</info>選項。
可選擇向會員發送啟用電子郵件，使用<info>--send-email（發送電子郵件）</info>選項。',
	'CLI_HELP_USER_ADD'			=> '這<info>%command.name%</info>命令可增加一個新會員：
如果此命令在沒有選項的情況下運行，將提示您輸入它們。
可選擇向新會員發送電子郵件，使用<info>--send-email（發送電子郵件）</info>選項。',
	'CLI_HELP_USER_RECLEAN'		=> '重新清理會員名稱將檢查所有儲存的會員名稱，並確保也儲存乾淨的版本。已清裡的會員名稱是不區分大小寫的形式，NFC 標準化並轉換為 ASCII。',
));
