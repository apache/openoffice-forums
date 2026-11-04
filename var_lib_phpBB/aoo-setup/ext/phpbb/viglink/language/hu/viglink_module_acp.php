<?php
/**
 *
 * VigLink extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Magyar fordítás (c) 2007-2020 „Magyar phpBB Közösség fordítók”,
 * http://phpbb.hu
 *
 * $Id$
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_VIGLINK_SETTINGS'			=> 'VigLink beállítások',
	'ACP_VIGLINK_SETTINGS_EXPLAIN'	=> 'A VigLink egy harmadik fél által nyújtott szolgáltatás, amivel monetizálni lehet a hozzászólásokban szereplő linkeket a felhasználói élmény megváltoztatása nélkül. Ha egy felhasználó rákattint egy, a fórumodról egy másik oldalra mutató linkre, és azon az oldalon egy terméket vagy szolgáltatást vásárol, azután a kereskedő jutalékot fizet a VigLink-nek, aminek egy részét a phpBB.com projektnek adományozzák. A VigLink kiterjesztés engedélyezésével és a phpBB.com projektnek történő adományozással a nyílt forráskódú szervezetüket támogatod és hozzájárulsz anyagi biztonságuk fenntartásához.', //? "VigLink is third-party service that discretely monetises links posted by users of your forum without any change to the user experience. When users click on your outbound links to products or services and buy something, the merchants pay VigLink a commission, of which a share is donated to the phpBB project. By choosing to enable VigLink and donating proceeds to the phpBB project, you are supporting our open source organisation and ensuring our continued financial security."
	'ACP_VIGLINK_SETTINGS_CHANGE'	=> 'Ezeket a beállításokat bármikor megváltoztathatod a “<a href="%1$s">VigLink beállítások</a>” oldalon.',
	'ACP_VIGLINK_SUPPORT_EXPLAIN'	=> 'Miután az Elküld gomra kattintva elmentetted a megfelelő beállításokat, többé nem kerülsz átirányításra erre az oldalra.',
	'ACP_VIGLINK_ENABLE'			=> 'VigLink engedélyezése',
	'ACP_VIGLINK_ENABLE_EXPLAIN'	=> 'Engedélyezi a VigLink szolgáltatásainak használatát.',
	'ACP_VIGLINK_EARNINGS'			=> 'Igényeld a linkek után járó jutalékod (választható)', //? "Claim your own earnings (optional)"
	'ACP_VIGLINK_EARNINGS_EXPLAIN'  => 'A jutalékod egy VigLink Convert fiók létrehozásával igényelheted.',
	'ACP_VIGLINK_DISABLED_PHPBB'	=> 'A phpBB letiltotta a VigLink szolgáltatásokat.',
	'ACP_VIGLINK_CLAIM'				=> 'Igényeld a jutalékod', //? "Claim your earnings"
	'ACP_VIGLINK_CLAIM_EXPLAIN'		=> 'Ahelyett, hogy a phpBB.com projektnek ajánlanád fel, saját magadnak is igényelheted a VigLink által monetizált hivatkozások után járó jutalékot. A beállításaid megváltoztatásához hozz létre egy “VigLink Convert” fiókot a “Convert fiók” hivatkozásra történő kattintással.',
	'ACP_VIGLINK_CONVERT_ACCOUNT'	=> 'Convert fiók',
	'ACP_VIGLINK_NO_CONVERT_LINK'	=> 'A VigLink Convert fiók hivatkozást nem sikerült lekérni.' //? "VigLink convert account link could not be retrieved."
));
