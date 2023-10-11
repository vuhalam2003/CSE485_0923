<?php

require_once('app\config\config.php');

$controller = isset($_GET['c'])?$_GET['c']:'home';

$action = isset($_GET['a'])? $_GET['a']:'index';


if($controller == 'home'){
    require_once ('C:\xampp\htdocs\cse485\midterm\app\controllers\HomeController.php');
    $homeController = new HomeController();
    $homeController->index();
}elseif($controller == 'book' && $action=='add'){
    require_once APP_ROOT.'/cse485/midterm/app/controllers/BookController.php';
    $bookController = new BookController();
    $bookController->add();
}
else{
    echo $controller . " ". $action;
}