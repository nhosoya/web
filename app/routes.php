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

Route::get('/', function()
{
	// return View::make('hello');
	$sports = DB::table('sports')->orderBy('name', 'asc')->get();
	return View::make('lesson')->with('sports', $sports);
});

Route::get('users', function()
{
	$users = User::all();
 	$sports = DB::table('sports')->orderBy('name', 'asc')->get();
 	
    return View::make('users')->with('users', $users)->with('sports', $sports);
});

Route::get('environment', function()
{
    return App::environment();
});