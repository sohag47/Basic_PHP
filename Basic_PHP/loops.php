<?php
/*
!loops 
? while(), for(),  foreach(), do..while()
*/
$x = 2;

//? while() loop
while($x <= 5){
    print($x." ");
    $x++;
}

echo("<br/>");
$x = 2;
//? do..while() loop
do{
    print($x." ");
    $x++;
}while($x <= 5);

echo "<br/>";
//? for() loop
for($x=0; $x<=5 ; $x++){
    echo($x." ");
}

echo "<br/>";
//? foreach() loop
$array1 = array(0,1,2,3,4,5,6,7,8,9,10);
foreach($array1 as $i){
    echo($i." ");
}
?>