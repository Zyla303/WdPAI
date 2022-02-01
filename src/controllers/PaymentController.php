<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/PaymentMethods.php';
require_once __DIR__.'/../repository/PaymentRepository.php';

class PaymentController extends AppController
{
    private $message = [];
    private $paymentRepository;

    public function __construct()
    {
        parent::__construct();
        $this->paymentRepository = new PaymentRepository();
    }


    public function getPaymentMethod(){
        $payments = $this->paymentRepository->getPaymentMethod();
        $this->render('payment',['payments' => $payments]);
    }
}