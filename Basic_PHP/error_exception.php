<?php

class PaymentException extends Exception
{
    protected $errorCode;

    public function __construct($message, $errorCode = 0)
    {
        parent::__construct($message);
        $this->errorCode = $errorCode;
    }

    public function getErrorCode()
    {
        return $this->errorCode;
    }
}

class PaymentProcessor
{
    public static function processPayment($amount)
    {
        try {
            echo "Processing payment..." . PHP_EOL;
            if ($amount <= 0) {
                throw new PaymentException("Payment failed due to insufficient funds", $amount);
            }
            echo "Payment processed successfully!" . PHP_EOL;
        } catch (PaymentException $e) {
            error_log("Payment Error: " . $e->getMessage());
        } catch (Exception $e) {
            error_log("General error: " . $e->getMessage());
        } finally {
            echo "Payment process completed." . PHP_EOL;
        }
    }
}

PaymentProcessor::processPayment(-50);
