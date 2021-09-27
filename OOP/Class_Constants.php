<?php
/*
! Php Class constant 
* scope resolution operator (::)
*/
class GoodBye{
    const LEAVING_MESSAGE = "Thanks for visiting coder origin";
    public function byeBye(){
        //* use constant inside the function
        echo self::LEAVING_MESSAGE;
    }
}

//* when call outside the class
echo GoodBye::LEAVING_MESSAGE;
echo "<br >";


//! create object
$good_bye = new GoodBye();
$good_bye->byeBye();


?>