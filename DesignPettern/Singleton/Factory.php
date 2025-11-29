<?php

// Factory Design Pattern in PHP

interface PaymentGateway
{
    public function pay(float $amount): void;
}

class PayPal implements PaymentGateway
{
    public function pay(float $amount): void
    {
        echo "Paying $amount using PayPal.";
    }
}

class Stripe implements PaymentGateway
{
    public function pay(float $amount): void
    {
        echo "Paying $amount using Stripe.";
    }
}

class PaymentGatewayFactory
{
    public static function create(string $type): ?PaymentGateway
    {
        return match (strtolower($type)) {
            'paypal' => new PayPal(),
            'stripe' => new Stripe(),
            default => null,
        };
    }
}
// Usage
$gateway = PaymentGatewayFactory::create('paypal');
if ($gateway !== null) {
    $gateway->pay(100.0);
} else {
    echo "Invalid payment gateway type.";
}
