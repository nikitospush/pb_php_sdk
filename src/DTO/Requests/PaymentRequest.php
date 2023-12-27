<?php

namespace PayablSdkPhp\DTO\Requests;


class PaymentRequest
{
    public string $cardholder_name;
    public ?string $firstname = null;
    public ?string $lastname = null;
    public ?string $street = null;
    public ?string $zip = null;
    public ?string $city = null;
    public ?string $state = null;
    public ?string $country = null;
    public ?string $email = null;
    public ?string $customerip = null;
    public float $amount;
    public string $currency;
    public int $payment_method;

    public function __construct(array $params)
    {

        $this->amount = $params['amount'];
        $this->currency = $params['currency'];
        $this->payment_method = $params['payment_method'];
        $this->cardholder_name = $params['cardholder_name'];
        $this->customerip = $params['customerip'];
        $this->firstname = $params['firstname'];
        $this->lastname = $params['lastname'];
        $this->street = $params['street'];
        $this->zip = $params['zip'];
        $this->city = $params['city'];
        $this->state = $params['state'];
        $this->country = $params['country'];

        // todo add checks
    }
}