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

$router->get('/', function () {
    return response()->json([
        'message'=> 'Welcome to Go Bills',
    ],200);
});
$router->group(['prefix' => 'api/v1'], function () use ($router) {
    $router->post('/register', 'AuthController@register');
    $router->post('/login', 'AuthController@login');
    $router->get('/get-all-produk','ProdukController@allProduk');
    $router->post('/kode','KodeController@index');
    $router->post('/tagihan','TagihanController@post_tagihan');
    $router->get('/tagihan','TagihanController@get_tagihan');
 });