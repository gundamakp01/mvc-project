<?php

class Database{
    public $pdo;

    public function __construct(){
        $servername = "localhost";
        $username = "root";
        $password = "";

        try {
            $this->pdo = new PDO("mysql:host=$servername;dbname=my_guitar_shop1", $username, $password);
        // set the PDO error mode to exception
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
        } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        }
    }
}