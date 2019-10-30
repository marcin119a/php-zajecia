<?php

require 'vendor/autoload.php';

include_once 'controllers/default_controller.php';
include_once 'controllers/number_controller.php';
include_once 'controllers/HomeController.php';
include_once 'controllers/NewsController.php';
include_once 'models/number_model.php';

$app = new \Slim\Slim();

$app->get('/', function() {
    include 'views/default.php';
});

//$app->get('/:module(/:number)', function ($module, $number = 1) {
//    switch($module) {
//        case 'number':
//            $controller = new NumberController();
//            break;
//        default:
//            $controller = new DefaultController();
//    }
//
//    $action = 'view';
//
//    $controller->indexAction();
//});




$app->get('/hello/:name', function ($name){
    $controller = new HomeController();
    $controller->indexAction($name);
});
$app->get('/news/:id', function($id) {
    $controller = new NewsController();
    $controller->singleAction($id);
});


$app->run();
