<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(['namespace' => 'Tangfastics\Controllers'], function()
{
    Route::get('/', ['as' => 'home', 'uses' => 'ArticlesController@index']);

    Route::resource('articles', 'ArticlesController');

    Route::get('register', ['as' => 'register', 'uses' => 'UsersController@create']);
    Route::resource('users', 'UsersController', ['except' => ['destory']]);
    Route::resource('profile', 'ProfilesController');

    Route::get('login', ['as' => 'login', 'uses' => 'SessionsController@create']);
    Route::get('logout', ['as' => 'logout', 'uses' => 'SessionsController@destory']);
    Route::resource('sessions', 'SessionsController', ['only' => ['create', 'store']]);
});
