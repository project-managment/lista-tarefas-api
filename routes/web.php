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
    // return $router->app->version();
    // return response()->json(['status' => 'on', 'version' => '0.0.1', 'title' => 'API do App Lista Tarefas'], 400);
    return ['status' => 'on', 'version' => '0.0.1', 'title' => 'API do App Lista Tarefas'];
});

$router->group(['prefix' => 'user'], function () use ($router) {
    $router->post('authenticate', 'UserController@authenticate');
    $router->post('create', 'UserController@create');
});
$router->group(['middleware' => 'auth'], function () use ($router) {
    $router->get('tasks', 'TaskController@get');
    $router->delete('tasks/{id}', 'TaskController@delete');
    $router->update('tasks/{id}', 'TaskController@update');
});
