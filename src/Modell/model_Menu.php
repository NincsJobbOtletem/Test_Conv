<?php
require 'utils/config.php';

class Database{ 
    private $dbservname;
    private $dbUser;
    private $dbPass;
    private $dbName;
    private $charset;
   
    
    public function connect(){
        $this->dbservername = $dbservname; 
        $this->dbUser = $dbUser;
        $this->dbPass = $dbPass;
        $this->dbName = $dbName;
        $this->charset = $charset;
        

    try {
        $dsn = "mysql:host=".$this->dbservername.";dbname=".$this->dbName.";charset=".$this->charset;
        $pdo = new PDO($dsn, $this->dbUser, $this->dbPass);
        if ($pdo) {
            echo "Connected to the database successfully!";
        }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
?>