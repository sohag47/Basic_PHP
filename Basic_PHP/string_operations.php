<?php
//! Url:  https://www.php.net/manual/en/ref.strings.php
/*
! '' vs "" 
*/
$name = 'sohag';
echo('Minhazul Islam '.$name."\n"); // for '' concatenate
echo("Minhazul Islam ".$name."\n"); // for "" concatenate

// variable interpolation 
echo('minhazul islam $name'."\n"); 
echo("minhazul islam $name"."\n");

echo('minhazul islam {$name}'."\n");
echo("minhazul islam {$name}"."\n");

/*
? double-quoted strings also accept special characters \n, \r, \t
*/

//! string operations
$var1 = " Hello World ";

//? strlen() for string length
echo("($var1) string length: ".strlen($var1)) ."\n";

//? remove extra space
echo trim($var1) ."\n";
echo ltrim($var1)."\n";
echo rtrim($var1)."\n";

//? str_word_count() for count word in a string
echo("($var1) word count: ".str_word_count($var1)."\n");

//? strrev() for string reverse
echo("($var1) string reverse: ". strrev($var1)."\n");

//? string upper case
echo "($var1) string uppercase: ". strtoupper($var1)."\n";

//? string lower case
echo "($var1) string lowercase: ". strtolower($var1)."\n";

//? only first latter upper case
echo "($var1) first latter uppercase: ". ucfirst('minhazul')."\n";

//? only first latter lower case
echo "($var1) first latter lowercase: ". lcfirst('MINHAZUL')."\n";

//? word first latter uppercase
echo "($var1) word first latter uppercase: ". ucwords('minhazul islam sohag')."\n";

//? strpos() for search text within a string
echo("($var1) string search: ". strpos($var1, "World"));

// //? stripos() for search text without case 
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