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

$app->get('clientes', 'ClienteController@index');
$app->post('clientes', 'ClienteController@store')->middleware('cors');
$app->get('clientes/{id}', 'ClienteController@show');
$app->post('clientes/{id}', 'ClienteController@update');
$app->delete('clientes/{id}', 'ClienteController@destroy');
