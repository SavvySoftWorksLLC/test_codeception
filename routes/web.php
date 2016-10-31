<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('jstest', 'JSTestController', ['only' => ['index']]);

Route::post('jstest/{jstest}', 'JSTestController@update');

Route::resource('test3', 'Counter', ['only' => ['index']]);

Route::resource('nothing', 'NothingController', ['only' => ['index']]);