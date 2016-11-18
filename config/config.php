<?php
// Connect to MySQL

require_once '../Entity/Crud.php';

class config {

    private $host = '127.0.0.1';
    private $user = '';
    private $password = '';

    // connect
    public function bdd(){
        $host = $this->getHost();
        $user = $this->getUser();
        $password = $this->getPassword();

        $pdo = new PDO("mysql:host=$host;dbname=orm", $user, $password);

        return $pdo;
    }

    public function getHost(){
        return $this->host;
    }

    public function getUser(){
        return $this->user;
    }

    public function getPassword(){
        return $this->password;
    }


}

$crud = new crud($this->bdd());
