<?php

//! Named Arguments

declare(strict_types=1);


function createUser(string $name, int | string $age, string $city)
{
    return "Name: $name, Age: $age, City: $city";
}

echo createUser(age: 30, city: "New York", name: "Alice") . PHP_EOL;
