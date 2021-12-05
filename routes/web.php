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

Route::get('/', 'PageController@home')->name('home');
Route::get('/diagnosa', 'PageController@diagnosa_page')->name('diagnosa');
Route::post('/diagnosa', 'PageController@diagnosa_proses')->name('post-diagnosa');
Route::get('/info', 'PageController@info_page')->name('info');
Route::get('/about', 'PageController@about_page')->name('about');
