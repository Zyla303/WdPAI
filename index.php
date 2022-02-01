<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Router::get('', 'ItemController');
Router::post('login', 'SecurityController');
Router::post('addcategory', 'CategoryController');
Router::post('showItemsDelete', 'ItemController');
Router::post('deleteItems', 'ItemController');
Router::get('addtocreatoradmin', 'DefaultController');
Router::get('allorderadmin', 'DefaultController');
Router::get('underconstruction', 'DefaultController');
Router::get('getPaymentMethod', 'PaymentController');
Router::get('cart', 'DefaultController');
Router::get('contact', 'DefaultController');
Router::get('creator', 'DefaultController');
Router::get('discounts', 'DefaultController');
Router::get('faq', 'DefaultController');
Router::get('favuser', 'DefaultController');
Router::get('historyuser', 'OrderController');
Router::get('product', 'ItemController');
Router::post('register', 'SecurityController');
Router::get('sendorderadmin', 'DefaultController');
Router::post('settingsuser', 'SecurityController');
Router::get('shop', 'ItemController');
Router::get('waitorderadmin', 'OrderController');
Router::get('waitorderuser', 'DefaultController');
Router::get('wholesale', 'DefaultController');
Router::post('header','CategoryController');
Router::post('getCategory','CategoryController');
Router::get('logout', 'DefaultController');
Router::get('getCategoryAdmin', 'CategoryController');
Router::post('seeUser', 'SecurityController');
Router::post('showItemsBar', 'ItemController');
Router::post('additems', 'ItemController');
Router::post('addorder', 'OrderController');
Router::post('showCart', 'OrderController');
Router::post('deleteCart', 'OrderController');
Router::post('buyOrder', 'OrderController');
Router::get('showWaitOrdersUser', 'OrderController');
Router::get('allOrderAdmin', 'OrderController');
Router::post('finishOrder', 'OrderController');
Router::post('sendOrderAdmin', 'OrderController');
Router::post('SendOrder', 'OrderController');
Router::post('repeatOrder', 'OrderController');
Router::post('deleteOrderAdmin', 'OrderController');
Router::post('showOtherItems', 'OrderController');





Router::run($path);