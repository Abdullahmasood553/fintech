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




Route::get('/', 'HomeController@index')->name('dashboard');


Route::get('/register', 'users\RegisterController@register');
Route::post('save_register', 'users\RegisterController@save_register');


Route::get('/login', 'users\LoginController@login')->name('login');
Route::post('user_login', 'users\LoginController@user_login');


// Profile

Route::get('/profile', 'users\ProfileController@profile');
