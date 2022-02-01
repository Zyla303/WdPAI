<?php

class Order {
    private $ID;
    private $product;
    private $paymentMethod;
    private $paymentStatus;
    private $paymentDate;
    private $customized;
    private $reciptInvoice;
    private $orderStatus;
    private $userId;

    public function __construct(
        int $ID,
        int $product,
        int $paymentMethod,
        int $paymentStatus,
        string $paymentDate,
        int $customized,
        string $reciptInvoice,
        int $orderStatus,
        int $userId
    ) {
        $this->ID = $ID;
        $this->product = $product;
        $this->paymentMethod = $paymentMethod;
        $this->paymentStatus = $paymentStatus;
        $this->paymentDate = $paymentDate;
        $this->customized = $customized;
        $this->reciptInvoice = $reciptInvoice;
        $this->orderStatus = $orderStatus;
        $this->userId = $userId;
    }

    public function getID(): int
    {
        return $this->ID;
    }

    public function setID(int $ID): void
    {
        $this->ID = $ID;
    }

    public function getProduct(): int
    {
        return $this->product;
    }

    public function setProduct(int $product): void
    {
        $this->product = $product;
    }

    public function getPaymentMethod(): int
    {
        return $this->paymentMethod;
    }

    public function setPaymentMethod(int $paymentMethod): void
    {
        $this->paymentMethod = $paymentMethod;
    }

    public function getPaymentStatus(): int
    {
        return $this->paymentStatus;
    }

    public function setPaymentStatus(int $paymentStatus): void
    {
        $this->paymentStatus = $paymentStatus;
    }

    public function getPaymentDate(): string
    {
        return $this->paymentDate;
    }

    public function setPaymentDate(string $paymentDate): void
    {
        $this->paymentDate = $paymentDate;
    }

    public function getCustomized(): int
    {
        return $this->customized;
    }

    public function setCustomized(int $customized): void
    {
        $this->customized = $customized;
    }

    public function getReciptInvoice(): string
    {
        return $this->reciptInvoice;
    }

    public function setReciptInvoice(string $reciptInvoice): void
    {
        $this->reciptInvoice = $reciptInvoice;
    }

    public function getOrderStatus(): int
    {
        return $this->orderStatus;
    }

    public function setOrderStatus(int $orderStatus): void
    {
        $this->orderStatus = $orderStatus;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

}