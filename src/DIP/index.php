<?php
//require 'autoload.php'; // Include the autoloader
//namespace DIP;
use DIP\CricketTeam;
use DIP\FootballTeam;
use DIP\TeamBuild;
use LSP\CricketPlayer;

//require 'autoload.php'; // Include the autoloader
//echo "Welcome to Dependency Inversion Principle Demonstration";


//function performTrain(Player $player) {
//    $player->train();
//}
//
//
$cricketPlayer = new CricketTeam("Sarah", 22, "Bowler");
echo 'ki problem';
die($cricketPlayer->build());

//performTrain($cricketPlayer); // Outputs: Sarah (Bowler) is training !

$cricket_team = new CricketTeam();
//$football_team = new FootballTeam();
//die($football_team);
//
//
//$build_team = new TeamBuild($cricket_team);

//die($build_team);
//echo "Welcome to Dependency Inversion Principle Demonstration";

//die();
