<?php

$values = [9, 9, 8, 6, 2, 10, 10, 6, 9, 5, 4, 4, 3, 7, 1, 3, 8, 8, 10, 9, 8, 4];

$result = 0;
foreach ($values as $value) {
    if ($value >= 5){
        $result += $value ;
    }
}
echo $result;

?>