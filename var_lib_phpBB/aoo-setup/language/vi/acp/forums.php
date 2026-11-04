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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> 'Số ngày tự động dọn dẹp bài viết sau khi gửi',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'Nếu chủ đề không có bài viết mới nào sau số ngày được thiết lập này thì chủ đề sẽ được tự động gỡ bỏ.',
	'AUTO_PRUNE_FREQ'			=> 'Chu kỳ thực hiện dọn dẹp tự động',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Số ngày giữa hai lần thực hiện việc dọn dẹp tự động.',
	'AUTO_PRUNE_VIEWED'			=> 'Số ngày tự động dọn dẹp bài viết sau khi xem',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Nếu chủ đề không có ai xem sau số ngày được thiết lập này thì chủ đề sẽ được tự động gỡ bỏ.',
	'AUTO_PRUNE_SHADOW_FREQ'	=> 'Auto-prune shadow topics frequency',
	'AUTO_PRUNE_SHADOW_DAYS'	=> 'Auto-prune shadow topics age',
	'AUTO_PRUNE_SHADOW_DAYS_EXPLAIN'	=> 'Number of days after which shadow topic is removed.',
	'AUTO_PRUNE_SHADOW_FREQ_EXPLAIN'	=> 'Time in days between pruning events.',

	'CONTINUE'						=> 'Tiếp tục',
	'COPY_PERMISSIONS'				=> 'Sao chép thiết lập cấp phép từ',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Để thuận tiện hơn trong việc thiết lập các chuyên mục, bạn có thể chép cấp phép cho chuyên mục từ một chuyên mục khác.',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Sau khi sao chép thiết lập cấp phép, chuyên mục sẽ có thiết lập cấp phép giống như của chuyên mục mà bạn chọn sao chép. Nếu không có chuyên mục nào được chọn thì chuyên mục vừa mới tạo sẽ không thể truy cập được cho đến khi bạn thiết lập cấp phép xong.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Nếu bạn chọn sao chép thiết lập cấp phép, chuyên mục sẽ có thiết lập cấp phép giống như của chuyên mục mà bạn chọn sao chép. Thiết lập cấp phép mới mà bạn chọn sẽ thay thế cho bất kỳ thiết lập cấp phép nào mà bạn đã thiết lập trước đây cho chuyên mục này. Nếu không có chuyên mục nào được chọn, những thiết lập cấp phép hiện tại của chuyên mục này sẽ được giữ nguyên.',	
	'COPY_TO_ACL'					=> 'Một các khác, bạn cũng có thể %sthiết lập cấp phéps%s cho chuyên mục này.',
	'CREATE_FORUM'					=> 'Tạo chuyên mục mới',

	'DECIDE_MOVE_DELETE_CONTENT'		=> 'Xoá toàn bộ nội dung hoặc di chuyển đến chuyên mục',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'Xóa toàn bộ các chuyên mục con hoặc di chuyển đến chuyên mục',
	'DEFAULT_STYLE'						=> 'Giao diện mặc định',
	'DELETE_ALL_POSTS'					=> 'Xoá bài viết',
	'DELETE_SUBFORUMS'					=> 'Xoá chuyên mục con và bài viết',
	'DISPLAY_ACTIVE_TOPICS'				=> 'Hiển thị những chủ đề không bị khoá',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'Nếu bật tuỳ chọn này, những chủ đề không bị khoá không các chuyên mục con đã chọn sẽ được hiển thị trong chuyên mục này.',

	'EDIT_FORUM'				=> 'Sửa chuyên mục',
	'ENABLE_INDEXING'			=> 'Bật chỉ mục tìm kiếm',
	'ENABLE_INDEXING_EXPLAIN'	=> 'Nếu bạn bật tuỳ chọn này, những bài viết trong chuyên mục này sẽ được tạo chỉ mục để có thể tìm kiếm.',
	'ENABLE_POST_REVIEW'			=> 'Cho phép xem lại bài viết',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Nếu bật tuỳ chọn này, các thành viên có thể xem lại bài viết của họ nếu có những bài viết mới được gửi đến chủ đề trong khi họ đang soạn bài. Bạn chỉ nên tắt tuỳ chọn này nếu sử dụng diễn đàn chỉ để chat hay tán gẫu.',	
	'ENABLE_QUICK_REPLY'			=> 'Cho phép gửi bài trả lời nhanh',
	'ENABLE_QUICK_REPLY_EXPLAIN'	=> 'Bật chế độ gửi trả lời nhanh trong chuyên mục này. Tùy chọn này sẽ bị mất hiệu lực nếu chức năng gửi trả lời nhanh bị vô hiệu trên toàn diễn đàn. Ngoài ra chức năng này chỉ được hiển thị cho những thành viên có quyền gửi bài vào trong chuyên mục này.',	
	'ENABLE_RECENT'					=> 'Hiển thị những chủ đề không bị khoá',
	'ENABLE_RECENT_EXPLAIN'			=> 'Nếu bật tuỳ chọn này, những chủ đề được gửi trong các chuyên mục sẽ được hiển thị trong danh sách chủ đề không bị khoá.',
	'ENABLE_TOPIC_ICONS'			=> 'Sử dụng biểu tượng cho chủ đề',

	'FORUM_ADMIN'						=> 'Quản lý chuyên mục',
	'FORUM_ADMIN_EXPLAIN'				=> 'Trong hệ thống phpBB mới không có khái niệm nhóm chuyên mục như trước, mọi thứ bây giờ đều chứa trong chuyên mục với nhau. Mỗi chuyên mục có thể có số chuyên mục con không hạn chế về số lượng và cấp độ. Bạn cũng có thể chọn chuyên mục nào thành viên được phép và không được phép gửi bài. Với công cụ này, bạn có thể thêm vào, chỉnh sửa, xoá, khoá, mở khoá từng chuyên mục riêng lẻ với các công cụ điều khiển. Nếu những chủ đề và bài viết của bạn không được đồng bộ, bạn cũng có thể đồng bộ hoá lại chuyên mục. <strong>Bạn cần phải sao chép hoặc tạo thiết lập cấp phép thích hợp cho những chuyên mục tạo mới thì chúng mới được hiển thị ngoài hệ thống.</strong>',
	'FORUM_AUTO_PRUNE'					=> 'Bật chế độ tự động dọn dẹp',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'Tuỳ chọn dọn dẹp các chủ đề trong chuyên mục, thiết lập các thông số thời gian bên dưới.',
	'FORUM_CREATED'						=> 'Chuyên mục mới đã được tạo thành công.',
	'FORUM_DATA_NEGATIVE'				=> 'Dọn dẹp các thông số không thể vô hiệu.',
	'FORUM_DESC_TOO_LONG'				=> 'Giới thiệu về chuyên mục mà bạn nhập quá dài. Nội dung giới thiệu không được vượt quá <strong>4000</strong> ký tự.',
	'FORUM_DELETE'						=> 'Xoá chuyên mục',
	'FORUM_DELETE_EXPLAIN'				=> 'Bạn có thể xoá chuyên mục trong phần bên dưới. Nếu chuyên mục chuyển được, bạn có thể chọn chuyên mục khác mà bạn muốn chuyển toàn bộ chuyên mục con hay chủ đề sang.',
	'FORUM_DELETED'						=> 'Chuyên mục đã được xoá thành công.',
	'FORUM_DESC'						=> 'Giới thiệu về chuyên mục',
	'FORUM_DESC_EXPLAIN'				=> 'Bất kỳ thẻ đánh dấu HTML nào bạn nhập trong đây đều được hiển thị.',
	'FORUM_EDIT_EXPLAIN'				=> 'Bảng điều khiển bên dưới sẽ giúp bạn tuỳ chỉnh chuyên mục này. Lưu ý rằng việc thiết lập điều hành viên cho chuyên mục này cũng như bảng điều khiển bộ đếm số bài viết được thiết lập từ mục cấp phép chuyên mục trong công cụ cấp phép cho các thành viên và nhóm thành viên.',
	'FORUM_IMAGE'						=> 'Hình chuyên mục',
	'FORUM_IMAGE_EXPLAIN'				=> 'Đường dẫn đến hình ảnh thêm vào sử dụng cho chuyên mục này, nằm trong thư mục chính cài đặt hệ thống.',
	'FORUM_IMAGE_NO_EXIST'				=> 'Chuyên mục này không tồn tại',
	'FORUM_LINK_EXPLAIN'				=> 'Địa chỉ URL đầy đủ đính kèm cả giao thức, ví dụ như <samp>http://</samp> để xác định liên kết điểm đến khi thành viên bấm vào chuyên mục liên kết này, ví dụ như <samp>http://www.phpbb.com/</samp>',
	'FORUM_LINK_TRACK'					=> 'Đếm số lượt người ghé thăm',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'Ghi nhận số lượt người đã bấm vào chuyên mục liên kết.',
	'FORUM_NAME'						=> 'Tên chuyên mục',
	'FORUM_NAME_EMPTY'					=> 'Bạn phải nhập tên cho chuyên mục này.',
	'FORUM_PARENT'						=> 'Chuyên mục chính',
	'FORUM_PASSWORD'					=> 'Mật khẩu chuyên mục',
	'FORUM_PASSWORD_CONFIRM'			=> 'Xác nhận mật khẩu chuyên mục',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Bạn chỉ cần xác nhận lại mật khẩu này nếu đã nhập mật khẩu cho chuyên mục ở trên.',
	'FORUM_PASSWORD_EXPLAIN'			=> 'Chọn mật khẩu cho chuyên mục này, sử dụng hệ thống cấp phép trong thiết lập.',
	'FORUM_PASSWORD_UNSET'				=> 'Gỡ bỏ mật khẩu chuyên mục',
	'FORUM_PASSWORD_UNSET_EXPLAIN'		=> 'Chọn nếu bạn muốn gỡ bỏ mật khẩu của chuyên mục.',
	'FORUM_PASSWORD_OLD'				=> 'Mật khẩu của chuyên mục dùng cơ chế quá cũ và cần được thay đổi.',
	'FORUM_PASSWORD_MISMATCH'			=> 'Mật khẩu của chuyên mục bạn vừa nhập không phù hợp.',
	'FORUM_PRUNE_SETTINGS'				=> 'Thiết lập dọn dẹp chuyên mục',	
	'FORUM_PRUNE_SHADOW'				=> 'Enable auto-pruning of shadow topics',
	'FORUM_PRUNE_SHADOW_EXPLAIN'			=> 'Prunes the forum of shadow topics, set the frequency/age parameters below.',
	'FORUM_RESYNCED'					=> 'Chuyên mục <strong>%s</strong> đã được đồng bộ thành công.',
	'FORUM_RULES_EXPLAIN'				=> 'Nội quy chuyên mục được hiển thị trong bất cứ trang nào của chuyên mục đó.',
	'FORUM_RULES_LINK'					=> 'Liên kết đến nội quy chuyên mục',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'Bạn có thể nhập vào địa chỉ URL của trang/bài viết mà bạn muốn dùng làm nội quy cho chuyên mục tại đây. Thiết lập này sẽ thay thế cho nội dung của nội quy chuyên mục mà bạn đã nhập.',
	'FORUM_RULES_PREVIEW'				=> 'Xem trước nội quy chuyên mục',
	'FORUM_RULES_TOO_LONG'				=> 'Nội quy chuyên mục không được vượt quá <strong>4000</strong> ký tự.',
	'FORUM_SETTINGS'					=> 'Thiết lập chuyên mục',
	'FORUM_STATUS'						=> 'Trạng thái chuyên mục',
	'FORUM_STYLE'						=> 'Giao diện chuyên mục',
	'FORUM_TOPICS_PAGE'					=> 'Số chủ đề mỗi trang',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'Nếu không có giá trị <strong>0</strong>, giá trị này sẽ thay thế cho số chủ đề mặc định hiển thị trong mỗi trang được thiết lập.',
	'FORUM_TYPE'						=> 'Nhóm chuyên mục',
	'FORUM_UPDATED'						=> 'Thông tin về chuyên mục đã được cập nhật thành công.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'	=> 'Bạn đã chọn thay đổi một chuyên mục có thể gửi bài có các chuyên mục con trở thành một liên kết. Hãy vui lòng di chuyển tất cả chuyên mục con của chuyên mục này trước khi bạn tiến hành, bởi vì sau khi thay đổi chuyên mục này thành một liên kết, bạn sẽ không còn xem được những chuyên mục con hiện tại đang nằm trong chuyên mục này.',

	'GENERAL_FORUM_SETTINGS'	=> 'Thiết lập chuyên mục tổng quát',

	'LINK'					=> 'Liên kết',
	'LIST_INDEX'			=> 'Liệt kê chuyên này trong phần chú giải của chuyên mục chứa nó',
	'LIST_INDEX_EXPLAIN'	=> 'Hiển thị chuyên mục này trong trang trong phần chú giải của chuyên mục chứa nó.',
	'LIST_SUBFORUMS'			=> 'Liệt kê các chuyên mục con của nó trong chú thích',
	'LIST_SUBFORUMS_EXPLAIN'	=> 'Hiển thị các chuyên mục con của chuyên mục này trong trong phần chú giải cho các chuyên mục con với tùy “Liệt kê chuyên này trong phần chú giải của chuyên mục chứa nó” được bật.',	
	'LOCKED'				=> 'Đã khoá',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'Chuyên mục bạn vừa chọn để di duyển các bài viết đến không cho phép gửi bài. Bạn hãy vui lòng chọn một chuyên mục cho phép gửi bài.',
	'MOVE_POSTS_TO'					=> 'Di chuyển bài viết đến',
	'MOVE_SUBFORUMS_TO'				=> 'Di chuyển chuyên mục con đến',

	'NO_DESTINATION_FORUM'			=> 'Bạn chưa xác định một chuyên mục để di chuyển nội dung đến.',
	'NO_FORUM_ACTION'				=> 'Không có yêu cầu nào được xác định với nội dung chuyên mục.',
	'NO_PARENT'						=> 'Không có chuyên mục chính',
	'NO_PERMISSIONS'				=> 'Đừng sao chép cấp phép',
	'NO_PERMISSION_FORUM_ADD'		=> 'Bạn không được cấp phép để tạo chuyên mục mới.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'Bạn không được cấp phép để xoá chuyên mục.',

	'PARENT_IS_LINK_FORUM'		=> 'Chuyên mục chính mà bạn đã xác định là một chuyên mục liên kết. Những chuyên mục liên kết không thể chứa các chuyên mục khác bên torng được. Bạn hãy vui lòng chọn một nhóm chuyên mục hay chuyên mục để làm chuyên mục chính.',
	'PARENT_NOT_EXIST'			=> 'Chuyên mục chính không tồn tại.',
	'PRUNE_ANNOUNCEMENTS'		=> 'Dọn dẹp thông báo',
	'PRUNE_STICKY'				=> 'Dọn dẹp chú ý',
	'PRUNE_OLD_POLLS'			=> 'Dọn dẹp bình chọn cũ',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Số ngày gỡ bỏ các chủ đề có bình chọn trong bài viết không ai tham gia.',

	'REDIRECT_ACL'	=> 'Ngay bây giờ bạn có thể %sthiết lập cấp phép%s cho chuyên mục này.',

	'SYNC_IN_PROGRESS'			=> 'Đang đồng độ hóa chuyên mục',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Đang đồng bộ hóa chủ đề trong dải %1$d/%2$d.',

	'TYPE_CAT'			=> 'Nhóm chuyên mục',
	'TYPE_FORUM'		=> 'Chuyên mục',
	'TYPE_LINK'			=> 'Liên kết',

	'UNLOCKED'			=> 'Không khoá',
));
