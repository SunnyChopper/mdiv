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
Route::get('/admin/logout', 'AdminController@logout');

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
Route::get('/members/logout', 'MembersController@logout');

// Project board functions
Route::get('/members/project-board/view', 'ProjectBoardController@view_boards');
Route::get('/members/project-board/view/{post_id}', 'ProjectBoardController@view_post');
Route::get('/members/project-board/new', 'ProjectBoardController@new_post');
Route::post('/members/project-board/create', 'ProjectBoardController@create');
Route::get('/members/project-board/my', 'ProjectBoardController@my_posts');
Route::get('/members/project-board/edit/{post_id}', 'ProjectBoardController@edit_post');
Route::post('/members/project-board/update', 'ProjectBoardController@update');
Route::post('/members/project-board/delete', 'ProjectBoardController@delete');

// Public course functions
Route::get('/admin/public-courses/view', 'PublicCoursesController@view_all');
Route::get('/admin/public-courses/new', 'PublicCoursesController@new');
Route::post('/admin/public-courses/create', 'PublicCoursesController@create');
Route::get('/admin/public-courses/edit/{public_course_id}', 'PublicCoursesController@edit');
Route::post('/admin/public-courses/update', 'PublicCoursesController@update');
Route::post('/admin/public-courses/delete', 'PublicCoursesController@delete');
Route::get('/admin/public-courses/{public_course_id}/videos/view', 'PublicCourseVideosController@view_all');
Route::get('/admin/public-courses/{public_course_id}/videos/new', 'PublicCourseVideosController@new');
Route::post('/admin/public-courses/videos/create', 'PublicCourseVideosController@create');
Route::get('/admin/public-courses/{public_course_id}/videos/edit/{video_id}', 'PublicCourseVideosController@edit');
Route::post('/admin/public-courses/videos/update', 'PublicCourseVideosController@update');
Route::post('/admin/public-courses/videos/delete', 'PublicCourseVideosController@delete');
Route::get('/public-courses', 'PublicCoursesController@view_courses');
Route::get('/public-courses/{public_course_id}', 'PublicCoursesController@read');
Route::get('/public-courses/enroll/{public_course_id}', 'PublicCourseEnrollmentsController@create');
Route::get('/members/public-courses/view/{public_course_id}', 'PublicCoursesController@course_dashboard');
Route::get('/members/public-courses/video/{video_id}', 'PublicCourseVideosController@read');
Route::post('/members/public-courses/comment/create', 'PublicCourseVideoCommentsController@create');
Route::get('/members/public-courses/{public_course_id}/videos', 'PublicCoursesController@course_videos');
Route::get('/members/public-courses/{public_course_id}/forums/new', 'PublicCoursesController@new_forum');
Route::post('/members/public-courses/forums/create', 'PublicCourseForumsController@create');
Route::get('/members/public-courses/{public_course_id}/forums/{forum_id}', 'PublicCoursesController@view_forum');
Route::post('/members/public-courses/forums/comment/create', 'PublicCourseForumCommentsController@create');

Auth::routes();