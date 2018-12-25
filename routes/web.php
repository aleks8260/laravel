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

/*
Route::get('posts/create', function () {
    return view('posts.create');
});
*/

Route::get('posts', 'PostController@index');
//Route::resource('products', 'ProductController');
//Роут регистрации и авторизации
Auth::routes();
Route::get('/admin', 'AdminController@dashboard')->name('dashboard');
Route::resource('/admin/product', 'ProductController');
Route::get('/home', 'HomeController@index')->name('home');
