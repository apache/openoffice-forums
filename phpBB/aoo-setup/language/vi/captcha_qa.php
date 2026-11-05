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
	'CAPTCHA_QA'				=> 'Q&amp;A CAPTCHA',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Câu hỏi xác nhận này nhằm ngăn ngừa các máy đăng ký tự động.',
	'CONFIRM_QUESTION_WRONG'	=> 'Bạn trả lời sai câu hỏi xác nhận.',
	'CONFIRM_QUESTION_MISSING'	=> 'Questions for the captcha could not be retrieved. Please contact a board administrator.',

	'QUESTION_ANSWERS'			=> 'Các câu trả lời',
	'ANSWERS_EXPLAIN'			=> 'Hãy nhập vào các trả lời hợp lệ cho câu hỏi, mỗi cái là một dòng.',
	'CONFIRM_QUESTION'			=> 'Câu hỏi',

	'ANSWER'					=> 'Trả lời',
	'EDIT_QUESTION'				=> 'Sửa câu hỏi',
	'QUESTIONS'					=> 'Các câu hỏi',
	'QUESTIONS_EXPLAIN'			=> 'Trong quá trình đăng ký, thành viên sẽ được hỏi một trong số các câu hỏi định trước này. Để sử dụng chức năng này, cần ít nhất một câu hỏi ứng với ngôn ngữ mặc định. Những câu hỏi này cần dễ dàng để mọi thành viên điều có thể trả lời, nhưng ngoài khả năng trả lời của robot tự động. Cần sử dụng một ngân hàng câu hỏi đủ lớn và thay đổi thường xuyên. Kích hoạt thiết lập nghiêm ngặt nếu câu hỏi của bạn liên quan đến các từ khóa đặc biệt, phân biệt chữ hoa và chữ thường.',
	'QUESTION_DELETED'			=> 'Đã xóa câu hỏi',
	'QUESTION_LANG'				=> 'Ngôn ngữ',
	'QUESTION_LANG_EXPLAIN'		=> 'Ngôn ngữ mà câu hỏi và các câu trả lời được tạo ra và áp dung cho ngôn ngữ đó.',
	'QUESTION_STRICT'			=> 'Kiểm tra nghiêm ngặt',
	'QUESTION_STRICT_EXPLAIN'	=> 'Nếu được kích hoạt, sẽ phân việc chữ hoa - chữ thường cũng như các khoảng ký tự trắng.',

	'QUESTION_TEXT'				=> 'Câu hỏi',
	'QUESTION_TEXT_EXPLAIN'		=> 'Tiêu đề câu hỏi hiển thị khi sẽ được hiển thị khi đăng ký thành viên.',

	'QA_ERROR_MSG'				=> 'Hãy nhập vào các trường và nhập vào ít nhất một câu trả lời.',
	'QA_LAST_QUESTION'			=> 'Bạn không thề xóa tất cả các câu hỏi khi chức năng này đang được hiệu lực.',

));
