<?php

class Category
{
    private int $category_id;
    private string $category_name;

    public function __construct(
        int $category_id,
        string $category_name
    ){
        $this->category_id = $category_id;
        $this->category_name = $category_name;

    }

    public function getCategoryId(): int
    {
        return $this->category_id;
    }

    public function setId($category_id): void
    {
        $this->category_id = $category_id;
    }

    public function getCategoryName(): string
    {
        return $this->category_name;
    }

    public function setName($category_name): void
    {
        $this->category_name = $category_name;
    }

}