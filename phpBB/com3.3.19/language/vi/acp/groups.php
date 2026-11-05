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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Với công cụ này, bạn có thể quản lý tất cả nhóm trong hệ thống. Bạn có thể xoá, tạo mới hay chỉnh sửa những nhóm hiện có. Ngoài ra, bạn cũng có thể chọn ra người lãnh đạo nhóm, thay đổi loại nhóm tự do/ẩn/cố định cũng như cập nhật tên nhóm và giới thiệu về nhóm.',
	'ADD_GROUP_CATEGORY'			=> 'Add category',
	'ADD_USERS'						=> 'Add users',
	'ADD_USERS_EXPLAIN'				=> 'Với công cụ này, bạn có thể thêm những thành viên mới cho nhóm. Bạn cũng có thể thay đổi nhóm mặc định cho các thành viên được chọn. Ngoài ra, bạn cũng có thể xác định thành viên trở thành người lãnh đạo của nhóm. Hãy nhập mỗi tên thành viên trên một dòng xác định.',

	'COPY_PERMISSIONS'				=> 'Sao chép thiết lập cấp phép từ',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Sau khi sao chép thiết lập cấp phép, nhóm này sẽ có thiết lập cấp phép giống như thiêt lập cấp phép của nhóm mà bạn chọn sao chép đến.',
	'CREATE_GROUP'					=> 'Tạo nhóm mới',

	'GROUPS_NO_MEMBERS'				=> 'Nhóm này chưa có thành viên',
	'GROUPS_NO_MODS'				=> 'Bạn chưa xác định người lãnh đạo cho nhóm',

	'GROUP_APPROVE'					=> 'Chấp nhận thành viên',
	'GROUP_APPROVED'				=> 'Thành viên được chấp nhận',
	'GROUP_AVATAR'					=> 'Hình đại diện của nhóm',
	'GROUP_AVATAR_EXPLAIN'			=> 'Hình ảnh được hiển thị trong bảng quản lý của nhóm.',
	'GROUP_CATEGORY_NAME'			=> 'Category name',
	'GROUP_CLOSED'					=> 'Closed',
	'GROUP_COLOR'					=> 'Màu nhóm',
	'GROUP_COLOR_EXPLAIN'			=> 'Xác định màu phân biệt cho tên thành viên của các thành viên trong nhóm, để trống để sử dụng màu mặc định dành cho thành viên.',
		'GROUP_CONFIRM_ADD_USERS'		=> array(
		1	=> 'Are you sure that you want to add the user %2$s to the group?',
		2	=> 'Are you sure that you want to add the users %2$s to the group?',
	),
	'GROUP_CREATED'					=> 'Nhóm đã được tạo thành công.',
	'GROUP_DEFAULT'					=> 'Chọn làm nhóm mặc định của thành viên',
	'GROUP_DEFS_UPDATED'			=> 'Nhóm mặc định thiết lập cho tất cả thành viên đã chọn.',
	'GROUP_DELETE'					=> 'Gỡ bỏ thành viên khỏi nhóm',
	'GROUP_DELETED'					=> 'Nhóm đã được xoá và nhóm mặc định của thành viên đã được thiết lập thành công.',
	'GROUP_DEMOTE'					=> 'Giáng chức người lãnh đạo nhóm',
	'GROUP_DESC'					=> 'Giới thiệu về nhóm',
	'GROUP_DETAILS'					=> 'Thông tin về nhóm',
	'GROUP_EDIT_EXPLAIN'			=> 'Với công cụ này, bạn có thể chỉnh sửa các nhóm hiện có. Bạn có thể thay đổi tên nhóm, giới thiệu về nhóm và loại nhóm như tự do, cố định… Bạn cũng có thể thiết lập những tuỳ chọn cho nhóm như màu sắc phân biệt, xếp hạng… Những thay đổi thiết lập trong đây sẽ thay thế cho thiết lập hiện tại của thành viên. Lưu ý rằng những thành viên trong nhóm có thể thay đổi thiết lập hình đại diện thay thế của nhóm nếu như bạn không thiết lập cấp phép phù hợp.',
	'GROUP_ERR_USERS_EXIST'			=> 'Thành viên bạn vừa chọn đã là thành viên trong nhóm.',
	'GROUP_FOUNDER_MANAGE'			=> 'Chỉ người sáng lập quản lý',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Giới hạn quyền quản lý nhóm này chỉ dành cho những người sáng lập. Những thành viên có thiết lập cấp phép nhóm vẫn có thể nhìn thấy nhóm này giống như các thành viên khác trong nhóm.',
	'GROUP_HIDDEN'					=> 'Nhóm ẩn',
	'GROUP_LANG'					=> 'Ngôn ngữ của nhóm',
	'GROUP_LEAD'					=> 'Người lãnh đạo nhóm',
	'GROUP_LEADERS_ADDED'			=> 'Người lãnh đạo đã được thêm vào nhóm thành công.',
	'GROUP_LEGEND'					=> 'Hiển thị nhóm trong chú thích',
	'GROUP_LIST'					=> 'Danh sách thành viên hiện tại trong nhóm',
	'GROUP_LIST_EXPLAIN'			=> 'Danh sách tất cả các thành viên hiện tại có trong nhóm với tư cách thành viên của họ. Bạn có thể xoá thành viên ngoại trừ trường hợp những nhóm đặc biệt hay thêm vào một số thành viên mới mà bạn muốn.',
	'GROUP_MEMBERS'					=> 'Thành viên của nhóm',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Đây là danh sách toàn bộ các thành viên của nhóm. Danh sách liệt kê này xác định rõ những loại thành viên trong nhóm như những người lãnh đạo nhóm, các thành viên đang chờ quyết định cho phép tham gia và những thành viên hiện tại của nhóm. Với công cụ này, bạn có thể quản lý tư cách thành viên của tất cả thành viên cũng như vai trò của họ trong nhóm. Để bỏ chọn người lãnh đạo của nhóm nhưng không gỡ bỏ họ khỏi nhóm, hãy giáng chức họ, việc này tốt hơn là xoá họ khỏi nhóm. Tương tự, việc chọn thăng chức sẽ thiết lập một thành viên trong nhóm trở thành người lãnh đạo của nhóm.',
	'GROUP_MESSAGE_LIMIT'			=> 'Số tin nhắn giới hạn trong mỗi thư mục của các thành viên trong nhóm',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Thiết lập này sẽ thay thế cho số tin nhắn giới hạn trong mỗi thư mục của các thành viên khác ngoài nhóm. Nhập vào số <strong>0</strong> để sử dụng giới hạn mặc định giống như các thành viên khác ngoài nhóm.',
	'GROUP_MODS_ADDED'				=> 'Người lãnh đạo mới của nhóm đã được thêm vào thành công.',
	'GROUP_MODS_DEMOTED'			=> 'Người lãnh đạo của nhóm đã được giáng chức thành công.',
	'GROUP_MODS_PROMOTED'			=> 'Thành viên của nhóm đã được thăng chức thành công.',
	'GROUP_NAME'					=> 'Tên nhóm',
	'GROUP_NAME_TAKEN'				=> 'Tên của nhóm bạn vừa nhập đã được sử dụng rồi. Bạn hãy vui lòng chọn một tên khác.',
	'GROUP_OPEN'					=> 'Nhóm tham gia tự do',
	'GROUP_PENDING'					=> 'Thành viên chờ quyết định',
	'GROUP_MAX_RECIPIENTS'			=> 'Số lượng tối đa người nhận cho một tin nhắn riêng',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'Số lượng tối đa người nhận cho một tin nhắn riêng. Nếu đặt thành 0, thì sẽ sử dụng thiết đặt của hệ thống.',
	'GROUP_OPTIONS_SAVE'			=> 'Tùy chọn nhóm mở rộng',
	'GROUP_PROMOTE'					=> 'Thăng chức thành người lãnh đạo nhóm',
	'GROUP_RANK'					=> 'Xếp hạng của nhóm',
	'GROUP_RECEIVE_PM'				=> 'Cho phép nhóm nhận tin nhắn',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Lưu ý rằng bạn không thể gửi tin nhắn cho những nhóm ẩn và điều đó không phụ thuộc vào thiết lập này.',
	'GROUP_REQUEST'					=> 'Nhóm tham gia phải gửi yêu cầu',
	'GROUP_SETTINGS_SAVE'			=> 'Thiết lập của nhóm',
	'GROUP_SKIP_AUTH'				=> 'Miễn xét đối với trưởng nhóm',
	'GROUP_SKIP_AUTH_EXPLAIN'		=> 'Nếu chọn thì trưởng nhóm không kế thừa các xét quyền trên nhóm.',
	'GROUP_SPECIAL'					=> 'Pre-defined',
	'GROUP_TEAMPAGE'				=> 'Display group on teampage',
	'GROUP_TYPE'					=> 'Loại nhóm',
	'GROUP_TYPE_EXPLAIN'			=> 'Chọn loại nhóm cho phép các thành viên tham gia vào nhóm hay xem thông tin về nhóm.',
	'GROUP_UPDATED'					=> 'Thiết lập của nhóm đã được cập nhật thành công.',

	'GROUP_USERS_ADDED'				=> 'Thành viên mới đã được thêm vào nhóm thành công.',
	'GROUP_USERS_EXIST'				=> 'Thành viên bạn vừa chọn đã là thành viên của nhóm.',
	'GROUP_USERS_REMOVE'			=> 'Thành viên đã được gỡ bỏ khỏi nhóm và những thiết lập mặc định đã được chọn thành công.',

	'LEGEND_EXPLAIN'				=> 'These are the groups which are displayed in the group legend:',
	'LEGEND_SETTINGS'				=> 'Legend settings',
	'LEGEND_SORT_GROUPNAME'			=> 'Sort legend by group name',
	'LEGEND_SORT_GROUPNAME_EXPLAIN'	=> 'The order below is ignored when this option is enabled.',

	'MANAGE_LEGEND'			=> 'Manage group legend',
	'MANAGE_TEAMPAGE'		=> 'Manage teampage',
	'MAKE_DEFAULT_FOR_ALL'	=> 'Chọn làm nhóm mặc định cho tất cả thành viên',
	'MEMBERS'				=> 'Thành viên',

	'NO_GROUP'					=> 'Không có nhóm nào được xác định.',
	'NO_GROUPS_ADDED'			=> 'No groups added yet.',
	'NO_GROUPS_CREATED'			=> 'No groups created yet.',
	'NO_PERMISSIONS'			=> 'Đừng sao chép thiết lập cấp phép',
	'NO_USERS'					=> 'Bạn chưa nhập vào bất kỳ thành viên nào.',
	'NO_USERS_ADDED'			=> 'Không có thành viên nào được thêm vào nhóm.',
	'NO_VALID_USERS'			=> 'Bạn chưa nhập vào thành viên hợp lệ nào cho hành động này.',

	'PENDING_MEMBERS'			=> 'Pending',
	
	'SELECT_GROUP'				=> 'Select a group',
	'SPECIAL_GROUPS'			=> 'Nhóm đặc biệt',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Có một vài loại nhóm đặc biệt khác hẳn với các nhóm còn lại, những nhóm này không thể xoá cũng như chỉnh sửa trực tiếp được. Tuy nhiên, bạn vẫn có thể thêm thành viên mới vào những nhóm này và thay đổi những thiết lập đơn giản.',

	'TEAMPAGE'					=> 'Teampage',
	'TEAMPAGE_DISP_ALL'			=> 'All memberships',
	'TEAMPAGE_DISP_DEFAULT'		=> 'User’s default group only',
	'TEAMPAGE_DISP_FIRST'		=> 'First membership only',
	'TEAMPAGE_EXPLAIN'			=> 'These are the groups which are displayed on the teampage:',
	'TEAMPAGE_FORUMS'			=> 'Display moderated forums',
	'TEAMPAGE_FORUMS_EXPLAIN'	=> 'If set to yes, moderators will have a list with all of the forums where they have moderator permissions displayed in their row. This can be very database intensive for big boards.',
	'TEAMPAGE_MEMBERSHIPS'		=> 'Display user memberships',
	'TEAMPAGE_SETTINGS'			=> 'Teampage settings',
	'TOTAL_MEMBERS'				=> 'Members',

	'USERS_APPROVED'				=> 'Thành viên đã được chấp nhận thành công.',
	'USER_DEFAULT'					=> 'Thành viên mặc định',
	'USER_DEF_GROUPS'				=> 'Nhóm đã xác định thành viên',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Đây là những nhóm được tạo ra bởi chính bạn hoặc các quản trị viên trong website. Bạn có thể quản lý tư cách thành viên trong nhóm như sửa thiết lập của nhóm hoặc thậm chí là gỡ bỏ nhóm.',
	'USER_GROUP_DEFAULT'			=> 'Chọn làm nhóm mặc định',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Bật tuỳ chọn này để thiết lập nhóm này làm nhóm mặc định cho các thành viên đã thêm vào.',
	'USER_GROUP_LEADER'				=> 'Chọn làm người lãnh đạo nhóm',
));

?>