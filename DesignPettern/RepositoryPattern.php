<?php

// Repository Pattern in PHP
interface UserRepository
{
    public function getUserById(int $id): ?array;
    public function saveUser(array $user): void;
}

class InMemoryUserRepository implements UserRepository
{
    private array $users = [];

    public function getUserById(int $id): ?array
    {
        return $this->users[$id] ?? null;
    }

    public function saveUser(array $user): void
    {
        $this->users[$user['id']] = $user;
    }
}

//? Usage
$repository = new InMemoryUserRepository();

$repository->saveUser(['id' => 1, 'name' => 'John Doe']);
$user = $repository->getUserById(1);


if ($user !== null) {
    echo "User found: " . $user['name'] . PHP_EOL;
} else {
    echo "User not found." . PHP_EOL;
}
