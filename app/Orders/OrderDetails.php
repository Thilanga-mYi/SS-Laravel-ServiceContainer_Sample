<?php

namespace App\Orders;
 
use App\Billing\PaymentGatewayContract;

class OrderDetails
{

    private $BankPaymentGateway;

    public function __construct(PaymentGatewayContract $BankPaymentGateway)
    {
        $this->BankPaymentGateway = $BankPaymentGateway;
    }

    public function all()
    {
        $this->BankPaymentGateway->setDiscount(500);

        return [
            'name' => 'Thilanga',
            'address' => '123 Aries Solutions Street, Colombo',
        ];
    }
}
