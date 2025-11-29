<?php
// Service Container Design Pattern in PHP
class ServiceContainer
{
    private array $services = [];

    public function register(string $name, callable $resolver): void
    {
        $this->services[$name] = $resolver;
    }

    public function resolve(string $name)
    {
        if (isset($this->services[$name])) {
            return $this->services[$name]();
        }
        throw new Exception("Service not found: " . $name);
    }
}

// Usage
$container = new ServiceContainer();
$container->register('logger', function () {
    return new class {
        public function log(string $message): void
        {
            echo "Log: " . $message . PHP_EOL;
        }
    };
});
$logger = $container->resolve('logger');
$logger->log("This is a test log message.");

$container->register('database', function () {
    return new class {
        public function connect(): void
        {
            echo "Database connected." . PHP_EOL;
        }
    };
});
$database = $container->resolve('database');
$database->connect();
