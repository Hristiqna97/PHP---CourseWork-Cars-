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
Route::get('/makes/{id}', 'MakesController@show')->name('makes.show');
Route::get('/makes/edit/{id}', 'MakesController@edit')->name('makes.edit');
Route::post('/makes/edit/{id}', 'MakesController@update')->name('makes.update');
Route::get('/makes/create', 'MakesController@create')->name('makes.create');
Route::post('/makes/store', 'MakesController@store')->name('makes.store');
Route::delete('/makes/delete/{id}', 'MakesController@destroy')->name('makes.delete');


Route::get('/models', 'ModelsController@index')->name('models');
Route::get('/models/{id}', 'ModelsController@show')->name('models.show');
Route::get('/models/edit/{id}', 'ModelsController@edit')->name('models.edit');
Route::post('/models/edit/{id}', 'ModelsController@update')->name('models.update');
Route::get('/models/create', 'ModelsController@create')->name('models.create');
Route::post('/models/store', 'ModelsController@store')->name('models.store');
Route::delete('/models/delete/{id}', 'ModelsController@destroy')->name('models.delete');

//Route::resource('cars', 'CarsController');
Route::get('/cars', 'CarsController@index')->name('cars');
Route::get('/cars/{id}', 'CarsController@show')->name('cars.show')->where('id', '[0-9]+');
Route::get('/cars/edit/{id}', 'CarsController@edit')->name("cars.edit")->where('id', '[0-9]+');
Route::post('/cars/edit/{id}', 'CarsController@update')->name('cars.update');
Route::get('/cars/create', 'CarsController@create')->name('cars.create');
Route::post('/cars/store', 'CarsController@store')->name('cars.store');
Route::delete('/cars/delete/{id}', 'CarsController@destroy')->name('cars.delete');