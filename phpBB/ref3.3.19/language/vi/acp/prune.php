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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Sử dụng công cụ này, bạn có thể xoá hoặc ngưng kích hoạt tài khoản của các thành viên trong hệ thống. Bạn có thể thực hiện việc này theo nhiều cách khác nhau: theo số bài viết, lần ghé thăm trước… Mỗi cách dọn dẹp có thể kết hợp với nhau, ví dụ như bạn muốn dọn dẹp những thành viên có lần ghé thăm cuối cùng trước ngày 2002/01/01 và có ít hơn 10 bài viết. Bạn có thể nhập vào trực tiếp danh sách của các thành viên vào khung bên dưới, bất kỳ điều kiện nào nhập vào khung này đều vô hiệu. Hãy cẩn thận với công cụ này! Khi một thành viên đã bị xoá bạn không thể phục hồi lại được.',

	'CRITERIA'				=> 'Criteria',

	'DEACTIVATE_DELETE'			=> 'Ngưng kích hoạt hoặc xoá',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Chọn ngưng kích hoạt thành viên hay xoá tài khoản của họ hoàn toàn, lưu ý rằng thao tác này không thể phục hồi lại!',
	'DELETE_USERS'				=> 'Xoá',
	'DELETE_USER_POSTS'			=> 'Xoá bài viết của những thành viên đã dọn dẹp',
	'DELETE_USER_POSTS_EXPLAIN' => 'Gỡ bỏ những bài viết được gửi bởi các thành viên đã bị xoá, sẽ không có tác dụng nếu thành viên chưa được kích hoạt.',

	'JOINED_EXPLAIN'			=> 'Nhập vào ngày tham gia theo định dạng ngày tháng <kbd>YYYY-MM-DD</kbd>.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Nhập vào ngày ghé thăm trước theo định dạng ngày tháng <kbd>YYYY-MM-DD</kbd>.',

	'POSTS_ON_QUEUE'			=> 'Posts Awaiting Approval',
	'PRUNE_USERS_GROUP_EXPLAIN'	=> 'Limit to users within the selected group.',
	'PRUNE_USERS_GROUP_NONE'	=> 'All groups',
	'PRUNE_USERS_LIST'				=> 'Những thành viên được dọn dẹp',
	'PRUNE_USERS_LIST_DELETE'		=> 'Với những điều kiện đã chọn cho thao tác dọn dẹp thành viên, các tài khoản sau đây sẽ bị gỡ bỏ.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Với những điều kiện đã chọn cho thao tác dọn dẹp thành viên, các tài khoản sau đây sẽ bị ngưng kích hoạt.',

	'SELECT_USERS_EXPLAIN'		=> 'Nhập vào những tên thành viên xác định tại đây, những tên thành viên này được sử dụng để thiết lập trong các tuỳ chọn bên dưới.',

	'USER_DEACTIVATE_SUCCESS'	=> 'Những thành viên bạn vừa chọn đã được ngưng kích hoạt thành công.',
	'USER_DELETE_SUCCESS'		=> 'Những thành viên bạn vừa chọn đã được xoá thành công.',
	'USER_PRUNE_FAILURE'		=> 'Không có thành viên nào nằm trong những điều kiện mà bạn đã chọn.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'Ngày tháng bạn vừa nhập không chính xác, nó phải nằm trong định dạng <kbd>YYYY-MM-DD</kbd>.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Với công cụ này, bạn có thể xoá bất kỳ chủ đề nào không có bài viết mới hoặc không hề được xem qua trong vòng số ngày mà bạn đã chọn. Nếu bạn không nhập vào số ngày thì tất cả các chủ đề sẽ bị xoá. Mặc định, công cụ này sẽ không gỡ bỏ những chủ đề có các bình chọn chưa hoặc không kết thúc cũng như đối với các chú ý hay thông báo.',

	'FORUM_PRUNE'		=> 'Dọn dẹp chuyên mục',

	'NO_PRUNE'			=> 'Không có chuyên mục nào được dọn dẹp.',

	'SELECTED_FORUM'	=> 'Chuyên mục đã chọn',
	'SELECTED_FORUMS'	=> 'Những chuyên mục đã chọn',

	'POSTS_PRUNED'					=> 'Những bài viết đã dọn dẹp',
	'PRUNE_ANNOUNCEMENTS'			=> 'Dọn dẹp thông báo',
	'PRUNE_FINISHED_POLLS'			=> 'Dọn dẹp bình chọn đã kết thúc',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Gỡ bỏ những chủ đề có các bình chọn đã kết thúc.',
	'PRUNE_FORUM_CONFIRM'			=> 'Bạn có chắc chắn muốn dọn dẹp các chuyên mục đã chọn với những thiết lập được xác định? Việc gỡ bỏ chỉ thực hiện một lần và sẽ không có cách nào cho bạn khôi phục lại các chủ đề và bài viết đã được dọn dẹp.',
	'PRUNE_NOT_POSTED'				=> 'Số ngày kể từ lần gửi bài mới nhất',
	'PRUNE_NOT_VIEWED'				=> 'Số ngày kể từ lần xem mới nhất',
	'PRUNE_OLD_POLLS'				=> 'Dọn dẹp bình chọn cũ',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Gỡ bỏ những chủ đề có các bình chọn không được ai tham gia.',
	'PRUNE_STICKY'					=> 'Dọn dẹp chú ý',
	'PRUNE_SUCCESS'					=> 'Việc dọn dẹp chuyên mục đã thành công.',

	'TOPICS_PRUNED'		=> 'Những chủ đề đã dọn dẹp',
));
