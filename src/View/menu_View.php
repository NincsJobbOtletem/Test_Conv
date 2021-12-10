<?php
class View
{
    
    private $data;

    function __construct($data)
    {
        $this->body = file_get_contents(__DIR__ . '/../View/body.html');
        $this->head = file_get_contents(__DIR__ . '/../View/head.html');
        $this->footer = file_get_contents(__DIR__ . '/../View/footer.html');
        $this->data = $data;
    }

    function body()
    {
        return $this->body;
    }
    function footer()
    {
        return $this->footer;
    }
    function head()
    {
        return $this->head;
    }
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
        return $this->head().''.$this->body().''.$this->BuildMenu($this->data).''.$this->footer();
        
    }
}
