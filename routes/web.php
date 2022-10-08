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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'UserController@index')->name('home');
Route::get('/profile', 'UserController@editProfile')->name('profile');
Route::get('/about', 'UserController@about')->name('about');

Route::resource('/residents','ResidentsController');
Route::get('/index', 'ResidentsController@index')->name('index');
