<?php

namespace MyApp\Utils\Database;

use \PDO;

class Database
{
    protected $config;
    
    static $_instance;

    private function __construct($config)
    {

        $this->dbservname = $config["dbHost"];
        $this->dbUser = $config["dbUser"];
        $this->dbPass = $config["dbPassword"];
        $this->dbName = $config['dbName'];
        $this->dbTable = $config['dbTable'];
    }
    public static function getInstance(array $config)
    {
        if (!(self::$_instance instanceof DataBase)) {
            $database = new Database($config);
            switch ($config['dbType']) {
                case "pdo":
                    self::$_instance = $database->PDObe();
                    break;
                case "mysqli":
                    self::$_instance = $database->mysqlibe();
                    break;
            }
            
        }
        return self::$_instance;
    }
    //pdo és mysqli külön hivása egy osztály és külön file
    private function PDObe()
    {
        $dsn = "mysql:host=" . $this->dbservname . ";dbname=" . $this->dbName . ";charset=UTF8";
        try {
            $db = new PDO($dsn, $this->dbUser, $this->dbPass);
            if ($db) {
                return $db;
            }
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
        return $db;
    }

    private function mysqlibe()
    {
        $db = mysqli_connect($this->dbservername, $this->dbUser, $this->dbPass, $this->dbName)
            or die("Error " . mysqli_error($db));
        return $db;
    }
}
