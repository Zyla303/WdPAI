<?php

require_once 'AppController.php';

class DefaultController extends AppController {


    public function index()
    {
        $this->render('index');
    }
    public function login()
    {
        $this->render('login');
    }
    public function logout()
    {
        $this->render('logout');
    }
    public function additems()
    {
        $this->render('additems');
    }
    public function addcategory()
    {
        $this->render('addcategory');
    }

    public function addtocreatoradmin()
    {
        $this->render('add-tocreator-admin');
    }
    public function allorderadmin()
    {
        $this->render('all-order-admin');
    }
    public function cart()
    {
        $this->render('cart');
    }
    public function contact()
    {
        $this->render('contact');
    }
    public function creator()
    {
        $this->render('creator');
    }
    public function discounts()
    {
        $this->render('discounts');
    }
    public function faq()
    {
        $this->render('faq');
    }
    public function favuser()
    {
        $this->render('fav-user');
    }
    public function historyuser()
    {
        $this->render('history-user');
    }
    public function product()
    {
        $this->render('product');
    }
    public function register()
    {
        $this->render('register');
    }
    public function sendorderadmin()
    {
        $this->render('send-order-admin');
    }
    public function settingsuser()
    {
        $this->render('settingsuser');
    }
    public function waitorderadmin()
    {
        $this->render('wait-order-admin');
    }
    public function waitorderuser()
    {
        $this->render('wait-order-user');
    }
    public function wholesale()
    {
        $this->render('wholesale');
    }
    public function payment()
    {
        $this->render('payment');
    }
    public function underconstruction()
    {
        $this->render('underconstruction');
    }



}