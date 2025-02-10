<?php

//! Final Class
// A class can be declared final (final class ClassName) to prevent it from being extended. 
// This is useful when you want a class to have a fixed implementation that should not be modified by other classes.
// For example, the PHP core class Exception is a final class that cannot be extended.
// The following example demonstrates how to declare a final class:

final class Database
{
    public function connect() {
        echo "Connecting to the database..." . PHP_EOL;
    }
}


// class MySQLDatabase extends Database
// {
//     // This will produce a fatal error
//     // Fatal error: Class Database may not inherit from final class (Database)
//     public function connect() {
//         echo "Connecting to the MySQL database..." . PHP_EOL;
//     }
// }

// $db = new MySQLDatabase();
// $db->connect();

class ParentClass {
    final public function showMessage() {
        echo "This is a final method." . PHP_EOL;
    }

    public function greet() {
        echo "Hello from ParentClass!" . PHP_EOL;
    }
}

class ChildClass extends ParentClass
{
    public function greet() {
        echo "Hello from ChildClass!" . PHP_EOL;
    }

    // This will produce a fatal error
    // Fatal error: Cannot override final method ParentClass::showMessage()
    public function showMessage() {
        echo "This is a final method in ChildClass." . PHP_EOL;
    }
}

$child = new ChildClass();
$child->showMessage();