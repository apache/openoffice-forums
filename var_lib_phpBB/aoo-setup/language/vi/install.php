<?php
/** 
*
* install [Vietnamese]
*
* @package language
* @version $Id: install.php,v 1.73 2010/08/25 11:16:00
* @copyright (c) 2006, 2007 phpBBVietNam Group, (c) 2009 - 2010 ytuongsangtaovn.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'ADMIN_CONFIG'				=> 'Cấu hình tài khoản quản trị viên',
	'ADMIN_PASSWORD'			=> 'Mật khẩu của quản trị viên',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Xác nhận mật khẩu quản trị viên',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Mật khẩu không được phép ít hơn <strong>6</strong> ký tự và vượt quá <strong>30</strong> ký tự.',
	'ADMIN_TEST'				=> 'Kiểm tra thiết lập quản trị viên',
	'ADMIN_USERNAME'			=> 'Tên thành viên của người quản trị',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Tên thành viên không được phép ít hơn <strong>3</strong> ký tự và vượt quá <strong>20</strong> ký tự.',	
	'APP_MAGICK'				=> 'Hỗ trợ Imagemagick [ Đính kèm tập tin ]',
	'AUTHOR_NOTES'				=> 'Ghi chú của tác giả<br />» %s',
	'AVAILABLE'					=> 'Có sẵn',
	'AVAILABLE_CONVERTORS'		=> 'Những chuyển đổi có sẵn',

	'BEGIN_CONVERT'					=> 'Bắt đầu chuyển đổi',
	'BLANK_PREFIX_FOUND'			=> 'Bạn chưa xác định tiền tố đầu mỗi tên bảng dữ liệu trong cơ sở dữ liệu.',
	'BOARD_NOT_INSTALLED'			=> 'Không tìm thấy bản cài đặt',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'Công cụ chuyển đổi dữ liệu phpBB hợp nhất yêu cầu một bản cài đặt mặc định của phpBB3 để có thể sử dụng. Bạn hãy vui lòng <a href="%s">tiến hành cài đặt phpBB3</a> trước.',
	'BACKUP_NOTICE'					=> 'Hãy sao lưu dữ liệu của diễn đàn trước khi nâng cấp nhằm phòng hờ các vấn đề rủi ro có thể xảy ra trong quá trình nâng cấp.',

	'CATEGORY'					=> 'Nhóm thông tin',
	'CACHE_STORE'				=> 'Lưu trữ bộ nhớ đệm',
	'CACHE_STORE_EXPLAIN'		=> 'Thư mục nơi chứa các tập tin sử dụng thường xuyên được tạo bộ nhớ đệm, hệ thống tập tin được tối ưu hoá.',
	'CAT_CONVERT'				=> 'Chuyển đổi',
	'CAT_INSTALL'				=> 'Cài đặt',
	'CAT_OVERVIEW'				=> 'Tổng quan',
	'CAT_UPDATE'				=> 'Cập nhật',
	'CHANGE'					=> 'Thay đổi',	
	'CHECK_TABLE_PREFIX'		=> 'Hãy kiểm tra tiền tố đầu mỗi tên bảng dữ liệu rồi thử lại.',
	'CLEAN_VERIFY'				=> 'Đang dọn dẹp và kiểm tra cấu trúc cơ sở dữ liệu lần cuối',
	'CLEANING_USERNAMES'		=> 'Đang dọn dẹp tên thành viên',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> là tên thành viên đã được dọn dẹp sạch các ký tự cho:',
	'COLLIDING_USERNAMES_FOUND'	=> 'Những tên thành viên xung đột với nhau đã được tìm thấy trong hệ thống cũ của bạn. Để hoàn tất việc chuyển đổi, bạn hãy vui lòng xóa hoặc đổi tên lại cho những thành viên này vì công cụ chuyển đổi yêu cầu chỉ sử dụng một thành viên trong hệ thống cũ của bạn cho mỗi tên thành viên đã được dọn dẹp các ký tự.',
	'COLLIDING_USER'			=> '» Số ID thành viên: <strong>%d</strong> Tên thành viên: <strong>%s</strong> (%d bài viết)',
	'CONFIG_CONVERT'			=> 'Đang chuyển đổi cấu hình hệ thống',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'Không thể tạo tập tin cấu hình. Những phương pháp khác sử dụng để tạo tập tin này được liệt kê bên dưới.',
	'CONFIG_FILE_WRITTEN'		=> 'Tập tin cấu hình đã được tạo. Ngay bây giờ bạn có thể chuyển sang bước kế tiếp trong quá trình cài đặt.',
	'CONFIG_PHPBB_EMPTY'		=> 'Biến số cấu hình của hệ thống phpBB cho "%s" còn để trống.',
	'CONFIG_RETRY'				=> 'Thử lại',
	'CONTACT_EMAIL_CONFIRM'		=> 'Xác nhận địa chỉ Email liên hệ',
	'CONTINUE_CONVERT'			=> 'Tiếp tục chuyển đổi',
	'CONTINUE_CONVERT_BODY'		=> 'Một chuyển đổi hệ thống trước đã được xác định. Bây giờ bạn có thể lựa chọn giữa việc bắt đầu một chuyển đổi hệ thống mới hoặc tiếp tục với chuyển đổi hệ thống trước.',
	'CONTINUE_LAST'				=> 'Tiếp tục câu lệnh trước',
	'CONTINUE_OLD_CONVERSION'	=> 'Tiếp tục chuyển đổi hệ thống đã tiến hành',
	'CONVERT'					=> 'Chuyển đổi',
	'CONVERT_COMPLETE'			=> 'Việc chuyển đổi đã hoàn tất',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Bạn đã chuyển đổi thành công hệ thống của mình sang hệ thống phpBB 3.0. Bạn có thể đăng nhập ngay bây giờ và <a href="../">truy cập vào hệ thống</a> của mình. Hãy chắc chắn rằng những thiết lập hệ thống đã được chuyển đổi sang chính xác trước khi bạn kích hoạt hệ thống hoạt động bằng cách xóa thư mục cài đặt đi. Bạn luôn được giúp đỡ từ cộng đồng trực tuyến trong việc sử dụng phpBB với <a href="http://www.phpbb.com/support/documentation/3.0/">tài liệu hướng dẫn sử dụng</a> và <a href="http://www.phpbb.com/community/viewforum.php?f=46">diễn đàn hỗ trợ</a>.',	
	'CONVERT_INTRO'				=> 'Chào mừng bạn đã đến với công cụ phpBB Unified Convertor Framework',
	'CONVERT_INTRO_BODY'		=> 'Với công cụ này, bạn có thể chuyển đổi dữ liệu từ những hệ thống khác phpBB đã cài đặt trước đây sang hệ thống phpBB. Danh sách bên dưới liệt kê tất cả các gói thành phần chức năng chuyển đổi có sẵn hiện tại. Nếu như danh sách này không có gói thành phần chức năng chuyển đổi cho hệ thống mà bạn đang sử dụng, hãy ghé thăm website của chúng tôi để tải về và tìm hiểu nhiều thông tin hơn về các gói thành phần chức năng chuyển đổi sẵn có tại đây.',
	'CONVERT_NEW_CONVERSION'	=> 'Chuyển đổi mới',
	'CONVERT_NOT_EXIST'			=> 'Chuyển đổi bạn vừa chọn không tồn tại.',
	'CONVERT_OPTIONS'			=> 'Các tùy chọn',
	'CONVERT_SETTINGS_VERIFIED'	=> 'Thông tin mà bạn nhập vào đây sẽ được kiểm tra lại. Để bắt đầu quá trình chuyển đổi, bạn hãy bấm vào nút chấp nhận bên dưới để bắt đầu.',
	'CONV_ERR_FATAL'			=> 'Lỗi chuyển đổi không tránh khỏi',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'Thiết lập tải lên bằng FTP cho các tập tin đính kèm được bật trong hệ thống cũ. Bạn hãy vui lòng tắt thiết lập tải lên bằng FTP và chắc chắn rằng một thư mục hợp lệ chứa các tập tin đính kèm tải lên đã được xác định. Sau đó, hãy sao chép tất cả các tập tin đính kèm đến một thư mục mới trên Web có thể truy cập được. Nếu bạn đã hoàn tất xong việc này, hãy khởi động lại công cụ chuyển đổi.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Không có thông tin cấu hình nào sẵn có cho quá trình chuyển đổi.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Không thể nhận thông tin cho phép truy cập chuyên mục.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Không thể nhận thông tin về các nhóm chuyên mục.',
	'CONV_ERROR_GET_CONFIG'				=> 'Không thể nhận thông tin cấu hình hệ thống.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Không thể truy cập/đọc “%s”.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Không thể nhận được thông tin xác thực nhóm.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Mâu thuẫn trong bảng dữ liệu <var>_groups</var> đã được phát hiện trong hàm thực thi <code>add_bots()</code>. Bạn cần phải thêm vào tất cả các nhóm đặc biệt nếu bạn muốn tự mình thực hiện.',
	'CONV_ERROR_INSERT_BOT'				=> 'Không thể chèn thêm máy tìm kiếm vào bảng dữ liệu <var>_users</var>.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Không thể chèn thêm máy tìm kiếm vào bảng dữ liệu <var>_bots</var>.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Không thể chèn thêm thành viên vào bảng dữ liệu <var>_user_group</var>.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Lỗi phân tách nội dung bài viết',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Lưu ý dành cho những người phát triển: bạn phải xác định <code>$convertor[\'avatar_path\']</code> để sử dụng %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Đường dẫn đến thư mục cài đặt hệ thống chưa được xác định.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Lưu ý dành cho những người phát triển: bạn phải xác định <code>$convertor[\'avatar_gallery_path\']</code> để sử dụng %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Nhóm “%1$s” không thể tìm thấy trong %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Lưu ý dành cho những người phát triển: bạn phải xác định <code>$convertor[\'ranks_path\']</code> để sử dụng %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Lưu ý dành cho những người phát triển: bạn phải xác định <code>$convertor[\'smilies_path\']</code> để sử dụng %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Lưu ý dành cho những người phát triển: bạn phải xác định <code>$convertor[\'upload_path\']</code> để sử dụng %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Không thể chèn thêm/cập nhật thiết lập cấp phép.',
	'CONV_ERROR_PM_COUNT'				=> 'Không thể chọn thư mục để đếm số lượng tin nhắn.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Không thể chèn thêm chuyên mục mới để thay thế cho nhóm chuyên mục cũ.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Không thể chèn thêm chuyên mục mới để thay thế cho chuyên mục cũ.',
	'CONV_ERROR_USER_ACCESS'			=> 'Không thể nhận được thông tin xác thực thành viên.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Nhóm không chính xác “%1$s” đã được chỉ định trong %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Trang này thu thập những thông tin cần cho việc truy cập vào hệ thống nguồn. Bạn hãy nhập vào những thông tin chi tiết về cơ sở dữ liệu của hệ thống cũ mà bạn đã cài đặt. Công cụ chuyển đổi sẽ không thay đổi bất cứ thứ gì trong cơ sở dữ liệu mà bạn cung cấp. Hệ thống nguồn nên được tạm ngưng hoạt động để việc chuyển đổi diễn ra được suôn sẻ.',
	'CONV_SAVED_MESSAGES'				=> 'Nội dung đã lưu',

	'COULD_NOT_COPY'			=> 'Không thể sao chép tập tin <strong>%1$s</strong> đến <strong>%2$s</strong><br /><br />Bạn hãy vui lòng kiểm tra lại thư mục được sao chép đến đã tồn tại và được cấp phép có thể ghi trên máy chủ.',
	'COULD_NOT_FIND_PATH'		=> 'Không thể tìm thấy đường dẫn đến thư mục cài đặt hệ thống. Hãy kiểm tra thiết lập của bạn rồi thử lại.<br />» Đường dẫn được xác định là <strong>%s</strong>.',

	'DBMS'						=> 'Loại cơ sở dữ liệu',
	'DB_CONFIG'					=> 'Cấu hình cơ sở dữ liệu',
	'DB_CONNECTION'				=> 'Kết nối cơ sở dữ liệu',
	'DB_ERR_INSERT'				=> 'Có lỗi trong khi tiến hành truy vấn <code>INSERT</code>.',
	'DB_ERR_LAST'				=> 'Có lỗi trong khi tiến hành <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Có lỗi trong khi thực thi <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Có lỗi trong khi thực thi <var>query_first</var>, %s (“%s”).',
	'DB_ERR_SELECT'				=> 'Có lỗi trong khi tiến hành truy vấn <code>SELECT</code>.',
	'DB_HOST'					=> 'Tên miền hoặc địa chỉ DSN của máy chủ cơ sở dữ liệu',
	'DB_HOST_EXPLAIN'			=> 'DSN là tên viết tắt của <strong>Data Source Name</strong> và chỉ được sử dụng khi bạn chọn cài đặt với ODBC.',
	'DB_NAME'					=> 'Tên cơ sở dữ liệu',
	'DB_PASSWORD'				=> 'Mật khẩu kết nối cơ sở dữ liệu',
	'DB_PORT'					=> 'Cổng máy chủ cơ sở dữ liệu',
	'DB_PORT_EXPLAIN'			=> 'Để trống mục này nếu như bạn không biết cổng tiêu chuẩn đang được sử dụng của máy chủ.',
	'DB_UPDATE_NOT_SUPPORTED'	=> 'Thật đáng tiếc, nhưng đoạn mã này không hỗ trợ nâng cấp các phiên bản phpBB cũ hơn “%1$s”. Phiên bản hiện tại bạn đang sử dụng là “%2$s”. Hãy nâng cấp lên phiên bản cũ hơn trước rồi từ đó mới nâng cấp lên tiếp. Để tìm kiếm trợ giúp bạn có thể vào diễn đàn hỗ trợ tại phpBB.com.',
	'DB_USERNAME'				=> 'Tên đăng nhập cơ sở dữ liệu',
	'DB_TEST'					=> 'Kiểm tra kết nối',
	'DEFAULT_LANG'				=> 'Ngôn ngữ mặc định',
	'DEFAULT_PREFIX_IS'			=> 'Công cụ chuyển đổi không thể tìm thấy những bảng dữ liệu với tên tiền tố đầu mà bạn đã xác định. Hãy chắc chắn rằng bạn đã nhập thông tin chính xác về hệ thống mà bạn đang muốn chuyển đổi. Tiền tố đầu mỗi tên bảng dữ liệu mặc định cho <strong>%1$s</strong> là <strong>%2$s</strong>.',
	'DEV_NO_TEST_FILE'			=> 'Không có giá trị nào được xác định cho biến <strong>test_file</strong> của gói thành phần chức năng chuyển đổi. Nếu bạn là người sử dụng gói thành phần chức năng chuyển đổi này, bạn không nên xem lỗi này, hãy báo cáo lỗi này cho tác giả của gói thành phần chức năng chuyển đổi. Còn nếu bạn là tác giả của gói thành phần chức năng chuyển đổi này, bạn phải xác định tên của một tập tin tồn tại trong thư mục nguồn của hệ thống để kiểm tra chính xác đường dẫn hệ thống.',
	'DIRECTORIES_AND_FILES'		=> 'Thư mục và tập tin cài đặt',
	'DISABLE_KEYS'				=> 'Loại vô hiệu',
	'DLL_FIREBIRD'				=> 'Firebird',
	'DLL_FTP'					=> 'Hỗ trợ FTP [ Cài đặt ]',
	'DLL_GD'					=> 'Hỗ trợ thư viện đồ hoạ GD [ Mã xác nhận ]',
	'DLL_MBSTRING'				=> 'Hỗ trợ loại ký tự Multi-byte',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ qua ODBC',
	'DLL_MSSQLNATIVE'			=> 'MSSQL Server 2005+ [ Native ]',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL với phần mở rộng MySQLi',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL 7.x/8.x',
	'DLL_SQLITE'				=> 'SQLite',
	'DLL_XML'					=> 'Hỗ trợ XML [ Jabber ]',
	'DLL_ZLIB'					=> 'Hỗ trợ chế độ nén zlib [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'Tải về tập tin cấu hình',
	'DL_CONFIG_EXPLAIN'			=> 'Bạn có thể tải về toàn bộ tập tin cấu hình <code>config.php</code> về máy tính của mình. Sau đó bạn cần phải tự mình tải lên tập tin này lên hệ thống thay thế cho tập tin <code>config.php</code> hiện có trong thư mục chính của hệ thống. Hãy nhớ tải lên tập tin này trong định dạng ASCII. Xem tài liệu hướng dẫn của ứng dụng FTP mà bạn đang sử dụng nếu bạn không biết về loại định dạng này. Sau khi bạn đã tải lên xong tập tin <code>config.php</code>, hãy bấm vào nút “Hoàn tất” để chuyển đến bước kế tiếp.',
	'DL_DOWNLOAD'				=> 'Tải về',
	'DONE'						=> 'Hoàn tất',

	'ENABLE_KEYS'				=> 'Đang bật lại những loại bị vô hiệu. Quá trình này có thể mất nhiều thời gian.',

	'FILES_OPTIONAL'			=> 'Thư mục và tập tin tuỳ chọn',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>Tuỳ chọn</strong> - Những thư mục, tập tin hay thiết lập cấp phép này không bắt buộc. Công cụ cài đặt của hệ thống sẽ sử dụng các phương pháp khác nhau để tạo ra chúng nếu như chúng không tồn tại hoặc không thể ghi được trên máy chủ. Tuy nhiên, nếu có những thứ này sẽ đẩy nhanh quá trình cài đặt.',
	'FILES_REQUIRED'			=> 'Thư mục và tập tin',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Yêu cầu bắt buộc</strong> - Để có thể sử dụng các chức năng đã được xây dựng, hệ thống phpBB cần phải được phép truy nhập hoặc ghi tập tin đến các thư mục và tập tin của hệ thống. Nếu bạn nhìn thấy thông báo “Không tìm thấy”, bạn cần phải tạo hay tải lên lại những thư mục và tập tin tương ứng. Nếu bạn nhìn thấy thông báo “Không thể ghi”, bạn cần phải thay đổi lại thiết lập cấp phép trên máy chủ cho các thư mục hay tập tin tương ứng.',
	'FILLING_TABLE'				=> 'Điền vào bảng dữ liệu <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Bảng dữ liệu điền vào',

	'FIREBIRD_DBMS_UPDATE_REQUIRED'		=> 'phpBB không còn hỗ trợ Firebird/Interbase cũ hơn phiên bản 2.1. Hãy nâng cấp phiên bản Firebird lên ít nhất là phiên bản 2.1.0 trước khi thực hiện tiếp việc cập nhật.',

	'FINAL_STEP'				=> 'Thực thi bước cuối cùng',
	'FORUM_ADDRESS'				=> 'Địa chỉ hệ thống',
	'FORUM_ADDRESS_EXPLAIN'		=> 'Đây là địa chỉ URL của hệ thống, ví dụ như <samp>http://www.example.com/phpBB3/</samp>. Nếu bạn nhập vào một địa chỉ trong phần này và không để trống, mọi trường hợp của địa chỉ này sẽ được thay thế bằng địa chỉ hệ thống mới trong các bài biết, tin nhắn và chữ ký đính kèm của thành viên.',
	'FORUM_PATH'				=> 'Đường dẫn hệ thống',
	'FORUM_PATH_EXPLAIN'		=> 'Đường dẫn đến thư mục chính cài đặt hệ thống phpBB này trên máy chủ của bạn',
	'FOUND'						=> 'Đã tìm thấy',
	'FTP_CONFIG'				=> 'Chuyển tập tin cầu hình bằng FTP',
	'FTP_CONFIG_EXPLAIN'		=> 'Hệ thống đã xác định sự tồn tại của gói thành phần chức năng FTP trên máy chủ của bạn. Bạn có thể chọn cài đặt với tập tin cấu hình <code>config.php</code> của mình thông qua phương pháp này. Bạn sẽ cần phải cung cấp thông tin về FTP trong phần bên dưới. Hãy nhớ tên đăng nhập và mật khẩu kết nối đến máy chủ FTP của bạn. Nếu không nhớ, bạn có thể yêu cầu nhà cung cấp dịch vụ lưu trữ Web của mình gửi lại cho bạn những thông tin này.',
	'FTP_PATH'					=> 'Đường dẫn FTP',
	'FTP_PATH_EXPLAIN'			=> 'Đây là đường dẫn đến thư mục chính cài đặt hệ thống phpBB, ví dụ như <samp>htdocs/phpBB3/</samp>.',
	'FTP_UPLOAD'				=> 'Tải lên',

	'GPL'						=> 'Bản quyền GNU-GPL (General Public License)',

	'INITIAL_CONFIG'				=> 'Cấu hình đơn giản',
	'INITIAL_CONFIG_EXPLAIN'		=> 'Chương trình cài đặt xác định máy chủ của bạn có thể sử dụng hệ thống phpBB. Bạn cần phải cung cấp cho hệ thống biết một vài thông tin xác định bên dưới. Nêu bạn không biết làm thế nào để kết nối đến cơ sở dữ liệu của mình, hãy liên hệ trước tiên đến nhà cung cấp dịch vụ lưu trữ Web của bạn hoặc tìm kiếm sự giúp đỡ trong các diễn đàn hỗ trợ phpBB. Khi nhập vào thông tin, hãy chắc chắn bạn đã kiểm tra hoàn toàn những thông tin này trước khi tiếp tục quá trình cài đặt.',
	'INSTALL_CONGRATS'				=> 'Xin chúc mừng!',
	'INSTALL_CONGRATS_EXPLAIN'		=> '
		<p>Bạn đã cài đặt thành công hệ thống phpBB %1$s. Ngay bây giờ, bạn có hai tùy chọn để quyết định sử dụng bản cài đặt phpBB3 mà mình mới vừa hoàn tất như thế nào:</p>
		<h2>Chuyển đổi dữ liệu hiện có từ một hệ thống sang bàn cài đặt phpBB3 mới cài này</h2>
		<p>Công cụ phpBB Unified Convertor Framework hỗ trợ việc chuyển đổi dữ liệu từ bản cài đặt phpBB 2.0.x hoặc các loại hệ thống khác không phải phpBB sang phiên bản phpBB3. Nếu bạn muốn chuyển đổi dữ liệu từ một hệ thống hiện có, hãy vui lòng <a href="%2$s">tiến hành việc chuyển đổi</a>.</p>
		<h2>Trực tiếp sử dụng bản cài đặt phpBB3 mới này!</h2>
		<p>Bấm vào nút bên dưới, bạn sẽ được chuyển đến bảng điều khiển dành cho quản trị viên của mình. Đa số mỗi tùy chọn trong bảng điều khiển này đều có hướng dẫn giải thích cho bạn công dụng của chúng. Hãy nhớ rằng bạn luôn được hỗ trợ trực tuyến từ <a href="http://www.phpbb.com/support/documentation/3.0/">tài liệu hướng dẫn sử dụng</a> và <a href="http://www.phpbb.com/community/viewforum.php?f=46">diễn đàn hỗ trợ</a>, xem tập tin <a href="%3$s">README</a> để biết thêm thông tin.</p><p><strong>Ngay bây giờ, bạn hãy vui lòng xoá, di chuyển hoặc đổi tên thư mục <samp>install</samp> trước khi bạn bắt đầu sử dụng hệ thống này. Nếu thư mục này vẫn còn hiện hữu, bạn sẽ chỉ có thể truy cập được vào bảng điều khiển dành cho quản trị viên.</strong></p>',
	'INSTALL_INTRO'					=> 'Chào mừng bạn đã đến với công cụ cài đặt',

	'INSTALL_INTRO_BODY'		=> 'Với công cụ này, bạn sẽ bắt đầu quá trình cài đặt hệ thống phpBB trên máy chủ của mình.</p><p>Để bắt đầu cài đặt, bạn sẽ phải cung cấp cho công cụ cài đặt những thông tin về cơ sở dữ liệu của bạn. Nếu bạn không biết thông tin về cơ sở dữ liệu của mình, hãy vui lòng liên hệ với nhà cung cấp dịch vụ lưu trữ Web của bạn và yêu cầu họ cung cấp cho bạn. Bạn sẽ không thể tiếp tục cài đặt mà không có những thông tin này. Bạn cần biết:</p>

	<ul>
		<li>Loại cơ sở dữ liệu - hệ quản trị cơ sở dữ liệu mà bạn sẽ sử dụng cho hệ thống.</li>
		<li>Tên miền hoặc địa chỉ DSN của máy chủ cơ sở dữ liệu - địa chỉ của máy chủ cơ sở dữ liệu.</li>
		<li>Cổng máy chủ cơ sở dữ liệu - cổng của máy chủ cơ sở dữ liệu đang chạy. Đa số khi cài đặt thì mục này không cần thiết.</li>
		<li>Tên cơ sở dữ liệu - tên của gói cơ sở dữ liệu mà bạn đang dùng để cài đặt trên máy chủ.</li>
		<li>Tên đăng nhập và mật khẩu kết nối đến cơ sở dữ liệu - thông tin đăng nhập để truy cập vào cơ sở dữ liệu.</li>
	</ul>

	<p><strong>Lưu ý:</strong> Nếu bạn cài đặt hệ thống với SQLite, bạn nên nhập vào đường dẫn đầy đủ đến tập tin cơ sở dữ liệu của bạn trong phần thông tin về địa chỉ DSN và để trống phần tên đăng nhập và mật khẩu kết nối đến cơ sở dữ liệu. Vì lý do bảo mật, bạn phải chắc chắn rằng tập tin cơ sở dữ liệu lưu trữ trong thư mục trên máy chủ đó không thể truy cập được từ trình duyệt.</p>

	<p>Hệ thống phpBB hỗ trợ các hệ quản trị cơ sở dữ liệu dưới đây:</p>
	<ul>
		<li>MySQL 3.23 trở lên (hỗ trợ MySQLi)</li>
		<li>PostgreSQL 7.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>Firebird 2.0+</li>
		<li>MSSQL Server 2000 trở lên (trực tiếp hoặc thông qua ODBC)</li>
		<li>MS SQL Server 2005 trở lên (native)</li>
		<li>Oracle</li>
	</ul>
	
	<p>Trong những hệ quản trị cơ sở dữ liệu được hỗ trợ bên trên, chỉ những loại nào có sẵn trên máy chủ của bạn mới được hiển thị trong tùy chọn khi cài đặt.',
	'INSTALL_INTRO_NEXT'			=> 'Để bắt đầu việc cài đặt, bạn hãy bấm vào nút chấp nhận bên dưới.',
	'INSTALL_LOGIN'					=> 'Đăng nhập',
	'INSTALL_NEXT'					=> 'Bước kế tiếp',
	'INSTALL_NEXT_FAIL'				=> 'Có một vài thao tác kiểm tra thất bại và bạn nên giải quyết những rắc rối này trước khi chuyển sang bước kế tiếp. Những kiểm tra thất bại này có thể dẫn đến việc cài đặt hệ thống không thể hoàn tất hay cài đặt không trọn vẹn.',
	'INSTALL_NEXT_PASS'				=> 'Tất cả những kiểm tra đơn giản đều hợp lệ và bạn có thể chuyển sang bước kế tiếp trong quá trình cài đặt. Nếu bạn đã thay đổi bất kỳ thiết lập cấp phép, gói thành phần chức năng… nào và bạn muốn kiểm tra lại cho chắc chắn thì bạn có thể thực hiện lại việc kiểm tra.',
	'INSTALL_PANEL'					=> 'Bảng điều khiển cài đặt',
	'INSTALL_SEND_CONFIG'			=> 'Thật đáng tiếc, hệ thống không thể ghi những thông tin cấu hình cài đặt đến tập tin <code>config.php</code>. Điều này xảy ra bởi vì tập tin này không tồn tại hoặc không được cấp phép có thể ghi trên máy chủ. Các tuỳ chọn được liệt kê bên dưới sẽ giúp bạn hoàn tất việc cài đặt của mình với tập tin cấu hình <code>config.php</code> này.',
	'INSTALL_START'					=> 'Bắt đầu cài đặt',
	'INSTALL_TEST'					=> 'Kiểm tra lại',
	'INST_ERR'						=> 'Lỗi cài đặt',	
	'INST_ERR_DB_CONNECT'			=> 'Không thể kết nối đến cơ sở dữ liệu, bạn hãy xem thông báo lỗi bên dưới để biết nguyên nhân.',
	'INST_ERR_DB_FORUM_PATH'		=> 'Tập tin cơ sở dữ liệu bạn vừa chọn đang nằm trong thư mục cài đặt của hệ thống. Bạn không nên để tập tin này trong các thư mục của máy chủ.',
	'INST_ERR_DB_INVALID_PREFIX'	=> 'Tiền tố đầu của cơ sở dữ liệu không hợp lệ, nó phải bắt đầu bằng một ký tự và sau đó chỉ chứa các ký tự, con số và dấu gạch dưới _.',
	'INST_ERR_DB_NO_ERROR'			=> 'Không có thông báo lỗi nào được đưa ra.',
	'INST_ERR_DB_NO_MYSQLI'			=> 'Phiên bản MySQL được cài đặt trên máy chủ không tương thích với tuỳ chọn “MySQL với phần mở rộng MySQLi” mà bạn vừa chọn. Hãy thử thay thế bằng tuỳ chọn “MySQL” để tiếp tục.',
	'INST_ERR_DB_NO_SQLITE'			=> 'Phiên bản phần mở rộng SQLite được cài đặt trên máy chủ đã quá cũ. Nó phải được nâng cấp ít nhất đến phiên bản 2.8.2 để sử dụng với hệ thống này.',
	'INST_ERR_DB_NO_ORACLE'			=> 'Phiên bản Oracle được cài đặt trên máy chủ yêu cầu bạn phải thiết lập thông số <var>NLS_CHARACTERSET</var> thành <var>UTF-8</var>. Bạn hãy vui lòng nâng cấp hệ thống lên phiên bản 9.2+ hoặc chỉ cần thay đổi lại thông số trên.',
	'INST_ERR_DB_NO_FIREBIRD'		=> 'Phiên bản Firebird được cài đặt trên máy chủ cũ hơn phiên bản 2.0, bạn hãy vui lòng nâng cấp hệ thống lên phiên bản mới hơn.',
	'INST_ERR_DB_NO_FIREBIRD_PS'	=> 'Cơ sở dữ liệu bạn vừa chọn để sử dụng cho Firebird có một trang kích thước nhỏ hơn 8192, hệ thống yêu cầu ít nhất phải là 8192.',
	'INST_ERR_DB_NO_POSTGRES'		=> 'Cơ sở dữ liệu bạn vừa chọn không được tạo ra trong chế độ mã hóa <var>UNICODE</var> hoặc <var>UTF-8</var>. Bạn hãy vui lòng cài đặt lại với một cơ sở dữ liệu được mã hóa theo <var>UNICODE</var> hoặc <var>UTF-8</var>.',
	'INST_ERR_DB_NO_NAME'			=> 'Bạn chưa nhập tên cơ sở dữ liệu.',	
	'INST_ERR_EMAIL_INVALID'		=> 'Địa chỉ Email bạn vừa nhập không hợp lệ.',
	'INST_ERR_EMAIL_MISMATCH'		=> 'Địa chỉ Email bạn vừa nhập không phù hợp.',
	'INST_ERR_FATAL'				=> 'Lỗi cài đặt nghiêm trọng',
	'INST_ERR_FATAL_DB'				=> 'Một lỗi cơ sở dữ liệu nghiêm trọng và không thể phục hồi lại đã xảy ra. Lỗi này xảy ra bởi vì bạn đã xác định tên đăng nhập cơ sở dữ liệu không có quyền hạn để sử dụng các lệnh <code>CREATE TABLES</code> hay <code>INSERT</code> dữ liệu… Nhiều thông tin hơn về lỗi này được cung cấp bên dưới. Hãy liên hệ trước tiên với nhà cung cấp dịch vụ lưu trữ Web của bạn hoặc các diễn đàn hỗ trợ phpBB để nhận được nhiều sự giúp đỡ hơn.',
	'INST_ERR_FTP_PATH'				=> 'Không thể thay đổi thư mục đã cung cấp, bạn hãy vui lòng kiểm tra lại đường dẫn.',
	'INST_ERR_FTP_LOGIN'			=> 'Không thể kết nối đến máy chủ FTP, bạn hãy vui lòng kiểm tra lại tên đăng nhập và mật khẩu kết nối.',
	'INST_ERR_MISSING_DATA'			=> 'Bạn phải điền đầy đủ thông tin trong phần này.',
	'INST_ERR_NO_DB'				=> 'Không thể nạp gói thành phần chức năng PHP cho loại cơ sở dữ liệu đã chọn.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Mật khẩu bạn vừa nhập không phù hợp.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Mật khẩu bạn vừa nhập quá dài. Mật khẩu không được phép vượt quá <strong>30</strong> ký tự.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Mật khẩu bạn vừa nhập quá ngắn. Mật khẩu không được phép ít hơn <strong>6</strong> ký tự.',
	'INST_ERR_PREFIX'				=> 'Tiền tố đầu mỗi tên bảng dữ liệu bạn vừa xác định đã được sử dụng, hãy vui lòng chọn một tên khác.',
	'INST_ERR_PREFIX_INVALID'		=> 'Tiền tố đầu mỗi tên bảng dữ liệu bạn vừa xác định không hợp lệ đối với cơ sở dữ liệu của bạn. Bạn hãy vui lòng chọn một tên khác hoặc gỡ bỏ một vài ký tự không được phép sử dụng như là dấu nối (-).',
	'INST_ERR_PREFIX_TOO_LONG'		=> 'Tiền tố đầu mỗi tên bảng dữ liệu bạn vừa xác định quá dài. Số ký tự tối đa được phép sử dụng là <strong>%d</strong> ký tự.',
	'INST_ERR_USER_TOO_LONG'		=> 'Tên thành viên bạn vừa nhập quá dài. Số ký tự tối đa được phép sử dụng là <strong>20</strong> ký tự.',
	'INST_ERR_USER_TOO_SHORT'		=> 'Tên thành viên bạn vừa nhập quá ngắn. Số kú tự tối thiểu phải sử dụng là <strong>3</strong> ký tự.',
	'INVALID_PRIMARY_KEY'			=> 'Khoá chính không hợp lệ: %s',

	'LONG_SCRIPT_EXECUTION'		=> 'Lưu ý rằng thời gian để thực thi điều này có thể rất lâu... Xin bạn vui lòng đừng ngừng công cụ này lại.',

	// mbstring
	'MBSTRING_CHECK'						=> 'Kiểm tra phần mở rộng <samp>mbstring</samp>',
	'MBSTRING_CHECK_EXPLAIN'				=> '<strong>Yêu cầu bắt buộc</strong> - <samp>mbstring</samp> là một phần mở rộng của PHP có nhiệm vụ cung cấp các chức năng chuỗi Multibyte. Một vài chức năng của <samp>mbstring</samp> không tương thích với hệ thống phpBB và phải được vô hiệu.',
	'MBSTRING_FUNC_OVERLOAD' 				=> 'Chức năng nạp',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN' 		=> 'Biến <var>mbstring.func_overload</var> phải được thiết lập là <strong>0</strong> hoặc <strong>4</strong>.',
	'MBSTRING_ENCODING_TRANSLATION' 		=> 'Mã hóa các ký tự không hiển thị',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN' => 'Biến <var>mbstring.encoding_translation</var> phải được thiết lập là <strong>0</strong>.',
	'MBSTRING_HTTP_INPUT' 					=> 'Chuyển đổi các ký tự nhập vào từ HTTP',
	'MBSTRING_HTTP_INPUT_EXPLAIN' 			=> 'Biến <var>mbstring.http_input</var> phải được thiết lập <samp>bỏ qua</samp>.',
	'MBSTRING_HTTP_OUTPUT' 					=> 'Chuyển đổi các ký tự xuất ra từ HTTP',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN' 			=> 'Biến <var>mbstring.http_output</var> phải được thiết lập <samp>bỏ qua</samp>.',

	'MAKE_FOLDER_WRITABLE'		=> 'Hãy chắc chắn rằng thư mục này có tồn tại trong hệ thống và có thể ghi được trên máy chủ rồi thử lại:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Hãy chắc chắn rằng những thư mục này có tồn tại trong hệ thống và có thể ghi được trên máy chủ rồi thử lại:<br />»<strong>%s</strong>.',

	'MYSQL_SCHEMA_UPDATE_REQUIRED'	=> 'Sơ đồ CSDL MySQL của bạn cho phpBB đã quá cũ. phpBB phát hiện ra sơ đồ của bạn dành cho MySQL 3.x/4.x, nhưng server đang dùng MySQL %2$s.<br /><strong>Trước khi bạn tiếp tục nâng cấp, bạn cần nâng cấp sơ đồ này.</strong><br /><br />Hãy xem thêm <a href="http://www.phpbb.com/kb/article/doesnt-have-a-default-value-errors/">Nền tảng kiến thức về việc nâng cấp sơ đồ MySQL</a>. Nếu bạn gặp vấn đề, hãy sử dụng <a href="http://www.phpbb.com/community/viewforum.php?f=46">diễn đàn hỗ trợ của phpBB</a>.',

	'NAMING_CONFLICT'		=> 'Xung đột trong việc đặt tên: “%s” và “%s” đều là tên không được phép sử dụng<br /><br />%s',
	'NEXT_STEP'				=> 'Chuyển sang bước kế tiếp',
	'NOT_FOUND'				=> 'Không thể tìm',
	'NOT_UNDERSTAND'		=> 'Không hiểu %s #%d, bảng dữ liệu “%s” (“%s”)',
	'NO_CONVERTORS'			=> 'Không chuyển đổi nào có sẵn đề sử dụng.',
	'NO_CONVERT_SPECIFIED'	=> 'Không chuyển đổi nào được xác định.',
	'NO_LOCATION'			=> 'Không thể chọn thư mục định vị. Nếu bạn chắc chắn Imagemagick đã được cài đặt trên máy chủ, bạn có thể xác định lại đường dẫn sau trong bảng điều khiển của quản trị viên.',
	'NO_TABLES_FOUND'		=> 'Không tìm thấy bảng dữ liệu nào.',

	'OVERVIEW_BODY'		=> 'Chào mừng bạn đã sử dụng phiên bản RC (Release Candidate) phát hành công cộng của phpBB 3.0.0 kể từ sau thế hệ phiên bản phpBB 2.x.x! Bản phát hành này dự định dành cho các thành viên có kiến thức sâu rộng về lập trình để giúp đỡ chúng tôi phát hiện các lỗi bug và các vấn đề nan giải còn tồn tại trong hệ thống.</p><p>Bạn hãy vui lòng đọc qua <a href="../docs/INSTALL.html">tài liệu cài đặt của chúng tôi</a> để biết thêm nhiều thông tin hơn về việc cài đặt phiên bản phpBB3</p><p><strong style="text-transform: uppercase;">Lưu ý:</strong> Bản phát hành này <strong style="text-transform: uppercase;">vẫn chưa phải là bản hoàn chỉnh cuối cùng</strong> của phpBB 3.0.0. Có thể bạn sẽ muốn chờ đợi cho đến khi bản hoàn chỉnh cuối cùng ra mắt để sử dụng chính thức.</p><p>Việc cài đặt hệ thống này sẽ giúp bạn làm quen trong việc cài đặt phiên bản phpBB3 mới, chuyển đổi từ một hệ thống phần mềm khác sang phiên bản phpBB3 hay cập nhật/nâng cấp lên phiên bản mới nhất. Để biết thêm nhiều thông tin về mỗi tuỳ chọn cài đặt, bạn hãy chọn trong menu bên trên.',

	'PCRE_UTF_SUPPORT'					=> 'Hỗ trợ UTF-8 trong PCRE',
	'PCRE_UTF_SUPPORT_EXPLAIN'			=> 'Hệ thống phpBB sẽ <strong>không hoạt động</strong> được nếu bản cài đặt PHP trên máy chủ của bạn không được biên dịch với phần mở rộng PCRE có hỗ trợ UTF-8.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'Hàm PHP <code>getimagesize()</code> có thể sử dụng',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Yêu cầu bắt buộc</strong> - Để các chức năng của hệ thống phpBB hoạt động chính xác, hàm PHP <code>getimagesize()</code> cần phải được phép sử dụng trên máy chủ.',
	'PHP_OPTIONAL_MODULE'				=> 'Gói thành phần chức năng tuỳ chọn',
	'PHP_OPTIONAL_MODULE_EXPLAIN'		=> '<strong>Tuỳ chọn</strong> - Những gói thành phần chức năng hay ứng dụng này đều hoàn toàn tuỳ chọn. Tuy nhiên, nếu chúng được cài đặt đầy đủ trên máy chủ, bạn sẽ sử dụng được đầy đủ tất cả các chức năng của hệ thống.',
	'PHP_SUPPORTED_DB'					=> 'Loại cơ sở dữ liệu được hỗ trợ',
	'PHP_SUPPORTED_DB_EXPLAIN'			=> '<strong>Yêu cầu bắt buộc</strong> - Máy chủ của bạn ít nhất phải hỗ trợ một loại cơ sở dữ liệu tương thích với PHP. Nếu không có bất cứ gói thành phần chức năng cơ sở dữ liệu nào có sẵn để sử dụng, bạn nên liên hệ với nhà cung cấp dịch vụ lưu trữ Web của mình hoặc xem lại tài liệu cài đặt PHP để tìm thấy lời khuyên.',
	'PHP_REGISTER_GLOBALS'				=> 'Thiết lập PHP <var>register_globals</var> đã bị vô hiệu',
	'PHP_REGISTER_GLOBALS_EXPLAIN'		=> 'Hê thống sẽ vẫn hoạt động nếu thiết lập này được bật, nhưng nếu có thể, chúng tôi khuyên bạn nên tắt thiết lập PHP <var>register_globals</var> vì một số nguyên nhân bảo mật.',
	'PHP_SAFE_MODE'						=> 'Chế độ an toàn',
	'PHP_SETTINGS'						=> 'Phiên bản PHP và thiết lập',
	'PHP_SETTINGS_EXPLAIN'				=> '<strong>Yêu cầu bắt buộc</strong> - Bạn phải cài đặt phiên bản PHP ít nhất là <strong>4.3.3</strong> trở lên để sử dụng được hệ thống phpBB. Nếu <var>safe mode</var> được hiển thị bên dưới thì cũng có nghĩa PHP trên máy chủ của bạn đang chạy trong chế độ này. Điều này sẽ hạn chế việc quản trị hệ thống từ xa và những chức năng tương tự.',
	'PHP_URL_FOPEN_SUPPORT'				=> 'Thiết lập PHP <var>allow_url_fopen</var> đã được bật',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'		=> '<strong>Tùy chọn</strong> - Thiết lập PHP này là tùy chọn, tuy nhiên chắc chắn rằng các chức năng trong hệ thống phpBB như liên kết hình đại diện từ website khác sẽ không thể hoạt động được nếu thiết lập này bị vô hiệu.',
	'PHP_VERSION_REQD'					=> 'Phiên bản PHP >= 4.3.3',
	'POST_ID'							=> 'Số ID bài viết',
	'PREFIX_FOUND'						=> 'Tiền tố đầu mỗi tên bảng dữ liệu <strong>%s</strong> mà bạn vừa chọn đã được sử dụng trong gói cơ sở dữ liệu này.',
	'PREPROCESS_STEP'					=> 'Đang thực thi quá trình kiểm tra trước các <var>function/query</var>',
	'PRE_CONVERT_COMPLETE'				=> 'Tất cả các bước kiểm tra trước việc chuyển đổi đã hoàn tất. Bây giờ bạn thực sự bắt đầu việc chuyển đổi hệ thống. Lưu ý rằng bạn có thể phải tự mình điều chỉnh lại một vài thứ. Sau khi chuyển đổi, bạn hãy kiểm tra lại cẩn thận những thiết lập cấp phép đã được chỉ định, tạo lại chỉ mục tìm kiếm mới cho hệ thống của bạn nếu cần thiết và bạn cũng phải chắc chắn rằng những tập tin đã được sao chép chính xác, ví dụ như những tập tin hình đại diện và biểu tượng vui.',
	'PROCESS_LAST'						=> 'Tiến hành lệnh thực thi trước',

	'REFRESH_PAGE'				=> 'Nạp lại trang để tiếp tục việc chuyển đổi',
	'REFRESH_PAGE_EXPLAIN'		=> 'Nếu bạn bật tùy chọn này, công cụ chuyển đổi sẽ nạp lại trang để tiếp tục quá trình chuyển đổi hệ thống sau khi hoàn thành xong một bước. Nếu đây là lần đầu tiên bạn thực hiện việc chuyển đổi hệ thống nhằm mục đích kiểm tra thử và xác định bất kỳ lỗi nào có thể xảy ra trước, chúng tôi đề nghị bạn đừng nên bật tùy chọn này.',
	'REQUIREMENTS_TITLE'		=> 'Yêu cầu tương thích khi cài đặt',
	'REQUIREMENTS_EXPLAIN'		=> 'Trước khi tiến hành việc cài đặt hệ thống phpBB, chương trình cài đặt sẽ thực hiện một số kiểm tra về cấu hình và các tập tin trên máy chủ của bạn để chắc chắn rằng máy chủ của bạn có thể cài đặt và sử dụng được hệ thống phpBB. Hãy xem kĩ tất cả các kết quả kiểm tra và đừng tiến hành cài đặt cho đến khi các kiểm tra bắt buộc đều hợp lệ. Nếu bạn muốn kích hoạt bất kỳ gói thành phần chức năng nào tùy thuộc vào những kiểm tra tuỳ chọn, bạn cũng hãy chắc chắn rằng những kiểm tra tuỳ chọn đó cũng hợp lệ.',
	'RETRY_WRITE'				=> 'Cố gắng tạo lại tập tin cấu hình',
	'RETRY_WRITE_EXPLAIN'		=> 'Nếu muốn, bạn có thể thay đổi lại thiết lập cấp phép cho tập tin cấu hình <code>config.php</code> để hệ thống thực hiện việc tạo tập tin này. Sau khi thay đổi xong thiết lập cấp phép, bạn hãy bấm vào nút <strong>Cố gắng tạo lại tập tin cấu hình</strong> bên dưới để thử lại. Hãy nhớ trả lại những thiết lập cấp phép ban đầu cho tập tin cấu hình <code>config.php</code> sau khi việc cài đặt hệ thống hoàn tất.',

	'SCRIPT_PATH'						=> 'Đường dẫn',
	'SCRIPT_PATH_EXPLAIN'				=> 'Đường dẫn đến thư mục cài đặt hệ thống phpBB, xác định bởi tên miền, ví dụ như <samp>/phpBB3</samp>.',
	'SELECT_LANG'						=> 'Chọn gói ngôn ngữ',
	'SERVER_CONFIG'						=> 'Cấu hình máy chủ',
	'SEARCH_INDEX_UNCONVERTED'			=> 'Chỉ mục tìm kiếm không được chuyển đổi',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'Những chỉ mục tìm kiếm trong hệ thống cũ của bạn không được chuyển đổi. Chức năng tìm kiếm sẽ vô dụng nếu như không có chỉ mục tìm kiếm được lập. Để tạo lại chỉ mục tìm kiếm mới, bạn hãy chuyển đến bảng điều khiển của quản trị viên, chọn “Bảo trì” trong menu chính bên trên và sau đó chọn vào “Chỉ mục tìm kiếm” từ menu con bên trái.',
	'SOFTWARE'							=> 'Phần mềm hệ thống',
	'SPECIFY_OPTIONS'					=> 'Xác định tuỳ chọn chuyển đổi',
	'STAGE_ADMINISTRATOR'				=> 'Thông tin về quản trị viên',
	'STAGE_ADVANCED'					=> 'Thiết lập nâng cao',
	'STAGE_ADVANCED_EXPLAIN'			=> 'Những thiết lập trong trang này chỉ thực sự cần thiết nếu bạn muốn thay đổi những thiết lập mặc định trong hệ thống. Nếu bạn không chắc chắn, bạn có thể chuyển sang bước kế tiếp vì những thiết lập này có thể thay đổi lại trong bảng điều khiển của quản trị viên.',
	'STAGE_CONFIG_FILE'					=> 'Tập tin cấu hình',
	'STAGE_CREATE_TABLE'				=> 'Tạo bảng dữ liệu cho cơ sở dữ liệu',
	'STAGE_CREATE_TABLE_EXPLAIN'		=> 'Những bảng dữ liệu trong cơ sở dữ liệu được sử dụng bởi hệ thống phpBB đã được tạo thành công và đã được nhập vào những thiết lập mặc định ban đầu. Hãy chuyển sang bước kế tiếp để hoàn tất việc cài đặt hệ thống phpBB.',	
	'STAGE_DATABASE'					=> 'Thiết lập cơ sở dữ liệu',
	'STAGE_FINAL'						=> 'Bước cuối cùng',
	'STAGE_INTRO'						=> 'Giới thiệu',
	'STAGE_IN_PROGRESS'					=> 'Quá trình chuyển đổi đang được tiến hành',
	'STAGE_REQUIREMENTS'				=> 'Yêu cầu',
	'STAGE_SETTINGS'					=> 'Thiết lập',
	'STARTING_CONVERT'					=> 'Bắt đầu tiến hành chuyển đổi',
	'STEP_PERCENT_COMPLETED'			=> 'Bước <strong>%d</strong> trong tổng số <strong>%d</strong> bước',
	'SUB_INTRO'							=> 'Giới thiệu',
	'SUB_LICENSE'						=> 'Bản quyền',
	'SUB_SUPPORT'						=> 'Hỗ trợ',
	'SUCCESSFUL_CONNECT'				=> 'Kết nối thành công',
	'SUPPORT_BODY'		=> 'Trong suốt quá trình sử dụng phiên bản RC (Release Candidate) này của phpBB 3.0.0, bạn có thể được hỗ trợ đầy đủ tại <a href="http://www.phpbb.com/community/viewforum.php?f=46">diễn đàn hỗ trợ phpBB 3.0.x</a>. Chúng tôi sẽ giải đáp các thắc mắc và vấn đề thường gặp trong việc cài đặt, các rắc rối trong việc cấu hình hệ thống và chuyển đổi hệ thống cũng như hỗ trợ giải quyết các rắc rối thường gặp liên quan đến các lỗi bug. Chúng tôi cũng cho phép bạn thảo luận về các gói MOD, mã tùy biến và giao diện bổ sung.</p><p>Để tìm kiếm thêm sự giúp đỡ, bạn hãy tham khảo <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/">tài liệu cài đặt và cấu hình nhanh</a> cũng như <a href="http://www.phpbb.com/support/documentation/3.0/">tài liệu trực tuyến</a> của chúng tôi.</p><p>Để chắc chắn bạn luôn sử dụng phiên bản mới nhất và cập nhật những thông tin mới nhất, tại sao bạn không tham gia vào <a href="http://www.phpbb.com/support/">danh sách tin tức qua Email</a> của chúng tôi',
	'SYNC_FORUMS'			=> 'Bắt đầu đồng bộ hóa các chuyên mục',
	'SYNC_POST_COUNT'		=> 'Đang đồng bộ <var>post_counts</var>',
	'SYNC_POST_COUNT_ID'	=> 'Đang đồng bộ <var>post_counts</var> từ <var>mục</var> %1$s đến %2$s.',
	'SYNC_TOPICS'			=> 'Bắt đầu đồng bộ hóa các chủ đề',
	'SYNC_TOPIC_ID'			=> 'Đang đồng bộ những chủ đề có <var>topic_id</var> từ <strong>%1$s</strong> đến <strong>%2$s</strong>.',

	'TABLES_MISSING'		=> 'Không thể tìm thấy những bảng dữ liệu sau<br />» <strong>%s</strong>.',
	'TABLE_PREFIX'			=> 'Tiền tố trước tên của mỗi bảng dữ liệu',
	'TABLE_PREFIX_EXPLAIN'	=> 'Tiền tố này phải bắt đầu bằng một ký tự và sau đó chỉ chứa các ký tự, con số và dấu gạch dưới _.',
	'TABLE_PREFIX_SAME'		=> 'Tiền tố trước tên của mỗi bảng dữ liệu đã được sử dụng bởi hệ thống mà bạn đang muốn chuyển đổi sang phpBB.<br />» Tiền tố đã được xác định là “%s”.',
	'TESTS_PASSED'			=> 'Kiểm tra hợp lệ',
	'TESTS_FAILED'			=> 'Kiểm tra thất bại',

	'UNABLE_WRITE_LOCK'			=> 'Không thể ghi tập tin đã khóa.',
	'UNAVAILABLE'				=> 'Không có sẵn',
	'UNWRITABLE'				=> 'Không thể ghi',
	'UPDATE_TOPICS_POSTED'		=> 'Đang tạo thông tin cho các chủ đề đã gửi',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Có một lỗi xảy ra trong khi tạo thông tin cho các chủ đề đã gửi. Bạn có thể thử lại một lần nữa bước này trong bảng điều khiển của quản trị viên sau khi quá trình chuyển đổi hoàn tất.',
	'VERIFY_OPTIONS'			=> 'Đang xác thực các tùy chọn chuyển đổi',
	'VERSION'	=> 'Phiên bản',

	'WELCOME_INSTALL'		=> 'Chào mừng bạn đã đến với chương trình cài đặt hệ thống phpBB',
	'WRITABLE'				=> 'Có thể ghi',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> 'Tất cả các tập tin đã được cập nhật lên phiên bản mới nhất của phpBB. Ngay bây giờ bạn nên <a href="../ucp.php?mode=login">đăng nhập vào hệ thống</a> và kiểm tra lại để đảm bảo mọi thứ đều hoạt động tốt. Bạn cũng đừng quên xóa, đổi tên hay di chuyển thư mục cài đặt của hệ thống!',
	'ARCHIVE_FILE'				=> 'Tập tin gốc được lưu trữ',

	'BACK'				=> 'Quay lại',
	'BINARY_FILE'		=> 'Tập tin nhị phân',
	'BOT'				=> 'Máy tìm kiếm',

	'CHANGE_CLEAN_NAMES'			=> 'Phương pháp sử dụng để chắc chắn rằng một tên thành viên không được sử dụng bởi nhiều người đã được thay đổi lại. Trong hệ thống của bạn có một vài người mà tên thành viên của họ giống nhau khi được so sánh bằng phương pháp mới. Bạn phải xóa hoặc đổi tên thành viên cho những người này để chắc chắn rằng mỗi tên thành viên chỉ được sử dụng bởi một người trước khi bạn tiến hành.',
	'CHECK_FILES'					=> 'Kiểm tra tập tin',
	'CHECK_FILES_AGAIN'				=> 'Kiểm tra lại tập tin',
	'CHECK_FILES_EXPLAIN'			=> 'Trong bước kế tiếp, tất cả các tập tin sẽ được kiểm tra lại một lần nữa trước khi tiến hành cập nhật. Điều này chỉ mất nhiều thời gian nếu đây là lần đầu tiên tập tin được kiểm tra.',
	'CHECK_FILES_UP_TO_DATE'		=> 'Theo như thông tin trong cơ sở dữ liệu của hệ thống, phiên bản phpBB bạn đang sử dụng đã được cập nhật đến phiên bản mới nhất. Bạn có thể tiến hành kiểm tra lại các tập tin để chắc chắn rằng tất cả chúng đã thực sự được cập nhật lên phiên bản mới nhất của phpBB.',
	'CHECK_UPDATE_DATABASE'			=> 'Tiếp tục quá trình cập nhật',
	'COLLECTED_INFORMATION'			=> 'Thông tin về các tập tin đã thu thập được',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'Danh sách bên dưới hiển thị thông tin về các tập tin cần được cập nhật. Hãy vui lòng đọc kỹ thông tin trước mỗi ô trạng thái để xem chúng có ý nghĩa gì và bạn cần phải làm những gì để tiến hành cập nhật thành công cho hệ thống.',
	'COLLECTING_FILE_DIFFS'			=> 'Đang thu thập sự khác nhau trên các tập tin',
	'COMPLETE_LOGIN_TO_BOARD'		=> 'Ngay bây giờ, bạn nên <a href="../ucp.php?mode=login">đăng nhập vào hệ thống của mình</a> và kiểm tra mọi thứ xem đã hoạt động tốt chưa. Bạn cũng đừng quên xóa, đổi tên thay di chuyển thư mục cài đặt của hệ thống!',
	'CONTINUE_UPDATE_NOW'			=> 'Tiếp tục quá trình cập nhật',
	'CONTINUE_UPDATE'				=> 'Tiếp tực quá trình cập nhật',					// Shown after file upload to indicate the update process is not yet finished
	'CURRENT_FILE'					=> 'Tập tin gốc hiện tại',
	'CURRENT_VERSION'				=> 'Phiên bản hiện tại',

	'DATABASE_TYPE'						=> 'Loại cơ sở dữ liệu',
	'DATABASE_UPDATE_INFO_OLD'			=> 'Tập tin cập nhật cơ sở dữ liệu trong thư mục cài đặt là tập tin của phiên bản cũ. Hãy chắc chắn rằng bạn đã tải lên phiên bản chính xác của tập tin này.',
	'DELETE_USER_REMOVE'				=> 'Xóa thành viên và gỡ bỏ những bài viết',
	'DELETE_USER_RETAIN'				=> 'Xóa thành viên nhưng giữ các bài viết lại',
	'DESTINATION'						=> 'Tập tin đến',
	'DIFF_INLINE'						=> 'INLINE-DIFF',
	'DIFF_RAW'							=> 'RAW-UNIFIED-DIFF',
	'DIFF_SEP_EXPLAIN'					=> 'Phần kết thúc tập tin hiện tại / Phần bắt đầu tập tin đã cập nhật mới',
	'DIFF_SIDE_BY_SIDE'					=> 'SIDE-BY-SIDE',
	'DIFF_UNIFIED'						=> 'UNIFIED-DIFF',
	'DO_NOT_UPDATE'						=> 'Đừng cập nhật tập tin này',
	'DONE'								=> 'Hoàn tất',
	'DOWNLOAD'							=> 'Tải về',
	'DOWNLOAD_AS'						=> 'Tải về dưới dạng',
	'DOWNLOAD_UPDATE_METHOD_BUTTON'		=> 'Tải về các tập tin đã hiệu chỉnh (khuyên dùng)',
	'DOWNLOAD_CONFLICTS'				=> 'Tải về các xung đột của tập tin này',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Tìm &lt;&lt;&lt; như là các xung đột',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Tải về các tập tin đã chỉnh sửa được lưu trữ',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Sau khi đã tải về, bạn nên giải nén tập tin được lưu trữ ra. Bạn sẽ tìm thấy những tập tin đã được chỉnh sửa và đây là những tập tin bạn cần phải tự mình tải lên. Hãy tải chúng lên thư mục định vị tương ứng trong thư mục cài đặt hệ thống phpBB. Sau khi hoàn tất quá trình tải các tập tin lên, hãy sử dụng các nút bấm bên dưới để tiến hành kiểm tra sự hợp lệ của các tập tin mà bạn vừa tải.',

	'ERROR'			=> 'Lỗi',
	'EDIT_USERNAME'	=> 'Sửa tên thành viên',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Tập tin đã được cập nhật mới nhất.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Tập tin không được phép so sánh mã nguồn.',
	'FILE_USED'						=> 'Thông tin được sử dụng từ', // Single file
	'FILES_CONFLICT'				=> 'Những tập tin xung đột',
	'FILES_CONFLICT_EXPLAIN'		=> 'Những tập tin bên dưới đã được chỉnh sửa và không còn là những tập tin gốc của hệ thống phpBB phiên bản cũ. Hệ thống phpBB đã xác định rằng những tập tin này sẽ tạo ra xung đột nếu bạn cố gắng nhập chung chúng lại với nhau. Bạn hãy vui lòng kiểm tra lại các xung đột xuất hiện và cố gắng tự mình giải quyết các xung đột đó hoặc tiếp tục việc cập nhật bằng cách lựa chọn phương pháp nhập chung như trên. Nếu bạn tự mình giải quyết các xung đột, hãy kiểm tra lại các tập tin sau khi bạn đã chỉnh sửa chúng. Bạn cũng có thể lựa chọn phương pháp nhập chung mà mình thích sử dụng cho riêng mỗi tập tin. Phương pháp đầu tiên sẽ cho kết quả một tập tin mà trong đó những dòng mã nguồn gây xung đột trong các tập tin cũ của bạn sẽ bị loại bỏ, phương pháp còn lại sẽ cho kết quả một tập tin đã loại bỏ những thay đổi từ tập tin mới.',
	'FILES_MODIFIED'				=> 'Những tập tin đã chỉnh sửa',
	'FILES_MODIFIED_EXPLAIN'		=> 'Những tập tin bên dưới đã được chỉnh sửa và không còn là những tập tin gốc của hệ thống phpBB phiên bản cũ. Tập tin đã cập nhật là tập tin được nhập chung giữa những chỉnh sửa mã nguồn của bạn với tập tin mới.',
	'FILES_NEW'						=> 'Những tập tin mới',
	'FILES_NEW_EXPLAIN'				=> 'Những tập tin bên dưới hiện tại không có trong bản cài đặt của bạn.',
	'FILES_NEW_CONFLICT'			=> 'Những tập tin xung đột mới',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Những tập tin bên dưới là tập tin mới trong phiên bản phpBB mới nhất nhưng hệ thống đã xác định rằng có một tập tin cùng tên như vậy trong cùng vị trí thư mục định vị. Tập tin này sẽ được thay thế bằng một tập tin mới.',
	'FILES_NOT_MODIFIED'			=> 'Những tập tin chưa chỉnh sửa',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Những tập tin bên dưới chưa được chỉnh sửa và là những tập tin gốc của hệ thống phpBB phiên bản cũ mà bạn đang tiến hành cập nhật lên phiên bản mới.',
	'FILES_UP_TO_DATE'				=> 'Những tập tin đã được cập nhật',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Những tập tin bên dưới đã được cập nhật đến phiên bản mới nhất và bạn không cần phải cập nhật lại chúng.',
	'FTP_SETTINGS'					=> 'Thiết lập FTP',
	'FTP_UPDATE_METHOD'				=> 'Tải lên bằng FTP',

	'INCOMPATIBLE_UPDATE_FILES'		=> 'Những tập tin cập nhật đã được tìm thấy nhưng không tương thích với phiên bản phpBB mà bạn đang sử dụng. Phiên bản phpBB mà bạn đã cài đặt là <strong>%1$s</strong> trong khi tập tin cập nhật dành cho việc cập nhật hệ thống phpBB từ phiên bản <strong>%2$s</strong> lên phiên bản <strong>%3$s</strong>.',
	'INCOMPLETE_UPDATE_FILES'		=> 'Những tập tin cập nhật chưa được hoàn tất.',
	'INLINE_UPDATE_SUCCESSFUL'		=> 'Cơ sở dữ liệu của hệ thống đã được cập nhật thành công. Bây giờ bạn cần tiếp tục quá trình cập nhật.',

	'KEEP_OLD_NAME'		=> 'Giữ lại tên thành viên',

	'LATEST_VERSION'		=> 'Phiên bản mới nhất',
	'LINE'					=> 'Dòng',
	'LINE_ADDED'			=> 'Đã thêm vào',
	'LINE_MODIFIED'			=> 'Đã chỉnh sửa',
	'LINE_REMOVED'			=> 'Đã gỡ bỏ',
	'LINE_UNMODIFIED'		=> 'Không chỉnh sửa',
	'LOGIN_UPDATE_EXPLAIN'	=> 'Để tiến hành cập nhật bản cài đặt của bạn, trước tiên bạn cần phải đăng nhập vào hệ thống.',

	'MAPPING_FILE_STRUCTURE'		=> 'Để đơn giản hoá việc tải tập tin lên chính xác, bên dưới là những thư mục định vị tập tin trong bản cài đặt phpBB của bạn.',
	'MERGE_MODIFICATIONS_OPTION'	=> 'Nhập chung những thay đổi',
	'MERGE_NO_MERGE_NEW_OPTION'		=> 'Đừng nhập chung - Sử dụng tập tin mới',
	'MERGE_NO_MERGE_MOD_OPTION'		=> 'Đừng nhập chung - Sử dụng tập tin đã cài đặt hiện tại',
	'MERGE_MOD_FILE_OPTION'			=> 'Nhập chung những chỗ khác nhau và sử dụng mã đã chỉnh sửa cho phần xung đột',
	'MERGE_NEW_FILE_OPTION'			=> 'Nhập chung những chỗ khác nhau và sử dụng mã của tập tin mới cho phần xung đột',
	'MERGE_SELECT_ERROR'			=> 'Chế độ nhập chung tập tin xung đột không chính xác như đã chọn.',
	'MERGING_FILES'					=> 'Nhập chung các khác biệt',
	'MERGING_FILES_EXPLAIN'			=> 'Đang thu thập các tập tin có thay đổi cuối cùng.<br /><br />Xin chờ cho đến khi phpBB hoàn tất.',

	'NEW_FILE'						=> 'Tập tin đã cập nhật mới',
	'NEW_USERNAME'					=> 'Tên thành viên mới',
	'NO_AUTH_UPDATE'				=> 'Bạn không xác thực hợp lệ với hệ thống để tiến hành cập nhật',
	'NO_ERRORS'						=> 'Không có lỗi',
	'NO_UPDATE_FILES'				=> 'Những tập tin chưa được cập nhật',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'Những tập tin dưới đây là tập tin mới hoặc đã được chỉnh sửa nhưng thư mục bình thường chứa chúng không thể tìm thấy trong hệ thống mà bạn đã cài đặt. Nếu danh sách này chứa các tập tin nằm trong những thư mục khác ngoài thư mục <samp>language/</samp> hay <samp>styles/</samp> thì bạn phải tự mình chỉnh sửa theo như cấu trúc thư mục mà bạn đã cài đặt và việc cập nhật vẫn chưa hoàn tất tại đây.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'Không có thư mục cập nhật hợp lệ nào được tìm thấy, hãy chắc chắn rằng bạn đã tải lên hết những tập tin có liên quan.<br /><br />Phiên bản phpBB bạn đang sử dụng <strong>chưa được</strong> cập nhật đến phiên bản mới nhất. Những cập nhật mới đã có cho phiên bản phpBB <strong>%1$s</strong> của bạn, hãy ghé thăm <a href="http://www.phpbb.com/downloads/" rel="external">http://www.phpbb.com/downloads/</a> và tải về gói cập nhật phù hợp để tiến hành cập nhật phiên bản phpBB đang sử dụng của bạn từ phiên bản <strong>%2$s</strong> lên phiên bản <strong>%3$s</strong>.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Phiên bản phpBB của bạn là phiên bản mới nhất hiện tại. Bạn không cần sử dụng đến công cụ cập nhật. Nếu bạn muốn thực hiện kiểm tra lại toàn bộ các tập tin của bạn, hãy chắc chắn rằng bạn đã tải lên những tập tin cập nhật chính xác.',
	'NO_UPDATE_INFO'				=> 'Không thể tìm thấy thông tin về tập tin cập nhật.',
	'NO_UPDATES_REQUIRED'			=> 'Không có cập nhật nào được yêu cầu',
	'NO_VISIBLE_CHANGES'			=> 'Không có thay đổi nào rõ ràng',
	'NOTICE'						=> 'Thông báo',
	'NUM_CONFLICTS'					=> 'Tổng số xung đột',
	'NUMBER_OF_FILES_COLLECTED'		=> 'Hiện tại đang kiểm tra sự khác biệt từ tập tin thứ %1$d đến %2$d.<br />Xin chờ cho đến khi tất cả tập tin được kiểm tra.',

	'OLD_UPDATE_FILES'		=> 'Những tập tin cập nhật này là dành cho phiên bản cũ. Những tập tin cập nhật này được xác định là dành cho việc cập nhật hệ thống phpBB từ phiên bản %1$s lên phiên bản %2$s trong khi phiên bản phpBB mới nhất là %3$s.',

	'PACKAGE_UPDATES_TO'				=> 'Những gói cập nhật hiện tại đến phiên bản',
	'PERFORM_DATABASE_UPDATE'			=> 'Thực hiện cập nhật cơ sở dữ liệu',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'Trong phần bên dưới, bạn sẽ tìm thấy một nút bấm để chạy công cụ cập nhật cơ sở dữ liệu. Thời gian thực thi công cụ này có thể kéo dài, vì thế xin bạn đừng ngừng thực thi công cụ này nếu nó có vẻ bị treo khi đang chạy. Sau khi công cụ cập nhật cơ sở dữ liệu đã hoàn tất, bạn chỉ cần làm theo những chỉ dẫn dưới đây để tiếp tục quá trình cập nhật.',
	'PREVIOUS_VERSION'					=> 'Phiên bản trước',
	'PROGRESS'							=> 'Tiến hành',

	'RESULT'					=> 'Kết quả',
	'RUN_DATABASE_SCRIPT'		=> 'Cập nhật ngay cơ sở dữ liệu',

	'SELECT_DIFF_MODE'			=> 'Chọn chế độ so sánh mã nguồn sử dụng DIFF',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Chọn định dạng tập tin tải về',
	'SELECT_FTP_SETTINGS'		=> 'Chọn thiết lập FTP',
	'SHOW_DIFF_CONFLICT'		=> 'Hiện những chỗ khác nhau trong mã nguồn/mã nguồn xung đột',
	'SHOW_DIFF_FINAL'			=> 'Hiện tập tin kết quả',
	'SHOW_DIFF_MODIFIED'		=> 'Hiện những chỗ khác nhau trong mã nguồn đã chỉnh sửa',
	'SHOW_DIFF_NEW'				=> 'Hiện mã nguồn tập tin',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Hiện những chỗ khác nhau trong mã nguồn của xung đột mới',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Hiện những chỗ khác nhau trong mã nguồn chưa chỉnh sửa',
	'SOME_QUERIES_FAILED'		=> 'Một vài lệnh truy xuất SQL đã thất bại, câu lệnh đã khai báo và lỗi xảy ra được liệt kê bên dưới.',
	'SQL'						=> 'Lệnh truy xuất SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'Bạn không phải lo lắng về điều này, việc cập nhật vẫn được tiếp tục. Về nguyên nhân của thất bại trong việc truy xuất SQL này, bạn nên yêu cầu được trợ giúp tại diễn đàn hỗ trợ của chúng tôi. Bạn hãy xem qua tập tin <a href="../docs/README.html">README</a> để biết thêm thông tin chi tiết và các lời khuyên hữu ích.',
	'STAGE_FILE_CHECK'			=> 'Kiểm tra tập tin',
	'STAGE_UPDATE_DB'			=> 'Cập nhật cơ sở dữ liệu',
	'STAGE_UPDATE_FILES'		=> 'Cập nhật tập tin',
	'STAGE_VERSION_CHECK'		=> 'Kiểm tra phiên bản',
	'STATUS_CONFLICT'			=> 'Tập tin đã chỉnh sửa gây ra xung đột',
	'STATUS_MODIFIED'			=> 'Tập tin đã chỉnh sửa',
	'STATUS_NEW'				=> 'Tập tin mới',
	'STATUS_NEW_CONFLICT'		=> 'Tập tin mới xung đột',
	'STATUS_NOT_MODIFIED'		=> 'Tập tin không chỉnh sửa',
	'STATUS_UP_TO_DATE'			=> 'Tập tin đã được cập nhật',

	'TOGGLE_DISPLAY'			=> 'Ẩn/Hiện danh sách tập tin',
	'TRY_DOWNLOAD_METHOD'		=> 'Bạn có thể thử phương pháp tải về các tập tin đã được thay đổi.<br />Phương thức này luôn hoạt động tốt và được khuyên dùng.',
	'TRY_DOWNLOAD_METHOD_BUTTON'=> 'Thử phương thức này ngay',

	'UPDATE_COMPLETED'				=> 'Cập nhật đã hoàn tất',
	'UPDATE_DATABASE'				=> 'Cập nhật cơ sở dữ liệu',
	'UPDATE_DATABASE_EXPLAIN'		=> 'Trong bước kế tiếp, cơ sở dữ liệu của hệ thống sẽ được cập nhật.',
	'UPDATE_DATABASE_SCHEMA'		=> 'Đang cập nhật cấu trúc cơ sở dữ liệu',
	'UPDATE_FILES'					=> 'Cập nhật tập tin',
	'UPDATE_FILES_NOTICE'			=> 'Hãy chắc chắn rằng bạn cũng đã tải lên hết những tập tin cập nhật của hệ thống bởi vì tập tin này chỉ cập nhật cơ sở dữ liệu của bạn.',
	'UPDATE_INSTALLATION'			=> 'Cập nhật bản cài đặt của phpBB',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Với tuỳ chọn này, bạn có thể cập nhật cho bản cài đặt phpBB của mình lên phiên bản mới nhất của phpBB.<br />Trong suốt quá trình thực thi, tất cả các tập tin của bạn sẽ được kiểm tra để đảm bảo tính toàn bộ chưa được chỉnh sửa mã nguồn. Bạn cũng có thể xem trước tất cả thay đổi mã nguồn và tập tin trước khi bắt đầu cập nhật.<br /><br />Tập tin được cập nhật hoàn tất có thể bằng hai cách.</p><h2>Tự mình cập nhật</h2><p>Với phương pháp cập nhật này, bạn chỉ việc tải về những tập tin mà bạn đã chỉnh sửa cá nhân so với tập tin gốc của hệ thống. Điều này giúp bạn không bị mất đi các tập tin mà mình đã chỉnh sửa. Sau khi đã tải về máy thành công, bạn cần phải tự mình tải lên lại những tập tin này đến thư mục định vị chính xác của chúng trong thư mục cài đặt hệ thống phpBB. Khi đã tải lên xong, bạn có thể tiến hành kiểm tra lại các tập tin này để chắc chắn rằng mình đã tải chúng lên đúng thư mục định vị trong hệ thống.</p><h2>Cập nhật tự động với FTP</h2><p>Phương pháp này tương tự như phương pháp đầu tiên nhưng bạn không cần phải tải về những tập tin đã chỉnh sửa rồi phải tải chúng lên trở lại thư mục định vị trong hệ thống. Quá trình này sẽ được thực hiện tự động cho bạn. Ngoài ra, để sử dụng được phương pháp cập nhật này, bạn phải cung cấp thông tin chính xác về tài khoản FTP của mình khi được hệ thống yêu cầu. Sau khi hoàn tất, bạn sẽ được chuyển đến công cụ kiểm tra tập tin để chắc chắn rằng mọi thứ đã được cập nhật chính xác. Cuối cùng, bạn sẽ được chuyển đến công cụ cập nhật cơ sở dữ liệu để hoàn tất toàn bộ quá trình cập nhật cho hệ thống.',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Thông báo phát hành</h1>

		<p>Bạn hãy vui lòng xem qua <a href="%1$s" title="%1$s"><strong>thông báo phát hành của phiên bản phpBB mới nhất</strong></a> trước khi bạn tiếp tục tiến hành việc cập nhật của mình bởi vì nó có nhiều thông tin hữu ích dành cho bạn. Thông báo này cũng đính kèm liên kết tải về phiên bản phpBB mới nhất cũng như những thay đổi kể từ phiên bản trước.</p>

		<br />

		<h1>Làm thế nào để cập nhật bản cài đặt phpBB3 của bạn với gói cập nhật tự động?</h1>

		<p>Khuyến cáo bạn rằng đây là cách cập nhật bản cài đặt phpBB3 chỉ hợp lệ với gói cập nhật tự động. Bạn cũng có thể cập nhật bản cài đặt phpBB3 của mình bằng những phương pháp khác đã được liệt kê trong tài liệu <samp>INSTALL.html</samp>. Những bước tiến hành cập nhật tự động hệ thống như sau:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Chuyển đến trang <a href="http://www.phpbb.com/downloads/" title="http://www.phpbb.com/downloads/">phpBB.com downloads page</a> và tải về “Gói cập nhật tự động” chính xác.<br /><br /></li>
			<li>Giải nén gói tập tin vừa tải về.<br /><br /></li>
			<li>Tải toàn bộ thư mục chính cài đặt hệ thống phpBB sau khi giải nén lên máy chủ của bạn (chung thư mục với tập tin <code>config.php</code>).<br /><br /></li>
		</ul>

		<p>Sau khi đã tải lên xong, hệ thống của bạn sẽ tạm ngưng hoạt động đối với các thành viên bình thường trong suốt thời gian thư mục cài đặt hệ thống mà bạn đã tải lên còn hiện diện.<br /><br />
		<strong><a href="%2$s" title="%2$s">Bây giờ, bạn hãy bắt đầu tiến hành cập nhật bằng cách duyệt thư mục cài đặt hệ thống từ trình duyệt của mình</a>.</strong><br />
		<br />
		Sau đó, bạn sẽ được hướng dẫn từng bước để tiến hành cập nhật. Bạn sẽ chỉ được thông báo một lần duy nhất khi việc cập nhật hoàn tất.
		</p>
	',
	'UPDATE_INSTRUCTIONS_INCOMPLETE'	=> '

		<h1>Bạn vẫn chưa hoàn tất việc cập nhật</h1>

		<p>Hệ thống phpBB đã phát hiện một gói cập nhật tự động chưa hoàn tất. Hãy chắc chắn rằng bạn đã tiến hành thực hiện từng bước với công cụ cập nhật tự động. Bạn sẽ tìm thấy lại liên kết đến công cụ này bên dưới hoặc bạn có thể chuyển đến thư mục cài đặt hệ thống trực tiếp để chạy nó.</p>
	',
	'UPDATE_METHOD'					=> 'Phương pháp cập nhật',
	'UPDATE_METHOD_EXPLAIN'			=> 'Bạn có thể lựa chọn phương pháp cập nhật mà mình thích. Nếu bạn chọn sử dụng phương pháp tải lên bằng FTP, bạn sẽ được yêu cầu cung cấp thông tin chi tiết về tài khoản FTP của mình. Với phương pháp này, các tập tin sẽ được tự động di chuyển đến thư mục định vị mới và bản sao của các tập tin cũ sẽ được giữ lại bằng cách thêm vào phần mở rộng đuôi tập tin là <samp>.bak</samp> trong phần tên tập tin. Nếu bạn chọn tải về các tập tin đã chỉnh sửa, bạn có thể tự mình giải nén chúng ra rồi tải lên trở lại thư mục định vị chính xác sau này.',
	'UPDATE_REQUIRES_FILE'			=> 'Công cụ cập nhật yêu cầu tập tin sau đây phải tồn tại: %s',
	'UPDATE_SUCCESS'				=> 'Đã cập nhật thành công.',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'Đã cập nhật thành công tất cả tập tin. Bước kế tiếp sẽ kiểm tra lại tất cả các tập tin để chắc chắn rằng những tập tin này đã được cập nhật chính xác.',
	'UPDATE_VERSION_OPTIMIZE'		=> 'Đang cập nhật số phiên bản và tối ưu các bảng dữ liệu',
	'UPDATING_DATA'					=> 'Đang cập nhật dữ liệu',
	'UPDATING_TO_LATEST_STABLE'		=> 'Đang cập nhật cơ sở dữ liệu đến bản phát hành tiêu chuẩn mới nhất',
	'UPDATED_VERSION'				=> 'Phiên bản đã cập nhật',
	'UPGRADE_INSTRUCTIONS'			=> 'Phiên bản mới <strong>%1$s</strong> đã tồn tại. Hãy xem <a href="%2$s" title="%2$s"><strong>thông báo phiên bản mới</strong></a> để tìm hiểu thêm về tính năng mới, và cách thức để nâng cấp phiên bản hiện tại.',
	'UPLOAD_METHOD'					=> 'Phương pháp tải lên',

	'UPDATE_DB_SUCCESS'				=> 'Cơ sở dữ liệu của hệ thống đã được cập nhật thành công.',
	'USER_ACTIVE'					=> 'Thành viên đang hoạt động',
	'USER_INACTIVE'					=> 'Thành viên ngưng hoạt động',

	'VERSION_CHECK'				=> 'Kiểm tra phiên bản',
	'VERSION_CHECK_EXPLAIN'		=> 'Tiến hành kiểm tra phiên bản để chắc chắn rằng hệ thống của bạn đang sử dụng phiên bản phpBB mới nhất.',
	'VERSION_NOT_UP_TO_DATE'	=> 'Phiên bản phpBB bạn đang sử dụng chưa được cập nhật đến phiên bản mới nhất. Hãy vui lòng tiếp tục tiến hành cập nhật.',
	'VERSION_NOT_UP_TO_DATE_ACP'	=> 'Phiên bản phpBB bạn đang sử dụng chưa được cập nhật đến phiên bản mới nhất.<br />Trong phần bên dưới, bạn sẽ tìm thấy liên kết đến thông báo phát hành của phiên bản phpBB mới nhất cùng với những hướng dẫn cách tiến hành cập nhật cho hệ thống của mình.',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> 'Phiên bản phpBB bạn đang sử dụng chưa được cập nhật.',
	'VERSION_UP_TO_DATE'		=> 'Phiên bản phpBB bạn đang sử dụng là phiên bản mới nhất, không có cập nhật mới nào cho phiên bản này. Bạn có thể tiếp tục kiểm tra sự hợp lệ của các tập tin trong hệ thống.',
	'VERSION_UP_TO_DATE_ACP'	=> 'Phiên bản phpBB bạn đang sử dụng là phiên bản mới nhất, không có cập nhật mới nào cho phiên bản này. Bạn không cần phải tiến hành cập nhật bản cài đặt này.',
	'VIEWING_FILE_CONTENTS'		=> 'Đang hiển thị nội dung tập tin',
	'VIEWING_FILE_DIFF'			=> 'Đang hiển thị những thay đổi mã nguồn',

	'WRONG_INFO_FILE_FORMAT'	=> 'Sai định dạng tập tin thông tin',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'	=> 'Chân thành cám ơn - Người quản lý',
	'CONFIG_SITE_DESC'			=> 'Giới_thiệu_về_website_của_bạn',
	'CONFIG_SITENAME'			=> 'yourdomain.com',

	'DEFAULT_INSTALL_POST'		=> 'Đây là một bài viết mẫu được tạo ra trong quá trình cài đặt hệ thống phpBB của bạn. Bạn có thể xóa bài viết này, chủ đề này hay thậm chí là cả chuyên mục này nếu muốn khi mọi thứ đều hoạt động bình thường!',

	'FORUMS_FIRST_CATEGORY'		=> 'Nhóm chuyên mục nháp',
	'FORUMS_TEST_FORUM_DESC'	=> 'Đây là chuyên mục nháp dùng để kiểm tra.',
	'FORUMS_TEST_FORUM_TITLE'	=> 'Chuyên mục nháp',

	'RANKS_SITE_ADMIN_TITLE'	=> 'Quản trị viên',
	'REPORT_WAREZ'				=> 'Bài viết có chứa các liên kết liên quan đến những phần mềm sao chép trái pháp luật.',
	'REPORT_SPAM'				=> 'Bài viết chỉ nhằm mục đích quảng cáo cho một website hay các sản phẩm khác.',
	'REPORT_OFF_TOPIC'			=> 'Bài viết có nội dung không phù hợp.',
	'REPORT_OTHER'				=> 'Bài viết đã báo cáo không phải vì các nguyên nhân đã liệt kê ở trên, bạn hãy tự nhập vào thông tin giới thiệu chi tiết.',

	'SMILIES_ARROW'			=> 'Mũi tên',
	'SMILIES_CONFUSED'		=> 'Lúng túng',
	'SMILIES_COOL'			=> 'Phấn chấn',
	'SMILIES_CRYING'		=> 'Khóc',
	'SMILIES_EMARRASSED'	=> 'Ngượng',
	'SMILIES_EVIL'			=> 'Điên cuồng',
	'SMILIES_EXCLAMATION'	=> 'Bó tay',
	'SMILIES_GEEK'			=> 'Lập dị',
	'SMILIES_IDEA'			=> 'Ý tưởng',
	'SMILIES_LAUGHING'		=> 'Cười',
	'SMILIES_MAD'			=> 'Mất trí',
	'SMILIES_MR_GREEN'		=> 'Xanh lè',
	'SMILIES_NEUTRAL'		=> 'Trung lập',
	'SMILIES_QUESTION'		=> 'Thắc mắc',
	'SMILIES_RAZZ'			=> 'Chế giễu',
	'SMILIES_ROLLING_EYES'	=> 'Liếc mắt',
	'SMILIES_SAD'			=> 'Buồn',
	'SMILIES_SHOCKED'		=> 'Sốc',
	'SMILIES_SMILE'			=> 'Mỉm cười',
	'SMILIES_SURPRISED'		=> 'Nhạc nhiên',
	'SMILIES_TWISTED_EVIL'	=> 'Quỷ',
	'SMILIES_UBER_GEEK'		=> 'Chuyên viên',
	'SMILIES_VERY_HAPPY'	=> 'Rất vui',
	'SMILIES_WINK'			=> 'Nháy mắt',

	'TOPICS_TOPIC_TITLE'	=> 'Chào mừng bạn đã đến với phpBB',
));

?>