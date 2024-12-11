<?php
class Vehicle {
    protected string $brand;

    public function __construct(string $brand) {
        $this->brand = $brand;

    }

    public function start(): string {
        return "Vehicle is starting \n";
    }
}
abstract class CarDetails
{
    abstract public function show(): string;
    public function sohag(): string
    {
        return "";
    }
}

class Car extends CarDetails
{
    public string $color;
    public string $model;
    private float $price;


    public function __construct(string $color, string $model, float $price)
    {
        $this->color = $color;
        $this->model = $model;
        $this->price = $price;
    }

    public function display(): string
    {
        return "Color: $this->color, $this->model, $this->price \n";
    }
    public function show(): string
    {
        return "Color: $this->color, $this->model, $this->price \n";
    }
}
$car = new Car("Red", "BMW", 10);
//! 1. Classes and Objects with Types
echo $car->display();

//! 2. Inheritance with Types 
// echo $car->start();

//! 5. Abstraction with Types
echo $car->show();

//! Interface
interface Logger
{
    public function log(string $message): void;
    public function sohag(): string;
}

//! Traits
trait LoggerTrait {
    public function logTrait(string $message): void {
        echo "Logging: $message";
    }

}
class FileLogger implements Logger {
    use LoggerTrait;
    public function log(string $message): void
    {
        echo $message;
    }
    public function sohag(): string
    {
        return "";
    }
}
$fileLogger = new FileLogger();
$fileLogger->log("File log message"); 
$fileLogger->logTrait("Hello");
echo "\n";
?>
