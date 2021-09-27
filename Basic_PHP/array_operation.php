<?php
//! Array in PHP

//? Create an array
$fruits = [ "Banana", "Apple", "Mango", "JackFruit" ];

//? print array
echo "<pre>";
var_dump($fruits);
echo "</pre>";

echo "OR </br>";

foreach($fruits as $item=>$fruit){
    echo "Index[$item] = $fruit </br>";
}

echo $fruits[2]."</br>";

//? change data into array
$fruits[1] = "Peach";
foreach($fruits as $item=>$fruit){
    echo "Index[$item] = $fruit </br>";
}

//? check if array has element at index
echo isset($fruits[3])."<br>";

//? array length
$length_array = count($fruits);
echo "Total Item: $length_array <br>";

//? insert new item
$fruits[] = 'Apple';
$fruits[5] = 'Guava';
array_push($fruits, 'Jujube');
foreach($fruits as $item=>$fruit){
    echo "Index[$item] = $fruit </br>";
}
?>