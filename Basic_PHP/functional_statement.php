<?php
/*
! php function like javascript
*/

//? basic function
function testShow($message){
    echo($message);
} 
testShow("Hello, it is me(sohag)"."\n");
testShow("Hello, it is me(sohag)"."\n");

//? multiple value 
function testSum(...$num){
    return var_dump($num);
}
echo testSum(1, 2,3,4,5,6);

//? arrow function

?>