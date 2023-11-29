<?php 

/*
! php abstract class
*/

//* parent class
abstract class Car {
    public $name;
    public function __construct($name){
        $this->name = $name;
    }

    abstract public function intro(): string;
}


//* child class
class Audi extends Car {
    public function intro(): string
    {
        return "Choose German quality! I'm an $this->name";
    }
}


//! create object
$audi = new Audi("Audi");
echo "{$audi->intro()} \n";


class Mercedes extends Car 
{
    public function intro(): string
    {
        return "Choose German quality! I'm an $this->name";
    }
}
$mercedes = new Mercedes("Mercedes");
echo "{$mercedes->intro()} \n";
