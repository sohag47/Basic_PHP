<?php

declare(strict_types=1);

// Arrow Functions
$first_number = 1;
$Add = fn(int $user_input): float|int => $first_number + $user_input;

echo "Result:" . $Add(5) . PHP_EOL;

// equivalent to using $y by value:
$AddAnotherWay = function ($user_input) use ($first_number): float|int {
    return $user_input + $first_number;
};
echo "Result:" . $AddAnotherWay(5) . PHP_EOL;
