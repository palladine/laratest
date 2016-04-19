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
	return view('main');
})->name('main');

Route::get('welcome', [
	'uses' => 'UsersController@welcome',
	'as' => 'welcome',
	'middleware' => 'auth'
]);

Route::get('registration', function() {
	return view('register');
})->name('get_register');

Route::post('registration', [
	'uses' => 'UsersController@post_registration',
	'as' => 'post_register'
]);

Route::post('login', [
	'uses' => 'UsersController@login',
	'as' => 'login'
]);

Route::get('logout', [
	'uses' => 'UsersController@logout',
	'as' => 'logout'
]);
