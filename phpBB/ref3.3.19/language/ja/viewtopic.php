<?php
/**
*
* viewtopic [Japanese]
*
* @package language
* @version $Id$
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'APPROVE'			=> '承認',
	'ATTACHMENT'						=> '添付ファイル',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'ファイル添付機能は無効に設定されています',

	'BOOKMARK_ADDED'		=> 'トピックをブックマークしました',
	'BOOKMARK_ERR'			=> 'トピックのブックマークに失敗しました。もう一度お試しください。',
	'BOOKMARK_REMOVED'		=> 'トピックのブックマークを解除しました',
	'BOOKMARK_TOPIC'		=> 'このトピックをブックマークする',
	'BOOKMARK_TOPIC_REMOVE'	=> 'ブックマークを解除',
	'BUMPED_BY'				=> 'トピックを最後に上げたユーザー %1$s [ %2$s ]',
	'BUMP_TOPIC'			=> 'このトピックを上げる',

	'DELETE_TOPIC'			=> 'トピックを削除する',
	'DELETED_INFORMATION'		=> '%1$s さんによって削除されました ： %2$s',
	'DISAPPROVE'			=> '不承認',
	'DOWNLOAD_NOTICE'		=> '添付ファイルを見るにはパーミッションが必要です',

	'EDITED_TIMES_TOTAL'	=> array(
		1	=> '最後に編集したユーザー %2$s [ %3$s ], 累計 %1$d 回',
	),
	'EMAIL_TOPIC'			=> '友達にメールで知らせる',
	'ERROR_NO_ATTACHMENT'	=> '添付ファイルが存在していません',

	'FILE_NOT_FOUND_404'	=> 'ファイル <strong>%s</strong> が存在していません',
	'FORK_TOPIC'			=> 'トピックをコピーする',
	'FULL_EDITOR'			=> '投稿画面へ',

	'LINKAGE_FORBIDDEN'		=> 'サイト内の画像またはファイルについて、表示、ダウンロード、リンクをサイトから拒否されました',
	'LOGIN_NOTIFY_TOPIC'	=> 'ウォッチ中のトピックに新着記事があります。ログインして記事をご確認ください。',
	'LOGIN_VIEWTOPIC'		=> 'このトピックを閲覧するにはユーザー登録とログインが必要です',

	'MAKE_ANNOUNCE'				=> ' “告知トピック” へ変更する',
	'MAKE_GLOBAL'				=> ' “グローバル告知トピック” へ変更する',
	'MAKE_NORMAL'				=> ' “通常トピック” へ変更する',
	'MAKE_STICKY'				=> ' “注目トピック” へ変更する',
	'MAX_OPTIONS_SELECT'		=> array(
		1	=> '<strong>%d</strong>  個までオプションを選択できます',
	),
	'MISSING_INLINE_ATTACHMENT'	=> '添付ファイル <strong>%s</strong> がありません',
	'MOVE_TOPIC'				=> 'トピックを移動する',

	'NO_ATTACHMENT_SELECTED'=> 'ダウンロードまたは表示する添付ファイルを選択していません',
	'NO_NEWER_TOPICS'		=> 'このフォーラムにはこれ以上新しいトピックはありません',
	'NO_OLDER_TOPICS'		=> 'このフォーラムにはこれ以上古いトピックはありません',
	'NO_UNREAD_POSTS'		=> 'このトピックに未読記事はありません',
	'NO_VOTE_OPTION'		=> '投票オプションを選択してください',
	'NO_VOTES'			=> '0 票',
	'NO_AUTH_PRINT_TOPIC'		=> 'トピックを印刷するにはパーミッションが必要です',

	'POLL_ENDED_AT'			=> '投票は %s を以って終了致しました',
	'POLL_RUN_TILL'			=> '投票は %s に終了します',
	'POLL_VOTED_OPTION'		=> 'このオプションに投票しました',
	'POST_DELETED_RESTORE'		=> 'この記事は削除されました。復元は可能です。',
	'PRINT_TOPIC'			=> '印刷ビュー',

	'QUICK_MOD'				=> 'モデレータ用クイックツール',
	'QUICKREPLY'			=> 'クイック返信',

	'REPLY_TO_TOPIC'		=> 'トピックへ返信する',
	'RESTORE'			=> '復元',
	'RESTORE_TOPIC'			=> 'トピックを復元する',
	'RETURN_POST'			=> '%s記事に戻る%s',

	'SUBMIT_VOTE'			=> '投票',

	'TOPIC_TOOLS'			=> 'トピックツール',
	'TOTAL_VOTES'			=> '投票総数',

	'UNLOCK_TOPIC'			=> 'トピックを開放する',

	'VIEW_INFO'				=> '記事の詳細',
	'VIEW_NEXT_TOPIC'		=> '次のトピックへ',
	'VIEW_PREVIOUS_TOPIC'	=> '１つ前のトピックへ',
	'VIEW_QUOTED_POST'		=> '引用された投稿を見る',
	'VIEW_RESULTS'			=> '投票結果を見る',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> '%d 件の記事',
	),
	'VIEW_UNREAD_POST'		=> '未読記事へ',
	'VOTE_SUBMITTED'		=> '投票しました',
	'VOTE_CONVERTED'		=> 'データコンバートされた投票トピックの投票オプションを変更することはできません。残念ながら現在はサポート外です。',
));
