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

Route::get('/user/login', function () {
    return 'User login get';
});

Route::post('/user/login', function () {
    return 'User login post';
});

Route::get('/user/logout', function () {
    return 'User logout get';
});

Route::post('/user/logout', function () {
    return 'User logout post';
});

Route::get('/user/create', function () {
    return 'User create';
});

Route::post('/user/create', function () {
    return 'User create post';
});

Route::get('/user/update', function () {
    return 'User update get';
});

Route::post('/user/update', function () {
    return 'User update post';
});

Route::get('/user/delete', function () {
    return 'User delete get';
});

Route::post('/user/delete', function () {
    return 'User update post';
});

//Tech Assets routes

Route::get('/tech/show/{tech_asset}', function ($tech_asset) {
    return 'Show a tech item: '.$tech_asset;
});

Route::get('/tech/create', function () {
    return 'Tech create get';
});

Route::post('/tech/create', function () {
    return 'Tech create post';
});

Route::get('/tech/edit/{tech_asset}', function ($tech_asset) {
    return 'Tech update this item:'.$tech_asset;
});

Route::post('/tech/edit/{tech_asset}', function ($tech_asset) {
    return 'Tech update post'.$tech_asset;
});

Route::post('/tech/delete/{tech_asset}', function ($tech_asset) {
    return 'User delete post'.$tech_asset;
});

//Furniture Assets routes

Route::get('/furniture/show/{furniture_asset}', function ($furniture_asset) {
    return 'Show a furniture item: '.$furniture_asset;
});

Route::get('/furniture/create', function () {
    return 'furniture create get';
});

Route::post('/furniture/create', function () {
    return 'furniture create post';
});

Route::get('/furniture/edit/{furniture_asset}', function ($furniture_asset) {
    return 'furniture update this item:'.$furniture_asset;
});

Route::post('/furniture/edit/{furniture_asset}', function ($furniture_asset) {
    return 'furniture update post'.$furniture_asset;
});

Route::post('/furniture/delete/{furniture_asset}', function ($furniture_asset) {
    return 'User delete post'.$furniture_asset;
});
