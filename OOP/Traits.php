<?php 
/*
* Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).
*/

trait message1 {
    public function msg1(){
        echo "Message 1";
    }
}
trait message2{
    public function msg2(){
        echo "Message 2";
    }
}

class Welcome{
    use message1, message2;
}


$obj = new Welcome();
$obj->msg1();
echo "<br />";
$obj->msg2();

?>