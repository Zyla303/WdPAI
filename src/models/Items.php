<?php

class Items
{
    private $id;
    private $name;
    private $price;
    private $description;
    private $image;
    private $imagesFolder;
    private $category;
    private $creator_product;

    public function __construct(
        int $id,
        string $name,
        float $price,
        string $description,
        string $image,
        string $imagesFolder,
        int $category,
        int $creator_product
    ){
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->image = $image;
        $this->imagesFolder = $imagesFolder;
        $this->category = $category;
        $this->creator_product = $creator_product;

    }

    public function getCreatorProduct()
    {
        return $this->creator_product;
    }

    public function setCreatorProduct($creator_product): void
    {
        $this->creator_product = $creator_product;

    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category): void
    {
        $this->category = $category;

    }

    public function getImagesFolder()
    {
        return $this->imagesFolder;
    }

    public function setImagesFolder($imagesFolder): void
    {
        $this->imagesFolder = $imagesFolder;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image): void
    {
        $this->image = $image;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price): void
    {
        $this->price = $price;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description): void
    {
        $this->description = $description;
    }



}