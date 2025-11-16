<?php

setcookie("theme", "dark", [
    // "expires"  => time() + 3600,
    "path"     => "/",
    "secure"   => true,   // HTTPS only
    "httponly" => true,   // JavaScript cannot read
    "samesite" => "Strict"
]);

if (isset($_COOKIE['theme'])) {
    echo $_COOKIE['theme'];
}
