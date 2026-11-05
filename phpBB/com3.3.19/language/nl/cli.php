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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_APCU_CACHE_NOTICE'				=> 'APCu buffer moet via het Beheerderspaneel worden geleegd.',
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Stel deze optie in als de configuratie opties te vaak veranderen om efficiënt te worden gecached.',
	'CLI_CONFIG_CURRENT'				=> 'Bestaande configuratiewaarde, gebruik 0 en 1 om booleanwaardes te specificeren.',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Config %s succesvol verwijderd.',
	'CLI_CONFIG_NEW'					=> 'Nieuwe configuratiewaarde, gebruik 0 en 1 om booleanwaardes te specificeren.',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Config %s bestaat niet',
	'CLI_CONFIG_OPTION_NAME'			=> 'De configuratie-optienaam',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Stel deze optie in als de waarde geprint dient te worden zonder een nieuwe regel op het einde.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Aantal om bij verhoging toe te voegen',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Config %s succesvol verhoogd',
	'CLI_CONFIG_SET_FAILURE'		 	=> 'Kan config %s niet instellen',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Config %s succesvol ingesteld',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Geeft een lijst weer van voltooide en openstaande cronjobs.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Draait al cronjobs die klaar zijn.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Naam van de taak die moet worden uitgevoerd',
	'CLI_DESCRIPTION_DB_LIST'					=> 'Geef alle geïnstalleerde en beschikbare migraties weer.',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Actualiseert de database door het toepassen van migraties.',
	'CLI_DESCRIPTION_DB_REVERT'					=> 'Maak een migratie ongedaan.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Verwijdert een configuratie-optie',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Schakelt de gespecificeerde extensie uit.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Schakelt de gespecificeerde extensie in.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Vind migraties waar niet op wordt gesteund.',
	'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'			=> 'Repareert de structuur voor forums en modules.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Verkrijgt een configuratie-optie waarde',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Verhoogt een configuratie-optie waarde',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Lijst met alle extensies in de database en bestandssysteem.',

	'CLI_DESCRIPTION_OPTION_ENV'				=> 'Naam van de omgeving',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'In Safe Mode draaien (zonder extensies).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Shell-toegang openen…',

	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Leegt de gespecificeerde extensie.',

	'CLI_DESCRIPTION_REPARSER_LIST'				=> 'Geef de teksttypen weer welke opnieuw geparsed kunnen worden.',
	'CLI_DESCRIPTION_REPARSER_AVAILABLE'				=> 'Beschikbare herparsers:',
	'CLI_DESCRIPTION_REPARSER_REPARSE'			=> 'Parse opgeslagen tekst opnieuw met de huidige opmaakservices.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'	=> 'Teksttype om opnieuw te parsen. Laat leeg om alles opnieuw te parsen.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> 'Sla geen wijzigingen op; geef alleen weer wat er zou gebeuren.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> 'Laagste record ID om te verwerken',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> 'Hoogste record ID om te verwerken',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> 'Geschat aantal records om per keer te verwerken',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> 'Start opnieuw parsen op het punt dat de vorige operatie stopte.',

	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> 'Stelt een configuratie-optie waarde alleen in, als de oude waarde overeenkomt met de nieuwe waarde.',
	'CLI_DESCRIPTION_SET_CONFIG'				=> 'Stelt een configuratie-optie waarde in',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'		=> 'Verwijder alle thumbnails.',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'	=> 'Genereer alle missende thumbnails.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'	=> 'Genereer alle thumbnails opnieuw.',

	'CLI_DESCRIPTION_UPDATE_CHECK'				=> 'Controleer of de installie bijgewerkt is naar de laatste versie.',
	'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'		=> 'Naam van de te controleren extensie (of alle extensies)',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'		=> 'Draai de controle vanuit de cache',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY'	=> 'Voer controle uit op alleen stabiele of ook instabiele versies.',

	'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT'		=> 'Update verouderde hashes van wachtwoorden naar bcrypt.',

	'CLI_ERROR_INVALID_STABILITY' => '"%s" moet veranderd worden naar "stable" of "unstable".',

	'CLI_DESCRIPTION_USER_ACTIVATE'				=> 'Activeer (of deactiveer) een account.',
	'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'	=> 'Gebruikersnaam van het te activeren account.',
	'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'	=> 'Deactiveer account van gebruiker',
	'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'		=> 'Dit gebruikersaccount is al actief.',
	'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'	=> 'Dit gebruikersaccount is al inactief.',
	'CLI_DESCRIPTION_USER_ADD'					=> 'Voeg een nieuwe gebruiker toe.',
	'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'	=> 'Gebruikersnaam van de nieuwe gebruiker',
	'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'	=> 'Wachtwoord van de nieuwe gebruiker',
	'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'		=> 'E-mailadres van de nieuwe gebruiker',
	'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'	=> 'Verstuur accountactivatie-mail naar gebruiker (standaard uitgeschakeld)',
	'CLI_DESCRIPTION_USER_DELETE'				=> 'Verwijder een gebruikersaccount',
	'CLI_DESCRIPTION_USER_DELETE_USERNAME'		=> 'Gebruikernaam van het te verwijderen account',
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'	=> 'Verwijder alle berichten van deze gebruiker. Wanneer niet geselecteerd zullen alle berichten bewaard blijven.',
	'CLI_DESCRIPTION_USER_RECLEAN'				=> 'Opschonen gebruikersnamen.',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Kan de extensie %s niet uitschakelen',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Extensie %s succesvol uitgeschakeld',
	'CLI_EXTENSION_DISABLED'		=> 'Extensie %s is niet ingeschakeld',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Kan de extensie %s niet inschakelen',
	'CLI_EXTENSION_NOT_EXIST'		=> 'Extensie %s bestaat niet',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Extensie %s succesvol ingeschakeld',
	'CLI_EXTENSION_ENABLED'				=> 'Extensie %s is al ingeschakeld',
	'CLI_EXTENSION_NAME'				=> 'Naam van de extensie',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Kan extensie %s niet legen',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Extensie %s succesvol geleegd',
	'CLI_EXTENSION_UPDATE_FAILURE'		=> 'Kon de extensie %s niet bijwerken',
	'CLI_EXTENSION_UPDATE_SUCCESS'		=> 'Extensie %s succesvol bijgewerkt',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Geen extensies gevonden.',
	'CLI_EXTENSION_NOT_ENABLEABLE'		=> 'Extensie %s is niet beschikbaar.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Beschikbaar',
	'CLI_EXTENSIONS_DISABLED'			=> 'Uitgeschakeld',
	'CLI_EXTENSIONS_ENABLED'			=> 'Ingeschakeld',

	'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'		=> 'Structuur van forums en modules succesvol gerepareerd.',
	'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'		=> 'Verouderde hashes van wachtwoorden succesvol bijgewerkt naar bcrypt.',

	'CLI_MIGRATION_NAME'					=> 'Migratienaam, inclusief namespace (gebruik slash (/) in plaats van backslash om problemen te voorkomen).',
	'CLI_MIGRATIONS_AVAILABLE'				=> 'Beschikbare migraties',
	'CLI_MIGRATIONS_INSTALLED'				=> 'Geïnstalleerde migraties',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'			=> 'Toon alleen beschikbare migraties',
	'CLI_MIGRATIONS_EMPTY'				  => 'Geen migraties.',

	'CLI_REPARSER_REPARSE_REPARSING'		=> 'Opnieuw parsen %1$s (bereik %2$d..%3$d)',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> 'Opnieuw parsen %s...',
	'CLI_REPARSER_REPARSE_SUCCESS'			=> 'Opnieuw parsen succesvol beëindigd',

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'		=> '%1$s (%2$s) verwijderd.',
	'CLI_THUMBNAIL_DELETING'	=> 'Verwijderen thumbnails',
	'CLI_THUMBNAIL_SKIPPED'		=> '%1$s (%2$s) overgeslagen.',
	'CLI_THUMBNAIL_GENERATED'	=> '%1$s (%2$s) gegenereerd.',
	'CLI_THUMBNAIL_GENERATING'	=> 'Genereren thumbnails',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> 'Alle thumbnails zijn opnieuw gegenereerd.',
	'CLI_THUMBNAIL_DELETING_DONE'	=> 'Alle thumbnails zijn verwijderd.',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> 'Geen thumbnails om te genereren.',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> 'Geen thumbnails om te verwijderen.',

	'CLI_USER_ADD_SUCCESS'		=> 'Gebruiker %s is succesvol toegevoegd.',
	'CLI_USER_DELETE_CONFIRM'	=> 'Weet je zeker dat je gebruiker ‘%s’ wil verwijderen? [y/N]',
	'CLI_USER_RECLEAN_START'	=> 'Opschonen gebruikersnamen',
	'CLI_USER_RECLEAN_DONE'		=> [
		0	=> 'Opschonen klaar. Geen gebruikersnamen hoefden opgeschoond te worden.',
		1	=> 'Opschonen klaar. %d gebruikersnaam was opgeschoond.',
		2	=> 'Opschonen klaar. %d gebruikersnamen waren opgeschoond.',
	],
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'					=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' Hier kun je eventueel een cronjobnaam opgeven, zodat de speciefieke cronjob gedraaid kan worden.',
	'CLI_HELP_USER_ACTIVATE'		=> 'Activeer een gebruikersaccount of deactiveer een account met de optie <info>--deactivate</info>.
	Gebruik de optie <info>--send-email</info> om hierbij ook een activatie-e-mail te sturen.',
	'CLI_HELP_USER_ADD'					=> 'Het <info>%command.name%</info> commando voegt de nieuwe gebruiker toe:
	Als dit commando wordt gebruikt zonder het toevoegen van opties zal je hier alsnog naar gevraagd worden.
	Gebruik de optie <info>--send-email</info> om ook een activatie-e-mail naar de nieuwe gebruiker te sturen.',
	'CLI_HELP_USER_RECLEAN'		=> 'Het opschonen van gebruikersnamen controleert alle gebruikersnamen in de database en zorgt ervoor dat schone varianten worden gebruikt. Schone gebruiksnamen bevatten geen hoofdletters, zijn NFC genormaliseerd en getransformeerd naar ASCII-formaat.',
));
