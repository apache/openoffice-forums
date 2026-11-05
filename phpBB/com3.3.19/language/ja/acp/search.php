<?php
/**
*
* acp_search [Japanese]
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

$lang = array_merge($lang, array(
	'ACP_SEARCH_INDEX_EXPLAIN'			=> 'ここでは検索インデックスを管理できます。サーバの負担を少しでも軽くするため、利用していない検索バックエンドのインデックスは削除すべきです。検索設定を変更しても既に存在しているインデックスは影響を受けません。既存のインデックスに対して新しいインデックス設定ルールを反映するにはインデックスを再構築する必要があります。',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'ここでは検索バックエンドを指定できます（検索バックエンドとは記事のインデックス作成と検索処理を行うエンジンの事です）。また、検索処理に制限を課す事によってサーバ負荷を軽くする事もできます。バックエンド共通の設定項目もありますが、バックエンド独自の設定項目もあります。インデックス (index) とは索引付けの事であり、具体的には記事が投稿された際に記事の件名と文章中に含まれるキーワードを抜き出してデータベースに保管する事を意味します。検索処理はデータベースに保管されたこのインデックス情報を基にして行われます。 phpBB3 では検索バックエンドは Fulltext mysql と Fulltext native がはじめから用意されており、ここでどちらを利用するかを選択できます。初期設定では Fulltext native が選択されています。 Fulltext mysql を使用するにはデータベースが MySQL である必要があります。',

	'COMMON_WORD_THRESHOLD'				=> 'コモンワード判定レベル',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'ある検索キーワードが全体の記事数に対してこのパーセンテージ （％） 以上の記事数をヒットする場合、その検索キーワードは コモンワード (common word) とみなされ検索処理されません。コモンワードは検索クエリ （データベースへの問い合わせ） の際に無視されます。この機能が働くのは記事数が １００ を超えている場合のみです。もしこの機能を無効化したい場合は 0 を入力してください。コモンワード判定レベルを変更した場合、新しいコモンワード判定レベルを過去に投稿された記事に対して適用するにはインデックスを再構築する必要があります。',
	'CONFIRM_SEARCH_BACKEND'			=> '検索バックエンドを本当に変更してもよろしいですか？ 検索バックエンドを変更した後は新しい検索バックエンドで検索インデックスを再構築する必要があります。その際、以前の検索バックエンドに戻るつもりがないならサーバ負荷を少しでも軽くするため以前のバックエンドのインデックスは削除しておくべきです。',
	'CONTINUE_DELETING_INDEX'			=> '継続中のインデックス削除処理を再開する',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'インデックス削除中です。“検索インデックス” ページへアクセスするには削除を完了させるかキャンセルする必要があります。',
	'CONTINUE_INDEXING'				=> '継続中のインデックス作成処理を再開する',
	'CONTINUE_INDEXING_EXPLAIN'			=> 'インデックス作成中です。“検索インデックス” ページへアクセスするには作成を完了させるかキャンセルする必要があります。',
	'CREATE_INDEX'					=> 'インデックス作成',

	'DEFAULT_SEARCH_RETURN_CHARS'			=> 'デフォルトで返される文字数',
	'DEFAULT_SEARCH_RETURN_CHARS_EXPLAIN'	=> '検索中に返される文字数を指定します。値が0の場合は投稿全体を返します。',
	'DELETE_INDEX'					=> 'インデックス削除',
	'DELETING_INDEX_IN_PROGRESS'			=> 'インデックス削除の処理中です…',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'		=> '検索バックエンドは現在、インデックスを削除中です。処理が終わるには数分かかる事もあります。',

	'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'		=> 'MySQL fulltext バックエンドは MySQL4 以上 でのみ利用可能です',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'			=> 'Fulltext mysql を使用するにはデータベースのテーブル形式が MyISAM または InnoDB である必要があります。InnoDB の場合、MySQL のバージョンは 5.6.8 以上である必要があります。',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'インデックス済み記事数',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'この数より小さい字数のキーワードはインデックスの対象となりません。	この設定を変更するには MySQL のコンフィグ設定を変更する必要があります。',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> 'この数を超える字数のキーワードはインデックスの対象となりません。この設定を変更するには MySQL のコンフィグ設定を変更する必要があります。',

	'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'	=> 'PostgreSQL fulltext バックエンドは PostgreSQL でのみ利用可能です',
	'FULLTEXT_POSTGRES_TOTAL_POSTS'			=> 'インデックス済み記事数',
	'FULLTEXT_POSTGRES_VERSION_CHECK'		=> 'PostgreSQL バージョン',
	'FULLTEXT_POSTGRES_TS_NAME'			=> 'テキスト検索設定プロフィール:',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN'		=> 'キーワード最小文字数',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN'		=> 'キーワード最大文字数',
	'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'	=> 'この検索バックエンドは PostgreSQL バージョン 8.3 以上が必要です',
	'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'		=> 'テキスト検索設定プロフィールはパーサーとディレクトリを定めるために使われます。',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'	=> 'この数より小さい字数のキーワードはデータベースクエリに含まれません',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'	=> 'この数を超える字数のキーワードはデータベースクエリに含まれません',

	'FULLTEXT_SPHINX_CONFIGURE'			=> 'Sphinx 設定ファイルを生成するために下記の値を設定します',
	'FULLTEXT_SPHINX_DATA_PATH'			=> 'データディレクトリのパス',
	'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'		=> 'インデックスとログファイルを格納するために使われます。外部からWebアクセスできない場所にディレクトリを作成する必要があります。（パスの末尾には / を付けてください）',
	'FULLTEXT_SPHINX_DELTA_POSTS'			=> 'デルタインデックスを更新する記事数', // 次回更新までプールする記事数？よく分からない
	'FULLTEXT_SPHINX_HOST'				=> 'Sphinx 検索サーバーのホスト名',
	'FULLTEXT_SPHINX_HOST_EXPLAIN'			=> 'Sphinx 検索サーバーのホスト名です。localhost の場合は空にしてください。',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'		=> 'インデックスエンジンの使用メモリ上限',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN'	=> 'この数値は常にサーバーのRAMよりも低く設定する必要があります。もし断続的にパフォーマンスの問題にぶつかる場合は、インデックスエンジンが多くのメモリリソースを消費しているかもしれません。インデックスエンジンにはメモリの合計よりも低いメモリ割り当てにしてください。',
	'FULLTEXT_SPHINX_MAIN_POSTS'			=> 'メインインデックスの記事数',
	'FULLTEXT_SPHINX_PORT'				=> 'Sphinx 検索サーバーのポート番号',
	'FULLTEXT_SPHINX_PORT_EXPLAIN'			=> 'Sphinx 検索サーバーのポート番号です。デフォルトの Sphinx API ポート 9312 の場合は空にしてください。',
	'FULLTEXT_SPHINX_WRONG_DATABASE'		=> 'Sphinx 全文検索は MySQL と PostgreSQL のみサポートしています',
	'FULLTEXT_SPHINX_CONFIG_FILE'			=> 'Sphinx 設定ファイル',
	'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'		=> 'Sphinx 設定ファイルの生成内容です。このデータを Sphonx検索サーバーで使われている sphinx.conf にペーストする必要があります。 [dbuser] と [dbpassword] のプレースホルダー部分をあなたのデータベース情報に差し替えてください。',
	'FULLTEXT_SPHINX_NO_CONFIG_DATA'		=> 'Sphinx データディレクトリのパスが定義されていません。パスを定義して設定ファイルに登録してください。',

	'GENERAL_SEARCH_SETTINGS'			=> '検索バックエンド共通設定',
	'GO_TO_SEARCH_INDEX'				=> '“検索インデックス” ページへ移動',

	'INDEX_STATS'					=> 'インデックス統計',
	'INDEXING_IN_PROGRESS'				=> 'インデックス作成中…',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> '検索バックエンドは現在、掲示板の全投稿記事をインデックスしています。記事数によっては数分から数時間かかる事もあります',

	'LIMIT_SEARCH_LOAD'					=> 'サーバCPU使用率の制限',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> '検索処理で CPU 使用率がこの値を超えた時、掲示板は自動的にオフライン状態に移行します。0 から 1.0 の範囲の数字を入力してください。 1.0 は CPU 使用率 100 ％を意味します。この機能は UNIX系OS にのみ効果があります。',

	'MAX_SEARCH_CHARS'					=> 'インデックスの最大文字数',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'この数を超える字数のキーワードはインデックスの対象となりません',
	'MAX_NUM_SEARCH_KEYWORDS'				=> '検索キーワードの最大数',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> '同時に検索できるキーワードの最大数です。0 にすると上限はありません。',
	'MIN_SEARCH_CHARS'					=> 'インデックスの最小文字数',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'この数より小さい字数のキーワードはインデックスの対象となりません',
	'MIN_SEARCH_AUTHOR_CHARS'				=> '投稿者名の最小文字数',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'ワイルドカード(*)を用いて投稿者検索をする際、この数以上の文字を入力する必要があります。この数未満の文字数の投稿者を検索するには投稿者のユーザー名を完全に入力する必要があります。',

	'PROGRESS_BAR'						=> '進行状況',

	'SEARCH_GUEST_INTERVAL'					=> 'ゲストに対する連続検索制限',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'				=> 'ゲストが連続して検索する際、検索と検索の間にインターバルとして挟まれる秒数です。個々のゲストに対してチェックされます。この機能を無効にしたい場合は 0 を入力してください。',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> array(
		1	=> '記事ID %2$d までインデックスを完了しました。このステップで %1$d 個の記事をインデックスしました。',
	),
	'SEARCH_INDEX_CREATE_REDIRECT_RATE'		=> array(
		1	=> '現在のインデックス率はおよそ %1$.1f 記事/秒 です。',
	),
	'SEARCH_INDEX_DELETE_REDIRECT'			=> array(
		1	=> '記事ID %2$d までのインデックスを削除しました。このステップで %1$d 個の記事をインデックスしました。',
	),
	'SEARCH_INDEX_DELETE_REDIRECT_RATE'		=> array(
		1	=> '現在の削除進行率はおよそ %1$.1f 記事/秒 です。',
	),
	'SEARCH_INDEX_CREATED'					=> 'インデックスの作成に成功しました',
	'SEARCH_INDEX_PROGRESS'					=> '完了: %1$d | 残り: %2$d | 合計: %3$d',
	'SEARCH_INDEX_REMOVED'					=> 'インデックスの削除に成功しました',
	'SEARCH_INTERVAL'					=> '登録ユーザーに対する連続検索制限',
	'SEARCH_INTERVAL_EXPLAIN'				=> '登録ユーザーが連続して検索する際、検索と検索の間にインターバルとして挟まれる秒数です。個々の登録ユーザーに対してチェックされます。この機能を無効にしたい場合は 0 を入力してください。',
	'SEARCH_STORE_RESULTS'					=> '検索結果のキャッシュの有効期間',
	'SEARCH_STORE_RESULTS_EXPLAIN'				=> 'この秒数が過ぎると検索結果のキャッシュ情報は破棄されます。0 に設定した場合、検索結果はキャッシュされません。',
	'SEARCH_TYPE'						=> '検索バックエンド',
	'SEARCH_TYPE_EXPLAIN'					=> '記事のインデックス作成と検索処理を行うエンジンを選択します。デフォルトで Fulltext native エンジンを利用します。',
	'SWITCHED_SEARCH_BACKEND'				=> '検索バックエンドを変更しました。記事を検索するには、検索バックエンドの検索インデックスが作成されている必要があります。',

	'TOTAL_WORDS'						=> 'インデックスされたキーワードの総数',
	'TOTAL_MATCHES'						=> 'インデックスされたキーワードとマッチする記事の のべ総数',

	'YES_SEARCH'						=> '検索機能を有効にする',
	'YES_SEARCH_EXPLAIN'					=> '記事検索機能とメンバー検索機能を有効にします',
	'YES_SEARCH_UPDATE'					=> 'インデックスを作成する',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> '記事投稿時にインデックスを作成します。検索機能が無効に設定されている場合は作成されません。',
));
