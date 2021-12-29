<?php


namespace MyApp\Modell\model;
use \PDO;

class selects
{

    
    function __construct()
    {
    }
    public function selectAll($db)
    {
        $phpvar = array();
       
        $sql = "SELECT * FROM tree_source";
        $query = $db->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
        
        
    }
}

//ide jön a select