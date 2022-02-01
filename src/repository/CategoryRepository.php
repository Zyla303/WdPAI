<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Category.php';
require_once __DIR__.'/../controllers/CategoryController.php';

class CategoryRepository extends Repository
{

    public function getCategory(): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM category
        ');

        $stmt->execute();

        $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($categories as $category){
            $result[] = new Category(
                $category['category_id'],
                $category['category_name']
            );
        }
        return $result;
    }


    public function addCategory(Category $category): void
    {

        $stmt = $this->database->connect()->prepare('
            INSERT INTO category (category_name)
            VALUES (?)
        ');

        $stmt->execute([
            $category->getCategoryName(),

        ]);
    }

    public function deleteCategory($id): array
    {

        $stmt = $this->database->connect()->prepare('
            DELETE FROM category WHERE id = :id
        ');


        $stmt->execute(array(':id' => $id));


    }

}
