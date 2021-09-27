<?php 
/*
! Conditional Statement in PHP
*/

$age = 20;
$salary = 30000;

//? Difference between == and ===
if($age == 20) echo "true \n";
if($age == '20') echo "true \n";

if($age === 20) echo "true \n";
if($age === '20') echo "false \n";

//? if AND OR 
if($age === 20 && $salary === 30000){
    echo "OK \n";
}
if($age === '20' || $salary ===30000){
    echo "OK \n";
}

//? ternary operator
echo $age < 22 ? "Young \n" : "Old \n";

//? short ternary operator
$my_age = $age ?: 18;
echo $my_age;
echo "\n";

//? null coalescing operator
$my_age = isset($age) ? $age : "18";
echo $my_age;
echo "\n";

$my_age = $age ?? '18';
echo $my_age;


?>