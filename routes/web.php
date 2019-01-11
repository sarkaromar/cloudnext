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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'FrontController@index')->name('home');
Route::get('about', 'FrontController@about')->name('about');

// Route::group(['prefix' => 'admin'], function () {
//     Route::get('login', 'FrontController@index')->name('login');
//     Route::get('register', 'FrontController@index')->name('reg');
// });
