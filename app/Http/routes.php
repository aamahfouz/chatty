<?php

/**
 * Home
 */
Route::get('/', [
    'uses' => '\Chatty\http\Controllers\HomeController@index',
    'as' => 'home',
]);

/**
 * Authentication
 */
Route::get('/signup', [
	'uses' => '\Chatty\http\Controllers\AuthController@getSignup',
	'as'=> 'auth.signup',
]);

Route::post('/signup', [
	'uses' => '\Chatty\http\Controllers\AuthController@postSignup',	
]);


Route::get('/alert',function(){
	return redirect()->route('home')->with('info', 'You have signed up!');	
});