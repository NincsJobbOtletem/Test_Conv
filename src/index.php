<?php

include 'View/menu_View.php';
include 'Controller/menu_Controller.php';
include 'Modell/model_Menu.php';

$testa = new ConfToData();
$data = $testa->run();


$testb = new Builder($data);
$menu1 = $testb->run();

$testc = new View();
$menu = $testc->head().''.$testc->body().''.$menu1.''.$testc->footer();
print $menu;

