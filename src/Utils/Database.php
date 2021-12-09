<?php
class Database
{

    private $_db;
    static $_instance;

    private function __construct(array $config)
    {
        var_dump($config);

        $dsn = "mysql:host=" . $config["dbHost"] . ";dbname=" . $config['dbName'] . ";charset=UTF8";
        try {
            $this->_db = new PDO($dsn, $config["dbUser"], $config["dbPassword"]);
            if ($this->_db) {
                var_dump($this->_db);
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
    public static function getInstance(array $config)
    {
        if (!(self::$_instance instanceof DataBase)) {
            self::$_instance = new Database($config);
        }
        return self::$_instance;
    }

    public function query($sql)
    {
        return $this->_db->query($sql);
    }
    public function getALL($sql)
    {
        return $this->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
}
