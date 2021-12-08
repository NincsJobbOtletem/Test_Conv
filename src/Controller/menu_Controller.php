<?php
class Controller{
    protected $result;   
      
    function __construct($result){  
        $this->result = $result;
    }

    function has_children($rows,$id){
        foreach($rows as $row){
            if($row["parent_id"] == $id)
                return true;
        }
        return false;
    }
    protected function Action($result,$parent=0){  
        $menu = "<ul>";
    
        foreach($result as $row){
          if ($row["parent_id"] == $parent){ 
            $menu.= "<li>".$row["name"]; 
            if (has_children($result,$row["id"])){ 
              $menu.= Action($result,$row["id"]);
            } 
            $menu.= "</li>";
          }
        }
        
        $menu.= "</ul>";
        return $menu;
    }
    protected function show(){
     
    }
    

   
    public function run(){
        
       $menu = $this->Action($this->result);
       return $menu;
    }

}



?>