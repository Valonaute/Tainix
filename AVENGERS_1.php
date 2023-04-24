<?php

$ironman = 2;
$spiderman = 5;
$captainamerica = 2;
$thor = 4;
$thanos = 169;

$persos = [$ironman, $spiderman, $captainamerica, $thor];

$avengers = ($ironman*3 + 10) + ($spiderman*4 + 5) + ($captainamerica * 3 + 7) + ($thor * 4 + 20);
$i = 1;
while(($avengers - $thanos) >=0){
    foreach ($persos as $perso) {
        $perso += 1;
        echo $i;
        $i+=1;
    }
}