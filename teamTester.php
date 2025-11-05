<?php

include("Team.php");

$myTeam = new Team("Tigers");

$myTeam->finalScore(2,2);


echo "Tigers total points are " .$myTeam -> getTotalPoints();
echo "That worked";


?>