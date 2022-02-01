<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';

class SecurityController extends AppController
{

    private $userRepository;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
    }

    public function login()
    {
        if (!$this->isPost()) {
            return $this->render('login');
        }

        $email = $_POST['email'];
        $password = md5($_POST['password']);


        $user = $this->userRepository->getUser($email);

        if (!$user) {
            return $this->render('login', ['messages' => ['User not found!']]);
        }

        if ($user->getEmail() !== $email) {
            return $this->render('login', ['messages' => ['User with this email not exist!']]);
        }

        if ($user->getPassword() !== $password) {
            return $this->render('login', ['messages' => ['Wrong password!']]);
        }

        $id = $user->getID();
        $url = "http://$_SERVER[HTTP_HOST]";
        if($user->getLevel() >= 1 ){


            header("Location: {$url}/allorderadmin");
            session_start();
            $_SESSION['user'] = $id;

        }else{

            session_start();
            $_SESSION['user'] = $id;
            header("Location: {$url}/showWaitOrdersUser?userid=$id");

        }

    }

    public function register(){

        if(!$this->isPost()){
            return $this->render('register');
        }

        $ID = true;
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $postalcode = $_POST['postalcode'];
        $town = $_POST['town'];
        $street = $_POST['street'];
        $housenumber = $_POST['housenumber'];
        $flatnumber = $_POST['flatnumber'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmedPassword = $_POST['repeatpassword'];
        $level = 0;

        if ($password !== $confirmedPassword) {
            return $this->render('register', ['messages' => ['Please provide proper password']]);
        }

        $user = new User($ID, $name, $surname, $postalcode, $town, $street, $housenumber, $flatnumber, $email, md5($password), $level);

        $this->userRepository->addUser($user);

        return $this->render('login', ['messages' => ['You\'ve been succesfully registrated!']]);

    }

    public function settingsuser(){

        $ID = $_GET['user'];
        $postalcode = $_POST['postalcode'];
        $town = $_POST['town'];
        $street = $_POST['street'];
        $housenumber = $_POST['housenumber'];
        $flatnumber = $_POST['flatnumber'];
        $email = $_POST['email'];
        $password = $_POST['newpassword'];
        $confirmedPassword = $_POST['repeatpassword'];


        if ($password !== $confirmedPassword) {
            return $this->render('settingsuser', ['messages' => ['Please provide proper password<br>']]);
        }

        $this->userRepository->settingsuser($ID, $postalcode, $town, $street, $housenumber, $flatnumber, $email, $password);

        return $this->render('settingsuser', ['messages' => ['You\'ve succesfully changed informations!<br>']]);



    }

    public function seeUser(){

        $id = $_GET['user'];

        $users = $this->userRepository->getUserInfo($id);
        $this->render('settingsuser',['users' => $users]);

    }

}
