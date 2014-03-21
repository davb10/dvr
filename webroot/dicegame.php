<?php 

/**
 * 	dicegame.php
 * 	Page to play Dice Game 100
 * @author David Valenzuela, davb10, davb10@student.bth.se
 * @copyright David Valenzuela 2014-03-20
 * @link https://github.com/davb10/dvr/webroot/dicegame.php
 */
/*--------------------------------------------------------------------------------
 * Include config.php file and save on array $dvr
 --------------------------------------------------------------------------------*/
include(__DIR__.'/config.php'); 

//PROPERITIES
$message = '<p>Följ instruktionerna ovan för att börja spela!</p>';
$win = false;

//Check arguments
$function = isset($_GET['game']) ? $_GET['game'] : null;


// Create the game or get it from the session
//Check if game is started by finding argument game
if(isset($_GET['game'])) //If argument game exist run the game functions. If not exist start a new game
{
	$game = $_SESSION['diceround']; //
	
	switch ($function){
		case "roll":
			$Ok = $game->PlayAndRoll();
			if ($Ok == 'Ok'){
				$message = 'Bra kast. Fortsätt kasta eller spara';
			}elseif ($Ok == 'win') {
				$message = 'Du har nu kommit till 100 poäng med '.$game->GetRolls(). ' kast. Grattis!. Tryck på avsluta för att prova igen.' ;
				$win = true;
			}else {
				$message = 'Du fick en etta.Du förlurar alla poäng för denna runda. Tryck kasta för ny runda eller Avsluta för nytt spel. ';
				$game->NewRound();
			}
			break;
		case "save":
			$game->SaveRound();
			$game->NewRound();
		break;
		case "end":
			$game = new CDiceGame();
			$_SESSION['diceround'] = $game;
		break;
		default: $message = 'test';
	}
}
else {
	$game = new CDiceGame();
	$message = '<p>Följ instruktionerna ovan för att börja spela!</p>';
	$_SESSION['diceround'] = $game;
}

//Create the needed links tu run the game functions.
$links =($win== true ? ("<a href='?game=end'>Avsluta</a>") : ("<a href='?game=roll'>Kasta</a> | <a href='?game=save'>Spara</a> | <a href='?game=end'>Avsluta</a>"));


// Store all in array $dvr
$dvr['title'] = " Dice Game";
 
$dvr['main'] = <<<EOD
<h1>Välkommen till Tärningsspelet 100</h1>

		<p>
		Spelet går ut på att komma först till 100 genom att kasta en tärning. 
		Under varje kast kommer din resultat att plusas ihop.
		Får du däremot en 1:a avslutas spelomgången.
		</p>
		<ul>
		<li>Tryck på Kasta för att kasta tärningen.</li>
		<li>Tryck på spara för att spara din runda.</li>
		<li>Tryck på avsluta för att börja om.</li>
		</ul> 
		
		<p>  {$links}
		</p>
		
		<p> Du har sparad {$game->GetSaved()} poäng	</p>
		<p> Du har just nu {$game->GetTotal()} poäng	</p>
		<p> Du har nu kastat {$game->GetRoundTotal()} poäng	</p>
		<p>{$game->GetAllRollsAsImages()}</p>
		<hr>
		{$message}
		
EOD;
// Finally, leave it all to the rendering phase of DvR_mall
include(DVR_THEME_PATH);