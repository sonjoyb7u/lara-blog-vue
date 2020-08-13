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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'auth', 'prefix'=>'home/category', 'as'=>'home.', 'namespace'=>'Admin\Category'], function() {
    Route::get('index', 'CategoryController@index')->name('category.index');
});

Route::group(['middleware'=>'auth', 'prefix'=>'home/post', 'as'=>'home.', 'namespace'=>'Admin\Post'], function() {
    Route::get('index', 'PostController@index')->name('post.index');
});
