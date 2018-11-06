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
    return $router->app->version();
});

$router->get('/bank', 'BankController@show_bank_list');
$router->post('/del_bank', 'BankController@del_bank');
$router->post('/add_bank', 'BankController@add_bank');
$router->post('/edit_bank', 'BankController@edit_bank');