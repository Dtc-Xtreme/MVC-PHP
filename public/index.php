<?php
require_once('../vendor/autoload.php');

use MVCDTC\MVCApplication;
use MVCDTC\Services\Authentication;
use MVCDTC\Repositories\AccountRepository;
use MVCDTC\Repositories\TestRepository;

$app = new MVCApplication();

## Routes : First letter of controller and action must be capitalized ##
$app->AddRoute(
    $route = "/",
    $controller = "Home",
    $action = "Index"
);

## Middelware ##
//$app->AddMiddleware(Authentication::class, "Authentication");

$app->services->AddService(TestRepository::class);
$app->services->AddService(AccountRepository::class);
$app->services->AddServiceAndInstanciate(Authentication::class);

$app->BuildPlatform();
?>