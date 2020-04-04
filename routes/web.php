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
$router->group(['prefix' => 'api/v1'], function () use ($router) {
    $router->post('/register', 'AuthController@register');
    $router->post('/login', 'AuthController@login');
    $router->get('/get-all-produk','ProdukController@allProduk');
    // $router->get('/get-performance','PerformanceController@getPerformance');
    // $router->get('/get-data-olahan','OlahanController@index');
 });