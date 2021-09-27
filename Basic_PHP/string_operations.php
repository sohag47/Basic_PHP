<?php
//! Url:  https://www.php.net/manual/en/ref.strings.php
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
$var1 = " Hello World ";

//? strlen() for string length
echo("($var1) string length: ".strlen($var1)) ."</br>";

//? remove extra space
echo trim($var1) . "</br>";
echo ltrim($var1). "</br>";
echo rtrim($var1). "</br>";

//? str_word_count() for count word in a string
echo "<br/>";
echo("($var1) word count: ".str_word_count($var1));

//? strrev() for string reverse
echo "<br/>";
echo("($var1) string reverse: ". strrev($var1));

//? string upper case
echo "</br>";
echo "($var1) string uppercase: ". strtoupper($var1);

//? string lower case
echo "</br>";
echo "($var1) string lowercase: ". strtolower($var1);

//? only first latter upper case
echo "</br>";
echo "($var1) first latter uppercase: ". ucfirst('minhazul');

//? only first latter lower case
echo "</br>";
echo "($var1) first latter lowercase: ". lcfirst('MINHAZUL');

//? word first latter uppercase
echo "</br>";
echo "($var1) word first latter uppercase: ". ucwords('minhazul islam sohag');

//? strpos() for search text within a string
echo "<br/>";
echo("($var1) string search: ". strpos($var1, "World"));

//? stripos() for search text without case 
echo "<br/>";
echo("($var1) string search without case: ". stripos($var1, "World"));

//? substring
echo "<br/>";
echo("($var1) substring search: ". substr($var1, 8));

//? str_replace() for string replace
echo "<br/>";
echo("($var1) string replace: ". str_replace("World", "PHP", $var1));

//? str_replace() for string replace without case
echo "<br/>";
echo("($var1) string replace without case: ". str_ireplace("world", "PHP", $var1));

//! multiline text
$longText = "
Hello, 
My Name is Minahzul Islam Sohag,
I am 23,
I Love Coding
";

echo "</br>";
echo $longText."</br>";
//? show multiline text
echo nl2br($longText)."</br>";

//! Multiline text and reserve html tags
$longText = "
  Hello, 
  my name is <b>Minhazul Islam Sohag</b>
  I am <b>23</b>,
  I love <i> Coding </i>
";
echo "1 - " . $longText . '<br>';
echo "2 - " . nl2br($longText) . '<br>';
echo "3 - " . htmlentities($longText) . '<br>';
echo "4 - " . nl2br(htmlentities($longText)) . '<br>';
echo "5 - " . html_entity_decode(htmlentities($longText)) . '<br>';
echo "6 - " . htmlspecialchars($longText) . '<br>';

?>