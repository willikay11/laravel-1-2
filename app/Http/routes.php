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

//Defined as one group as they are all web interfaces
Route::group(['middleware' => ['web']], function(){
	//will use the login function within AuthController.php
	Route::get('/login', ['as' => 'login','uses' => 'AuthController@login']);
	//post data to the handleLogin function within AuthController.php
	Route::post('/handle', ['as' => 'handleLogin', 'uses' => 'AuthController@handleLogin']);
	//calls the home function within UsersControllers.php
	Route::get('/home' , ['middleware' => 'auth', 'as' => 'home', 'uses' => 'UsersController@home']);
	//calls the logout function within AuthController.php
	Route::get('/logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);
	//specifies which actions are included or exxlude i.e create and store methods within
	//UsersController will be include
	Route::resource('users','UsersController', ['only' => ['create', 'store']]);

	Route::post('/send', 'EmailController@send');
});