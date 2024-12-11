<?php

class Vehicle {
    protected string $brand;

    public function __construct(string $brand) {
        $this->brand = $brand;
    }

    public function start(): string {
        return "Vehicle is starting";
    }
}

class Car extends Vehicle {
    public string $color;
    public string $model;

    public function __construct(string $color, string $model)
    {
        $this->color = $color;
        $this->model = $model;
    }

    public function display() 
    {
        return "Car: $this->color , $this->model, $this->brand";
    }
}

$car = new Car("Red", "BMW");
echo $car->display();
echo $car->start();

//! Inheritance with Types
?>