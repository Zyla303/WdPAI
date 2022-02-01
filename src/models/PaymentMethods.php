<?php

class PaymentMethods
{
    private $id;
    private $namePaymentMetod;

    public function __construct(
        int $id,
        string $namePaymentMetod
    ){
        $this->id = $id;
        $this->namePaymentMetod = $namePaymentMetod;
    }


    public function getId(): int
    {
        return $this->id;
    }


    public function setId(int $id): void
    {
        $this->id = $id;
    }


    public function getNamePaymentMetod(): string
    {
        return $this->namePaymentMetod;
    }


    public function setNamePaymentMetod(string $namePaymentMetod): void
    {
        $this->namePaymentMetod = $namePaymentMetod;
    }

}