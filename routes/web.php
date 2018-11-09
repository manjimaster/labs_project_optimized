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

Route::get('/', 'IndexController@index')->name('index');


Auth::routes();

Route::get('/admin-master', 'HomeController@index')->name('home');


Route::get('/index', 'IndexController@index')->name('index');

Route::get('/services', 'ServiceController@index')->name('services');

Route::get('/blog', 'BlogController@Index')->name('blog');

Route::get('/contact', 'ContactController@index')->name('contact');

Route::get('/blogPost/{id}', 'BlogPostController@index')->name('blogPost');