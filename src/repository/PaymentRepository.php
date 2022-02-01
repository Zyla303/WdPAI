<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/PaymentMethods.php';
require_once __DIR__.'/../controllers/PaymentController.php';

class PaymentRepository extends Repository
{
    public function getPaymentMethod(): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM payment_methods WHERE id > 0
        ');

        $stmt->execute();

        $payments = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($payments as $payment){
            $result[] = new PaymentMethods(
                $payment['id'],
                $payment['name']
            );
        }
        return $result;
    }

}