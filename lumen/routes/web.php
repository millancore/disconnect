<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    //return $router->app->version();

    $userRequest =  new Disconnect\Service\Users\CreateRequest(
        ['firstName' => 'Juan Esteban']
    );
    $userService =  new Disconnect\Service\Users\CreateService([]);
    
    $userService->execute($userRequest);
});

$router->get('/users', function() {
    
    $userRequest =  new Disconnect\Service\Users\CreateRequest();
    $userService =  new Disconnect\Service\Users\CreateService([]);
    
    $userService->execute($userRequest);
    
});