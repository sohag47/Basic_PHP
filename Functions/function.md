# Function Documentation
## Type of functions
- general function
- arrow function
- anonymous function
- callback function

---
### General function
```php
function Welcome(string $name, string $description): string {
  return "{$message}, {$name} {$description}";
}

echo Welcome("PHP", "welcome to php") . PHP_EOL;
```
---
### Anonymous function
```php
$Show = function(string $message): void {
    echo $message;
};

$Show("It is Anonymous Function ");
```
---
### Arrow function
```php
$first_number = 1;
$Add = fn(int $user_input): float|int => $first_number + $user_input;

echo "Result:" . $Add(5) . PHP_EOL;
```
```php
// equivalent to using $y by value:
$AddAnotherWay = function ($user_input) use ($first_number): float|int {
    return $user_input + $first_number;
};
echo "Result:" . $AddAnotherWay(5) . PHP_EOL;
```

