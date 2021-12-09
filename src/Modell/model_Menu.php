<?php
    require_once 'Config/Database.php';
    $details = include('Config/config.php');
    
    $db = Database::getInstance();
    $statement = 'SELECT * FROM tree_source';

    if ($result = $db->query($statement)) {
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
          echo $row;
    }
}
?>