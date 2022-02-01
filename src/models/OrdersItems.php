<?php

class OrdersItems
{
    private $id;
    private $name;
    private $price;
    private $description;
    private $image;
    private $imagesFolder;
    private $category;
    private $creator_product;
    private $id_order;
    private $product;
    private $paymentMethod;
    private $paymentStatus;
    private $paymentDate;
    private $customized;
    private $reciptInvoice;
    private $orderStatus;
    private $userId;

    public function __construct(
        int $id,
        string $name,
        float $price,
        string $description,
        string $image,
        string $imagesFolder,
        int $category,
        int $creator_product,
        int $id_order,
        int $product,
        int $paymentMethod,
        int $paymentStatus,
        string $paymentDate,
        int $customized,
        string $reciptInvoice,
        int $orderStatus,
        int $userId
    ){
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->image = $image;
        $this->imagesFolder = $imagesFolder;
        $this->category = $category;
        $this->creator_product = $creator_product;
        $this->id_order = $id_order;
        $this->product = $product;
        $this->paymentMethod = $paymentMethod;
        $this->paymentStatus = $paymentStatus;
        $this->paymentDate = $paymentDate;
        $this->customized = $customized;
        $this->reciptInvoice = $reciptInvoice;
        $this->orderStatus = $orderStatus;
        $this->userId = $userId;

    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getIdUser(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setIdUser(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getImagesFolder(): string
    {
        return $this->imagesFolder;
    }

    /**
     * @param string $imagesFolder
     */
    public function setImagesFolder(string $imagesFolder): void
    {
        $this->imagesFolder = $imagesFolder;
    }

    /**
     * @return int
     */
    public function getCategory(): int
    {
        return $this->category;
    }

    /**
     * @param int $category
     */
    public function setCategory(int $category): void
    {
        $this->category = $category;
    }

    /**
     * @return int
     */
    public function getCreatorProduct(): int
    {
        return $this->creator_product;
    }

    /**
     * @param int $creator_product
     */
    public function setCreatorProduct(int $creator_product): void
    {
        $this->creator_product = $creator_product;
    }

    /**
     * @return int
     */
    public function getIdOrder(): int
    {
        return $this->id_order;
    }

    /**
     * @param int $ID
     */
    public function setIdOrder(int $id_order): void
    {
        $this->id_order = id_order;
    }

    /**
     * @return int
     */
    public function getProduct(): int
    {
        return $this->product;
    }

    /**
     * @param int $product
     */
    public function setProduct(int $product): void
    {
        $this->product = $product;
    }

    /**
     * @return int
     */
    public function getPaymentMethod(): int
    {
        return $this->paymentMethod;
    }

    /**
     * @param int $paymentMethod
     */
    public function setPaymentMethod(int $paymentMethod): void
    {
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * @return int
     */
    public function getPaymentStatus(): int
    {
        return $this->paymentStatus;
    }

    /**
     * @param int $paymentStatus
     */
    public function setPaymentStatus(int $paymentStatus): void
    {
        $this->paymentStatus = $paymentStatus;
    }

    /**
     * @return string
     */
    public function getPaymentDate(): string
    {
        return $this->paymentDate;
    }

    /**
     * @param string $paymentDate
     */
    public function setPaymentDate(string $paymentDate): void
    {
        $this->paymentDate = $paymentDate;
    }

    /**
     * @return int
     */
    public function getCustomized(): int
    {
        return $this->customized;
    }

    /**
     * @param int $customized
     */
    public function setCustomized(int $customized): void
    {
        $this->customized = $customized;
    }

    /**
     * @return string
     */
    public function getReciptInvoice(): string
    {
        return $this->reciptInvoice;
    }

    /**
     * @param string $reciptInvoice
     */
    public function setReciptInvoice(string $reciptInvoice): void
    {
        $this->reciptInvoice = $reciptInvoice;
    }

    /**
     * @return int
     */
    public function getOrderStatus(): int
    {
        return $this->orderStatus;
    }

    /**
     * @param int $orderStatus
     */
    public function setOrderStatus(int $orderStatus): void
    {
        $this->orderStatus = $orderStatus;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

}