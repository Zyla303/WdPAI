<?php

class User {
    private $ID;
    private $name;
    private $surname;
    private $postalcode;
    private $town;
    private $street;
    private $housenumber;
    private $flatnumber;
    private $email;
    private $password;
    private $level;

    public function __construct(
        int $ID,
        string $name,
        string $surname,
        string $postalcode,
        string $town,
        string $street,
        string $housenumber,
        string $flatnumber,
        string $email,
        string $password,
        string $level
    ) {
        $this->ID = $ID;
        $this->name = $name;
        $this->surname = $surname;
        $this->postalcode = $postalcode;
        $this->town = $town;
        $this-> street = $street;
        $this-> housenumber = $housenumber;
        $this-> flatnumber = $flatnumber;
        $this->email = $email;
        $this->password = $password;
        $this->level = $level;
    }

    public function setUser(int $ID = null, string $name, string $surname, string $postalcode, string $town, string $street,
                            string $housenumber, string $flatnumber, string $email, string $password, string $level): void
    {
        $this->user = new User(
            $ID
            ,$name
            ,$surname
            ,$postalcode
            ,$town
            ,$street
            ,$housenumber
            ,$flatnumber
            ,$email
            ,$password
            ,$level
        );
    }

    public function setID(int $ID): void
    {
        $this->ID = $ID;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    public function setPostalcode(string $postalcode): void
    {
        $this->postalcode = $postalcode;
    }

    public function setTown(string $town): void
    {
        $this->town = $town;
    }

    public function setStreet(string $street): void
    {
        $this->street = $street;
    }

    public function setHousenumber(string $housenumber): void
    {
        $this->housenumber = $housenumber;
    }

    public function setFlatnumber(string $flatnumber): void
    {
        $this->flatnumber = $flatnumber;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function setLevel(string $level): void
    {
        $this->level = $level;
    }

    public function getID(): int{
        return $this->ID;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function getPostalcode(): int
    {
        return $this->postalcode;
    }

    public function getTown(): string
    {
        return $this->town;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function getHousenumber(): string
    {
        return $this->housenumber;
    }

    public function getFlatnumber(): string
    {
        return $this->flatnumber;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getLevel(){
        return $this->level;
    }

}