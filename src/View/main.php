<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Conversific_Test</title>
    <link rel="stylesheet"  type="text/css" href="style.css">
</head>
<body>
    <h1>Conversific_Test</h1>
 
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
</body>
</html>