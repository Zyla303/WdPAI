<?php

class OrdersItemsUser
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
    private $user_id;
    private $user_name;
    private $user_surname;
    private $postalcode;
    private $town;
    private $steet;
    private $housenumber;
    private $flatnumber;
    private $email;
    private $password;
    private $level;
    private $paymentid;
    private $paymentname;


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
        int $userId,
        int $user_id,
        string $user_name,
        string $user_surname,
        string $postalcode,
        string $town,
        string $steet,
        string $housenumber,
        string $flatnumber,
        string $email,
        string $password,
        string $level,
        int $paymentid,
        string $paymentname


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
        $this->user_id= $user_id;
        $this->user_name =$user_name;
        $this->user_surname = $user_surname;
        $this->postalcode = $postalcode;
        $this-> town = $town;
        $this-> steet = $steet;
        $this-> housenumber = $housenumber;
        $this-> flatnumber = $flatnumber;
        $this-> email = $email;
        $this-> password = $password;
        $this-> level = $level;
        $this->paymentid = $paymentid;
        $this->paymentname = $paymentname;
    }

    /**
     * @return int
     */
    public function getPaymentid(): int
    {
        return $this->paymentid;
    }

    /**
     * @param int $paymentid
     */
    public function setPaymentid(int $paymentid): void
    {
        $this->paymentid = $paymentid;
    }

    /**
     * @return string
     */
    public function getPaymentname(): string
    {
        return $this->paymentname;
    }

    /**
     * @param string $paymentname
     */
    public function setPaymentname(string $paymentname): void
    {
        $this->paymentname = $paymentname;
    }

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->user_name;
    }

    /**
     * @param string $user_name
     */
    public function setUserName(string $user_name): void
    {
        $this->user_name = $user_name;
    }

    /**
     * @return string
     */
    public function getUserSurname(): string
    {
        return $this->user_surname;
    }

    /**
     * @param string $user_surname
     */
    public function setUserSurname(string $user_surname): void
    {
        $this->user_surname = $user_surname;
    }

    /**
     * @return string
     */
    public function getPostalcode(): string
    {
        return $this->postalcode;
    }

    /**
     * @param string $postalcode
     */
    public function setPostalcode(string $postalcode): void
    {
        $this->postalcode = $postalcode;
    }

    /**
     * @return string
     */
    public function getTown(): string
    {
        return $this->town;
    }

    /**
     * @param string $town
     */
    public function setTown(string $town): void
    {
        $this->town = $town;
    }

    /**
     * @return string
     */
    public function getSteet(): string
    {
        return $this->steet;
    }

    /**
     * @param string $steet
     */
    public function setSteet(string $steet): void
    {
        $this->steet = $steet;
    }

    /**
     * @return string
     */
    public function getHousenumber(): string
    {
        return $this->housenumber;
    }

    /**
     * @param string $housenumber
     */
    public function setHousenumber(string $housenumber): void
    {
        $this->housenumber = $housenumber;
    }

    /**
     * @return string
     */
    public function getFlatnumber(): string
    {
        return $this->flatnumber;
    }

    /**
     * @param string $flatnumber
     */
    public function setFlatnumber(string $flatnumber): void
    {
        $this->flatnumber = $flatnumber;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getLevel(): string
    {
        return $this->level;
    }

    /**
     * @param string $level
     */
    public function setLevel(string $level): void
    {
        $this->level = $level;
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