<?php
/**
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 óra',
	'30_MINS'		=> '30 perc',
	'6_HOURS'		=> '6 óra',

	'ACP_BAN_EXPLAIN'	=> 'Itt a felhasználók kitiltását tudod irányítani felhasználónév, IP vagy e-mail cím szerint. Ezzel a felhasználó nem fogja tudni elérni a fórum semelyik részét se. A kitiltás mellé mellékelheted annak az okát is röviden összefoglalva (legfeljebb 3000 karakterben), ez meg fog jelenni az adminisztrátori naplóban. A kitiltás időtartama is meghatározható. Ha nem egy időtartamot szeretnél megadni, hanem azt szeretnéd, hogy egy adott napig tartson a kitiltás, válaszd ki az <span style="text-decoration: underline;">Eddig -&gt;</span> választási lehetőséget, és a megjelenő mezőben add meg a dátumot <kbd>ÉÉÉÉ-HH-NN</kbd> formátumban.',

	'BAN_EXCLUDE'			=> 'Feloldás a kitiltás alól',
	'BAN_LENGTH'			=> 'Kitiltás időtartama',
	'BAN_REASON'			=> 'Kitiltás oka',
	'BAN_GIVE_REASON'		=> 'Kitiltottnak megjelenő ok',
	'BAN_UPDATE_SUCCESSFUL'	=> 'A kitiltottak listája sikeresen frissítésre került.',
	'BANNED_UNTIL_DATE'		=> '%s-ig', // Example: "until Mon 13.Jul.2009, 14:44"
	'BANNED_UNTIL_DURATION'	=> '%1$s (%2$s-ig)', // Example: "7 days (until Tue 14.Jul.2009, 14:44)" //? '%1$sig (%2$s-ig)'

	'EMAIL_BAN'					=> 'E-mail címek kitiltása',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Ha igenre állítod, a megadott e-mail címek minden jelenlegi kitiltás alól mentesítve lesznek.', //?
	'EMAIL_BAN_EXPLAIN'			=> 'Egynél több e-mail címet mindegyiket új sorba írva tudsz megadni. Részleges illeszkedéshez használd a * jokerkaraktert, pl. <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp> stb.', //?
	'EMAIL_NO_BANNED'			=> 'Nincs kitiltott e-mail cím.',
	'EMAIL_UNBAN'				=> 'E-mail címek kitiltásának vagy feloldásának megszüntetése', //?
	'EMAIL_UNBAN_EXPLAIN'		=> 'Egyszerre több e-mail cím kitiltását vagy feloldását is megszüntetheted az egered és a billentyűzeted a böngésződnek megfelelő kombinációjának használatával. A kitiltások alól feloldott e-mail címek ki vannak emelve.',

	'IP_BAN'					=> 'IP-címek kitiltása',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Ha igenre állítod, a megadott IP-címek minden jelenlegi kitiltás alól mentesítve lesznek.',
	'IP_BAN_EXPLAIN'			=> 'Egynél több IP-címet vagy hosztnevet mindegyiket új sorba írva tudsz megadni. IP-cím tartomány megadásához használj kötőjelet (-), valamint használhatod a * jokerkaraktert.',
	'IP_HOSTNAME'				=> 'IP-címek vagy hosztnevek',
	'IP_NO_BANNED'				=> 'Nincs kitiltott IP-cím.',
	'IP_UNBAN'					=> 'IP címek, illetve hosztnevek kitiltásának vagy feloldásának megszüntetése',
	'IP_UNBAN_EXPLAIN'			=> 'Egyszerre több IP-cím kitiltását vagy feloldását is megszüntetheted az egered és a billentyűzeted a böngésződnek megfelelő kombinációjának használatával. A kitiltások alól feloldott IP-címek ki vannak emelve.',

	'LENGTH_BAN_INVALID'		=> 'A dátumot <kbd>ÉÉÉÉ-HH-NN</kbd> formátumban kell megadni.',

	'OPTIONS_BANNED'			=> 'Kitiltott',
	'OPTIONS_EXCLUDED'			=> 'Kihagyott', //? excluded

	'PERMANENT'		=> 'Tartós', //? állandó, végleges

	'UNTIL'						=> 'Eddig',
	'USER_BAN'					=> 'Felhasználók kitiltása',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Ha igenre állítod, a megadott felhasználók minden jelenlegi kitiltás alól mentesítve lesznek.',
	'USER_BAN_EXPLAIN'			=> 'Egyszerre több felhasználót is kitilthatsz, mindegyik nevét új sorba írva. A <span style="text-decoration: underline;">Felhasználó keresése</span> funkció segítségével könnyen rákereshetsz felhasználókra, és beillesztheted őket a listába. ',
	'USER_NO_BANNED'			=> 'Nincs kitiltott felhasználó.',
	'USER_UNBAN'				=> 'Felhasználók kitiltásának vagy feloldásának megszüntetése',
	'USER_UNBAN_EXPLAIN'		=> 'Egyszerre több felhasználó kitiltását vagy feloldását is megszüntetheted az egered és a billentyűzeted a böngésződnek megfelelő kombinációjának használatával. A kitiltások alól feloldott felhasználók ki vannak emelve.',


));
