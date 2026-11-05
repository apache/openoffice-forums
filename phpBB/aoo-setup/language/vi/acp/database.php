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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Sử dụng công cụ này, bạn có thể sao lưu toàn bộ cơ sở dữ liệu trong hệ thống của mình. Bạn có thể lưu trữ bản sao lưu này trong thư mục <samp>store/</samp> trên hệ thống hoặc tải về trực tiếp. Tuỳ thuộc vào cấu hình máy chủ của bạn, bạn có thể chọn nén tập tin sao lưu này theo một số định dạng nhất định.',
	'ACP_RESTORE_EXPLAIN'	=> 'Công cụ này sẽ giúp bạn phục hồi lại cơ sở dữ liệu cho hệ thống của mình từ một tập tin đã sao lưu trước đây. Bạn có thể tải lên tập tin sao lưu từ bảng điều khiển này hoặc tự mình tải lên một thư mục trong hệ thống. Nếu máy chủ của bạn hỗ trợ, bạn có thể sử dụng tập tin sao lưu nén theo định dạng gzip hay bzip2 và nó sẽ được tự động giải nén khi hệ thống thực hiện quá trình phục hồi. <strong>CẢNH BÁO</strong> Việc phục hồi này sẽ thay thế toàn bộ dữ liệu hiện có trong hệ thống. Quá trình phục hồi có thể mất nhiều thời gian tuỳ thuộc vào dung lượng cơ sở dữ liệu của bạn, vì thế đừng thoát khỏi trang này cho đến khi công việc phục hồi hoàn tất. Những bản sao lưu được lưu trữ trong thư mục <samp>store/</samp> và cho bạn biết rằng chúng được tạo ra bởi chức năng sao lưu cơ sở dữ liệu của hệ thống phpBB. Việc phục hồi từ những bản sao lưu không phải được tạo ra bởi hệ thống phpBB có thể thành công hoặc thất bại khi tiến hành.',
	
	'BACKUP_DELETE'		=> 'Tập tin sao lưu đã được xoá thành công.',
	'BACKUP_INVALID'	=> 'Tập tin bạn vừa chọn sao lưu không hợp lệ.',
	'BACKUP_OPTIONS'	=> 'Tuỳ chọn sao lưu',
	'BACKUP_SUCCESS'	=> 'Tập tin sao lưu đã được tạo thành công.',
	'BACKUP_TYPE'		=> 'Loại tập tin sao lưu',

	'DATABASE'					=> 'Các công cụ cơ sở dữ liệu',
	'DATA_ONLY'					=> 'Chỉ sao lưu nội dung dữ liệu',
	'DELETE_BACKUP'				=> 'Xóa bản sao lưu',
	'DELETE_SELECTED_BACKUP'	=> 'Bạn có chắc chắn muốn xóa bản sao lưu vừa chọn?',
	'DESELECT_ALL'				=> 'Bỏ chọn tất cả',
	'DOWNLOAD_BACKUP'			=> 'Tải về bản sao lưu',

	'FILE_TYPE'			=> 'Loại tập tin',
	'FILE_WRITE_FAIL'	=> 'Không thể ghi dữ liệu vào thư mục lưu trữ.',
	'FULL_BACKUP'		=> 'Toàn bộ',

	'RESTORE_FAILURE'		=> 'Tập tin sao lưu có thể đã bị hỏng.',
	'RESTORE_OPTIONS'		=> 'Tuỳ chọn phục hồi',
	'RESTORE_SELECTED_BACKUP'	=> 'Bạn có chắc muốn phục hồi dữ liệu từ sao lưu đang chọn?',
	'RESTORE_SUCCESS'		=> 'Cơ sở dữ liệu của hệ thống đã được phục hồi thành công.<br /><br />Toàn bộ dữ liệu trong hệ thống sẽ quay trở về thời điểm thực hiện bản sao lưu này.',

	'SELECT_ALL'			=> 'Chọn tất cả',
	'SELECT_FILE'			=> 'Chọn một tập tin',
	'START_BACKUP'			=> 'Bắt đầu sao lưu',
	'START_RESTORE'			=> 'Bắt đầu phục hồi',
	'STORE_AND_DOWNLOAD'	=> 'Lưu trữ và tải về',
	'STORE_LOCAL'			=> 'Lưu trữ tập tin sao lưu trên hệ thống',
	'STRUCTURE_ONLY'		=> 'Chỉ sao lưu cấu trúc dữ liệu',

	'TABLE_SELECT'		=> 'Chọn bảng dữ liệu',
	'TABLE_SELECT_ERROR'=> 'Bạn phải chọn ít nhất một bảng dữ liệu.',
));
