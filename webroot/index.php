<?php 

/*--------------------------------------------------------------------------------#
* 	index.php
* 	This is the first page for DVR_mall
* 	David Valenzuela (davb10) 2014-02-12
* 	Ver 2
* CHANGELOG v.2:
* removed br as paragraph delimeter and added p instead as delimeter.
--------------------------------------------------------------------------------*/

/*--------------------------------------------------------------------------------
 * Include config.php file and save on array $dvr
 --------------------------------------------------------------------------------*/
include(__DIR__.'/config.php'); 
 
 
// Store all in array $dvr
$dvr['title'] = "Me";
 
$dvr['main'] = <<<EOD
<h1>Välkommen till DvR - Sidan om mig</h1>


		<p>
		Mitt namn är David Valenzuela är 41 år och bor sedan ett år i Chile med fru och barn.
		<br/>
		Mitt andra hem är i Sollentuna, Stockholm där jag har levt mer än 27 år.
		</p>


		<p>
		Arbetar deltid som datakonsult med installation, underhåll och drift av nätverk och servermiljöer sedan 15 år tillbaka. 
		Nu läser jag programmet Informations Teknologi på deltid, för att senare kunna arbeta med den "mjuka delen av IT".
		<br />
		Har länge velat lära mig mer om html, css och php, sedan jag kom i kontakt med drupal en helt fantastisk php baserad CMS lösning.
		</p>

		<p>
		På denna sida kommer jag att redovisa mina arbetsuppgifter för kursen DV1485 Databaser och objektorienterad PHP-programmering. 
		<a href="redovisning.php">Läs mina redovisningar</a>.
		<br/>

		/David <a href="mailto:davb10@student.bth.se">Skicka e-post till mig</a>

		<img src="img/dvlogo_face.png" alt="om mig" />

		</p>
EOD;
 
// Finally, leave it all to the rendering phase of DvR_mall
include(DVR_THEME_PATH);