<?php
/*
! Conditional Statement in PHP
*/

$age = 20;
$salary = 30000;

//? Difference between == and ===
if ($age == 20) echo "true \n";
if ($age == '20') echo "true \n";

if ($age === 20) echo "true \n";
if ($age === '20') echo "false \n";

//? if AND OR 
if ($age === 20 && $salary === 30000) {
    echo "OK \n";
}
if ($age === '20' || $salary === 30000) {
    echo "OK \n";
}

//? ternary operator
echo $age < 22 ? "Young \n" : "Old \n";

//? short ternary operator
$my_age = $age ?: 18;
echo $my_age;
echo "\n";

//? null coalescing operator
$my_age = isset($age) ? $age : "18";
echo $my_age;
echo "\n";

$my_age = $age ?? '18';
echo $my_age;
echo "\n";


$paymentStatus = 'paid';
$message = match ($paymentStatus) {
    'paid' => 'Payment has been received.',
    'pending' => 'Payment is pending.',
    'failed' => 'Payment failed.',
    default => 'Unknown payment status.',
};
echo $message . PHP_EOL;

class Profile
{
    public string $email = "sohag@email.com";
}

class User
{
    public ?Profile $profile;
}

$user = new User();
$user->profile = null;

$email = $user?->profile?->email;
var_dump($email);
