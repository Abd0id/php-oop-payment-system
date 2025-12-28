<?php

include_once "./entity/Payment.php";


class CriditCsrd extends Payment
{

    private $creditCardNumber;

    public function __construct($montant, $creditCardNumber)
    {
        parent::__construct($montant);
        $this->creditCardNumber = $creditCardNumber;
    }

    public function __get($property)
    {
        return $this->$property;
    }

    public function pay()
    {
        $this->status = self::PAID;
        $this->order->setStatus(Order::STATUS_PAYE);
    }
}
