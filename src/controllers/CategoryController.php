<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/Category.php';
require_once __DIR__.'/../repository/CategoryRepository.php';

class CategoryController extends AppController {

    const UPLOAD_DIRECTORY = '/../public/products/';

    private $message = [];
    private $categoryRepository;

    public function __construct()
    {
        parent::__construct();
        $this->categoryRepository = new CategoryRepository();
    }


    public function addCategory()
    {
        if ($this->isPost()) {

            $dirname = $_POST['category'];
            mkdir(dirname(__DIR__) . self::UPLOAD_DIRECTORY . $dirname, 0777 , true);

            $category_id = true;
            $category_name = $_POST['category'];

            $category = new Category($category_id, $category_name);
            $this->categoryRepository->addCategory($category);

            return $this->render('addcategory', ['messages' => ['Successfully added to the base']]);
        }


        return $this->render('addcategory', ['messages']);
    }


    public function header(){

        $categories = $this->categoryRepository->getCategory();
        $this->render('header',['categories' => $categories]);

    }

    public function getCategory(){
        $categories = $this->categoryRepository->getCategory();
        $this->render('addcategory',['categories' => $categories]);
    }

    public function getCategoryAdmin(){
        $categories = $this->categoryRepository->getCategory();
        $this->render('additems',['categories' => $categories]);
    }

    public function deleteCategory(){

    }
}