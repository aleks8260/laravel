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

//Роут регистрации и авторизации
Auth::routes();
// Запрещаем доступ не зарегестрированных пользователей ['middleware'=>'auth']
Route::group(['middleware'=>'auth'], function (){
    Route::get('posts', 'PostController@index');
    //Route::resource('products', 'ProductController');
    Route::get('/admin', 'AdminController@dashboard')->name('dashboard');
    Route::resource('/admin/product', 'ProductController');
    //Route::get('/home', 'HomeController@index')->name('home');
    /*Попадаю на страницу под зареганым, в админку*/
    Route::get('/home', 'AdminController@dashboard')->name('dashboard');
    Route::get('/admin/users', 'UserController@index');
});
/*Введет на страницу с обратной связью*/
Route::get('/feedback', 'MailController@feedback')->name('feedback');
Route::post('/sendmail', 'MailController@sendmail')->name('sendmail');