<?php
use ORM\Actions\ActionManager;

require_once '../config/config.php';

require_once 'User.php';

require_once '../Action/Action.php';

require_once '../Log.php';


class Crud extends ActionManager implements Log {

    private $db;
    private static $accessLog = '/access.log';
    private static $errorLog = '/error.log';

    function __construct($pdo)
    {
        $this->db = $pdo;
    }


    public function logMessage($stmt, $time)
    {
        $date = new DateTime();
        $dateString = $date->format('Y-m-d H:i:s');
        file_put_contents(self::$accessLog, "Request=>". $stmt->queryString . " Date =>[" . $dateString . "]" . " Time =>" . $time );
    }

    public function logError($stmt, $time, $errorMessage)
    {
        $date = new DateTime();
        $dateString = $date->format('Y-m-d H:i:s');
        file_put_contents(self::$errorLog, "Request=>". $stmt->queryString . " Date =>[" . $dateString . "]" . "Time=>" . $time  . " Error-Message => " . $errorMessage );

    }


    public function create($username, $mail){
        $stmt = $this->db->prepare(" INSERT INTO  user ('id', 'username', 'mail') VALUES (:id, :username, :mail)");
        $stmt->bindparam(":username",$username);
        $stmt->bindparam(":mail",$mail);
        $stmt->execute();


    }

    public function update(){

    }

    public function delete($id){
        $stmt = $this->db->prepare("DELETE FROM user WHERE id = :id ");
        $stmt->bindparam(":id",$id);
        $stmt->execute();

        return $stmt;
    }

    public function getId($id){
        $stmt = $this->db->prepare("SELECT * FROM user WHERE id = :id ");
        $stmt->bindparam(":id",$id);
        $stmt->execute();
        $editRow = $stmt->fetch(PDO::FETCH_ASSOC);
        return $editRow;

    }



}