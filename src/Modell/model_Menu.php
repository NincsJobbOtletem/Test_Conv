<?php


class Database{
  protected $details;

  function __construct($details){
    $this->details = $details;
    //késöbb jöhet ide adatbázis neve
    
  }
  function configImport(){
    $dsn = "mysql:host=".$this->details["dbHost"].";dbname=".$this->details['dbName'].";charset=UTF8";
    try {
        $pdo = new PDO($dsn, $this->details["dbUser"], $this->details["dbPassword"]);
    
        if ($pdo) {
            $stmt = $pdo->prepare("SELECT * FROM tree_source");
            
            return $stmt;
            
            
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
  }
  function getAll(){
    $stmt = $this->configImport();
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;

    }
  


}
   

?>