<?php
/**------------------------------------------------------------------------------
* 	bootstrap.php
* 	Functions for page control for DvR mall
* 	David Valenzuela (davb10) 2014-01-30
* 	Ver 1
* 	------------------------------------------------------------------------------**/
 
/**------------------------------------------------------------------------------
* myExceptionHandler
* ------------------------------------------------------------------------------
* Set exception and error handler
* In : $exception code
* Out: none 
* ------------------------------------------------------------------------------**/
function myExceptionHandler($exception) {
  echo "DvR: Uncaught exception: <p>" . $exception->getMessage() . "</p><pre>" . $exception->getTraceAsString(), "</pre>";
}
set_exception_handler('myExceptionHandler');

/**------------------------------------------------------------------------------
 * dump
* ------------------------------------------------------------------------------
* Print data saved on an array
* In : any array or system array
* Out: none
* ------------------------------------------------------------------------------**/
function dump($array) {
	echo "<pre>" . htmlentities(print_r($array, 1)) . "</pre>";
}

 
/**------------------------------------------------------------------------------
* myAutoloader
* ------------------------------------------------------------------------------
* Classes are automatic loaded when using class/interface
* In : $class
* Out: none
* ------------------------------------------------------------------------------**/
function myAutoloader($class) {
  $path = DVR_INSTALL_PATH . "/src/{$class}/{$class}.php";
  if(is_file($path)) {
    include($path);
  }
  else {
    throw new Exception("Classfile '{$class}' does not exists.");
  }
}
spl_autoload_register('myAutoloader');
