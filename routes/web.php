<?php

/** @var \Laravel\Lumen\Routing\Router $router /


*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('/users',['uses' => 'UserController@getUsers']);
    $router->post('/users', ['uses' => 'UserController@createUser']);
});
