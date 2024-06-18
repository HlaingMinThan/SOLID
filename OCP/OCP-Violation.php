<?php

interface PaymentMethod
{
    public function process($amount);
}

class CreditCard implements PaymentMethod
{
    public function process($amount)
    {
        // Code to process credit card
        echo 'process payment with credit card';
    }
}
class Paypal implements PaymentMethod
{
    public function process($amount)
    {
        // Code to process paypal
        echo 'process payment with paypal';
    }
}
class PaymentProcessor
{
    public function process(PaymentMethod $paymentMethod, $amount)
    {
        $paymentMethod->process($amount); //closed for modification
    }
}

// Usage
$processor = new PaymentProcessor();
$processor->process(new CreditCard, 100);
$processor->process(new Paypal, 200);
