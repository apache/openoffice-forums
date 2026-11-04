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

/**
*	EXTENSION-DEVELOPERS PLEASE NOTE
*
*	You are able to put your permission sets into your extension.
*	The permissions logic should be added via the 'core.permissions' event.
*	You can easily add new permission categories, types and permissions, by
*	simply merging them into the respective arrays.
*	The respective language strings should be added into a language file, that
*	start with 'permissions_', so they are automatically loaded within the ACP.
*/

$lang = array_merge($lang, array(
	'ACL_CAT_ACTIONS'		=> 'Műveletek',
	'ACL_CAT_CONTENT'		=> 'Tartalom',
	'ACL_CAT_FORUMS'		=> 'Fórumok',
	'ACL_CAT_MISC'			=> 'Egyéb', //? Vegyes
	'ACL_CAT_PERMISSIONS'	=> 'Jogosultságok',
	'ACL_CAT_PM'			=> 'Privát üzenetek',
	'ACL_CAT_POLLS'			=> 'Szavazás',
	'ACL_CAT_POST'			=> 'Hozzászólás',
	'ACL_CAT_POST_ACTIONS'	=> 'Hozzászólás műveletek',
	'ACL_CAT_POSTING'		=> 'Üzenetküldés',
	'ACL_CAT_PROFILE'		=> 'Profil',
	'ACL_CAT_SETTINGS'		=> 'Beállítások',
	'ACL_CAT_TOPIC_ACTIONS'	=> 'Téma műveletek',
	'ACL_CAT_USER_GROUP'	=> 'Felhasználók és csoportok', //? túl hosszú, itt már tényleg nem mindig fér ki
));

// User Permissions
$lang = array_merge($lang, array(
	'ACL_U_VIEWPROFILE'	=> 'Láthatja a profilokat, a taglistát és jelenlévők listáját',
	'ACL_U_CHGNAME'		=> 'Megváltoztathatja a felhasználónevét',
	'ACL_U_CHGPASSWD'	=> 'Megváltoztathatja a jelszavát',
	'ACL_U_CHGEMAIL'	=> 'Megváltoztathatja az e-mail címét',
	'ACL_U_CHGAVATAR'	=> 'Megváltoztathatja az avatarát',
	'ACL_U_CHGGRP'		=> 'Megváltoztathatja az elsődleges csoportját',
	'ACL_U_CHGPROFILEINFO'	=> 'Megváltoztathatja a profil mezőket', //? Can change profile field information

	'ACL_U_ATTACH'		=> 'Csatolhat állományokat',
	'ACL_U_DOWNLOAD'	=> 'Letölthet állományokat',
	'ACL_U_SAVEDRAFTS'	=> 'Elmenthet piszkozatokat',
	'ACL_U_CHGCENSORS'	=> 'Kikapcsolhatja a szócenzúrát',
	'ACL_U_SIG'			=> 'Használhat aláírást',
	'ACL_U_EMOJI'		=> 'Használhat emojit és speciális karaktereket a téma címében', //? rich text charachters

	'ACL_U_SENDPM'		=> 'Küldhet privát üzenetet',
	'ACL_U_MASSPM'		=> 'Küldhet privát üzenetet egyszerre több felhasználónak',
	'ACL_U_MASSPM_GROUP'=> 'Küldhet privát üzenetet csoportoknak',
	'ACL_U_READPM'		=> 'Olvashatja a privát üzeneteit',
	'ACL_U_PM_EDIT'		=> 'Szerkesztheti a saját privát üzeneteit',
	'ACL_U_PM_DELETE'	=> 'Privát üzeneteit törölheti a  a saját mappájából',
	'ACL_U_PM_FORWARD'	=> 'Privát üzeneteit továbbküldheti',
	'ACL_U_PM_EMAILPM'	=> 'Privát üzeneteit e-mailben elküldheti',
	'ACL_U_PM_PRINTPM'	=> 'Privát üzeneteit kinyomtathatja',
	'ACL_U_PM_ATTACH'	=> 'Privát üzeneteihez csatolhat állományt',
	'ACL_U_PM_DOWNLOAD'	=> 'Privát üzeneteiből letölthet állományokat',
	'ACL_U_PM_BBCODE'	=> 'Privát üzeneteiben használhat BBCode-ot',
	'ACL_U_PM_SMILIES'	=> 'Privát üzeneteiben használhat emotikonokat',
	'ACL_U_PM_IMG'		=> 'Privát üzeneteiben használhatja az [img] BBCode címkét',
	'ACL_U_PM_FLASH'	=> 'Privát üzeneteiben használhatja a [flash] BBCode címkét',

	'ACL_U_SENDEMAIL'	=> 'Küldhet e-mailt',
	'ACL_U_SENDIM'		=> 'Küldhet azonnali üzenetet',
	'ACL_U_IGNOREFLOOD'	=> 'Figyelmen kívül hagyhatja a flood időközt', //? figyelmen kívül hagy - mellőz?
	'ACL_U_HIDEONLINE'	=> 'Elrejtheti a jelenlétét',
	'ACL_U_VIEWONLINE'	=> 'Láthatja a rejtett jelenlévő felhasználókat',
	'ACL_U_SEARCH'		=> 'Kereshet a fórumon',
));

// Forum Permissions
$lang = array_merge($lang, array(
	'ACL_F_LIST'		=> 'Láthatja a fórumot',
	'ACL_F_LIST_TOPICS' => 'Láthatja a témákat',
	'ACL_F_READ'		=> 'Olvashatja a fórumot', //?
	'ACL_F_SEARCH'		=> 'Kereshet a fórumban',
	'ACL_F_SUBSCRIBE'	=> 'Feliratkozhat a fórumra',
	'ACL_F_PRINT'		=> 'Kinyomtathatja a témákat',
	'ACL_F_EMAIL'		=> 'Küldhet értesítő e-mailt a témákról', //? "Can e-mail topics"
	'ACL_F_BUMP'		=> 'Előreugraszhatja témáit',
	'ACL_F_USER_LOCK'	=> 'Lezárhatja saját témáit',
	'ACL_F_DOWNLOAD'	=> 'Letölthet állományt',
	'ACL_F_REPORT'		=> 'Jelenthet hozzászólást',

	'ACL_F_POST'		=> 'Nyithat új témát',
	'ACL_F_STICKY'		=> 'Nyithat kiemelt témát',
	'ACL_F_ANNOUNCE'	=> 'Írhat közleményt',
	'ACL_F_ANNOUNCE_GLOBAL'	=> 'Írhat globális közleményt',
	'ACL_F_REPLY'		=> 'Válaszolhat a témákban',
	'ACL_F_EDIT'		=> 'Szerkesztheti saját hozzászólásait',
	'ACL_F_DELETE'		=> 'Véglegesen törölheti saját hozzászólásait',
	'ACL_F_SOFTDELETE'	=> 'Visszaállíthatóan törölheti saját hozzászólásait<br /><em>Azok a moderátorok, akiknek van hozzászólás jóváhagyási jogosultságuk, visszaállíthatják az így törölt hozzászólásokat.</em>',
	'ACL_F_IGNOREFLOOD' => 'Figyelmen kívül hagyhatja a flood időközt',
	'ACL_F_POSTCOUNT'	=> 'Hozzászólásainak számának növelése<br /><em>Kérjük, vedd figyelembe, hogy ez csak az új hozzászólásokra van hatással.</em>', //? "Increment post counter"
	'ACL_F_NOAPPROVE'	=> 'Hozzászólhat jóváhagyás nélkül',

	'ACL_F_ATTACH'		=> 'Csatolhat állományt',
	'ACL_F_ICONS'		=> 'Használhat hozzászólás/téma ikont',
	'ACL_F_BBCODE'		=> 'Használhat BBCode-ot',
	'ACL_F_FLASH'		=> 'Használhatja a [flash] BBCode címkét',
	'ACL_F_IMG'			=> 'Használhatja az [img] BBCode címkét',
	'ACL_F_SIGS'		=> 'Használhat aláírást',
	'ACL_F_SMILIES'		=> 'Használhat emotikonokat',

	'ACL_F_POLL'		=> 'Készíthet szavazást',
	'ACL_F_VOTE'		=> 'Szavazhat a szavazásokban',
	'ACL_F_VOTECHG'		=> 'Megváltoztathatja a korábbi szavazatát',

	'ACL_F_POST'		=> 'Nyithat új témát',
	'ACL_F_REPLY'		=> 'Válaszolhat a témákban',
	'ACL_F_ICONS'		=> 'Használhat hozzászólás/téma ikont',
	'ACL_F_ANNOUNCE'	=> 'Küldhet közleményt',
	'ACL_F_STICKY'		=> 'Küldhet kiemelt témát',

	'ACL_F_POLL'		=> 'Készíthet szavazást',
	'ACL_F_VOTE'		=> 'Szavazhat a szavazásokban',
	'ACL_F_VOTECHG'		=> 'Megváltoztathatja a korábbi szavazatát',
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'ACL_M_EDIT'		=> 'Szerkesztheti a hozzászólásokat',
	'ACL_M_DELETE'		=> 'Véglegesen törölhet hozzászólásokat',
	'ACL_M_SOFTDELETE'	=> 'Visszaállíthatóan törölhet hozzászólásokat<br /><em>Azok a moderátorok, akiknek van hozzászólás jóváhagyási jogosultságuk, visszaállíthatják az így törölt hozzászólásokat.</em>',
	'ACL_M_APPROVE'		=> 'Jóváhagyhat és visszaállíthat hozzászólásokat',
	'ACL_M_REPORT'		=> 'Lezárhat és törölhet jelentéseket',
	'ACL_M_CHGPOSTER'	=> 'Megváltoztathatja a hozzászólások szerzőjét',

	'ACL_M_MOVE'	=> 'Áthelyezhet témákat',
	'ACL_M_LOCK'	=> 'Lezárhat témákat',
	'ACL_M_SPLIT'	=> 'Szétválaszthat témákat',
	'ACL_M_MERGE'	=> 'Összevonhat témákat',

	'ACL_M_INFO'	=> 'Megtekintheti a hozzászólás adatokat',
	'ACL_M_WARN'	=> 'Adhat figyelmeztetést<br /><em>Ez a jogosultság csak globálisan adható. Nem fórum alapú.</em>', // This moderator setting is only global (and not local)
	'ACL_M_PM_REPORT'	=> 'Lezárthatja és törölheti privát üzenetek jelentéseit.<br /><em>Ez a jogosultság csak globálisan adható. Nem fórum alapú.</em>', // This moderator setting is only global (and not local)
	'ACL_M_BAN'		=> 'Kezelheti a kitiltásokat<br /><em>Ez a jogosultság csak globálisan adható. Nem fórum alapú.</em>', // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'ACL_A_BOARD'		=> 'Megváltoztathatja a fórum beállításokat, láthatja a frissítések keresését', //? "Can alter board settings/check for updates"
	'ACL_A_SERVER'		=> 'Megváltoztathatja a szerver/kommunikációs beállításokat',
	'ACL_A_JABBER'		=> 'Megváltoztathatja a Jabber beállításokat',
	'ACL_A_PHPINFO'		=> 'Láthatja a PHP beállításokat',

	'ACL_A_FORUM'		=> 'Kezelheti a fórumokat',
	'ACL_A_FORUMADD'	=> 'Felvehet új fórumot',
	'ACL_A_FORUMDEL'	=> 'Törölhet fórumot',
	'ACL_A_PRUNE'		=> 'Megtisztíthat fórumot',

	'ACL_A_ICONS'		=> 'Módosíthatja a hozzászólás/téma ikonokat és az emotikonokat',
	'ACL_A_WORDS'		=> 'Módosíthatja a szócenzúrát',
	'ACL_A_BBCODE'		=> 'Felvehet BBCode címkéket',
	'ACL_A_ATTACH'		=> 'Megváltoztathatja a csatolmányokkal kapcsolatos beállításokat',

	'ACL_A_USER'		=> 'Kezelheti a felhasználókat<br /><em>Ebbe beletartozik, hogy a jelenlévők listájánál láthatja a felhasználók böngészőadatait.</em>',
	'ACL_A_USERDEL'		=> 'Törölheti/megtisztíthatja a felhasználókat',
	'ACL_A_GROUP'		=> 'Kezelheti a csoportokat',
	'ACL_A_GROUPADD'	=> 'Készíthet új csoportot',
	'ACL_A_GROUPDEL'	=> 'Törölhet csoportot',
	'ACL_A_RANKS'		=> 'Kezelheti a rangokat',
	'ACL_A_PROFILE'		=> 'Kezelheti az egyedi profil mezőket',
	'ACL_A_NAMES'		=> 'Kezelheti a letiltott neveket',
	'ACL_A_BAN'			=> 'Kezelheti a kitiltásokat',

	'ACL_A_VIEWAUTH'	=> 'Megtekintheti az effektív jogosultságokat',
	'ACL_A_AUTHGROUPS'	=> 'Módosíthatja a csoportok jogosultságait',
	'ACL_A_AUTHUSERS'	=> 'Módosíthatja a felhasználók jogosultságait',
	'ACL_A_FAUTH'		=> 'Módosíthatja a fórum jogosultság osztályt', //?? mit jelent?
	'ACL_A_MAUTH'		=> 'Módosíthatja a moderátori jogosultság osztályt',
	'ACL_A_AAUTH'		=> 'Módosíthatja az adminisztrátori jogosultság osztályt',
	'ACL_A_UAUTH'		=> 'Módosíthatja a felhasználói jogosultság osztályt',
	'ACL_A_ROLES'		=> 'Kezelheti a szerepeket',
	'ACL_A_SWITCHPERM'	=> 'Használhatja más jogosultságait',

	'ACL_A_STYLES'		=> 'Kezelheti a megjelenéseket',
	'ACL_A_EXTENSIONS'	=> 'Kezelheti a kiterjesztéseket',
	'ACL_A_VIEWLOGS'	=> 'Megtekintheti a naplókat',
	'ACL_A_CLEARLOGS'	=> 'Kiürítheti a naplókat',
	'ACL_A_MODULES'		=> 'Kezelheti a modulokat',
	'ACL_A_LANGUAGE'	=> 'Kezelheti a nyelvi csomagokat',
	'ACL_A_EMAIL'		=> 'Küldhet csoportos e-mailt',
	'ACL_A_BOTS'		=> 'Kezelheti a robotokat',
	'ACL_A_REASONS'		=> 'Kezelheti a jelentés/visszautasítás okokat',
	'ACL_A_BACKUP'		=> 'Kimentheti/visszaállíthatja az adatbázist',
	'ACL_A_SEARCH'		=> 'Kezelheti a kereső modulokat és beállításokat', //?
));
