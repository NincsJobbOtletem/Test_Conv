<?php

namespace MyApp\Controller;


use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use MyApp\Utils\Database\Database;
use MyApp\Modell\model\selects;
use MyApp\Config\Bootstrap;

class Controller
{

    function __construct()
    {
        // $builder = new \DI\ContainerBuilder();
        // $builder->addDefinitions(__DIR__ . '/../Config/config.php');
        // $container = $builder->build();
        // $d = new Configer($container);
        // $config = $d->getConfig($container);

        //  $cnf = include(__DIR__ . '/../Config/config.php');
        //  $c = new Configer($cnf);
        // $config = $c->fullconfig();
        // echo "<pre>";
        // var_dump($config) ;
        // echo "<pre>";

        $con1 = new Bootstrap;
        $config = $con1->giveConfig();
        

        $this->loader = new FilesystemLoader('src/View');
        $this->twig = new Environment($this->loader);

        $select = Database::getInstance($config);
        $data = new selects();

        $this->category = $data->selectAll($select);
    }

    function twig_render()
    {
        echo $this->twig->render('main.html.twig', array('category' => $this->category));
    }
}


//show twig render
