<?php

/*
! '' vs "" 
*/
$name = 'sohag';
echo('Minhazul Islam '.$name.'<br/>');
echo("Minhazul Islam ".$name.'<br/>');

echo('minhazul islam $name <br/>');
echo("minhazul islam $name <br/>");
echo '<br/>';



//! string operations
$var1 = "Hello World";

//? strlen() for string length
echo("($var1) string length: ".strlen($var1));

//? str_word_count() for count word in a string
echo "<br/>";
echo("($var1) word count: ".str_word_count($var1));

//? strrev() for string reverse
echo "<br/>";
echo("($var1) string reverse: ". strrev($var1));

//? strpos() for search text within a string
echo "<br/>";
echo("($var1) string search: ". strpos($var1, "World"));

//? str_replace() for string replace
echo "<br/>";
echo("($var1) string replace: ". str_replace("World", "PHP", $var1));
?>