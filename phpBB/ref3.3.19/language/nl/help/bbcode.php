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
	'HELP_BBCODE_BLOCK_IMAGES'	=> 'Afbeeldingen tonen',
	'HELP_BBCODE_BLOCK_INTRO'	=> 'Inleiding',
	'HELP_BBCODE_BLOCK_LINKS'	=> 'Links maken',
	'HELP_BBCODE_BLOCK_LISTS'	=> 'Lijsten maken',
	'HELP_BBCODE_BLOCK_OTHERS'	=> 'Andere',
	'HELP_BBCODE_BLOCK_QUOTES'	=> 'Citeren en code',
	'HELP_BBCODE_BLOCK_TEXT'	=> 'Tekst opmaken',

	'HELP_BBCODE_IMAGES_ATTACHMENT_ANSWER'	=> 'Bijlagen kunnen, indien de beheerder de bijlagenfunctie heeft aangezet en je de nodige permissies hebt om bijlagen toe te voegen, overal worden toegevoegd door middel van de <strong>[attachment=][/attachment]</strong> tag. In het berichtvenster is er een selectie lijst om bijlagen toe te voegen.',
	'HELP_BBCODE_IMAGES_ATTACHMENT_QUESTION'	=> 'Een bijlage aan een bericht toevoegen',
	'HELP_BBCODE_IMAGES_BASIC_ANSWER'	=> 'phpBB BBCode heeft een tag om afbeeldingen aan het bericht toe te voegen. Er zijn twee heel belangrijke dingen waarmee je rekening moet houden als je deze tag gebruikt: veel gebruikers houden niet van veel afbeeldingen in een bericht en de afbeelding moet zich op het internet bevinden (het bestand mag dus bijvoorbeeld niet alleen op je computer staan, behalve als je zelf een webserver draait!). Om een afbeelding weer te geven moet je de URL naar de afbeelding tussen <strong>[img]</strong> en <strong>[/img]</strong> tags plaatsen. Bijvoorbeeld:<br /><br /><strong>[img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br />Je kunt, als je wil, een afbeelding ook tussen <strong>[url][/url]</strong> tag plaatsen, voorbeeld:<br /><br /><strong>[url=https://www.phpbb.com][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br />dit wordt dan:<br /><br /><a href="https://www.phpbb.com/"><img src="https://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a>',
	'HELP_BBCODE_IMAGES_BASIC_QUESTION'	=> 'Een afbeelding toevoegen aan een bericht',

	'HELP_BBCODE_INTRO_BBCODE_ANSWER'	=> 'BBCode is een speciale vorm van HTML. Of je BBCode  kunt gebruiken op het forum wordt bepaalt door de beheerder(s). Daarnaast kun je BBCode ook uitschakelen via het formulier om een bericht te plaatsen. BBCode is gelijkwaardig aan HTML, tags zijn ingesloten in vierkante haken [ en ] in plaats van &lt; en &gt;. Het biedt ook een betere controle over hoe iets wordt weergegeven. Afhankelijk van de template die je gebruikt kun je het toevoegen van BBCode in je berichten vergemakkelijken door de gebruiksvriendelijke knoppen boven het tekstveld te gebruiken. Ook met deze knoppen zul je de volgende uitleg handig vinden.',
	'HELP_BBCODE_INTRO_BBCODE_QUESTION'	=> 'Wat is BBCode?',

	'HELP_BBCODE_LINKS_BASIC_ANSWER'	=> 'BBCode heeft verschillende manieren om URI’s, Uniform Resource Indicators, beter bekend als URL’s te maken.<ul><li>De eerste manier is door de <strong>[url=][/url]</strong> tag te gebruiken, na de = moet je de URL plaatsen. Als je bijvoorbeeld naar phpBB.com linkt kun je dit doen:<br /><br /><strong>[url=https://www.phpbb.com/]</strong>Bezoek phpBB!<strong>[/url]</strong><br /><br />wat zal resulteren in: <a href="https://www.phpbb.com/">Bezoek phpBB!</a>;</li><li>Wij willen er op wijzen dat het aan de instellingen van je browser ligt of deze link in een nieuw of hetzelfde venster opent. Als je gewoon de URL als link wil, kun je dit gebruiken:<br /><br /><strong>[url]</strong>https://www.phpbb.com/<strong>[/url]</strong><br /><br />Wat de volgende link geeft: <a href="https://www.phpbb.com/">https://www.phpbbcom/</a>;</li><li>phpBB heeft ook zoiets als <em>magische links</em>, dit zorgt er voor dat iedere correcte URL in een link verandert zonder dat je tags moet gebruiken of de URL met http:// laat beginnen. Als je bijvoorbeeld www.phpbb.com intypt zal dit als je het bericht bekijkt automatisch naar <a href="https://www.phpbb.com/">www.phpbb.com</a> verandert worden;</li><li>Hetzelfde gebeurt met e-mailadressen. Je kunt een adres expliciet opgeven, bijvoorbeeld:<br /><br /><strong>[email]</strong>niemand@domein.adr<strong>[/email]</strong><br /><br />wat zal resulteren in: <a href="mailto:niemand@domein.adr">niemand@domein.adr</a>, maar je kunt ook gewoon niemand@domein.adr in je bericht typen en dat zal dan automatisch vervangen worden als je het bekijkt;</li></ul>Net als met alle BBCodes kan je tags rond elkaar plaatsen zoals <strong>[img][/img]</strong> (zie volgende item), <strong>[b][/b]</strong>, enz. net als bij de opmaaktags is het aan jou om ervoor te zorgen dat de tags correct geopend en weer gesloten worden, bijvoorbeeld:<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/url][/img]</strong><br /><br />dit is <span style="text-decoration: underline">niet</span> correct, wat ervoor zou kunnen zorgen dat je bericht verwijderd wordt. Let dus goed op.',
	'HELP_BBCODE_LINKS_BASIC_QUESTION'	=> 'Naar een andere website linken',

	'HELP_BBCODE_LISTS_ORDERER_ANSWER'	=> 'De tweede soort lijst is een geordende lijst, deze geeft controle over wat voor elk item wordt weergegeven. Om een genummerde lijst te maken, moet je <strong>[list=1][/list]</strong> gebruiken. En voor een alfabetische lijst doe je het volgende: <strong>[list=a][/list]</strong>. Net als bij de niet-geordende lijst moet je <strong>[*]</strong> voor elk item plaatsen. Bijvoorbeeld:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Ga naar de winkel<br /><strong>[*]</strong>Koop een nieuwe computer<br /><strong>[*]</strong>Vloek tegen de computer als die crasht<br /><strong>[/list]</strong><br /><br />zal geven:<ol style="list-style-type: decimal;"><li>Ga naar de winkel</li><li>Koop een nieuwe computer</li><li>Vloek tegen de computer als die crashed</li></ol>Bij een alfabetische lijst kun je het volgende doen:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Het eerste mogelijke antwoord<br /><strong>[*]</strong>Het tweede mogelijke antwoord<br /><strong>[*]</strong>Het derde mogelijke antwoord<br /><strong>[/list]</strong><br /><br />zal geven:<ol style="list-style-type: lower-alpha"><li>Het eerste mogelijke antwoord</li><li>Het tweede mogelijke antwoord</li><li>Het derde mogelijke antwoord</li></ol>',
	'HELP_BBCODE_LISTS_ORDERER_QUESTION'	=> 'Een geordende lijst maken',
	'HELP_BBCODE_LISTS_UNORDERER_ANSWER'	=> 'In BBCode kun je twee soorten lijsten gebruiken, geordende en niet-geordende. Ze zijn hetzelfde als in HTML, een niet-geordende lijst geeft elk item uit de lijst onder elkaar weer, met voor elk item een ’*’. Om een niet-geordende lijst te maken moet je <strong>[list][/list]</strong> gebruiken en voor ieder item een <strong>[*]</strong> plaatsen. Om bijvoorbeeld je favoriete kleuren in een lijst weer te geven, kun je het volgende doen:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Rood<br /><strong>[*]</strong>Blauw<br /><strong>[*]</strong>Geel<br /><strong>[/list]</strong><br /><br />Wat natuurlijk dit geeft:<ul><li>Rood</li><li>Blauw</li><li>Geel</li></ul><br />Als alternatief kun je de stijl van het opsommingsteken veranderen, doormiddel van <strong>[list=disc][/list]</strong>, <strong>[list=circle][/list]</strong>, of <strong>[list=square][/list]</strong>.',
	'HELP_BBCODE_LISTS_UNORDERER_QUESTION'	=> 'Een niet-geordende lijst maken',

	'HELP_BBCODE_OTHERS_CUSTOM_ANSWER'	=> 'Als je beheerder van dit forum bent en over de nodige permissies beschikt kun je extra BBCodes toevoegen in het beheerderspaneel op de pagina van "BBCodes".',
	'HELP_BBCODE_OTHERS_CUSTOM_QUESTION'	=> 'Kan ik mijn eigen tags toevoegen?',

	'HELP_BBCODE_QUOTES_CODE_ANSWER'	=> 'Als je een stuk code of tekst die een vaste breedte nodig heeft (bijv.  Courier Lettertype) wil plaatsen zul je de tekst tussen <strong>[code]</strong> en <strong>[/code]</strong> tags moeten plaatsen, bijv.:<br /><br /><strong>[code]</strong>echo "Dit is een stukje code";<strong>[/code]</strong><br /><br />Alles (spaties, tabs..) wat tussen de <strong>[code]</strong> en <strong>[/code]</strong> tags geplaatst is, wordt bewaard voor wanneer je de tekst later bekijkt.',
	'HELP_BBCODE_QUOTES_CODE_QUESTION'	=> 'Code',
	'HELP_BBCODE_QUOTES_TEXT_ANSWER'	=> 'Er zijn twee manieren om tekst te citeren, met of zonder referentie.<ul><li>Wanneer je de citeerfunctie gebruikt om een post op het forum te beantwoorden, zal je merken dat de tekst tussen de <strong>[quote=""]</strong> en de <strong>[/quote]</strong> tag toegevoegd is. Deze methode staat je toe om te citeren met een referentie naar een persoon of naar iets wat je zelf kiest. Om bijvoorbeeld een stuk tekst van Dhr. de Vries te citeren kun je: <br /><br /><strong>[quote="Dhr. de Vries"]</strong>De tekst die Dhr. de Vries schreef komt hier<strong>[/quote]</strong><br /><br /> invullen. Het resultaat zal automatisch ’Dhr. de Vries schreef:’ voor het citaat toevoegen. Onthoud dat je de dubbele aanhalingstekens <strong>moet</strong> plaatsen, ze zijn niet optioneel;</li><li>De tweede methode staat je toe om zonder referentie te citeren. Hiervoor moet je de tekst tussen <strong>[quote]</strong> en de <strong>[/quote]</strong> tags plaatsen. Wanneer je het bericht bekijkt zal gewoon de tekst te zien zijn in het citaatblok.</li></ul>',
	'HELP_BBCODE_QUOTES_TEXT_QUESTION'	=> 'Tekst in een antwoord citeren',

	'HELP_BBCODE_TEXT_BASIC_ANSWER'	=> 'Met deze BBCode is het mogelijk om vlug de standaardstijl van tekst te veranderen. Dit wordt op de volgende manieren bereikt: <ul><li>Om een stuk tekst vetgedrukt te krijgen, moet je het insluiten in <strong>[b][/b]</strong>, bijvoorbeeld: <br /><br /><strong>[b]</strong>Hallo<strong>[/b]</strong><br /><br />zal <strong>Hallo</strong> worden;</li><li>Voor onderstrepen gebruik je <strong>[u][/u]</strong>, bijvoorbeeld:<br /><br /><strong>[u]</strong>Goedemorgen<strong>[/u]</strong><br /><br />zal <span style="text-decoration: underline">Goedemorgen</span> worden;</li><li>Voor schuingedrukte tekst gebruik je <strong>[i][/i]</strong>, vb:<br /><br />Dit is <strong>[i]</strong>Super!<strong>[/i]</strong><br /><br />zal Dit is <i>Super!</i> weergeven.</li></ul>',
	'HELP_BBCODE_TEXT_BASIC_QUESTION'	=> 'Het maken van vetgedrukte, schuingedrukte en onderlijnde tekst',
	'HELP_BBCODE_TEXT_COLOR_ANSWER'	=> 'Om de grootte en de kleur van je tekst te veranderen, kun je de volgende tags gebruiken. Onthoud dat dit echter afhankelijk is van de browser en systeem van de bezoeker: <ul><li>De kleur veranderen wordt bereikt door het te plaatsen in <strong>[color=][/color]</strong>. Je kunt ofwel een bekende Engelse kleurnaam gebruiken (bijvoorbeeld: red, blue, yellow, enz.), of een hexadecimale kleurcode (vb: #FFFFFF, #000000). Om bijvoorbeeld rode tekst te verkrijgen kun je het volgende doen:<br /><br /><strong>[color=red]</strong>Hallo!<strong>[/color]</strong><br /><br />of<br /><br /><strong>[color=#FF0000]</strong>Hallo!<strong>[/color]</strong><br /><br />zal beide <span style="color:red">Hallo!</span> weergeven;</li><li>Het veranderen van de grootte van de tekst is gelijkwaardig aan het wijzigen van de kleur. <strong>[size=][/size]</strong>. Deze tag is afhankelijk van de door de gebruiker gebruikte template, het aangeraden formaat is een numerieke waarde die de tekstgrootte in pixels weergeeft, vanaf 1 (zo klein dat je het niet kunt zien) tot en met 29 (zeer groot). Bijvoorbeeld:<br /><br /><strong>[size=9]</strong>KLEIN<strong>[/size]</strong><br /><br />zou <span style="font-size:30%;">KLEIN</span> moeten weergeven.<br /><br />terwijl:<br /><br /><strong>[size=24]</strong>ENORM!<strong>[/size]</strong><br /><br />zal <span style="font-size:200%;">ENORM!</span> weergeven.</li></ul>',
	'HELP_BBCODE_TEXT_COLOR_QUESTION'	=> 'Tekstkleur en -grootte veranderen',
	'HELP_BBCODE_TEXT_COMBINE_ANSWER'	=> 'Ja, natuurlijk kan dat. Om bijvoorbeeld iemands aandacht te krijgen, zou je het volgende kunnen typen:<br /><br /><strong>[size=18][color=red][b]</strong>BEKIJK DIT!<strong>[/b][/color][/size]</strong><br /><br />Dit wordt dan: <span style="color:red;font-size:200%;"><strong>BEKIJK DIT!</strong></span><br /><br />We raden het af om veel tekst op deze manier weer te geven. Onthoud dat de tags correct gesloten moeten worden, dit is bijvoorbeeld fout:<br /><br /><strong>[b][u]</strong>Dit is fout<strong>[/b][/u]</strong>.',
	'HELP_BBCODE_TEXT_COMBINE_QUESTION'	=> 'Kan ik opmaaktags combineren?',
));
