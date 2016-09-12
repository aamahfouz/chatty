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
	'middleware' => ['guest'],
]);

Route::post('/signup', [
	'uses' => '\Chatty\http\Controllers\AuthController@postSignup',	
	'middleware' => ['guest'],
]);

Route::get('/signin', [
	'uses' => '\Chatty\http\Controllers\AuthController@getSignin',
	'as'=> 'auth.signin',
	'middleware' => ['guest'],
]);

Route::post('/signin', [
	'uses' => '\Chatty\http\Controllers\AuthController@postSignin',	
	'middleware' => ['guest'],
]);

Route::get('/signout', [
	'uses' => '\Chatty\http\Controllers\AuthController@getSignout',
	'as'=> 'auth.signout',
]);

/**
 *	Search
 */
Route::get('/search', [
	'uses' => '\Chatty\http\Controllers\SearchController@getResults',
	'as'=> 'search.results',
]);

/**
 *	User Profile
 */
Route::get('/user/{username}', [
	'uses' => '\Chatty\http\Controllers\ProfileController@getProfile',
	'as'=> 'profile.index',
]);

Route::get('/alert',function(){
	return redirect()->route('home')->with('info', 'You have signed up!');	
});