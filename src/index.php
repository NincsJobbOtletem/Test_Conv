<?php

include 'View/menu_View.php';
include 'Controller/menu_Controller.php';
include 'Modell/model_Menu.php';

$details = include('Config/config.php');

$test = new Database($details);     
$data = $test->getAll();
$test1 = new Controller($data);
$menu = $test1->run();
print $menu;
?>