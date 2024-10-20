<?php
/*
! array
! 3 types of array
? 1. Indexed array
? 2. Association array
? 3. Multidimensional arrays
*/

//!  01. Indexed array:
$cars = ["volvo", "BMW", "Toyota"];
var_dump($cars);


[$car1, $car2, $car3] = $cars;
echo("car1: {$car1}, car2: {$car2}, car3: {$car3} \n");

//? Read data from array:
function readArray($cars)
{
    foreach ($cars as $index => $car) {
        echo "index: {$index}, car: {$car} \n";
    }
    echo "Total number of element: " . count($cars) .  "\n";
}

array_push($cars, "Ford");
readArray($cars);
?>
