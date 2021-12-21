<?php

namespace MyApp\Controller;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use MyApp\Utils\Database\Database;


class Controller
{
    function __construct()
    {
        $loader = new FilesystemLoader('src/View');
        $twig = new Environment($loader);
        echo $twig->render('main.html.twig', array(
            'name' => 'Patrik',
            'age' => 23
        ));
    }
}
