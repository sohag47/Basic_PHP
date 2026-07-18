<?php

declare(strict_types=1);

$message = 'Hello';

function Welcome(string $name, string $description): string {
  global $message;
  return "{$message}, {$name} {$description}";
}

echo Welcome("PHP", "welcome to php") . PHP_EOL;

echo Welcome(name: "Laravel", description: "Welcome to laravel") . PHP_EOL;

