<?php

include 'View/menu_View.php';
include 'Controller/menu_Controller.php';
include 'Modell/model_Menu.php';

    $test1 = new ConfToData();
    $data = $test1->run();
    $testc = new Builder($data);
    $menu = $testc->run();
    print $menu;
?>