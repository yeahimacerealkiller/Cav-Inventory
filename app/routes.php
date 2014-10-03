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

//Route::get('/', function()
//{
//	return View::make('hello');
//});

// SESSION (USER AUTH)
//Route::resource('sessions', 'SessionsController');
Route::get('/', 'SessionsController@create');   // Login Form
Route::get('/logout', 'SessionsController@destroy');

// USER PROFILE PAGE
//Route::resource('userProfile', 'UserProfileController' );
Route::get('/u/{username}', 'UserProfileController@show')->before('auth');
Route::get('/u/{username}/edit', 'UserProfileController@edit');