<?php
class Builder
{
  protected $data;

  function __construct($data)
  {
    $this->result = $data;
  }

  function has_children($rows, $id)
  {
    foreach ($rows as $row) {
      if ($row["parent_id"] == $id)
        return true;
    }
    return false;
  }
  protected function Action($data, $parent = 0)
  {
    $menu = "<ul>";
    foreach ($data as $row) {
      if ($row["parent_id"] == $parent) {
        $menu .= "<li>" . $row["name"];
        if ($this->has_children($data, $row["id"])) {
          $menu .= $this->Action($data, $row["id"]);
        }
        $menu .= "</li>";
      }
    }

    $menu .= "</ul>";
    return $menu;
  }
  public function run()
  {
    $menu = $this->Action($this->result);
    return $menu;
  }
}
