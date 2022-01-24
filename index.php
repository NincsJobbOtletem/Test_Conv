<?php

include_once __DIR__ . '/vendor/autoload.php';

use MyApp\Controller\Controller;
use MyApp\Router; 

Router::get('/main', function () {
    return new Controller();
});
 $menu = new Controller();
 $menu1= $menu->twig_render();