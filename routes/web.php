<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('/dashboard', [
	'uses' => 'PostController@getDashboard',
	'middleware'=>'auth',
	'as' => 'dashboard'
]);

Route::post('/signup', [
	'uses' => 'UserController@postSignUp',
	'as' => 'signup'
]);

Route::post('/signin', [
	'uses' => 'UserController@postSignIn',
	'as' => 'signin'
]);

Route::get('/logout', [
	'uses' => 'UserController@logout',
	'as' => 'logout'
]);
Route::get('/login', [
	'uses' => 'UserController@login',
	'as' => 'login'
]);

Route::post('/createpost',[
	'uses' => 'PostController@postCreatePost',
	'as' => 'post.create'
	]);
