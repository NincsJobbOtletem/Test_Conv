<?php

include_once __DIR__ . '/vendor/autoload.php';

use MyApp\Controller\Controller;
use MyApp\Router;
use MyApp\Utils\Database\Database;
use MyApp\Modell\model\ConfToData;


Router::get('/hello', function () {
    return new Controller();
});

$config = include(__DIR__ . '/src/Config/config.php');

$test = Database::getInstance($config);
$sql = "SELECT * FROM tree_source";
$query=$test->prepare($sql);
$query->execute();
var_dump($query->fetchAll());
