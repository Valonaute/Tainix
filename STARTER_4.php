<?php

$stop = 87;
$resultat = 0;
for ($i =1 ; $i <= $stop ; $i ++){

    if ($i == $stop)
    { 
        echo $resultat;
    } else {
        $resultat += $i ;
    }
}
