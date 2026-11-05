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

$lang = array_merge($lang, array(
	'ABOUT_USER'			=> 'Thông tin cá nhân',
	'ACTIVE_IN_FORUM'		=> 'Chuyên mục hoạt động tích cực',
	'ACTIVE_IN_TOPIC'		=> 'Chủ đề hoạt động tích cực',
	'ADD_FOE'				=> 'Thêm kẻ thù',
	'ADD_FRIEND'			=> 'Thêm bạn thân',
	'AFTER'					=> 'Sau',

	'ALL'					=> 'Tất cả',

	'BEFORE'				=> 'Trước',

	'CC_SENDER'				=> 'Gửi một bản sao của email này cho chính bạn.',
	'CONTACT_ADMIN'			=> 'Liên hệ với Quản trị viên Diễn đàn',

	'DEST_LANG'				=> 'Ngôn ngữ',
	'DEST_LANG_EXPLAIN'		=> 'Chọn một ngôn ngữ thích hợp cho người nhận tin nhắn này.',

	'EDIT_PROFILE'			=> 'Chỉnh sửa hồ sơ',
	
	'EMAIL_BODY_EXPLAIN'	=> 'Email này sẽ được gửi dưới dạng văn bản thuần tuý, vì thế bạn đừng sử dụng bất cứ thẻ lệnh HTML hay BBCode nào trong nội dung Email này. Địa chỉ hồi âm của Email này sẽ được thiết lập là địa chỉ Email của bạn.',
	'EMAIL_DISABLED'		=> 'Xin lỗi, tất cả chức năng liên quan đến Email trong hệ thống đã bị vô hiệu.',
	'EMAIL_SENT'			=> 'Email đã được gửi thành công.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Email này sẽ được gửi dưới dạng văn bản thuần tuý, vì thế bạn đừng sử dụng bất cứ thẻ lệnh HTML hay BBCode nào trong nội dung Email này. Lưu ý rằng thông tin về chủ đề này sẽ được đính kèm trong nội dung Email. Địa chỉ hồi âm của Email này sẽ được thiết lập là địa chỉ Email của bạn.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Bạn phải nhập chính xác địa chỉ Email của người nhận.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Bạn phải nhập nội dung cho Email.',
	'EMPTY_MESSAGE_IM'		=> 'Bạn phải nhập nội dung cho tin nhắn.',
	'EMPTY_NAME_EMAIL'		=> 'Bạn phải nhập tên của người nhận.',
	'EMPTY_SENDER_EMAIL'	=> 'Bạn phải cung cấp địa chỉ email hợp lệ.',
	'EMPTY_SENDER_NAME'		=> 'Bạn phải cung cấp tên.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Bạn phải nhập tiêu đề cho Email.',
	'EQUAL_TO'				=> 'Ngang bằng',

	'FIND_USERNAME_EXPLAIN'	=> 'Công cụ này sẽ giúp bạn tìm kiếm những thành viên xác định trong hệ thống. Bạn không cần phải điền đầy đủ thông tin trong tất cả các mục bên dưới. Sử dụng dấu đại diện <strong>*</strong> để tìm kiếm những thông tin giống nhau theo một số ký tự. Khi nhập thông tin về ngày tháng bạn cần sử dụng định dạng <kbd>YYYY-MM-DD</kbd>. Ví dụ: <samp>2004-02-29</samp>. Đánh dấu chọn trong phần đánh dấu để chọn một hay nhiều tên thành viên. Những tên thành viên khác nhau có thể được chọn tuỳ thuộc vào bảng được liệt kê. Bấm vào nút <strong>Chọn đánh dấu</strong> để quay về bảng điều khiển trước.',
	'FLOOD_EMAIL_LIMIT'		=> 'Bạn không thể gửi Email vào thời điểm này. Hãy thử lại sau vài phút nữa!',

	'GROUP_LEADER'			=> 'Người lãnh đạo nhóm',

	'HIDE_MEMBER_SEARCH'	=> 'Ẩn công cụ tìm kiếm thành viên',

	'IM_ADD_CONTACT'		=> 'Thêm thành viên',
	'IM_DOWNLOAD_APP'		=> 'Tải về ứng dụng',
	'IM_JABBER'				=> 'Lưu ý rằng các thành viên có thể chọn không nhận những tin nhắn nhanh mà họ không mong muốn.',
	'IM_JABBER_SUBJECT'		=> 'Đây là tin nhắn thông báo tự động, xin đừng trả lời! Tin nhắn từ thành viên <strong>%1$s</strong> trong %2$s.',
	'IM_MESSAGE'			=> 'Nội dung tin nhắn của bạn',
	'IM_NAME'				=> 'Tên của bạn',
	'IM_NO_DATA'			=> 'Không có thông tin liên hệ phù hợp nào về thành viên này.',
	'IM_NO_JABBER'			=> 'Xin lỗi, chức năng gửi tin nhắn trực tiếp đến các thành viên sử dụng Jabber không được hỗ trợ trên máy chủ này. Bạn sẽ cần phải cài đặt ứng dụng <strong>Jabber</strong> trên máy tính của mình để liên hệ với người nhận trên.',
	'IM_RECIPIENT'			=> 'Người nhận',
	'IM_SEND'				=> 'Gửi tin nhắn',
	'IM_SEND_MESSAGE'		=> 'Gửi tin nhắn',
	'IM_SENT_JABBER'		=> 'Tin nhắn của bạn đến <strong>%1$s</strong> đã được gửi thành công.',
	'IM_USER'				=> 'Gửi tin nhắn nhanh',

	'LAST_ACTIVE'				=> 'Lần hoạt động trước',
	'LESS_THAN'					=> 'Ít hơn',
	'LIST_USERS'				=> array(
		1	=> '1 thành viên',
		2	=> '%d thành viên',
	),
	'LOGIN_EXPLAIN_TEAM'		=> 'Diễn đàn yêu cầu bạn phải đăng ký và đăng nhập để xem danh sách nhóm.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Hệ thống yêu cầu bạn phải đăng ký làm thành viên và đăng nhập vào hệ thống để xem danh sách thành viên.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Hệ thống yêu cầu bạn phải đăng ký làm thành viên và đăng nhập vào hệ thống để thực hiện tìm kiếm thành viên.',	
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Hệ thống yêu cầu bạn phải đăng ký làm thành viên và đăng nhập vào hệ thống để xem thông tin cá nhân của thành viên.',

	'MANAGE_GROUP'			=> 'Quản lý nhóm',
	'MORE_THAN'				=> 'More than',

	'NO_CONTACT_FORM'		=> 'Biểu mẫu liên hệ của quản trị viên diễn đàn đã bị tắt.',
	'NO_CONTACT_PAGE'		=> 'Trang liên hệ của quản trị viên diễn đàn đã bị tắt.',
	'NO_EMAIL'				=> 'Bạn không được phép gửi Email đến thành viên này.',
	'NO_VIEW_USERS'			=> 'Bạn không được phép xem danh sách thành viên hay thông tin cá nhân của thành viên.',

	'ORDER'					=> 'Thứ tự',
	'OTHER'					=> 'Thông tin khác',

	'POST_IP'				=> 'Gửi bài từ địa chỉ IP/Tên miền',

	'REAL_NAME'				=> 'Tên người nhận',
	'RECIPIENT'				=> 'Người nhận',
	'REMOVE_FOE'			=> 'Gỡ bỏ kẻ thù',
	'REMOVE_FRIEND'			=> 'Gỡ bỏ bạn thân',

	'SELECT_MARKED'			=> 'Chọn đánh dấu',
	'SELECT_SORT_METHOD'	=> 'Chọn cách sắp xếp',
	'SENDER_EMAIL_ADDRESS'	=> 'địa chỉ email của bạn',
	'SENDER_NAME'			=> 'Tên của bạn',
	'SEND_ICQ_MESSAGE'		=> 'Gửi tin nhắn ICQ',
	'SEND_IM'				=> 'Nhắn tin nhanh',
	'SEND_JABBER_MESSAGE'	=> 'Gửi tin nhắn Jabber',
	'SEND_MESSAGE'			=> 'Tin nhắn',
	'SEND_YIM_MESSAGE'		=> 'Gửi tin nhắn YIM',
	'SORT_EMAIL'			=> 'Địa chỉ Email',
	'SORT_LAST_ACTIVE'		=> 'Lần hoạt động trước',
	'SORT_POST_COUNT'		=> 'Số bài viết',

	'USERNAME_BEGINS_WITH'	=> 'Tên thành viên bắt đầu bằng',
	'USER_ADMIN'			=> 'Quản trị viên',
	'USER_BAN'				=> 'Cấm thành viên',	
	'USER_FORUM'			=> 'Thống kê thành viên',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Chưa gửi thư nhắc nhở',
		1		=> 'Đã gửi thư nhắc nhở %1$d lần<br />» %2$s',
		2		=> '%1$d lời nhắc đã được gửi<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Đang trực tuyến',
	'USER_PRESENCE'			=> 'Hiện diện',
	'USERS_PER_PAGE'		=> 'Số người dùng trên mỗi trang',

	'VIEWING_PROFILE'		=> 'Đang xem thông tin cá nhân của %s',
	'VIEW_FACEBOOK_PROFILE'	=> 'Xem hồ sơ trên Facebook',
	'VIEW_SKYPE_PROFILE'	=> 'Xem hồ sơ Skype',
	'VIEW_TWITTER_PROFILE'	=> 'Xem hồ sơ trên Twitter',
	'VIEW_YOUTUBE_CHANNEL'	=> 'Xem kênh YouTube',
	'VIEW_GOOGLEPLUS_PROFILE' => 'Xem hồ sơ trên Google+',
));
