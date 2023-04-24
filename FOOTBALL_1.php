<?php

$joueurs = [27, 7, 17, 16, 25, 3, 5, 4, 1, 22, 21, 9, 14, 19, 13, 8];
$joueurs_depart = [];
$joueurs_depart += $joueurs ; 


rsort($joueurs);
$joueurs_sorted = [];
$joueurs_sorted += $joueurs;


$joueurs_selectionnes = [];

for ($i = 0 ; $i < 11 ; $i++){
    array_push($joueurs_selectionnes, $joueurs_sorted[$i]);
}

var_dump($joueurs_selectionnes);
