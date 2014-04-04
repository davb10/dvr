<?php 
/**------------------------------------------------------------------------------
* 	me.php
* 	This is the me page for DVR_mall
* 	David Valenzuela (davb10) 2014-03-20
* 	Ver 3
*  -Added kmom2
* 	------------------------------------------------------------------------------**/

/**------------------------------------------------------------------------------
 * Include config.php file and save on array $dvr
 * ------------------------------------------------------------------------------**/
include(__DIR__.'/config.php'); 
 
 
// Store all in array $dvr
$dvr['title'] = "Redovisning OOPHP";
 
$dvr['main'] = <<<EOD
<h1>Redovisning per kursmoment</h1>
<h2>Kmom03 – SQL och datbasen MySQL</h2>
<p>Är bekant med SQL språket (Structured Query Language) från mina tidigare databas studier. Då tyckte jag att ämnet var ointressant för mig, tills jag började arbeta för en utvecklingsföretag som utvecklade en journalsystem för privat vården. Databasen som användes var Microsft SQL 2000 med T-SQL språket (Transact-SQL) som är en vidareutveckling av SQL språket gjord av Microsoft och Sybase.</p>

<h3>MySQL</h3>
<p>Arbeta med MySql kändes rätt enkelt tack vare mina tidigare SQL studier och att jag har använd MySQL tidigare tillsammans med CMS programmet Drupal. Med Drupal arbetade jag inte med utveckling dock endast med klienten phpMyAdmin pga att nästan alla webb-hotell stödjer den.</p> 

<p>MySqlClu som är en textbaserad klient har jag nu lärt mig att använda. Tidigare tyckte jag att den var bara jobbigt och använde den inte alls. Men ny tycker jag att den är helt OK om man behöver använda sig av endast SQL-frågor.</p>

<p>Min stora favorit blev dock MySQL Workbench som känns mycket mer komplett med utveckling av ER-diagram och att man kan ha större kontroll av sina servrar och databas kopplingar.</p>
<p>Kunde koppla upp mig till BTH:s MySQL med MySQL Workbench utan problem. och allt fungerade som det skulle.</p>

<h3>Övningen</h3>
<p>Övningen kändes lagom svårt och var jätte roligt att göra. Den gav en mycket bra överblick över vad man kan göra med SQL. Sparade alla mina SQL-frågor för framtida användning.
Svårast var dock delen med INNER JOIN och OUTER JOIN som jag har alltid haft lite problem att förstå i sin helhet dock med lite mer övningar känner jag mig mycket mer förbered.
Som man brukar säga övning ger färdighet.</p>

<h3>Kommentarer</h3>
<p>Då jag tidigare hade mycket svårt att förstå Inner Join och Outer Join arbetade jag med utveckling av enkla databaser i Microsoft Access som använde sig av ER-diagram som senare gav T-SQL kod som jag senare kunde använda i stora Microsoft SQL. Såg att denna verktyg finns även i MySQL och lekte lite med den också.
Allmänt var övningen mycket roligt.</p>
    		<p>

		/David <a href="mailto:davb10@student.bth.se">Skicka e-post till mig</a>

		

		</p>
		
		<p>-----------------------------</p>
    
<h2>Kmom02 - Objektorienterad programmering</h2>
<h3>Utvecklingsmiljö</h3>
		<ul>
		<li>Operativsystem: Linux Debian 8 (Testing)</li>
		<li>Webbserver: LAMP server i Linux Debian.</li>
		<li>Proggramerings verktyg: Eclipse Kepler</li>
		<li>Versionshantering: GitHub med Eclipse tilläget.</li>
		<li>GitHub adress: <a href="https://github.com/davb10/dvr">Klicka här för att gå till projektets GitHub</a></li>
		<li>Webbadress: <a href="http://www.student.bth.se/~davb10/oophp/kmom02/webroot/index.php">Klicka här för att gå till hemsidan</a></li>
		</ul> 

<p>Uppgiften kändes mycket svårt för min PHP-programmerings nivå. Då jag hade mycket svårt att förstå sammankopplingen med Objektorienterad Programmering, PHP, HTML och CSS.</p> 

<p>För att kunna få en bra bas och för att få dem kunskaper som krävdes för att lösa denna uppgift fick jag läsa och utföra en hel del övningar från php20 guiden, oopphp20 guiden, kursboken och PHP-manualen. Mycket tid gick åt på detta men nu efter flera veckor med denna uppgift börjar jag äntligen känna mig lite säkrare med PHP-programmering. Märkte dock att det så var mäst givande var egen testande och kodning.</p>

<p>Objektorienterad PHP guiden kändes mycket givande och med hjälp av den kunde jag hitta en del gemensam med PHP och Java. Tack vare mina java kunskaper kunde jag snabbt komma igång med klasser, konstruktörer, synlighet och arv. 
Fick dock mycket problem med Objekt och sessioner. Då jag kunde inte förstå hur jag skulle använda detta. Till slut förstod jag hur viktiga sessioner är och kunde göra klar uppgiften.</p>

<h3>Uppgiften</h3>
<p>Som jag lärde mig vid programmering i Java skapade jag klassen CdiceRound som en extention av Cdice. Alltså med arv mellan dessa. 
Senare försökte jag lägga hela spel logiken i CdiceGame men fick en hel del problem med detta som jag lyckades lösa genom att flytta en del av funktionaliteten till sidan för tärningsspelet.
Enligt Objekt orienterad programmering använde jag lokala och privata variabler med så kallade get and set funktioner. Hoppas att det så man ska göra även vid PHP programmering.
P.g.a. svårighetsgraden och tidsbristen kunde jag inte utföra några extrauppgifter. Hade dock velat göra detta.</p>

<h3>Spelet</h3>
<p>Spelet startas första gången genom att helt enkelt kasta tärningen första gången Därefter kan man välja att spara runda eller avsluta spelet. När man avslutar spelet rensas allt och ny instans av spelet startas.
Man vinner spelet genom att komma till 100 eller mer. För att vinna behöver man inte spara rundan. Annars är allt enligt kravspecifikationen.</p>

<h3>ANAX</h3>
<p>Min mall fick denna gång lite förbättringar genom att flytta meny till en klass samt projekthantering med GitHub, som jag hade aldrig använd tidigare. Installerade GitHub modulen i Eclipse som fungerar otroligt bra. GitHub har nu blivit en av mina stora favorit verktyg.</p>

<h3>Kommentarer</h3>
<p>Mycket nytt gjorde att det blev svårt att förstå hur allt hängde ihop. Uppgiften kändes mycket långt. Till slut fick jag till den</p>
		
		<p>

		/David <a href="mailto:davb10@student.bth.se">Skicka e-post till mig</a>

		

		</p>
		
		<p>-----------------------------</p>
		
<h2>Kmom01 - Kom igång med programmering i PHP</h2>
		<p>
		<strong>Utvecklingsmiljö är Linux Debian med LAMP server, Eclipse och Filezilla.  </strong>
		<br />
		<strong>Min mall heter "DvR".</strong>
		<br />
		<strong><a href="http://www.student.bth.se/~davb10/oophp/kmom01/webroot/">Klicka här för att se Kmom01</a>.</strong>
		</p>
		
		<p>
		Denna moment var lite svårt då jag var tvungen att komma igång med PHP.
		<br />
		Tack vare "20 steg att komma igång med PHP" och mina tidigarer java kunskaper, gick det rätt fort ändå.
		<br />
		<strong>Om php20-guiden inte hade funnits, hade det tagit mycket längre tid att komma igång med PHP.</strong>
		</p>
		<p>
		Under programmering fick jag svårigheter med att bygga modulen source (kallad CSource) och dynamiska menyn, 
		då jag hade problem att förstå hur allt var uppbyggt.
		<br />
		Till slut så fick jag till source modulen. Men fick problem att fixa till "selected" vald meny alternativet.
		<br /> 
		Kommer dock att fixa menyn som en modul under kursens gång. Hoppas att det är OK. 
		</p>
		<p>
		Utav dessa svårigheter lärde jag mig jätte mycket och kan nu bygga egna moduler.
		</p>
		<p>
		Har inte gjort extrauppgiften, men allt annat är gjort enligt kraven. Har dock inte gjort så stora förändringar i Anax-mallen, då mycket tid gick på att förstå hur allt fungerade.
		<br />

		Har lagt in funktionen dump() under bootstrap.php men skulle vi göra något mer med den? Hittade inte mer om detta i uppgiften.
		</p>
		<p>
		Utefter detta kan jag säga att PHP är roligt att lära sig. Och man kan göra så mycket mer med sin hemsida tack vare PHP.
		</p>
		<h3> 2014-02-17 Ändringar i uppgiften </h3>
		<p>
		Uppgiften ändrades enligt kompletteringskrav, samt fixade andra små fel. Ändrade filer:
		</p>
		<ul>
		<li>webroot/index.php</li>
		<li>webroot/redovisning.php</li>
		<li>theme/functions.php</li>
		<li>theme/index.tpl.php</li>
		<li>webroot/css/style.css</li>
		</ul> 
		<p>
		Ändringsloggen finns i respektive fil.
		<br/>
		Kommer vid nästa uppgift att implementera github. Detta för att på enkel sätt följa upp mina förändringar i koden.
		</p>
		
		<p>

		/David <a href="mailto:davb10@student.bth.se">Skicka e-post till mig</a>

		<img src="img/dvlogo_face.png" alt="om mig" />

		</p>
EOD;
 
// Finally, leave it all to the rendering phase of DvR_mall
include(DVR_THEME_PATH);