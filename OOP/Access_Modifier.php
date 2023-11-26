<?php
/*
! Access Modifiers
? public - the property or method can be accessed from everywhere. This is default
? protected - the property or method can be accessed within the class and by classes derived from that class
? private - the property or method can ONLY be accessed within the class
*/

class Fruit {
    public $name;
    public $color;
    public $weight;

    public function __construct(string $name, string $color, int $weight) {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    //! create methods
    function set_name($name){
        $this->name = $name;
    }
    private function set_color($color){
        $this->color = $color;
    }
    protected function set_weight($weight){
        $this->weight = $weight;
    }

    public function show(){
        echo "Name: {$this->name}, Color: {$this->color}, Weight: {$this->weight}g";
    }
}
//! create object
$fruit = new Fruit("apple", "red", 10);

$fruit->show();
//! data insert
// $object->set_name('Mango');
// // $object->set_color("Yellow");
// // $object->set_weight("150gm");

// //! data show
// echo($object->name);
// //echo($object->color);
// echo($object->weight);

?>