<?php 

use function src\slimConfiguration;

use App\Controllers\UserController;

$app = new \Slim\App();

$app->get('/',UserController::class.':getUsers');

$app->run();