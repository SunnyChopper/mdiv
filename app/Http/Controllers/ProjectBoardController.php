<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Custom\ProjectBoardHelper;

class ProjectBoardController extends Controller
{
    public function create(Request $data) {
    	// Get data and create
    	$project_data = array(
    		"title" => $data->title,
    		"description" => $data->description,
    		"category" => $data->category,
    		"featured_image_url" => $featured_image_url
    	);
    	$project_board_helper = new ProjectBoardHelper();
    	$project_id = $project_board_helper->create($project_data);

    	// Return to tool dashboard
    	return redirect(url('/members/project-board/dashboard'));
    }

    public function update(Request $data) {
    	// Get data and update
    	$project_data = array(
    		"post_id" => $data->post_id,
    		"title" => $data->title,
    		"description" => $data->description,
    		"category" => $data->category,
    		"featured_image_url" => $featured_image_url
    	);
    	$project_board_helper = new ProjectBoardHelper();
    	$project_board_helper->update($project_data);

    	// Return to member view
    	return redirect(url('/members/project-board/view/' . $data->post_id));
    }

    public function delete(Request $data) {
    	// Get ID and delete
    	$project_board_helper = new ProjectBoardHelper($data->post_id);
    	$project_board_helper->delete();

    	// Return to tool dashboard
    	return redirect(url('/members/project-board/dashboard'));
    }

    public function view_boards() {
    	// Get posts
    	$project_board_helper = new ProjectBoardHelper();
    	$posts = $project_board_helper->get_all_with_pagination(25);

    	// Dynamic page elements
    	$page_header = "ProjectBoard";
    	$page_title = "ProjectBoard";

    	// Return view
    	return view('pages.view-boards')->with('page_header', $page_header)->with('page_title', $page_title)->with('posts', $posts);
    }

    public function view_post($post_id) {
    	// Get post
    	$project_board_helper = new ProjectBoardHelper($post_id);
    	$post = $project_board_helper->read();

    	// Dynamic page elements
    	$page_header = $post->title;
    	$page_title = $page_header;

    	// SEO Data
    	$seo_data = array(
    		"description" => strip_tags($post->description),
    		"image_url" => $post->featured_image_url
    	);

    	// Return view
    	return view('pages.view-project-board-post')->with('seo_data', $seo_data)->with('page_title', $page_title)->with('page_header', $page_header)->with('post', $post);
    }
}
