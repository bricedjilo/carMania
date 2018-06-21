<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'CarsController@index');
Route::get('/cars', 'CarsController@index');
Route::get('/cars/create', 'CarsController@create');
Route::get('/cars/{car}', 'CarsController@show');
Route::get('/cars/{car}/edit', 'CarsController@edit');
Route::get('/categories/{category}', 'CategoriesController@show');
Route::get('/models/{make_id}', 'ModelsController@models');

Route::post('/cars', 'CarsController@store');

Route::patch('/cars/{car}', 'CarsController@update');

Route::delete('/cars/{car}', 'CarsController@destroy');
