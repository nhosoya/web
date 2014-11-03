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

Route::pattern('id', '[0-9]+');

Route::when('*', 'csrf', ['post']);

Route::resource('login', 'LoginController');

Route::resource('register', 'RegisterController');

Route::get('/logout', function(){
	Auth::logout();
	return Redirect::to('/');
});

Route::group(array('before' => 'auth'), function()
{
	Route::get('/', function()
	{
		return View::make('lesson');
	});

	Route::resource('user', 'UserController');

});

Route::group(array('before' => 'admin', 'prefix' => 'admin'), function()
{
	Route::get('/', function()
	{
		return View::make('admin');
	});

	Route::resource('/user', 'AdminUserController');

});

Route::get('environment', function()
{
    return App::environment();
});
