<?php
include 'Modell/db_Connect.php';
include 'menu_Build.php';
include 'menu_DB_Input.php';
include 'Modell/model_Menu.php';

$test = new DatabaseIn($dbservname,$dbUser,$dbPass,$dbName);     
$data = $test->databaseImport();
print build_Menu($data);

$object = new Database;
$object->connect();
    
?>