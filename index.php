<?php

include_once __DIR__ . '/vendor/autoload.php';

use MyApp\Controller\Controller;
use MyApp\Router;
use MyApp\Utils\Database\Database;
use MyApp\Modell\model\MenuBuild;
use MyApp\Modell\model\selects;
use MyApp\View\MenuView\MenuView;

Router::get('/main', function () {
    return new Controller();
});

//$config = include(__DIR__ . '/src/Config/config.php');

// $test = Database::getInstance($config);
// $data = new selects();
// $test1 = $data->selectAll($test);

 $menu = new Controller();
 $menu1= $menu->twig_render();
// print $menu1;

// $sql = "SELECT * FROM tree_source";
// $query=$test->prepare($sql);
// $query->execute();
// $data = $query->fetchAll();


