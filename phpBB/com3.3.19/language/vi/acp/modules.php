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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Công cụ này cho phép bạn quản lý tất cả các nhóm và gói thành phần chức năng trong hệ thống. Cần lưu ý rằng bảng điều khiển của quản trị viên có cấu trúc menu đến ba cấp (Nhóm thành phần chức năng -> Nhóm thành phần chức năng -> Gói thành phần chức năng) nhờ đó mà các gói thành phần chức năng khác có cấu trúc menu hai cấp (Nhóm thành phần chức năng -> Gói thành phần chức năng) mới được giữ lại bên trong. Hãy cẩn thận vì bạn có thể làm hư hỏng toàn bộ các menu trong bảng điều khiển của quản trị viên và mất chức năng điều khiển nếu bạn vô hiệu hay xóa các gói thành phần chức năng có nhiệm vụ quản lý cho các gói thành phần chức năng khác và cả chính nó.',
	'ADD_MODULE'					=> 'Thêm gói thành phần chức năng',
	'ADD_MODULE_CONFIRM'			=> 'Bạn có chắc chắn muốn thêm vào gói thành phần chức năng với chế độ đã chọn?',
	'ADD_MODULE_TITLE'				=> 'Thêm vào gói thành phần chức năng',

	'CANNOT_REMOVE_MODULE'	=> 'Không thể gỡ bỏ gói thành phần chức năng này vì nó có chứa nhiều mục con. Hãy gở bỏ hoặc di chuyển tất cả các mục con trước khi thực hiện yêu cầu này.',
	'CATEGORY'				=> 'Nhóm thành phần chức năng',
	'CHOOSE_MODE'			=> 'Chọn chế độ thành phần chức năng',
	'CHOOSE_MODE_EXPLAIN'	=> 'Chọn những chế độ thành phần chức năng được sử dụng.',
	'CHOOSE_MODULE'			=> 'Chọn gói thành phần chức năng',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Chọn tập tin được thực thi bởi gói thành phần chức năng này.',
	'CREATE_MODULE'			=> 'Tạo gói thành phần chức năng mới',

	'DEACTIVATED_MODULE'	=> 'Gói thành phần chức năng đã ngưng kích hoạt',
	'DELETE_MODULE'			=> 'Xoá gói thành phần chức năng',
	'DELETE_MODULE_CONFIRM'	=> 'Bạn có chắc chắn muốn gỡ bỏ gói thành phần chức năng này?',

	'EDIT_MODULE'			=> 'Sửa gói thành phần chức năng',
	'EDIT_MODULE_EXPLAIN'	=> 'Bạn có thể thay đổi lại thiết lập của gói thành phần chức năng tại đây.',

	'HIDDEN_MODULE'			=> 'Gói thành phần chức năng ẩn',

	'MODULE'					=> 'Gói thành phần chức năng',
	'MODULE_ADDED'				=> 'Gói thành phần chức năng đã được tạo thành công.',
	'MODULE_DELETED'			=> 'Gói thành phần chức năng đã được gỡ bỏ thành công.',
	'MODULE_DISPLAYED'			=> 'Gói thành phần chức năng đã hiển thị',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Nếu bạn không muốn hiển thị gói thành phần chức năng này nhưng vẫn muốn sử dụng chức năng của nó, hãy chọn không hiển thị gói thành phần chức năng tại đây.',
	'MODULE_EDITED'				=> 'Gói thành phần chức năng đã được sửa thành công.',
	'MODULE_ENABLED'			=> 'Gói thành phần chức năng đã kích hoạt',
	'MODULE_LANGNAME'			=> 'Tên ngôn ngữ gói thành phần chức năng',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Nhập vào tên ngôn ngữ mà gói thành phần chức năng sẽ được hiển thị. Sử dụng tên hằng ngôn ngữ để nhập vào nếu tên này đã được xác trong tập tin ngôn ngữ.',
	'MODULE_TYPE'				=> 'Loại thành phần chức năng',

	'NO_CATEGORY_TO_MODULE'	=> 'Không thể thay đổi nhóm thành phần chức năng trở thành gói thành phần chức năng. Hãy gở bỏ hoặc di chuyển tất cả các mục con trước khi thực hiện yêu cầu này.',
	'NO_MODULE'				=> 'Không tìm thấy gói thành phần chức năng.',
	'NO_MODULE_ID'			=> 'Không có gói thành phần chức năng nào được xác định.',
	'NO_MODULE_LANGNAME'	=> 'Không có tên ngôn ngữ gói thành phần chức năng nào được xác định.',
	'NO_PARENT'				=> 'Không có thư mục chính',

	'PARENT'				=> 'Thư mục chính',
	'PARENT_NO_EXIST'		=> 'Thư mục chính không tồn tại.',

	'SELECT_MODULE'			=> 'Chọn một gói thành phần chức năng',
));
