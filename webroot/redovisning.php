<?php 
/**------------------------------------------------------------------------------
* 	me.php
* 	This is the me page for DVR_mall
* 	David Valenzuela (davb10) 2014-02-13
* 	Ver 2
* * CHANGELOG v.2:
* removed br as paragraph delimeter and added p instead as delimeter.
* 	------------------------------------------------------------------------------**/

/**------------------------------------------------------------------------------
 * Include config.php file and save on array $dvr
 * ------------------------------------------------------------------------------**/
include(__DIR__.'/config.php'); 
 
 
// Store all in array $dvr
$dvr['title'] = "Redovisning OOPHP";
 
$dvr['main'] = <<<EOD
<h1>Redovisning per kursmoment</h1>
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