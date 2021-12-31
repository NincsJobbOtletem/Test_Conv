<?php

namespace MyApp\Controller;


use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use MyApp\Utils\Database\Database;
use MyApp\Modell\model\selects;
use MyApp\Modell\model\Configer;

class Controller
{


    function __construct()
    {
        $cnf = include(__DIR__ . '/../Config/config.php');;
        $c = new Configer($cnf);
        $config = $c->fullconfig();

        $this->loader = new FilesystemLoader('src/View');
        $this->twig = new Environment($this->loader);

        $test = Database::getInstance($config);
        $data = new selects();

        $this->category = $data->selectAll($test);
    }

    function twig_render()
    {
        echo $this->twig->render('main.html.twig', array('category' => $this->category));
    }
}

//show twig render
