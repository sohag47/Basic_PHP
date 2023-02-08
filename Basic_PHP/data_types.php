<?php
/*
! php data types:
? string, int, float, boolean, array, object, null, resource
*/
//? null type
$var = null;
$text = "test";
echo $var;
echo is_null($var) . "\n";
unset($text);
echo $text . "\n";

//? Booleans
$foo = TRUE;
echo $foo . "\n";
var_dump((bool) "");        // bool(false)
var_dump((bool) "0");       // bool(false)
var_dump((bool) 1);         // bool(true)
var_dump((bool) -2);        // bool(true)
var_dump((bool) "foo");     // bool(true)
var_dump((bool) 2.3e5);     // bool(true)
var_dump((bool) array(12)); // bool(true)
var_dump((bool) array());   // bool(false)
var_dump((bool) "false");   // bool(true)

//?   string data type
// $str1 = "minhazul Islam";
// $str2 = "sohag";
// echo $str1 . "&nbsp;" . $str2;
// echo ("&nbsp;");
// echo (var_dump($str1)); //! check data type


// //? (int, float) data type
// $int1 = 10;
// $float1 = 10.5;
// echo ("\n");

// echo ($int1);
// echo (var_dump($int1));

// echo ("\n");
// echo ("&nbsp;" . $float1);
// echo (var_dump($float1));

// //? boolean data types 
// $bool1 = true;
// $bool2 = false;

// echo ("\n");
// echo (var_dump($bool1));
