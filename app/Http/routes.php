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

Route::get('/', 'DatabaseController@getIndex');
Route::get('/user/login', 'DatabaseController@getUserLogin');
Route::post('/user/login', 'DatabaseController@postUserLogin');
Route::get('/user/logout', 'DatabaseController@getUserLogout');
Route::post('/user/logout', 'DatabaseController@postUserLogout');
Route::get('/user/create', 'DatabaseController@getUserCreate');
Route::post('/user/create', 'DatabaseController@postUserCreate');
Route::get('/user/update', 'DatabaseController@getUserUpdate');
Route::post('/user/update', 'DatabaseController@postUserUpdate');
Route::get('/user/delete', 'DatabaseController@getUserDelete');
Route::post('/user/delete', 'DatabaseController@postUserDelete');

//furniture Assets routes

Route::get('/tech/show/{tech_asset}', 'DatabaseController@getTechShow');
Route::get('/tech/create', 'DatabaseController@getTechCreate');
Route::post('/tech/create', 'DatabaseController@postTechCreate');
Route::get('/tech/update/{tech_asset}' 'DatabaseController@getTechUpdate');
Route::post('/tech/update/{tech_asset}' 'DatabaseController@postTechUpdate');
Route::post('/tech/delete/{tech_asset}', 'DatabaseController@postTechDelete');

//Furniture Assets routes

Route::get('/furniture/show/{furniture_asset}', 'DatabaseController@getFurnitureShow');
Route::get('/furniture/create', 'DatabaseController@getFurnitureCreate');
Route::post('/furniture/create', 'DatabaseController@postFurnitureCreate');
Route::get('/furniture/update/{furniture_asset}' 'DatabaseController@getFurnitureUpdate');
Route::post('/furniture/update/{furniture_asset}' 'DatabaseController@postFurnitureUpdate');
Route::post('/furniture/delete/{furniture_asset}', 'DatabaseController@postFurnitureDelete');
