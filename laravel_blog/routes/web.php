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

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//ブログ新規作成画面
Route::get('/blog/create', 'BlogController@create')->name('blog.create');

//ブログ新規作成機能
Route::post('/blog/{id}/store', 'BlogController@store')->name('blog.store');



