<?php

declare(strict_types=1);
/*
! php function like javascript
*/

//? basic function
function userInfo(string $name = '', string $email = '', int &$age = 0): array
{
    return [
        'name' => $name,
        'email' => $email,
        'age' => $age
    ];
}

$age = 26;
$result = userInfo("Minhazul Islam Sohag", "sohag@email.com", $age);
print_r($result) . PHP_EOL;


//? multiple value 
function testSum(...$num)
{
    return print_r($num);
}
testSum(1, 2, 3, 4, 5, 6);
echo "<br>";


//? Anonymous function 
$greet = function ($name) {
    echo $name;
};
$greet("Sohag");
echo "<br>";

//? Inherit $message
$message = "world";
$example = function ($arg) use ($message) {
    echo $arg . '' . $message . "\n";
};

$example("Hello");
echo "<br>";

//? arrow function
$y = 1;
$fn1 = fn($x) => $x + $y;
echo $fn1(2);
echo "<br>";

$fn2 = function ($x) use ($y) {
    return $x + $y;
};
var_export($fn2(2));
echo "<br>";


function find($needle, $haystack): void
{
    echo $needle . " " . $haystack;
}
find(
    haystack: 'PHP is awesome!',
    needle: 'awesome',

);
