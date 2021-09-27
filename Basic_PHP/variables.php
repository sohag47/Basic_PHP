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

//? Declare variables
$name = 'Minhazul Islam Sohag'; 
$age = 23; 
$height = 5.6; 
$marital_status = FALSE; 
$salary = NULL;

//? print variables
echo("Name: $name, Age: $age, Height: $height, Marital Status: $marital_status, Salary: $salary");

//? show type of the variables
echo '</br>';
echo("Name: ".gettype($name));

//? show type of the variables and print hole variable
echo '</br>';
var_dump($name);

//? variable checking
echo '</br>';
echo is_string($name); 
echo is_integer($age);
echo is_float($height);
echo is_bool($marital_status);
echo is_null($salary);

//? check variable define
echo '</br>';
echo isset($name);

//? constant 
define('PI', 3.1416);
echo '</br>';
echo PI;

//? built in constant
echo '</br>';
echo SORT_ASC.'</br>';

?>
