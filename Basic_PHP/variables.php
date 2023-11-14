<?php
//! php variable
/*
String
Integer
Float or Double
Boolean
Null
Array
Object
*/

// Declare variables
$name = 'Minhazul Islam Sohag'; 
$age = 23; 
$height = 5.6; 
$marital_status = FALSE; 
$salary = NULL;

// print variables
echo("Name: $name, Age: $age, Height: $height, Marital Status: $marital_status, Salary: $salary \n");

// show type of the variables
echo "Name: ".gettype($name)."\n";

// show type of the variables and print hole variable
var_dump($name);

// variable checking
echo is_string($name); 
echo is_int($age);
echo is_float($height);
echo is_bool($marital_status);
echo is_null($salary);

// check variable define
echo "\n";
echo isset($name);

// //? constant 
define('PI', 3.1416);
echo "\n";
echo PI;

// //? built in constant
echo "\n";
echo SORT_ASC."\n";

?>
