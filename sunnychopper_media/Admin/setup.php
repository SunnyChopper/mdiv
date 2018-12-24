<?php

	if (!file_exists('../app/User.php')) {
		echo "Please first install basic user functionality by running 'php artisan make:auth'\n";
		exit;
	}

	require('../vendor/laravel/framework/src/Illuminate/Support/Facades/Facade.php');
	require('../vendor/laravel/framework/src/Illuminate/Support/Facades/Schema.php');
	require('../vendor/laravel/framework/src/Illuminate/Support/Traits/Macroable.php');
	require('../vendor/laravel/framework/src/Illuminate/Database/Schema/Blueprint.php');

	// Create routes
	$routes = fopen('../routes/web.php', 'a');
	$route_array = array(
		"Route::get('/admin', 'AdminController@index');",
		"Route::post('/admin/login', 'AdminController@authenticate_user');",
		"Route::get('/admin/dashboard', 'AdminController@dashboard');"
	);
	foreach($route_array as $route) {
		fwrite($routes, $route . "\n");
	}
	fclose($routes);

	// Create controller by copying over
	copy(dirname(__FILE__) . '/AdminController.php', '../app/Http/Controllers/AdminController.php');

	// Create view folder if does not exist
	$dir = "../resources/views/admin";
	if (!file_exists($dir) && !is_dir($dir)) {
	    mkdir($dir);
	}

	// Create views
	copy(dirname(__FILE__) . '/views/login.blade.php', $dir . "/login.blade.php");
	copy(dirname(__FILE__) . '/views/dashboard.blade.php', $dir . "/dashboard.blade.php");

	// Create table
	copy(dirname(__FILE__) . '/2018_12_24_103740_update_users_table_add_admin.php', '../database/migrations/2018_12_24_103740_update_users_table_add_admin.php');

?>