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
            echo "Connected to the ".$this->details["dbHost"]." named database successfully!";
            $cmd = $pdo->prepare("SELECT * FROM tree_source");
            
            return $cmd;
            
            
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
  }
  function getAll(){
    $cmd = $this->configImport();
    $cmd->execute();
    $result = $cmd->fetchAll(PDO::FETCH_ASSOC);
    return $result;

    }
  


}
   

?>