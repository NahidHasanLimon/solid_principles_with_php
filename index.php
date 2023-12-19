<?php
require 'autoload.php'; // Include the autoloader
use DIP\TeamBuild;
use LSP\CricketPlayer;
use LSP\Player;



function performTrain(Player $player) {
    $player->train();
}

// Using the Player class
//$genericPlayer = new Player("John", 25);
//performTrain($genericPlayer); // Outputs: John is training!

//// Using the FootballPlayer class
//$footballPlayer = new FootballPlayer("David", 28, "Striker");
//performTrain($footballPlayer); // Outputs: David (Striker) is training on the field!

// Using the CricketPlayer class
$cricketPlayer = new CricketPlayer("Sarah", 22, "Bowler");
performTrain($cricketPlayer); // Outputs: Sarah (Bowler) is training !


//Start of Dependency Inversion
echo '<br><br><br> ***** Start Dependency Inversion ***** <br><br><br>';


$cricketTeam = new  DIP\CricketTeam();
$footBallTeam = new  DIP\FootballTeam();
$build_team = new TeamBuild($footBallTeam);

var_dump($build_team->build() );

echo '<br><br><br> ***** End Dependency Inversion ***** <br><br><br>';


//End of Dependency Inversion


die();
