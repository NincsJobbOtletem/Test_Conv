<?php
include 'Modell/db_Import.php';
include 'Controller/menu_build.php';


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dbName="test_feladat";
$dbUser="test_feladat";
$dbPass="mPPUsybBQnRVRdJQ";
$dbservname = "db";




$test = new DatabaseIn($dbservname,$dbUser,$dbPass,$dbName);     
$data = $test->databaseImport();

echo build_Menu($data);
?>