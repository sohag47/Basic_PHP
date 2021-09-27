<?php 
/*
! Static Methods 
*/
class Car{
    public static $text = "BMW";


    public static function testMethod(){
        echo self::$text;
    }
}

Car::testMethod();
echo "<br />";
echo Car::$text;


?>