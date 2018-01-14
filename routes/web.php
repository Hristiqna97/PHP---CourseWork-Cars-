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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/makes', 'MakesController@index')->name('makes');
Route::get('/makes/{id}', 'MakesController@show')->name('makes_show');
Route::get('/makes/edit/{id}', 'MakesController@edit')->name('makes_edit');
Route::post('/makes/edit/{id}', 'MakesController@update')->name('makes_update');
Route::get('/makes/create', 'MakesController@create')->name('makes_create');
Route::post('/makes/edit', 'MakesController@store')->name('makes_store');
Route::delete('/makes/delete/{id}', 'MakesController@destroy')->name('makes_delete');


Route::get('/models', 'ModelsController@index')->name('models');
Route::get('/models/{id}', 'ModelsController@show')->name('models_show');
Route::get('/models/edit/{id}', 'ModelsController@edit')->name('models_edit');
Route::post('/models/edit/{id}', 'ModelsController@update')->name('models_update');
Route::get('/models/create', 'ModelsController@create')->name('models_create');
Route::post('/models/edit', 'ModelsController@store')->name('models_store');
Route::delete('/models/delete/{id}', 'ModelsController@destroy')->name('models_delete');


Route::get('/cars', 'CarsController@index')->name('cars');
Route::get('/cars/{id}', 'CarsController@show')->name('cars_show');
Route::get('/cars/edit/{id}', 'CarsController@edit')->name('cars_edit');
Route::post('/cars/edit/{id}', 'CarsController@update')->name('cars_update');
Route::get('/cars/create', 'CarsController@create')->name('cars_create');
Route::post('/cars/edit', 'CarsController@store')->name('cars_store');
Route::delete('/cars/delete/{id}', 'CarsController@destroy')->name('cars_delete');