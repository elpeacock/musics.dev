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
	$data['events'] = \App\Event::paginate(15);
    return view('events.index')->with($data);
});
Route::resource('user', 'UserController');
Route::resource('events', 'EventsController');
Route::resource('bands', 'BandsController');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Custom routes...
Route::get('/{user}/favorites', 'UserController@pickFavoriteBands');
Route::post('/{user}/favorites', 'UserController@storeUserFavorites');
