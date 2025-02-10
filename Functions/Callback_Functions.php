<?php
//! Callback Functions
function showMessage(string $message): string{
    return $message ."";
}

function greet($callback, $name): mixed {
    return $callback($name);
}
echo greet("showMessage", "Sohag");