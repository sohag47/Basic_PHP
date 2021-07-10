<?php
/*
! array
! 3 types of array
? 1. Indexed array
? 2. Association array 
? 3. Multidimensional arrays
*/


//!  01. Indexed array: 
$cars = array('volvo', 'BMW', 'Toyota');

//? Read data from array: 
function readArray($cars){
    foreach($cars as $index=>$car){
        echo($index." ".$car."<br/>");
    }
    echo("Total number of element: ".count($cars)."<br/>");
}
readArray($cars);



?>