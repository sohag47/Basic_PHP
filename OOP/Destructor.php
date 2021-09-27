<?php
/*
! Php Destructor
If you create a __destruct() function, PHP will automatically call this function at the end of the script.
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
    
    function __destruct(){
        echo("The fruit is {$this->name}, and the color is {$this->color} <br/>");
    }
}

//! create object
$apple = new Fruit('Apple', 'RED');
$banana = new Fruit('Banana', 'YELLOW');

?>