<?php

namespace PayableSdkPhp\DTO\Requests;


class PaymentRequest
{
    public string $cardHolder;
    public string $lastname;
    public float $amount;
}