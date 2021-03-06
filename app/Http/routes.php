<?php

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
    Route::get('/tech/confirm-delete/{id?}', 'DatabaseController@getConfirmTechDelete');
    Route::get('/tech/delete/{id?}', 'DatabaseController@getDoTechDelete');
    Route::get('/tech/show/{tech_asset?}', 'DatabaseController@getTechShow');
});

//Furniture Assets routes

Route::group(['middleware' => 'auth'], function () {
    Route::get('/furniture/create', 'DatabaseController@getFurnitureCreate');
    Route::post('/furniture/create', 'DatabaseController@postFurnitureCreate');
    Route::get('/furniture/update/{furniture_asset?}', 'DatabaseController@getFurnitureUpdate');
    Route::post('/furniture/update', 'DatabaseController@postFurnitureUpdate');
    Route::get('/furniture/confirm-delete/{id?}', 'DatabaseController@getConfirmFurnitureDelete');
    Route::get('/furniture/delete/{id?}', 'DatabaseController@getDoFurnitureDelete');
    Route::get('/furniture/show/{furniture_asset?}', 'DatabaseController@getFurnitureShow');

});
