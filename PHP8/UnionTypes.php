<?php
 # explanation: This file demonstrates the use of Union Types in PHP 8.

declare(strict_types=1);
function UnionTypes(int|float $a, int|float $b): int|float { 
    return $a + $b;
}
echo UnionTypes(1, 2) . PHP_EOL;

class User {
    public string $name;
    public function __construct(public string $username){
        $this->name = $username;
    }
    
}

$user1 = new User("Sohag");
echo $user1->name . PHP_EOL;

function findUser(int $id) {
    $sohag = new User("Sohag");
    return $id === 1 ? $sohag->name : null;
}

echo  findUser(1);