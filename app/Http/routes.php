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

//Home Route

Route::get('/', 'DatabaseController@getIndex');

//User Authentication routes

Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');

Route::get('/logout', 'Auth\AuthController@logout');

Route::get('/register', 'Auth\AuthController@getRegister');
Route::post('/register', 'Auth\AuthController@postRegister');

//Tech Assets routes

Route::group(['middleware' => 'auth'], function () {
    Route::get('/tech/create', 'DatabaseController@getTechCreate');
    Route::post('/tech/create', 'DatabaseController@postTechCreate');
    Route::get('/tech/update/{tech_asset?}', 'DatabaseController@getTechUpdate');
    Route::post('/tech/update', 'DatabaseController@postTechUpdate');
    Route::post('/tech/delete/{tech_asset}', 'DatabaseController@postTechDelete');
});
Route::get('/tech/show/{tech_asset?}', 'DatabaseController@getTechShow');

//Furniture Assets routes

Route::group(['middleware' => 'auth'], function () {
    Route::get('/furniture/create', 'DatabaseController@getFurnitureCreate');
    Route::post('/furniture/create', 'DatabaseController@postFurnitureCreate');
    Route::get('/furniture/update/{furniture_asset}', 'DatabaseController@getFurnitureUpdate');
    Route::post('/furniture/update/{furniture_asset}', 'DatabaseController@postFurnitureUpdate');
    Route::post('/furniture/delete/{furniture_asset}', 'DatabaseController@postFurnitureDelete');
});
Route::get('/furniture/show/{furniture_asset?}', 'DatabaseController@getFurnitureShow');
