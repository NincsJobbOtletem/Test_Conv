<?php

namespace MyApp\Utils\Database;

use \PDO;

class Database
{
    protected $config;

    static $_instance;

    private function __construct($config)
    {

        $this->dbName = $config[0]; //dbName
        $this->dbUser = $config[1]; //dbUser
        $this->dbPass = $config[2]; //dbPassword
        $this->dbservname = $config[3];  //dbHost
        $this->dbTable = $config[4]; //dbTable
    }
    public static function getInstance(array $config)
    {
        if (!(self::$_instance instanceof DataBase)) {
            $database = new Database($config);
            switch ($config[5]) {
                case "pdo":
                    self::$_instance = $database->PDObe();
                    break;
            }
        }
        return self::$_instance;
    }

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
}
