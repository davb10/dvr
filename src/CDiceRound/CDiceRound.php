<?php
/**
 * Class to save result for rolled Dices in game
 *
 * @author David Valenzuela, davb10, davb10@student.bth.se
 * @copyright David Valenzuela 2014-03-20
 * @link https://github.com/davb10/dvr/src/CDiceRound/CDiceRound.php
 */
class CDiceRound extends CDice {
 
	//PROPERITIES
	protected $rolls = array();
	
	//CONSTRUCTOR
	public function __construct($NrOfFaces=6) {
		parent::__construct($NrOfFaces);
		$this -> rolls = array();
	}
		
	//METHOD DECLARATION
	/**------------------------------------------------------------------------------
	 * RollDice
	* ------------------------------------------------------------------------------
	* Roll Dice, save and return result
	* In : 
	* Out: Rolled face.
	* ------------------------------------------------------------------------------**/
	public function RollDice() {
		$number = parent::Roll();
		$this -> rolls[] = $number;
		return $number;
	}
	/**------------------------------------------------------------------------------
	 * GetSum
	* ------------------------------------------------------------------------------
	* Sum result of all rolls saved in array
	* In :
	* Out: sum
	* ------------------------------------------------------------------------------**/
	public function GetSum() {
		return array_sum($this->rolls);
	}
	

	
	/**------------------------------------------------------------------------------
	 * GetRollsAsImages
	* ------------------------------------------------------------------------------
	* Return image of dice faces. Works only for 6 faced dice.
	* In :
	* Out: html code with image reprecenting the rolled faces
	* ------------------------------------------------------------------------------**/
	public function GetRollsAsImages(){
		$html = "<ul class='dice'>";
		foreach ($this->rolls as $number){
			$html .= "<li class='dice-{$number}'></li>";
		}
		$html .="</ul>";
		return $html;
	}
}