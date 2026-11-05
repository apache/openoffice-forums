<?php
/**
*
* acp_groups [Japanese]
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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'ここではグループの管理を行うことができます。具体的にはグループの削除、作成、編集などです。グループリーダーの任命、グループタイプの変更、グループ名とグループ説明なども設定できます。',
	'ADD_GROUP_CATEGORY'			=> 'カテゴリの追加',
	'ADD_USERS'				=> 'ユーザーの追加',
	'ADD_USERS_EXPLAIN'			=> 'ここではグループにユーザーを追加できます。その際、追加したユーザーのデフォルトグループをこのグループにするかどうかを選択できます。追加したユーザーをグループリーダーに任命する事もできます。',

	'COPY_PERMISSIONS'			=> 'パーミッションをコピーする',
	'COPY_PERMISSIONS_EXPLAIN'		=> '選択したグループのパーミッション設定がこのグループにも適用されます',
	'CREATE_GROUP'				=> 'グループの作成',

	'GROUPS_NO_MEMBERS'			=> 'メンバーはいません',
	'GROUPS_NO_MODS'			=> 'グループリーダーはいません',

	'GROUP_APPROVE'				=> '参加の申請を承認する',
	'GROUP_APPROVED'			=> '承認済みメンバー',
	'GROUP_AVATAR'				=> 'グループアバター',
	'GROUP_AVATAR_EXPLAIN'			=> 'アバター画像はグループ情報ページで表示されます',
	'GROUP_CATEGORY_NAME'			=> 'カテゴリ名',
	'GROUP_CLOSED'				=> '閉鎖',
	'GROUP_COLOR'				=> 'グループカラー',
	'GROUP_COLOR_EXPLAIN'			=> 'グループメンバー名の色を決めてください。デフォルト設定でかまわない場合は空白のままにしてください。',
	'GROUP_CONFIRM_ADD_USERS'		=> array(
		1	=> 'ユーザー %2$s を本当に追加してもよろしいですか？',
	),
	'GROUP_CREATED'				=> 'グループの作成に成功しました',
	'GROUP_DEFAULT'				=> 'デフォルトグループに設定する',
	'GROUP_DEFS_UPDATED'			=> '指定したメンバーのデフォルトグループを変更しました',
	'GROUP_DELETE'				=> 'グループから除名する',
	'GROUP_DELETED'				=> 'グループの削除 と デフォルトグループの設定 に成功しました',
	'GROUP_DEMOTE'				=> 'グループリーダーを解任する',
	'GROUP_DESC'				=> 'グループ説明',
	'GROUP_DETAILS'				=> 'グループの詳細設定',
	'GROUP_EDIT_EXPLAIN'			=> 'ここではグループの編集を行うことができます。グループの名前、説明、タイプを変更できます。グループカラー、ランク等の追加オプションも設定できます。これらの設定はユーザー設定を上書きします。適切なユーザーパーミッションを設定していない場合、グループのアバター設定よりもユーザーのアバター設定が優先される点にご注意ください。 ',
	'GROUP_ERR_USERS_EXIST'			=> '指定したユーザーはすでにグループのメンバーです',
	'GROUP_FOUNDER_MANAGE'			=> 'グループ作成者のみグループを管理する',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'このグループを管理するユーザーをグループ作成者だけに限定します。“グループ管理” パーミッションを与えられたユーザーは、引き続きグループとそのメンバーを見る事だけはできます。',
	'GROUP_HIDDEN'				=> '非公開',
	'GROUP_LANG'				=> 'グループの言語',
	'GROUP_LEAD'				=> 'グループリーダー',
	'GROUP_LEADERS_ADDED'			=> 'グループリーダーの追加に成功しました',
	'GROUP_LEGEND'				=> 'グループ名を掲示板トップページで表示する',
	'GROUP_LIST'				=> '現在のメンバー',
	'GROUP_LIST_EXPLAIN'			=> 'グループの全メンバーのリストです。メンバーの除名（特別グループは除く）と追加を行えます。',
	'GROUP_MEMBERS'				=> 'グループメンバー',
	'GROUP_MEMBERS_EXPLAIN'			=> 'ここではグループメンバーを全面的に管理する事ができます。リーダーを解任するには “除名” ではなく “解任” を実行してください。',
	'GROUP_MESSAGE_LIMIT'			=> 'グループメンバー１人あたりのプライベートメッセージの最大保管件数',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'この設定は “プライベートメッセージ設定” の “ユーザー１人あたりのプライベートメッセージの最大保管件数” を上書きします。0 に設定すると上書きしません。',
	'GROUP_MODS_ADDED'			=> 'グループリーダーの追加に成功しました',
	'GROUP_MODS_DEMOTED'			=> 'グループリーダーの解任に成功しました',
	'GROUP_MODS_PROMOTED'			=> 'グループリーダーの任命に成功しました',
	'GROUP_NAME'				=> 'グループ名',
	'GROUP_NAME_TAKEN'			=> '入力されたグループ名は既に存在しています。別の名前を入力してください。',
	'GROUP_OPEN'				=> '開放',
	'GROUP_PENDING'				=> '承認待ちメンバー',
	'GROUP_MAX_RECIPIENTS'			=> 'プライベートメッセージ送信先ユーザーの最大数',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'プライベートメッセージの送信先として指定できるユーザー数の上限です。0 に設定した場合、“プライベートメッセージ設定” の “送信先ユーザーの最大数” が適用されます。',
	'GROUP_OPTIONS_SAVE'			=> 'グループ設定 [ オプション ]',
	'GROUP_PROMOTE'				=> 'グループリーダーに任命する',
	'GROUP_RANK'				=> 'グループランク',
	'GROUP_RECEIVE_PM'			=> 'プライベートメッセージを受信する',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'プライベートメッセージの宛先としてこのグループを指定できるようになります。メッセージはグループメンバー全員に送信されます。非公開グループはプライベートメッセージを受信できない点にご注意ください。',
	'GROUP_REQUEST'				=> '申請',
	'GROUP_SETTINGS_SAVE'			=> 'グループ設定 [ 必須 ] ',
	'GROUP_SKIP_AUTH'			=> 'グループリーダーに対してパーミッションを適用しない',
	'GROUP_SKIP_AUTH_EXPLAIN'		=> '有効にした場合、グループリーダーはこのグループのパーミッション設定の影響を受けません。このグループのパーミッション設定に “Never” を使用している場合は有効にすることをお勧めします。',
	'GROUP_SPECIAL'				=> '定義済み',
	'GROUP_TEAMPAGE'			=> 'チームページに表示する',
	'GROUP_TYPE'				=> 'グループタイプ',
	'GROUP_TYPE_EXPLAIN'			=> 'こちらでどのユーザーがグループを加入もしくは閲覧できるかを決定します。',
	'GROUP_UPDATED'				=> 'グループ設定の更新に成功しました',

	'GROUP_USERS_ADDED'			=> 'グループメンバーの追加に成功しました',
	'GROUP_USERS_EXIST'			=> '選択したユーザーはすでにグループのメンバーです',
	'GROUP_USERS_REMOVE'			=> 'ユーザーの除名 と デフォルトグループの変更 に成功しました',
	'GROUP_USERS_INVALID'			=> '次のユーザー名が存在しないため、グループにユーザーが追加されませんでした： %s',

	'LEGEND_EXPLAIN'			=> 'グループリストに表示されるグループです:',
	'LEGEND_SETTINGS'			=> 'グループ設定',
	'LEGEND_SORT_GROUPNAME'			=> 'グループ名順に並び替える',
	'LEGEND_SORT_GROUPNAME_EXPLAIN'		=> 'このオプションが有効の場合、下記の順序は無視されます',

	'MANAGE_LEGEND'				=> 'グループ表示ポジションを管理する',
	'MANAGE_TEAMPAGE'			=> 'チームページを管理する',
	'MAKE_DEFAULT_FOR_ALL'			=> '全メンバーのデフォルトグループをこのグループに設定する',
	'MEMBERS'				=> 'メンバー',

	'NO_GROUP'				=> 'グループが指定されていません',
	'NO_GROUPS_ADDED'			=> 'まだグループは追加されていません',
	'NO_GROUPS_CREATED'			=> '作成グループなし',
	'NO_PERMISSIONS'			=> 'パーミッションをコピーしない',
	'NO_USERS'				=> 'ユーザー名を入力していません',
	'NO_USERS_ADDED'			=> 'グループに追加されたユーザーはいません',
	'NO_VALID_USERS'			=> 'アクションに有効なユーザー名を入力していません',

	'PENDING_MEMBERS'			=> '保留中',

	'SELECT_GROUP'				=> 'グループを選択',
	'SPECIAL_GROUPS'			=> '特別グループ',
	'SPECIAL_GROUPS_EXPLAIN'		=> 'このグループは作成グループではありません。特別グループを削除したりグループ名を変更したりする事はできません。ユーザーの追加、基本設定の変更は行えます。',

	'TEAMPAGE'				=> 'チームページ',
	'TEAMPAGE_DISP_ALL'			=> '全てのメンバーシップ',
	'TEAMPAGE_DISP_DEFAULT'			=> 'デフォルトグループのみ',
	'TEAMPAGE_DISP_FIRST'			=> '最初のメンバーシップのみ',
	'TEAMPAGE_EXPLAIN'			=> 'チームページに表示されるグループです:',
	'TEAMPAGE_FORUMS'			=> 'モデレートされたフォーラムを表示する',
	'TEAMPAGE_FORUMS_EXPLAIN'		=> 'はい に設定した場合、モデレータはモデレートパーミッションを持つ全てのフォーラムの表示リストを持ちます。これは大きなデータを持つ掲示板には非常に大きなデータベース検索負荷がかかります。',
	'TEAMPAGE_MEMBERSHIPS'			=> 'ユーザーを表示する',
	'TEAMPAGE_SETTINGS'			=> 'チームページ設定',
	'TOTAL_MEMBERS'				=> 'メンバー数',

	'USERS_APPROVED'			=> 'ユーザーの承認に成功しました',
	'USER_DEFAULT'				=> 'ユーザーのランクを優先',
	'USER_DEF_GROUPS'			=> '作成グループ',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'このグループはウェブマスターまたは Admin によって作成されたグループです。メンバーの管理、グループの設定、グループの削除を行えます。',
	'USER_GROUP_DEFAULT'			=> 'デフォルトグループに設定する',
	'USER_GROUP_DEFAULT_EXPLAIN'		=> ' “はい” を選択すると、追加されたユーザーのデフォルトグループがこのグループに設定されます',
	'USER_GROUP_LEADER'			=> 'グループリーダーに任命する',
));
