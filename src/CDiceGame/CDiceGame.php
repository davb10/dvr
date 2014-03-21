<?php
/**
 * Class the Dice game logic
 *
 * @author David Valenzuela, davb10, davb10@student.bth.se
 * @copyright David Valenzuela 2014-03-20
 * @link https://github.com/davb10/dvr/src/CDiceGame/CDiceGame.php
 */
class CDiceGame {
	
	const FACES = 6; //This game is only for 6 faced dice
	const WIN = 100; //The Winner comes to 100
	
	//PROPERITIES
	private $game; //Of type CDiceRound
	private $total =0; //The acomulated total inclusiv saved round 
	private $saved =0; //Saved Round
	private $rolls =0; //Number of rolled dices
	
	
	//CONSTRUCTOR
	public function __construct(){
		$this-> game = new CDiceRound(self::FACES);
	}
	
	//GETTERS AND SETTERS
	public function GetTotal(){
		return $this->total;
	}

	public function GetSaved(){
		return $this->saved;
	}

	public function GetRolls(){
		return $this->rolls;
	}
	
	//METHOD DECLARATION
	
	/**------------------------------------------------------------------------------
	 * PlayAndRoll
	* ------------------------------------------------------------------------------
	* Mail party of the game. Roll dice and check values
	* In : 
	* Out: $Ok returns if the roll is OK or the winning roll or erroneos roll
	* ------------------------------------------------------------------------------**/
	public function PlayAndRoll(){
		$number = $this->game-> RollDice();
		$this-> rolls++;
		if ($number == 1){
			$Ok = 'error';
			$this->total = $this->saved;
		} else {
			$this->total += $number;
			$this->total>=self::WIN ? $Ok='win' : $Ok='Ok';
			
		}
		 
		return $Ok;
	}
	
	/**------------------------------------------------------------------------------
	 * NewRound
	* ------------------------------------------------------------------------------
	* Reset the round
	* In : 
	* Out: 
	* ------------------------------------------------------------------------------**/
	public function NewRound(){
		$this-> game = new CDiceRound(self::FACES); //We start with new Round
	}	
	
	/**------------------------------------------------------------------------------
	 * SaveRound
	* ------------------------------------------------------------------------------
	* Save values for this round and add to values saved before
	* In : 
	* Out: 
	* ------------------------------------------------------------------------------**/
	public function SaveRound(){
		$this->saved += $this->GetRoundTotal();
	}

	
	/**------------------------------------------------------------------------------
	 * GetRoundTotal
	* ------------------------------------------------------------------------------
	* Get the sum values for the round at the moment
	* In : 
	* Out: returns the sum of rolls at the moment
	* ------------------------------------------------------------------------------**/
	public function GetRoundTotal(){
		return $this->game-> GetSum();
	}	
	

	/**------------------------------------------------------------------------------
	 * GetRollsAsImages
	* ------------------------------------------------------------------------------
	* Return image of dice face
	* In : 
	* Out: html code with image reprecenting the rolled faces
	* ------------------------------------------------------------------------------**/
	public function GetAllRollsAsImages(){
		$html = $this->game->GetRollsAsImages();
		return $html;
	}
	
		
}