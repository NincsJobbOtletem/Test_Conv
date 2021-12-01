<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class DatabaseIn{ //DatabaseIn tulajdonságai
  protected $dbservname;
  protected $dbUser;
  protected $dbPass;
  protected $dbName;
  function __construct($dbservname,$dbUser,$dbPass,$dbName){  //construktor declarácciója ez mindig autómatikusan megfog hívódni
    $this->dbservername = $dbservname; 
    $this->dbUser = $dbUser;
    $this->dbPass = $dbPass;
    $this->dbName = $dbName;
  }
  function databaseCall(){
    $GLOBALS['db'] = mysqli_connect($this->dbservername,$this->dbUser,$this->dbPass,$this->dbName)
    or die("Error " . mysqli_error($GLOBALS['db']));
    $query = "SELECT id,name,parent_id FROM tree_source";
    $result = $GLOBALS['db']->query($query);
    return $result;
  }
  public function run(){
    
    $result = $this->databaseCall();

    while($row=mysqli_fetch_array($result)){
        $rows[] = $row;

    }
    return $rows;
    }
}
?>