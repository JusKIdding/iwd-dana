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

Route::get('/', function () {
    return view('pages.index');
});

//Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

Route::get('login', 'UserController@index');
Route::post('register', 'UserController@register');
Route::post('user/login', 'UserController@login');
Route::get('dashboard', 'DashBoardController@index');
