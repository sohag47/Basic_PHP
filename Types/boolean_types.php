<?php
/* 
! Boolean Type
* Check Types
* Type Casting 
* Build in methods
* Operations
*/

function showResult($name, $data) {
    echo $name."=>". $data."\n";
}

$is_admin = true;

//show data
showResult("is_admin", $is_admin); // result: 1

// check data types
showResult("var_dump((is_admin))", var_dump(($is_admin))); //result: bool(true)
showResult("gettype(is_admin)", gettype($is_admin)); // result: boolean
showResult("is_bool(is_admin)", is_bool($is_admin)); // result: 1


// typecasting 
$temp = "true";
showResult("gettype(temp)",gettype($temp));

$update_type = (boolean) $temp;
$update_type2 = settype($temp, "boolean");


showResult("gettype($update_type)",gettype($update_type));
showResult("update_type", $update_type);

showResult("gettype(update_type2)",gettype($update_type2));
showResult("update_type2", $update_type2);

// build in methods
showResult("boolval(temp)", boolval("ok"));

?>