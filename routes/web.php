<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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
    return $router->app->version();
});
$router->get('/home/goods',[
    'uses' => 'Api\ApiController@home'
]);
$router->get('/home/goodsproduct/{id}',[
    'uses' => 'Api\ApiController@product'
]);
$router->get('/home/photo',[
    'uses' => 'Api\ApiController@photo'
]);