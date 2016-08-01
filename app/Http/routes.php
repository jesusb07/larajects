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

Route::get('/', 'WelcomeController@index');

// Authentication routes...
Route::get('login',['as'=>'auth/login','uses'=>'Auth\AuthController@getLogin']);
Route::post('login', ['as' =>'login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('registro', 'Auth\AuthController@getRegister');
Route::post('register', ['as' => 'register', 'uses' => 'Auth\AuthController@postRegister']);

//user routes

Route::group(['middleware' => ['auth'],'namespace' => 'Users'],function(){

    route::resource('miperfil','ProfileController');
    Route::post('uploadAvatar',['as' =>'uploadAvatar', 'uses' => 'ProfileController@updateAvatar']);
    route::post('updatePassword',['as' =>'updatePassword','uses' => 'ProfileController@updatePassword']);
    route::put('updateProfile',['as' =>'updateProfile','uses'=>'ProfileController@updateProfile']);
});
