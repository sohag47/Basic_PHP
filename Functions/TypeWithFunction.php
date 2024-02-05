<?php

declare(strict_types=1);
/*
! php function with type
*/

function add(float $x, float $y) : float
{
    return $x + $y;
}
echo add(1, 2);

?>