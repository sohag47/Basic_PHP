<?php
declare(strict_types=1);
//! Anonymous Functions 

$showMessage = function(string $message): string {
    return $message;
};

echo $showMessage("1");

