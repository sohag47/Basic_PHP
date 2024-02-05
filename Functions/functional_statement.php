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
var_dump($result);
echo "\n";


//? multiple value 
function testSum(...$num)
{
    return var_dump($num);
}
echo testSum(1, 2, 3, 4, 5, 6);

//? Anonymous function 
$greet = function ($name) {
    echo $name;
};
$greet("Sohag \n");

//? Inherit $message
$message = "world";
$example = function ($arg) use ($message) {
    echo $arg . '' . $message . "\n";
};

$example("Hello");


//? arrow function
$y = 1;
$fn1 = fn ($x) => $x + $y;
echo $fn1(2);
"\n";

$fn2 = function ($x) use ($y) {
    return $x + $y;
};
var_export($fn2(2));
"\n";


function find($needle, $haystack) : void {
    echo $needle." ".$haystack;
}
find(
    needle : 'awesome',
    haystack : 'PHP is awesome!'
    
);
