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

// Public pages
Route::get('/', 'PagesController@index');
Route::get('/contact', 'PagesController@contact');
Route::post('/contact/submit', 'PagesController@submit_contact');
Route::get('/profile/{user_id}', 'PagesController@profile');

// Newsletter
Route::post('/newsletter/general/signup', 'NewsletterController@general');
Route::get('/newsletter/thank-you', 'NewsletterController@thank_you');

// Admin backend functions
Route::get('/admin', 'AdminController@index');
Route::post('/admin/login', 'AdminController@authenticate_user');
Route::get('/admin/dashboard', 'AdminController@dashboard');
Route::get('/admin', 'AdminController@index');
Route::post('/admin/login', 'AdminController@authenticate_user');
Route::get('/admin/dashboard', 'AdminController@dashboard');

// Blog Post functions
Route::get('/blog', 'BlogPostsController@blog');
Route::get('/post/{post_id}/{slug}', 'BlogPostsController@read');
Route::get('/admin/posts/view', 'BlogPostsController@view_blog_posts');
Route::get('/admin/posts/edit/{post_id}', 'BlogPostsController@edit_blog_post');
Route::get('/admin/posts/new', 'BlogPostsController@new_blog_post');
Route::post('/admin/posts/create', 'BlogPostsController@create');
Route::post('/admin/posts/update', 'BlogPostsController@update');
Route::post('/admin/posts/delete', 'BlogPostsController@delete');

// Member functions
Route::get('/profile/edit/{user_id}', 'MembersController@edit_profile');
Route::post('/profile/update', 'MembersController@update_profile');
Route::get('/members/dashboard/', 'MembersController@dashboard');

// Project board functions
Route::get('/members/project-board/view', 'ProjectBoardController@view_boards');
Route::get('/members/project-board/view/{post_id}', 'ProjectBoardController@view_post');
Route::get('/members/project-board/new', 'ProjectBoardController@new_post');
Route::post('/members/project-board/create', 'ProjectBoardController@create');
Route::get('/members/project-board/my', 'ProjectBoardController@my_posts');
Route::get('/members/project-board/edit/{post_id}', 'ProjectBoardController@edit_post');
Route::post('/members/project-board/update', 'ProjectBoardController@update');

Auth::routes();