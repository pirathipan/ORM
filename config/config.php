<?php
// Connect to MySQL

require_once '../Entity/Crud.php';

class config {

    private $host = 'mysql:host=127.0.0.127;dbname=orm';
    private $user = 'root';
    private $password = 'root';

    // connect
    public function bdd(){
        $host = $this->getHost();
        $user = $this->getUser();
        $password = $this->getPassword();

        $pdo = new BDD($host,$user,$password);

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

$crud = new crud($pdo);


