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

Route::get('/', 'guests\PageController@homepage');
Route::get('guestcomics', 'ComicController@index')->name('guestcomic');
Route::get('guestcomics/{{comic}}', 'ComicController@show');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('admin/comics', 'admin\ComicController');
Route::resource('admin/series', 'admin\ComicController');