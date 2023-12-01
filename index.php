<?php

use LSP\CricketPlayer;
use LSP\Player;

require 'autoload.php'; // Include the autoloader

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


die();
