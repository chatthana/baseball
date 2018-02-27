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

// Home page (Index page)
Route::get('/', 'SiteController@index');
// Product details page
Route::get('/products/{id}', 'ProductController@show');
// Product card slider implemented here
Route::get('/showcase', 'SiteController@showcase');