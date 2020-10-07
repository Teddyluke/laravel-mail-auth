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


Auth::routes();

Route::get('/home', 'GuestController@index')->name('home');

Route::get('/book/create', 'UserController@create')->name('book.create');
Route::post('/book/store', 'UserController@store')->name('book.store');

Route::get('/book/del/{id}', 'UserController@delete')->name('book.del');

Route::get('/book/{id}', 'GuestController@show')->name('book.show');
