<?php 
/*
! Static Methods 
*/
class ParentClass{
    public static $text = "BMW";


    public static function testMethod(){
        echo self::$text ."\n";
    }
}

ParentClass::testMethod();  
echo ParentClass::$text."\n";

class ChildClass extends ParentClass {
    public static $text = "ChildClass";
}
echo ChildClass::testMethod();


?>