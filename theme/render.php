<?php
/**------------------------------------------------------------------------------
* 	render.php
* 	Render content for theme DvR_mall
* 	David Valenzuela (davb10) 2014-01-30
* 	Ver 1
* 	------------------------------------------------------------------------------**/

// Extract the data array to variables for easier access in the template files.
extract($dvr);

// Include the template functions.
include(__DIR__ . '/functions.php');

// Include the template file.
include(__DIR__ . '/index.tpl.php');