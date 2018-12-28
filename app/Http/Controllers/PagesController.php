<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Custom\BlogPostHelper;

class PagesController extends Controller
{
    public function index() {
    	// Dynamic page features
    	$page_title = "Home";

    	// Get posts
    	$post_helper = new BlogPostHelper();
    	$posts = $post_helper->get_all();

    	return view('pages.index')->with('page_title', $page_title)->with('posts', $posts);
    }
}
