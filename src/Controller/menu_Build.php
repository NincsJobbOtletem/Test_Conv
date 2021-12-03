<?php 
function has_children($rows,$id){
    foreach($rows as $row){
        if($row["parent_id"] == $id)
            return true;
    }
    return false;
}
function build_Menu($rows,$parent=0){  
    $menu = "<ul>";

    foreach($rows as $row){
      if ($row["parent_id"] == $parent){ 
        $menu.= "<li>".$row["name"]; 
        if (has_children($rows, $row["id"])){ 
          $menu.= build_Menu($rows,$row["id"]);
        } 
        $menu.= "</li>";
      }
    }
    
    $menu.= "</ul>";
    return $menu;
}

?>