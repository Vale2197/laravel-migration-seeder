<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/packages', 'PackageController@index')->name('packages');

Route::get('/package/{package}', 'PackageController@show')->name('package');

Route::get('/blogs', 'blogController@index')->name('blogs');

Route::get('/blog/{id}', 'blogController@show')->name('blog');
