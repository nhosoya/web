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

Route::when('/', 'auth');
Route::when('user', 'auth');

Route::resource('login', 'LoginController');

Route::get('/logout', function(){
	Auth::logout();
	return Redirect::to('/');
});

Route::get('/', function()
{
	return View::make('lesson');
});

Route::resource('user', 'UserController');

Route::get('environment', function()
{
    return App::environment();
});