<?php

//! Learning Singleton Design Pattern in PHP
class Singleton
{
    private static ?Singleton $instance = null;

    private function __construct() {}

    public static function getInstance(): Singleton
    {
        if (self::$instance === null) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

    public function showMessage(): void
    {
        echo "Hello from Singleton!";
    }
}


// Usage
$singleton = Singleton::getInstance();
$singleton->showMessage();
