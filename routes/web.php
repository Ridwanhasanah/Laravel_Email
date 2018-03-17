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
    return view('welcome');
});

Auth::routes();

/*send url & token activation */
Route::get('auth/activate', 'Auth\ActivationController@activate')->name('auth.activate');

Route::get('/home', 'HomeController@index')->name('home');
