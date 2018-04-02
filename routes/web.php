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

Route::get('/', 'PagesController@index');

// Link to reviews controller
Route::resource('reviews', 'ReviewsController');
Route::resource('professors', 'ProfessorsController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('reviews/create/{id}', 'ReviewsController@create');
Route::get('/autocomplete', 'PagesController@autocomplete');

