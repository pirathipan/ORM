<?php

/**
 * Connect to MySQL
 */

class config {

    private $host = '';
    private $user = '';
    private $password = '';

    // connect
    public function connect(){
        $host = $this->getHost();
        $user = $this->getUser();
        $password = $this->getPassword();

        $pdo = new PDO($host,$user,$password);

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