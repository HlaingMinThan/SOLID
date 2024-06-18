<?php

class PaymentProcessor
{
    public function process($paymentType, $amount)
    {
        if ($paymentType == 'credit_card') {
            $this->processCreditCardPayment($amount);
        } elseif ($paymentType == 'paypal') {
            $this->processPayPalPayment($amount);
        } else {
            throw new Exception("Unsupported payment type");
        }
    }

    private function processCreditCardPayment($amount)
    {
        echo "Processing credit card payment of $" . $amount . "\n";
    }

    private function processPayPalPayment($amount)
    {
        echo "Processing PayPal payment of $" . $amount . "\n";
    }
}

// Usage
$processor = new PaymentProcessor();
$processor->process('credit_card', 100);
$processor->process('paypal', 200);
