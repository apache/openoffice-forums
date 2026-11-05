<?php
/**
*
* acp_posting [Japanese]
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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode はユーザーの利便性・システムの安全性のためにシステム側が用意した簡単なマークアップ言語です。ここでは BBCode の追加、削除、編集を行うことができます。',
	'ADD_BBCODE'				=> 'BBCode の追加',

	'BBCODE_DANGER'				=> 'トークン {TEXT} が HTMLタグ 内で使用されています。XSS 攻撃を受ける可能性があり、セキュリティ上非常に危険です。HTMLタグ 内ではより限定的な {SIMPLETEXT} または {INTTEXT} が使用されるべきです。この危険性を十分承知した上でどうしてもトークン {TEXT} を HTMLタグ 内で使用したい場合は “はい” をクリックしてください。',

	'BBCODE_DANGER'				=> '追加しようとしている BBCode は安全ではないようです。BBCode がデリケートなコンテキストで {TEXT} トークンを使用する場合は、代わりにより制限的なタイプを使用してみてください。 関連するリスクを承知している場合のみ続行してください。',
	'BBCODE_DANGER_PROCEED'		=> '続行する', //'I understand the risk',

	'BBCODE_ADDED'				=> 'BBCode の追加に成功しました',
	'BBCODE_EDITED'				=> 'BBCode の編集に成功しました',
	'BBCODE_DELETED'			=> 'BBCode の削除に成功しました',
	'BBCODE_NOT_EXIST'			=> 'BBCode が存在していません',
	'BBCODE_HELPLINE'			=> 'ヘルプライン',
	'BBCODE_HELPLINE_EXPLAIN'	=> '簡単な説明文を入力してください。投稿画面の BBCode ボタン上にマウスカーソルを移動させると表示されます。',
	'BBCODE_HELPLINE_TEXT'		=> 'ヘルプライン',
	'BBCODE_HELPLINE_TOO_LONG'	=> '入力した ヘルプライン が長すぎます',

	'BBCODE_INVALID_TAG_NAME'	=> 'その BBCode タグは既に存在しています',
	'BBCODE_INVALID'			=> 'BBCode作成 に問題があります',
	'BBCODE_INVALID_TEMPLATE'	=> 'BBCode のテンプレートが無効です',

	'BBCODE_TAG'				=> 'タグ',
	'BBCODE_TAG_TOO_LONG'		=> 'タグが長すぎます',
	'BBCODE_TAG_DEF_TOO_LONG'	=> '入力した タグ が長すぎます。タグを短くしてください。',
	'BBCODE_USAGE'				=> 'BBCode作成',
	'BBCODE_USAGE_EXAMPLE'		=> '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'BBCode の形を作成します。想定している入力文字の種類に応じて適切なトークン { } を使用してください （%sトークンについて%s）。',

	'EXAMPLE'				=> '例: ',
	'EXAMPLES'				=> '例: ',

	'HTML_REPLACEMENT'			=> 'HTML表現',
 	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> '作成した BBCode を HTML で表現します。BBCode作成 で使用したトークン { } を必ず用いるようにしてください。',

	'TOKEN'					=> 'トークン',
	'TOKENS'				=> 'トークンとは',
	'TOKENS_EXPLAIN'		=> 'トークン (token) の概念を一言で表現すればそれは “抽象化された代替物” です。 <em>トークン (token) の概念を例を用いて具体的に説明しましょう。明治時代初期、政府が誕生してからまだ日が浅かった為に日本で円は流通していませんでした。その当時の人々の経済はおそらく物々交換経済か、あるいは貨幣としてお米か金 （きん） を使用していたはずです。当時は治安が悪かったので、人々は安全の為により信用のおける資産家の蔵に自分のお米や金を預け（貸し）たいと考えたでしょう。お米か金を預かった資産家は借りた相手に当然 “借用書” を渡します。その “借用書” がトークンです。その借用書をその資産家に持って行きさえすればいつでもお米か金に交換する事ができたので、お米か金をその場で持っていなくても人々はその借用書で物を買ったり売ったりする事ができました。実際には借用書自体はただの紙切れに過ぎないにもかかわらず、その紙切れがまさにお米か金そのものであるかのように振舞っています。すなわち、“借用書という紙切れ” ＝ “お米や金の代替物” ＝ “お米や金のトークン” という事です。</em><br /><br />トークンとして使用可能な型は数値だけでなく、文字列（テキスト、メールアドレス、URL、HTMLカラー等）も使用できます。当然、文章作成の際に BBCode に入力する型とそれに対応するトークンの型は一致している必要があります。同じトークンを複数使用する場合は {TEXT1}, {TEXT2} のようにトークン名の後ろに数値を付け足してください。 BBCode を作成する際、language/ja ディレクトリ内の各ファイルで定義されている言語キーを {L_<em>&lt;STRINGNAME&gt;</em>} の形で使用する事ができます。例えば、トークン {L_WROTE} は “さんが書きました” に置換されます。<br /><br /><strong>※カスタム BBCode 内で使用できるトークンは、下記に列挙されているもののみです。</strong>',
	'TOKEN_DEFINITION'		=> '何のトークンか？',
	'TOO_MANY_BBCODES'		=> 'BBCode をこれ以上作成できません。BBCode を１つ以上削除してからもう一度作成してください。',

	'tokens'	=>	array(
		'TEXT'			=> 'テキスト文字（漢字、ひらがな、数字、特殊記号等を含むあらゆる文字）',
		'SIMPLETEXT'	=> '半角アルファベット(A-Z)、半角数字(0-9)、半角スペース、コンマ(,)、マイナス(-)、プラス(+)、ハイフン(-)、アンダーライン(_)',
		'INTTEXT'		=> 'ラテン系文字、半角数字(0-9)、半角スペース、コンマ(,)、マイナス(-)、プラス(+)、ハイフン(-)、アンダーライン(_)、ドット(.)、半角スペース( )',
		'IDENTIFIER'	=> '半角アルファベット(A-Z)、半角数字(0-9)、ハイフン(-)、アンダーライン(_)',
		'NUMBER'		=> '半角数字(0-9)',
		'EMAIL'			=> 'メールアドレス',
		'URL'			=> 'http, ftp など、許可されたプロトコルを含む絶対URL（JavaScript コード内では無視されます）。プロトコルが指定されなかった場合、“http://” が自動的に挿入されます。',
		'LOCAL_URL'		=> 'ローカルURL。この掲示板から見た相対的な URL です。サーバ名（ホストまたはドメイン）とプロトコルは含まれません。自動的に “%s” でプリフィクスされます。',
		'RELATIVE_URL'	=> '相対URL。必ずしも 相対URL である必要はなく、URL の一部分であれば問題ありません。完全な URL であっても問題ありません。この掲示板から見た相対的な URL を表したい場合は {LOCAL_URL} の方が便利です。',
		'COLOR'			=> 'HTMLカラー。<samp>#FF1234</samp> のような数値形式か、 <samp>fuchsia</samp> または <samp>InactiveBorder</samp> のような <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSSカラーキーワード</a> です。',
		'ALNUM'			=> '半角アルファベット (A-Z) と半角数字 (0-9)。',
		'CHOICE'		=> '指定された値からの選択。例: <samp>{CHOICE=spades,hearts,diamonds,clubs}</samp> 値はデフォルトで大文字小文字を区別しません。<samp>caseSensitive</samp> オプションを指定すると区別するようになります: <samp>{CHOICE=Spades,Hearts,Diamonds,Clubs;caseSensitive}</samp>',
		'FLOAT'			=> '小数値。例: <samp>0.5</samp>。',
		'HASHMAP'		=> '文字列を置換マッピングする型。形式: <samp>{HASHMAP=string1:replacement1,string2:replacement2}</samp> 大文字小文字を区別します。デフォルトでは未知の値はそのまま保持されます。',
		'INT'			=> '整数値。例: <samp>2</samp>。',
		'IP'			=> '有効な IPv4 または IPv6 アドレス。',
		'IPPORT'		=> 'ポート番号付きの有効な IPv4 または IPv6 アドレス。',
		'IPV4'			=> '有効な IPv4 アドレス。',
		'IPV6'			=> '有効な IPv6 アドレス。',
		'MAP'			=> '文字列を置換マッピングする型。形式: <samp>{MAP=string1:replacement1,string2:replacement2}</samp> 大文字小文字を区別しません。デフォルトでは未知の値はそのまま保持されます。',
		'RANGE'			=> '指定範囲内の整数値を受け付けます。例: <samp>{RANGE=-10,42}</samp>。',
		'REGEXP'		=> '指定された正規表現で値を検証します。例: <samp>{REGEXP=/^foo\w+bar$/}</samp>。',
		'TIMESTAMP'		=> '<samp>1h30m10s</samp> のようなタイムスタンプ表記を秒数に変換します。数値も受け付けます。',
		'UINT'			=> '符号なし整数値。<samp>{INT}</samp> と同じですが、0 未満の値は拒否されます。',
	),
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'ここではトピックアイコンの追加、削除、編集を行うことができます。これらのアイコンはフォーラム閲覧ページでトピックまたは返信記事の件名に並べて表示されます。アイコンパックのインポートと作成を行う事もできます。',
	'ACP_SMILIES_EXPLAIN'	=> 'スマイリー （別称: エモーションアイコン） は感情や気持ちを表現するために用いられる小さな画像です。ここではユーザーが記事とプライベートメッセージで使用できるスマイリーの作成、削除、編集を行うことができます。スマイリーパックのインポートと作成を行うこともできます。',
	'ADD_SMILIES'			=> 'スマイリーコードの追加',
	'ADD_SMILEY_CODE'		=> 'スマイリーコードの追加',
	'ADD_ICONS'				=> 'アイコンの追加',
	'AFTER_ICONS'			=> 'After %s',
	'AFTER_SMILIES'			=> 'After %s',

	'CODE'						=> 'コード',
	'CURRENT_ICONS'				=> '現在使用中のアイコン',
	'CURRENT_ICONS_EXPLAIN'		=> '現在使用しているアイコンについてどうするかを選択してください',
	'CURRENT_SMILIES'			=> '現在使用中のスマイリー',
	'CURRENT_SMILIES_EXPLAIN'	=> '現在使用しているスマイリーについてどうするかを選択してください',

	'DISPLAY_ON_POSTING'		=> '投稿画面で表示する',
	'DISPLAY_POSTING'			=> '投稿画面で表示',
	'DISPLAY_POSTING_NO'		=> '投稿画面で非表示',



	'EDIT_ICONS'				=> 'アイコンの編集',
	'EDIT_SMILIES'				=> 'スマイリーの編集',
	'EMOTION'					=> '意味',
	'EXPORT_ICONS'				=> 'icons.pak のエクスポート &amp; ダウンロード',
	'EXPORT_ICONS_EXPLAIN'		=> '%sこのリンクをクリックすると、インストール済みアイコンの設定が <samp>icons.pak</samp> としてパッケージ化されます。これをダウンロードすれば、すべてのアイコンと <samp>icons.pak</samp> 設定ファイルを含む <samp>.zip</samp> または <samp>.tgz</samp> ファイルを作成できます%s。',
	'EXPORT_SMILIES'			=> 'smilies.pak のエクスポート &amp; ダウンロード',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sこのリンクをクリックすると、インストール済みスマイリーの設定が <samp>smilies.pak</samp> としてパッケージ化されます。これをダウンロードすれば、すべてのスマイリーと <samp>smilies.pak</samp> 設定ファイルを含む <samp>.zip</samp> または <samp>.tgz</samp> ファイルを作成できます%s。',

	'FIRST'			=> 'First',

	'ICONS_ADD'				=> 'アイコンの追加',
	'ICONS_ADDED'			=> array(
		0	=> 'アイコンは追加されませんでした',
		1	=> 'アイコンの追加に成功しました',
	),
	'ICONS_CONFIG'			=> 'アイコン設定',
	'ICONS_DELETED'			=> 'アイコンの削除に成功しました',
	'ICONS_EDIT'			=> 'アイコンの編集',
	'ICONS_EDITED'			=> array(
		0	=> 'アイコンは更新されませんでした',
		1	=> 'アイコンの更新に成功しました',
	),
	'ICONS_HEIGHT'			=> '画像の高さ (pix)',
	'ICONS_IMAGE'			=> 'アイコン画像',
	'ICONS_IMPORTED'		=> 'アイコンパックのインポートに成功しました',
	'ICONS_IMPORT_SUCCESS'	=> 'アイコンパックのインポートに成功しました',
	'ICONS_LOCATION'		=> '画像ファイルへのパス',
	'ICONS_NOT_DISPLAYED'	=> '以下のアイコンは投稿画面で表示されません',
	'ICONS_ORDER'			=> 'アイコンの並び順',
	'ICONS_URL'				=> 'アイコン画像',
	'ICONS_WIDTH'			=> '画像の横幅 (pix)',
	'IMPORT_ICONS'			=> 'アイコンパックのインポート',
	'IMPORT_SMILIES'		=> 'スマイリーパックのインポート',

	'KEEP_ALL'			=> '上書きしない',

	'MASS_ADD_SMILIES'	=> 'スマイリーの追加',

	'NO_ICONS_ADD'		=> '追加できるアイコン画像がありません',
	'NO_ICONS_EDIT'		=> '修正できるアイコン画像がありません',
	'NO_ICONS_EXPORT'	=> 'アイコン画像が存在しないため、アイコンパックを作成する事ができません',
	'NO_ICONS_PAK'		=> 'アイコンパックが見つかりません',
	'NO_SMILIES_ADD'	=> '追加できるスマイリー画像がありません',
	'NO_SMILIES_EDIT'	=> '修正できるスマイリー画像がありません',
	'NO_SMILIES_EXPORT'	=> 'スマイリー画像が存在しないため、スマイリーパックを作成できません',
	'NO_SMILIES_PAK'	=> 'スマイリーパックが見つかりません',

	'PAK_FILE_NOT_READABLE'		=> 'パックファイル <samp>.pak</samp> のファイルアクセス権が読み込み不可になっています',

	'REPLACE_MATCHES'	=> '上書きする',

	'SELECT_PACKAGE'			=> 'パックファイルの選択',
	'SMILIES_ADD'				=> 'スマイリーの追加',
	'SMILIES_ADDED'				=> array(
		0	=> 'スマイリーは追加されませんでした',
		1	=> 'スマイリーの追加に成功しました',
	),
	'SMILIES_CODE'				=> 'スマイリーコード',
	'SMILIES_CONFIG'			=> 'スマイリー設定',
	'SMILIES_DELETED'			=> 'スマイリーの削除に成功しました',
	'SMILIES_EDIT'				=> 'スマイリーの編集',
	'SMILIES_EDITED'			=> array(
		0	=> 'スマイリーは更新されませんでした',
		1	=> 'スマイリーの更新に成功しました',
	),
	'SMILIE_NO_CODE'			=> 'コードが未入力だったため、スマイリー “%s” は無視されました',
	'SMILIE_NO_EMOTION'			=> '意味が未入力だったため、スマイリー “%s” は無視されました',
	'SMILIE_NO_FILE'			=> '画像ファイルが存在しないため、スマイリー “%s” は無視されました',
	'SMILIES_EMOTION'			=> '意味',
	'SMILIES_HEIGHT'			=> '画像の高さ (pix)',
	'SMILIES_IMAGE'				=> 'スマイリー画像',
	'SMILIES_IMPORTED'			=> 'スマイリーパックのインポートに成功しました',
	'SMILIES_IMPORT_SUCCESS'	=> 'スマイリーパックのインポートに成功しました',
	'SMILIES_LOCATION'			=> '画像ファイルへのパス',
	'SMILIES_NOT_DISPLAYED'		=> '以下のスマイリーは投稿画面のスマイリー欄に表示されません',
	'SMILIES_ORDER'				=> 'スマイリーの並び順',
	'SMILIES_URL'				=> 'スマイリー画像',
	'SMILIES_WIDTH'				=> '画像の横幅 (pix)',

	'TOO_MANY_SMILIES'			=> array(
		1	=> 'スマイリーが最大数 %d に達しています',
	),

	'WRONG_PAK_TYPE'	=> '指定したパック内のデータが適切なデータではありません',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'ここでは言語フィルタの追加、編集、削除を行うことができます。記事表示の際、記事内にフィルタ対象の言葉があればそれらは自動的に指定された言葉に置換されます。ユーザー登録の際、フィルタ対象の言葉をユーザー名に含める事は可能です。部分一致としてワイルドカード(*)を使用できます（例： *test* という言語フィルタの場合、detestable, detest といった言葉も置換します）。',
	'ADD_WORD'				=> '言語フィルタの追加',

	'EDIT_WORD'		=> '言語フィルタの編集',
	'ENTER_WORD'	=> '“対象” と “置換” の両方を入力する必要があります。',

	'NO_WORD'	=> '編集する言語フィルタが選択されていません。',

	'REPLACEMENT'	=> '置換',

	'UPDATE_WORD'	=> '言語フィルタの更新',

	'WORD'			=> '対象',
	'WORD_ADDED'		=> '言語フィルタの追加に成功しました',
	'WORD_REMOVED'		=> '言語フィルタの削除に成功しました',
	'WORD_UPDATED'		=> '言語フィルタの更新に成功しました',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'ここではランクの追加、編集、閲覧、削除を行うことができます。特別ランクを作成することもできます。特別ランクは AdminCP のユーザー管理を通してのみユーザーに割り当てる事が可能なランクです。特別ランクでないランクは投稿数に基づいてユーザーに自動的に割り当てられます。',
	'ADD_RANK'				=> 'ランクの追加',

	'MUST_SELECT_RANK'		=> 'ランクを選択する必要があります',

	'NO_ASSIGNED_RANK'		=> '特別ランクの割り当てはありません',
	'NO_RANK_TITLE'			=> 'ランク名を指定していません',
	'NO_UPDATE_RANKS'		=> 'ランクの削除に成功しました。しかしながらこのランクを持つユーザーのユーザー設定は更新されていません。ユーザーのランク割り当てはユーザー毎に設定し直す必要があります。',

	'RANK_ADDED'			=> 'ランクの追加に成功しました',
	'RANK_IMAGE'			=> 'ランク画像',
	'RANK_IMAGE_EXPLAIN'	=> 'ランク画像を指定してください。パスは phpBB ルートディレクトリから見た相対パスです。',
	'RANK_IMAGE_IN_USE'		=> '(使用中)',
	'RANK_MINIMUM'			=> '投稿数',
	'RANK_REMOVED'			=> 'ランクの削除に成功しました',
	'RANK_SPECIAL'			=> '特別ランクにする',
	'RANK_TITLE'			=> 'ランク名',
	'RANK_UPDATED'			=> 'ランクの更新に成功しました',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'		=> 'ここでは禁止ユーザー名の追加と解除を行うことができます。禁止ユーザー名をユーザー登録の際に使用する事はできません。部分一致としてワイルドカード(*)を使用できます。',
	'ADD_DISALLOW_EXPLAIN'		=> '部分一致としてワイルドカード(*)を使用できます。',
	'ADD_DISALLOW_TITLE'		=> '禁止ユーザー名の追加',

	'DELETE_DISALLOW_EXPLAIN'	=> 'ユーザー名を禁止ユーザー名リストから解除できます',
	'DELETE_DISALLOW_TITLE'		=> '禁止ユーザー名の解除',
	'DISALLOWED_ALREADY'		=> '入力したユーザー名は既に禁止されています',
	'DISALLOWED_DELETED'		=> '禁止ユーザー名の解除に成功しました',
	'DISALLOW_SUCCESSFUL'		=> '禁止ユーザー名の追加に成功しました',

	'NO_DISALLOWED'			=> '禁止ユーザー名はありません',
	'NO_USERNAME_SPECIFIED'		=> 'ユーザー名を指定していません',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'ここでは理由を管理できます。理由は ユーザーが投稿記事をモデレータに通報する時 と モデレータが記事の承認を却下する時 の選択肢として使用されます。デフォルト理由 (* でマークされています） は削除できません。デフォルト理由は該当する理由がない場合に使用されます。',
	'ADD_NEW_REASON'		=> '理由の追加',
	'AVAILABLE_TITLES'		=> 'ローカライズ済みの理由タイトル',

	'IS_NOT_TRANSLATED'			=> 'ローカライズされて<strong>いません</strong>',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'この理由はローカライズされて<strong>いません</strong>。つまりこの理由のタイトルと説明がそのままユーザーに表示されます。掲示板を利用するユーザーが日本語ユーザーのみなら理由のタイトルと説明が日本語でも問題ありませんが、そうでない場合は言語パック毎にローカライズしたほうが良いでしょう。ローカライズするには言語ファイル (language/｛言語パック名｝/mcp.php) に理由を追加してください。具体的には、report_reasons 配列内の各連想配列 TITLE と DESCRIPTION に値を追加する必要があります。',
	'IS_TRANSLATED'				=> 'ローカライズされています',
	'IS_TRANSLATED_EXPLAIN'		=> 'この理由はローカライズされています。つまり 理由タイトル と 理由の説明 が言語ファイル (language/ja/mcp.php) で定義されているため、その定義されたタイトルと説明が使用されます。',

	'NO_REASON'					=> '理由が見つかりません',
	'NO_REASON_INFO'			=> '理由タイトルと理由の説明の両方を入力する必要があります',
	'NO_REMOVE_DEFAULT_REASON'	=> '“Other” はデフォルト理由なので削除できません',

	'REASON_ADD'				=> '理由の追加',
	'REASON_ADDED'				=> '理由の追加に成功しました',
	'REASON_ALREADY_EXIST'		=> '入力した 理由タイトル は既に存在しています。別のタイトルを入力してください。',
	'REASON_DESCRIPTION'		=> '理由の説明',
	'REASON_DESC_TRANSLATED'	=> 'ユーザーに表示される 理由の説明',
	'REASON_EDIT'				=> '通報/却下 の理由の編集',
	'REASON_EDIT_EXPLAIN'		=> 'ここでは理由の追加と編集を行うことができます。理由がローカライズ済みの場合（言語ファイルで定義されている場合）はそちらが使用されます。',
	'REASON_REMOVED'			=> '理由の削除に成功しました',
	'REASON_TITLE'				=> '理由タイトル',
	'REASON_TITLE_TRANSLATED'	=> 'ユーザーに表示される 理由タイトル',
	'REASON_UPDATED'			=> '理由の更新に成功しました',

	'USED_IN_REPORTS'		=> '通報回数',
));
