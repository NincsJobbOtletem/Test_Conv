<?php
class Database 
{
    protected $details;
    private $_db;
    static $_instance;

    private function __construct() {
        var_dump($this->details);
        
        $dsn = "mysql:host=".$this->details["dbHost"].";dbname=".$this->details['dbName'].";charset=UTF8";
    try {
        $this->_db = new PDO($dsn, $this->details["dbUser"], $this->details["dbPassword"]);
        if ($this->_db) {
            var_dump($this->_db);
            $this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
  }   
    private function __clone(){}

    public static function getInstance() {
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function query($sql) {
      return $this->_db->query($sql);
  }

}
   

?>
