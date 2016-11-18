<?php

require_once '../config/config.php';

require_once 'Crud.php';

require_once '../Log.php';


class User  {

    protected $id;
    protected $username;
    protected $mail;


    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getUserName(){
        return $this->username;
    }

    public function setUserName($username){
        $this->username = $username;
    }

    public function getmail(){
        return $this->mail;
    }

    public function setmail($mail){
        $this->mail = $mail;
    }


}