<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/Order.php';
require_once __DIR__ .'/../models/OrdersItems.php';
require_once __DIR__.'/../repository/OrderRepository.php';

class OrderController extends AppController
{
    private $message = [];
    private $orderRepository;

    public function __construct()
    {
        parent::__construct();
        $this->orderRepository = new OrderRepository();
    }

    public function addorder()
    {
        $ID = true;
        $product = $_GET['product'];
        $paymentMethod = 0;
        $paymentStatus = 0;
        $paymentDate = date("Y-m-d H:i:s");
        $customized = 0;
        $reciptInvoice = "trace to recipt";
        $orderStatus = 0;
        $userId = $_GET['userid'];


        if (!$userId) {
            return $this->render("product", ['messages' => ["First, you must login!"]]);
        } else {
            $order = new Order($ID, $product, $paymentMethod, $paymentStatus, $paymentDate, $customized, $reciptInvoice, $orderStatus, $userId);
            $this->orderRepository->addorder($order);
            return $this->render("product", ['messages' => ["Successfully added to cart"], 'order' => $order]);
        }


    }

    public function showCart()
    {

        $id = $_GET['userid'];
        $id = (int)$id;

        $orders = $this->orderRepository->showOrder($id);
        $this->render('cart', ['orders' => $orders]);

    }

    public function deleteCart()
    {

        $id = $_GET['delete'];
        $this->orderRepository->deleteCart($id);

        return $this->render('cart', ['messages1' => ['Item not found!']]);

    }

    public function buyOrder()
    {
        $user_id = $_GET['userid'];
        $payment_method = $_POST['payment'];
        $payment_status = 1;
        $payment_date = date("Y-m-d H:i:s");
        $recipt_invoice = "generate";
        $order_status = 1;

        $this->orderRepository->buyOrder($user_id, $payment_method, $payment_status, $payment_date, $recipt_invoice, $order_status);
        return $this->render("waitorderuser");
    }

    public function showWaitOrdersUser()
    {

        $id = $_GET['userid'];
        $id = (int)$id;

        $orders = $this->orderRepository->showWaitOrdersUser($id);
        $this->render('waitorderuser', ['orders' => $orders]);

    }

    public function historyuser(){
        $id = $_GET['userid'];
        $id = (int)$id;

        $orders = $this->orderRepository->showHistoryOrdersUser($id);
        $this->render('history-user', ['orders' => $orders]);
    }

    public function waitorderadmin(){
        $orders = $this->orderRepository->waitOrderAdmin();
        $this->render('wait-order-admin', ['orders' => $orders]);
    }

    public function finishOrder(){
        $payment_date = $_GET['payment_date'];
        $user_id = (int)$_GET['user_id'];

        $orders = $this->orderRepository->finishOrder($payment_date, $user_id);
        $this->render('wait-order-admin');
    }

    public function sendOrderAdmin(){
        $orders = $this->orderRepository->sendOrderAdmin();
        $this->render('send-order-admin', ['orders' => $orders]);
    }

    public function SendOrder(){
        $payment_date = $_GET['payment_date'];
        $user_id = (int)$_GET['user_id'];

        $orders = $this->orderRepository->SendOrder($payment_date, $user_id);
        $this->render('send-order-admin');
    }

    public function allOrderAdmin(){
        $orders = $this->orderRepository->allOrderAdmin();
        $this->render('all-order-admin', ['orders' => $orders]);
    }

    public function repeatOrder(){
        $payment_date = $_GET['payment_date'];
        $user_id = (int)$_GET['user_id'];

        $orders = $this->orderRepository->RepeatOrder($payment_date, $user_id);
        $this->render('all-order-admin');
    }

    public function deleteOrderAdmin(){
        $payment_date = $_GET['payment_date'];
        $user_id = (int)$_GET['user_id'];

        $orders = $this->orderRepository->DeleteOrderAdmin($payment_date, $user_id);
        $this->render('all-order-admin');
    }

    public function showOtherItems(){
        $payment_date = $_GET['payment_date'];
        $user_id = (int)$_GET['user_id'];

        $orders = $this->orderRepository->otherItems($payment_date, $user_id);
        $this->render('other-items', ['orders' => $orders]);
    }

}