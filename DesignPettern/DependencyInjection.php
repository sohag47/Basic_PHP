<?php

// Dependency Injection Design Pattern in PHP
interface ILogger
{
    public function log(string $message): void;
}


class FileLogger implements ILogger
{
    public function log(string $message): void
    {
        echo "Logging to a file: $message";
    }
}
class DatabaseLogger implements ILogger
{
    public function log(string $message): void
    {
        echo "Logging to a database: $message";
    }
}

class UserService
{
    private ILogger $logger;

    public function __construct(ILogger $logger)
    {
        $this->logger = $logger;
    }

    public function createUser(string $username): void
    {
        // Logic to create a user
        $this->logger->log("User '$username' created.");
    }
}
// Usage
$fileLogger = new FileLogger();
$userService = new UserService($fileLogger);
$userService->createUser('john_doe');
echo "\n";
$databaseLogger = new DatabaseLogger();
$userServiceDb = new UserService($databaseLogger);
$userServiceDb->createUser('jane_doe');
