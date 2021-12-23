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
        $sql = "SELECT * FROM tree_source";
        $query = $db->prepare($sql);
        $query->execute();
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}

//ide jön a select