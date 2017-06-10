<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Routes to welcome page as guest
Route::get('/', function () {
    return view('welcome');
});

// Routes to home page as user
Route::get('/home', 'HomeController@index')->name('home');

// Routes to settings as user
Route::get('settings', 'UserController@settings')->middleware('auth');
Route::post('settings', 'UserController@update_avatar');

Auth::routes();
