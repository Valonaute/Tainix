<?php

$values = [23, 70, 30, 75, 46, 79, 34, 70, 45, 52, 96, 81, 74, 83, 92, 66, 18, 27, 11, 59, 66, 13, 31, 80, 48, 87];
$retenus = [];
foreach ($values as $value) {
    if ($value % 3 == 0){
        $retenus[] = $value ;
    }
}

echo implode("-", $retenus);

?>