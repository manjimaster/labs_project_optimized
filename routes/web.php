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

Route::post('/index/newsletter', 'IndexController@newsletterAdd')->name('newsletter');

Route::post('/index/comment{id}', 'IndexController@commentAdd')->name('writeCommentOnBlogPost');

Route::get('/services', 'ServiceController@index')->name('services');

Route::get('/blog', 'BlogController@index')->name('blog');

Route::get('/contact', 'ContactController@index')->name('contact');

Route::get('/blogPost/{id}', 'BlogPostController@index')->name('blogPost');

Route::post('/send', 'EmailController@send');

Route::get('/results/{search}', 'BlogController@results');

Route::post('/search', 'BlogController@search')->name('search');
// Editor routes

// All routes

Route::middleware('can:member')->group(function () {

    // Users

    Route::get('/admin-master/profile', 'AdminUserController@profileShow')->name('showProfile');

    Route::get('/admin-master/profile/edit/{id}', 'AdminUserController@profileEdit')->name('editProfile');

    Route::post('/admin-master/profile/update/{id}', 'AdminUserController@profileUpdate')->name('updateProfile');

});

    // Personal articles

Route::middleware('can:editor')->group(function () {

    Route::get('/admin-master/articles/createPage', 'AdminUserController@ArticleOfUserCreatePage')->name('createPagePersonalArticles');

    Route::get('/admin-master/articles/{id}', 'AdminUserController@ArticleOfUserShow')->name('showPersonalArticles');

    Route::get('/admin-master/articles/edit/{id}', 'AdminUserController@ArticleOfUserEdit')->name('editPersonalArticles');

    Route::post('/admin-master/articles/update/{id}', 'AdminUserController@ArticleOfUserUpdate')->name('updatePersonalArticles');


    Route::post('/admin-master/articles/create', 'AdminUserController@ArticleOfUserCreate')->name('createPersonalArticles');

});

// Admin routes

Route::middleware('can:admin')->group(function() {

    // Logo

    Route::get('/admin-master/logo', 'AdminIndexController@logoShow')->name('showLogo');

    Route::post('/admin-master/logo/update', 'AdminIndexController@logoUpdate')->name('updateLogo');

    // Carousel

    Route::get('/admin-master/carousel', 'AdminIndexController@carouselShow')->name('showCarousel');

    Route::post('/admin-master/carousel/create', 'AdminIndexController@carouselCreate')->name('createCarousel');

    Route::get('/admin-master/carousel/edit/{id}', 'AdminIndexController@carouselEdit')->name('editCarousel');

    Route::post('/admin-master/carousel/update/{id}', 'AdminIndexController@carouselUpdate')->name('updateCarousel');

    Route::get('/admin-master/carousel/delete/{id}', 'AdminIndexController@carouselDelete')->name('deleteCarousel');

    // 3 services invitation - inv1

    Route::get('/admin-master/inv1', 'AdminIndexController@inv1Show')->name('showInv1');

    Route::get('/admin-master/inv1/edit/{id}', 'AdminIndexController@inv1Edit')->name('editInv1');

    Route::post('/admin-master/inv1/update/{id}', 'AdminIndexController@inv1Update')->name('updateInv1');

    // video

    Route::get('/admin-master/video', 'AdminIndexController@videoShow')->name('showVideo');

    Route::post('/admin-master/video/update', 'AdminIndexController@videoUpdate1')->name('updateVideo1');
    
    Route::get('/admin-master/video/edit/{id}', 'AdminIndexController@videoEdit')->name('editVideo');

    Route::post('/admin-master/video/update/{id}', 'AdminIndexController@videoUpdate2')->name('updateVideo2');

    // Testimonials

    Route::get('/admin-master/testimonials', 'AdminIndexController@testimonialShow')->name('showTestimonial');

    Route::post('/admin-master/testimonials/create', 'AdminIndexController@testimonialCreate')->name('createTestimonial');

    Route::get('/admin-master/testimonials/edit/{id}', 'AdminIndexController@testimonialEdit')->name('editTestimonial');

    Route::post('/admin-master/testimonials/update/{id}', 'AdminIndexController@testimonialUpdate')->name('updateTestimonial');

    Route::get('/admin-master/testimonials/delete/{id}', 'AdminIndexController@testimonialDelete')->name('deleteTestimonial');

    // Services

    Route::get('/admin-master/services', 'AdminIndexController@serviceShow')->name('showService');

    Route::post('/admin-master/services/create', 'AdminIndexController@serviceCreate')->name('createService');

    Route::get('/admin-master/services/edit/{id}', 'AdminIndexController@serviceEdit')->name('editService');

    Route::post('/admin-master/services/update/{id}', 'AdminIndexController@serviceUpdate')->name('updateService');

    Route::get('/admin-master/services/delete/{id}', 'AdminIndexController@serviceDelete')->name('deleteService');

    // invitation before contact - inv2

    Route::get('/admin-master/inv2', 'AdminIndexController@inv2Show')->name('showInv2');

    Route::get('/admin-master/inv2/edit/{id}', 'AdminIndexController@inv2Edit')->name('editInv2');

    Route::post('/admin-master/inv2/update/{id}', 'AdminIndexController@inv2Update')->name('updateInv2');

    // Projects

    Route::get('/admin-master/allProjects', 'AdminServiceController@projectShow')->name('showProject');

    Route::post('/admin-master/allProjects/create', 'AdminServiceController@projectCreate')->name('createProject');

    Route::get('/admin-master/allProjects/edit/{id}', 'AdminServiceController@projectEdit')->name('editProject');

    Route::post('/admin-master/allProjects/update/{id}', 'AdminServiceController@projectUpdate')->name('updateProject');

    Route::get('/admin-master/allProjects/delete/{id}', 'AdminServiceController@projectDelete')->name('deleteProject');

    // invitation before contact - inv2

    Route::get('/admin-master/contact', 'AdminContactController@contactShow')->name('showContact');

    Route::get('/admin-master/contact/edit', 'AdminContactController@contactEdit')->name('editContact');

    Route::post('/admin-master/contact/update', 'AdminContactController@contactUpdate')->name('updateContact');

    // Users

    Route::get('/admin-master/users', 'AdminUserController@usersShow')->name('showUsers');

    Route::post('/admin-master/users/create', 'AdminUserController@usersCreate')->name('createUsers');

    Route::get('/admin-master/users/edit/{id}', 'AdminUserController@usersEdit')->name('editUsers');

    Route::post('/admin-master/users/update/{id}', 'AdminUserController@usersUpdate')->name('updateUsers');

    Route::get('/admin-master/users/delete/{id}', 'AdminUserController@usersDelete')->name('deleteUsers');

    // Tags

    Route::get('/admin-master/Tags', 'AdminTagController@TagsShow')->name('showTags');

    Route::post('/admin-master/Tags/create', 'AdminTagController@TagsCreate')->name('createTags');

    Route::get('/admin-master/Tags/validate/{id}', 'AdminTagController@TagsValidate')->name('validateTags');

    Route::get('/admin-master/Tags/delete/{id}', 'AdminTagController@TagsDelete')->name('deleteTags');

    // Categories

    Route::get('/admin-master/Categories', 'AdminCategorieController@CategoriesShow')->name('showCategories');

    Route::post('/admin-master/Categories/create', 'AdminCategorieController@CategoriesCreate')->name('createCategories');

    Route::get('/admin-master/Categories/validate/{id}', 'AdminCategorieController@CategoriesValidate')->name('validateCategories');

    Route::get('/admin-master/Categories/delete/{id}', 'AdminCategorieController@CategoriesDelete')->name('deleteCategories');

    // All blogs of Auth::user

    Route::get('/admin-master/articles/all', 'AdminUserController@ArticleSeeAll')->name('ArticleSeeAll');

    Route::get('/admin-master/articles/toValidate', 'AdminUserController@ArticleToValidateShow')->name('articlesToValidate');

    Route::get('/admin-master/articles/validateArticle/{id}', 'AdminUserController@validateArticle')->name('validateArticle');

    // All comments

    Route::get('/admin-master/comments/toValidate', 'AdminUserController@CommentToValidateShow')->name('CommentsToValidate');

    Route::get('/admin-master/comments/validateArticle/{id}', 'AdminUserController@validateComment')->name('validateComment');

    // Admin comments

    Route::post('/admin-master/comment{id}', 'IndexController@adminCommentAdd')->name('writeCommentOnAdminAllArticle');
});

