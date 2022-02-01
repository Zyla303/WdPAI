<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Items.php';
require_once __DIR__.'/../controllers/ItemController.php';

class ItemsRepository extends Repository
{

    public function getItems(): ?Items
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM products 
        ');

        $stmt->execute();

        $items = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($items == false) {
            return null;
        }

        return new Items(
            $items['id'],
            $items['name'],
            $items['price'],
            $items['description'],
            $items['image'],
            $items['imagesFolder'],
            $items['category'],
            $items['creator_product']
        );
    }

    public function addItems(Items $items): void
    {

        $stmt = $this->database->connect()->prepare('
            INSERT INTO products (name, price, description, images, imagesFolder, category, creator_product)
            VALUES (?, ?, ?, ?, ?, ?, ?)
        ');

        $stmt->execute([
            $items->getName(),
            $items->getPrice(),
            $items->getDescription(),
            $items->getImage(),
            $items->getImagesFolder(),
            $items->getCategory(),
            $items->getCreatorProduct()
        ]);
    }

    public function deleteItems($id)
    {

        $stmt = $this->database->connect()->prepare('
            DELETE FROM products WHERE id = :id
        ');


        $stmt->execute(array(':id' => $id));

    }

    public function showItems(int $category): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM products WHERE category = :category
        ');

        $stmt->execute(array(':category' => $category));

        $items = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($items as $items) {
            $result[] = new Items(
                $items['id'],
                $items['name'],
                $items['price'],
                $items['description'],
                $items['images'],
                $items['imagesfolder'],
                $items['category'],
                $items['creator_product']
            );
        }
        return $result;
    }

    public function showItemsIndex(): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM products  ORDER BY id DESC LIMIT 4
        ');

        $stmt->execute();

        $items = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($items as $items) {
            $result[] = new Items(
                $items['id'],
                $items['name'],
                $items['price'],
                $items['description'],
                $items['images'],
                $items['imagesfolder'],
                $items['category'],
                $items['creator_product']
            );
        }
        return $result;
    }

    public function showProduct(int $id): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM products WHERE id = :id
        ');

        $stmt->execute(array(':id' => $id));

        $items = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($items as $items) {
            $result[] = new Items(
                $items['id'],
                $items['name'],
                $items['price'],
                $items['description'],
                $items['images'],
                $items['imagesfolder'],
                $items['category'],
                $items['creator_product']
            );
        }
        return $result;
    }

    public function showItemsBar(string $name): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare("
            SELECT * FROM products WHERE name = :name /* % name % */
        ");
        $stmt->execute(array(':name' => $name));
        $items = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($items as $items) {
            $result[] = new Items(
                $items['id'],
                $items['name'],
                $items['price'],
                $items['description'],
                $items['images'],
                $items['imagesfolder'],
                $items['category'],
                $items['creator_product']
            );
        }
        return $result;
    }

    public function showItemsDelete(): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM products
        ');

        $stmt->execute();

        $items = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($items as $items) {
            $result[] = new Items(
                $items['id'],
                $items['name'],
                $items['price'],
                $items['description'],
                $items['images'],
                $items['imagesfolder'],
                $items['category'],
                $items['creator_product']
            );
        }
        return $result;
    }

}
