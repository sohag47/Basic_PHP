<?php 
//! Arrow Functions

$y = 1;
$fn1 = fn($x): float|int => $x + $y;
echo $fn1(3);

// equivalent to using $y by value:
$fn2 = function ($x) use ($y): float|int {
    return $x + $y;
};
echo $fn2(3);