<?php

$array_initial = [3, 5, 4, 1, 9];
$array_length = count($array_initial);

function set_min($array_data, $array_length) {
    $mini = 0;
    for ($i=0; $i < $array_length; $i++) { 
        
        echo $array_data[$i];
    } 
}

set_min($array_initial, $array_length);
echo "\n Total: {$array_length}";
?>