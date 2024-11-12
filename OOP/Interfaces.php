<?php
/*
! Interface
*/

// ? create an interface:
interface SwimAbleInterface 
{
    public function swim();
}

interface FlyAbleInterface 
{
    public function fly();
}

//? 1.interface implement with class:
class Penguin implements SwimAbleInterface 
{
    public function swim()
    {
        echo "🐧Penguin with class of: ".__Method__."\n";
    }
}

class Bird implements FlyAbleInterface 
{
    public function fly()
    {
        echo "🐦Bird with class of: ".__Method__."\n";
    }
}

class Duck implements FlyAbleInterface, SwimAbleInterface 
{
    public function fly()
    {
        echo "🦆Duck with class of: ".__Method__."\n";
    }

    public function swim()
    {
        echo "🦆 Duck with class of: ".__Method__."\n";
    }
}

//? create objects
// $penguin = new Penguin();
// $penguin->swim();

// $bird = new Bird();
// $bird->fly();

// $duck = new Duck();
// $duck->fly();
// $duck->swim();


interface PetInterface extends SwimAbleInterface, FlyAbleInterface
{
    function pet();
}

class MyPet implements PetInterface
{
    public function __construct(public string $name) {}

    public function fly()
    {
        echo "{$this->name} with class of: ".__Method__."\n";
    }

    public function swim()
    {
        echo "{$this->name} with class of: ".__Method__."\n";
    }

    public function pet()
    {
        echo "{$this->name} with class of: ".__Method__."\n";
    }

    public function callAllMethods()
    {
        $this->fly();
        $this->swim();
        $this->pet();
    }
}

$my_cute_pet = new MyPet("🐔Jac");
$my_cute_pet->callAllMethods();


