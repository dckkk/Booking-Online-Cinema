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
    return view('/user/index');
});

Route::get('/dashboard', 'DashboardController@index');

Route::get('/comingsoon', function() {
    return view('user.comingsoon');
});

Route::get('/trailer', function() {
    return view('user.trailer');
});

Route::get('/now', function() {
    return view('user.now');
});

Route::get('/seat', function() {
    return view('user.seat');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
