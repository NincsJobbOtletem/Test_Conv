<?php

namespace MyApp\Controller;


use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use MyApp\Utils\Database\Database;
use MyApp\Modell\model\selects;

class Controller
{
    private $data;

    function __construct()
    {
        $config = include(__DIR__ . '/../Config/config.php');

        $this->loader = new FilesystemLoader('src/View');
        $this->twig = new Environment($this->loader);

        $test = Database::getInstance($config);
        $data = new selects();
        
        $this->category = $data->selectAll($test);
        echo "<pre>";
        var_dump($this->category);
        echo "</pre>";
        $this->alma = array();
        
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

                $menu .= "</li>";
            }
        }

        $menu .= "</ul>";
        return $menu;
    }
    function twig_render()
    {
        echo $this->twig->render('main.html.twig', array('category' => $this->category));
    }
}

//show twig render
