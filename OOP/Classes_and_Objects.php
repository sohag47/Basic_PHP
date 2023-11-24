<?php
/*
! Php Class and Objects 
*/
class Fruit {
    //? class Properties
    public $title;
    public $name;
    public $color;

    //? Method
    function set_properties($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    function get_properties(){
        echo("$this->name, $this->color \n");
    }
}

//! create object
$obj = new Fruit();
$apple = new Fruit();
$banana = new Fruit();

//! call methods 
$obj->title = "Fruits, Color";
$apple->set_properties('Apple', 'RED');
$banana->set_properties('Banana', 'YELLOW');

//! Show data & call method
echo("$obj->title \n");
$apple->get_properties();
$banana->get_properties();

//! check class methods, properties
var_dump($obj instanceof Fruit);

?>