<?php
/**
 *
 * install [Japanese]
 *
 * @package language
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

// Common installer pages
$lang = array_merge($lang, array(
	'INSTALL_PANEL'	=> 'インストールパネル',
	'SELECT_LANG'	=> '言語の選択',

	'STAGE_INSTALL'	=> 'phpBBのインストール',

	// Introduction page
	'INTRODUCTION_TITLE'	=> 'はじめに',
	'INTRODUCTION_BODY'		=> 'phpBB3にようこそ!<br /><br />phpBB®は、世界で最も広く使用されているオープンソースの掲示板ソリューションです。 phpBB3は、2000年に開始されたパッケージラインの最新作です。その前身と同様に、phpBB3は機能が豊富で使いやすく、phpBBチームによって完全にサポートされています。 phpBB3は、phpBB2で人気を得た機能を大幅に向上させ、以前のバージョンにはなかった一般的に要求される機能を追加しています。それがあなたの期待以上であることを願っています。<br /><br />このインストールシステムは、phpBB3のインストール、過去のリリースからのphpBB3の最新バージョンへの更新、および異なるディスカッションボードシステム（phpBB2を含む）からphpBB3への変換をガイドします。詳細については、<a href="%1$s">インストールガイド</a>を読むことをお勧めします。<br /><br />phpBB3ライセンスを読むか、サポートとそのスタンスの取得について学習するには、サイドメニューからそれぞれの項目を選択してください。続行するには、上部の適切なタブを選択してください。',

	// Support page
	'SUPPORT_TITLE'		=> 'サポート',
	'SUPPORT_BODY'		=> '現在の安定版である phpBB3 のフルサポートを無料で提供します。サポートの対象は以下のとおりです:</p><ul><li>インストール</li><li>設定</li><li>技術的な質問</li><li>ソフトウェアの潜在的なバグに関する問題</li><li>Release Candidate (RC) バージョンから最新の安定バージョンへの更新</li><li>phpBB 2.0.x から phpBB3 への変換</li><li>他のディスカッションボードソフトウェアから phpBB3 への変換（<a href="https://www.phpbb.com/community/viewforum.php?f=486">Convertors Forum</a> を参照してください）</li></ul><p>まだベータ版の phpBB3 を使用しているユーザーには、最新版のインストールに置き換えることをお勧めします。</p><h2>拡張機能 / スタイル</h2><p>拡張機能に関する問題は、適切な <a href="https://www.phpbb.com/community/viewforum.php?f=451">Extensions Forum</a> に投稿してください。<br />スタイル、テンプレート、テーマに関する問題は、適切な <a href="https://www.phpbb.com/community/viewforum.php?f=471">Styles Forum</a> に投稿してください。<br /><br />特定のパッケージに関する質問の場合は、そのパッケージ専用のトピックに直接投稿してください。</p><h2>サポートを受ける</h2><p><a href="https://www.phpbb.com/support/">サポートセクション</a><br /><a href="https://www.phpbb.com/support/docs/en/3.3/ug/quickstart/">クイックスタートガイド</a><br /><br />最新のニュースやリリース情報を入手するには、<a href="https://www.x.com/phpbb/">X</a> と <a href="https://www.facebook.com/phpbb/">Facebook</a> でフォローしてください。<br /><br />',

	// License
	'LICENSE_TITLE'		=> 'General Public License',

	// Install page
	'INSTALL_INTRO'			=> 'phpBB3 のインストールへようこそ',
	'INSTALL_INTRO_BODY'	=> 'ここでは phpBB3 のインストールを行うことができます。</p><p>インストールするにはデータベースへ接続するための情報が必要です。もしデータベースへ接続するための情報が分からない場合、サーバ管理者にお問い合わせください。データベースに接続できないとインストールを先へ進めることはできません。必要な情報は次の通りです:</p>

	<ul>
		<li>データベースの種類 - サーバがサポートしているデータベースソフトウェアの種類です</li>
		<li>データベースサーバのホスト名 または DSN - データベースサーバのアドレスです</li>
		<li>データベースサーバのポート番号 - データベースサーバが使用しているポート番号です （多くの場合、入力する必要はありません）</li>
		<li>データベースの名前 - サーバ上であなたが使用するデータベースの名前です</li>
		<li>データベースのユーザー名とパスワード - データベースにアクセスするためのログイン情報です</li>
	</ul>

	<p><strong>注意:</strong> もしデータベースの種類として SQLite を選択した場合、“データベースサーバのホスト名 または DSN” としてデータベースファイルへのフルパスを入力してください。さらにユーザー名とパスワードは空白のままにしてください。セキュリティ上の理由から、データベースファイルをインターネットからアクセス可能な場所に置くべきではありません。</p>

	<p>phpBB3 がサポートするデータベース：</p>
	<ul>
		<li>MySQL 4.1.3 or above (MySQLi が必要です)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 以上 (直接または ODBC 経由)</li>
		<li>MS SQL Server 2005 以上 (native)</li>
		<li>Oracle</li>
	</ul>

	<p>データベースの種類を選択する際、これらの中でサーバがサポートしているデータベースのみ表示されます',

	'ACP_LINK'	=> '<a href="%1$s">ACP画面に進む</a>',

	'INSTALL_PHPBB_INSTALLED'		=> 'phpBB はすでにインストールされています',
	'INSTALL_PHPBB_NOT_INSTALLED'	=> 'phpBB はまだインストールされていません',
	'INSTALL_RESTART'				=> 'インストールを再開する',
));

// Requirements translation
$lang = array_merge($lang, array(
	// Filesystem requirements
	'FILE_NOT_EXISTS'				=> 'ファイルが存在しません',
	'FILE_NOT_EXISTS_EXPLAIN'			=> 'phpBB をインストール可能にするためには、ファイル %1$s が存在している必要があります',
	'FILE_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'より良いユーザ体験を提供するためにファイル %1$s が存在していることを推奨します',
	'FILE_NOT_WRITABLE'				=> 'ファイルが書き込み可能ではありません',
	'FILE_NOT_WRITABLE_EXPLAIN'			=> 'phpBB をインストール可能にするためには、ファイル %1$s が書き込み可能である必要があります',
	'FILE_NOT_WRITABLE_EXPLAIN_OPTIONAL'		=> 'より良いユーザ体験を提供するためにファイル %1$s が書き込み可能であることを推奨します',

	'DIRECTORY_NOT_EXISTS'				=> 'ディレクトリが存在しません',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'			=> 'phpBB をインストール可能にするためには、ディレクトリ %1$s が存在している必要があります',
	'DIRECTORY_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'より良いユーザ体験を提供するためにディレクトリ %1$s が存在していることを推奨します',
	'DIRECTORY_NOT_WRITABLE'			=> 'ディレクトリが書き込み可能ではありません',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'		=> 'phpBB をインストール可能にするためには、ディレクトリ %1$s が書き込み可能である必要があります',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'より良いユーザ体験を提供するためにディレクトリ %1$s が書き込み可能であることを推奨します',

	// Server requirements
	'PHP_VERSION_REQD'				=> 'PHPバージョン',
	'PHP_VERSION_REQD_EXPLAIN'			=> 'phpBB は PHP バージョン 7.2.0 以上が必要です',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP関数 getimagesize() を利用できます',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'		=> '必須 - phpBB を正常に機能させるには関数 getimagesize が利用可能である必要があります。',
	'PCRE_UTF_SUPPORT'				=> 'PCRE関数の UTF-8 文字列のサポート',
	'PCRE_UTF_SUPPORT_EXPLAIN'			=> 'もし PCRE（Perl互換正規表現）関数が UTF-8 によるパターン文字列を取り扱えない場合、 phpBB3 は動作しません。PHP の PCRE拡張モジュール のバージョンが古い場合、この症状が起こります。',
	'PHP_JSON_SUPPORT'				=> 'PHP JSON のサポート',
	'PHP_JSON_SUPPORT_EXPLAIN'			=> 'phpBB が正しく機能するためには、PHP JSON 拡張が利用可能である必要があります',
	'PHP_MBSTRING_SUPPORT'				=> 'PHP mbstring のサポート',
	'PHP_MBSTRING_SUPPORT_EXPLAIN'		=> 'phpBB が正しく機能するためには、PHP の mbstring 拡張が利用可能である必要があります',
	'PHP_XML_SUPPORT'				=> 'PHP XML/DOM のサポート',
	'PHP_XML_SUPPORT_EXPLAIN'			=> 'phpBBが正しく機能するためには、PHP XML/DOM 拡張が利用可能である必要があります。',
	'PHP_SUPPORTED_DB'				=> 'データベースのサポート',
	'PHP_SUPPORTED_DB_EXPLAIN'			=> '必須 - ここで挙げられているデータベースの内、少なくとも１つは PHP 拡張モジュールとして利用できる必要があります。もし PHP のデータベースモジュールを１つも利用できない場合、サーバ管理者にデータベースの使用を相談してください。',

	'RETEST_REQUIREMENTS'	=> '必要条件の再診断',

	'STAGE_REQUIREMENTS'	=> 'インストールの診断',
));

// General error messages
$lang = array_merge($lang, array(
	'INST_ERR_MISSING_DATA'		=> 'このブロックのフィールドは全て入力する必要があります',

	'TIMEOUT_DETECTED_TITLE'	=> 'インストーラーがタイムアウトを検出しました',
	'TIMEOUT_DETECTED_MESSAGE'	=> 'インストーラーがタイムアウトを検出しました。ページを更新しようとすると、データが破損する可能性があります。 タイムアウト設定を増やすか、CLIを使用することをお勧めします。',
));

// Data obtaining translations
$lang = array_merge($lang, array(
	'STAGE_OBTAIN_DATA'	=> 'インストールデータの設定',

	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR'	=> '管理人設定',

	// Form labels
	'ADMIN_CONFIG'			=> '管理人設定',
	'ADMIN_PASSWORD'		=> '管理人のパスワード',
	'ADMIN_PASSWORD_CONFIRM'	=> '管理人のパスワード（確認）',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'パスワードは 6 字以上 30 字以下にする必要があります',
	'ADMIN_USERNAME'		=> '管理人のユーザー名',
	'ADMIN_USERNAME_EXPLAIN'	=> 'ユーザー名は 3 字以上 20 字以下にする必要があります',

	// Errors
	'INST_ERR_EMAIL_INVALID'	=> '入力した メールアドレス は無効です',
	'INST_ERR_PASSWORD_MISMATCH'	=> '入力した パスワード が不一致です',
	'INST_ERR_PASSWORD_TOO_LONG'	=> '入力した パスワード が長すぎます。３０ 字以下にしてください。',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> '入力した パスワード が短すぎます。６ 字以上にしてください。',
	'INST_ERR_USER_TOO_LONG'	=> '入力した ユーザー名 が長すぎます。２０ 字以下にしてください。',
	'INST_ERR_USER_TOO_SHORT'	=> '入力した ユーザー名 が短すぎます。３ 字以上にしてください。',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'		=> '掲示板の設定',
	'DEFAULT_LANGUAGE'	=> '初期状態の言語',
	'BOARD_NAME'		=> '掲示板のタイトル',
	'BOARD_DESCRIPTION'	=> '掲示板の短い説明文',

	//
	// Database data
	//
	'STAGE_DATABASE'	=> 'データベース設定',

	// Form labels
	'DB_CONFIG'				=> 'データベースの環境設定',
	'DBMS'					=> 'データベースの種類',
	'DB_HOST'				=> 'データベースサーバのホスト名 または DSN',
	'DB_HOST_EXPLAIN'		=> 'DSN とはデータソース名のことです。 ODBC 経由でデータベース接続を行っている場合は DSN を入力する必要があります。 PostgreSQL の場合、UNIXドメインソケット 経由でローカルホストに接続するには localhost を、 TCP 経由で接続するには 127.0.0.1 を入力してください。SQLite の場合、データベースファイルへのフルパスを入力してください。',
	'DB_PORT'				=> 'データベースサーバのポート番号',
	'DB_PORT_EXPLAIN'		=> '非標準ポートを使用している場合のみ入力してください',
	'DB_PASSWORD'			=> 'データベースのパスワード',
	'DB_NAME'			=> 'データベースの名前',
	'DB_USERNAME'			=> 'データベースのユーザー名',
	'DATABASE_VERSION'		=> 'データベースバージョン',
	'TABLE_PREFIX'			=> 'データベーステーブルの接頭辞',
	'TABLE_PREFIX_EXPLAIN'	=> '接頭辞はラテン系文字で始まり、以降はラテン系文字・数字・アンダースコアのみにする必要があります',

	// Database options
	'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Server 2000+ via ODBC',
	'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Server 2005+ [ Native ]',
	'DB_OPTION_MYSQLI'		=> 'MySQL with MySQLi Extension',
	'DB_OPTION_ORACLE'		=> 'Oracle',
	'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
	'DB_OPTION_SQLITE3'		=> 'SQLite 3',

	// Errors
	'INST_ERR_DB'				=> 'データベースのインストールエラーです',
	'INST_ERR_NO_DB'			=> '選択したデータベースを扱うために必要な PHP 拡張モジュールの読み込みに失敗しました',
	'INST_ERR_DB_INVALID_PREFIX'	=> '入力したテーブル接頭辞が不正です。ラテン系文字で始まり、以降はラテン系文字・数字・アンダースコアのみにする必要があります。',
	'INST_ERR_PREFIX_TOO_LONG'		=> '入力した テーブル接頭辞 が長すぎます。%d 字以下にしてください。',
	'INST_ERR_DB_NO_NAME'			=> 'データベースの名前が入力されていません',
	'INST_ERR_DB_FORUM_PATH'		=> 'データベースファイルへのパスが掲示板ディレクトリツリー内に指定されています。セキュリティ上の理由から、データベースファイルをインターネットからアクセス可能な場所に格納すべきではありません。',
	'INST_ERR_DB_CONNECT'			=> 'データベースに接続できませんでした。下のエラーメッセージをご確認ください。',
	'INST_ERR_DB_NO_WRITABLE'		=> 'データベースとディレクトリの両方が書き込み可能である必要があります',
	'INST_ERR_DB_NO_ERROR'			=> 'このエラーに対するメッセージは用意されていません',
	'INST_ERR_PREFIX'			=> '入力した テーブル接頭辞 を持つテーブルが既にデータベース内に存在します。接頭辞を変更してください。',
	'INST_ERR_DB_NO_MYSQLI'			=> 'サーバにインストールされている MySQL のバージョンでは “MySQL with MySQLi Extension” をご利用になれません。かわりにオプション “MySQL” を選択してください。',
	'INST_ERR_DB_NO_SQLITE3'		=> 'SQLite エクステンションのバージョンが古くなっています。3.6.15以上にアップグレードする必要があります。',
	'INST_ERR_DB_NO_ORACLE'			=> 'サーバにインストールされている Oracle のバージョンでは <var>NLS_CHARACTERSET</var> パラメータを <var>UTF8</var> に設定しておく必要があります。パラメータを変更するかバージョンを 9.2+ にアップグレードしてください。',
	'INST_ERR_DB_NO_POSTGRES'		=> '選択したデータベースの文字エンコーディングが <var>UNICODE</var> または <var>UTF8</var> ではありません。文字エンコーディングを <var>UNICODE</var> または <var>UTF8</var> にしてもう一度データベースを作成してください。',
	'INST_SCHEMA_FILE_NOT_WRITABLE'		=> 'スキーマファイルが書き込み可能ではありません',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> 'メール環境の設定',

	// Package info
	'PACKAGE_VERSION'					=> 'インストールされているパッケージのバージョン',
	'UPDATE_INCOMPLETE'				=> 'phpBB が正しくインストール更新されませんでした',
	'UPDATE_INCOMPLETE_MORE'		=> 'このエラーに対応するために下記の情報をお読みください',
	'UPDATE_INCOMPLETE_EXPLAIN'		=> '<h1>アップデートが完了していません</h1>

		<p>あなたが最後に行った phpBB 更新インストールはまだ完了していないようです。<a href="%1$s" title="%1$s">database updater</a>にアクセスして、<em>Update database only</em>をクリック選択して<strong>Submit</strong>を押してください。データベースのアップデート成功の後は"install" ディレクトリを必ず削除してください。</p>',

	//
	// Server data
	//
	// Form labels
	'UPGRADE_INSTRUCTIONS'		=> '新しいバージョン <strong>%1$s</strong> がリリースされています。バージョンの詳細とアップグレード方法に関しては <a href="%2$s" title="%2$s"><strong>the release announcement</strong></a> をご覧ください。',
	'SERVER_CONFIG'			=> 'サーバ環境設定',
	'SCRIPT_PATH'			=> 'スクリプトパス',
	'SCRIPT_PATH_EXPLAIN'		=> 'phpBB3 ルートディレクトリへのパスです。ドメインから見た相対パスで指定する必要があります。例: <samp>/phpBB3</samp>',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Thanks, The Management',
	'CONFIG_SITE_DESC'				=> 'A short text to describe your forum',
	'CONFIG_SITENAME'				=> 'yourdomain.com',

	'DEFAULT_INSTALL_POST'			=> '<t>この記事は phpBB3 のインストールがうまくいってるかどうかを確認するために投稿されたテスト記事です。この記事が表示されるということは phpBB3 がきちんと動作している証拠です。この記事は削除してかまいません。この最初のカテゴリとフォーラムには特別グループ (Admin、ボット、グローバルモデレータ、ゲスト、登録ユーザー、COPPA-登録ユーザー) に対して適切なパーミッションが与えられています。このカテゴリとフォーラムを削除して別の新しいカテゴリとフォーラムを作成する場合、すべてのユーザーとグループに適切なフォーラムパーミッションを割り当てることを忘れないでください。phpBB3 初心者の方には、このカテゴリとフォーラムを削除せずに名前だけを変更し、新しく作成したカテゴリとフォーラムに対してはこのカテゴリとフォーラムのパーミッションをそのままコピーすることをお勧めします。パーミッションの割り当てに慣れるに従って、フォーラムパーミッションを自分の好みにカスタマイズしていけるようになるでしょう。</t>',

	'FORUMS_FIRST_CATEGORY'			=> 'はじめてのカテゴリ',
	'FORUMS_TEST_FORUM_DESC'		=> 'これはテストフォーラムです。',
	'FORUMS_TEST_FORUM_TITLE'		=> 'テストフォーラム その壱',

	'RANKS_SITE_ADMIN_TITLE'		=> '管理人',
	'REPORT_WAREZ'					=> 'この投稿記事には 海賊版ソフト販売へのリンク が含まれています',
	'REPORT_SPAM'					=> 'この投稿記事には 販売広告へのリンク が含まれています',
	'REPORT_OFF_TOPIC'				=> 'この投稿記事は トピックの話題から外れています',
	'REPORT_OTHER'					=> 'その他。詳細に記述します',

	'SMILIES_ARROW'					=> 'Arrow',
	'SMILIES_CONFUSED'				=> 'Confused',
	'SMILIES_COOL'					=> 'Cool',
	'SMILIES_CRYING'				=> 'Crying or Very Sad',
	'SMILIES_EMARRASSED'			=> 'Embarrassed',
	'SMILIES_EVIL'					=> 'Evil or Very Mad',
	'SMILIES_EXCLAMATION'			=> 'Exclamation',
	'SMILIES_GEEK'					=> 'Geek',
	'SMILIES_IDEA'					=> 'Idea',
	'SMILIES_LAUGHING'				=> 'Laughing',
	'SMILIES_MAD'					=> 'Mad',
	'SMILIES_MR_GREEN'				=> 'Mr. Green',
	'SMILIES_NEUTRAL'				=> 'Neutral',
	'SMILIES_QUESTION'				=> 'Question',
	'SMILIES_RAZZ'					=> 'Razz',
	'SMILIES_ROLLING_EYES'			=> 'Rolling Eyes',
	'SMILIES_SAD'					=> 'Sad',
	'SMILIES_SHOCKED'				=> 'Shocked',
	'SMILIES_SMILE'					=> 'Smile',
	'SMILIES_SURPRISED'				=> 'Surprised',
	'SMILIES_TWISTED_EVIL'			=> 'Twisted Evil',
	'SMILIES_UBER_GEEK'				=> 'Uber Geek',
	'SMILIES_VERY_HAPPY'			=> 'Very Happy',
	'SMILIES_WINK'					=> 'Wink',

	'TOPICS_TOPIC_TITLE'			=> 'phpBB3 へようこそ',
));

// Common navigation items' translation
$lang = array_merge($lang, array(
	'MENU_OVERVIEW'		=> '概要',
	'MENU_INTRO'		=> 'はじめに',
	'MENU_LICENSE'		=> 'ライセンス',
	'MENU_SUPPORT'		=> 'サポート',
));

// Task names
$lang = array_merge($lang, array(
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'	=> '環境設定ファイルを作成中',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'		=> '初期設定を追加中',
	'TASK_ADD_DEFAULT_DATA'			=> 'データベースに初期設定を追加中',
	'TASK_CREATE_DATABASE_SCHEMA_FILE'	=> 'データベーススキーマファイルを作成中',
	'TASK_SETUP_DATABASE'			=> 'データベースを設定中',
	'TASK_CREATE_TABLES'			=> 'テーブルを作成中',

	// Install data
	'TASK_ADD_AI_CRAWLERS'		=> 'AI クローラーを登録中',
	'TASK_ADD_BOTS'				=> 'ボットを登録中',
	'TASK_ADD_LANGUAGES'		=> '利用可能な言語パックをインストール中',
	'TASK_ADD_MODULES'			=> 'モジュールをインストール中',
	'TASK_CREATE_SEARCH_INDEX'	=> '検索インデックスを作成中',

	// Install finish tasks
	'TASK_INSTALL_EXTENSIONS'	=> 'パッケージ化された拡張機能をインストール中',
	'TASK_NOTIFY_USER'			=> '通知メールを送信中',
	'TASK_POPULATE_MIGRATIONS'	=> 'マイグレーションを格納中',

	// Installer general progress messages
	'INSTALLER_FINISHED'	=> 'インストールが無事終了しました',
));

// Installer's general messages
$lang = array_merge($lang, array(
	'MODULE_NOT_FOUND'				=> 'モジュールが見つかりません',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> 'サービス %s が定義されていないため、モジュールが見つかりませんでした。',

	'TASK_NOT_FOUND'				=> 'タスクが見つかりません',
	'TASK_NOT_FOUND_DESCRIPTION'	=> 'サービス %s が定義されていないため、タスクが見つかりませんでした。',

	'SKIP_MODULE'	=> 'モジュール “%s” をスキップする',
	'SKIP_TASK'		=> 'タスク “%s” をスキップする',

	'TASK_SERVICE_INSTALLER_MISSING'	=> 'すべてのインストーラータスクサービスは “インストーラー” で開始する必要があります',
	'TASK_CLASS_NOT_FOUND'				=> 'インストーラータスクサービスの定義が無効です。 指定されたサービス名 “%1$s” 、予想されるクラス名前空間は “%2$s” です。 詳細については、task_interfaceのドキュメントを参照してください。',

	'INSTALLER_CONFIG_NOT_WRITABLE'	=> '環境設定ファイルが書き込み可能ではありません',
));

// CLI messages
$lang = array_merge($lang, array(
	'CLI_INSTALL_BOARD'				=> 'phpBBのインストール',
	'CLI_UPDATE_BOARD'				=> 'phpBBのアップデート',
	'CLI_INSTALL_SHOW_CONFIG'		=> '使用される構成を表示する',
	'CLI_INSTALL_VALIDATE_CONFIG'	=> '設定ファイルを検証する',
	'CLI_CONFIG_FILE'				=> '使用する設定ファイル',
	'MISSING_FILE'					=> 'ファイル %1$s にアクセスできません',
	'MISSING_DATA'					=> '構成ファイルにデータが欠落しているか、無効な設定が含まれている可能性があります',
	'INVALID_YAML_FILE'				=> 'YAMLファイル %1$s を解析できませんでした',
	'CONFIGURATION_VALID'			=> '構成ファイルは有効です',
));

// Common updater messages
$lang = array_merge($lang, array(
	'UPDATE_INSTALLATION'			=> 'phpBB3 のアップデート',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'ここでは phpBB3 のアップデートを行うことができます。<br />アップデートプロセスの中には phpBB3 の各ファイルについてアップデートすべきファイルかどうかをチェックするものもあります。アップデートを実行する前にこれらアップデートされるファイルの差分コードを確認できます。<br /><br />ファイルアップデートは２つの方法から選択できます。</p><h2>手動アップデート</h2><p>このアップデート方法では、MOD などでハックされているファイルについて、ハック部分を損なうことなくアップデート差分を追加したファイルを作成し、そのパッケージをダウンロードすることが可能です。このパッケージをダウンロード後、パッケージ内ファイルを phpBB3 ディレクトリ下の正しい位置にアップロードしてください。アップロードが完了したら “ファイル再チェック” を実行して正しい位置にファイルがアップロードされたかどうかを確認してください。</p><h2>FTP による高度なアップデート</h2><p>このアップデート方法ではアップデートは自動で行われます。この方法を使用するには FTPサーバ へのログイン情報が必要です。高度なアップデートが完了するとファイル再チェックが自動的に始まり、ファイルがきちんとアップデートされたかどうかを確認できます。<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>リリースのお知らせ</h1>

		<p>アップデートを進める前に、最新バージョンのリリースのお知らせをお読みください。有用な情報が含まれている場合があります。ダウンロードリンク一式と変更履歴も掲載されています。</p>

		<br />

		<h1>フルパッケージでアップデートする方法</h1>

		<p>推奨されるアップデート方法はフルパッケージを使う方法です。phpBB のコアファイルを変更している場合は、その変更を失わないために高度なアップデートパッケージを使うとよいでしょう。INSTALL.html に記載されている他の方法でアップデートすることもできます。フルパッケージで phpBB3 をアップデートする手順は次のとおりです:</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li><strong class="error">掲示板の全ファイルとデータベースをバックアップしてください。</strong></li>
			<li><a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com のダウンロードページ</a> から最新の "Full Package" アーカイブをダウンロードします。</li>
			<li>アーカイブを解凍します。</li>
			<li><code class="inline">config.php</code> ファイルと、<code class="inline">/images</code>・<code class="inline">/store</code>・<code class="inline">/files</code> の各フォルダを <em>パッケージ側から</em> 削除します（サイト側ではありません）。</li>
			<li>管理者用コントロールパネルの掲示板設定を開き、既定のスタイルが prosilver になっていることを確認します。違う場合は prosilver に変更します。</li>
			<li>サーバ上の掲示板のルートフォルダから <code class="inline">/vendor</code> と <code class="inline">/cache</code> フォルダを削除します。</li>
			<li>FTP または SSH で、残ったファイルとフォルダ（つまり phpBB3 フォルダの中身）をサーバ上の掲示板のルートフォルダへアップロードし、既存のファイルを上書きします。（注意: 新しい phpBB3 の中身をアップロードする際、<code class="inline">/ext</code> フォルダ内の拡張機能を消してしまわないよう気をつけてください。）</li>
			<li><strong><a href="%1$s" title="%1$s">ブラウザで install フォルダを開き、アップデートを開始してください</a>。</strong></li>
			<li>画面の手順に従ってデータベースを更新し、完了するまで実行します。</li>
			<li>FTP または SSH で、掲示板のルートから <code class="inline">/install</code> フォルダを削除します。<br><br></li>
		</ol>

		<p>これで、ユーザーと記事をすべて引き継いだ最新の掲示板になりました。続けて次の作業を行ってください:</p>
		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>言語パックを更新する</li>
			<li>スタイルを更新する<br><br></li>
		</ul>

		<h1>高度なアップデートパッケージでアップデートする方法</h1>

		<p>高度なアップデートパッケージは、phpBB のコアファイルを変更している場合の上級者向けの方法としてのみ推奨されます。INSTALL.html に記載されている方法でアップデートすることもできます。高度なアップデートパッケージで phpBB3 をアップデートする手順は次のとおりです:</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li><a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com のダウンロードページ</a> から "Advanced Update Package" アーカイブをダウンロードします。</li>
			<li>アーカイブを解凍します。</li>
			<li>解凍した "install" と "vendor" フォルダをそのまま phpBB のルートディレクトリ（config.php が置かれている場所）へアップロードします。<br><br></li>
		</ol>

		<p>アップロードすると install ディレクトリが存在する状態になるため、一般ユーザーから見て掲示板はオフラインになります。<br /><br />
		<strong><a href="%1$s" title="%1$s">ブラウザで install フォルダを開き、アップデートを開始してください</a>。</strong><br />
		<br />
		この後はアップデート手順の案内に従ってください。完了するとその旨が表示されます。
		</p>
	',
));

// Updater forms
$lang = array_merge($lang, array(
	// Updater types
	'UPDATE_TYPE'			=> 'アップデートの種類',

	'UPDATE_TYPE_ALL'		=> 'ファイルシステムとデータベースの更新',
	'UPDATE_TYPE_DB_ONLY'	=> 'データベースのみ更新',

	// File updater methods
	'UPDATE_FILE_METHOD_TITLE'		=> 'ファイル更新方法',

	'UPDATE_FILE_METHOD'			=> 'ファイル更新の方法',
	'UPDATE_FILE_METHOD_DOWNLOAD'		=> '修正ファイルをアーカイブでダウンロード',
	'UPDATE_FILE_METHOD_FTP'		=> 'FTP (自動) 経由でファイルを更新',
	'UPDATE_FILE_METHOD_FILESYSTEM'		=> 'ファイルへの直接アクセス (自動) による更新',

	// File updater archives
	'SELECT_DOWNLOAD_FORMAT'	=> 'ダウンロード形式の選択',

	// FTP settings
	'FTP_SETTINGS'			=> 'FTP 設定',
));

// Requirements messages
$lang = array_merge($lang, array(
	'UPDATE_FILES_NOT_FOUND'	=> '有効な更新ディレクトリが見つかりません。関連ファイルがアップロードされていることを確かめてください。',

	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'phpBB3 のバージョンは最新バージョンです。当アップデートツールを実行する必要はありません。',
	'OLD_UPDATE_FILES'		=> 'アップデートファイルが最新ではありません。このアップデートファイルは phpBB %1$s から phpBB %2$s へアップデートを行います。一方、現在の phpBB3 の最新バージョンは %3$s です。',
	'INCOMPATIBLE_UPDATE_FILES'		=> 'このアップデートファイルはご利用中の phpBB3 のバージョンと互換性がありません。お使いの phpBB3 のバージョンは %1$s であり、このアップデートファイルは phpBB %2$s から %3$s へアップデートするためのファイルです。',
));

// Update files
$lang = array_merge($lang, array(
	'STAGE_UPDATE_FILES'		=> 'ファイルアップデート',

	// Check files
	'UPDATE_CHECK_FILES'	=> 'アップデートのためのファイルチェック',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> 'ファイルの差分を開くことができませんでした。 %s',

	'UPDATE_FILE_DIFF'		=> '変更されたファイルの差分',
	'ALL_FILES_DIFFED'		=> '変更されたすべてのファイルが比較されました',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE'	=> 'ファイルのアップデート',

	'DOWNLOAD'				=> 'ダウンロード',
	'DOWNLOAD_CONFLICTS'			=> '競合ファイルのダウンロード',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> '競合ブロックを見つけるにはファイルをエディタで開き、 &lt;&lt;&lt; を検索してください',
	'DOWNLOAD_UPDATE_METHOD'		=> 'アップデートパッケージのダウンロード',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'ここではアップデートファイルをダウンロードできます。圧縮形式を選択してアップデートファイルをダウンロードしてください。ダウンロード後、解凍して phpBB3 ルートディレクトリへアップロードしてください。アップデートファイルを全てアップロードし終わったら “ファイル再チェック” をクリックしてアップデートがきちんと完了したかをご確認ください。',

	'FILE_ALREADY_UP_TO_DATE'		=> 'このファイルは既にアップデートされています',
	'FILE_DIFF_NOT_ALLOWED'			=> 'このファイルは差分表示を許可されていません',
	'FILE_USED'				=> '使用情報',			// Single file
	'FILES_CONFLICT'			=> 'カスタマイズファイル [ 競合 ]',
	'FILES_CONFLICT_EXPLAIN'		=> '以下のファイルはカスタマイズ（改造）ファイルです。これらのファイルは改造部分がアップデート部分と競合しています。アップデートするには競合部分を調べて手動で競合部分を取り除くか、表示されているオプションの中からアップデート方法を選択してください。手動で競合部分を取り除いた場合、 “ファイル再チェック” をクリックして競合部分が本当に取り除かれているか確認してください。アップデート方法のオプションは各ファイル毎に選ぶことができます。ハック部分とアップデート部分をマージ （共存・統合） する場合、１番目のオプションでは競合部分にアップデートコードが使用され改造コードは破棄されます。２番目のオプションでは競合部分に改造コードが使用されアップデートコードは破棄されます。',
	'FILES_DELETED'				=> 'ファイルの削除',
	'FILES_DELETED_EXPLAIN'			=> '以下のファイルは新バージョンには含まれていません。インストール時は削除してください。',
	'FILES_MODIFIED'			=> 'カスタマイズファイル',
	'FILES_MODIFIED_EXPLAIN'		=> '以下のファイルはカスタマイズファイルです。カスタマイズ部分とアップデート部分のマージ （共存・統合） が可能です。',
	'FILES_NEW'				=> '新しいファイル',
	'FILES_NEW_EXPLAIN'			=> '以下のファイルは当アップデートで新しく追加されたファイルです。これらのファイルはご利用中の phpBB3 に新しく追加されます。',
	'FILES_NEW_CONFLICT'			=> '新しいファイル [ 競合 ]',
	'FILES_NEW_CONFLICT_EXPLAIN'		=> '以下のファイルは当アップデートで新しく追加されたファイルです。しかしこの追加ファイルと同じ位置、同じファイル名のファイルが phpBB3 内に既に存在しています。アップデートファイルをアップロードするとこのファイルは上書きされます。',
	'FILES_NOT_MODIFIED'			=> '純正ファイル',
	'FILES_NOT_MODIFIED_EXPLAIN'		=> '以下のファイルは純正ファイルです。カスタマイズは一切されていません。',
	'FILES_UP_TO_DATE'			=> 'アップデート済みファイル',
	'FILES_UP_TO_DATE_EXPLAIN'		=> '以下のファイルは既にアップデートが完了しているため、アップロードする必要はありません。',
	'FILES_VERSION'					=> 'ファイルバージョン',
	'TOGGLE_DISPLAY'				=> 'ファイルリストの 表示/非表示',

	// File updater
	'UPDATE_UPDATING_FILES'	=> 'ファイルのアップデート',

	'UPDATE_FILE_UPDATER_HAS_FAILED'	=> 'ファイルアップデートは “%1$s“ のステップで失敗しました。インストーラーは前のステップ “%2$s“ に戻ることを試みます。 ',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> 'ファイルアップデートに失敗しました。残念ながら最初の状態に戻す方法は存在しません。',

	'UPDATE_CONTINUE_UPDATE_PROCESS'	=> 'アップデートプロセスを継続する',
	'UPDATE_RECHECK_UPDATE_FILES'		=> 'ファイルの再チェック',
));

// Update database
$lang = array_merge($lang, array(
	'STAGE_UPDATE_DATABASE'		=> 'データベースのアップデート',

	'INLINE_UPDATE_SUCCESSFUL'		=> 'データベースアップデートに成功しました。次のアップデートプロセスへ移行してください。',

	'TASK_UPDATE_EXTENSIONS'	=> '拡張機能をアップデート中',
));

// Converter
$lang = array_merge($lang, array(
	// Common converter messages
	'CONVERT_NOT_EXIST'			=> 'コンバータが存在していません',
	'DEV_NO_TEST_FILE'			=> 'コンバータプログラム内で変数 $test_file に値が設定されていません。コンバータ利用者に対してこのエラーは表示されないはずですが、もし表示されている場合はこのメッセージをコンバータ開発者に報告して頂きますようお願いします。コンバータ開発者は、コンバータ利用者の指定パスが正確であるかどうかテストするために旧掲示板システム内に存在するファイル名を変数 $test_file に文字列として与えなければいけません。',
	'COULD_NOT_COPY'			=> 'ファイル <strong>%1$s</strong> を <strong>%2$s</strong> にコピーできませんでした<br><br>コピー先のディレクトリが存在し、Webサーバから書き込み可能であるか確認してください。',
	'COULD_NOT_FIND_PATH'		=> '“旧掲示板システムへのパス” で指定されたディレクトリが見つかりませんでした。設定を見直してもう一度実行してください。<br />» 指定された “旧掲示板システムへのパス” は %s です。',
	'CONFIG_PHPBB_EMPTY'		=> 'phpBB3 のコンフィグ変数 “%s” が空です',

	'MAKE_FOLDER_WRITABLE'		=> 'このフォルダの 存在 及び アクセス権が書き込み可である事 を確認した後、もう一度試してみてください:<br />»<strong>%s</strong>',
	'MAKE_FOLDERS_WRITABLE'		=> 'これらフォルダの 存在 及び アクセス権が書き込み可である事 を確認した後、もう一度試してみてください:<br />»<strong>%s</strong>',

	'INSTALL_TEST'				=> '再テスト',

	'NO_TABLES_FOUND'			=> 'テーブルが見つかりません',
	'TABLES_MISSING'			=> 'テーブルが見つかりません<br />» <strong>%s</strong>',
	'CHECK_TABLE_PREFIX'		=> 'テーブル接頭辞を確認後、もう一度お試しください',

	// Conversion in progress
	'CATEGORY'					=> 'カテゴリ',
	'CONTINUE_CONVERT'			=> 'データコンバート続行',
	'CONTINUE_CONVERT_BODY'		=> '中断されたデータコンバートを検出しました。データコンバートを最初からやり直すか、以前に開始されたデータコンバートを再開するかを選択してください。',
	'CONVERT_NEW_CONVERSION'	=> '新しくデータコンバートを開始する',
	'CONTINUE_OLD_CONVERSION'	=> '中断されたデータコンバートを再開する',
	'POST_ID'					=> '投稿 ID',

	// Start conversion
	'SUB_INTRO'				=> 'はじめに',
	'CONVERT_INTRO'				=> 'phpBBコンバータフレームワーク へようこそ',
	'CONVERT_INTRO_BODY'			=> 'ここでは他の掲示板システムのデータを phpBB3 へコンバートできます。使用していた掲示板ソフトウェア用のコンバータがもしリストにない場合、お望みのコンバータが存在しているかどうかを phpBB Group 公式サイトを訪れてチェックしてみてください。もしかするとお望みのコンバータがダウンロード可能になっているかもしれません。',
	'AVAILABLE_CONVERTORS'			=> '利用可能なコンバータ',
	'NO_CONVERTORS'				=> 'ご利用可能なコンバータはありません',
	'CONVERT_OPTIONS'			=> 'オプション',
	'SOFTWARE'				=> '掲示板ソフトウェア',
	'VERSION'				=> 'バージョン',
	'CONVERT'				=> 'データコンバート',

	// Settings
	'STAGE_SETTINGS'			=> '設定',
	'TABLE_PREFIX_SAME'			=> 'テーブル接頭辞は旧掲示板システムが使用しているテーブルの接頭辞である必要があります。<br />» 指定されたテーブル接頭辞 %s',
	'DEFAULT_PREFIX_IS'			=> '指定のデータベース内に、指定された接頭辞をもつテーブルが見つかりませんでした。旧掲示板システムのデータベース情報が正確に入力されているかどうかをご確認ください。旧掲示板システム %1$s におけるデフォルト接頭辞は <strong>%2$s</strong> です。',
	'SPECIFY_OPTIONS'			=> 'コンバートオプションの指定',
	'FORUM_PATH'				=> '旧掲示板へのパス',
	'FORUM_PATH_EXPLAIN'			=> '<strong>phpBB3 ルートディレクトリ</strong>から見た旧掲示板システムへの<strong>相対</strong>パスです',
	'REFRESH_PAGE'				=> '各ステップをページ毎にリフレッシュする',
	'REFRESH_PAGE_EXPLAIN'		=> '“はい” にした場合、ページを進める度にコンバータは各コンバートステップの処理を完了します。きちんとデータコンバートが最後まで完了するかどうか判断できない場合、前もってエラーを発見しておくために最初は “いいえ” にすることを勧めます。',

	// Conversion
	'STAGE_IN_PROGRESS'			=> 'データコンバート進行中',

	'AUTHOR_NOTES'				=> 'コンバータ開発者からの注意<br />» %s',
	'STARTING_CONVERT'			=> 'データコンバートの開始',
	'CONFIG_CONVERT'			=> 'コンフィグファイルのデータコンバート',
	'DONE'					=> '完了',
	'PREPROCESS_STEP'			=> 'コンバートプリプロセス 関数/クエリ の実行',
	'FILLING_TABLE'				=> 'テーブル <strong>%s</strong> へデータ挿入',
	'FILLING_TABLES'			=> 'テーブルへデータ挿入',
	'DB_ERR_INSERT'				=> 'クエリ <code>INSERT</code> の実行中にエラーが発生しました',
	'DB_ERR_LAST'				=> '<var>query_last</var> の実行中にエラーが発生しました',
	'DB_ERR_QUERY_FIRST'			=> '<var>query_first</var> の実行中にエラーが発生しました',
	'DB_ERR_QUERY_FIRST_TABLE'		=> '<var>query_first</var> の実行中にエラーが発生しました, %s (“%s”)',
	'DB_ERR_SELECT'				=> 'クエリ <code>SELECT</code> の実行中にエラーが発生しました',
	'STEP_PERCENT_COMPLETED'		=> 'ステップ <strong>%d</strong> ／ <strong>%d</strong>',
	'FINAL_STEP'				=> '最終ステップの処理',
	'SYNC_FORUMS'				=> 'フォーラムの同期',
	'SYNC_POST_COUNT'			=> 'post_counts の同期',
	'SYNC_POST_COUNT_ID'			=> '<var>エントリー</var> %1$s から %2$s までの post_counts を同期中',
	'SYNC_TOPICS'				=> 'トピックの同期',
	'SYNC_TOPIC_ID'				=> '<var>topic_id</var> %1$s から %2$s までのトピックを同期中',
	'PROCESS_LAST'				=> 'プロセスの実行',
	'UPDATE_TOPICS_POSTED'			=> 'トピック情報の生成',
	'UPDATE_TOPICS_POSTED_ERR'		=> 'トピック情報の生成中にエラーが発生しました。データコンバート完了後に AdminCP でこのステップをリトライできます。',
	'CONTINUE_LAST'				=> '次のステップへ',
	'CLEAN_VERIFY'				=> '最終段階におけるデータ構築の確認とクリーニング',
	'NOT_UNDERSTAND'			=> 'Could not understand %s #%d, table %s (“%s”)',
	'NAMING_CONFLICT'			=> 'ユーザー名の競合: %s と %s は同じユーザーと見なされます<br /><br />%s',

	// Finish conversion
	'CONVERT_COMPLETE'			=> 'データコンバート完了',
	'CONVERT_COMPLETE_EXPLAIN'	=> '旧掲示板システムのデータは新システム phpBB 3.3 へコンバートされました。新システムにログインするには<a href="../">こちら</a>をクリックしてください。旧掲示板システムの基本設定が新掲示板にきちんと移転・反映されているかをご確認ください。もし問題がなければ install ディレクトリを削除することによって一般ユーザーが新掲示板にアクセスできるようになります。<a href="https://www.phpbb.com/support/docs/en/3.3/ug/">オンラインドキュメント</a> と <a href="https://www.phpbb.com/community/viewforum.php?f=661">サポートフォーラム</a> にはphpBBのヘルプ情報がありますのでご利用ください。',

	'COLLIDING_CLEAN_USERNAME'			=> '<strong>%s</strong> は以下のクリーンユーザー名です：',
	'COLLIDING_USER'					=> '» ユーザー ID: <strong>%d</strong> ユーザー名: <strong>%s</strong> （%d 投稿）',
	'COLLIDING_USERNAMES_FOUND'			=> '古いボードで重複するユーザー名が見つかりました。コンバートを完了するには、各クリーンユーザー名につき古いボードでユーザーが 1 人だけになるよう、これらのユーザーを削除またはリネームしてください。',
	'CONV_ERR_FATAL'					=> '致命的なコンバートエラー',
	'CONV_ERROR_ATTACH_FTP_DIR'			=> '旧掲示板システムで FTP アップロードによるファイル添付が許可されているようです。旧掲示板システムの FTP アップロードオプションを無効に設定してください。そして旧掲示板システムにおけるアップロード先ディレクトリを正しく設定し直し、サーバ に置かれている全アップロードファイルをそのディレクトリへコピーしてください。コピーが完了し次第、データコンバートを再開してください。',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'コンバート可能なコンフィグ情報はありません',
	'CONV_ERROR_FORUM_ACCESS'			=> 'フォーラムのアクセス情報を取得できませんでした',
	'CONV_ERROR_GET_CATEGORIES'			=> 'カテゴリ情報を取得できませんでした',
	'CONV_ERROR_GET_CONFIG'				=> '旧掲示板システムのコンフィグ情報を取得できませんでした',
	'CONV_ERROR_COULD_NOT_READ'			=> '“%s” へのアクセスまたは読み込みに失敗しました',
	'CONV_ERROR_GROUP_ACCESS'			=> 'グループのパーミッション情報を取得できませんでした',
	'CONV_ERROR_INCONSISTENT_GROUPS'		=> '関数 add_bots() を実行中にグループテーブル内のデータに不一致が見られました。手動でグループを追加する場合、特別グループを全て追加する必要があります。',
	'CONV_ERROR_INSERT_BOT'				=> 'テーブル users にボットを追加できませんでした',
	'CONV_ERROR_INSERT_BOTGROUP'			=> 'テーブル bots にボットを追加できませんでした',
	'CONV_ERROR_INSERT_USER_GROUP'			=> 'テーブル user_group にユーザーを追加できませんでした',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'メッセージパースエラー',
	'CONV_ERROR_NO_AVATAR_PATH'			=> '開発者への注意: %s を使用するには $convertor[\'avatar_path\'] を指定する必要があります',
	'CONV_ERROR_NO_FORUM_PATH'			=> '新掲示板ルートディレクトリへの相対パスが指定されていません',
	'CONV_ERROR_NO_GALLERY_PATH'			=> '開発者への注意: %s を使用するには $convertor[\'avatar_gallery_path\'] を指定する必要があります',
	'CONV_ERROR_NO_GROUP'				=> '%2$s でグループ “%1$s” を見つけられませんでした',
	'CONV_ERROR_NO_RANKS_PATH'			=> '開発者への注意: %s を使用するには $convertor[\'ranks_path\'] を指定する必要があります',
	'CONV_ERROR_NO_SMILIES_PATH'			=> '開発者への注意: %s を使用するには $convertor[\'smilies_path\'] を指定する必要があります',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> '開発者への注意: %s を使用するには $convertor[\'upload_path\'] を指定する必要があります',
	'CONV_ERROR_PERM_SETTING'			=> 'パーミッションの 付与/変更 に失敗しました',
	'CONV_ERROR_PM_COUNT'				=> 'フォルダ選択に失敗しました。Unable to select folder pm count.',
	'CONV_ERROR_REPLACE_CATEGORY'			=> '旧カテゴリを新フォーラムにデータコンバートすることに失敗しました',
	'CONV_ERROR_REPLACE_FORUM'			=> '旧フォーラムを新フォーラムにデータコンバートすることに失敗しました',
	'CONV_ERROR_USER_ACCESS'			=> 'ユーザーのパーミッション情報を取得できませんでした',
	'CONV_ERROR_WRONG_GROUP'			=> '不正なグループ “%1$s” が %2$s で定義されています',
	'CONV_OPTIONS_BODY'				=> 'フォームに既に入力されている情報は当 phpBB3 （以下 “新掲示板”） のデータベース情報です。もし新掲示板のデータベース情報と旧掲示板システムのデータベース情報が異なる場合、入力されている情報を旧掲示板システムのデータベース情報に変更してください。コンバータはここで指定されたデータベース内のテーブルとその格納データを一切変更しません。コンバータが途中で中断されないよう、旧掲示板を使用不可にしておくべきです。',
	'CONV_SAVED_MESSAGES'				=> '保存メッセージ',

	'PRE_CONVERT_COMPLETE'			=> 'コンバートプリステップを全て完了しました。データコンバートを開始してください。コンバート完了後、手動で調整しなければならない点がいくつかあるかもしれない点にご注意ください。特にパーミッションが正しく割り当てられているかチェックしてください。必要であれば検索インデクスを再構築してください。アバターやスマイリーのような画像ファイルが正確にコピーされているかどうかもご確認ください。',
));
