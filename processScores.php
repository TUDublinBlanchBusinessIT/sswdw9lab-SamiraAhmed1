<?php

require_once("Team.php");


$teamName = $_GET['teamName'] ?? '';
$home1 = $_GET['home1'] ?? 0;
$away1 = $_GET['away1'] ?? 0;
$home2 = $_GET['home2'] ?? 0;
$away2 = $_GET['away2'] ?? 0;
$home3 = $_GET['home3'] ?? 0;
$away3 = $_GET['away3'] ?? 0;


$homeTeam = new Team($teamName);

$homeTeam->finalScore($home1, $away1); 
$homeTeam->finalScore($home2, $away2); 
$homeTeam->finalScore($home3, $away3); 

echo "Goal Average for $teamName:"  . $homeTeam->getGoalAverage();
?>
