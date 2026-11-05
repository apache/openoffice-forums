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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Với công cụ này, bạn có thể quản lý việc tạo chỉ mục tìm kiếm trong hệ thống. Nếu bạn chỉ sử dụng duy nhất một phương pháp tìm kiếm, bạn nên xoá tất cả chỉ mục tìm kiếm mà bạn không sử dụng đến. Sau khi thay đổi một vài thiết lập tìm kiếm ví dụ như số ký tự tối thiểu/tối đa, bạn nên tạo lại chỉ mục tìm kiếm cho những thay đổi này.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Với công cụ này, bạn có thể xác định phương pháp tìm kiếm nào sẽ được sử dụng cho việc tạo chỉ mục các bài viết và thực thi việc tìm kiếm trong hệ thống. Bạn có thể thiết lập những tuỳ chọn khác nhau có thể ảnh hưởng đến nhiều đến yêu cầu xử lý công việc của hệ thống. Một vài những thiết lập này giống nhau trong tất cả các phương pháp tìm kiếm.',

	'COMMON_WORD_THRESHOLD'					=> 'Giới hạn các từ thông dụng',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Những từ xuất hiện thường xuyên với tỉ lệ phần trăm lớn trong tất cả các bài viết sẽ được xem như là từ thông dụng. Những từ thông dụng này sẽ không được phép sử dụng trong truy vấn tìm kiếm. Nhập vào số <strong>0</strong> để vô hiệu tùy chọn này. Thiết lập này chỉ có tác dụng nếu diễn đàn bạn có nhiều hơn 100 bài viết.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Bạn có chắc chắn muốn chuyển đổi sang phương pháp tìm kiếm khác? Sau khi thay đổi phương pháp tìm kiếm, bạn sẽ phải tạo chỉ mục cho phương pháp tìm kiếm mới. Trong trường hợp bạn không chuyển đổi phương pháp tìm kiếm đang sử dụng, bạn cũng có thể xoá chỉ mục tìm kiếm cũ để tiết kiệm tài nguyên hệ thống.',
	'CONTINUE_DELETING_INDEX'				=> 'Tiếp tục tiến hành việc gỡ bỏ chỉ mục trước',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Quá trình gỡ bỏ chỉ mục đã được bắt đầu. Ngoài ra, để truy cập lại vào trang tìm kiếm bạn cần phải hoàn tất việc xoá chỉ mục trước.',
	'CONTINUE_INDEXING'						=> 'Tiếp tục tiến hành việc tạo chỉ mục trước',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Quá trình tạo chỉ mục đã được bắt đầu. Ngoài ra, để truy cập lại vào trang tìm kiếm bạn cần phải hoàn tất việc tạo chỉ mục hoặc hủy bỏ thao tác này.',
	'CREATE_INDEX'							=> 'Tạo chỉ mục',

	'DELETE_INDEX'							=> 'Xoá chỉ mục',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Đang tiến hành xoá chỉ mục',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Phương pháp tìm kiếm hiện tại đang dọn dẹp chỉ mục tìm kiếm của nó. Quá trình này có thế mất một vài phút.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'	=> 'The MySQL fulltext backend can only be used with MySQL4 and above.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'			=> 'MySQL fulltext indexes can only be used with MyISAM or InnoDB tables. MySQL 5.6.8 or later is required for fulltext indexes on InnoDB tables.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Total number of indexed posts',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'Words with at least this many characters will be indexed for searching. You or your host can only change this setting by changing the mysql configuration.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> 'Words with no more than this many characters will be indexed for searching. You or your host can only change this setting by changing the mysql configuration.',

	'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'	=> 'The PostgreSQL fulltext backend can only be used with PostgreSQL.',
	'FULLTEXT_POSTGRES_TOTAL_POSTS'			=> 'Total number of indexed posts',
	'FULLTEXT_POSTGRES_VERSION_CHECK'		=> 'PostgreSQL version',
	'FULLTEXT_POSTGRES_TS_NAME'				=> 'Text search Configuration Profile:',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN'			=> 'Minimum word length for keywords',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN'			=> 'Maximum word length for keywords',
	'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'		=> 'This search backend requires PostgreSQL version 8.3 and above.',
	'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'				=> 'The Text search configuration profile used to determine the parser and dictionary.',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'			=> 'Words with at least this many characters will be included in the query to the database.',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'			=> 'Words with no more than this many characters will be included in the query to the database.',

	'FULLTEXT_SPHINX_CONFIGURE'				=> 'Configure the following settings to generate sphinx config file',
	'FULLTEXT_SPHINX_DATA_PATH'				=> 'Path to data directory',
	'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'		=> 'It will be used to store the indexes and log files. You should create this directory outside the web accessible directories. (should have a trailing slash)',
	'FULLTEXT_SPHINX_DELTA_POSTS'			=> 'Number of posts in frequently updated delta index',
	'FULLTEXT_SPHINX_HOST'					=> 'Sphinx search daemon host',
	'FULLTEXT_SPHINX_HOST_EXPLAIN'			=> 'Host on which the sphinx search daemon (searchd) listens. Leave empty to use the default localhost',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'		=> 'Indexer memory limit',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN'	=> 'This number should at all times be lower than the RAM available on your machine. If you experience periodic performance problems this might be due to the indexer consuming too many resources. It might help to lower the amount of memory available to the indexer.',
	'FULLTEXT_SPHINX_MAIN_POSTS'			=> 'Number of posts in main index',
	'FULLTEXT_SPHINX_PORT'					=> 'Sphinx search daemon port',
	'FULLTEXT_SPHINX_PORT_EXPLAIN'			=> 'Port on which the sphinx search daemon (searchd) listens. Leave empty to use the default Sphinx API port 9312',
	'FULLTEXT_SPHINX_WRONG_DATABASE'		=> 'The sphinx search for phpBB supports MySQL and PostgreSQL only.',
	'FULLTEXT_SPHINX_CONFIG_FILE'			=> 'Sphinx config file',
	'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'	=> 'The generated content of the sphinx config file. This data needs to be pasted into the sphinx.conf which is used by sphinx search daemon. Replace the [dbuser] and [dbpassword] placeholders with your database credentials.',
	'FULLTEXT_SPHINX_NO_CONFIG_DATA'		=> 'The sphinx data directory path is not defined. Please define the path and submit to generate the config file.',
	'GENERAL_SEARCH_SETTINGS'				=> 'Thiết lập tìm kiếm tổng quát',
	'GO_TO_SEARCH_INDEX'					=> 'Chuyển đến trang tìm kiếm',

	'INDEX_STATS'							=> 'Thống kê chỉ mục tìm kiếm',
	'INDEXING_IN_PROGRESS'					=> 'Đang tiến hành lập chỉ mục',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'Phương pháp tìm kiếm hiện tại đang lập chỉ mục các bài viết trong hệ thống. Quá trình này có thể mất từ vài phút đến vài giờ tuỳ thuộc vào dung lượng cơ sở dữ liệu của bạn.',

	'LIMIT_SEARCH_LOAD'						=> 'Giới hạn thời gian hệ thống nạp trang tìm kiếm',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Nếu trong vòng một phút hệ thống nạp vượt quá giá trị được thiết lập này thì trang tìm kiếm sẽ chuyển sang chế độ ngưng hoạt động, ví dụ 1.0 gần bằng ~100% tài nguyên được sử dụng của một bộ xử lý máy chủ. Chỉ sử dụng chức năng này trên các máy chủ UNIX.',

	'MAX_SEARCH_CHARS'						=> 'Số ký tự tối đa để tạo chỉ mục tìm kiếm',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Số ký tự tối đa cho phép trong mỗi từ của bài viết được tạo chỉ mục tìm kiếm.',
	'MAX_NUM_SEARCH_KEYWORDS'				=> 'Số lượng tối đa từ khóa cho phép',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'Số lượng tối đa từ khóa cho phép cho một lần tìm kiếm. Đặt thành 0 nếu không muốn có giới hạn này.',
	'MIN_SEARCH_CHARS'						=> 'Số ký tự tối thiểu để tạo chỉ mục tìm kiếm',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Số ký tự tối thiểu cho phép trong mỗi từ của bài viết được tạo chỉ mục tìm kiếm.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Số ký tự tối thiểu cho tên tác giả',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Thành viên phải nhập vào tối thiểu số ký tự được thiết lập này khi tìm kiếm tên tác giả sử dụng dấu đại diện *. Nếu tên thành viên của tác giả ít hơn số ký tự được thiết lập này, bạn vẫn có thể thực hiện tìm kiếm những bài viết của tác giả đó bằng cách nhập vào đầy đủ tên thành viên.',

	'PROGRESS_BAR'							=> 'Thanh tiến trình',

	'SEARCH_GUEST_INTERVAL'					=> 'Thời gian chờ giữa hai lần tìm kiếm dành cho khách',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Số giây mà khách phải chờ giữa hai lần thực hiện việc tìm kiếm trong hệ thống. Nếu có một ai đó đang thực hiện việc tìm kiếm thì tất cả những người khác phải chờ đợi cho đến khi hết thời gian chờ đợi được thiết lập này.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> array(
		2	=> 'All posts up to post id %2$d have now been indexed, of which %1$d posts were within this step.<br />',
	),
	'SEARCH_INDEX_CREATE_REDIRECT_RATE'		=> array(
		2	=> 'The current rate of indexing is approximately %1$.1f posts per second.<br />Indexing in progress…',
	),
	'SEARCH_INDEX_DELETE_REDIRECT'			=> array(
		2	=> 'All posts up to post id %2$d have been removed from the search index.<br />Deleting in progress…',
	),
	'SEARCH_INDEX_CREATED'					=> 'Đã lập chỉ mục thành công cho tất cả bài viết trong cơ sở dữ liệu.',
	'SEARCH_INDEX_REMOVED'					=> 'Đã xoá thành công chỉ mục tìm kiếm cho phương pháp tìm kiếm này.',
	'SEARCH_INTERVAL'						=> 'Thời gian chờ giữa hai lần tìm kiếm dành cho thành viên',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Số giây mà thành viên phải chờ giữa hai lần thực hiện việc tìm kiếm trong hệ thống. Khoảng thời gian này được kiểm tra độc lập riêng cho mỗi thành viên.',
	'SEARCH_STORE_RESULTS'					=> 'Thời gian lưu trữ bộ nhớ đệm cho kết quả tìm kiếm',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Số giây mà những kết quả tìm kiếm đã được lưu vào bộ nhớ đệm sẽ hết hạn. Nhập vào số <strong>0</strong> nếu bạn muốn vô hiệu chức năng lưu trữ bộ nhớ đệm cho kết quả tìm kiếm.',
	'SEARCH_TYPE'							=> 'Phương pháp tìm kiếm',
	'SEARCH_TYPE_EXPLAIN'					=> 'Hệ thống phpBB cho phép bạn chọn phương pháp được sử dụng để thực hiện tìm kiếm nội dung bài viết trong hệ thống. Theo thiết lập mặc định, chức năng tìm kiếm sẽ sử dụng tìm kiếm FULLTEXT của chính hệ thống phpBB.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Bạn đã chọn chuyển đổi phương pháp tìm kiếm. Ngoài ra, để sử dụng phương pháp tìm kiếm mới này, bạn nên chắc chắn đã tạo chỉ mục cho phương pháp tìm kiếm đã chọn.',

	'TOTAL_WORDS'							=> 'Tổng số từ đã được lập chỉ mục',
	'TOTAL_MATCHES'							=> 'Tổng số từ trong bài viết đã được lập chỉ mục',

	'YES_SEARCH'							=> 'Bật công cụ tìm kiếm',
	'YES_SEARCH_EXPLAIN'					=> 'Cho phép thành viên sử dụng chức năng tìm kiếm trong hệ thống, bao gồm cả tìm kiếm thành viên.',
	'YES_SEARCH_UPDATE'						=> 'Bật cập nhật FULLTEXT',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Cập nhật các chỉ mục FULLTEXT khi gửi bài, được thay thế nếu chức năng tìm kiếm bị vô hiệu.',
));
