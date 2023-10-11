<?php
$controller = [
    'pages' => ['home', 'error']
];
if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])){
    $controller = 'pages';
    $action = 'error';
}

include_once('controllers/'.$controller.'_controller.php');
$klass = str_replace('_', '', ucwords($controller,'_')).'Controller';
$controller = new $klass;
$controller->$action();