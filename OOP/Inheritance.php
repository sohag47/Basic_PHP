<?php
/*
! PHP Inheritance
*/

//! Parent Class
class Fruit {
    public $name;
    public $color;

    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    protected function intro(){
        echo("<br/> The fruit is {$this->name} and the color is {$this->color}.");
    }
}

//! Child Class
class Strawberry extends Fruit {

    public function message(){
        echo "Am I a fruit or a berry? ";
        $this->intro();
    }
}

//! create object
$objects = new Strawberry("Strawberry", "red");

//! call methods
$objects->message();
?>