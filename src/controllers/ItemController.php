<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/Items.php';
require_once __DIR__.'/../repository/ItemsRepository.php';

class ItemController extends AppController {

    const MAX_FILE_SIZE = 9999999999999*9999999999999999;
    const SUPPORTED_TYPES = ['image/png', 'image/jpeg'];
    const UPLOAD_DIRECTORY = '/../public/products/';

    private $message = [];
    private $itemsRepository;

    public function __construct()
    {
        parent::__construct();
        $this->itemsRepository = new ItemsRepository();
    }

    public function additems()
    {
        if ($this->isPost()) {

            $category = $_POST['category'];
            $dirname = $_POST['name'];
            mkdir(dirname(__DIR__) . self::UPLOAD_DIRECTORY . $category . '/' . $dirname, 0777 , true);

            $id = true;
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $image = 'products/'.$category.'/'.$dirname. '/' . $_FILES['file']['name'][0];
            $imagesFolder = 'products/'.$category.'/'.$dirname;

            $item = new Items($id, $name, $price, $description, $image, $imagesFolder, $category, 0);
            $this->itemsRepository->addItems($item);



            if (isset($_POST['submit'])) {


                // Count total files
                $countfiles = count($_FILES['file']['name']);

                // Looping all files
                for ($i = 0; $i < $countfiles; $i++) {
                    $filename = $_FILES['file']['name'][$i];

                    // Upload file
                    move_uploaded_file(
                        $_FILES['file']['tmp_name'][$i],
                        dirname(__DIR__) . self::UPLOAD_DIRECTORY . $category . '/' . $dirname .'/'. $filename)."<br><br>";

                }

            }
            return $this->render('additems', ['messages' => ["Successfully added to the base<br><a href='getCategoryAdmin'>Reload page</a>"], 'item' => $item]);
        }


        return $this->render('additems', ['messages']);
    }

    private function validate(array $file): bool
    {
        if ($file['size'] > self::MAX_FILE_SIZE) {
            $this->message[] = 'File is too large for destination file system.';
            return false;
        }

        if (!isset($file['type']) || !in_array($file['type'], self::SUPPORTED_TYPES)) {
            $this->message[] = 'File type is not supported.';
            return false;
        }
        return true;
    }

    public function deleteItems()
    {
        //$categorydeleted = $_POST['deleteitem']; //$_POST['categorydeleted'];
        $id = $_POST['deleteitem'];
        $this->itemsRepository->deleteItems($id);
        //rmdir(UPLOAD_DIRECTORY . '/' . $categorydeleted. '/' . $items );


        if (false) {
            return $this->render('additems', ['messages1' => ['Item not found!']]);
        }else{
            return $this->render('additems', ['messages1' => ["Item delete! <br> <a href='showItemsDelete'>Reload page</a> "]]);
        }

    }

    public function shop(){

        $category = $_GET['category'];

        $items = $this->itemsRepository->showItems($category);
        $this->render('shop',['items' => $items]);

    }

    public function index(){
        $items = $this->itemsRepository->showItemsIndex();
        $this->render('index',['items' => $items]);

    }

    public function product(){

        $id = $_GET['id'];

        $items = $this->itemsRepository->showProduct($id);
        $this->render('product',['items' => $items]);
    }

    public function showItemsBar(){

        $items = $_POST['search'];

        $items = $this->itemsRepository->showItemsBar($items);

        if (false) {
            return $this->render('shop', ['messages' => ['Error']]);
        }else{
            return $this->render('shop', ['items' => $items]);
        }

    }

    public function showItemsDelete(){
        $items = $this->itemsRepository->showItemsDelete();
        $this->render('additems',['items' => $items]);

    }

}