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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Với công cụ này, bạn có thể xác định một vài cơ chế hoạt động đơn giản của hệ thống, từ tên và giới thiệu thích hợp về website cho đến thay đổi những thiết lập khác trong hệ thống như điều chỉnh giá trị mặc định về múi giờ và ngôn ngữ.',
	'BOARD_INDEX_TEXT' => 'Văn bản chỉ mục của bảng',
	'BOARD_INDEX_TEXT_EXPLAIN' => 'Văn bản này được hiển thị dưới dạng chỉ mục bảng trong đường dẫn của bảng. Nếu không được chỉ định, nó sẽ mặc định thành “Chỉ mục bảng”. ',
	'BOARD_STYLE' => 'Kiểu bảng',
	'CUSTOM_DATEFORMAT'				=> 'Tuỳ chọn…',
	'DEFAULT_DATE_FORMAT'			=> 'Định dạng ngày tháng',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'Sử dụng cú pháp giống như hàm <code>date()</code> trong PHP.',
	'DEFAULT_LANGUAGE'				=> 'Ngôn ngữ mặc định',
	'DEFAULT_STYLE'					=> 'Giao diện mặc định',
	'DEFAULT_STYLE_EXPLAIN'			=> 'Kiểu mặc định cho người dùng mới.',
	'DISABLE_BOARD'					=> 'Ngưng hoạt động hệ thống',
	'DISABLE_BOARD_EXPLAIN'			=> 'Tuỳ chọn này sẽ ngưng hoạt động của hệ thống đối với các thành viên. Bạn cũng có nhập vào một tin nhắn giới hạn trong <strong>255</strong> ký tự hiển thị như thông báo ngưng hoạt động của hệ thống nếu muốn.',
	'DISPLAY_LAST_SUBJECT' => 'Hiển thị chủ đề của bài đăng được thêm gần đây nhất trên danh sách diễn đàn',
	'DISPLAY_LAST_SUBJECT_EXPLAIN' => 'Chủ đề của bài viết được thêm gần đây nhất sẽ được hiển thị trong danh sách diễn đàn với một siêu liên kết đến bài đăng. Các chủ đề từ diễn đàn và diễn đàn được bảo vệ bằng mật khẩu mà người dùng không có quyền truy cập đọc sẽ không được hiển thị. ',
	'GUEST_STYLE' => 'Kiểu khách',
	'GUEST_STYLE_EXPLAIN' => 'Kiểu bảng cho khách.',
	'OVERRIDE_STYLE'				=> 'Thay thế cho giao diện lựa chọn của thành viên',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Tuỳ chọn thay thế toàn bộ những giao diện đã được các thành viên lựa chọn bằng giao diện mặc định duy nhất của hệ thống.',
	'SITE_DESC'						=> 'Giới thiệu về website',
	'SITE_HOME_TEXT' => 'Văn bản trang web chính',
	'SITE_HOME_TEXT_EXPLAIN' => 'Văn bản này sẽ được hiển thị dưới dạng liên kết đến trang chủ trang web của bạn trong đường dẫn của bảng. Nếu không được chỉ định, nó sẽ mặc định là "Nhà". ',
	'SITE_HOME_URL' => 'URL trang web chính',
	'SITE_HOME_URL_EXPLAIN' => 'Nếu được chỉ định, liên kết tới URL này sẽ được thêm vào đường dẫn của bảng và biểu trưng của bảng sẽ liên kết với URL này thay vì chỉ mục diễn đàn. Yêu cầu URL tuyệt đối, ví dụ: <samp> http://www.phpbb.com </ samp>. ',
	'SITE_NAME'						=> 'Tên website',
	'SYSTEM_TIMEZONE'				=> 'Múi giờ hệ thống',
	'SYSTEM_TIMEZONE_EXPLAIN'		=> 'Múi giờ hệ thống dùng để hiển thị thời gian của thành viên chưa đăng nhập (khách, các máy tìm kiếm). Thành viên đăng nhập thiết đặt múi giờ lúc đăng ký và có thể thay đổi nó trong bạn điều khiển cá nhân mình.',
	'WARNINGS_EXPIRE'				=> 'Cảnh cáo trong vòng',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Số ngày trải qua trước khi một cảnh cáo tự động hết hiệu lực từ bản ghi của một thành viên.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Với công cụ này, bạn có thể kích hoạt hay vô hiệu một vài chức năng trong hệ thống.',

	'ALLOW_ATTACHMENTS'			=> 'Cho phép đính kèm tập tin',
	'ALLOW_BIRTHDAYS'			=> 'Cho phép thông tin sinh nhật',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Tùy chọn cho phép thông tin sinh nhật được thành viên nhập vào và thông tin về tuổi được hiển thị trong thông tin cá nhân về họ. Lưu ý rằng phần danh sách các thành viên có ngày sinh nhật trên trang chủ được điều khiển bởi một thiết lập nạp trang riêng.',
	'ALLOW_BOOKMARKS'			=> 'Cho phép đánh dấu chủ đề vào trang yêu thích',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'Tuỳ chọn cho phép thành viên đánh dấu lại những chủ đề mà mình quan tâm vào trang yêu thích.',
	'ALLOW_BBCODE'				=> 'Cho phép sử dụng BBCode',
	'ALLOW_FORUM_NOTIFY'		=> 'Cho phép theo dõi chuyên mục',
	'ALLOW_NAME_CHANGE'			=> 'Cho phép thay đổi tên thành viên',
	'ALLOW_NO_CENSORS'			=> 'Cho phép tắt chế độ kiểm duyệt từ',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Tuỳ chọn cho phép thành viên có thể tắt chế độ kiểm duyệt từ tự động trong các bài viết và tin nhắn.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Cho phép đính kèm tập tin trong tin nhắn',
	'ALLOW_PM_REPORT'			=> 'Cho phép báo cáo tin nhắn riêng',
	'ALLOW_PM_REPORT_EXPLAIN'	=> 'Nếu thiết lập, thành viên sẽ có thể dùng chức năng báo cáo một tin nhắn riêng nếu họ nhận được. Những tin nhắn này sau đó sẽ hiển trị trong phiên làm việc của nhà điều hành.',
	'ALLOW_QUICK_REPLY'			=> 'Cho phép gửi trả lời nhanh',
	'ALLOW_QUICK_REPLY_EXPLAIN'	=> 'Cho phép hoặc không cho phép gửi trả lời nhanh trên toàn hệ thống. Khi cho phép, chỉ những chuyên mục nào cho phép dùng Trả lời nhanh mới được hiển thị chức năng này.',
	'ALLOW_QUICK_REPLY_BUTTON'	=> 'Thực hiện và cho phép gửi trả lời nhanh trên tất cả các chuyên mục',
	'ALLOW_SIG'					=> 'Cho phép sử dụng chữ ký cá nhân',
	'ALLOW_SIG_BBCODE'			=> 'Cho phép sử dụng BBCode trong chữ ký cá nhân',
	'ALLOW_SIG_FLASH'			=> 'Cho phép sử dụng thẻ BBCode <code>[FLASH]</code> trong chữ ký cá nhân',
	'ALLOW_SIG_IMG'				=> 'Cho phép sử dụng thẻ BBCode <code>[IMG]</code> trong chữ ký cá nhân',
	'ALLOW_SIG_LINKS'			=> 'Cho phép sử dụng liên kết trong chữ ký cá nhân',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Nếu bạn vô hiệu tùy chọn này, thẻ BBCode <code>[URL]</code> và các địa chỉ URL khác trong chữ ký thành viên sẽ không được hiển thị như liên kết.',
	'ALLOW_SIG_SMILIES'			=> 'Cho phép sử dụng biểu tượng vui trong chữ ký cá nhân',
	'ALLOW_SMILIES'				=> 'Cho phép sử dụng biểu tượng vui',
	'ALLOW_TOPIC_NOTIFY'		=> 'Cho phép theo dõi chủ đề',
	'BOARD_PM'					=> 'Cho phép gửi tin nhắn',
	'BOARD_PM_EXPLAIN'			=> 'Tuỳ chọn kích hoạt hay vô hiệu chức năng gửi tin nhắn trong hệ thống đối với tất cả thành viên.',
	'ALLOW_BOARD_NOTIFICATIONS' => 'Cho phép thông báo trên bảng',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Hình đại diện thường là những hình ảnh nhỏ, những hình đơn mà thành viên đính kèm trong thông tin cá nhân của mình. Tuỳ thuộc vào giao diện được sử dụng, hình đại diện thường hiển thị bên dưới tên thành viên trong phần xem chủ đề. Với công cụ này, bạn có thể thay đổi cách sử dụng hình đại diện của thành viên. Lưu ý rằng trong trường hợp bạn kích hoạt tuỳ chọn cho phép thành viên tải lên hình đại diện, bạn cần phải tạo thư mục mang tên bên dưới trong hệ thống theo đúng đường dẫn đã thiết lập và chắc chắn thiết lập cấp phép có thể ghi cho thư mục này trên máy chủ. Bạn cũng cần lưu ý rằng dung lượng tập tin hạn chế cho hình đại diện chỉ áp dụng cho những hình đại diện được tải lên và không có tác dụng đối với những hình đại diện được liên kết từ website khác.',

	'ALLOW_AVATARS'					=> 'Cho phép sử dụng ảnh đại diện',
	'ALLOW_AVATARS_EXPLAIN'			=> 'Cho phép sử dụng ;<br />Nếu không cho phép dùng ảnh đại diện trên toàn hệ thống hay ảnh đại diện đối với một số chế độ nào đó, các ảnh đại diện sẽ không được hiển thị, tuy nhiên thành viên vẫn có thể tải về ảnh các đại diện trong Trang quản trị của thành viên đó.',
	'ALLOW_GRAVATAR'				=> 'Bật hình đại diện gravatar',
	'ALLOW_LOCAL'					=> 'Cho phép sử dụng thư viện hình đại diện',
	'ALLOW_REMOTE'					=> 'Cho phép liên kết hình đại diện',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Tuỳ chọn cho phép thành viên sử dụng hình đại diện được liên kết từ những website khác.',
	'ALLOW_REMOTE_UPLOAD'			=> 'Cho phép tải lên từ xa',
	'ALLOW_REMOTE_UPLOAD_EXPLAIN'	=> 'Cho phép tải lên từ xa từ một trang web khác.',
	'ALLOW_UPLOAD'					=> 'Cho phép tải lên hình đại diện',
	'AVATAR_GALLERY_PATH'			=> 'Đường dẫn thư viện hình đại diện',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Đường dẫn đến thư mục chứa hình ảnh sử dụng cho thư viện hình đại diện trong hệ thống, ví dụ như <samp>images/avatars/gallery</samp>.',
	'AVATAR_STORAGE_PATH'			=> 'Đường dẫn thư mục chứa hình đại diện tải lên',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Đường dẫn đến thư mục chứa hình đại diện được tải lên trong hệ thống, ví dụ như <samp>images/avatars/upload</samp>.',
	'MAX_AVATAR_SIZE'				=> 'Kích thước hình đại diện tối đa cho phép',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Chiều cao x chiều rộng với đơn vị tính Pixel.',
	'MAX_FILESIZE'					=> 'Dung lượng tập tin hình đại diện tối đa cho phép',
	'MAX_FILESIZE_EXPLAIN'			=> 'Áp dụng cho những hình đại diện được tải lên bởi thành viên.',
	'MIN_AVATAR_SIZE'				=> 'Kích thước hình đại diện tối thiểu cho phép',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Chiều cao x chiều rộng với đơn vị tính Pixel.',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Với công cụ này, bạn có thể thay đổi những thiết lập mặc định đối với chức năng gửi tin nhắn trong hệ thống.',

	'ALLOW_BBCODE_PM'			=> 'Cho phép sử dụng BBCode trong tin nhắn',
	'ALLOW_FLASH_PM'			=> 'Cho phép sử dụng thẻ BBCode <code>[FLASH]</code> trong tin nhắn',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Lưu ý rằng việc cho phép chèn tập tin Flash vào tin nhắn, nếu bạn bật tùy chọn, cũng còn tùy thuộc vào thiết lập cấp phép của thành viên.',
	'ALLOW_FORWARD_PM'			=> 'Cho phép chuyển tiếp tin nhắn',
	'ALLOW_IMG_PM'				=> 'Cho phép sử dụng thẻ BBCode <code>[IMG]</code> trong tin nhắn',
	'ALLOW_MASS_PM'				=> 'Cho phép gửi tin nhắn đến nhiều thành viên và nhóm',
	'ALLOW_MASS_PM_EXPLAIN'		=> 'Việc gửi tin nhắn cho nhóm thành viên có thể cho từng nhóm trong trang quản lý nhóm.',
	'ALLOW_PRINT_PM'			=> 'Cho phép in tin nhắn',
	'ALLOW_QUOTE_PM'			=> 'Cho phép trích dẫn trong tin nhắn',
	'ALLOW_SIG_PM'				=> 'Cho phép sử dụng chữ ký cá nhân trong tin nhắn',
	'ALLOW_SMILIES_PM'			=> 'Cho phép sử dụng biểu tượng vui trong tin nhắn',
	'BOXES_LIMIT'				=> 'Số tin nhắn tối đa trong mỗi thư mục',
	'BOXES_LIMIT_EXPLAIN'		=> 'Số lượng tin nhắn tối đa mà thành viên nhận được trong mỗi thư mục tin nhắn của mình. Nhập vào số <strong>0</strong> để không hạn chế tin nhắn.',
	'BOXES_MAX'					=> 'Số thư mục tin nhắn tối đa',
	'BOXES_MAX_EXPLAIN'			=> 'Số lượng thư mục tin nhắn tối đa mà thành viên có thể tạo cho mình.',
	'ENABLE_PM_ICONS'			=> 'Cho phép sử dụng biểu tượng tin nhắn',
	'FULL_FOLDER_ACTION'		=> 'Thao tác xử lý mặc định khi thư mục vượt quá dung lượng',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Thao tác xử lý mặc định sẽ được áp dụng nếu một thư mục tin nhắn của thành viên vượt quá dung lượng cho phép. Nếu bạn thiết lập tất cả, mọi thứ sẽ không còn phù hợp nữa. Chỉ có ngoại lệ đối với thư mục tin nhắn đặc biệt là “Hộp thư gửi”, thao tác xử lý mặc định luôn luôn là xoá những tin nhắn cũ.',
	'HOLD_NEW_MESSAGES'			=> 'Giữ lại những tin nhắn mới',
	'PM_EDIT_TIME'				=> 'Thời gian giới hạn sửa tin nhắn',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Thời gian giới hạn cho thành viên để sửa một tin nhắn chưa được gửi. Nhập vào số <strong>0</strong> để vô hiệu tùy chọn này',
	'PM_MAX_RECIPIENTS'			=> 'Số lượng người nhận tối đa',
	'PM_MAX_RECIPIENTS_EXPLAIN'	=> 'Số lượng người nhận tối đa cho phép đối với một tin nhắn riêng. Nếu thiết lập này là 0, đồng nghĩa với không có giới hạn. Thiết lập này có thể hiệu chỉnh cho từng nhóm trong trang quản trị nhóm.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Với công cụ này, bạn có thể thay đổi những thiết lập mặc định đối với chức năng gửi bài viết trong hệ thống.',
	'ALLOW_POST_LINKS'					=> 'Cho phép sử dụng liên kết trong bài viết/tin nhắn',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Nếu bạn vô hiệu tùy chọn này, thẻ BBCode <code>[URL]</code> và các địa chỉ URL khác trong bài viết/tin nhắn sẽ không được hiển thị như liên kết.',
	'ALLOWED_SCHEMES_LINKS' => 'Đề án được phép trong liên kết',
	'ALLOWED_SCHEMES_LINKS_EXPLAIN' => 'Người dùng chỉ có thể đăng các URL không có sơ đồ hoặc một trong danh sách các lược đồ được phép được phân cách bằng dấu phẩy.',
	'ALLOW_POST_FLASH'					=> 'Cho phép sử dụng thẻ BBCode <code>[FLASH]</code> trong bài viết',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'Nếu bạn vô hiệu tùy chọn này, thẻ BBCode <code>[FLASH]</code> sẽ bị vô hiệu trong các bài viết. Mặc khác, những thiết lập cấp phép cũng quyết định việc thành viên có thể sử dụng được thẻ BBCode <code>[FLASH]</code> hay không.',

	'BUMP_INTERVAL'					=> 'Thời gian giữa hai lần đẩy chủ đề lên',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Số phút, số giờ hoặc số ngày giữa thời gian bài viết mới nhất được gửi đến chủ đề và việc sử dụng chức năng đẩy chủ đề lên này.',
	'CHAR_LIMIT'					=> 'Số ký tự tối đa cho phép trong mỗi bài viết',
	'CHAR_LIMIT_EXPLAIN'			=> 'Tổng số ký tự được phép sử dụng trong nội dung của một bài viết. Nhập vào số <strong>0</strong> để không hạn chế số ký tự.',
	'DELETE_TIME'					=> 'Giới hạn thời gian xóa',
	'DELETE_TIME_EXPLAIN'			=> 'Giới hạn thời gian để xóa một bài viết mới. Chỉnh giá trị này thành 0 để vô hiệu chức năng này.',
	'DISPLAY_LAST_EDITED'			=> 'Hiển thị thông tin về lần chỉnh sửa bài viết mới nhất',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Bật tuỳ chọn này nếu bạn muốn hiển thị thông tin về lần chỉnh sửa bài viết mới nhất cuối mỗi bài viết.',
	'EDIT_TIME'						=> 'Thời gian giới hạn sửa bài viết',
	'EDIT_TIME_EXPLAIN'				=> 'Thời gian giới hạn cho thành viên để sửa một bài viết mới. Nhập vào số <strong>0</strong> để vô hiệu tùy chọn này.',
	'FLOOD_INTERVAL'				=> 'Thời gian chờ giữa hai lần gửi bài',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Số giây mà thành viên phải chờ đợi giữa hai lần gửi bài viết. Nếu bạn không muốn giới hạn thời gian này cho thành viên nào, hãy thay đổi trong cấp phép của thành viên đó.',
	'HOT_THRESHOLD'					=> 'Số bài viết xác định chủ đề nhiều người xem.',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Số bài viết xác định trong mỗi chủ đề để hiển thị chú thích là chủ đề nhiều người xem. Nhập vào số <strong>0</strong> để vô hiệu việc xác định chủ đề nhiều người xem.',
	'MAX_POLL_OPTIONS'				=> 'Số lượng đối tượng bình chọn tối đa cho phép',
	'MAX_POST_FONT_SIZE'			=> 'Kích thước phông chữ tối đa trong mỗi bài viết',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Kích thước phông chữ tối đa được phép sử dụng trong nội dung một bài viết. Nhập vào số <strong>0</strong> để không hạn chế kích thước phông chữ.',
	'MAX_POST_IMG_HEIGHT'			=> 'Chiều cao hình ảnh tối đa cho phép trong mỗi bài viết',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Chiều cao tối đa cho phép sử dụng của hình ảnh/tập tin Flash khi gửi bài. Nhập vào số <strong>0</strong> để không giới hạn chiều cao.',
	'MAX_POST_IMG_WIDTH'			=> 'Chiều rộng hình ảnh tối đa cho phép trong mỗi bài viết',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Chiều rộng tối đa cho phép sử dụng của hình ảnh/tập tin Flash khi gửi bài. Nhập vào số <strong>0</strong> để không giới hạn chiều rộng.',
	'MAX_POST_URLS'					=> 'Số liên kết tối đa trong mỗi bài viết',
	'MAX_POST_URLS_EXPLAIN'			=> 'Tổng số địa chỉ URL tối đa được phép sử dụng trong nội dung một bài viết. Nhập vào số <strong>0</strong> để không hạn chế số liên kết.',
	'MIN_CHAR_LIMIT'				=> 'Số ký tự tối thiểu cho một bài viết / tin nhắn',
	'MIN_CHAR_LIMIT_EXPLAIN'		=> 'Số lượng ký tự tối thiểu mà thanh viên cần nhập vào cho một bài viết / tin nhắn.',
	'POSTING'						=> 'Gửi bài',
	'POSTS_PER_PAGE'				=> 'Số bài viết hiển thị trong mỗi chủ đề',
	'QUOTE_DEPTH_LIMIT'				=> 'Độ dài trích dẫn tối đa cho phép trong mỗi bài viết',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Độ dài tối đa của các trích dẫn đặt lồng vào nhau được phép sử dụng trong nội dung một bài viết. Nhập vào số <strong>0</strong> để không hạn chế độ dài.',
	'SMILIES_LIMIT'					=> 'Số lượng biểu tượng vui trong mỗi bài viết',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Tổng số biểu tượng vui tối đa được phép sử dụng trong nội dung một bài viết. Nhập vào số <strong>0</strong> để không hạn chế số lượng biểu tượng vui.',
	'SMILIES_PER_PAGE'				=> 'Biểu tượng cảm cho một trang',
	'TOPICS_PER_PAGE'				=> 'Số chủ đề hiển thị trong mỗi chuyên mục',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Với công cụ này, bạn có thể thay đổi những thiết lập mặc định đối với chữ ký cá nhân trong hệ thống.',

	'MAX_SIG_FONT_SIZE'				=> 'Kích thước phông chữ tối đa cho phép',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Kích thước phông chữ tối đa cho phép sử dụng trong chữ ký cá nhân của thành viên. Nhập vào số <strong>0</strong> để không hạn chế kích thước.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Chiều cao hình ảnh tối đa cho phép',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Chiều cao tối đa cho phép sử dụng của hình ảnh/tập tin Flash trong chữ ký cá nhân của thành viên. Nhập vào số <strong>0</strong> để không hạn chế chiều cao.',
	'MAX_SIG_IMG_WIDTH'				=> 'Chiều rộng hình ảnh tối đa cho phép',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Chiều rộng tối đa cho phép sử dụng của hình ảnh/tập tin Flash trong chữ ký cá nhân của thành viên. Nhập vào số <strong>0</strong> để không hạn chế chiều rộng.',
	'MAX_SIG_LENGTH'				=> 'Số ký tự tối đa cho phép',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Số ký tự tối đa cho phép sử dụng trong chữ ký cá nhân của thành viên.',
	'MAX_SIG_SMILIES'				=> 'Số lượng biểu tượng vui tối đa cho phép',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Số lượng biểu tượng vui tối đa cho phép sử dụng trong chữ ký cá nhân của thành viên. Nhập vào số <strong>0</strong> để không hạn chế số lượng biểu tượng vui.',
	'MAX_SIG_URLS'					=> 'Số liên kết tối đa cho phép',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Số lượng liên kết tối đa cho phép sử dụng trong chữ ký cá nhân của thành viên. Nhập vào số <strong>0</strong> để không hạn chế số liên kết.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Với công cụ này, bạn có thể thay đổi những thiết lập đăng ký thành viên và thông tin cá nhân của thành viên trong hệ thống.',

	'ACC_ACTIVATION'				=> 'Kích hoạt tài khoản',
	'ACC_ACTIVATION_EXPLAIN'		=> 'Tuỳ chọn này cho phép bạn quyết định cách thức kích hoạt tài khoản thành viên khi đăng ký mới. Bạn cũng có thể cho ngưng đăng ký thành viên mới với tuỳ chọn này.',
	'ACC_ACTIVATION_WARNING' => 'Xin lưu ý rằng phương pháp kích hoạt hiện được chọn yêu cầu bật email, nếu không đăng ký sẽ bị vô hiệu hóa. Chúng tôi khuyên bạn nên chọn một phương thức kích hoạt khác hoặc có thể kích hoạt lại email. ',
	'NEW_MEMBER_POST_LIMIT'			=> 'Giới hạn gửi bài thành viên mới',
	'NEW_MEMBER_POST_LIMIT_EXPLAIN'	=> 'Thành viên mới trong nhóm <em>Thành viên mới đăng ký</em> cho tới khi họ đạt một số giới hạn về bài viết. Bạn có thể dùng nhóm này để hạn chế họ trong việc sử dụng Tin nhắn riêng để dễ dàng kiểm tra Tin nhắn riêng. <strong>Đặt giá trị này thành 0 để vô hiệu chức năng này.</strong>',
	'NEW_MEMBER_GROUP_DEFAULT'		=> 'Thiết đặt nhóm Thành viên mới đăng ký thành mặc định',
	'NEW_MEMBER_GROUP_DEFAULT_EXPLAIN'	=> 'Nếu đặt thành yes và giới hạn bài viết thành viên mới được quy định thành viên không chỉ được đưa vào nhóm <em>Thành viên mới đăng ký</em> , mà nhóm này còn là nhóm mặc định của họ.',

	'ACC_ADMIN'						=> 'Bởi quản trị viên',
	'ACC_DISABLE'					=> 'Ngưng đăng ký thành viên mới',
	'ACC_NONE'						=> 'Không cần',
	'ACC_USER'						=> 'Bởi thành viên',
//	'ACC_USER_ADMIN'				=> 'Thành viên + quản trị viên',
	'ALLOW_EMAIL_REUSE'				=> 'Cho phép sử dụng lại địa chỉ Email',
	'ALLOW_EMAIL_REUSE_EXPLAIN'		=> 'Tuỳ chọn cho phép những thành viên khác nhau có thể sử dụng cùng một địa chỉ Email giống nhau.',
	'COPPA'							=> 'Điều khoản COPPA',
	'COPPA_FAX'						=> 'Số Fax dùng cho điều khoản COPPA',
	'COPPA_MAIL'					=> 'Địa chỉ Email dùng cho điều khoản COPPA',
	'COPPA_MAIL_EXPLAIN'			=> 'Địa chỉ Email dùng để cho cha mẹ hay người bảo hộ của các thành viên trong điều khoản COPPA gửi bản cam kết đến.',
	'ENABLE_COPPA'					=> 'Bật điều khoản COPPA',
	'ENABLE_COPPA_EXPLAIN'			=> 'Tuỳ chọn này yêu cầu các thành viên từ 13 tuổi trở xuống phải cam kết với điều khoản U.S. COPPA. Nếu bạn vô hiệu điều khoản này thì các thành viên trong nhóm COPPA sẽ không còn được hiển thị nữa.',
	'MAX_CHARS'						=> 'Tối đa',
	'MIN_CHARS'						=> 'Tối thiểu',
	'NO_AUTH_PLUGIN'				=> 'Không có phương pháp xác thực thích hợp nào được tìm thấy.',
	'PASSWORD_LENGTH'				=> 'Độ dài mật khẩu',
	'PASSWORD_LENGTH_EXPLAIN'		=> 'Số ký tự tối thiểu và tối đa bắt buộc đối với mật khẩu.',
	'REG_LIMIT'						=> 'Số lần giới hạn đăng ký',
	'REG_LIMIT_EXPLAIN'				=> 'Số lần nạp lại tốt đa mã xác nhận trong phần đăng ký thành viên trước khi bị khoá đăng ký trong phiên đăng nhập đó.',
	'USERNAME_ALPHA_ONLY'			=> 'Chỉ được dùng vừa chữ cái vừa chữ số',
	'USERNAME_ALPHA_SPACERS'		=> 'Vừa chữ cái vừa chữ số và có khoảng trắng',
	'USERNAME_ASCII'				=> 'Chỉ được dùng ký tự ASCII (không có mã Unicode quốc tế)',	
	'USERNAME_LETTER_NUM'			=> 'Bất kỳ chữ cố và chữ cái nào',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Bất kỳ chữ số, chữ cái và khoảng trắng nào',
	'USERNAME_CHARS'				=> 'Giới hạn ký tự trong tên thành viên',
	'USERNAME_CHARS_ANY'			=> 'Bất kỳ ký tự nào',
	'USERNAME_CHARS_EXPLAIN'		=> 'Giới hạn loại ký tự được sử dụng trong tên thành viên và khoảng trắng: -, +, _, [ và ].',
	'USERNAME_LENGTH'				=> 'Độ dài tên thành viên',
	'USERNAME_LENGTH_EXPLAIN'		=> 'Số ký tự tối thiểu và tối đa bắt buộc đối với tên thành viên.',
));

// Feeds
$lang = array_merge($lang, array(
	'ACP_FEED_MANAGEMENT'				=> 'General syndication feeds settings',
	'ACP_FEED_MANAGEMENT_EXPLAIN'		=> 'This module makes available various ATOM feeds, parsing any BBCode in posts to make them readable in external feeds.',

	'ACP_FEED_GENERAL'					=> 'General feed settings',
	'ACP_FEED_POST_BASED'				=> 'Post-based feed settings',
	'ACP_FEED_TOPIC_BASED'				=> 'Topic-based feed settings',
	'ACP_FEED_SETTINGS_OTHER'			=> 'Other feeds and settings',

	'ACP_FEED_ENABLE'					=> 'Enable feeds',
	'ACP_FEED_ENABLE_EXPLAIN'			=> 'Turns on or off ATOM feeds for the entire board.<br />Disabling this switches off all feeds, no matter how the options below are set.',
	'ACP_FEED_LIMIT'					=> 'Number of items',
	'ACP_FEED_LIMIT_EXPLAIN'			=> 'The maximum number of feed items to display.',

	'ACP_FEED_OVERALL'					=> 'Enable board-wide feed',
	'ACP_FEED_OVERALL_EXPLAIN'			=> 'Board-wide new posts.',
	'ACP_FEED_FORUM'					=> 'Enable per-forum feeds',
	'ACP_FEED_FORUM_EXPLAIN'			=> 'Single forum and subforums new posts.',
	'ACP_FEED_TOPIC'					=> 'Enable per-topic feeds',
	'ACP_FEED_TOPIC_EXPLAIN'			=> 'Single topics new posts.',

	'ACP_FEED_TOPICS_NEW'				=> 'Enable new topics feed',
	'ACP_FEED_TOPICS_NEW_EXPLAIN'		=> 'Enables the “New Topics” feed, which displays the last created topics including the first post.',
	'ACP_FEED_TOPICS_ACTIVE'			=> 'Enable active topics feed',
	'ACP_FEED_TOPICS_ACTIVE_EXPLAIN'	=> 'Enables the “Active Topics” feed, which displays the last active topics including the last post.',
	'ACP_FEED_NEWS'						=> 'News feed',
	'ACP_FEED_NEWS_EXPLAIN'				=> 'Pull the first post from these forums. Select no forums to disable news feed.<br />Select multiple forums by holding <samp>CTRL</samp> and clicking.',

	'ACP_FEED_OVERALL_FORUMS'			=> 'Enable forums feed',
	'ACP_FEED_OVERALL_FORUMS_EXPLAIN'	=> 'Enables the “All forums” feed, which displays a list of forums.',

	'ACP_FEED_HTTP_AUTH'				=> 'Allow HTTP Authentication',
	'ACP_FEED_HTTP_AUTH_EXPLAIN'		=> 'Enables HTTP authentication, which allows users to receive content that is hidden to guest users by adding the <samp>auth=http</samp> parameter to the feed URL. Please note that some PHP setups require additional changes to the .htaccess file. Instructions can be found in that file.',
	'ACP_FEED_ITEM_STATISTICS'			=> 'Item statistics',
	'ACP_FEED_ITEM_STATISTICS_EXPLAIN'	=> 'Display individual statistics underneath feed items<br />(e.g. posted by, date and time, replies, views)',
	'ACP_FEED_EXCLUDE_ID'				=> 'Exclude these forums',
	'ACP_FEED_EXCLUDE_ID_EXPLAIN'		=> 'Content from these will be <strong>not included in feeds</strong>. Select no forum to pull data from all forums.<br />Select/Deselect multiple forums by holding <samp>CTRL</samp> and clicking.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'		=> 'Với công cụ này, bạn có thể thay đổi những thiết lập mặc định đối với mã xác nhận và cơ chế đồ họa của mã xác nhận CAPTCHA này trong hệ thống.',
	'ACP_VC_EXT_GET_MORE' => 'Để có thêm các plugin chống spam bổ sung (và có thể tốt hơn), hãy truy cập <a href="https://www.phpbb.com/go/anti-spam-ext"> <strong> phpBB.com Cơ sở dữ liệu tiện ích mở rộng </strong> </a>. Để biết thêm thông tin về cách ngăn spam trên diễn đàn của bạn, hãy truy cập <a href="https://www.phpbb.com/go/anti-spam"> <strong> Cơ sở Kiến thức phpBB.com </strong> </a> . ',
	'AVAILABLE_CAPTCHAS'					=> 'Các plugin có thể dùng',
	'CAPTCHA_UNAVAILABLE'					=> 'CAPTCHA này không chọn được vì hệ thống chưa đáp ứng được các yêu cầu của nó.',
	'CAPTCHA_GD'							=> 'Mã xác nhận GD CAPTCHA',
	'CAPTCHA_GD_3D'							=> 'Mã xác nhận GD CAPTCHA 3D',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'Mã xác nhận GD CAPTCHA với cận cảnh tạp nhiễu',
	'CAPTCHA_GD_EXPLAIN'					=> 'Sử dụng thư viện GD để tạo nhiều mã xác nhận CAPTCHA nâng cao hơn.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Sử dụng hiệu ứng cận cảnh tạp nhiễu để tạo ra mã xác nhận GD CAPTCHA phức tạp hơn.',
	'CAPTCHA_GD_X_GRID'						=> 'Mã xác nhận GD CAPTCHA với hình nền tạp nhiễu theo trục ngang',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Sử dụng những thiết lập càng thấp của tùy chọn này càng làm cho mã xác nhận GD CAPTCHA khó hơn. Nhập vào số <strong>0</strong> để vô hiệu việc tạo hình nền tạp nhiễu theo trục ngang.',
	'CAPTCHA_GD_Y_GRID'						=> 'Mã xác nhận GD CAPTCHA với hình nền tạp nhiễu theo trục đứng',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Sử dụng những thiết lập càng thấp của tùy chọn này càng làm cho mã xác nhận GD CAPTCHA khó hơn. Nhập vào số <strong>0</strong> để vô hiệu việc tạo hình nền tạp nhiễu theo trục đứng.',
	'CAPTCHA_GD_WAVE'						=> 'GD CAPTCHA wave distortion',
	'CAPTCHA_GD_WAVE_EXPLAIN'				=> 'This applies a wave distortion to the CAPTCHA.',
	'CAPTCHA_GD_3D_NOISE'					=> 'Add 3D-noise objects',
	'CAPTCHA_GD_3D_NOISE_EXPLAIN'			=> 'This adds additional objects to the CAPTCHA, over the letters.',
	'CAPTCHA_GD_FONTS'						=> 'Use different fonts',
	'CAPTCHA_GD_FONTS_EXPLAIN'				=> 'This setting controls how many different letter shapes are used. You can just use the default shapes or introduce altered letters. Adding lowercase letters is also possible.',
	'CAPTCHA_FONT_DEFAULT'					=> 'Default',
	'CAPTCHA_FONT_NEW'						=> 'New Shapes',
	'CAPTCHA_FONT_LOWER'					=> 'Also use lowercase',
	'CAPTCHA_NO_GD'							=> 'CAPTCHA without GD',
	'CAPTCHA_PREVIEW_MSG'			=> 'Những thay đổi của bạn về thiết lập mã xác nhận không được lưu lại. Bởi vì đây chỉ là công cụ xem trước kết quả của mã xác nhận.',
	'CAPTCHA_PREVIEW_EXPLAIN'		=> 'Mã xác nhận CAPTCHA sẽ được hiển thị giống với những thiết lập hiện tại. Bạn hãy bấm vào nút xem trước để nạp lại hình. Lưu ý bạn rằng những mã xác nhận CAPTCHA này được tạo ra ngẫu nhiên và sẽ khác biệt sau mỗi lần nạp lại.',

	'CAPTCHA_SELECT' => 'Plugin đã cài đặt',
	'CAPTCHA_SELECT_EXPLAIN' => 'Trình đơn thả xuống chứa các plugin được bảng ghi nhận. Các mục nhập màu xám không khả dụng ngay bây giờ và có thể cần cấu hình trước khi sử dụng. ',
	'CAPTCHA_CONFIGURE' => 'Cấu hình plugin',
	'CAPTCHA_CONFIGURE_EXPLAIN' => 'Thay đổi cài đặt cho plugin đã chọn.',
	'CONFIGURE' => 'Cấu hình',
	'CAPTCHA_NO_OPTIONS' => 'Plugin này không có tùy chọn cấu hình.',

	'VISUAL_CONFIRM_POST'			=> 'Bật mã xác nhận khi khách gửi bài',
	'VISUAL_CONFIRM_POST_EXPLAIN'	=> 'Tuỳ chọn yêu cầu khách khi gửi bài phải nhập vào một đoạn mã xác nhận trong hình ảnh được tạo ra ngẫu nhiên để ngăn chặn việc gửi bài viết tự động hàng loạt vào hệ thống.',
	
	'VISUAL_CONFIRM_REG'					=> 'Bật mã xác nhận khi đăng ký thành viên',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Tuỳ chọn yêu cầu các thành viên mới khi đăng ký phải nhập vào một đoạn mã xác nhận trong hình ảnh được tạo ra ngẫu nhiên để ngăn chặn việc đăng ký thành viên tự động hàng loạt vào hệ thống.',
	'VISUAL_CONFIRM_REFRESH'				=> 'Cho phép người dùng làm mới tác vụ chống spambot',
	'VISUAL_CONFIRM_REFRESH_EXPLAIN'		=> 'Cho phép người dùng yêu cầu tác vụ chống spam mới nếu họ không thể giải quyết tác vụ hiện tại trong quá trình đăng ký. Một số plugin có thể không hỗ trợ tùy chọn này.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Những thiết lập bên dưới được sử dụng để gửi cookie đến trình duyệt của khách ghé thăm website. Trong hều hết các trường hợp, bạn nên sử dụng giá trị mặc định của cookie và đừng thay đổi chúng nếu không đủ khả năng quản lý hay không thực sự cần thiết. Nếu bạn thực sự cần thay đổi giá trị mặc định, hãy cẩn thận vì những thiết lập không chính xác sẽ ngăn cản thành viên đăng nhập vào hệ thống.',

	'COOKIE_DOMAIN'				=> 'Tên miền cookie',
	'COOKIE_DOMAIN_EXPLAIN' => 'Trong hầu hết các trường hợp, miền cookie là tùy chọn. Để trống nếu bạn không chắc chắn. <br> <br> Trong trường hợp bạn có một bảng tích hợp với phần mềm khác hoặc có nhiều tên miền, thì để xác định miền cookie bạn cần làm như sau. Nếu bạn có một cái gì đó như <i> example.com </ i> và <i> forums.example.com </ i> hoặc có lẽ <i> forums.example.com </ i> và <i> blog.example .com </ i> Xóa các tên miền phụ cho đến khi bạn tìm thấy miền chung, <i> example.com </ i>. Bây giờ thêm một dấu chấm ở phía trước của tên miền phổ biến và bạn sẽ nhập .example.com (lưu ý dấu chấm ở đầu). ',
	'COOKIE_NAME' => 'Tên cookie',
	'COOKIE_NAME_EXPLAIN' => 'Đây có thể là bất cứ điều gì bạn muốn, biến nó thành bản gốc. Bất cứ khi nào cài đặt cookie được thay đổi, tên của cookie sẽ được thay đổi. ',
	'COOKIE_NOTICE' => 'Thông báo cookie',
	'COOKIE_NOTICE_EXPLAIN' => 'Nếu bật thông báo cookie sẽ được hiển thị cho người dùng khi truy cập vào bảng của bạn. Điều này có thể được yêu cầu theo luật tùy thuộc vào nội dung của bảng của bạn và các tiện ích mở rộng đã bật. ',
	'COOKIE_PATH' => 'Đường dẫn cookie',
	'COOKIE_PATH_EXPLAIN' => 'Điều này thường sẽ giống như đường dẫn tập lệnh của bạn hoặc chỉ đơn giản là dấu gạch chéo để làm cho cookie có thể truy cập trên tên miền trang web.',
	'COOKIE_SECURE'				=> 'Cookie bảo mật',
	'COOKIE_SECURE_EXPLAIN'		=> 'Nếu máy chủ của bạn đang chạy SSL thì hãy bật tuỳ chọn này, còn nếu không thì hãy vô hiệu đi. Nếu như bạn bật tuỳ chọn này và máy chủ của bạn không chạy trên SSL thì kết quả là sẽ xảy ra lỗi trong suốt quá trình truy xuất đến máy chủ.',
	'ONLINE_LENGTH'				=> 'Thời gian tính thành viên đang trực tuyến',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Số phút mà những thành viên không còn hoạt động trong hệ thống sẽ không được hiển thị trong danh sách “Ai đang trực tuyến?”. Giá trị thời gian thiết lập càng lớn thì càng mất nhiều thời gian hơn để tạo ra danh sách.',
	'SESSION_LENGTH'			=> 'Thời gian phiên đăng nhập có hiệu lực',
	'SESSION_LENGTH_EXPLAIN'	=> 'Số giây mà phiên đăng nhập có hiệu lực kể từ khi được tạo mới.',
));

// Contact Settings
$lang = array_merge($lang, array(
	'ACP_CONTACT_SETTINGS_EXPLAIN' => 'Tại đây bạn có thể bật và tắt trang liên hệ và cũng thêm văn bản được hiển thị trên trang.',

	'CONTACT_US_ENABLE' => 'Bật trang liên hệ',
	'CONTACT_US_ENABLE_EXPLAIN' => 'Trang này cho phép người dùng gửi email cho ban quản trị. Xin lưu ý rằng tùy chọn email trên toàn cầu cũng phải được bật. Bạn có thể tìm thấy tùy chọn này trong Chung> Giao tiếp Khách hàng> Cài đặt email. ',

	'CONTACT_US_INFO' => 'Thông tin liên hệ',
	'CONTACT_US_INFO_EXPLAIN' => 'Thông báo được hiển thị trên trang liên hệ',
	'CONTACT_US_INFO_PREVIEW' => 'Thông tin trang liên hệ - Xem trước',
	'CONTACT_US_INFO_UPDATED' => 'Thông tin trang liên hệ đã được cập nhật.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Với công cụ này, bạn có thể bật hay tắt những chức năng nhất định của hệ thống để giảm bớt số lượng xử lý được yêu cầu gửi đến máy chủ. Trên hều hết các máy chủ, bạn không cần thiết phải tắt bất kỳ chức năng nào của hệ thống tại đây. Tuy nhiên, trên một vài máy chủ nhất định hoặc các hệ thống sử dụng dịch vụ lưu trữ Web dùng chung với nhiều người khác trên cùng một máy chủ, việc tắt một vài chức năng không cần đến là rất hết sức cần thiết để giảm bớt khối lượng công việc xử lý cho máy chủ. Bạn cũng nên xác định giới hạn thời gian nạp hệ thống và số lượng phiên đăng nhập vượt quá để hệ thống tự động chuyển sang chế độ ngưng hoạt động kịp thời.',
	
	'ALLOW_CDN' => 'Cho phép sử dụng mạng phân phối nội dung của bên thứ ba',
	'ALLOW_CDN_EXPLAIN' => 'Nếu cài đặt này được bật, một số tệp sẽ được phân phát từ máy chủ bên thứ ba bên ngoài thay vì máy chủ của bạn. Điều này làm giảm băng thông mạng được yêu cầu bởi máy chủ của bạn, nhưng có thể trình bày một vấn đề riêng tư đối với một số quản trị viên hội đồng quản trị. Trong cài đặt phpBB mặc định, điều này bao gồm tải "jQuery" và phông chữ "Open Sans" từ mạng phân phối nội dung của Google. ',
	'ALLOW_LIVE_SEARCHES' => 'Cho phép tìm kiếm trực tiếp',
	'ALLOW_LIVE_SEARCHES_EXPLAIN' => 'Nếu cài đặt này được bật, người dùng được cung cấp các đề xuất từ khóa khi họ nhập vào các trường nhất định trong toàn bộ bảng.',
	'CUSTOM_PROFILE_FIELDS'			=> 'Mục thông tin cá nhân tuỳ biến',
	'LIMIT_LOAD'					=> 'Giới hạn thời gian nạp hệ thống',
	'LIMIT_LOAD_EXPLAIN'			=> 'Nếu trong vòng một phút hệ thống nạp trung bình vượt quá giá trị được thiết lập này thì hệ thống sẽ tự động chuyển sang chế độ ngưng hoạt động. Giá trị 1.0 gần bằng ~100% tài nguyên được sử dụng của một bộ xử lý máy chủ. Chức năng này chỉ có tác dụng trên các máy chủ UNIX và chỉ trên những máy chủ này, thời gian giới hạn được thiết lập mới có thể sử dụng được. Giá trị này sẽ xác lập lại chính nó thành <strong>0</strong> nếu hệ thống phpBB không thể nhận được giới hạn nạp.',
	'LIMIT_SESSIONS'				=> 'Giới hạn số phiên đăng nhập',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Nếu số lượng phiên đăng nhập vượt quá giá trị được thiết lập này trong quãng thời gian một phút thì hệ thống sẽ tự động chuyển sang chế độ ngưng hoạt động. Nhập vào số <strong>0</strong> để không hạn chế số phiên đăng nhập.',
	'LOAD_CPF_MEMBERLIST'			=> 'Hiển thị các mục thông tin cá nhân tuỳ biến trong danh sách thành viên',
	'LOAD_CPF_PM' => 'Hiển thị trường tiểu sử tùy chỉnh trong thư cá nhân',
	'LOAD_CPF_VIEWPROFILE'			=> 'Hiển thị các mục thông tin cá nhân tuỳ biến trong trang thông tin cá nhân',
	'LOAD_CPF_VIEWTOPIC'			=> 'Hiển thị các mục thông tin cá nhân tuỳ biến trong trang xem chủ đề',
	'LOAD_USER_ACTIVITY'			=> 'Hiển thị những hoạt động của thành viên',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Hiển thị những chuyên mục/chủ đề không bị khoá trong phần thông tin cá nhân của thành viên và trong bảng điều khiển của thành viên. Chúng tôi khuyên bạn nên tắt tuỳ chọn này trên các diễn đàn có từ một triệu bài viết trở lên.',
	'LOAD_USER_ACTIVITY_LIMIT' => 'Giới hạn bài đăng hoạt động của người dùng',
	'LOAD_USER_ACTIVITY_LIMIT_EXPLAIN' => 'Chủ đề / diễn đàn hiện hoạt sẽ không được hiển thị cho người dùng có nhiều hơn số lượng bài đăng này. Đặt thành 0 để tắt giới hạn. ',
	'READ_NOTIFICATION_EXPIRE_DAYS' => 'Đọc hết hạn thông báo',
	'READ_NOTIFICATION_EXPIRE_DAYS_EXPLAIN' => 'Số ngày sẽ trôi qua trước khi thông báo đã đọc sẽ tự động bị xóa. Đặt giá trị này thành 0 để thực hiện thông báo vĩnh viễn. ',
	'RECOMPILE_STYLES'				=> 'Biên dịch lại các thành phần giao diện đã cũ',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Kiểm tra những thành phần giao diện đã được cập nhật trong hệ thống tập tin giao diện và biên dịch lại.',
	'YES_ANON_READ_MARKING'			=> 'Bật đánh dấu chủ đề cho khách',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Tuỳ chọn sắp xếp thông tin trạng thái các chủ đề đã xem/chưa xem cho khách. Nếu bạn vô hiệu tuỳ chọn này, các bài viết sẽ luôn luôn được đánh dấu đã xem đối với khách.',
	'YES_BIRTHDAYS'					=> 'Hiển thị danh sách các thành viên có sinh nhật',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Nếu bạn vô hiệu tùy chọn này, danh sách các thành viên có ngày sinh nhật sẽ không được hiển thị nữa. Ngoài ra, để thiết lập này có tác dụng, thiết lập cho phép thông tin sinh nhật của thành viên cũng phải được bật.',
	'YES_JUMPBOX'					=> 'Hiển thị danh sách chuyên mục',
	'YES_MODERATORS'				=> 'Hiển thị danh sách điều hành viên',
	'YES_ONLINE'					=> 'Hiển thị danh sách thành viên đang trực tuyến',
	'YES_ONLINE_EXPLAIN'			=> 'Hiển thị thông tin các thành viên đang trực tuyến trên trang chủ, phần xem chuyên mục và phần xem chủ đề.',
	'YES_ONLINE_GUESTS'				=> 'Hiển thị danh sách khách đang trực tuyến trong phần xem thông tin trực tuyến',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Cho phép hiển thị thông tin về khách trong phần xem thông tin trực tuyến.',
	'YES_ONLINE_TRACK'				=> 'Hiển thị hình ảnh thành viên đang trực tuyến',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Hiển thị thông tin thành viên đang trực tuyến trong trang thông tin cá nhân và trang xem chủ đề.',
	'YES_POST_MARKING'				=> 'Hiển thị những chủ đề được đánh dấu',
	'YES_POST_MARKING_EXPLAIN'		=> 'Đánh dấu cho thành viên biết vừa gửi bài trong chủ đề nào.',
	'YES_READ_MARKING'				=> 'Đánh dấu chủ đề ngay trên máy chủ',
	'YES_READ_MARKING_EXPLAIN'		=> 'Lưu trữ thông tin xem/chưa xem bài viết của thành viên trong cơ sở dữ liệu thay vì sử dụng cookie.',
	'YES_UNREAD_SEARCH'				=> 'Cho phép tìm kiếm bài viết chưa xem',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'Hệ thống phpBB hỗ trợ sử dụng các gói bổ sung chức năng hoặc gói thành phần chức năng xác thực. Điều này giúp bạn lựa chọn phương pháp xác thực các thành viên khi họ đăng nhập vào hệ thống. Mặc định, có ba plugin được cung cấp kèm theo hệ thống phpBB: DB, LDAP và Apache. Không phải tất cả các phương pháp đều yêu cầu bạn phải khai báo thêm thông tin với hệ thống. Bạn chỉ cần cung cấp thêm thông tin cho hệ thống biết liên quan đến phương pháp xác thực mà mình đã chọn.',

	'AUTH_METHOD'				=> 'Chọn phương pháp xác thực',

	'AUTH_PROVIDER_OAUTH_ERROR_ELEMENT_MISSING' => 'Cả khóa và bí mật của từng nhà cung cấp dịch vụ OAuth được bật phải được cung cấp. Chỉ một người được cung cấp cho nhà cung cấp dịch vụ OAuth. ',
	'AUTH_PROVIDER_OAUTH_EXPLAIN' => 'Mỗi nhà cung cấp OAuth yêu cầu một bí mật và khóa duy nhất để xác thực với máy chủ bên ngoài. Những dịch vụ này phải được cung cấp bởi dịch vụ OAuth khi bạn đăng ký trang web của bạn với họ và phải được nhập chính xác như được cung cấp cho bạn. <br> Bất kỳ dịch vụ nào không có cả khóa và bí mật được nhập tại đây sẽ không có sẵn để sử dụng bởi người dùng diễn đàn. Cũng lưu ý rằng người dùng đó vẫn có thể đăng ký và đăng nhập bằng trình cắm thêm xác thực DB. ',
	'AUTH_PROVIDER_OAUTH_KEY' => 'Khóa',
	'AUTH_PROVIDER_OAUTH_TITLE' => 'OAuth',
	'AUTH_PROVIDER_OAUTH_SECRET' => 'Bí mật',
	
	'APACHE_SETUP_BEFORE_USE'	=> 'Bạn phải cài đặt bộ xác thực cho Apache trước khi bạn chuyển đổi hệ thống đến phương pháp xác thực này. Cần lưu ý rằng tên tài khoản bạn sử dụng cho phương pháp xác thực này của Apache phải giống với tài khoản thành viên của bạn trong hệ thống. Việc xác thực bằng Apache chỉ có thể sử dụng được nếu <samp>mod_php</samp> (không phải phiên bản CGI) và <samp>safe_mode</samp> đã được vô hiệu trên máy chủ.',

	'LDAP'							=> 'LDAP',
	'LDAP_DN'						=> 'LDAP base <var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> 'This is the Distinguished Name, locating the user information, e.g. <samp>o=My Company,c=US</samp>.',
	'LDAP_EMAIL'					=> 'LDAP email attribute',
	'LDAP_EMAIL_EXPLAIN'			=> 'Set this to the name of your user entry email attribute (if one exists) in order to automatically set the email address for new users. Leaving this empty results in empty email address for users who log in for the first time.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'Binding to LDAP server failed with specified user/password.',
	'LDAP_NO_EMAIL'					=> 'The specified email attribute does not exist.',
	'LDAP_NO_IDENTITY'				=> 'Could not find a login identity for %s.',
	'LDAP_PASSWORD'					=> 'LDAP password',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Leave blank to use anonymous binding, otherwise fill in the password for the above user. Required for Active Directory Servers.<br><em><strong>Warning:</strong> This password will be stored as plain text in the database, visible to everybody who can access your database or who can view this configuration page.</em>',
	'LDAP_PORT'						=> 'LDAP server port',
	'LDAP_PORT_EXPLAIN'				=> 'Optionally you can specify a port which should be used to connect to the LDAP server instead of the default port 389.',
	'LDAP_SERVER'					=> 'LDAP server name',
	'LDAP_SERVER_EXPLAIN'			=> 'If using LDAP this is the hostname or IP address of the LDAP server. Alternatively you can specify an URL like ldap://hostname:port/',
	'LDAP_UID'						=> 'LDAP <var>uid</var>',
	'LDAP_UID_EXPLAIN'				=> 'This is the key under which to search for a given login identity, e.g. <var>uid</var>, <var>sn</var>, etc.',
	'LDAP_USER'						=> 'LDAP user <var>dn</var>',
	'LDAP_USER_EXPLAIN'				=> 'Leave blank to use anonymous binding. If filled in phpBB uses the specified distinguished name on login attempts to find the correct user, e.g. <samp>uid=Username,ou=MyUnit,o=MyCompany,c=US</samp>. Required for Active Directory Servers.',
	'LDAP_USER_FILTER'				=> 'LDAP user filter',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'Optionally you can further limit the searched objects with additional filters. For example <samp>objectClass=posixGroup</samp> would result in the use of <samp>(&amp;(uid=$username)(objectClass=posixGroup))</samp>',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Với công cụ này, bạn có thể thay đổi các thiết lập về máy chủ và tên miền trong hệ thống. Hãy chắc chắn về những thông tin mà bạn nhập vào trong phần này, những lỗi xảy ra sẽ dẫn đến việc gửi thông tin qua Email không còn chính xác. Khi nhập vào tên miền, bạn phải nhớ đính kèm cả giao thức <samp>http://</samp> hoặc các giao thức khác. Chỉ thay đổi số cổng máy chủ nếu bạn chắc chắn máy chủ của mình đang chạy trên cổng khác, cổng <strong>80</strong> luôn chính xác và được sử dụng trong hầu hết mọi trường hợp.',

	'ENABLE_GZIP'				=> 'Bật chế độ nén GZip',
	'ENABLE_GZIP_EXPLAIN'		=> 'Những trang nội dung tạo ra sẽ được nén lại trước khi gửi đến cho người truy cập. Tùy chọn này có thể giảm bớt băng thông cho website của bạn nhưng đồng thời lại tăng thêm hiệu suất hoạt động của cả bộ xử lý máy chủ lẫn trên máy tính cá nhân người truy cập.',
	'FORCE_SERVER_VARS'			=> 'Yêu cầu thiết lập máy chủ',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Nếu bật tuỳ chọn này, những thiết lập máy chủ đã được xác định trong phần này sẽ được sử dụng như những giá trị đã được thiết lập tự động.',
	'ICONS_PATH'				=> 'Thư mục biểu tượng bài viết',
	'ICONS_PATH_EXPLAIN'		=> 'Đường dẫn đến thư mục chứa biểu tượng bài viết trong hệ thống, ví dụ như <samp>images/icons</samp>.',
	'MOD_REWRITE_ENABLE' => 'Bật ghi đè URL',
	'MOD_REWRITE_ENABLE_EXPLAIN' => 'Khi được bật, các URL chứa\' app.php \'sẽ được viết lại để xóa tên tệp (ví dụ: app.php / foo sẽ trở thành / foo). <strong> Mô-đun mod_rewrite của máy chủ Apache là bắt buộc để chức năng này hoạt động; nếu tùy chọn này được bật mà không có hỗ trợ mod_rewrite, các URL trên bảng của bạn có thể bị hỏng. </strong> ',
	'MOD_REWRITE_DISABLED' => 'Mô-đun <strong> mod_rewrite </strong> trên máy chủ web Apache của bạn bị tắt. Bật mô-đun hoặc liên hệ với nhà cung cấp dịch vụ lưu trữ web của bạn nếu bạn muốn bật tính năng này. ',
	'MOD_REWRITE_INFORMATION_UNAVAILABLE' => 'Chúng tôi không thể xác định máy chủ này có hỗ trợ viết lại URL hay không. Cài đặt này có thể được bật nhưng nếu không có viết lại URL, đường dẫn được tạo bởi bảng này (chẳng hạn như để sử dụng trong liên kết) có thể bị hỏng. Liên hệ với nhà cung cấp dịch vụ lưu trữ web của bạn nếu bạn không chắc chắn liệu bạn có thể bật tính năng này một cách an toàn hay không. ',
	'PATH_SETTINGS'				=> 'Thiết lập đường dẫn đến thư mục',
	'RANKS_PATH'				=> 'Thư mục hình xếp hạng',
	'RANKS_PATH_EXPLAIN'		=> 'Đường dẫn đến thư mục chứa hình xếp hạng trong hệ thống, ví dụ như <samp>images/ranks</samp>.',
	'SCRIPT_PATH'				=> 'Đường dẫn hệ thống',
	'SCRIPT_PATH_EXPLAIN'		=> 'Đường dẫn đến thư mục mà hệ thống phpBB được định vị đối với tên miền, ví dụ như <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'Tên miền',
	'SERVER_NAME_EXPLAIN'		=> 'Tên miền mà máy chủ đang sử dụng, ví dụ như <samp>www.foo.bar</samp>.',
	'SERVER_PORT'				=> 'Cổng máy chủ',
	'SERVER_PORT_EXPLAIN'		=> 'Cổng mà máy chủ của bạn đang sử dụng, thông thường là <strong>80</strong>, bạn chỉ nên thay đổi nếu chắc chắn máy chủ của mình đang chạy trên cổng khác.',
	'SERVER_PROTOCOL'			=> 'Giao thức máy chủ',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Giao thức của máy chủ được sử dụng nếu những thiết lập máy chủ này được yêu cầu bên trên. Nếu bạn để trống hoặc không yêu cầu thì giao thức sẽ được xác định bằng thiết lập cookie bảo mật, ví dụ như <samp>http://</samp> hay <samp>https://</samp>.',
	'SERVER_URL_SETTINGS'		=> 'Thiết lập địa chỉ URL cho máy chủ',
	'SMILIES_PATH'				=> 'Thư mục biểu tượng vui',
	'SMILIES_PATH_EXPLAIN'		=> 'Đường dẫn đến thư mục chứa biểu tượng vui trong hệ thống, ví dụ như <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'			=> 'Thư mục biểu tượng tập tin',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Đường dẫn đến thư mục chứa biểu tượng tập tin trong hệ thống, ví dụ như <samp>images/upload_icons</samp>.',
	'USE_SYSTEM_CRON' => 'Chạy các tác vụ định kỳ từ hệ thống cron',
	'USE_SYSTEM_CRON_EXPLAIN' => 'Khi tắt, phpBB sẽ sắp xếp các tác vụ định kỳ được chạy tự động. Khi bật, phpBB sẽ không tự lên lịch bất kỳ nhiệm vụ định kỳ nào; người quản trị hệ thống phải sắp xếp cho <code> bin / phpbbcli.php cron: run </ code> để chạy bởi cron hệ thống theo chu kỳ đều đặn (ví dụ: cứ sau 5 phút). ',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Với công cụ này, bạn có thể thay đổi những thiết lập liên quan đến phiên đăng nhập và việc đăng nhập trong hệ thống.',

	'ALL'							=> 'Tất cả',
	'ALLOW_AUTOLOGIN'				=> 'Cho phép đăng nhập tự động',
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Tuỳ chọn cho phép thành viên có thể đăng nhập tự động vào hệ thống khi họ ghé thăm website.',
	'ALLOW_PASSWORD_RESET' => 'Cho phép đặt lại mật khẩu ("Quên mật khẩu")',
	'ALLOW_PASSWORD_RESET_EXPLAIN' => 'Xác định xem người dùng có thể sử dụng liên kết "Tôi quên mật khẩu của tôi" trên trang đăng nhập để khôi phục tài khoản của họ hay không. Nếu bạn sử dụng cơ chế xác thực bên ngoài, bạn có thể muốn tắt tính năng này. ',
	'AUTOLOGIN_LENGTH'				=> 'Số ngày hết hạn khoá đăng nhập tự động',
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Số ngày kể từ lần ghé thăm trước của thành viên, khoá đăng nhập tự động sẽ hết hạn. Nhập vào số <strong>0</strong> để vô hiệu chức năng này.',
	'BROWSER_VALID'					=> 'Kiểm tra trình duyệt',
	'BROWSER_VALID_EXPLAIN'			=> 'Bật chế độ kiểm tra trình duyệt cho mỗi phiên đăng nhập để tăng cường khả năng bảo mật.',
	'CHECK_DNSBL'					=> 'Kiểm tra lại địa chỉ IP với danh sách các địa chỉ đen DNS',
	'CHECK_DNSBL_EXPLAIN'			=> 'Nếu bạn bật chức năng này, địa chỉ IP sẽ được tiến hành kiểm tra lại với danh sách từ các dịch vụ DNSBL sau đây trong quá trình đăng ký và gửi bài: <a href="http://spamcop.net">spamcop.net</a>, <a href="http://dsbl.org">dsbl.org</a> và <a href="http://www.spamhaus.org">www.spamhaus.org</a>. Việc tra cứu các danh sách này có thể mất nhiều thời gian, tùy thuộc vào cấu hình máy chủ của bạn. Nếu việc kiểm tra làm chậm lại hệ thống hoặc có quá nhiều kết quả sai được báo cáo, chúng tôi khuyên bạn nên vô hiệu chức năng này.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Kiểm tra tên miền của Email theo bản ghi tên miền MX hợp lệ',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Nếu bạn bật chức năng này, tên miền của các địa chỉ Email được cung cấp trong quá trình đăng ký và thay đổi thông tin cá nhân sẽ được kiểm tra để đảm bảo đây là bản ghi tên miền MX hợp lệ.',
	'FORCE_PASS_CHANGE'				=> 'Số ngày yêu cầu thay đổi mật khẩu',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Yêu cầu thành viên phải thay đổi mật khẩu của họ sau khi hết số ngày được thiết lập. Nhập vào số <strong>0</strong> để vô hiệu chức năng này.',
	'FORM_TIME_MAX'					=> 'Thời gian tối đa để gửi form',
	'FORM_TIME_MAX_EXPLAIN'			=> 'Thời gian mà thành viên phải gửi một form. Đặt thành -1 để vô hiệu. Lưu ý là form vẫn có thể bị vô hiệu nếu nếu phiên làm việc vô hiệu, cho dù thiết lập này thế nào.',
	'FORM_SID_GUESTS'				=> 'Gắn vào form phiên làm việc của khách',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'Nếu hiệu lực, mã form dành cho khách sẽ là phiên làm việc dành riêng. Điều này có thể gây một số vấn đề với một số ISP.',
	'FORWARDED_FOR_VALID'			=> 'Kiểm tra tiêu đề <var>X_FORWARDED_FOR</var> hợp lệ',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Những phiên đăng nhập này sẽ chỉ được tiếp tục nếu tiêu đề <var>X_FORWARDED_FOR</var> gửi đi bằng với một phiên đăng nhập đã gửi trong yêu cầu trước đó. Những thiết lập cấm cũng sẽ được kiểm tra lại các địa chỉ IP trong <var>X_FORWARDED_FOR</var>.',
	'IP_VALID'						=> 'Kiểm tra địa chỉ IP ',
	'IP_VALID_EXPLAIN'				=> 'Tuỳ chọn xác định số lượng địa chỉ IP được sử dụng để kiểm tra phiên đăng nhập của thành viên. Chọn <samp>Tất cả</samp> sẽ so sánh toàn bộ địa chỉ IP: <samp>A.B.C</samp> thay cho x.x.x, <samp>A.B</samp> thay cho x.x. Chọn <samp>Không có</samp> để tắt chức năng kiểm tra này. Với những địa chỉ IP dùng IPv6, <samp>A.B.C</samp> sẽ so sánh 4 khối đầu tiên và <samp>A.B</samp> là 3 khối đầu tiên.',
	'IP_LOGIN_LIMIT_MAX'			=> 'Số lần đăng nhập thử tối đa cho phép trên từng địa chỉ IP',
	'IP_LOGIN_LIMIT_MAX_EXPLAIN'	=> 'Số lần đăng nhập thử tối đa cho phép trên từng địa chỉ IP trước khi hệ thống chống spambot được kích hoạt. Nhập vào 0 để vô hiệu chức năng này.',
	'IP_LOGIN_LIMIT_TIME'			=> 'Thời gian hết hạn cho quản lý việc đăng nhập thử trên từng địa chỉ IP',
	'IP_LOGIN_LIMIT_TIME_EXPLAIN'	=> 'Việc đăng nhập thử sẽ được tính lại từ đầu sau khoảng thời gian này.',
	'IP_LOGIN_LIMIT_USE_FORWARDED'	=> 'Số lần đăng nhập thử tối đa bằng việc dùng <var>X_FORWARDED_FOR</var> header',
	'IP_LOGIN_LIMIT_USE_FORWARDED_EXPLAIN'	=> 'Thay vì giới hạn dựa trên số lần đăng nhập thử trên từng địa chỉ IP, hệ thống sẽ dựa trên số lần <var>X_FORWARDED_FOR</var>. <br /><em><strong>Lưu ý:</strong> Chỉ sử dụng tùy chọn này nếu server proxy của bạn thiết lập giá trị <var>X_FORWARDED_FOR</var> đáng tin cậy.</em>',
	'MAX_LOGIN_ATTEMPTS'			=> 'Số lần đăng nhập tối đa cho phép',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Số lần tối đa cho phép thành viên cố gắng đăng nhập vào hệ thống khi đăng nhập thất bại nhiều lần. Sau khi đăng nhập thất bại vượt quá số lần được thiết lập này, thành viên phải nhập thêm vào mã xác nhận khi đăng nhập.',
	'NO_IP_VALIDATION'				=> 'Không kiểm tra địa chỉ IP',
	'NO_REF_VALIDATION'				=> 'Không',
	'PASSWORD_TYPE'					=> 'Độ phức tạp của mật khẩu',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Tuỳ chọn xác định mức độ phức tạp yêu cầu đối với mật khẩu của thành viên khi được tạo hay thay đổi, những tuỳ chọn sau bao gồm cả những tuỳ chọn trước.',
	'PASS_TYPE_ALPHA'				=> 'Phải sử dụng chữ số và chữ cái',
	'PASS_TYPE_ANY'					=> 'Không yêu cầu',
	'PASS_TYPE_CASE'				=> 'Phải sử dụng hỗn hợp',
	'PASS_TYPE_SYMBOL'				=> 'Phải sử dụng ký hiệu',
	'REF_HOST'						=> 'Chỉ xác minh host',
	'REF_PATH'						=> 'Xác minh cả đường dẫn',
	'REFERRER_VALID'					=> 'Xác minh Referer',
	'REFERRER_VALID_EXPLAIN'			=> 'Nếu hiệu lực, referer của những lần POST thông tin sẽ bị kiểm tra xác minh host/script path. Điều này có thể gây ra trở ngại đối với các hệ thống dùng nhiều tên miền hay dùng hệ thống đăng nhập ngoài.',
	'TPL_ALLOW_PHP'					=> 'Cho phép sử dụng mã PHP trong các tập tin khuôn mẫu',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Nếu tuỳ chọn này được bật, các lệnh <code>PHP</code> và <code>INCLUDEPHP</code> sẽ có thể được sử dụng và biên dịch trong các tập tin khuôn mẫu.',
	'UPLOAD_CERT_VALID' => 'Xác thực chứng chỉ tải lên',
	'UPLOAD_CERT_VALID_EXPLAIN' => 'Nếu được bật, chứng chỉ tải lên từ xa sẽ được xác thực. Điều này đòi hỏi bó CA phải được xác định bởi cài đặt <samp> openssl.cafile </ samp> hoặc <samp> curl.cainfo </ samp> trong tệp php.ini của bạn. ',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Những thiết lập này được sử dụng khi hệ thống gửi Email đến các thành viên khác. Hãy chắc chắn địa chỉ Email liên hệ mà bạn nhập vào là hợp lệ, bất kỳ thư rác hay Email không gửi được nào có khả năng sẽ được gửi đến địa chỉ này. Nếu máy chủ của bạn không hỗ trợ gửi Email thông qua PHP, bạn có thể thay thế bằng cách gửi Email trực tiếp thông qua máy chủ SMTP. Điều này yêu cầu bạn phải cung cấp một địa chỉ máy chủ SMTP chính xác cho hệ thống biết. Bạn có thể hỏi nhà cung cấp dịch vụ lưu trữ Web của bạn nếu cần thiết và đừng xác định những máy chủ đã quá lạc hậu! Nếu máy chủ SMTP yêu cầu phải xác thực và chỉ khi thực sự được yêu cầu, bạn hãy cung cấp cho hệ thống biết tên tài khoản, mật khẩu đăng nhập và phương pháp xác thực của máy chủ SMTP.',

	'ADMIN_EMAIL'					=> 'Địa chỉ Email gửi đi',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Địa chỉ Email này được sử dụng làm địa chỉ Email của người gửi trên tất cả các Email được gửi đi và địa chỉ Email hỗ trợ kỹ thuật. Nó sẽ luôn luôn được sử dụng trong phần <samp>Địa chỉ quay về</samp> và <samp>Địa chỉ người gửi</samp> trong các Email.',
	'BOARD_EMAIL_FORM'				=> 'Cho phép thành viên gửi Email từ website',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'Thay cho việc hiển thị địa chỉ Email của thành viên, tuỳ chọn này cho phép các thành viên có thể gửi Email cho nhau thông qua website.',
	'BOARD_HIDE_EMAILS'				=> 'Ẩn địa chỉ Email',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Tuỳ chọn ẩn toàn bộ địa chỉ Email cá nhân trong website.',
	'CONTACT_EMAIL'					=> 'Địa chỉ Email liên hệ',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Địa chỉ Email này được sử dụng khi có việc cần liên hệ, ví dụ như vấn đề thư rác, có lỗi xảy ra… Nó sẽ luôn luôn được sử dụng trong phần thông tin <samp>Gửi từ</samp> và <samp>Trả lời đến địa chỉ</samp> của các Email.',
	'CONTACT_EMAIL_NAME' => 'Tên liên hệ',
	'CONTACT_EMAIL_NAME_EXPLAIN' => 'Đây là tên liên lạc mà người nhận e-mail sẽ thấy. Nếu bạn không muốn có tên liên hệ, hãy để trống trường này. ',
	'EMAIL_FORCE_SENDER' => 'Bắt buộc từ địa chỉ email',
	'EMAIL_FORCE_SENDER_EXPLAIN' => 'Điều này sẽ đặt <samp> Return-Path </ samp> thành địa chỉ email thay vì sử dụng tên người dùng cục bộ và tên máy chủ của máy chủ. Cài đặt này không áp dụng khi sử dụng SMTP. <br> <em> <strong> Cảnh báo: </strong> Yêu cầu người dùng máy chủ web chạy để được thêm làm người dùng đáng tin cậy vào cấu hình sendmail. </ Em> ',
	'EMAIL_FUNCTION_NAME'			=> 'Tên hàm dùng để gửi Email',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'Hàm chức năng PHP bạn muốn sử dụng để gửi Email.',
	'EMAIL_PACKAGE_SIZE'			=> 'Số lượng Email trong mỗi gói Email',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Số lượng Email tối đa được gửi đi trong một gói Email. Thiết lập này được áp dụng cho những Email chờ được gửi đi bên trong máy chủ. Nhập vào số <strong>0</strong> trong phần này nếu bạn gặp phải bất kỳ rắc rối nào về những Email không gửi đi được.',
	'EMAIL_SIG'						=> 'Chữ ký Email',
	'EMAIL_SIG_EXPLAIN'				=> 'Chữ ký được đính kèm trong tất cả các Email được gửi đi từ website.',
	'ENABLE_EMAIL'					=> 'Bật chức năng gửi Email trong hệ thống',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Nếu tắt tuỳ chọn này, sẽ không có Email nào được gửi đi từ diễn đàn.',
	'SEND_TEST_EMAIL' => 'Gửi email kiểm tra',
	'SEND_TEST_EMAIL_EXPLAIN' => 'Thao tác này sẽ gửi một email thử nghiệm đến địa chỉ được xác định trong tài khoản của bạn.',
	'SMTP_ALLOW_SELF_SIGNED' => 'Cho phép các chứng chỉ SSL tự ký',
	'SMTP_ALLOW_SELF_SIGNED_EXPLAIN' => 'Cho phép kết nối với máy chủ SMTP với chứng chỉ SSL tự ký. <br> <em> <strong> Cảnh báo: </strong> Cho phép chứng chỉ SSL tự ký có thể gây ra các tác động bảo mật. </ em> ',
	'SMTP_AUTH_METHOD' => 'Phương pháp xác thực cho SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Chỉ sử dụng nếu tên đăng nhập/mật khẩu xác thực đã được thiết lập. Hãy yêu cầu nhà cung cấp dịch vụ lưu trữ Web của bạn nếu bạn không chắc chắn phải chọn phương pháp nào.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'Mật khẩu đăng nhập SMTP',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Chỉ nhập vào mật khẩu đăng nhập nếu máy chủ SMTP của bạn yêu cầu.',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'Cổng máy chủ SMTP',
	'SMTP_PORT_EXPLAIN'				=> 'Chỉ thay đổi cổng máy chủ SMTP nếu bạn chắc chắn máy chủ SMTP của mình đang chạy trên cổng khác.',
	'SMTP_SERVER'					=> 'Địa chỉ máy chủ SMTP',
	'SMTP_SERVER_EXPLAIN' => 'Lưu ý rằng bạn phải cung cấp giao thức mà máy chủ của bạn sử dụng. Nếu bạn đang sử dụng SSL, điều này phải là "ssl: //your.mailserver.com" ',
	'SMTP_SETTINGS'					=> 'Thiết lập SMTP',
	'SMTP_USERNAME'					=> 'Tên đăng nhập SMTP',
	'SMTP_USERNAME_EXPLAIN'			=> 'Chỉ nhập vào tên đăng nhập nếu máy chủ SMTP của bạn yêu cầu.',
	'SMTP_VERIFY_PEER' => 'Xác minh chứng chỉ SSL',
	'SMTP_VERIFY_PEER_EXPLAIN' => 'Yêu cầu xác minh chứng chỉ SSL được máy chủ SMTP sử dụng. <br> <em> <strong> Cảnh báo: </strong> Kết nối các đồng nghiệp với chứng chỉ SSL chưa được xác minh có thể gây ra các tác động bảo mật. </ em> ',
	'SMTP_VERIFY_PEER_NAME' => 'Xác minh tên ngang hàng SMTP',
	'SMTP_VERIFY_PEER_NAME_EXPLAIN' => 'Yêu cầu xác minh tên ngang hàng cho máy chủ SMTP sử dụng kết nối SSL / TLS. <br> <em> <strong> Cảnh báo: </strong> Kết nối với các đồng nghiệp chưa được xác minh có thể gây ra các tác động bảo mật. </ em> ',
	'TEST_EMAIL_SENT' => 'Email thử nghiệm đã được gửi. <br> Nếu bạn không nhận được email, vui lòng kiểm tra cấu hình email của bạn. <br> <br> Nếu bạn cần hỗ trợ, vui lòng truy cập <a href = "https : //www.phpbb.com/community/ "> diễn đàn hỗ trợ phpBB </a>. ',
	
	'USE_SMTP'						=> 'Sử dụng máy chủ SMTP để gửi Email',
	'USE_SMTP_EXPLAIN'				=> 'Bật tuỳ chọn này nếu bạn muốn gửi Email thông qua một tên miền thay cho hàm gửi Email của PHP.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Với công cụ này, bạn có thể quản lý thiết lập và bật tuỳ chọn sử dụng máy chủ Jabber để gửi tin nhắn nhanh và thông báo của website. Jabber là một giao thức mã nguồn mở và bất kỳ ai cũng có thể sử dụng miễn phí. Một vài máy chủ Jabber đính kèm cả cổng truy xuất và dịch vụ chuyển tin cho phép bạn liên hệ với các thành viên trên các hệ thống mạng khác. Không phải tất cả các máy chủ đều có dịch vụ chuyển tin và những thay đổi trong giao thức kết nối có thể ngăn cản việc gửi tin nhắn. Hãy chắc chắn rằng bạn nhập thông tin về tài khoản đã được đăng ký. Hệ thống phpBB sẽ sử dụng những thông tin mà bạn cung cấp này tại đây.',

	'JAB_ENABLE'				=> 'Sử dụng tài khoản Jabber',
	'JAB_ENABLE_EXPLAIN'		=> 'Tuỳ chọn cho phép nhắn tin và thông báo bằng máy chủ Jabber.',
	'JAB_GTALK_NOTE'			=> 'Hãy lưu ý là GTalk sẽ không hoạt động vì hàm <samp>dns_get_record</samp> không tìm thấy. Hàm này không tồn tại trong PHP4, và không tồn tại trên các hệ máy chủ chạy Windows. Nó cũng không làm việc trên hệ thống BSD-based, bao gồm cả Mac OS.',
	'JAB_PACKAGE_SIZE'			=> 'Số lượng tin nhắn trong gói Jabber',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Số lượng tin nhắn được gửi đi trong một gói Jabber. Nếu bạn nhập vào số <strong>0</strong>, tin nhắn sẽ được gửi đi ngay lập tức và không phải chờ đợi để được gửi.',
	'JAB_PASSWORD'				=> 'Mật khẩu đăng nhập tài khoản Jabber',
	'JAB_PASSWORD_EXPLAIN'		=> '<em><strong>Cảnh báo:</strong> Mật khẩu này sẽ được lưu dưới dạng thô trong cơ sở dữ liệu và người có quyền truy vào cơ sở dũ liệu của bạn có thể xem mật khẩu này.</em>',
	'JAB_PORT'					=> 'Cổng máy chủ Jabber',
	'JAB_PORT_EXPLAIN'			=> 'Để trống mục này nếu như bạn chắc chắn máy chủ này không chạy trên cổng <strong>5222</strong>.',
	'JAB_SERVER'				=> 'Địa chỉ máy chủ Jabber',
	'JAB_SERVER_EXPLAIN'		=> 'Ghé thăm %sjabber.org%s để xem danh sách các máy chủ hiện có.',
	'JAB_SETTINGS_CHANGED'		=> 'Thiết lập Jabber đã được thay đổi thành công.',
	'JAB_USE_SSL'				=> 'Sử dụng SSL để kết nối',
	'JAB_USE_SSL_EXPLAIN'		=> 'Nếu bạn bật tùy chọn này, một kết nối an toàn sẽ được cố gắng thiết lập. Cổng máy chủ Jabber sẽ được chỉnh sửa thành <strong>5223</strong> nếu cổng <strong>5222</strong> được chỉ định.',
	'JAB_USERNAME'				=> 'Tên đăng nhập tài khoản Jabber',
	'JAB_USERNAME_EXPLAIN'		=> 'Xác định một tài khoản đã đăng ký. Tên đăng nhập sẽ không được kiểm tra hợp lệ.',
));
