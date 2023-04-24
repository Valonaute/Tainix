<?php

$coups = 'FPPFCCCFCPFPPPPPFCCFC';
$result = [];

$coups_array = str_split($coups);
$contre = '';

foreach ($coups_array as $coup){
    if ($coup == 'F'){
        $contre = 'C';
        array_push($result, $contre);
    } elseif ($coup == 'C'){
        $contre = 'P';
        array_push($result, $contre); 
    } else {
        $contre = 'F';
        array_push($result, $contre);
    }
}

/* implode(',',$result); */
$result_string = "";
$result_string = $result_string.join("", $result);
echo ($result_string);