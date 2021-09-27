<?php
//! NameSpace create virtual directory

include "cat.php";
include "dog.php";

use Animals\Cat as Cat;
use Animals\Dog as Dog;

$cat = new Cat();
$cat->greet();

$dog = new Dog();
$dog->greet();

?>