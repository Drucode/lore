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

Route::get('/', array("before" => "auth", function()
{
	return View::make('hello');
}));

Route::get('/login',  array('as' => 'login', function() {
	return View::make('login');
}));

Route::get('/logout', array('as' => 'logout', "before" => "auth", function() {
	Auth::logout();
	return Redirect::to('login');
}));

Route::post('/login', function() {
	$cred = Input::only('email', 'password');

	$cred["status"] = 1; // Filter the disabled users

	if (Auth::attempt($cred)) {
		return Redirect::intended('/');
	}

	return View::make('login')->with('fail', true);
});