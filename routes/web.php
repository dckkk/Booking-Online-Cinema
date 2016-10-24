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

Route::get('/user', function() {
    return view('user.index');
});

Route::get('/user/comingsoon', function() {
    return view('user.comingsoon');
});

Route::get('/user/trailer', function() {
    return view('user.trailer');
});

Route::get('/user/now', function() {
    return view('user.now');
});

Route::get('/user/seat', function() {
    return view('user.seat');
});
