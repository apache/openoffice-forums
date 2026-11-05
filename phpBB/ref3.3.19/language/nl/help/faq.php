<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>, phpBB.nl <http://www.phpbb.nl>, phpBBservice.nl <http://www.phpbbservice.nl>
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

$lang = array_merge($lang, array(
	'HELP_FAQ_ATTACHMENTS_ALLOWED_ANSWER'	=> 'De beheerder bepaalt welke bestandstypes al dan niet toegestaan worden. Als je niet zeker bent welke bestanden geüpload mogen worden, neem dan contact op met de beheerder voor verdere informatie.',
	'HELP_FAQ_ATTACHMENTS_ALLOWED_QUESTION'	=> 'Welke bijlagen worden toegestaan op dit forum?',
	'HELP_FAQ_ATTACHMENTS_OWN_ANSWER'	=> 'Je vindt een lijst met al je geüploade bijlagen via het gebruikerspaneel, volg hier de links naar het gedeelte omtrent bijlagen.',
	'HELP_FAQ_ATTACHMENTS_OWN_QUESTION'	=> 'Hoe vind ik al mijn bijlagen?',

	'HELP_FAQ_BLOCK_ATTACHMENTS'	=> 'Bijlagen',
	'HELP_FAQ_BLOCK_BOOKMARKS'	=> 'Onderwerpabonnementen en bladwijzers',
	'HELP_FAQ_BLOCK_FORMATTING'	=> 'Tekstopmaak en onderwerp soorten',
	'HELP_FAQ_BLOCK_FRIENDS'	=> 'Vrienden en vijanden',
	'HELP_FAQ_BLOCK_GROUPS'	=> 'Gebruikers en gebruikersgroepen',
	'HELP_FAQ_BLOCK_ISSUES'	=> 'phpBB vragen',
	'HELP_FAQ_BLOCK_LOGIN'	=> 'Aanmeld- en registratievragen',
	'HELP_FAQ_BLOCK_PMS'	=> 'Privéberichten',
	'HELP_FAQ_BLOCK_POSTING'	=> 'Vragen in verband met het plaatsen van berichten',
	'HELP_FAQ_BLOCK_SEARCH'	=> 'Forums doorzoeken',
	'HELP_FAQ_BLOCK_USERSETTINGS'	=> 'Gebruikersvoorkeuren en instellingen',

	'HELP_FAQ_BOOKMARKS_DIFFERENCE_ANSWER'	=> 'In phpBB 3.0 werkten bladwijzers zoals de bladwijzers (of favorieten) in je browser. Je werd niet op de hoogte gebracht als er een update was. Vanaf phpBB 3.1 werken bladwijzers meer als abonneren op een onderwerp. Je kunt een notificatie krijgen als het onderwerp is geüpdate. Abonneren zal je echter notificeren als er een update is op een onderwerp of forum. Notificatieopties voor bladwijzers en abonnementen kunnen ingesteld worden via het gebruikerspaneel onder “Forumvoorkeuren”.',
	'HELP_FAQ_BOOKMARKS_DIFFERENCE_QUESTION'	=> 'Wat is het verschil tussen een bladwijzer en abonnement?',
	'HELP_FAQ_BOOKMARKS_FORUM_ANSWER'	=> 'Je abonneren op een forum gaat door onderaan de pagina op de link “Abonneer forum” te klikken nadat je een forum geopend hebt.',
	'HELP_FAQ_BOOKMARKS_FORUM_QUESTION'	=> 'Hoe kan ik een bladwijzer of abonnement instellen op specifieke forums?',
	'HELP_FAQ_BOOKMARKS_REMOVE_ANSWER'	=> 'Om je abonnement op te zeggen, ga je naar het gebruikerspaneel en klik je op de hier voor dienende links.',
	'HELP_FAQ_BOOKMARKS_REMOVE_QUESTION'	=> 'Hoe zeg ik mijn abonnement op?',
	'HELP_FAQ_BOOKMARKS_TOPIC_ANSWER'	=> 'Je kunt op de pagina van het onderwerp in het menu “Onderwerp gereedschap” een bladwijzer of abonnement instellen. Dit menu is zowel boven- als onderaan de pagina te vinden. <br />Het is ook mogelijk te abonneren op het onderwerp door bij het reageren de optie “Informeer me wanneer een reactie is geplaatst” aan te vinken.',
	'HELP_FAQ_BOOKMARKS_TOPIC_QUESTION'	=> 'Hoe kan ik een bladwijzer of abonnement instellen op specifieke onderwerpen?',

	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_ANSWER'	=> 'Mededelingen bevatten vaak belangrijke informatie over het forum dat je aan het lezen bent, je kunt deze berichten dan ook het best zo snel mogelijk lezen. Mededelingen verschijnen bovenaan iedere pagina van het forum waarin ze geplaatst zijn. Zoals bij globale mededelingen, hangt het van de vereiste permissies af of je wel of niet mededelingen kan plaatsen. De benodigde permissies zijn bepaald door een beheerder.',
	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_QUESTION'	=> 'Wat zijn mededelingen?',
	'HELP_FAQ_FORMATTING_BBOCDE_ANSWER'	=> 'BBCode is een vereenvoudigde versie van html, het gebruik ervan is al dan niet toegestaan door de beheerder (je kunt BBCode ook per bericht uitschakelen, dit is een optie bij het plaatsen van je bericht). De syntax van BBCode is ongeveer gelijk aan die van HTML, tags worden tussen vierkante haakjes [ en ] geplaatst, dus niet &lt; en &gt;. Daarnaast geeft het een grotere controle over hoe iets wordt weergegeven. Meer informatie omtrent BBCode is te vinden in de handleiding die je kunt openen als je een bericht plaatst.',
	'HELP_FAQ_FORMATTING_BBOCDE_QUESTION'	=> 'Wat is BBCode?',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_ANSWER'	=> 'Globale mededelingen zijn berichten die belangrijke informatie bevatten, je komt ze dan ook op verschillende plaatsen tegen zoals bovenaan ieder forum en in het gebruikerspaneel. Of je al dan niet globale mededelingen kan plaatsen hangt af van de vereiste permissies, deze zijn ingesteld door de beheerder.',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_QUESTION'	=> 'Wat zijn globale mededelingen?',
	'HELP_FAQ_FORMATTING_HTML_ANSWER'	=> 'Nee, het is niet mogelijk om je bericht op te maken met HTML code. De meeste opmaak die je via HTML kan toepassen is ook via BBCode mogelijk.',
	'HELP_FAQ_FORMATTING_HTML_QUESTION'	=> 'Kan ik HTML gebruiken?',
	'HELP_FAQ_FORMATTING_ICONS_ANSWER'	=> 'Onderwerpiconen zijn kleine afbeeldingen die met berichten geassocieerd kunnen worden om zo hun inhoud kracht bij te zetten. Of je al dan niet gebruik kan maken van onderwerpiconen hangt af van de door de beheerder ingestelde permissies.',
	'HELP_FAQ_FORMATTING_ICONS_QUESTION'	=> 'Wat zijn onderwerpiconen?',
	'HELP_FAQ_FORMATTING_IMAGES_ANSWER'	=> 'Ja, je kunt afbeeldingen in je bericht weergeven. Als de beheerder bijlagen toelaat kun je een afbeelding naar het forum uploaden. Anders moet je er voor zorgen dat de afbeelding op een andere publieke server beschikbaar is, bijvoorbeeld http://www.voorbeeld.com/mijn_afbeelding.gif. Linken naar een afbeelding op je eigen computer is onmogelijk (tenzij het een publieke server is). Ook afbeeldingen die een authentificatie vereisen zoals in: Hotmail of Yahoo mailboxen, een wachtwoord beschermde website, enz. kunnen niet worden weergegeven. Om een afbeelding weer te geven, moet je de BBCode tag [img] gebruiken.',
	'HELP_FAQ_FORMATTING_IMAGES_QUESTION'	=> 'Kan ik afbeeldingen plaatsen?',
	'HELP_FAQ_FORMATTING_LOCKED_ANSWER'	=> 'Zowel moderators als beheerders kunnen onderwerpen sluiten. Je kunt niet langer antwoorden op deze berichten en als ze een peiling bevatten eindigt deze automatisch. Onderwerpen kunnen om welke reden dan ook gesloten worden.',
	'HELP_FAQ_FORMATTING_LOCKED_QUESTION'	=> 'Wat zijn gesloten onderwerpen?',
	'HELP_FAQ_FORMATTING_SMILIES_ANSWER'	=> 'Smilies zijn kleine afbeeldingen die gebruikt kunnen worden om een gevoelstoestand uit te drukken, bijvoorbeeld :) betekent blij, :( betekent ongelukkig. Alle beschikbare smilies worden weergegeven als je een bericht plaatst. Maak geen overdadig gebruik van smilies, ze maken een bericht snel onleesbaar wat er toe kan leiden dat een moderator je bericht aanpast of heel je bericht verwijdert. De beheerder kan ook een maximaal aantal smilies, dat in een bericht gebruikt mag worden, bepaald hebben.',
	'HELP_FAQ_FORMATTING_SMILIES_QUESTION'	=> 'Wat zijn Smilies?',
	'HELP_FAQ_FORMATTING_STICKIES_ANSWER'	=> 'Sticky onderwerpen staan onder de mededelingen in het forum en alleen op de eerste pagina. Meestal zijn deze berichten vrij belangrijk dus het lezen ervan wordt aangeraden. Net zoals bij mededelingen bepaalt de beheerder welke permissies je moet hebben om een sticky onderwerp te plaatsen.',
	'HELP_FAQ_FORMATTING_STICKIES_QUESTION'	=> 'Wat zijn sticky onderwerpen?',

	'HELP_FAQ_FRIENDS_BASIC_ANSWER'	=> 'Hiermee kun je andere gebruikers op het forum sorteren. Gebruikers die in je vriendenlijst staan worden in het gebruikerspaneel weergegeven zodat je snel kunt controleren of ze online zijn, of een privébericht kunt sturen. Tevens is het mogelijk dat hun berichten, in je huidige stijl, gemarkeerd worden. Als je een gebruiker aan je vijandenlijst toevoegt, worden zijn of haar berichten standaard verborgen.',
	'HELP_FAQ_FRIENDS_BASIC_QUESTION'	=> 'Waarvoor dient mijn vrienden- en vijandenlijst?',
	'HELP_FAQ_FRIENDS_MANAGE_ANSWER'	=> 'Het toevoegen van gebruikers kan op 2 manieren. In het profiel van iedere gebruiker staat een link om de gebruiker aan je vrienden- of vijandenlijst toe te voegen. De tweede manier is via het gebruikerspaneel, je moet dan een gebruikersnaam opgeven. Op dezelfde pagina kun je gebruikers weer van de lijst verwijderen.',
	'HELP_FAQ_FRIENDS_MANAGE_QUESTION'	=> 'Hoe verwijder of voeg ik gebruikers toe aan mijn vrienden- en/of vijandenlijst?',

	'HELP_FAQ_GROUPS_ADMINISTRATORS_ANSWER'	=> 'Beheerders zijn gebruikers die alle permissies hebben over het gehele forum. Zij beheren alles in verband met het forum, zoals: permissies, het verbannen van gebruikers, gebruikersgroepen of moderators aanmaken, enz. Hun permissies zijn natuurlijk afhankelijk van welke de eigenaar aan hen heeft toegewezen. Ook afhankelijk van de beslissing van de eigenaar, hebben ze mogelijk alle moderator permissies in de forums.',
	'HELP_FAQ_GROUPS_ADMINISTRATORS_QUESTION'	=> 'Wat zijn Beheerders?',
	'HELP_FAQ_GROUPS_COLORS_ANSWER'	=> 'De beheerder kan een kleur aan een gebruikersgroep toegewezen hebben, dit is om de leden gemakkelijk te herkennen.',
	'HELP_FAQ_GROUPS_COLORS_QUESTION'	=> 'Waarom staan verschillende gebruikersgroepen in een andere kleur?',
	'HELP_FAQ_GROUPS_DEFAULT_ANSWER'	=> 'Als je lid bent van meerdere gebruikersgroepen, word je standaard gebruikersgroep gebruikt om je groepskleur en groepsrang te bepalen. De beheerder kan je de permissies geven om je standaard gebruikersgroep te wijzigen via het gebruikerspaneel.',
	'HELP_FAQ_GROUPS_DEFAULT_QUESTION'	=> 'Wat is de "Standaard gebruikersgroep"?',
	'HELP_FAQ_GROUPS_MODERATORS_ANSWER'	=> 'Moderators zijn gebruikers of gebruikersgroepen die in staan voor de dagelijkse werking van het forum. Ze kunnen, in de forums die ze modereren, berichten wijzigen en verwijderen; onderwerpen sluiten, openen, verplaatsen, splitsen en verwijderen. In het algemeen moeten ze er gewoon op toe zien dat mensen niet van het onderwerp afwijken (<em>off-topic</em> gaan) of ongepaste inhoud plaatsen.',
	'HELP_FAQ_GROUPS_MODERATORS_QUESTION'	=> 'Wat zijn Moderators?',
	'HELP_FAQ_GROUPS_TEAM_ANSWER'	=> 'Als je op deze link klikt, kom je op een pagina die een overzicht geeft van de mensen die het forum beheren. Deze lijst bevat alle beheerders en de moderators, met bijhorende details omtrent welke forums ze modereren.',
	'HELP_FAQ_GROUPS_TEAM_QUESTION'	=> 'Waarvoor dient de "Het Team"-link?',
	'HELP_FAQ_GROUPS_USERGROUPS_ANSWER'	=> 'Als de beheerder gebruikers wil groeperen, kan hij/zij dit doen door middel van gebruikersgroepen. Gebruikers kunnen van meerdere groepen lid zijn (dit verschilt per forum), deze groepen kunnen verschillende permissies/toegangspermissies hebben. Op deze manier is het voor de beheerder een stuk gemakkelijker meerdere moderators aan een forum toe te wijzen, bepaalde gebruikers toegang tot een privéforum te verlenen, enz.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_ANSWER'	=> 'Om lid van een gebruikersgroep te worden, moet je op de bijhorende link klikken in het gebruikerspaneel, waarna je een overzicht van alle gebruikersgroepen krijgt. Niet alle groepen zijn vrij toegankelijk, ze vereisen een goedkeuring van je lidmaatschap en hebben soms zelf verborgen gebruikers. Als het een open groep is, kan je lid worden door op de hiervoor dienende knop te klikken. Als het een gesloten groep is, kan je je lidmaatschap aanvragen door op de bijhorende knop te klikken. De groepsleider moet je aanvraag dan goedkeuren, hij of zij vraagt mogelijk waarom je lid wil worden. Indien je niet tot een groep toegelaten wordt, moet je de groepsleider niet lastig vallen, hij of zij heeft een reden om je te weigeren.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_QUESTION'	=> 'Hoe word ik lid van een gebruikersgroep?',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_ANSWER'	=> 'Gebruikersgroepen worden door de beheerder gemaakt, deze beslist dus ook wie de groepsleider is. Als je een gebruikersgroep wil starten, moet je contact opnemen met de beheerder, dit kan door hem/haar een privébericht te sturen.',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_QUESTION'	=> 'Hoe word ik een groepsleider?',
	'HELP_FAQ_GROUPS_USERGROUPS_QUESTION'	=> 'Wat zijn gebruikersgroepen?',

	'HELP_FAQ_ISSUES_ADMIN_ANSWER'	=> 'Alle gebruikers van het forum kunnen gebruik maken van het “Contact”-formulier als deze optie is ingeschakeld door de beheerders.<br />Leden van het forum kunnen ook gebruik maken van de “Het Team”-link.',
	'HELP_FAQ_ISSUES_ADMIN_QUESTION'	=> 'Hoe neem ik contact op met een beheerder?',
	'HELP_FAQ_ISSUES_FEATURE_ANSWER'	=> 'Deze software is geschreven en eigendom van de phpBB-Groep. Als je denkt dat een bepaalde optie toegevoegd moet worden, bezoek dan de <a href="https://www.phpbb.com/ideas/">phpBB Ideeën sectie</a>.',
	'HELP_FAQ_ISSUES_FEATURE_QUESTION'	=> 'Waarom is de optie X niet beschikbaar?',
	'HELP_FAQ_ISSUES_LEGAL_ANSWER'	=> 'Alle beheerders die op de "het team"-pagina vermeld worden, staan open voor je klachten. Als je geen reactie hebt gekregen, kun je contact opnemen met de eigenaar van het domein (dmv een <a href="http://www.google.com/search?q=whois">whois lookup</a>) of, als dit forum op een gratis host staat (bijvoorbeeld xsbb.nl, nl.forums.cc, dotbb.be, enz.), het beheer of misbruik-afdeling van de gratis host. Wees je er bewust van dat phpBB Limited <strong>geen inspraak</strong> heeft en dus in geen enkel geval aansprakelijk gehouden kan worden over hoe, waar en door wie dit forum gebruikt wordt. Neem <strong>geen</strong> contact op met phpBB Limited met vragen over wettelijke kwesties (zoals aanspreekbaarheid, ongepaste commentaar, enz.) die <strong>niet direct verband</strong> houden met de phpBB.com-website of de phpBB-software. Als je phpBB Limited toch e-mailt over deze software die <strong>gebruikt wordt door derden</strong> kun je een korte, of helemaal geen, reactie verwachten.',
	'HELP_FAQ_ISSUES_LEGAL_QUESTION'	=> 'Met wie moet ik contact opnemen omtrent misbruik en/of wettelijke kwesties in verband met dit forum?',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_ANSWER'	=> 'Deze software (in zijn originele vorm) is geschreven, vrijgegeven en met een copyright beschermd door <a href="https://www.phpbb.com/">phpBB Limited</a>. De software is beschikbaar onder de GNU General Public License en mag vrij verspreid worden, raadpleeg <a href="https://www.phpbb.com/about/">over phpBB</a> voor meer informatie.',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_QUESTION'	=> 'Wie heeft dit forum geschreven?',

	'HELP_FAQ_LOGIN_AUTO_LOGOUT_ANSWER'	=> 'Als je de optie <em>meld mij automatisch aan bij ieder bezoek</em> niet aanvinkt, blijf je maar voor een bepaalde tijd aangemeld. Zo wordt vermeden dat anderen je account misbruiken. Om aangemeld te blijven, moet je bij het aanmelden die optie aanvinken. We raden dit echter af als je gebruik maakt van een openbare computer, bijvoorbeeld op school, in de bibliotheek, in een internetcafé, enz. Als deze optie niet beschikbaar is, heeft de beheerder deze uitgeschakeld.',
	'HELP_FAQ_LOGIN_AUTO_LOGOUT_QUESTION'	=> 'Waarom word ik automatisch afgemeld?',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANSWER'	=> 'Er zijn verschillende redenen mogelijk waarom je dit probleem hebt. Controleer eerst of je gebruikersnaam en wachtwoord kloppen. Indien ze correct zijn, kun je contact opnemen met de beheerder om er zeker van te zijn dat je niet verbannen bent. Het is ook mogelijk dat de forumconfiguratie fout is, dan moet dit door de beheerder opgelost worden.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_ANSWER'	=> 'De meest voorkomende oorzaken hiervoor zijn: je gaf een verkeerde gebruikersnaam of wachtwoord op (controleer de e-mail met je registratie gegevens) of een beheerder heeft je account verwijderd om één of andere reden. Indien dit laatste het geval is, heb je dan ooit een bericht geplaatst? Het is normaal dat forums om de zoveel tijd gebruikers, die nog geen berichten geplaatst hebben, verwijderen. Dit doen ze om de database qua omvang te verkleinen. Probeer je opnieuw te registreren en meng je in de discussies.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_QUESTION'	=> 'Ik heb me ooit geregistreerd maar kan nu niet meer aanmelden!?',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_QUESTION'	=> 'Waarom kan ik niet aanmelden?',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_ANSWER'	=> 'Mogelijk heeft de beheerder je IP-adres verbannen, of de gebruikersnaam die je opgeeft verboden. Tevens is het mogelijk dat de beheerder de registratie mogelijkheid heeft uitgeschakeld om zo de registratie van nieuwe gebruikers te voorkomen. Neem contact op met de beheerder voor verdere hulp.',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_QUESTION'	=> 'Waarom kan ik niet registreren?',
	'HELP_FAQ_LOGIN_COPPA_ANSWER'	=> 'COPPA is de afkorting voor het Engelse "Children’s Online Privacy and Protection Act". Dit is een Amerikaanse wet uit 1998 die vereist dat iedere website die mogelijk gegevens van jongeren onder de 13 jaar verzamelt, hiervoor de toestemming heeft van de ouders. Deze toestemming moet schriftelijk of op een andere wijze gegeven worden, zodat de ouders weten dat de website persoonlijke gegevens van hun kind, jonger dan 13, heeft. Indien je niet zeker bent of deze wet al dan niet op jou of de website waarop je wil registreren van toepassing is, neem dan contact op met een juridisch raadgever voor meer informatie. Houd er rekening mee dat het phpBB-team geen wettelijke informatie kan verschaffen en ook niet het aanspreekpunt is voor deze wetgeving, tenzij dit hieronder vermeld wordt.',
	'HELP_FAQ_LOGIN_COPPA_QUESTION'	=> 'Wat is COPPA?',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_ANSWER'	=> '"Verwijder cookies" zorgt dat alle cookies die door phpBB3 zijn aangemaakt, weer verwijderd worden. Deze cookies zorgen ervoor dat je aangemeld wordt en geven ook de mogelijkheid, indien de beheerder dit heeft inschakeld, om te zien welke onderwerpen je al gelezen hebt.',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_QUESTION'	=> 'Wat doet "verwijder cookies"?',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_ANSWER'	=> 'Geen paniek! Je kan je huidige wachtwoord niet terug krijgen, maar er is wel een mogelijkheid om deze te resetten. Hiervoor moet je naar de aanmeldpagina gaan en klikken op <em>wachtwoord vergeten?</em>. Volg de instructies op het scherm en even later kan je je weer aanmelden.',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_QUESTION'	=> 'Ik weet mijn wachtwoord niet meer!',
	'HELP_FAQ_LOGIN_REGISTER_ANSWER'	=> 'De beheerder heeft bepaalt of je al dan niet geregistreerd moet zijn om berichten te plaatsen. Hoe dan ook, als je geregistreerd bent kun je meer functies gebruiken. Zo kun je bijvoorbeeld een avatar opgeven, privéberichten sturen, andere gebruikers e-mailen, lid worden van gebruikersgroepen, enz. Het registreren duurt maar even, dus we raden het zeker aan!',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_ANSWER'	=> 'Controleer eerst of je gebruikersnaam en wachtwoord kloppen. Indien ze correct zijn, kan één of meerdere zaken hiervan de oorzaak zijn. Indien COPPA geactiveerd is en je tijdens het registratieproces opgaf dat je jonger bent dan 13 jaar, moet je de ontvangen instructies opvolgen. Als dit niet het geval is, moet je account dan geactiveerd worden? Sommige forums vereisen dat iedere nieuwe account geactiveerd wordt, ofwel door jezelf of door een beheerder. Wanneer je je geregistreerd hebt, werd ook medegedeeld of dit al dan niet nodig is. Indien je een e-mail ontvangen hebt, moet je de daarin opgegeven instructies volgen. Als je nooit een e-mail ontvangen hebt, was het opgegeven e-mailadres dan wel juist? Één van de redenen van activatie is om het aantal valse accounts te doen dalen. Als je zeker bent dat je e-mailadres correct was, neem dan contact op met de beheerder.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_QUESTION'	=> 'Ik ben geregistreerd maar kan niet aanmelden!',
	'HELP_FAQ_LOGIN_REGISTER_QUESTION'	=> 'Waarom moet ik me registreren?',

	'HELP_FAQ_PMS_CANNOT_SEND_ANSWER'	=> 'Hiervoor zijn drie redenen mogelijk: ofwel ben je niet geregistreerd en/of aangemeld, de beheerder heeft de privéberichten functie uitgeschakeld, of de beheerder heeft ingesteld dat je geen privéberichten kan sturen. Indien dit laatste het geval is, neem dan contact op met de beheerder.',
	'HELP_FAQ_PMS_CANNOT_SEND_QUESTION'	=> 'Ik kan geen privéberichten sturen!',
	'HELP_FAQ_PMS_SPAM_ANSWER'	=> 'Jammer dat we dit moeten horen. Het e-mailformulier van dit forum werkt met een aantal technieken om zenders van zulke berichten te traceren. Het beste wat je kan doen is de beheerder een kopie van het bericht e-mailen, inclusief de headers (hierin staan de details van de gebruiker die de e-mail stuurde). Deze zal dan de nodige stappen ondernemen.',
	'HELP_FAQ_PMS_SPAM_QUESTION'	=> 'Ik heb spam of een e-mail met ongepaste inhoud van iemand op dit forum ontvangen!',
	'HELP_FAQ_PMS_UNWANTED_ANSWER'	=> 'Je kunt gebruikers blokkeren zodat ze je geen privéberichten meer kunnen sturen, dit gebeurt via het gebruikerspaneel. Als je ongepaste privéberichten ontvangt van een bepaalde gebruiker, neem dan contact op met de beheerder, deze kan ervoor zorgen dat hij of zij niet langer privéberichten kan sturen of gebruik de meldknop in het privébericht.',
	'HELP_FAQ_PMS_UNWANTED_QUESTION'	=> 'Ik blijf ongewenste privéberichten ontvangen!',

	'HELP_FAQ_POSTING_BUMP_ANSWER'	=> 'Als je een onderwerp aan het bekijken bent, kan je klikken op de "bump onderwerp" link. Hierdoor "bump" je het onderwerp naar boven op de eerste pagina van de onderwerpenlijst. Als deze link er niet staat, kunnen onderwerpen niet gebumpt worden. Een onderwerp kan ook gebumpt worden door een antwoord te plaatsen, maar hou hierbij wel rekening met de regels van het forum.',
	'HELP_FAQ_POSTING_BUMP_QUESTION'	=> 'Hoe bump ik mijn onderwerp?',
	'HELP_FAQ_POSTING_CREATE_ANSWER'	=> 'Om een nieuw onderwerp in één van de forums te plaatsen of om een reactie op een onderwerp te maken, klik je op de bijhorende knop op ofwel de pagina met onderwerpen of in een bepaald onderwerp. Mogelijk moet je je registreren voor je een nieuw onderwerp kan aanmaken, de permissies die je al dan niet hebt in het forum staan onderaan de pagina met onderwerpen of in een onderwerp (de lijst met <em>je mag geen nieuwe onderwerpen in dit forum plaatsen, je mag niet antwoorden op een onderwerp in dit forum, enz.</em>).',
	'HELP_FAQ_POSTING_CREATE_QUESTION'	=> 'Hoe plaats ik een onderwerp in een forum of maak een reactie?',
	'HELP_FAQ_POSTING_DRAFT_ANSWER'	=> 'Hiermee kun je berichten opslaan om ze dan later af te werken en te plaatsen. Een opgeslagen bericht kun je, via de bijhorende optie, in het gebruikerspaneel weer laden.',
	'HELP_FAQ_POSTING_DRAFT_QUESTION'	=> 'Waarvoor dient de "Opslaan"-knop bij het plaatsen van een bericht?',
	'HELP_FAQ_POSTING_EDIT_DELETE_ANSWER'	=> 'Tenzij je de beheerder of een moderator bent, kun je alleen je eigen berichten wijzigen en verwijderen. Je kunt een bericht wijzigen (soms maar voor een beperkte tijd nadat het geplaatst is) door te klikken op de <em>wijzig</em> knop van het desbetreffende bericht. Als er al iemand op je bericht gereageerd heeft, komt er onderaan je bericht een klein tekstje dat zegt hoeveel keer en wanneer je het bericht voor het laatst je gewijzigd hebt. Dit zal niet verschijnen als nog niemand gereageerd heeft, evenmin als een beheerder of moderator je bericht gewijzigd heeft. Zij kunnen wel een mededeling toevoegen, waarom ze je bericht gewijzigd hebben. Het verwijderen van een bericht is niet meer mogelijk zodra er iemand op gereageerd heeft.',
	'HELP_FAQ_POSTING_EDIT_DELETE_QUESTION'	=> 'Hoe wijzig of verwijder ik een bericht?',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_ANSWER'	=> 'Sommige forums zijn mogelijk alleen toegankelijk voor bepaalde gebruikers of gebruikersgroepen. Om berichten te zien, lezen, plaatsen, enz. heb je speciale permissies nodig. Deze permissies kun je alleen van moderators of beheerders krijgen, zij zijn dus ook degene met wie je hierover contact moet opnemen.',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_QUESTION'	=> 'Waarom kan ik een bepaald forum niet openen?',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_ANSWER'	=> 'De mogelijkheid om bijlagen toe te voegen, kan per forum, per gebruikersgroep of per gebruiker ingesteld worden. De beheerder kan het bijvoorbeeld zo ingesteld hebben dat je in een bepaald forum helemaal geen bijlagen mag toevoegen of dat alleen de beheerdersgroep dit mag. Neem contact op met de beheerder als je niet zeker weet waarom je geen bijlagen kan toevoegen.',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_QUESTION'	=> 'Waarom kan ik geen bijlagen toevoegen?',
	'HELP_FAQ_POSTING_POLL_ADD_ANSWER'	=> 'De limiet voor de peilingsopties is ingesteld door de beheerder. Indien je meer opties denkt nodig te hebben dan het toegestane aantal, neem dan contact op met de beheerder.',
	'HELP_FAQ_POSTING_POLL_ADD_QUESTION'	=> 'Waarom kan ik niet meer peilingsopties toevoegen?',
	'HELP_FAQ_POSTING_POLL_CREATE_ANSWER'	=> 'Een peiling aanmaken is heel gemakkelijk, als je een nieuw onderwerp aanmaakt (of het eerste bericht in een onderwerp bewerkt en als je daar permissies voor hebt) zou je een "voeg peiling toe" tabblad moeten zien onderaan het berichten-gedeelte (als je dit tabblad niet kan zien, heb je niet de juiste permissies om peilingen aan te maken). Je moet een titel voor de peiling invullen bij "peilingsvraag" en dan minstens 2 mogelijkheden invullen in het "peilingopties"-tekstgedeelte (limiet is ingesteld door de beheerder), met elke optie gescheiden door middel van een nieuwe regel. Je kunt ook instellen hoeveel opties een gebruiker mag kiezen onder "opties per gebruiker" en een tijdslimiet in dagen voor de peiling (0 is een peiling van oneindige duur).',
	'HELP_FAQ_POSTING_POLL_CREATE_QUESTION'	=> 'Hoe maak ik een peiling?',
	'HELP_FAQ_POSTING_POLL_EDIT_ANSWER'	=> 'Net zoals bij de berichten kan een peiling alleen gewijzigd worden door degene die hem gemaakt heeft, en door een moderator of beheerder. Om de peiling te wijzigen moet je het allereerste bericht van het onderwerp wijzigen (hieraan is de peiling gekoppeld). Als er nog geen stemmen zijn uitgebracht, kunnen gebruikers de peiling verwijderen of iedere peilingsoptie wijzigen. Maar, als er reeds gestemd is, dan kunnen alleen moderators of beheerders hem wijzigen of verwijderen. Dit om te voorkomen dat gebruikers een peiling maken en deze daarna vervalsen door de opties te wijzigen.',
	'HELP_FAQ_POSTING_POLL_EDIT_QUESTION'	=> 'Hoe wijzig of verwijder ik een peiling?',
	'HELP_FAQ_POSTING_QUEUE_ANSWER'	=> 'De beheerder kan beslist hebben dat geplaatste berichten eerst nagekeken moeten worden. Het is tevens ook mogelijk dat de beheerder je in een gebruikersgroep heeft geplaatst waarvan de berichten altijd nagelezen moeten worden. Neem contact op met de beheerder voor verdere informatie.',
	'HELP_FAQ_POSTING_QUEUE_QUESTION'	=> 'Waarom moet mijn bericht goedgekeurd worden?',
	'HELP_FAQ_POSTING_REPORT_ANSWER'	=> 'Als de beheerder het toelaat, kun je op de hiervoor dienende knop klikken bij het bericht. Als je hierop geklikt hebt, moet je een paar verplichte stappen volgen om de melding te versturen.',
	'HELP_FAQ_POSTING_REPORT_QUESTION'	=> 'Hoe kan ik berichten aan een moderator melden?',
	'HELP_FAQ_POSTING_SIGNATURE_ANSWER'	=> 'Om een onderschrift aan je bericht toe te voegen, moet je er eerst één maken. Dit kun je via het gebruikerspaneel doen. Als je dit gedaan hebt, kun je de optie <em>voeg mijn onderschrift toe</em> aanvinken als je een bericht plaatst. Je kunt er ook voor zorgen dat je onderschrift automatisch aan ieder nieuw bericht wordt toegevoegd. Dit doe je door de bijhorende optie te activeren in het gebruikerspaneel (het is nog altijd mogelijk om het onderschrift uit te schakelen als je het bericht plaatst).',
	'HELP_FAQ_POSTING_SIGNATURE_QUESTION'	=> 'Hoe voeg ik een onderschrift toe aan mijn bericht?',
	'HELP_FAQ_POSTING_WARNING_ANSWER'	=> 'Op ieder forum gelden specifieke regels, als je één van deze regels (volgens de beheerder) overtreedt, kun je een waarschuwing ontvangen. Het sturen van een waarschuwing naar je is een beslissing van de beheerder, phpBB Limited heeft hier dus in geen geval iets mee te maken.',
	'HELP_FAQ_POSTING_WARNING_QUESTION'	=> 'Waarom ontving ik een waarschuwing?',

	'HELP_FAQ_SEARCH_BLANK_ANSWER'	=> 'Je zoekopdracht gaf meer resultaten dan de webserver kon verwerken. Gebruik de geavanceerde zoekfunctie en wees specifieker met zowel je zoektermen als de te doorzoeken forums. ',
	'HELP_FAQ_SEARCH_BLANK_QUESTION'	=> 'Waarom resulteert mijn zoekopdracht in een lege pagina?',
	'HELP_FAQ_SEARCH_FORUM_ANSWER'	=> 'Door een zoekterm op te geven in het zoekveld, die je vindt op de index-, forum- en onderwerppagina. Uitgebreid zoeken is mogelijk door op de "zoeken" link te klikken, deze vind je op iedere pagina.',
	'HELP_FAQ_SEARCH_FORUM_QUESTION'	=> 'Hoe doorzoek ik het forum?',
	'HELP_FAQ_SEARCH_MEMBERS_ANSWER'	=> 'Ga naar de "leden" pagina en klik op de "zoek een lid" link. Op die pagina, vul je de voor zichzelf sprekende opties in.',
	'HELP_FAQ_SEARCH_MEMBERS_QUESTION'	=> 'Hoe zoek ik een gebruiker?',
	'HELP_FAQ_SEARCH_NO_RESULT_ANSWER'	=> 'Je zoekterm was hoogstwaarschijnlijk niet specifiek genoeg en bevatte mogelijk teveel termen die niet door phpBB3 geïndexeerd worden. Wees specifieker en gebruik, bij uitgebreid zoeken, de beschikbare opties.',
	'HELP_FAQ_SEARCH_NO_RESULT_QUESTION'	=> 'Waarom levert mijn zoekopdracht geen resultaten op?',
	'HELP_FAQ_SEARCH_OWN_ANSWER'	=> 'Je kunt je eigen berichten vinden door of op de "toon je eigen berichten" link in het gebruikerspaneel te klikken, of via je eigen profiel. Om je eigen onderwerpen te zoeken moet je de geavanceerde zoekfunctie gebruiken en de nodige opties invullen.',
	'HELP_FAQ_SEARCH_OWN_QUESTION'	=> 'Hoe kan ik mijn eigen berichten en onderwerpen vinden?',

	'HELP_FAQ_USERSETTINGS_AVATAR_ANSWER'	=> 'Er kunnen 2 afbeeldingen bij een gebruikersnaam staan als je berichten leest. De eerste afbeelding geeft aan welke rang je hebt, meestal zijn dit sterretjes of blokjes die aangeven hoeveel berichten je geplaatst hebt of wat je status is. Hieronder kan nog een tweede, meestal grotere, afbeelding staan, beter bekend als een avatar. Deze afbeelding is meestal uniek of persoonlijk voor iedere gebruiker.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_ANSWER'	=> 'In je Gebruikerspaneel, onder “Profiel” kun je een avatar toevoegen door gebruik te maken van één van de volgende vier methodes: Gravatar, Galerij, Afstand of Upload. Het is aan de beheerders om avatars in te schakelen en om te kiezen op welke manier je een avatar kan gebruiken. Als je geen avatars kunt gebruiken, neem dan contact op met een beheerder voor je vragen hierover.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_QUESTION'	=> 'Hoe kan ik een avatar instellen?',
	'HELP_FAQ_USERSETTINGS_AVATAR_QUESTION'	=> 'Wat zijn de afbeeldingen naast mijn gebruikersnaam?',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_ANSWER'	=> 'Als je geregistreerd bent, worden al je gegevens opgeslagen in de database. Om ze te wijzigen moet je op de <em>gebruikerspaneel</em> link klikken (deze staat meestal bovenaan op de pagina, maar dit kan verschillen), daarna kun je je instellingen wijzigen.',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_QUESTION'	=> 'Hoe verander ik mijn instellingen?',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_ANSWER'	=> 'Alleen geregistreerde gebruikers kunnen gebruik maken van het ingebouwde e-mailformulier (indien de beheerder dit heeft ingeschakeld). Dit om misbruik van het e-mailsysteem door anonieme gebruikers te voorkomen.',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_QUESTION'	=> 'Wanneer ik op de e-maillink van een gebruiker klik, moet ik me aanmelden?',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_ANSWER'	=> 'In het gebruikerspaneel onder "foruminstellingen", vind je de optie <em>Verberg mijn online status</em>. Als je deze optie activeert zul je onzichtbaar zijn voor iedereen, behalve voor beheerders, moderators en jezelf.',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_QUESTION'	=> 'Hoe kan ik onzichtbaar zijn in de online gebruikers lijst?',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_ANSWER'	=> 'De meest voorkomende reden hiervoor is dat de beheerder je taal niet geïnstalleerd heeft, of dat nog niemand het forum in je taal vertaald heeft. Je kunt altijd aan de beheerder vragen of hij het talenpakket, dat je nodig hebt, wil installeren. Indien het nog niet bestaat, mag je gerust de vertaling maken. Meer informatie hieromtrent kan gevonden worden op de website van phpBB Limited (de link staat onderaan iedere pagina).',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_QUESTION'	=> 'Mijn taal zit niet in de lijst!',
	'HELP_FAQ_USERSETTINGS_RANK_ANSWER'	=> 'Rangen, welke verschijnen onder je gebruikersnaam, geven een indicatie over het aantal berchten dat je hebt gemaakt of om bepaalde gebruikers te identificeren, bijv. moderators en beheerders. Over het algemeen kun je je rang niet wijzigen, aangezien ze ingesteld worden door een beheerder. Nu moet je natuurlijk het forum niet beginnen te spammen met onzinnig veel berichten, gewoon voor een hogere rang. Dit heeft zelfs mogelijk het tegenovergestelde effect, een beheerder of moderator kunnen je berichten aantal doen dalen.',
	'HELP_FAQ_USERSETTINGS_RANK_QUESTION'	=> 'Wat is mijn rang en hoe verander ik mijn rang?',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_ANSWER'	=> 'Als je zeker bent dat je de correcte tijdzone en zomertijd goed hebt ingevuld en de tijd is nog steeds anders, is waarschijnlijk de tijd op de server verkeerd ingesteld en zullen de beheerders een aanpassing moeten doen.',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_QUESTION'	=> 'Ik wijzigde de tijdzone, maar de tijd is nog steeds verkeerd!',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_ANSWER'	=> 'Het is mogelijk dat de tijd die gegeven wordt van een andere tijdzone is dan waarin jij woont. Als dit het geval is, moet je naar het gebruikerspaneel gaan en je tijdzone veranderen in een bepaald gebied (vb: Amsterdam, New York, Sydney, enz.). Wees er bewust van dat het veranderen van de tijdzone, zoals de meeste instellingen, alleen gedaan kunnen worden door geregistreerde gebruikers. Als je nog niet geregistreerd bent is dit een goed moment om dit te doen.',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_QUESTION'	=> 'De tijden zijn niet correct!',
));
