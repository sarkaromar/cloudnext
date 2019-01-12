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
Route::get('team', 'FrontController@team')->name('team');
Route::get('testimonial', 'FrontController@testimonial')->name('testimonial');
Route::get('faq', 'FrontController@faq')->name('faq');
Route::get('whyus', 'FrontController@faq')->name('whyus');

Route::get('services', 'FrontController@services')->name('services');
Route::get('it_consulting', 'FrontController@it_consulting')->name('it_consulting');
Route::get('biz_automation', 'FrontController@biz_automation')->name('biz_automation');
Route::get('software_dev', 'FrontController@software_dev')->name('software_dev');
Route::get('data_analysis', 'FrontController@data_analysis')->name('data_analysis');
Route::get('web_portal', 'FrontController@web_portal')->name('web_portal');
Route::get('ecommerce', 'FrontController@ecommerce')->name('ecommerce');
Route::get('outcourced', 'FrontController@outcourced')->name('outcourced');
Route::get('mobile_app', 'FrontController@mobile_app')->name('mobile_app');
Route::get('web_apps_dev', 'FrontController@web_apps_dev')->name('web_apps_dev');
Route::get('qa', 'FrontController@qa')->name('qa');
Route::get('image_analysis', 'FrontController@image_analysis')->name('image_analysis');
Route::get('networking', 'FrontController@networking')->name('networking');
Route::get('security', 'FrontController@security')->name('security');

Route::get('products', 'FrontController@products')->name('products');
Route::get('portfolio', 'FrontController@portfolio')->name('portfolio');
Route::get('news', 'FrontController@news')->name('news');
Route::get('contact', 'FrontController@contact')->name('contact');
Route::get('free_consultant', 'FrontController@free_consultant')->name('free_consultant');




// Route::group(['prefix' => 'admin'], function () {
//     Route::get('login', 'FrontController@index')->name('login');
//     Route::get('register', 'FrontController@index')->name('reg');
// });
