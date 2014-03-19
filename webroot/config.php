<?php
/**------------------------------------------------------------------------------
* 	config.php
* 	Configuration File for DvR_mall. Used to change settings
* 	David Valenzuela (davb10) 2014-01-30
* 	Ver 1
* 	------------------------------------------------------------------------------**/

/**------------------------------------------------------------------------------
 * Error reporting
 * ------------------------------------------------------------------------------**/
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly

/**------------------------------------------------------------------------------
 * PATHS
* ------------------------------------------------------------------------------**/
define('DVR_INSTALL_PATH', __DIR__ . '/..'); //Linux structured mapping go back one folder
define('DVR_THEME_PATH', DVR_INSTALL_PATH . '/theme/render.php');

/**---------------------------------------------------------------------------------
 * Include bootstrapping functions.
 *----------------------------------------------------------------------------------**/
include(DVR_INSTALL_PATH . '/src/bootstrap.php');

/**---------------------------------------------------------------------------------
 * Start session.
 *----------------------------------------------------------------------------------**/
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();

/**---------------------------------------------------------------------------------
 * Settings up menu array $menu
*----------------------------------------------------------------------------------**/
$menu = array();
$menu['me'] = array('text'=>'Me','url'=>'index.php');
$menu['redovisning'] = array('text'=>'Redovisning','url'=>'redovisning.php');
$menu['sourcecode'] = array('text'=>'Källkod','url'=>'source.php');

/**---------------------------------------------------------------------------------
 * Create variable (array) $dvr and define settings
*----------------------------------------------------------------------------------**/
$dvr = array();
$dvr['lang']         = 'sv';
$dvr['title_append'] = ' | DvR hemsida';

$dvr['header'] = <<<EOD
<img class='sitelogo' src='img/dvr_logo.png' alt='DvR Logo'/>
<span class='sitetitle'>Hemsida för DvR</span>
<span class='siteslogan'>Redovisning PHP och Databaser (oophp)</span>
EOD;

$dvr['footer'] = <<<EOD
<footer>
		<span class='sitefooter'>
		&copy; 2014 David Valenzuela (davb10@student.bth.se) 
		| <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a> 
		| <a href="http://validator.w3.org/check/referer">Validering</a>
		| <a href="source.php">Källkod</a>
		</span>
</footer>
EOD;

//CSS stylesheet settings
$dvr['stylesheet'] = 'css/style.css';
//icon in every webbrowser window
$dvr['favicon'] = 'favicon.ico';


/**---------------------------------------------------------------------------------
 * Settings for JavaScript.
 * Not needed in this implementation
 *----------------------------------------------------------------------------------**/
//$dvr['modernizr'] = 'js/modernizr.js';
//$dvr['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
//$dvr['jquery'] = null; // To disable jQuery
//$dvr['javascript_include'] = array();
//$dvr['javascript_include'] = array('js/main.js'); // To add extra javascript files



/**---------------------------------------------------------------------------------
 * Google analytics.
 * Not needed in this implementation
 *----------------------------------------------------------------------------------**/
//$dvr['google_analytics'] = 'NULL'; // Set to null to disable google analytics
