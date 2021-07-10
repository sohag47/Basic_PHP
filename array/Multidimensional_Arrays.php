<?php 
//? 3. Multidimensional arrays

$cars = array( 
    array("volvo", 22, 18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);



function readArray($cars){
    $total_array = count($cars);
    
    // for($row=0; $row<$total_array; $row++){
    //     echo("<p><b>Row Number: </b>$row</p>");
    //    for($col=0; $col<$row; $col++){
    //        echo($cars[$row][$col]);
    //    }
    // }
    for ($row = 0; $row < $total_array; $row++) {
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
       

        for ($col = 0; $col < 3; $col++) {
          echo "<li>".$cars[$row][$col]."</li>";
        }
        echo "</ul>";
    }
}
readArray($cars);
?>