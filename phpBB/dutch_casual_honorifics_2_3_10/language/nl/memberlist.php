<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>, phpBBservice.nl <http://www.phpbbservice.nl>, phpBB.nl <http://www.phpbb.nl>
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
	'ABOUT_USER'			=> 'Profiel',
	'ACTIVE_IN_FORUM'		=> 'Meest actief in forum',
	'ACTIVE_IN_TOPIC'		=> 'Meest actief in onderwerp',
	'ADD_FOE'				=> 'Vijand toevoegen',
	'ADD_FRIEND'			=> 'Vriend toevoegen',
	'AFTER'					=> 'Na',

	'ALL'					=> 'Alle',

	'BEFORE'				=> 'Voor',

	'CC_SENDER'				=> 'Stuur een kopie van deze e-mail naar jezelf.',
	'CONTACT_ADMIN'		=> 'Neem contact op met een forumbeheerder',

	'DEST_LANG'				=> 'Taal',
	'DEST_LANG_EXPLAIN'		=> 'Selecteer een taal voor de ontvanger van dit bericht indien beschikbaar.',

	'EDIT_PROFILE'			=> 'Wijzig profiel',

	'EMAIL_BODY_EXPLAIN'	=> 'Dit bericht wordt verzonden zonder opmaak, het heeft dus geen zin om HTML of BBcodes toe te voegen. Als afzender van dit bericht wordt je e-mailadres gebruikt.',
	'EMAIL_DISABLED'		=> 'Sorry maar alle aan e-mail gekoppelde functies zijn uitgeschakeld.',
	'EMAIL_SENT'			=> 'De e-mail is verstuurd.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Dit bericht wordt verzonden zonder opmaak, het heeft dus geen zin om HTML of BBcodes toe te voegen. Houd er rekening mee dat het onderwerp al aan het bericht is toegevoegd. Als afzender van dit bericht wordt je e-mailadres gebruikt.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Je moet een geldig e-mailadres opgeven voor de ontvanger.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Je moet een bericht ingevuld hebben om te e-mailen.',
	'EMPTY_MESSAGE_IM'		=> 'Je moet een bericht ingevuld hebben om te versturen.',
	'EMPTY_NAME_EMAIL'		=> 'Je moet de echte naam van de ontvanger invullen.',
	'EMPTY_SENDER_EMAIL'	=> 'Je moet een geldig e-mailadres opgeven.',
	'EMPTY_SENDER_NAME'	 => 'Je moet een naam opgeven.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Je moet een onderwerp specificeren voor de e-mail.',
	'EQUAL_TO'				=> 'Gelijk aan',

	'FIND_USERNAME_EXPLAIN'	=> 'Gebruik dit formulier om naar specifieke leden te zoeken. Je hoeft niet alle velden in te vullen. Gebruik de * als joker om gedeeltelijk te zoeken. Gebruik het formaat <kbd>JJJJ-MM-DD</kbd> voor datums, bijv. <samp>2004-02-29</samp>. Markeer de vinkboxen om één of meer gebruikersnamen te selecteren (afhankelijk van het formulier kunnen verschillende gebruikersnamen geaccepteerd worden) en klik op de "Selecteer gemarkeerden"-knop om terug te gaan naar het vorige formulier.',
	'FLOOD_EMAIL_LIMIT'		=> 'Je kunt momenteel niet nog een e-mail versturen. Probeer het later nog eens.',

	'GROUP_LEADER'			=> 'Groepsleider',

	'HIDE_MEMBER_SEARCH'	=> 'Verberg leden zoeken',

	'IM_ADD_CONTACT'		=> 'Contact toevoegen',
	'IM_DOWNLOAD_APP'		=> 'Download applicatie',
	'IM_JABBER'				=> 'Let op dat gebruikers kunnen hebben ingesteld dat ze geen ongevraagde chatberichten willen ontvangen.',
	'IM_JABBER_SUBJECT'		=> 'Dit is een geautomatiseerd bericht. Reageer hier niet op! Bericht van gebruiker %1$s op %2$s.',
	'IM_MESSAGE'			=> 'Je bericht',
	'IM_NAME'				=> 'Je naam',
	'IM_NO_DATA'			=> 'Er is geen geschikte contactinformatie voor deze gebruiker.',
	'IM_NO_JABBER'			=> 'Sorry, direct contacteren van Jabber-gebruikers wordt niet ondersteund op dit forum. Je zult een Jabber-cliënt op je systeem moeten gebruiken om contact met de ontvanger hierboven te kunnen opnemen.',
	'IM_RECIPIENT'			=> 'Ontvanger',
	'IM_SEND'				=> 'Verstuur bericht',
	'IM_SEND_MESSAGE'		=> 'Verstuur bericht',
	'IM_SENT_JABBER'		=> 'Je bericht naar %1$s is succesvol verstuurd.',
	'IM_USER'				=> 'Verstuur een bericht',

	'LAST_ACTIVE'				=> 'Laatst actief',
	'LESS_THAN'					=> 'Minder dan',
	'LIST_USERS'				=> array(
		1	=> '%d gebruiker',
		2	=> '%d gebruikers',
	),
	'LOGIN_EXPLAIN_TEAM'		=> 'Je moet geregistreerd en aangemeld zijn om de teamlijst te kunnen bekijken.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Je moet geregistreerd en aangemeld zijn om toegang te hebben tot de ledenlijst.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Je moet geregistreerd en aangemeld zijn om gebruikers te kunnen zoeken.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Je moet geregistreerd en aangemeld zijn om profielen te kunnen bekijken.',

	'MANAGE_GROUP'			=> 'Beheer groep',
	'MORE_THAN'				=> 'Meer dan',

	'NO_CONTACT_FORM'		=> 'Het contactformulier is uitgeschakeld.',
	'NO_CONTACT_PAGE'		=> 'De contactpagina is uitgeschakeld.',
	'NO_EMAIL'				=> 'Je hebt niet de permissies om deze gebruiker te e-mailen.',
	'NO_VIEW_USERS'			=> 'Je hebt niet de juiste permissies om de ledenlijst of profielen te bekijken.',

	'ORDER'					=> 'Volgorde',
	'OTHER'					=> 'Ander',

	'POST_IP'				=> 'Geplaatst van IP/domein',

	'REAL_NAME'				=> 'Ontvangersnaam',
	'RECIPIENT'				=> 'Ontvanger',
	'REMOVE_FOE'			=> 'Vijand verwijderen',
	'REMOVE_FRIEND'			=> 'Vriend verwijderen',

	'SELECT_MARKED'			=> 'Selecteer gemarkeerden',
	'SELECT_SORT_METHOD'	=> 'Selecteer sorteer methode',
	'SENDER_EMAIL_ADDRESS'	=> 'Je e-mailadres',
	'SENDER_NAME'			=> 'Je naam',
	'SEND_ICQ_MESSAGE'		=> 'Verstuur ICQ-bericht',
	'SEND_IM'				=> 'Instant messaging',
	'SEND_JABBER_MESSAGE'	=> 'Verstuur Jabber-bericht',
	'SEND_MESSAGE'			=> 'Bericht',
	'SEND_YIM_MESSAGE'		=> 'Verstuur YIM-bericht',
	'SORT_EMAIL'			=> 'E-mail',
	'SORT_LAST_ACTIVE'		=> 'Laatst actief',
	'SORT_POST_COUNT'		=> 'Berichten aantal',

	'USERNAME_BEGINS_WITH'	=> 'Gebruikersnaam begint met',
	'USER_ADMIN'			=> 'Beheer gebruiker',
	'USER_BAN'				=> 'Verban gebruiker',
	'USER_FORUM'			=> 'Gebruikersstatistieken',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Nog geen herinnering verstuurd',
		1		=> '%1$d herinnering verstuurd<br />» %2$s',
		2		=> '%1$d herinneringen verstuurd<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Online',
	'USER_PRESENCE'			=> 'Forumvoorkeuren',
	'USERS_PER_PAGE'		=> 'Gebruikers per pagina',

	'VIEWING_PROFILE'		=> 'Bekijkt profiel - %s',
	'VIEW_FACEBOOK_PROFILE'		=> 'Bekijk Facebook-profiel',
	'VIEW_SKYPE_PROFILE'			=> 'Bekijk Skype-profiel',
	'VIEW_TWITTER_PROFILE'		=> 'Bekijk Twitter-profiel',
	'VIEW_YOUTUBE_CHANNEL'			=> 'Bekijk YouTube-kanaal',
));
