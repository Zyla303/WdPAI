<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/User.php';

class UserRepository extends Repository
{

    public function getUser(string $email): ?User
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM users WHERE email = :email
        ');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;
        }

        return new User(
            $user['id'],
            $user['name'],
            $user['surname'],
            $user['postalcode'],
            $user['town'],
            $user['street'],
            $user['housenumber'],
            $user['flatnumber'],
            $user['email'],
            $user['password'],
            $user['level']
        );
    }

    public function addUser(User $user): void{
        $stmt = $this->database->connect()->prepare('
        INSERT INTO users (name, surname, postalcode, town, street, housenumber, flatnumber, email, password, level)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
        ');

        $stmt->execute([
            $user->getName(),
            $user->getSurname(),
            $user->getPostalcode(),
            $user->getTown(),
            $user->getStreet(),
            $user->getHousenumber(),
            $user->getFlatnumber(),
            $user->getEmail(),
            $user->getPassword(),
            $user->getLevel()
        ]);
    }

    public function settingsuser($id, $postal, $town, $street, $house, $flat, $email, $password): void{


        $stmt = $this->database->connect()->prepare("
         UPDATE users SET postalcode = :postal, town = :town, street = :street, housenumber = :house, flatnumber = :flat, 
                          email = :email, password = :password
        WHERE ID = :id
        ");

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':postal', $postal, PDO::PARAM_STR);
        $stmt->bindParam(':town', $town, PDO::PARAM_STR);
        $stmt->bindParam(':street', $street, PDO::PARAM_STR);
        $stmt->bindParam(':house', $house, PDO::PARAM_STR);
        $stmt->bindParam(':flat', $flat, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);

        $stmt->execute();

    }

    public function getUserInfo(int $id): array
    {

        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM users WHERE id = :id
        ');

        $stmt->execute(array(':id' => $id));

        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($user as $user) {
            $result[] = new User(
                $user['id'],
                $user['name'],
                $user['surname'],
                $user['postalcode'],
                $user['town'],
                $user['street'],
                $user['housenumber'],
                $user['flatnumber'],
                $user['email'],
                $user['password'],
                $user['level']
            );
        }
        return $result;

    }

}