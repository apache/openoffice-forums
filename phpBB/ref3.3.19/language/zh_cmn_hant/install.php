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

// Common installer pages
$lang = array_merge($lang, array(
	'INSTALL_PANEL'	=> '安裝面板',
	'SELECT_LANG'	=> '選擇語言',

	'STAGE_INSTALL'	=> '正在安裝 phpBB',

	// Introduction page
	'INTRODUCTION_TITLE'	=> '簡介',
	'INTRODUCTION_BODY'		=> '歡迎使用 phpBB3！<br /><br />phpBB® 是目前世界上最廣泛被使用的自由軟體討論區程式。phpBB3 是自西元 2000 年以來所開發的最新產品。與之前的版本相比，phpBB3 具有更豐富的未來性，更友善的操作界面，並擁有 phpBB Team 的完整技術支援。phpBB3 大幅提升了 phpBB2 受人歡迎的效能，而且更增加了在之前的版本沒有但普遍需要的功能。我們深切盼望 phpBB3 能夠超過您的期望。<br /><br />這個安裝系統將會帶領您正確安裝 phpBB3，或是升級到 phpBB3 最新的版本，包含完整的轉換來自不同的討論區系統資料（例如 phpBB2）。關於更多的資訊，我們建議您瀏覽 <a href="../docs/INSTALL.html">安裝手冊</a>。<br /><br />了解關於 phpBB3 的授權或是獲悉有關目前的支援程度與我們對這項產品的立場，請選擇左方功能列內各別選項。請選擇上方的選單繼續進行安裝。',

	// Support page
	'SUPPORT_TITLE'		=> '支援',
	'SUPPORT_BODY'		=> '目前所釋出的穩定版本將提供完全且免費的支援。其中包括：</p><ul><li>安裝</li><li>設定</li><li>技術的問題</li><li>在軟體中可能的 bugs 之相關問題</li><li>從候選正式版本 (RC) 到最新的穩定版本的更新</li><li>從 phpBB 2.0.x 到 phpBB3 的轉換</li><li>從其他的討論區軟體到 phpBB3 的轉換（請參訪 <a href="https://www.phpbb.com/community/viewforum.php?f=486">Convertors Forum</a>）。</li></ul><p>我們鼓勵仍在運行 phpBB3 測試版的使用者以最新的版本來取代他們的安裝。</p><h2>擴展 / 風格</h2><p>擴展的相關問題，請您發表在 <a href="https://www.phpbb.com/community/viewforum.php?f=451">Extensions Forum</a> 合適的版面。<br />風格、樣版、主題的相關問題，請您發表在 <a href="https://www.phpbb.com/community/viewforum.php?f=471">Styles Forum</a> 合適的版面。<br /><br />如果您的問題關係到某個特別的檔案，那麼請直接將它附加在發表的主題內。</p><h2>獲得支援</h2><p><a href="https://www.phpbb.com/support/">Support Section（支援部門）</a><br /><a href="https://www.phpbb.com/support/docs/en/3.3/ug/quickstart/">Quick Start Guide（快速啟動指導）</a><br /><br />為了確保您掌握最新的新聞和發佈，請關注我們的<a href="https://www.twitter.com/phpbb/"> Twitter </a>和<a href="https://www.facebook.com/phpbb/"> Facebook </a>。<br /><br />',

	// License
	'LICENSE_TITLE'		=> 'General Public License',

	// Install page
	'INSTALL_INTRO'			=> '歡迎安裝！',
	'INSTALL_INTRO_BODY'	=> '使用這個選項，應該可以在您的伺服器上安裝 phpBB。</p><p>為了繼續安裝，您需要知道您的資料庫設定。如果您不清楚這些，請聯絡您的網站空間提供者。沒有這些訊息安裝將不能繼續。您需要：</p>

	<ul>
		<li>資料庫類型 - 您將使用的資料庫。</li>
		<li>資料庫伺服器主機名稱或 DSN - 資料庫伺服器位址。（例如：您的 MySQL 就安裝在本機上，那麼填入 <strong>localhost</strong> 即可）</li>
		<li>資料庫伺服器連接埠 - 資料庫伺服器連接埠（一般情況下不需要輸入）。</li>
		<li>資料庫名稱 - 資料庫伺服器上的資料庫名稱。</li>
		<li>管理員名稱和密碼 - 用來登入上述資料庫的管理員資料。</li>
	</ul>

	<p><strong>注意：</strong> 如果您使用 SQLite，您應該在 DSN 框中輸入資料庫的完整路徑，並保持管理員名稱和密碼空白。為了安全的原因，您應該確保資料庫檔案不會存放在一個可以被公開訪問的資料夾底下。</p>

	<p>phpBB3 支援如下的資料庫：</p>
	<ul>
		<li>MySQL 4.1.3 或更高（需要 MySQLi）</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 或更高（直接訪問或通過 ODBC）</li>
		<li>MS SQL Server 2005 或更高（native）</li>
		<li>Oracle</li>
	</ul>

	<p>只有您的伺服器支援的資料庫才會被顯示。',

	'ACP_LINK'	=> '帶我去<a href="%1$s">管理員控制台</a>',

	'INSTALL_PHPBB_INSTALLED'		=> 'phpBB 已經安裝。',
	'INSTALL_PHPBB_NOT_INSTALLED'	=> 'phpBB 尚未安裝。',
));

// Requirements translation
$lang = array_merge($lang, array(
	// Filesystem requirements
	'FILE_NOT_EXISTS'						=> '檔案不存在',
	'FILE_NOT_EXISTS_EXPLAIN'				=> '要能夠安裝 phpBB，檔案 %1$s 需要存在。',
	'FILE_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> '建議檔案 %1$s 存在，以獲得更好的討論區使用者體驗。',
	'FILE_NOT_WRITABLE'						=> '檔案不可寫入',
	'FILE_NOT_WRITABLE_EXPLAIN'				=> '要能夠安裝 phpBB，檔案 %1$s 需要可寫入。',
	'FILE_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> '建議檔案 %1$s 可寫入，以獲得更好的討論區使用者體驗。',

	'DIRECTORY_NOT_EXISTS'						=> '目錄不存在',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'				=> '要能夠安裝 phpBB，目錄 %1$s 需要存在。',
	'DIRECTORY_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> '建議目錄 %1$s 以獲得更好的討論區使用者體驗。',
	'DIRECTORY_NOT_WRITABLE'					=> '目錄不可寫入',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'			=> '要能夠安裝 phpBB，目錄 %1$s 需要可寫入。',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> '建議目錄 %1$s 可寫入，以獲得更好的討論區使用者體驗。',

	// Server requirements
	'PHP_VERSION_REQD'					=> 'PHP 版本',
	'PHP_VERSION_REQD_EXPLAIN'			=> 'phpBB 需要 PHP 版本 7.1.3 或更高。',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP getimagesize() 功能是必須的',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '為了使 phpBB 正常工作，getimagesize 功能需要可用的。',
	'PCRE_UTF_SUPPORT'					=> 'PCRE UTF-8 支援',
	'PCRE_UTF_SUPPORT_EXPLAIN'			=> '如果您的 PHP 安裝沒有在 PCRE 擴充功能中使用 UTF-8 支援編譯，phpBB 將不會運行。',
	'PHP_JSON_SUPPORT'					=> 'PHP JSON 支援',
	'PHP_JSON_SUPPORT_EXPLAIN'			=> '為了使 phpBB 正常工作，PHP JSON 擴充功能需要可用的。',
	'PHP_MBSTRING_SUPPORT'				=> 'PHP mbstring 支援',
	'PHP_MBSTRING_SUPPORT_EXPLAIN'		=> '為了使 phpBB 正常工作，PHP mbstring 擴充功能需要可用的。',
	'PHP_XML_SUPPORT'					=> 'PHP XML/DOM 支援',
	'PHP_XML_SUPPORT_EXPLAIN'			=> '為了使 phpBB 正常工作，PHP XML/DOM 擴充功能需要可用的。',
	'PHP_SUPPORTED_DB'					=> '支援的資料庫',
	'PHP_SUPPORTED_DB_EXPLAIN'			=> '您必須支援至少一個在 PHP 中兼容的資料庫。如果沒有資料庫模組顯示為可用，您應該聯繫您的主機提供商，或查看相關的 PHP 安裝說明以獲取建議。',

	'RETEST_REQUIREMENTS'	=> '重新測試要求',

	'STAGE_REQUIREMENTS'	=> '檢查要求',
));

// General error messages
$lang = array_merge($lang, array(
	'INST_ERR_MISSING_DATA'		=> '您必須填完此表格的全部欄位。',

	'TIMEOUT_DETECTED_TITLE'	=> '安裝程序檢測到超時',
	'TIMEOUT_DETECTED_MESSAGE'	=> '安裝程序檢測到超時，您可以嘗試刷新頁面，這可能導致資料損壞。我們建議您增加超時設定，或嘗試使用 CLI。',
));

// Data obtaining translations
$lang = array_merge($lang, array(
	'STAGE_OBTAIN_DATA'	=> '設定安裝資料',

	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR'	=> '管理員詳細資料',

	// Form labels
	'ADMIN_CONFIG'				=> '管理員設定',
	'ADMIN_PASSWORD'			=> '管理員密碼',
	'ADMIN_PASSWORD_CONFIRM'	=> '確認管理員密碼',
	'ADMIN_PASSWORD_EXPLAIN'	=> '請輸入一個 6 到 30 字元的密碼。',
	'ADMIN_USERNAME'			=> '管理員會員名稱',
	'ADMIN_USERNAME_EXPLAIN'	=> '請輸入一個 3 到 20 字元的會員名稱。',

	// Errors
	'INST_ERR_EMAIL_INVALID'		=> '您輸入的電子郵件位址無效。',
	'INST_ERR_PASSWORD_MISMATCH'	=> '您輸入的密碼不符合。',
	'INST_ERR_PASSWORD_TOO_LONG'	=> '您輸入的密碼過長，請輸入最多 30 個字元。',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> '您輸入的密碼太短，請輸入最少 6 個字元。',
	'INST_ERR_USER_TOO_LONG'		=> '您輸入的會員名稱過長，請輸入最多 20 個字元。',
	'INST_ERR_USER_TOO_SHORT'		=> '您輸入的會員名稱太短，請輸入最少 3 個字元。',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'		=> '討論區配置',
	'DEFAULT_LANGUAGE'	=> '預設語言',
	'BOARD_NAME'		=> '討論區的名稱',
	'BOARD_DESCRIPTION'	=> '討論區的簡短描述',

	//
	// Database data
	//
	'STAGE_DATABASE'	=> '資料庫設定',

	// Form labels
	'DB_CONFIG'				=> '資料庫配置',
	'DBMS'					=> '資料庫類型',
	'DB_HOST'				=> '資料庫伺服器主機名稱或 DSN',
	'DB_HOST_EXPLAIN'		=> 'DSN 意思是 Data Source Name，它只與安裝 ODBC 有關。在 PostgreSQL，經由 UNIX 網域插口，使用 localhost 以連接本地伺服器，以及經由 TCP，使用 127.0.0.1 以連接之。對於 SQLite，請輸入到您資料庫檔案的完整路徑。',
	'DB_PORT'				=> '資料庫伺服器連接埠',
	'DB_PORT_EXPLAIN'		=> '不用填寫，除非您確定伺服器使用一個非標準連接埠。',
	'DB_PASSWORD'			=> '資料庫管理員密碼',
	'DB_NAME'				=> '資料庫名稱',
	'DB_USERNAME'			=> '資料庫管理員名稱',
	'DATABASE_VERSION'		=> '資料庫版本',
	'TABLE_PREFIX'			=> '資料庫中的資料表之字首',
	'TABLE_PREFIX_EXPLAIN'	=> '字首必須以英文字母開始，而且只能包含英文字母、數字和底線。',

	// Database options
	'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Server 2000+ via ODBC',
	'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Server 2005+ [ Native ]',
	'DB_OPTION_MYSQLI'		=> 'MySQL with MySQLi Extension',
	'DB_OPTION_ORACLE'		=> 'Oracle',
	'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
	'DB_OPTION_SQLITE3'		=> 'SQLite 3',

	// Errors
	'INST_ERR_DB'					=> '資料庫安裝錯誤',
	'INST_ERR_NO_DB'				=> '無法加載指定資料庫類型的 PHP 模組。',
	'INST_ERR_DB_INVALID_PREFIX'	=> '您輸入的字首是無效的。它必須以英文字母開始，而且只能包含英文字母、數字和底線。',
	'INST_ERR_PREFIX_TOO_LONG'		=> '您指定的資料表字首過長，上限為 %d 個字元。',
	'INST_ERR_DB_NO_NAME'			=> '沒有指定資料庫名稱。',
	'INST_ERR_DB_FORUM_PATH'		=> '指定的資料庫檔案位於討論區資料夾內，您應該把它放在一個無法通過網路訪問的位置。',
	'INST_ERR_DB_CONNECT'			=> '連接資料庫失敗，錯誤訊息如下。',
	'INST_ERR_DB_NO_WRITABLE'		=> '資料庫和包含它的資料夾都必須是可寫入的。',
	'INST_ERR_DB_NO_ERROR'			=> '沒有得到相關的錯誤訊息。',
	'INST_ERR_PREFIX'				=> '資料表的字首已經存在，請選擇另一個。',
	'INST_ERR_DB_NO_MYSQLI'			=> '伺服器內安裝的 MySQL 版本與您選擇的「MySQL with MySQLi Extension」選項不相容，請嘗試「MySQL」選項。',
	'INST_ERR_DB_NO_SQLITE3'		=> '您安裝的 SQLite 延伸版本太舊，它至少必須升級到 3.6.15 版。',
	'INST_ERR_DB_NO_ORACLE'			=> 'T伺服器內安裝的 Oracle 版本需要您將參數 <var>NLS_CHARACTERSET</var> 設定為 <var>UTF8</var>。請設定此參數，或將 Oracle 升級到至少 9.2 版。',
	'INST_ERR_DB_NO_POSTGRES'		=> '您選擇的資料庫不是 <var>UNICODE</var> 或 <var>UTF8</var> 編碼，請使用 <var>UNICODE</var> 或 <var>UTF8</var> 編碼的資料庫。',
	'INST_SCHEMA_FILE_NOT_WRITABLE'	=> '資料庫架構檔案不可寫入',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> '電子郵件配置',

	// Package info
	'PACKAGE_VERSION'					=> '已安裝的壓縮包版本',
	'UPDATE_INCOMPLETE'				=> '您的 phpBB 安裝未正確更新。',
	'UPDATE_INCOMPLETE_MORE'		=> '請閱讀下面的資訊，以修復此錯誤。',
	'UPDATE_INCOMPLETE_EXPLAIN'		=> '<h1>不完整更新</h1>

		<p>我們注意到您的 phpBB 安裝之最後更新尚未完成。請訪問<a href="%1$s" title="%1$s">資料庫更新器</a>，確保<em>（Update database only）只更新資料庫</em>已選擇，以及點選<strong>（Submit）送出</strong>。在成功更新資料庫後，不要忘記刪除「install」資料夾。</p>',

	//
	// Server data
	//
	// Form labels
	'UPGRADE_INSTRUCTIONS'			=> '一個新的功能推出。<strong>%1$s</strong>是可用的。請閱讀<a href="%2$s" title="%2$s"><strong>發佈公告</strong></a>以了解它提供了什麼，以及如何升級。',
	'SERVER_CONFIG'				=> '伺服器配置',
	'SCRIPT_PATH'				=> 'Script 路徑',
	'SCRIPT_PATH_EXPLAIN'		=> '網域名稱指向 phpBB 的相對路徑，例如：<samp>/phpBB3</samp>。',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> '感謝您，管理團隊敬上',
	'CONFIG_SITE_DESC'				=> '（用於描述您討論區的短文）',
	'CONFIG_SITENAME'				=> '（您的討論區名稱）',

	'DEFAULT_INSTALL_POST'			=> '<t>這是在您安裝 phpBB3 後的一篇範例文章。似乎一切事情都可正常運作。如果您喜歡，那麼您可以刪除這篇文章以及繼續設定您的討論區。在安裝的過程中，您的第一個分區和第一個版面，被指派了一個適當的版面權限設定，其包含的預設會員群組有管理員、機器人、全域版主、訪客、註冊會員、以及註冊 COPPA 會員等。如果您也選擇要刪除您的第一個分區和第一個版面，那麼不要忘記指派版面權限到所有您新建的分區以及版面。當您要新建分區以及版面時，建議重新命名您的第一個分區和第一個版面，以及複製其版面權限。祝您使用愉快！</t>',

	'FORUMS_FIRST_CATEGORY'			=> '您的第一個分區',
	'FORUMS_TEST_FORUM_DESC'		=> '您的第一個版面描述。',
	'FORUMS_TEST_FORUM_TITLE'		=> '您的第一個版面',

	'RANKS_SITE_ADMIN_TITLE'		=> '系統管理員',
	'REPORT_WAREZ'					=> '文章包含違法或盜版軟體的連結。',
	'REPORT_SPAM'					=> '被檢舉的文章僅有的目的就是為網站或產品做廣告。',
	'REPORT_OFF_TOPIC'				=> '被檢舉的是離題文章。',
	'REPORT_OTHER'					=> '被檢舉的文章不符合任何其他的類別，請使用備註描述。',

	'SMILIES_ARROW'					=> '箭頭',
	'SMILIES_CONFUSED'				=> '疑惑',
	'SMILIES_COOL'					=> '酷！',
	'SMILIES_CRYING'				=> '哭泣或非常傷心',
	'SMILIES_EMARRASSED'			=> '困窘',
	'SMILIES_EVIL'					=> '邪惡或非常生氣',
	'SMILIES_EXCLAMATION'			=> '感歎',
	'SMILIES_GEEK'					=> '滑稽',
	'SMILIES_IDEA'					=> '想法',
	'SMILIES_LAUGHING'				=> '大笑',
	'SMILIES_MAD'					=> '生氣',
	'SMILIES_MR_GREEN'				=> '苦笑',
	'SMILIES_NEUTRAL'				=> '中立',
	'SMILIES_QUESTION'				=> '疑問',
	'SMILIES_RAZZ'					=> '冷笑',
	'SMILIES_ROLLING_EYES'			=> '滾動的眼睛',
	'SMILIES_SAD'					=> '悲傷',
	'SMILIES_SHOCKED'				=> '激動',
	'SMILIES_SMILE'					=> '微笑',
	'SMILIES_SURPRISED'				=> '驚訝',
	'SMILIES_TWISTED_EVIL'			=> '奸詐的惡魔',
	'SMILIES_UBER_GEEK'				=> '搞笑',
	'SMILIES_VERY_HAPPY'			=> '非常高興',
	'SMILIES_WINK'					=> '眨眼',

	'TOPICS_TOPIC_TITLE'			=> '歡迎使用 phpBB3',
));

// Common navigation items' translation
$lang = array_merge($lang, array(
	'MENU_OVERVIEW'		=> '概述',
	'MENU_INTRO'		=> '介紹',
	'MENU_LICENSE'		=> '授權',
	'MENU_SUPPORT'		=> '支援',
));

// Task names
$lang = array_merge($lang, array(
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'	=> '建立配置檔案',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'			=> '正在增加配置設定',
	'TASK_ADD_DEFAULT_DATA'				=> '正在增加資料庫的預設設定',
	'TASK_CREATE_DATABASE_SCHEMA_FILE'	=> '正在建立資料庫架構檔案',
	'TASK_SETUP_DATABASE'				=> '正在設定資料庫',
	'TASK_CREATE_TABLES'				=> '正在建立資料表',

	// Install data
	'TASK_ADD_BOTS'				=> '正在註冊機器人',
	'TASK_ADD_LANGUAGES'		=> '正在安裝可用的語言',
	'TASK_ADD_MODULES'			=> '正在安裝模組',
	'TASK_CREATE_SEARCH_INDEX'	=> '正在建立搜尋索引',

	// Install finish tasks
	'TASK_INSTALL_EXTENSIONS'	=> '正在安裝擴充功能壓縮包',
	'TASK_NOTIFY_USER'			=> '正在發送通知的電子郵件',
	'TASK_POPULATE_MIGRATIONS'	=> '正在填充 Migrations',

	// Installer general progress messages
	'INSTALLER_FINISHED'	=> '安裝程序已成功完成',
));

// Installer's general messages
$lang = array_merge($lang, array(
	'MODULE_NOT_FOUND'				=> '找不到模組',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> '找不到模組，因為伺服器 %s 未定義。',

	'TASK_NOT_FOUND'				=> '找不到任務',
	'TASK_NOT_FOUND_DESCRIPTION'	=> '找不到任務，因為伺服器 %s 未定義。',

	'SKIP_MODULE'	=> '跳過「%s」模組',
	'SKIP_TASK'		=> '跳過「%s」任務',

	'TASK_SERVICE_INSTALLER_MISSING'	=> '所有安裝程序任務服務將以「安裝器」開始',
	'TASK_CLASS_NOT_FOUND'				=> '安裝程序任務服務定義無效。給定服務名稱「%1$s」，所需的該33000類名稱空間為「%2$s」。有關更多資訊，請參閱 task_interface 的說明。',

	'INSTALLER_CONFIG_NOT_WRITABLE'	=> '安裝程序配置檔案不可寫入。',
));

// CLI messages
$lang = array_merge($lang, array(
	'CLI_INSTALL_BOARD'				=> '安裝 phpBB',
	'CLI_UPDATE_BOARD'				=> '更新 phpBB',
	'CLI_INSTALL_SHOW_CONFIG'		=> '顯示將使用的配置',
	'CLI_INSTALL_VALIDATE_CONFIG'	=> '驗證配置檔案',
	'CLI_CONFIG_FILE'				=> '要使用的配置檔案',
	'MISSING_FILE'					=> '無法存取檔案 %1$s',
	'MISSING_DATA'					=> '配置檔案缺少資料或可能包含無效的設定。',
	'INVALID_YAML_FILE'				=> '無法解析 YAML 檔案 %1$s',
	'CONFIGURATION_VALID'			=> '配置檔案是有效的',
));

// Common updater messages
$lang = array_merge($lang, array(
	'UPDATE_INSTALLATION'			=> '更新 phpBB 安裝',
	'UPDATE_INSTALLATION_EXPLAIN'	=> '本選項，將更新您的 phpBB 到最新版本。<br />過程中所有的檔案都將被徹底地檢查。您可以檢視檔案和更新前的差異。<br /><br />檔案自動更新有兩種不同的方式。</p><h2>手動更新</h2><p>這個選項，您只需要下載有更新的檔案以確保不會遺失您其他已修改的檔案。下載後將檔案上傳到 phpBB 根目錄底下的正確位置。之後，您可以再次進行檔案檢查，檢查是否將檔案放到了正確的位置。</p><h2>使用 FTP 進階更新</h2><p>這個方法和第一個類似，但是不需要下載有更新的檔案和手動上傳它們。系統將為您自動做這個工作。用這個方法進行升級您需要知道您的 FTP 登入的詳細資料。一旦完成，系統將重新導向到檔案檢查以確認更新完全。<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>發佈公告</h1>

		<p>在您繼續更新過程之前，請閱讀最新版本的發佈公告，它包含很多有用的資訊。也包含完整的下載連結和改變記錄。</p>

		<br />

		<h1>如何使用 Full Package（完整包）來更新您的安裝</h1>

		<p>更新安裝的推薦方式是使用完整包。如果核心 phpBB 檔案已在您的安裝中修改，您可能希望使用進階更新包，以免失去這些更改。您也可以使用 INSTALL.html 檔案中列出的其他方法更新安裝。使用完整包更新 phpBB3 的步驟如下：</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li><strong class="error">備份討論區所有的檔案和資料庫。</strong></li>
			<li>前往 <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com downloads page</a> 下載最新的「Full Package（完整包）」壓縮檔。</li>
			<li>解壓縮檔案。</li>
			<li>移除（刪除）<code class="inline">config.php</code> 檔、以及 <code class="inline">/images</code>、<code class="inline">/store</code> 和 <code class="inline">/files</code> 資料夾<em>從完整包中</em>（不是您的網站）。</li>
			<li>前往 ACP（管理員控制台）的「討論區設定」，確認將 prosilver 設定為預設的風格。如果不是，請修改為 prosilver。</li>
			<li>刪除 <code class="inline">/vendor</code> 和 <code class="inline">/cache</code> 從主機上討論區的根目錄之資料夾。</li>
			<li>透過 FTP 或 SSH，將剩餘的檔案和資料夾（即 phpBB3 資料夾的剩餘內容）上傳到伺服器上的討論區之根目錄中，覆蓋所有檔案。注意：在上傳新的 phpBB3 內容時，請不要刪除 <code class="inline">/ext</code> 資料夾中的任何擴充功能。）</li>
			<li><strong><a href="%1$s" title="%1$s">現在透過將瀏覽器指向安裝資料夾來啟動更新過程。</a></strong></li>
			<li>按照步驟更新資料庫，並讓其運行完成。</li>
			<li>透過 FTP 或 SSH 刪除 <code class="inline">/install</code> 資料夾從你的討論區之根目錄中。<br><br></li>
		</ol>

		<p>您現在有一個最新的討論區，包含原有的使用者和文章。後續任務：</p>
		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>更新您的語言包</li>
			<li>更新您的風格<br><br></li>
		</ul>

		<h1>如何使用進階更新包來更新您的安裝</h1>

		<p>只有在有經驗者安裝時修改了 phpBB 核心檔案的情況下，才建議使用進階更新包。您也可以使用 INSTALL.html 檔案中列出的方法更新安裝。使用自動更新包更新 phpBB3 的步驟如下：</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li>前往 <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com downloads page</a> 下載「Advanced Update Package（進階更新包）」壓縮檔。</li>
			<li>解壓縮檔案。</li>
			<li>上傳完成解壓縮的「install」以及「vendor」資料夾到您安裝 phpBB 的根目錄（即 config.php 檔案所在資料夾）。<br><br></li>
		</ol>

		<p>一旦完成上傳，您的討論區現在將因 install 資料夾存在，而使得一般會員暫時離開討論區。<br /><br />
		<strong><a href="%1$s" title="%1$s">現在，開始在瀏覽器輸入您的 install 資料夾位址進行更新</a>。</strong><br />
		<br />
		整個更新過程您將被指導。更新完成後您將被通知。
		</p>
	',
));

// Updater forms
$lang = array_merge($lang, array(
	// Updater types
	'UPDATE_TYPE'			=> '要運行的更新類型',

	'UPDATE_TYPE_ALL'		=> '更新檔案系統與資料庫',
	'UPDATE_TYPE_DB_ONLY'	=> '只更新檔案系統',

	// File updater methods
	'UPDATE_FILE_METHOD_TITLE'		=> '檔案更新方式',

	'UPDATE_FILE_METHOD'			=> '檔案更新方式',
	'UPDATE_FILE_METHOD_DOWNLOAD'	=> '下載已修改的檔案之壓縮檔',
	'UPDATE_FILE_METHOD_FTP'		=> '經由 FTP 更新檔案（自動）',
	'UPDATE_FILE_METHOD_FILESYSTEM'	=> '經由直接檔案存取更新檔案（自動）',

	// File updater archives
	'SELECT_DOWNLOAD_FORMAT'	=> '選擇下載檔案格式',

	// FTP settings
	'FTP_SETTINGS'			=> 'FTP 設定',
));

// Requirements messages
$lang = array_merge($lang, array(
	'UPDATE_FILES_NOT_FOUND'	=> '找不到有效的更新資料夾，請確定您上傳了相關檔案。',

	'NO_UPDATE_FILES_UP_TO_DATE'	=> '您的版本已經是最新版本。沒有必要進行升級。如果您想要徹底地檢查您的檔案，請確認您上傳了正確的更新檔案。',
	'OLD_UPDATE_FILES'		=> '更新檔案已經過期。找到的更新檔案是用於 phpBB %1$s 到 phpBB %2$s 的升級，但是最新的 phpBB 版本是 %3$s。',
	'INCOMPATIBLE_UPDATE_FILES'		=> '找到的更新檔案不適用於您目前的版本。您的安裝版本是 %1$s 而更新檔案是用於升級 phpBB %2$s 到 %3$s。',
));

// Update files
$lang = array_merge($lang, array(
	'STAGE_UPDATE_FILES'		=> '更新檔案',

	// Check files
	'UPDATE_CHECK_FILES'	=> '檢查要更新的檔案',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> '開啟 %s 比較檔案之差異失敗。',

	'UPDATE_FILE_DIFF'		=> '正在比較已更改的檔案之差異',
	'ALL_FILES_DIFFED'		=> '所有已修改的檔案已被比較。',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE'	=> '更新檔案',

	'DOWNLOAD'							=> '下載',
	'DOWNLOAD_CONFLICTS'				=> '下載合併衝突的壓縮檔',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> '搜尋 &lt;&lt;&lt; 去發現衝突',
	'DOWNLOAD_UPDATE_METHOD'			=> '下載已修改的檔案之壓縮檔',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> '當您下載並解壓縮檔案後，您需要上傳檔案到 phpBB 根目錄。請上傳檔案到分別的位置。當你完成所有檔案的上傳後，請再用下面的按鈕檢查檔案。',

	'FILE_ALREADY_UP_TO_DATE'		=> '檔案已經是最新。',
	'FILE_DIFF_NOT_ALLOWED'			=> '檔案不允許不一樣。',
	'FILE_USED'						=> '使用資訊從',			// Single file
	'FILES_CONFLICT'				=> '有衝突的檔案',
	'FILES_CONFLICT_EXPLAIN'		=> '下面的檔案已經修改過，不是舊版本的原始檔案。phpBB 認為合併這些檔案會產生衝突。請檢查衝突並嘗試手工的解決，或者選擇一種合併的方式繼續更新。如果您手工修改消除了衝突，請再次運行檔案檢查。您也可以選擇為每個檔案優先選擇合併。這將捨棄舊版本檔案的衝突代碼而遺失您於這個檔案上的修改。',
	'FILES_DELETED'					=> '已刪除的檔案',
	'FILES_DELETED_EXPLAIN'			=> '下列檔案沒有存在新版本中。這些檔案必須從安裝過程中刪除。',
	'FILES_MODIFIED'				=> '已修改的檔案',
	'FILES_MODIFIED_EXPLAIN'		=> '下面的檔案已經修改過，不是舊版本的原始檔案。更新的檔案將合併您修改過和新的檔案。',
	'FILES_NEW'						=> '新檔案',
	'FILES_NEW_EXPLAIN'				=> '以下的檔案在安裝中不存在。',
	'FILES_NEW_CONFLICT'			=> '新的衝突檔案',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> '下面的檔案在新版本中已更新，但是再對應資料夾已經存在同名檔案，這個檔案將被新檔案覆蓋。',
	'FILES_NOT_MODIFIED'			=> '未修改的檔案',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> '下面的檔案沒有被修改。',
	'FILES_UP_TO_DATE'				=> '已經升級的檔案',
	'FILES_UP_TO_DATE_EXPLAIN'		=> '以下的檔案已經是最新的，不需要升級。',
	'FILES_VERSION'					=> '檔案版本',
	'TOGGLE_DISPLAY'				=> '查看/隱藏檔案列表',

	// File updater
	'UPDATE_UPDATING_FILES'	=> '正在更新檔案',

	'UPDATE_FILE_UPDATER_HAS_FAILED'	=> '檔案更新程序「%1$s」失敗。安裝程序將嘗試回退到「%2$s」。',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> '檔案更新程序失敗。沒有其他備用方法可用。',

	'UPDATE_CONTINUE_UPDATE_PROCESS'	=> '繼續更新過程',
	'UPDATE_RECHECK_UPDATE_FILES'		=> '再次檢查檔案',
));

// Update database
$lang = array_merge($lang, array(
	'STAGE_UPDATE_DATABASE'		=> '更新資料庫',

	'INLINE_UPDATE_SUCCESSFUL'		=> '資料庫更新成功。',

	'TASK_UPDATE_EXTENSIONS'	=> '正在更新擴充功能',
));

// Converter
$lang = array_merge($lang, array(
	// Common converter messages
	'CONVERT_NOT_EXIST'			=> '指定的轉換程式不存在。',
	'DEV_NO_TEST_FILE'			=> '在轉換器中沒有指定 test_file 變數的值。如果您是轉換器的使用者，您不應該看到這個錯誤，請聯絡轉換器的作者並報告這個錯誤。如果您是轉換器的作者，您必須指定一個原討論區中存在的檔案名稱，使得路徑校驗能正常進行。',
	'COULD_NOT_FIND_PATH'		=> '無法找到您以前討論區的路徑。請檢查您的設定並再試一次。<br />» 指定的路徑是 %s。',
	'CONFIG_PHPBB_EMPTY'		=> 'phpBB3 配置變數「%s」是空的。',

	'MAKE_FOLDER_WRITABLE'		=> '請確認此資料夾存在並且是可以被寫入的，然後再試試：<br />»<strong>%s</strong>。',
	'MAKE_FOLDERS_WRITABLE'		=> '請確認此資料夾存在並且是可以被寫入的，然後再試試：<br />»<strong>%s</strong>。',

	'INSTALL_TEST'				=> '再試一次',

	'NO_TABLES_FOUND'			=> '沒找到資料表。',
	'TABLES_MISSING'			=> '找不到這些資料表<br />» <strong>%s</strong>。',
	'CHECK_TABLE_PREFIX'		=> '請檢查您的資料表字首後，再試一次。',

	// Conversion in progress
	'CONTINUE_CONVERT'			=> '繼續轉換',
	'CONTINUE_CONVERT_BODY'		=> '檢測到先前的轉換，您可以選擇開始新的轉換，還是繼續上一次的轉換。',
	'CONVERT_NEW_CONVERSION'	=> '新的轉換',
	'CONTINUE_OLD_CONVERSION'	=> '繼續進行以前的轉換',

	// Start conversion
	'SUB_INTRO'					=> '簡介',
	'CONVERT_INTRO'				=> '歡迎使用 phpBB 轉換架構',
	'CONVERT_INTRO_BODY'		=> '這裡您可以從其它（已安裝）的討論區導入資料，下表列出的是所有可用的轉換模組。如果其中沒有您想要的轉換模組，請訪問我們的網站，那裡可能會提供更多的轉換模組下載。',
	'AVAILABLE_CONVERTORS'		=> '可用的轉換器',
	'NO_CONVERTORS'				=> '沒有可用的轉換器。',
	'CONVERT_OPTIONS'			=> '選項',
	'SOFTWARE'					=> '討論區軟體',
	'VERSION'					=> '版本',
	'CONVERT'					=> '轉換',

	// Settings
	'STAGE_SETTINGS'			=> '設定',
	'TABLE_PREFIX_SAME'			=> '資料表字首需要與轉換之前所使用的相同。<br />» 之前所使用的資料表字首是 %s。',
	'DEFAULT_PREFIX_IS'			=> '根據提供的字首，轉換器無法找到可用的資料表。請確認您已經輸入要轉換的討論區正確的資料表。%1$s 預設的資料表字首是 <strong>%2$s</strong>。',
	'SPECIFY_OPTIONS'			=> '指定轉換選項',
	'FORUM_PATH'				=> '討論區路徑',
	'FORUM_PATH_EXPLAIN'		=> '這是在磁碟上對應於您<strong>現在的 phpBB3 根目錄</strong>的原討論區 <strong>相對</strong> 路徑。',
	'REFRESH_PAGE'				=> '重新整理頁面以繼續轉換',
	'REFRESH_PAGE_EXPLAIN'		=> '如果設定為「是」，轉換器將會在完成每一步之後重新整理頁面，然後繼續。如果這是您為了測試目的的第一次轉換而且決定提前獲得失誤，那麼我們建議您將此設定為「否」。',

	// Conversion
	'STAGE_IN_PROGRESS'			=> '進行轉換',

	'AUTHOR_NOTES'				=> '作者提示<br />» %s',
	'STARTING_CONVERT'			=> '開啟轉換過程',
	'CONFIG_CONVERT'			=> '正在轉換配置內容',
	'DONE'						=> '完成',
	'PREPROCESS_STEP'			=> '正在執行預備處理函數/查詢',
	'FILLING_TABLE'				=> '正在填充資料表：<strong>%s</strong>',
	'FILLING_TABLES'			=> '正在填充資料表',
	'DB_ERR_INSERT'				=> '執行 <code>INSERT</code> 查詢時發生錯誤。',
	'DB_ERR_LAST'				=> '執行 <var>query_last</var> 時發生錯誤。',
	'DB_ERR_QUERY_FIRST'		=> '執行 <var>query_first</var> 時發生錯誤。',
	'DB_ERR_QUERY_FIRST_TABLE'	=> '執行 <var>query_first</var> 時發生錯誤：%s（「%s」）。',
	'DB_ERR_SELECT'				=> '執行 <code>SELECT</code> 查詢時發生錯誤。',
	'STEP_PERCENT_COMPLETED'	=> '第 <strong>%d</strong> 步 / 共 <strong>%d</strong> 步',
	'FINAL_STEP'				=> '執行最後一步',
	'SYNC_FORUMS'				=> '開始同步版面',
	'SYNC_POST_COUNT'			=> '正在同步文章',
	'SYNC_POST_COUNT_ID'		=> '正在同步<var>序號</var>為 %1$s 到 %2$s 的文章。',
	'SYNC_TOPICS'				=> '開始同步主題',
	'SYNC_TOPIC_ID'				=> '正在同步<var>topic_id（序號）</var>為 %1$s 至 %2$s 的主題。',
	'PROCESS_LAST'					=> '正在執行最後的指令',
	'UPDATE_TOPICS_POSTED'		=> '正在生成已發表主題資料',
	'UPDATE_TOPICS_POSTED_ERR'	=> '在生成已發表主題資料時發生錯誤。您可以在轉換結束後，在管理員控制台中重試這個操作。',
	'CONTINUE_LAST'				=> '繼續最後的指令',
	'CLEAN_VERIFY'				=> '正在清理並校驗最終結構',
	'NOT_UNDERSTAND'			=> '無法理解 %s #%d，資料表 %s（「%s」）',
	'NAMING_CONFLICT'			=> '命名衝突：%s 與 %s 都是別名<br /><br />%s',

	// Finish conversion
	'CONVERT_COMPLETE'			=> '轉換完成',
	'CONVERT_COMPLETE_EXPLAIN'	=> '您已經將您的討論區成功轉換為 phpBB 3.3，您現在可以登入以及<a href="../">使用您的討論區</a>。請在刪除「install」資料夾以啟用您的討論區前，確認所有的設定都已經被正確地轉換。請記得 phpBB 的線上使用說明位於 <a href="https://www.phpbb.com/support/docs/en/3.3/ug/">Documentation（使用說明文件）</a>和 <a href="https://www.phpbb.com/community/viewforum.php?f=661">support forums（技術支援版面）</a>。',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> '原討論區允許附加檔案使用 FTP 上傳，請停用 FTP 上傳，並確認設定了有效的上傳資料夾，所有附加檔案將被拷貝到這個新的資料夾。完成後，請重新開始轉換程式。',
	'CONV_ERROR_CONFIG_EMPTY'			=> '轉換程式沒有可用的設定資訊。',
	'CONV_ERROR_FORUM_ACCESS'			=> '無法得到版面的使用資訊。',
	'CONV_ERROR_GET_CATEGORIES'			=> '無法得到分區。',
	'CONV_ERROR_GET_CONFIG'				=> '無法恢復您的討論區設定。',
	'CONV_ERROR_COULD_NOT_READ'			=> '無法使用/閱讀「%s」。',
	'CONV_ERROR_GROUP_ACCESS'			=> '無法得到群組認證資訊。',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> '在 add_bots() 中檢測到群組資料表的不一致 - 如果您要手動設定它，那麼您需要增加所有特殊的會員群組。',
	'CONV_ERROR_INSERT_BOT'				=> '無法在會員資料表中插入 bot。',
	'CONV_ERROR_INSERT_BOTGROUP'		=> '無法在 bots 資料表中插入 bot。',
	'CONV_ERROR_INSERT_USER_GROUP'		=> '無法在會員群組資料表中插入會員。',
	'CONV_ERROR_MESSAGE_PARSER'			=> '訊息解析錯誤',
	'CONV_ERROR_NO_AVATAR_PATH'			=> '使用者注意：您必須指定 $convertor[\'avatar_path\'] 以使用 %s。',
	'CONV_ERROR_NO_FORUM_PATH'			=> '到原討論區的相對路徑尚未指定。',
	'CONV_ERROR_NO_GALLERY_PATH'		=> '使用者注意：您必須指定 $convertor[\'avatar_gallery_path\'] 以使用 %s。',
	'CONV_ERROR_NO_GROUP'				=> '群組「%1$s」在 %2$s 中無法被找到。',
	'CONV_ERROR_NO_RANKS_PATH'			=> '使用者注意：您必須指定 $convertor[\'ranks_path\'] 以使用 %s。',
	'CONV_ERROR_NO_SMILIES_PATH'		=> '使用者注意：您必須指定 $convertor[\'smilies_path\'] 以使用 %s。',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> '使用者注意：您必須指定 $convertor[\'upload_path\'] 以使用 %s。',
	'CONV_ERROR_PERM_SETTING'			=> '無法插入/更新權限設定。',
	'CONV_ERROR_PM_COUNT'				=> '無法選擇私人訊息資料夾數量。',
	'CONV_ERROR_REPLACE_CATEGORY'		=> '無法插入新的版面取代舊的分區。',
	'CONV_ERROR_REPLACE_FORUM'			=> '無法插入新的版面取代舊的版面。',
	'CONV_ERROR_USER_ACCESS'			=> '無法得到會員認證資訊。',
	'CONV_ERROR_WRONG_GROUP'			=> '錯誤的會員群組「%1$s」被定義在 %2$s。',
	'CONV_OPTIONS_BODY'					=> '這個頁面用於收集原討論區所需要的使用資料。輸入原討論區資料庫細節；轉換程式不會對下面的資料庫內容做任何改變。原討論區必須暫時停用以確保轉換能正確完成。',
	'CONV_SAVED_MESSAGES'				=> '已經保存的訊息',

	'PRE_CONVERT_COMPLETE'			=> '全部的轉換準備步驟都已成功完成，您現在可以開始進行實際的轉換操作。',
));
