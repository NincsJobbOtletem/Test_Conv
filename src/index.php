<?php

include 'View/menu_View.php';
include 'Controller/menu_Controller.php';
include 'Modell/model_Menu.php';

$testa = new ConfToData();
$data = $testa->run();

$viewAndBuild = new View($data);
print $viewAndBuild->show();


