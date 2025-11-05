<?php

include("Team.php");

$myTeam = new Team("Tigers");

$myTeam->finalScore(2,2);


echo "\nTigers total points are " .$myTeam -> getTotalPoints();
echo "\nTigers goal average is " .$myTeam -> getGoalAverage();
echo "\nThat worked";


?>