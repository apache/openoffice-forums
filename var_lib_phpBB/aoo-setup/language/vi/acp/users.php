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
	'ADMIN_SIG_PREVIEW'		=> 'Xem trước chữ ký cá nhân',
	'AT_LEAST_ONE_FOUNDER'	=> 'Bạn không thể thay đổi người sáng lập này trở thành một thành viên bình thường. Trong hệ thống chỉ cần ít nhất một thành viên là người sáng lập được chọn. Nếu bạn muốn thay đổi người sáng lập này thành các thành viên khác thì trước hết bạn phải là một người sáng lập.',

	'BAN_ALREADY_ENTERED'	=> 'Lệnh cấm đã được nhập vào thành công trước đây. Danh sách cấm sẽ không cần cập nhật.',
	'BAN_SUCCESSFUL'		=> 'Lệnh cấm đã được thực hiện thành công.',

	'CANNOT_BAN_ANONYMOUS'			=> 'Bạn không thể cấm tài khoản của người vô danh. Tuy nhiên bạn có thể thiết lập phân quyền cho người vô danh trong tab Phân quyền.',
	'CANNOT_BAN_FOUNDER'			=> 'Bạn không thể cấm tài khoản của người sáng lập.',
	'CANNOT_BAN_YOURSELF'			=> 'Bạn không thể cấm tài khoản của chính mình.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Bạn không thể ngưng kích hoạt tài khoản của máy tìm kiếm. Hãy vui lòng ngưng kích hoạt từng máy tìm kiếm cụ thể.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Bạn không thể ngưng kích hoạt tài khoản của người sáng lập.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Bạn không thể ngưng kích hoạt tài khoản của chính mình.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Bạn không thể yêu cầu kích hoạt lại tài khoản của máy tìm kiếm. Hãy vui lòng yêu cầu kích hoạt lại từng máy tìm kiếm cụ thể.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Bạn không thể yêu cầu kích hoạt lại tài khoản của người sáng lập.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Bạn không thể yêu cầu kích hoạt lại tài khoản của chính mình.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Bạn không thể gỡ bỏ tài khoản của khách.',
	'CANNOT_REMOVE_FOUNDER'			=> 'You are not allowed to remove founder accounts.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Bạn không thể gỡ bỏ tài khoản thành viên của chính mình.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Bạn không thể tăng cấp những thành viên bị cấm trở thành người sáng lập.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Bạn cần phải kích hoạt tài khoản của thành viên trước khi bạn tăng cấp cho thành viên này trở thành người sáng lập và chỉ có những thành viên đã kích hoạt mới có thể tăng cấp được.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Bạn chỉ cần xác nhận lại địa chỉ Email nếu bạn muốn thay đổi địa chỉ Email của thành viên.',

	'DELETE_POSTS'			=> 'Xoá bài viết',
	'DELETE_USER'			=> 'Xoá thành viên',
	'DELETE_USER_EXPLAIN'	=> 'Lưu ý rằng việc xoá thành viên này sẽ xoá vĩnh viễn và không thể phục hồi lại được.',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Việc yêu cầu thành viên kích hoạt lại tài khoản của mình đã được thực hiện thành công.',
	'FOUNDER'						=> 'Người sáng lập',
	'FOUNDER_EXPLAIN'				=> 'Người sáng lập có tất cả quyền hạn của quản trị viên và không bao giờ bị cấm, xoá hay thay đổi bởi bất kỳ thành viên nào.',

	'GROUP_APPROVE'		=> 'Chấp nhận thành viên',
	'GROUP_DEFAULT'		=> 'Chọn làm nhóm mặc định của thành viên',
	'GROUP_DELETE'		=> 'Gỡ bỏ thành viên khỏi nhóm',
	'GROUP_DEMOTE'		=> 'Giáng chức người lãnh đạo nhóm',
	'GROUP_PROMOTE'		=> 'Thăng chức thành người lãnh đạo nhóm',

	'IP_WHOIS_FOR'			=> 'Tra cứu địa chỉ IP cho %s',

	'LAST_ACTIVE'			=> 'Lần hoạt động trước',

	'MOVE_POSTS_EXPLAIN'	=> 'Hãy chọn chuyên mục mà bạn muốn di chuyển tất cả các bài viết của thành viên này đến.',

	'NO_SPECIAL_RANK'		=> 'Không có xếp hạng đặc biệt nào được chỉ định',
	'NO_WARNINGS'			=> 'Không có cảnh báo.',
	'NOT_MANAGE_FOUNDER'	=> 'Bạn đang cố gắng quản lý một thành viên là người sáng lập. Chỉ có những người sáng lập mới được phép quản lý lẫn nhau.',

	'QUICK_TOOLS'			=> 'Công cụ nhanh',

	'REGISTERED'			=> 'Thành viên đã đăng ký',
	'REGISTERED_IP'			=> 'Đã đăng ký từ địa chỉ IP',
	'RETAIN_POSTS'			=> 'Những bài viết còn lại',

	'SELECT_FORM'			=> 'Chọn bảng',
	'SELECT_USER'			=> 'Chọn thành viên',

	'USER_ADMIN'					=> 'Quản lý thành viên',
	'USER_ADMIN_ACTIVATE'			=> 'Kích hoạt tài khoản',
	'USER_ADMIN_ACTIVATED'			=> 'Tài khoản thành viên đã được kích hoạt thành công.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Hình đại diện của thành viên đã được gỡ bỏ thành công.',
	'USER_ADMIN_BAN_EMAIL'			=> 'Cấm địa chỉ Email',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'Những địa chỉ Email đã bị cấm từ phần quản lý thành viên',
	'USER_ADMIN_BAN_IP'				=> 'Cấm địa chỉ IP',
	'USER_ADMIN_BAN_IP_REASON'		=> 'Những địa chỉ IP đã bị cấm từ phần quản lý thành viên',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Tên thành viên đã bị cấm từ phần quản lý thành viên',
	'USER_ADMIN_BAN_USER'			=> 'Cấm tên thành viên',
	'USER_ADMIN_DEACTIVATE'			=> 'Ngưng kích hoạt tài khoản',
	'USER_ADMIN_DEACTIVED'			=> 'Tài khoản thành viên đã được ngưng kích hoạt thành công.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Xoá tất cả tập tin đính kèm của thành viên này',
	'USER_ADMIN_DEL_AVATAR'			=> 'Xoá hình đại diện của thành viên này',
	'USER_ADMIN_DEL_OUTBOX'			=> 'Làm rỗng Tin nhắn gửi ra',
	'USER_ADMIN_DEL_POSTS'			=> 'Xoá tất cả bài viết của thành viên này',
	'USER_ADMIN_DEL_SIG'			=> 'Xoá chữ ký cá nhân của thành viên này',
	'USER_ADMIN_EXPLAIN'			=> 'Sử dụng công cụ này, bạn có thể thay đổi thông tin cá nhân của các thành viên cũng như những tuỳ chọn hay thiết lập cá nhân của họ.',
	'USER_ADMIN_FORCE'				=> 'Yêu cầu thành viên này kích hoạt lại tài khoản của mình',
	'USER_ADMIN_LEAVE_NR'			=> 'Gõ bỏ khỏi Thành viên mới đăng ký',
	'USER_ADMIN_MOVE_POSTS'			=> 'Di chuyển tất cả bài viết của thành viên này',
	'USER_ADMIN_SIG_REMOVED'		=> 'Đã gỡ bỏ thành công chữ ký cá nhân của thành viên này.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Đã gỡ bỏ thành công tất cả tập tin đính kèm của thành viên này.',
	'USER_AVATAR_NOT_ALLOWED'		=> 'Ảnh đại diện không hiển thị vì chức năng ảnh đại diện của hệ thống đã bị vô hiệu.',
	'USER_AVATAR_UPDATED'			=> 'Đã cập nhật thành công hình đại diện của thành viên này.',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'Ảnh đại diện không hiển thị vì loại hình ảnh này đang bị vô hiệu.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Mục thông tin cá nhân tuỳ biến',
	'USER_DELETED'					=> 'Tài khoản của thành viên này đã được xoá thành công.',
	'USER_GROUP_ADD'				=> 'Thêm thành viên này vào',
	'USER_GROUP_NORMAL'				=> 'Loại nhóm bình thường, là thành viên của nhóm',
	'USER_GROUP_PENDING'			=> 'Loại nhóm đang trong chế độ chờ quyết định',
	'USER_GROUP_SPECIAL'			=> 'Loại nhóm đặc biệt, là thành viên của nhóm',
	'USER_LIFTED_NR'				=> 'Gỡ bỏ thành công thành viên userâ€™s ra khỏi Thành viên mới đăng ký.',
	'USER_NO_ATTACHMENTS'			=> 'Chưa đính kèm bất kỳ tập tin nào.',
	'USER_NO_POSTS_TO_DELETE'		=> 'Thành viên này không có bài viết nào để giữ lại hay xóa.',
	'USER_OUTBOX_EMPTIED'			=> 'Làm rỗng thành công hộp tin nhắn riêng gửi đi của userâ€™s.',
	'USER_OUTBOX_EMPTY'				=> 'hộp tin nhắn riêng gửi đi của userâ€™s đã rỗng từ trước.',
	'USER_OVERVIEW_UPDATED'			=> 'Thông tin chi tiết về thành viên đã được cập nhật thành công.',
	'USER_POSTS_DELETED'			=> 'Đã gỡ bỏ thành công tất cả bài viết của thành viên này',
	'USER_POSTS_MOVED'				=> 'Đã di chuyển thành công tất cả bài viết của thành viên này đến chuyên mục đã chọn',
	'USER_PREFS_UPDATED'			=> 'Sở thích cá nhân của thành viên đã được cập nhật thành công.',
	'USER_PROFILE'					=> 'Thông tin cá nhân của thành viên',
	'USER_PROFILE_UPDATED'			=> 'Thông tin cá nhân của thành viên đã được cập nhật thành công.',
	'USER_RANK'						=> 'Xếp hạng của thành viên',
	'USER_RANK_UPDATED'				=> 'Xếp hạng của thành viên đã được cập nhật thành công.',
	'USER_SIG_UPDATED'				=> 'Chữ ký cá nhân của thành viên đã được cập nhật thành công.',
	'USER_WARNING_LOG_DELETED'		=> 'No information available. Possibly the log entry has been deleted.',
	'USER_TOOLS'					=> 'Công cụ đơn giản',
));
