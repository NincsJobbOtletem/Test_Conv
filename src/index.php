<?php
include 'databaseImport.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dbName="test_feladat";
$dbUser="test_feladat";
$dbPass="mPPUsybBQnRVRdJQ";
$dbservname = "db";


$test = new DatabaseIn($dbservname,$dbUser,$dbPass,$dbName);     
$data = $test->run();


function has_children($rows,$id){
    foreach($rows as $row){
        if($row[2] == $id) //$row[2]  a parent_id
            return true;
    }
    return false;
}
function build_menu($rows,$parent=0){  
    $result = "<ul>";
    foreach($rows as $row)
    {
      if($row[2] == $parent){ //$row[2]  a parent_id
        $result.= "<li>".$row[1]; //$row[1]  a name
        if(has_children($rows,$row[0])){ //$row[0]  az id
          $result.= build_menu($rows,$row[0]);//$row[0]  az id
         } 
        $result.= "</li>";
      }
    }
    $result.= "</ul>";
    return $result;
}

print build_menu($data);
?>