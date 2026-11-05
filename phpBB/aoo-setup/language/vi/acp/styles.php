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
	'ACP_STYLES_EXPLAIN'	=> 'Với công cụ này, bạn có thể quản lý tất cả các giao diện có sẵn trong hệ thống. Một gói giao diện gồm có một khuôn mẫu, kiểu dáng và gói hình ảnh giao diện được đính kèm bên trong. Bạn có thể thay đổi những giao diện hiện có, xoá, ngưng kích hoạt, kích hoạt lại, tạo và nhập vào những gói giao diện mới. Bạn cũng có thể sử dụng chức năng xem trước để xem giao diện được hiển thị như thế nào trong hệ thống. Giao diện mặc định hiện tại của hệ thống được đánh dấu * để phân biệt. Công cụ này cũng liệt kê có bao nhiêu thành viên sử dụng mỗi giao diện, lưu ý thiết lập thay thế toàn bộ giao diện của thành viên không phải nằm trong phần này.',

	'CANNOT_BE_INSTALLED'			=> 'Cannot be installed',
	'CONFIRM_UNINSTALL_STYLES'		=> 'Are you sure you wish to uninstall selected styles?',
	'COPYRIGHT'						=> 'Bản quyền',
	
	'DEACTIVATE_DEFAULT'		=> 'Bạn không thể ngưng kích hoạt giao diện mặc định.',
	'DELETE_FROM_FS'			=> 'Xoá từ hệ thống tập tin giao diện',
	'DELETE_STYLE_FILES_FAILED'	=> 'Error deleting files for style "%s".',
	'DELETE_STYLE_FILES_SUCCESS'	=> 'Files for style "%s" have been deleted.',	
	'DETAILS'					=> 'Thông tin chi tiết',
	'INHERITING_FROM'			=> 'Kế thừa từ',
	'INSTALL_STYLE'				=> 'Cài đặt giao diện',
	'INSTALL_STYLES'			=> 'Cài đặt giao diện',
	'INSTALL_STYLES_EXPLAIN'		=> 'Bạn có thể cài đặt giao diện mới tại đây và những thành phần đi kèm giao diện nếu thấy cần thiết. Nếu bạn đã cài đặt sẵn các thành phần giao diện này rồi thì chúng sẽ bị thay thế bởi các thành phần giao diện mới. Một vài giao diện yêu cầu các thành phần giao diện đi kèm phải được cài đặt. Nếu bạn đang cài đặt một giao diện và không có thành phần giao diện nào bắt buộc phải cài đặt thì bạn sẽ được thông báo.',
	'INVALID_STYLE_ID'			=> 'Invalid style ID.',

	'NO_MATCHING_STYLES_FOUND'	=> 'No styles match your query.',
	'NO_UNINSTALLED_STYLE'		=> 'No uninstalled styles detected.',

	'PURGED_CACHE'				=> 'Cache was purged.',

	'REQUIRES_STYLE'			=> 'This style requires the style "%s" to be installed.',
	'STYLE_ACTIVATE'			=> 'Kích hoạt',
	'STYLE_ACTIVE'				=> 'Đang sử dụng',
	'STYLE_DEACTIVATE'			=> 'Ngưng kích hoạt',
	'STYLE_DEFAULT'				=> 'Chọn làm giao diện mặc định',
	'STYLE_DEFAULT_CHANGE_INACTIVE'	=> 'You must activate style before making it default style.',
	'STYLE_ERR_INVALID_PARENT'	=> 'Invalid parent style.',
	'STYLE_ERR_NAME_EXIST'		=> 'A style with that name already exists.',
	'STYLE_ERR_STYLE_NAME'		=> 'You must supply a name for this style.',
	'STYLE_INSTALLED'			=> 'Style "%s" has been installed.',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> 'Return to installed styles list',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> 'Install more styles',
	'STYLE_NAME'				=> 'Tên giao diện',
	'STYLE_NAME_RESERVED'		=> 'Style "%s" can not be installed, because the name is reserved.',
	'STYLE_NOT_INSTALLED'		=> 'Style "%s" was not installed.',
	'STYLE_PATH'				=> 'Style path',
	'STYLE_UNINSTALL'			=> 'Uninstall',
	'STYLE_UNINSTALL_DEPENDENT'	=> 'Style "%s" cannot be uninstalled because it has one or more child styles.',
	'STYLE_UNINSTALLED'			=> 'Style "%s" uninstalled successfully.',
	'STYLE_USED_BY'				=> 'Used by (including robots)',
	'STYLE_VERSION'				=> 'Style version',

	'UNINSTALL_DEFAULT'		=> 'You cannot uninstall the default style.',

	'BROWSE_STYLES_DATABASE'	=> 'Browse styles database',
));
