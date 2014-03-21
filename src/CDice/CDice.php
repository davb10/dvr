<?php 
/**
 * Class to roll a dice
 *
 * @author David Valenzuela, davb10, davb10@student.bth.se
 * @copyright David Valenzuela 2014-03-20
 * @link https://github.com/davb10/dvr/src/CDice/CDice.php
 */
	class CDice {
	
	//PROPERITIES
	private $faces; //Needed to create dice with diferent number of faces.
	
	//CONSTRUCTOR
	public function __construct($faces=6){
		$this->faces = $faces;
	}
	
	//METHOD DECLARATION
	/**------------------------------------------------------------------------------
	 * Roll
	* ------------------------------------------------------------------------------
	* Roll and send back the result
	* In : 
	* Out: The result of the roll
	* ------------------------------------------------------------------------------**/
	public function Roll() {
 		return rand(1,($this->faces));
	}	
}


