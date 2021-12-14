<?php


namespace MyApp\Modell\Almafa;


use MyApp\Utils\Database\Database;

class ConfToData
{
    protected $config;
    protected $tableName;
    function __construct()
    {
        $this->config = include(__DIR__ . '/../Config/config.php');
        $this->tableName = "tree_source";
    }
    function makeDB($config)
    {
        return $db = Database::getInstance($config);
    }

    function select()
    {
        return $statement = "SELECT * FROM {$this->tableName}";
    }
    function run()
    {
        $conf = $this->makeDB($this->config);
        
        $statement = $this->select();
        
        return $conf->getAll($statement);
        
        
    }
}

class DBDI
{
    protected $serv = null;
    public function __construct()
    {
        
        $rep = new ConfToData();
        
        $serv = $rep->run();
        
        $this->serv = $serv;
        
        
    }
    
}

