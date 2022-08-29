<?php

class travellerSheetDatabase{

private $servername;
private $username;
private $password;
private $dbname;
private $charset;

public function connect(){
    $this ->servername = "noahshomette95319.domaincommysql.com";
    $this ->username = "noahshomette";
    $this ->password = "Paris2369!";
    $this ->dbname = "travellersheets";
    $this ->charset = "utf8mb4";

    try {
        $dsn = "mysql:host=".$this->servername.";dbname=".&this->dbname.";charset=".$this->charset;
        $pdo = new PDO($dsn, $this ->username, $this ->password);
        $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e){
        echo "Connection failed: ".$e->getMessage();
    }



}
}
