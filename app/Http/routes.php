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

Route::get('/', 'DatabaseController@getTechShow');
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

//Tech Assets routes

Route::get('/tech/show/{tech_asset?}', 'DatabaseController@getTechShow');
Route::get('/tech/create', 'DatabaseController@getTechCreate');
Route::post('/tech/create', 'DatabaseController@postTechCreate');
Route::get('/tech/update/{tech_asset}', 'DatabaseController@getTechUpdate');
Route::post('/tech/update/{tech_asset}', 'DatabaseController@postTechUpdate');
Route::post('/tech/delete/{tech_asset}', 'DatabaseController@postTechDelete');

//Furniture Assets routes

Route::get('/furniture/show/{furniture_asset}', 'DatabaseController@getFurnitureShow');
Route::get('/furniture/create', 'DatabaseController@getFurnitureCreate');
Route::post('/furniture/create', 'DatabaseController@postFurnitureCreate');
Route::get('/furniture/update/{furniture_asset}', 'DatabaseController@getFurnitureUpdate');
Route::post('/furniture/update/{furniture_asset}', 'DatabaseController@postFurnitureUpdate');
Route::post('/furniture/delete/{furniture_asset}', 'DatabaseController@postFurnitureDelete');

//Debug Route

Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(config('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    /*
    The following line will output your MySQL credentials.
    Uncomment it only if you're having a hard time connecting to the database and you
    need to confirm your credentials.
    When you're done debugging, comment it back out so you don't accidentally leave it
    running on your live server, making your credentials public.
    */
    //print_r(config('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    }
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});
