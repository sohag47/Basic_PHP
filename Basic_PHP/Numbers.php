<?php

//! Numbers Operation in php
//* url : https://www.php.net/manual/en/ref.math.php

//? Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

//? Arithmetic operations
echo ($a + $b) * $c . '<br>';
echo $a - $b . '<br>';
echo $a * $b . '<br>'; 
echo $a / $b . '<br>';
echo $a % $b . '<br>';

//? Assignment with math operators

//$a += $b; echo $a.'<br>'; // $a = 9
//$a -= $b; echo $a.'<br>'; // $a = 1
//$a *= $b; echo $a.'<br>'; // $a = 20
//$a /= $b; echo $a.'<br>'; // $a = 1.25
//$a %= $b; echo $a.'<br>'; // $a = 1

// ? Increment operator
echo $a++ . '<br>'; // 5
echo $a. '<br>'; // 6
echo ++$b . '<br>'; //5

//? Decrement operator
echo $a-- . '<br>'; // 6
echo --$a . '<br>'; // 4

//? Number checking functions
is_float(1.25); // true
is_integer(3.4); // false
is_numeric("3.45"); // true
is_numeric("3g.45"); // false


//? Conversion
$strNumber = '12.34';
var_dump($strNumber);
echo '<br>';
$number = (float)$strNumber; // Use (float) $var, (int) $var, (bool) $var 
var_dump($number);
echo '<br>';

//? Number functions
echo "abs(-15) => ". abs(-15). "</br>";
echo "pow(2,3) => ". pow(2,3). "</br>"; // x^2 = pow(x, 2);
echo "sqrt(16) => ". sqrt(16) . "</br>";
echo "max(10,2,3,8,9) => ". max(10,2, 3, 8, 9) ."</br>";
echo "min(10,2,3,8,9) => ". min(10,2, 3, 8, 9) ."</br>";
echo "round(2.4) => ". round(2.4) ."</br>"; 
echo "floor(2.4) => ". floor(2.4) . "</br>"; 
echo "celi(2.4) =>" . ceil(2.4) . "</br>"; 


//?  Formatting numbers
$number = 123456789.12345;
echo number_format($number, 2, '.', ',') . '<br>';

$phone_number = +8801867333284.0;
echo number_format($phone_number, 0, ' ', '-') . '<br>';


?>