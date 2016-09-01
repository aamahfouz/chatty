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

Route::get('/signin', [
	'uses' => '\Chatty\http\Controllers\AuthController@getSignin',
	'as'=> 'auth.signin',
]);

Route::post('/signin', [
	'uses' => '\Chatty\http\Controllers\AuthController@postSignin',	
]);

Route::get('/signout', [
	'uses' => '\Chatty\http\Controllers\AuthController@getSignout',
	'as'=> 'auth.signout',
]);

Route::get('/alert',function(){
	return redirect()->route('home')->with('info', 'You have signed up!');	
});