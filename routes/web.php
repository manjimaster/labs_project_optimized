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

// Editor routes


// Admin routes

    // Logo

    Route::get('/admin-master/logo', 'AdminIndexController@logoShow')->name('showLogo');

    Route::post('/admin-master/logo/update', 'AdminIndexController@logoUpdate')->name('updateLogo');

    // Carousel

    Route::get('/admin-master/carousel', 'AdminIndexController@carouselShow')->name('showCarousel');

    Route::post('/admin-master/carousel/create', 'AdminIndexController@carouselCreate')->name('createCarousel');

    Route::get('/admin-master/carousel/edit{id}', 'AdminIndexController@carouselEdit')->name('editCarousel');

    Route::post('/admin-master/carousel/update{id}', 'AdminIndexController@carouselUpdate')->name('updateCarousel');

    Route::get('/admin-master/carousel/delete{id}', 'AdminIndexController@carouselDelete')->name('deleteCarousel');