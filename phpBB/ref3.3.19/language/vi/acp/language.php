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
	'ACP_FILES'						=> 'Tập tin ngôn ngữ dùng trong bảng điều khiển của quản trị viên',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Bảng điều khiển này sẽ giúp bạn cài đặt hoặc gỡ bỏ các gói ngôn ngữ trong hệ thống.',

	'DELETE_LANGUAGE_CONFIRM'		=> 'Are you sure you wish to delete “%s”?',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Những gói ngôn ngữ đã cài đặt',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Thông tin chi tiết về gói ngôn ngữ đã được cập nhật thành công.',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Gói ngôn ngữ này đã được cài đặt.',
	'LANGUAGE_PACK_DELETED'				=> 'Gói ngôn ngữ <strong>%s</strong> đã được gỡ bỏ thành công. Tất cả thành viên đang sử dụng gói ngôn ngữ này sẽ được tự động thay bằng gói ngôn ngữ mặc định của hệ thống.',
	'LANGUAGE_PACK_DETAILS'				=> 'Thông tin chi tiết về gói ngôn ngữ',
	'LANGUAGE_PACK_INSTALLED'			=> 'Gói ngôn ngữ <strong>%s</strong> đã được cài đặt thành công.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'Chuỗi ngôn ngữ của các trường tùy biến đã được xao chép từ gói ngôn ngữ mặc định. Hãy thay đổi chúng nếu cần.',
	'LANGUAGE_PACK_ISO'					=> 'Mã ISO của gói ngôn ngữ',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Tên hệ thống',
	'LANGUAGE_PACK_NAME'				=> 'Tên',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Gói ngôn ngữ bạn vừa chọn không tồn tại.',
	'LANGUAGE_PACK_USED_BY'				=> 'Số người sử dụng (Bao gồm máy tìm kiếm)',
	'LANGUAGE_VARIABLE'					=> 'Biến ngôn ngữ',
	'LANG_AUTHOR'						=> 'Tác giả gói ngôn ngữ',
	'LANG_ENGLISH_NAME'					=> 'Tên tiếng Anh',
	'LANG_ISO_CODE'						=> 'Mã ISO',
	'LANG_LOCAL_NAME'					=> 'Tên hệ thống',

	'MISSING_LANG_FILES'		=> 'Tập tin ngôn ngữ bị thiếu: <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'Những biến ngôn ngữ bị thiếu',

	'NO_FILE_SELECTED'				=> 'Bạn chưa xác định một tập tin ngôn ngữ.',
	'NO_LANG_ID'					=> 'Bạn chưa xác định gói ngôn ngữ.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Bạn không thể gõ bỏ gói ngôn ngữ mặc định.<br />Nếu bạn muốn gõ bỏ gói ngôn ngữ này, trước hết hãy thay đổi ngôn ngữ mặc định của hệ thống.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Không có gói ngôn ngữ nào được gỡ bỏ',

	'THOSE_MISSING_LANG_FILES'			=> 'Những tập tin ngôn ngữ dưới đây bị thiếu trong gói ngôn ngữ <strong>%s</strong>',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Những biến ngôn ngữ dưới đây bị thiếu trong gói ngôn ngữ <strong>%s</strong>',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Những gói ngôn ngữ đã gỡ bỏ',

	'BROWSE_LANGUAGE_PACKS_DATABASE'	=> 'Browse language packs database',

));

?>