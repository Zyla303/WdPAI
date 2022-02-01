<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Order.php';
require_once __DIR__ .'/../models/OrdersItems.php';
require_once __DIR__.'/../controllers/OrderController.php';
require_once __DIR__ .'/../models/OrdersItemsUser.php';
require_once __DIR__.'/../controllers/BasicFunction.php';

class OrderRepository extends Repository
{
    public function addorder(Order $order): void
    {

        $stmt = $this->database->connect()->prepare('
            INSERT INTO orders (product, payment_method, payment_status, payment_date, customized, recipt_invoice, order_status, user_id)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)
        ');

        $stmt->execute([
            $order->getProduct(),
            $order->getPaymentMethod(),
            $order->getPaymentStatus(),
            $order->getPaymentDate(),
            $order->getCustomized(),
            $order->getReciptInvoice(),
            $order->getOrderStatus(),
            $order->getUserId()
        ]);
    }

    public function showOrder(int $id): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM orders FULL JOIN products ON orders.product = products.id WHERE user_id = :id AND order_status = 0
        ');

        $stmt->execute(array(':id' => $id));

        $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($orders as $order) {
            $result[] = new OrdersItems(
                $order['id'],
                $order['name'],
                $order['price'],
                $order['description'],
                $order['images'],
                $order['imagesfolder'],
                $order['category'],
                $order['creator_product'],
                $order['id_order'],
                $order['product'],
                $order['payment_method'],
                $order['payment_status'],
                $order['payment_date'],
                $order['customized'],
                $order['recipt_invoice'],
                $order['order_status'],
                $order['user_id']
            );
        }
        return $result;
    }

    public function deleteCart(int $id)
    {

        $stmt = $this->database->connect()->prepare('
            DELETE FROM orders WHERE id_order = :id
        ');


        $stmt->execute(array(':id' => $id));

    }

    public function buyOrder($user_id, $payment_method, $payment_status, $payment_date, $recipt_invoice, $order_status): void
    {

        $stmt = $this->database->connect()->prepare("
         UPDATE orders SET payment_method = :payment_method, payment_status = :payment_status, payment_date = :payment_date, recipt_invoice = :recipt_invoice, order_status = :order_status
        WHERE user_id = :user_id AND payment_status = 0
        ");

        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->bindParam(':payment_method', $payment_method, PDO::PARAM_STR);
        $stmt->bindParam(':payment_status', $payment_status, PDO::PARAM_STR);
        $stmt->bindParam(':payment_date', $payment_date, PDO::PARAM_STR);
        $stmt->bindParam(':recipt_invoice', $recipt_invoice, PDO::PARAM_STR);
        $stmt->bindParam(':order_status', $order_status, PDO::PARAM_STR);

        $stmt->execute();
    }

    public function showWaitOrdersUser(int $id): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM orders 
   LEFT JOIN products ON orders.product = products.id
   LEFT JOIN payment_status ON orders.payment_status=payment_status.id 
    LEFT JOIN payment_methods ON orders.payment_method=payment_methods.id 
    WHERE user_id = :id AND order_status = 1
        ');

        $stmt->execute(array(':id' => $id));

        $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($orders as $order) {
            $result[] = new OrdersItems(
                $order['id'],
                $order['name'],
                $order['price'],
                $order['description'],
                $order['images'],
                $order['imagesfolder'],
                $order['category'],
                $order['creator_product'],
                $order['id_order'],
                $order['product'],
                $order['payment_method'],
                $order['payment_status'],
                $order['payment_date'],
                $order['customized'],
                $order['recipt_invoice'],
                $order['order_status'],
                $order['user_id']
            );
        }
        return $result;
    }

    public function showHistoryOrdersUser(int $id): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM orders 
   LEFT JOIN products ON orders.product = products.id
    LEFT JOIN payment_methods ON orders.payment_method=payment_methods.id 
     LEFT JOIN order_status ON orders.order_status=order_status.id 
    WHERE user_id = :id AND order_status >= 2
        ');

        $stmt->execute(array(':id' => $id));

        $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($orders as $order) {
            $result[] = new OrdersItems(
                $order['id'],
                $order['name'],
                $order['price'],
                $order['description'],
                $order['images'],
                $order['imagesfolder'],
                $order['category'],
                $order['creator_product'],
                $order['id_order'],
                $order['product'],
                $order['payment_method'],
                $order['payment_status'],
                $order['payment_date'],
                $order['customized'],
                $order['recipt_invoice'],
                $order['order_status'],
                $order['user_id']
            );
        }
        return $result;
    }

    public function waitOrderAdmin(): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT products.id, products.name, products.price, products.description, products.images, products.imagesfolder,
                   products.category, products.creator_product, orders.id_order, orders.product, orders.payment_method,
                   orders.payment_status, orders.payment_date, orders.customized, orders.recipt_invoice, orders.order_status,
                   orders.user_id, users.id, users.name, users.surname, users.postalcode, users.town, users.street, 
                   users.housenumber, users.flatnumber, users.email, users.password, users.level, payment_methods.id, 
                   payment_methods.name FROM orders 
   LEFT JOIN products ON orders.product = products.id
    LEFT JOIN payment_methods ON orders.payment_method=payment_methods.id 
     LEFT JOIN users ON orders.user_id=users.id 
    WHERE  order_status = 1
        ');

        $stmt->execute();

        $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($orders as $order) {
            $result[] = new OrdersItemsUser(
                $order['id'],
                $order['name'],
                $order['price'],
                $order['description'],
                $order['images'],
                $order['imagesfolder'],
                $order['category'],
                $order['creator_product'],
                $order['id_order'],
                $order['product'],
                $order['payment_method'],
                $order['payment_status'],
                $order['payment_date'],
                $order['customized'],
                $order['recipt_invoice'],
                $order['order_status'],
                $order['user_id'],
                $order['id'],
                $order['name'],
                $order['surname'],
                $order['postalcode'],
                $order['town'],
                $order['street'],
                $order['housenumber'],
                $order['flatnumber'],
                $order['email'],
                $order['password'],
                $order['level'],
                $order['id'],
                $order['name']
            );
        }
        return $result;
    }

    public function finishOrder($payment_date, $user_id): void
    {

            $stmt = $this->database->connect()->prepare("
         UPDATE orders SET order_status = 2
        WHERE payment_date = :payment_date AND user_id = :user_id
        ");

            $stmt->bindParam(':payment_date', $payment_date, PDO::PARAM_STR);
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);

            $stmt->execute();


    }

    public function sendOrderAdmin(): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT products.id, products.name, products.price, products.description, products.images, products.imagesfolder,
                   products.category, products.creator_product, orders.id_order, orders.product, orders.payment_method,
                   orders.payment_status, orders.payment_date, orders.customized, orders.recipt_invoice, orders.order_status,
                   orders.user_id, users.id, users.name, users.surname, users.postalcode, users.town, users.street, 
                   users.housenumber, users.flatnumber, users.email, users.password, users.level, payment_methods.id, 
                   payment_methods.name FROM orders 
   LEFT JOIN products ON orders.product = products.id
    LEFT JOIN payment_methods ON orders.payment_method=payment_methods.id 
     LEFT JOIN users ON orders.user_id=users.id 
    WHERE  order_status = 2
        ');

        $stmt->execute();

        $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($orders as $order) {
            $result[] = new OrdersItemsUser(
                $order['id'],
                $order['name'],
                $order['price'],
                $order['description'],
                $order['images'],
                $order['imagesfolder'],
                $order['category'],
                $order['creator_product'],
                $order['id_order'],
                $order['product'],
                $order['payment_method'],
                $order['payment_status'],
                $order['payment_date'],
                $order['customized'],
                $order['recipt_invoice'],
                $order['order_status'],
                $order['user_id'],
                $order['id'],
                $order['name'],
                $order['surname'],
                $order['postalcode'],
                $order['town'],
                $order['street'],
                $order['housenumber'],
                $order['flatnumber'],
                $order['email'],
                $order['password'],
                $order['level'],
                $order['id'],
                $order['name']
            );
        }
        return $result;
    }

    public function SendOrder($payment_date, $user_id): void
    {

        $stmt = $this->database->connect()->prepare("
         UPDATE orders SET order_status = 3
        WHERE payment_date = :payment_date AND user_id = :user_id
        ");

        $stmt->bindParam(':payment_date', $payment_date, PDO::PARAM_STR);
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);

        $stmt->execute();


    }

    public function allOrderAdmin(): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT products.id, products.name, products.price, products.description, products.images, products.imagesfolder,
                   products.category, products.creator_product, orders.id_order, orders.product, orders.payment_method,
                   orders.payment_status, orders.payment_date, orders.customized, orders.recipt_invoice, orders.order_status,
                   orders.user_id, users.id, users.name, users.surname, users.postalcode, users.town, users.street, 
                   users.housenumber, users.flatnumber, users.email, users.password, users.level, payment_methods.id, 
                   payment_methods.name FROM orders 
   LEFT JOIN products ON orders.product = products.id
    LEFT JOIN payment_methods ON orders.payment_method=payment_methods.id 
     LEFT JOIN users ON orders.user_id=users.id 
    WHERE  order_status = 3
        ');

        $stmt->execute();

        $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($orders as $order) {
            $result[] = new OrdersItemsUser(
                $order['id'],
                $order['name'],
                $order['price'],
                $order['description'],
                $order['images'],
                $order['imagesfolder'],
                $order['category'],
                $order['creator_product'],
                $order['id_order'],
                $order['product'],
                $order['payment_method'],
                $order['payment_status'],
                $order['payment_date'],
                $order['customized'],
                $order['recipt_invoice'],
                $order['order_status'],
                $order['user_id'],
                $order['id'],
                $order['name'],
                $order['surname'],
                $order['postalcode'],
                $order['town'],
                $order['street'],
                $order['housenumber'],
                $order['flatnumber'],
                $order['email'],
                $order['password'],
                $order['level'],
                $order['id'],
                $order['name']
            );

        }

        return $result;
    }

    public function RepeatOrder($payment_date, $user_id): void
    {

        $stmt = $this->database->connect()->prepare("
         UPDATE orders SET order_status = 1
        WHERE payment_date = :payment_date AND user_id = :user_id
        ");

        $stmt->bindParam(':payment_date', $payment_date, PDO::PARAM_STR);
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);

        $stmt->execute();


    }

    public function DeleteOrderAdmin($payment_date, $user_id): void
    {

        $stmt = $this->database->connect()->prepare("
        DELETE FROM orders
        WHERE payment_date = :payment_date AND user_id = :user_id
        ");

        $stmt->bindParam(':payment_date', $payment_date, PDO::PARAM_STR);
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);

        $stmt->execute();


    }

    public function otherItems($payment_date, $user_id): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM orders 
   LEFT JOIN products ON orders.product = products.id
    WHERE  payment_date = :payment_date AND user_id = :user_id
        ');

        $stmt->bindParam(':payment_date', $payment_date, PDO::PARAM_STR);
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);

        $stmt->execute();

        $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($orders as $order) {
            $result[] = new OrdersItems(
                $order['id'],
                $order['name'],
                $order['price'],
                $order['description'],
                $order['images'],
                $order['imagesfolder'],
                $order['category'],
                $order['creator_product'],
                $order['id_order'],
                $order['product'],
                $order['payment_method'],
                $order['payment_status'],
                $order['payment_date'],
                $order['customized'],
                $order['recipt_invoice'],
                $order['order_status'],
                $order['user_id'],
            );
        }
        return $result;
    }

}