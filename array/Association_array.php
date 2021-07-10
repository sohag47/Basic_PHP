<?php
/*
! 2. Association array (like python dictionary) 
*/

$ages = array("minhazul"=>"25", "islam"=>"20", "sohag"=>"25");

function readArray($ages){
    foreach($ages as $index => $age){
        echo("Key: ".$index.", Value: ".$age."<br/>");
    }
    echo("Total number of element: ".count($ages)."<br/>");
}
readArray($ages);
?>