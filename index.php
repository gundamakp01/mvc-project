<?php
require_once './controller/ProductController.php';
require_once './App.php';
require_once 'controller/HomeController.php';

$app = new Application();

$app->route->get('/contact', function(){
    
});
$app->route->get('/product', [ProductController::class ,'index' ]);
// $app->route->get('/user', [UserCoontrller::class, 'getUser'])
// $app->route->post('/user', [UserCoontrller::class, 'postUser'])
$app->route->get('/contact', function(){
    return "hello";
});
$app->route->post('/contact', function(){
    return 'goodbye';
});

$app->route->get('/home', [HomeController::class, 'home']);
$app->run();