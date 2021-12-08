<?php

include 'View/menu_View.php';
include 'Controller/menu_Controller.php';
include 'Modell/model_Menu.php';

$details = include('Config/config.php');

$test = new Database($details);     
$data = $test->getAll();

$testc = new Builder($data);
$menu = $testc->run();
print $menu;
?>