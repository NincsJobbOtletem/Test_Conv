<?php
    echo var_dump(__DIR__);
    $config = include(__DIR__ .'/../Config/config.php');
    require_once __DIR__ .'/../Utils/Database.php';
    
    $db = Database::getInstance($config);
    
    $statement = 'SELECT * FROM tree_source';
    $res = $db->getAll($statement);
    echo "<pre>";
    var_dump($res);
    echo "</pre>";

    //adatbetöltés
?>