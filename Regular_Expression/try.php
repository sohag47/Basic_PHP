<?php
/*
! Regular Expressions
?Regular Expression Functions: preg_match(), preg_match_all(), preg_replace()	
*/

$url = "home";

$route = "/w3school/";

echo(preg_match($route, $url));
?>