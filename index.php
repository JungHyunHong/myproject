<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/', function () use($app){
    $app->render('main.php');
});

$app->get('/test', function() use($app){
  $app->render('test.php');
});


$app->run();


/*$app = new \Slim\Slim();
$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});

$app->run();*/