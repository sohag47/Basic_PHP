<?php 
//! Null Safe
$user = null;
$result = null;

$result = $user?->name ?? "Value not found";
echo $result;
?>