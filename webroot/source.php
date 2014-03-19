<?php
/**------------------------------------------------------------------------------
 * 	source.php
* 	Show sourcecode of files using Class CSource
* 	@Modified by David Valenzuela (davb10) 2014-02-03
* 	@Originaly created by Mikael Roos, me@mikaelroos.se
* 	Ver 1
* 	------------------------------------------------------------------------------**/

/**------------------------------------------------------------------------------
 * Include config.php file and save on array $dvr
* ------------------------------------------------------------------------------**/
include(__DIR__.'/config.php');

//use class CSource
$source = new CSource(array('secure_dir' => '..', 'base_dir' => '..'));

// Store all in array $dvr
$dvr['title'] = "Me page";
$dvr['main'] = $source->View(); //variable source sends to View Function on CSource.php


// Finally, leave it all to the rendering phase of DvR_mall
include(DVR_THEME_PATH);
