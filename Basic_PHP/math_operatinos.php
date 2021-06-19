<?php
//! math operation
//echo(pi());

echo("minimum value: (0, 150, 30, 20, -8, -200) => ".min(0, 150, 30, 20, -8, -200));  //? minimum value
echo "<br/>";

echo("maximum value: (0, 150, 30, 20, -8, -200) => ".max(0, 150, 30, 20, -8, -200));  //? maximum value
echo "<br/>";

echo("absolute  positive number: (-200) => ".abs(-200));  //? absolute  positive value
echo "<br/>";

echo("square  root value: (64) => ".sqrt(64));  //? square  root value
echo "<br/>";

echo("round value: (1.44) =>".round(1.44));  //? round value
echo "<br/>";

echo("random value: ".rand());  //? random value
echo "<br/>";
echo("random value: (10, 100) =>".rand(10, 100));
echo "<br/>";
?>