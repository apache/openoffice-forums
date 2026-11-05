<?php
/**
 *
 * VigLink extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
 * @copyright (c) 2014 phpBBItalia.net <https://www.phpbbitalia.net>
 * @copyright (c) 2021 phpBB-Italia.it <https://www.phpbb-italia.it>
 * @license GNU General Public License, version 2 (GPL-2.0)
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_VIGLINK_SETTINGS'			=> 'Impostazioni VigLink',
	'ACP_VIGLINK_SETTINGS_EXPLAIN'	=> 'VigLink è un servizio di terze parti che monetizza discretamente i link inseriti dagli utenti del tuo forum senza alcun cambiamento per gli utenti stessi. Quando gli utenti fanno click sul tuo link in uscita verso prodotti o servizi per comprare qualcosa, i commercianti pagano a VigLink una commissione, di cui una quota è devoluta al progetto phpBB. Scegliendo di consentire VigLink e donare il ricavato al progetto phpBB, si sta sostenendo la nostra organizzazione open source garantendo la nostra sicurezza finanziaria continua.',
	'ACP_VIGLINK_SETTINGS_CHANGE'	=> 'Puoi modificare queste impostazioni in qualsiasi momento nel pannello “<a href="%1$s">Impostazioni VigLink</a>”.',
	'ACP_VIGLINK_SUPPORT_EXPLAIN'	=> 'Non sarai più reindirizzato in questa pagina dopo aver inviato le opzioni preferite qui sotto, facendo click sul pulsante Invia.',
	'ACP_VIGLINK_ENABLE'			=> 'Abilita VigLink',
	'ACP_VIGLINK_ENABLE_EXPLAIN'	=> 'Abilita l’uso dei servizi di VigLink.',
	'ACP_VIGLINK_EARNINGS'			=> 'Richiedi i tuoi guadagni (opzionale)',
	'ACP_VIGLINK_EARNINGS_EXPLAIN'  => 'Puoi richiedere i tuoi guadagni iscrivendoti per un account VigLink Convert.',
	'ACP_VIGLINK_DISABLED_PHPBB'	=> 'I servizi di VigLink sono stati disattivati da phpBB.',
	'ACP_VIGLINK_CLAIM'				=> 'Richiedi i tuoi guadagni',
	'ACP_VIGLINK_CLAIM_EXPLAIN'		=> 'È possibile richiedere i guadagni del tuo forum monetizzate dai link VigLink, invece di donare i guadagni al progetto phpBB. Per gestire le impostazioni dell’account, registrarsi per un account "VigLink Convert" cliccando su "Converti account".',
	'ACP_VIGLINK_CONVERT_ACCOUNT'	=> 'Converti account',
	'ACP_VIGLINK_NO_CONVERT_LINK'	=> 'Non è stato possibile recuperare il link di conversione dell’account VigLink.'
));
