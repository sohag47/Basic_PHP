<?php
/*
! Php Constructor 
If you create a __construct() function, PHP will automatically call this function when you create an object from a class
*/

class Fruit {
    //? class Properties
    public $name;
    public $color;

    //? Method
    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    function getProperties(){
        echo("$this->name, $this->color \n");
        return;
    }
}

//! create object
$apple = new Fruit('Apple', 'RED');
$banana = new Fruit('Banana', 'YELLOW');

//! Show data & call method
$apple->getProperties();
$banana->getProperties();



?>