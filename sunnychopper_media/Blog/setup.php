<?php
	if (!file_exists('../app/Http/Controllers/AdminController.php')) {
		echo "Please first install the Admin dependency.\n";
		exit;
	}

	require('../vendor/laravel/framework/src/Illuminate/Support/Facades/Facade.php');
	require('../vendor/laravel/framework/src/Illuminate/Support/Facades/Schema.php');
	require('../vendor/laravel/framework/src/Illuminate/Support/Traits/Macroable.php');
	require('../vendor/laravel/framework/src/Illuminate/Database/Schema/Blueprint.php');

	// Create routes
	$routes = fopen('../routes/web.php', 'a');
	$route_array = array(
		"// Blog Post functions",
		"Route::get('/blog', 'BlogPostsController@blog');",
		"Route::get('/post/{post_id}/{slug}', 'BlogPostsController@read');",
		"Route::get('/admin/posts/view', 'BlogPostsController@view_blog_posts');",
		"Route::get('/admin/posts/edit/{post_id}', 'BlogPostsController@edit_blog_post');",
		"Route::get('/admin/posts/new', 'BlogPostsController@new_blog_post');",
		"Route::post('/admin/posts/create', 'BlogPostsController@create');",
		"Route::post('/admin/posts/update', 'BlogPostsController@update');",
		"Route::post('/admin/posts/delete', 'BlogPostsController@delete');"
	);
	foreach($route_array as $route) {
		fwrite($routes, $route . "\n");
	}
	fclose($routes);

	// Create controller by copying over
	copy(dirname(__FILE__) . '/BlogPostsController.php', '../app/Http/Controllers/BlogPostsController.php');

	// Create model by copying over
	copy(dirname(__FILE__) . '/BlogPost.php', '../app/BlogPost.php');

	// Create Custom folder if does not exist
	$dir = "../app/Custom";
	if (!file_exists($dir) && !is_dir($dir)) {
	    mkdir($dir);
	}

	// Create helper class
	copy(dirname(__FILE__) . '/BlogPostHelper.php', $dir . '/BlogPostHelper.php');

	// Create pages folder if does not exist
	$dir = "../resources/views/pages";
	if (!file_exists($dir) && !is_dir($dir)) {
	    mkdir($dir);
	}

	// Create public views
	copy(dirname(__FILE__) . '/views/blog.blade.php', $dir . "/blog.blade.php");
	copy(dirname(__FILE__) . '/views/view-post.blade.php', $dir . "/view-post.blade.php");

	// Create admin folder if does not exist
	$dir = "../resources/views/admin/posts";
	if (!file_exists($dir) && !is_dir($dir)) {
	    mkdir($dir);
	}

	// Create admin views
	copy(dirname(__FILE__) . '/views/view.blade.php', $dir . "/view.blade.php");
	copy(dirname(__FILE__) . '/views/edit.blade.php', $dir . "/edit.blade.php");	
	copy(dirname(__FILE__) . '/views/new.blade.php', $dir . "/new.blade.php");

	// Create modals folder if does not exist
	$dir = "../resources/views/admin/posts/modals";
	if (!file_exists($dir) && !is_dir($dir)) {
	    mkdir($dir);
	}

	// Create modals views
	copy(dirname(__FILE__) . '/views/delete.blade.php', $dir . "/delete.blade.php");

	// Create table
	copy(dirname(__FILE__) . '/2018_12_23_013501_create_blog_posts_table.php', '../database/migrations/2018_12_23_013501_create_blog_posts_table.php');

?>