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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>Những thiết lập cấp phép chỉ định quyền hạn được phép thực hiện trong hệ thống và được chia thành bốn phần chủ yếu, bao gồm:</p>

		<h2>Cấp phép chung</h2>
		<p>Những thiết lập cấp phép này được sử dụng để điều khiển việc truy cập trong một cấp độ chung và áp dụng cho các mục trong hệ thống. Các loại cấp phép bao gồm: cấp phép thành viên, cấp phép nhóm, cấp phép quản trị viên và cấp phép điều hành viên chính.</p>

		<h2>Cấp phép chuyên mục</h2>
		<p>Những thiết lập cấp phép này được sử dụng để điều khiển việc truy cập trong mỗi chuyên mục. Các loại cấp phép bao gồm: cấp phép chuyên mục, cấp phép điều hành viên cho chuyên mục, cấp phép chuyên mục cho thành viên và cấp phép chuyên mục cho nhóm.</p>

		<h2>Cấp phép nhiệm vụ</h2>
		<p>Những nhiệm vụ này được sử dụng để tạo ra nhiều loại cấp phép khác nhau làm nền tảng để chỉ định quyền hạn được cấp phép. Những nhiệm vụ mặc định được dành cho công việc quản lý thường gặp trong các hệ thống lớn và nhỏ, được chia làm bốn loại riêng là: nhiệm vụ quản trị viên, nhiệm vụ thành viên, nhiệm vụ điều hành viên và nhiệm vụ chuyên mục. Bạn có thể xem/thêm/chỉnh sửa/xoá những nhiệm vụ này.</p>

		<h2>Danh sách cấp phép</h2>
		<p>Sử dụng danh sách cấp phép, bạn có thể xem toàn bộ những thiết lập cấp phép đã chỉ định cho các quản trị viên, thành viên, điều hành viên chính, điều hành viên hay chuyên mục.</p>
	
		<br />

		<p>Để biết thêm nhiều thông tin về những thiết lập này và quản lý thiết lập cấp phép trong hệ thống phpBB, bạn có thể tham khảo chương 1.5 trong tài liệu hướng dẫn trực tuyến <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Quick Start Guide</a> của chúng tôi.</p>
	',

	'ACL_NEVER'				=> 'Không bao giờ',	
	'ACL_SET'				=> 'Thiết lập cấp phép',
	'ACL_SET_EXPLAIN'		=> 'Những thiết lập cấp phép được thiết lập đơn giản bằng cách chọn <samp>CÓ</samp>/<samp>KHÔNG</samp> trong từng mục tương ứng. Thiết lập một tuỳ chọn là <samp>KHÔNG BAO GIỜ</samp> cho một thành viên hay nhóm sẽ thay thế cho bất kỳ giá trị nào được chỉ định đến. Nếu bạn không muốn chỉ định cấp phép trong một tuỳ chọn nào dành cho thành viên hay nhóm, hãy chọn <samp>KHÔNG</samp>. Nếu các giá trị được chỉ định trong tuỳ chọn đã có trong thiết lập cá nhân của thành viên, hãy chọn <samp>KHÔNG BAO GIỜ</samp> để sử dụng thiết lập của thành viên. Tất cả các đối tượng được đánh dấu chọn trong ô kiểm phía trước sẽ được sao chép thiết lập cấp phép giống như thiết lập cấp phép bạn đã chỉ định.',
	'ACL_SETTING'			=> 'Thiết lập',

	'ACL_TYPE_A_'			=> 'Cấp phép quản trị viên',
	'ACL_TYPE_F_'			=> 'Cấp phép chuyên mục',
	'ACL_TYPE_M_'			=> 'Cấp phép điều hành viên',
	'ACL_TYPE_U_'			=> 'Cấp phép thành viên',

	'ACL_TYPE_GLOBAL_A_'	=> 'Cấp phép quản trị viên',
	'ACL_TYPE_GLOBAL_U_'	=> 'Cấp phép thành viên',
	'ACL_TYPE_GLOBAL_M_'	=> 'Cấp phép điều hành viên chính',
	'ACL_TYPE_LOCAL_M_'		=> 'Cấp phép điều hành viên',
	'ACL_TYPE_LOCAL_F_'		=> 'Cấp phép chuyên mục',

	'ACL_NO'				=> 'Không',	
	'ACL_VIEW'				=> 'Xem thiết lập cấp phép',
	'ACL_VIEW_EXPLAIN'		=> 'Với công cụ này, bạn có thể toàn bộ thiết lập cấp phép đã chỉ định cho thành viên/nhóm. Ô màu đỏ cho biết thành viên/nhóm đó chưa được thiết lập cấp phép và ngược lại, ô màu xanh lá tức là thành viên/nhóm đó đã được thiết lập cấp phép.',
	'ACL_YES'				=> 'Có',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Với công cụ này, bạn có thể chỉ định những thiết lập cấp phép của người quản trị đối với thành viên và nhóm. Tất cả thành viên được cấp phép quản trị viên đều có thể xem bảng điều khiển của quản trị viên.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Với công cụ này, bạn có thể chỉ định thành viên hay nhóm sẽ trở thành điều hành viên của chuyên mục. Để chỉ định thành viên được phép truy cập chuyên mục, chỉ định thiết lập cấp phép của điều hành viên chính hay quản trị viên, hãy sử dụng trang cấp phép tương ứng.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Với công cụ này, bạn có thể thay đổi những thành viên và nhóm nào có thể truy cập vào chuyên mục. Để chỉ định điều hành viên hay quản trị viên, hãy sử dụng trang cấp phép tương ứng.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> 'Với công cụ này, bạn có thể xao chép cấp phép từ chuyên mục này đến một hay nhiều chuyên mục khác.',	
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Với công cụ này, bạn có thể chỉ định thiết lập cấp phép của điều hành viên chính cho các thành viên hay nhóm. Những điều hành viên chính đều giống với các điều hành viên bình thường ngoại trừ việc họ có thể truy cập bất cứ chuyên mục nào.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Với công cụ này, bạn có thể chỉ định những cấp phép chuyên mục dành cho nhóm.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Với công cụ này, bạn có thể chỉ định những thiết lập cấp phép chung cho cấp phép thành viên - nhóm, cấp phép điều hành viên chính và quản trị viên. Thiết lập cấp phép thành viên như sử dụng hình đại diện, gửi tin nhắn… ; thiết lập cấp phép điều hành viên chính như chấp nhận bài viết, quản lý chủ đề, quản lý bảng cấm… và cuối cùng thiết lập cấp phép quản trị viên như thay đổi thiết lập cấp phép, tạo các thẻ BBCode tùy biến, quản lý chuyên mục… Những thiết lập cấp phép thành viên riêng lẻ ít khi cần thay đổi, phương pháp chúng tôi khuyên bạn nên dùng là đặt những thành viên vào chung trong nhóm và thiết lập cấp phép cho nhóm sẽ dễ dàng hơn.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Với công cụ này, bạn có thể quản lý những nhiệm vụ cho thiết lập cấp phép quản trị viên. Những nhiệm vụ là các thiết lập cấp phép có ảnh hưởng, nếu bạn thay đổi một loại nhiệm vụ đã được chỉ định thì cũng đồng nghĩa với việc bạn thay đổi thiết lập cấp phép.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Với công cụ này, bạn có thể quản lý những nhiệm vụ cho thiết lập cấp phép chuyên mục. Những nhiệm vụ là các thiết lập cấp phép có ảnh hưởng, nếu bạn thay đổi một loại nhiệm vụ đã được chỉ định thì cũng đồng nghĩa với việc bạn thay đổi thiết lập cấp phép.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Với công cụ này, bạn có thể quản lý những nhiệm vụ cho thiết lập cấp phép điều hành viên. Những nhiệm vụ là các thiết lập cấp phép có ảnh hưởng, nếu bạn thay đổi một loại nhiệm vụ đã được chỉ định thì cũng đồng nghĩa với việc bạn thay đổi thiết lập cấp phép.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Với công cụ này, bạn có thể quản lý những nhiệm vụ cho thiết lập cấp phép thành viên. Những nhiệm vụ là các thiết lập cấp phép có ảnh hưởng, nếu bạn thay đổi một loại nhiệm vụ đã được chỉ định thì cũng đồng nghĩa với việc bạn thay đổi thiết lập cấp phép.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Với công cụ này, bạn có thể chỉ định cấp phép chuyên mục dành cho thành viên.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Với công cụ này, bạn có thể chỉ định những thiết lập cấp phép chung cho thành viên - cấp phép thành viên, cấp phép điều hành viên chính và quản trị viên. Thiết lập cấp phép thành viên ví dụ như sử dụng hình đại diện, gửi tin nhắn… ; thiết lập cấp phép điều hành viên chính như chấp nhận bài viết, quản lý chủ đề, quản lý bảng cấm… và cuối cùng thiết lập cấp phép quản trị viên như thay đổi thiết lập cấp phép, tạo các thẻ BBCode tùy biến, quản lý chuyên mục… Để thay đổi những thiết lập này cho số lượng nhiều thành viên, bạn hãy sử dụng trang thiết lập cấp phép nhóm. Những thiết lập cấp phép thành viên riêng lẻ ít khi cần thay đổi, phương pháp chúng tôi khuyên bạn nên dùng là đặt những thành viên vào chung trong nhóm và thiết lập cấp phép cho nhóm sẽ dễ dàng hơn.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Với công cụ này, bạn có thể xem những thiết lập cấp phép quản trị viên đã được chỉ định cho thành viên/nhóm vừa chọn.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Với công cụ này, bạn có thể xem những thiết lập cấp phép điều hành viên chính đã được chỉ định cho thành viên/nhóm vừa chọn.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Với công cụ này, bạn có thể xem những thiết lập cấp phép chuyên mục đã được chỉ định cho thành viên/nhóm và chuyên mục vừa chọn.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Với công cụ này, bạn có thể xem những thiết lập cấp phép điều hành viên đã được chỉ định cho thành viên/nhóm và chuyên mục vừa chọn.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Với công cụ này, bạn có thể xem những thiết lập cấp phép thành viên đã được chỉ định cho thành viên/nhóm vừa chọn.',

	'ADD_GROUPS'				=> 'Thêm nhóm',
	'ADD_PERMISSIONS'			=> 'Thêm thiết lập cấp phép',
	'ADD_USERS'					=> 'Thêm thành viên',
	'ADVANCED_PERMISSIONS'		=> 'Thiết lập cấp phép nâng cao',
	'ALL_GROUPS'				=> 'Chọn tất cả nhóm',
	'ALL_NEVER'					=> 'Chọn tất cả không bao giờ',	
	'ALL_NO'					=> 'Chọn tất cả không',
	'ALL_USERS'					=> 'Chọn tất cả thành viên',
	'ALL_YES'					=> 'Chọn tất cả có',
	'APPLY_ALL_PERMISSIONS'		=> 'Áp dụng tất cả thiết lập cấp phép',
	'APPLY_PERMISSIONS'			=> 'Áp dụng thiết lập cấp phép',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Thiết lập cấp phép và nhiệm vụ được xác định cho mục này sẽ chỉ được áp dụng cho mục này và những mục bạn đã đánh dấu chọn.',
	'AUTH_UPDATED'				=> 'Thiết lập cấp phép đã được cập nhật thành công.',

	'COPY_PERMISSIONS_CONFIRM'				=> 'Bạn có chắc muốn thực hiện? Vì tác vụ này sẽ ghi đè các cấp phép của các chuyên mục đính đến mà bạn chọn.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'Chuyên mục nguồn mà bạn muốn xao chép.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> 'Các chuyên mục đính đến và bạn muốn dán cấp phép.',
	'COPY_PERMISSIONS_FROM'					=> 'Xao chép cấp phép từ chuyên mục',
	'COPY_PERMISSIONS_TO'					=> 'Chép cấp phép đến chuyên mục',	
	
	'CREATE_ROLE'				=> 'Tạo nhiệm vụ mới',
	'CREATE_ROLE_FROM'			=> 'Sử dụng thiết lập từ…',
	'CUSTOM'					=> 'Tuỳ chọn…',

	'DEFAULT'					=> 'Mặc định',
	'DELETE_ROLE'				=> 'Xoá vài trò',
	'DELETE_ROLE_CONFIRM'		=> 'Bạn có chắc chắn muốn gỡ bỏ nhiệm vụ này? Những mục đã được chỉ định nhiệm vụ này sẽ không bị mất những thiết lập cấp phép.',
	'DISPLAY_ROLE_ITEMS'		=> 'Xem những mục sử dụng nhiệm vụ này',

	'EDIT_PERMISSIONS'			=> 'Sửa thiết lập cấp phép',
	'EDIT_ROLE'					=> 'Sửa nhiệm vụ',

	'GROUPS_NOT_ASSIGNED'		=> 'Không có nhóm nào được chỉ định nhiệm vụ này',

	'LOOK_UP_GROUP'				=> 'Tra cứu nhóm',
	'LOOK_UP_USER'				=> 'Tra cứu thành viên',

	'MANAGE_GROUPS'		=> 'Quản lý nhóm',
	'MANAGE_USERS'		=> 'Quản lý thành viên',

	'NO_AUTH_SETTING_FOUND'		=> 'Thiết lập cấp phép không xác định.',
	'NO_ROLE_ASSIGNED'			=> 'Không có nhiệm vụ nào được chỉ định…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Thiết lập nhiệm vụ này sẽ không thay đổi những thiết lập cấp phép. Nếu bạn muốn không thiết lập/gỡ bỏ tất cả thiết lập cấp phép, bạn nên bấm vào liên kết <samp>Chọn tất cả không</samp>.',
	'NO_ROLE_AVAILABLE'			=> 'Không có nhiệm vụ nào hiện tại',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Bạn chưa nhập tên của nhiệm vụ.',
	'NO_ROLE_SELECTED'			=> 'Không thể tìm thấy nhiệm vụ.',
	'NO_USER_GROUP_SELECTED'	=> 'Bạn chưa chọn bất kỳ thành viên hay nhóm nào.',

	'ONLY_FORUM_DEFINED'	=> 'Bạn chỉ có thể chỉ định những chuyên mục trong danh sách chọn. Bạn cũng phải chọn ít nhất là một thành viên hay một nhóm.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'Những thiết lập cấp phép và nhiệm vụ sẽ được áp dụng đến tất cả đối tượng mà bạn đã chọn',
	'PLUS_SUBFORUMS'				=> '+ Chuyên mục con',

	'REMOVE_PERMISSIONS'			=> 'Gỡ bỏ thiết lập cấp phép',
	'REMOVE_ROLE'					=> 'Gỡ bỏ nhiệm vụ',
	'RESULTING_PERMISSION'			=> 'Kết quả cấp phép',
	'ROLE'							=> 'Nhiệm vụ',
	'ROLE_ADD_SUCCESS'				=> 'Nhiệm vụ mới đã được thêm vào thành công.',
	'ROLE_ASSIGNED_TO'				=> 'Thành viên/nhóm đã được chỉ định thành %s',
	'ROLE_DELETED'					=> 'Nhiệm vụ đã được gỡ bỏ thành công.',
	'ROLE_DESCRIPTION'				=> 'Giới thiệu về nhiệm vụ',

	'ROLE_ADMIN_FORUM'			=> 'Quản trị chuyên mục',
	'ROLE_ADMIN_FULL'			=> 'Quản trị toàn quyền',
	'ROLE_ADMIN_STANDARD'		=> 'Quản trị bình thường',
	'ROLE_ADMIN_USERGROUP'		=> 'Quản trị thành viên và nhóm',
	'ROLE_FORUM_BOT'			=> 'Máy tìm kiếm truy cập',
	'ROLE_FORUM_FULL'			=> 'Truy cập toàn quyền',
	'ROLE_FORUM_LIMITED'		=> 'Truy cập giới hạn',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Truy cập giới hạn + Bình chọn',
	'ROLE_FORUM_NOACCESS'		=> 'Không cho truy cập',
	'ROLE_FORUM_ONQUEUE'		=> 'Truy cập kiểm duyệt nội dung',
	'ROLE_FORUM_POLLS'			=> 'Truy cập bình thường + Bình chọn',
	'ROLE_FORUM_READONLY'		=> 'Truy cập chỉ được phép xem',
	'ROLE_FORUM_STANDARD'		=> 'Truy cập bình thường',
	'ROLE_FORUM_NEW_MEMBER'		=> 'Thành viên mới đăng ký',
	'ROLE_MOD_FULL'				=> 'Điều hành toàn quyền',
	'ROLE_MOD_QUEUE'			=> 'Điều hành kiểm duyệt nội dung',
	'ROLE_MOD_SIMPLE'			=> 'Điều hành đơn giản',
	'ROLE_MOD_STANDARD'			=> 'Điều hành bình thường',
	'ROLE_USER_FULL'			=> 'Tất cả chức năng',
	'ROLE_USER_LIMITED'			=> 'Chức năng giới hạn',
	'ROLE_USER_NOAVATAR'		=> 'Không sử dụng hình đại diện',
	'ROLE_USER_NOPM'			=> 'Không sử dụng tin nhắn',
	'ROLE_USER_STANDARD'		=> 'Chức năng bình thường',
	'ROLE_USER_NEW_MEMBER'		=> 'Thành viên mới đăng ký',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Có thể truy cập quản lý chuyên mục và thiết lập cấp phép chuyên mục.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Có thể sử dụng tất cả chức năng của quản trị viên trong hệ thống.<br />Không khuyến cáo sử dụng.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Có thể sử dụng hầu hết chức năng của quản trị viên nhưng không được phép sử dụng các công cụ thiết lập máy chủ hay hệ thống.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Có thể quản lý nhóm và thành viên: Thay đổi thiết lập cấp phép, thiết lập giá trị, quản lý bảng cấm và xếp hạng.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Nhiệm vụ này được khuyến cáo nên sử dụng cho các máy tìm kiếm.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Có thể sử dụng tất cả chức năng trong chuyên mục, bao gồm cả tạo thông báo và chú ý và không bị giới hạn thời gian gửi bài giữa hai bài viết.<br />Không khuyến cáo sử dụng cho thành viên bình thường.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Có thể sử dụng một vài chức năng trong chuyên mục nhưng không thể đính kèm tập tin hay sử dụng biểu tượng bài viết.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Giống như truy cập giới hạn nhưng có thể tạo bình chọn được.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Không thể nhìn thấy hay truy cập vào chuyên mục.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Có thể sử dụng hầu hết chức năng trong chuyên mục như đính kèm tập tin nhưng chủ đề và bài viết gửi đến phải được chấp nhận bởi người điều hành.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Giống như truy cập bình thường nhưng có thể tạo bình chọn.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Có thể xem chuyên mục nhưng không thể tạo chủ đề mới hay trả lời bài viết.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Có thể sử dụng hầu hết chức năng trong chuyên mục như đính kèm tập tin và xoá những chủ đề của mình nhưng không thể khoá chúng và không thể tạo bình chọn.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> 'Vai trò cho các thành viên của nhóm Thành viên mới đăng ký; với quyền hạn <samp>chưa được xác lập</samp> nhằm khóa tất cả chức năng cho một thành viên mới.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Có thể sử dụng tất cả chức năng của điều hành viên bao gồm cả bảng cấm.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Có thể sử dụng chức năng của điều hành viên để kiểm tra và sửa bài viết, ngoài ra không có gì khác.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Chỉ có thể sử dụng các thao tác chủ đề đơn giản. Không thể gửi cảnh cáo hay sử dụng các chức năng điều hành viên khác.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Chỉ có thể sử dụng hầu hết chức năng của điều hành viên nhưng không thể cấm thành viên hay thay đổi tác giả bài viết.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Có thể sử dụng tất cả chức năng trong chuyên mục sẵn có dành cho thành viên bao gồm cả thay đổi tên thành viên hay không bị giới hạn thời gian gửi bài giữa hai bài viết.<br />Không khuyến cáo sử dụng.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Có thể sử dụng một vài chức năng của thành viên nhưng không được phép đính kèm tập tin, gửi Email hay tin nhắn nhanh.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Hạn chế chức năng thiết lập và không được phép sử dụng hình đại diện.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Hạn chế chức năng thiết lập và không được phép sử dụng tin nhắn.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Có thể sử dụng hầu hết chức năng của thành viên nhưng không thể thay đổi tên thành viên hay bị giới hạn thời gian gửi bài giữa hai bài viết.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> 'A role for members of the special newly registered users group; contains <samp>NEVER</samp> permissions to lock features for new users.',
	
	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Bạn có thể nhập vào một giới thiệu ngắn về nhiệm vụ này có vai trò như thế nào trong hệ thống. Nội dung bạn nhập vào đây cũng sẽ được hiển thị trong trang thiết lập cấp phép.',
	'ROLE_DESCRIPTION_LONG'			=> 'Giới thiệu về nhiệm vụ mà bạn nhập quá dài. Hãy giới hạn nội dung giới thiệu này trong <strong>4000</strong> ký tự.',
	'ROLE_DETAILS'					=> 'Thông tin nhiệm vụ',
	'ROLE_EDIT_SUCCESS'				=> 'Nhiệm vụ đã được chỉnh sửa thành công.',
	'ROLE_NAME'						=> 'Tên nhiệm vụ',
	'ROLE_NAME_ALREADY_EXIST'		=> 'Nhiệm vụ được đặt tên là <strong>%s</strong> đã được sử dụng cho loại cấp phép xác định.',
	'ROLE_NOT_ASSIGNED'				=> 'Nhiệm vụ chưa được chỉ định cho bất cứ thành viên nào.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'Chuyên mục bạn vừa chọn không tồn tại.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'Nhóm bạn vừa chọn không tồn tại.',
	'SELECTED_USER_NOT_EXIST'		=> 'Thành viên bạn vừa chọn không tồn tại.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Chuyên mục bạn chọn tại đây sẽ chọn toàn bộ các chuyên mục con bên trong.',
	'SELECT_ROLE'					=> 'Chọn nhiệm vụ…',
	'SELECT_TYPE'					=> 'Chọn loại',
	'SET_PERMISSIONS'				=> 'Thiết lập cấp phép',
	'SET_ROLE_PERMISSIONS'			=> 'Thiết lập cấp phép nhiệm vụ',
	'SET_USERS_PERMISSIONS'			=> 'Thiết lập cấp phép thành viên',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Thiết lập cấp phép chuyên mục cho thành viên',

	'TRACE_DEFAULT'							=> 'Mặc định, mọi thiết lập cấp phép đều là <samp>KHÔNG</samp> (chưa thiết lập). Vì thế, những thiết lập cấp phép có thể được thay thế bằng những thiết lập khác.',
	'TRACE_FOR'								=> 'Xác định cho',
	'TRACE_GLOBAL_SETTING'					=> '%s (toàn bộ)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'			=> 'Thiết lập cấp phép của nhóm này đã được chọn là <samp>KHÔNG BAO GIỜ</samp> giống như tất cả kết quả vì thế kết quả cũ được giữ lại.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'Thiết lập cấp phép của nhóm trong chuyên mục này đã được chọn là <samp>KHÔNG BAO GIỜ</samp> giống như tất cả kết quả vì thế kết quả cũ được giữ lại.',
	'TRACE_GROUP_NEVER_TOTAL_NO'			=> 'Thiết lập cấp phép của nhóm này đã được chọn là <samp>KHÔNG BAO GIỜ</samp> sẽ trở thành tất cả giá trị mới bởi vì nó chưa được thiết lập (thiết lập thành <samp>KHÔNG</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'		=> 'Thiết lập cấp phép của nhóm trong chuyên mục này đã được chọn là <samp>KHÔNG BAO GIỜ</samp> sẽ trở thành tất cả giá trị mới bởi vì nó chưa được thiết lập (thiết lập thành <samp>KHÔNG</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'			=> 'Thiết lập cấp phép của nhóm này đã được chọn là <samp>KHÔNG BAO GIỜ</samp> sẽ thay thế cho tất cả giá trị <samp>CÓ</samp> trở thành <samp>KHÔNG BAO GIỜ</samp> cho thành viên này.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'		=> 'Thiết lập cấp phép của nhóm trong chuyên mục này đã được chọn là <samp>KHÔNG BAO GIỜ</samp> sẽ thay thế cho tất cả giá trị <samp>CÓ</samp> trở thành <samp>KHÔNG BAO GIỜ</samp> cho thành viên này.',
	'TRACE_GROUP_NO'						=> 'Thiết lập cấp phép của nhóm này là <samp>KHÔNG</samp> vì thế toàn bộ giá trị cũ được giữ lại.',
	'TRACE_GROUP_NO_LOCAL'					=> 'Thiết lập cấp phép của nhóm trong chuyên mục này là <samp>KHÔNG</samp> vì thế toàn bộ giá trị cũ được giữ lại.',
	'TRACE_GROUP_YES_TOTAL_NEVER'			=> 'Thiết lập cấp phép của nhóm này đã được chọn là <samp>CÓ</samp> nhưng tất cả giá trị <samp>KHÔNG BAO GIỜ</samp> không thể bị thay thế.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'		=> 'Thiết lập cấp phép của nhóm trong chuyên mục này đã được chọn là <samp>CÓ</samp> nhưng tất cả giá trị <samp>KHÔNG BAO GIỜ</samp> không thể bị thay thế.',
	'TRACE_GROUP_YES_TOTAL_NO'				=> 'Thiết lập cấp phép của nhóm này đã được chọn là <samp>CÓ</samp> sẽ trở thành tất cả giá trị mới bởi vì nó chưa được thiết lập (thiết lập thành <samp>KHÔNG</samp>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'		=> 'Thiết lập cấp phép của nhóm trong chuyên mục này đã được chọn là <samp>CÓ</samp> sẽ trở thành tất cả giá trị mới bởi vì nó chưa được thiết lập (thiết lập thành <samp>KHÔNG</samp>).',
	'TRACE_GROUP_YES_TOTAL_YES'				=> 'Thiết lập cấp phép của nhóm này đã được chọn là <samp>CÓ</samp> và toàn bộ thiết lập cấp phép vừa được chọn là <samp>CÓ</samp>, vì thế tất cả giá trị được giữ lại.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'		=> 'Thiết lập cấp phép của nhóm trong chuyên mục này đã được chọn là <samp>CÓ</samp> và toàn bộ thiết lập cấp phép vừa được chọn là <samp>CÓ</samp>, vì thế tất cả giá trị được giữ lại.',
	'TRACE_PERMISSION'						=> 'Xác định cấp phép - %s',
	'TRACE_RESULT'							=> 'Xác định kết quả',
	'TRACE_SETTING'							=> 'Thiết lập xác định',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'Thiết lập cấp phép thành viên trong chuyên mục độc lập được đánh giá là <samp>CÓ</samp> nhưng toàn bộ số thiết lập cấp phép được chọn là <samp>CÓ</samp>, vì thế toàn bộ số giá trị được giữ lại. %sTheo dõi cấp phép chung%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'Thiết lập cấp phép thành viên trong chuyên mục độc lập được đánh giá là <samp>CÓ</samp> thay thế cho giá trị hiện tại là <samp>KHÔNG BAO GIỜ</samp>. %sTheo dõi cấp phép chung%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'Thiết lập cấp phép thành viên trong chuyên mục độc lập được đánh giá là <samp>KHÔNG BAO GIỜ</samp> không ảnh hưởng đến thiết lập cấp phép riêng. %sTheo dõi cấp phép chung%s',

	'TRACE_USER_FOUNDER'					=> 'Đây là thành viên sáng lập, vì thế những thiết lập quản trị viên được thiết lập mặc định là <samp>CÓ</samp>.',
	'TRACE_USER_KEPT'						=> 'Thiết lập cấp phép của thành viên là <samp>KHÔNG</samp> vì thế tất cả giá trị cũ được giữ lại.',
	'TRACE_USER_KEPT_LOCAL'					=> 'Thiết lập cấp phép của thành viên trong chuyên mục này là <samp>KHÔNG</samp> vì thế tất cả giá trị cũ được giữ lại.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'Thiết lập cấp phép của thành viên đã được chọn là <samp>KHÔNG BAO GIỜ</samp> và tất cả giá trị đã được chọn là <samp>KHÔNG BAO GIỜ</samp>, vì thế không có gì thay đổi.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'Thiết lập cấp phép của thành viên trong chuyên mục này đã được chọn là <samp>KHÔNG BAO GIỜ</samp> và tất cả giá trị đã được chọn là <samp>KHÔNG BAO GIỜ</samp>, vì thế không có gì thay đổi.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'Thiết lập cấp phép của thành viên đã được chọn là <samp>KHÔNG BAO GIỜ</samp> sẽ trở thành tất cả giá trị bởi vì nó đã được chọn là <samp>KHÔNG</samp>.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'Thiết lập cấp phép của thành viên trong chuyên mục này đã được chọn là <samp>KHÔNG BAO GIỜ</samp> sẽ trở thành tất cả giá trị bởi vì nó đã được chọn là <samp>KHÔNG</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'Thiết lập cấp phép của thành viên đã được chọn là <samp>KHÔNG BAO GIỜ</samp> và thay thế giá trị <samp>CÓ</samp> trước đó.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'Thiết lập cấp phép của thành viên trong chuyên mục này đã được chọn là <samp>KHÔNG BAO GIỜ</samp> và thay thế giá trị <samp>CÓ</samp> trước đó.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'Thiết lập cấp phép của thành viên là <samp>KHÔNG</samp> và tất cả giá trị đã được chọn là <samp>KHÔNG</samp> vì mặc định ban đầu của nó là <samp>KHÔNG BAO GIỜ</samp>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'Thiết lập cấp phép của thành viên trong chuyên mục này là <samp>KHÔNG</samp> và tất cả giá trị đã được chọn là <samp>KHÔNG</samp> vì mặc định ban đầu của nó là <samp>KHÔNG BAO GIỜ</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'Thiết lập cấp phép của thành viên đã được chọn là <samp>CÓ</samp> nhưng tất cả giá trị <samp>KHÔNG BAO GIỜ</samp> không thể bị thay thế.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'Thiết lập cấp phép của thành viên trong chuyên mục này đã được chọn là <samp>CÓ</samp> nhưng tất cả giá trị <samp>KHÔNG BAO GIỜ</samp> không thể bị thay thế.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'Thiết lập cấp phép của thành viên đã được chọn là <samp>CÓ</samp> sẽ trở thành tất cả giá trị bởi vì nó đã được chọn là <samp>KHÔNG</samp>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'Thiết lập cấp phép của thành viên trong chuyên mục này đã được chọn là <samp>CÓ</samp> sẽ trở thành tất cả giá trị bởi vì nó đã được chọn là <samp>KHÔNG</samp>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'Thiết lập cấp phép của thành viên đã được chọn là <samp>CÓ</samp> và tất cả giá trị đã được chọn là <samp>CÓ</samp>, vì thế không có gì thay đổi.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'Thiết lập cấp phép của thành viên trong chuyên mục này đã được chọn là <samp>CÓ</samp> và tất cả giá trị đã được chọn là <samp>CÓ</samp>, vì thế không có gì thay đổi.',
	'TRACE_WHO'								=> 'Ai?',
	'TRACE_TOTAL'							=> 'Toàn bộ',

	'USERS_NOT_ASSIGNED'			=> 'Không có thành viên nào được chỉ định nhiệm vụ này',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'là một thành viên của những nhóm mặc định dưới đây',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'là một thành viên của những nhóm tuỳ chọn dưới đây',

	'VIEW_ASSIGNED_ITEMS'	=> 'Xem những mục đã chỉ định',
	'VIEW_LOCAL_PERMS'		=> 'Xem thiết lập cấp phép riêng',
	'VIEW_GLOBAL_PERMS'		=> 'Xem thiết lập cấp phép chung',
	'VIEW_PERMISSIONS'		=> 'Xem thiết lập cấp phép',

	'WRONG_PERMISSION_TYPE'	=> 'Loại thiết lập cấp phép sai đã được chọn',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'Thiết lập cấp phép sai định dạng, phpBB không thể sử dụng thông tin thiết lập này một cách chính xác.',
));
