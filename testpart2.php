<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


require_once("Team.php");


$myTeam = new Team("Tigers");


$myTeam->finalScore(2, 2); 


echo "Goal Average: " . $myTeam->getGoalAverage() . "\n"; 

?>
