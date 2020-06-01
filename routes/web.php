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


Route::get('/articles', 'ArticleController@index')->name('admin.articles.index');

Route::get('/articles/create', function () {
    return view('admin.articles.create');
})->name('admin.articles.create');

Route::get('/articles/{article}/edit', function () {
    return view('admin.articles.edit');
})->name('admin.articles.edit');
