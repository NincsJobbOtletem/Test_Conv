<?php
require 'config.php';

class Database{ //DatabaseIn tulajdonságai
    protected $dbservname;
    protected $dbUser;
    protected $dbPass;
    protected $dbName;
    protected $charset;
  
    function __construct($dbservname,$dbUser,$dbPass,$dbName){  //construktor declarácciója ez mindig autómatikusan megfog hívódni
      $this->dbservername = $dbservname; 
      $this->dbUser = $dbUser;
      $this->dbPass = $dbPass;
      $this->dbName = $dbName;
    }

    $dsn = "mysql:host=$this->dbservername;dbname=$db;charset=UTF8";

    try {
        $pdo = new PDO($dsn, $user, $password);

        if ($pdo) {
            echo "Connected to the $db database successfully!";
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }


?>