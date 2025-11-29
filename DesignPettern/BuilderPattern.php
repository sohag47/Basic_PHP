<?php

// Builder Pattern in PHP

class User
{
    private string $name;
    private string $email;
    private int $age;

    public function __construct(string $name, string $email, int $age)
    {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
    }

    public function getInfo()
    {
        return "Name: {$this->name}, Email: {$this->email}, Age: {$this->age}";
    }
}

// Usage
class UserBuilder
{
    private string $name = '';
    private string $email = '';
    private int $age = 0;

    public function setName(string $name): UserBuilder
    {
        $this->name = $name;
        return $this;
    }

    public function setEmail(string $email): UserBuilder
    {
        $this->email = $email;
        return $this;
    }

    public function setAge(int $age): UserBuilder
    {
        $this->age = $age;
        return $this;
    }

    public function build(): User
    {
        return new User($this->name, $this->email, $this->age);
    }
}

$builder = new UserBuilder();
$user = $builder
    ->setName('Jane Doe')
    ->setEmail('doe@email.com')
    ->setAge(28)
    ->build();

echo $user->getInfo() . PHP_EOL;
