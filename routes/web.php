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
    //Event::fire(new \App\Events\HelloEvent());
    return view('welcome');
});

Route::get('user/{user}',function(\App\User $user){ return $user;
});
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('products','ProductController');