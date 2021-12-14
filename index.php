<?php


use MyApp\View\MenuView\MenuView;
use MyApp\Modell\Almafa\DBDI;

require_once __DIR__ . '/vendor/autoload.php';


$data = new DBDI();
echo "<pre>";
var_dump($data);
echo "</pre>";
$views = new MenuView($data);
print $views->show();

// $testa = new ConfToData();
// $data = $testa->run();

// $viewAndBuild = new View($data);
// print $viewAndBuild->show();
