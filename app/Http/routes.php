<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/Todo', 'TodoController@index');
Route::get('/Todo-creat', 'TodoController@creat');
Route::post('/save', 'TodoController@store');
Route::get('/Todo-update/{id}', 'TodoController@edit');
Route::post('/edit', 'TodoController@update');
Route::get('/delete/{id}', 'TodoController@delete');
Route::post('upload','TodoController@upload');