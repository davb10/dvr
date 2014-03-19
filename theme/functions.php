<?php
/**------------------------------------------------------------------------------
 * 	functions.php
* 	Functions for theme DvR_mall
* David Valenzuela (davb10) 2014-02-13
* Ver 2
* CHANGELOG v.2:
* - GenerateMenu error in finnishing the class nav now fixed
* 	------------------------------------------------------------------------------**/
/**------------------------------------------------------------------------------
 * get_title
 * ------------------------------------------------------------------------------
 * Get the title for the actual page by concatenating it with site-wide title.
 * In : string $title for the actual page
 * Out : concatenated title. Local page and global.
 * ------------------------------------------------------------------------------**/
function get_title($title) {
  global $dvr;
  return $title . (isset($dvr['title_append']) ? $dvr['title_append'] : null);
}

