<?php
include '.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$GLOBALS['db'] = mysqli_connect("db","test_feladat","mPPUsybBQnRVRdJQ","test_feladat")
        or die("Error " . mysqli_error($GLOBALS['db']));
$query = "SELECT id,name,parent_id FROM tree_source";
$result = $GLOBALS['db']->query($query);

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
$rows = array(); 
while($row=mysqli_fetch_array($result)){
    $rows[] = $row;
}
print build_menu($rows);
?>