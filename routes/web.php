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

// client modules
Route::get('/', 'IndexController@index');
Route::get('/about_us', 'AboutsController@show_about_us');
Route::get('/about_me', 'AboutsController@show_about_me');
Route::get('/our_clients', 'IndexController@our_clients');

Route::get('/workshop', 'WorkshopsController@create');
Route::post('/workshop', 'WorkshopsController@store');

Route::get('/business_services', 'BusinessController@create');
Route::post('/business_services', 'BusinessController@store');

Route::get('/statistical_analysis', 'StatsController@create');
Route::post('/statistical_analysis', 'StatsController@store');

// login module
Route::get('/admin', 'SessionsController@show')->name('login');
Route::post('/admin/login', 'SessionsController@create');
Route::get('/admin/logout', 'SessionsController@destroy');


// admin modules
Route::get('/admin/home', 'AdminController@show_home');

Route::get('/admin/about/about_us', 'AboutsController@edit_about_us');
Route::patch('/admin/about/about_us/{about_us}', 'AboutsController@update_about_us');

Route::get('/admin/about/about_me', 'AboutsController@edit_about_me');
Route::patch('/admin/about/about_me/{about_me}', 'AboutsController@update_about_me');

// training workshops
Route::get('/admin/training_workshops', 'AdminController@show_training_workshop');
Route::get('/admin/training_workshops/delete/{workshop}', 'AdminController@delete_training_workshop');
Route::get('/admin/training_workshop/view/{workshop}', 'AdminController@view_training_workshop');
Route::get('/admin/training_workshop/print/{workshop}', 'AdminController@print_training_workshop');

// statistical analysis
Route::get('/admin/statistical_analysis', 'AdminController@show_statistical_analysis');
Route::get('/admin/statistical_analysis/delete/{stat}', 'AdminController@delete_statistical_analysis');
Route::get('/admin/statistical_analysis/view/{stat}', 'AdminController@view_statistical_analysis');
Route::get('/admin/statistical_analysis/print/{stat}', 'AdminController@print_statistical_analysis');