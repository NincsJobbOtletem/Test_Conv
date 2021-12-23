<?php

namespace MyApp\View\MenuView;

class MenuView
{

    private $data;

    function has_children($rows, $id)
    {
        foreach ($rows as $row) {
            if ($row["parent_id"] == $id)
                return true;
        }
        return false;
    }
    function BuildMenu($data, $parent = 0)
    {
        $menu = "<ul>";
        foreach ($data as $row) {
            
            if ($row["parent_id"] == $parent) {
                $menu .= "<li>" . $row["name"];
                if ($this->has_children($data, $row["id"])) {
                    $menu .= $this->BuildMenu($data, $row["id"]);
                }
                $menu .= "</li>";
            }
        }

        $menu .= "</ul>";
        return $menu;
    }
    public function show()
    {

        return $this->BuildMenu($this->data);
    }
}
