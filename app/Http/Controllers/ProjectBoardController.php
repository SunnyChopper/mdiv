<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Custom\ProjectBoardHelper;
use App\Custom\UploadHelper;

use Carbon\Carbon;
use Auth;

class ProjectBoardController extends Controller
{
    public function create(Request $data) {
        // Get image and upload
        $image = $data->file('upload_image');
        $file_path = "boards/" . Auth::id() . "/" . Carbon::now()->toDateTimeString() . "." . $image->getClientOriginalExtension();
        $upload_helper = new UploadHelper();
        $featured_image_url = $upload_helper->upload_to_s3($image, $file_path);

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
    	return redirect(url('/members/project-board/my'));
    }

    public function update(Request $data) {
        // Redirect if post id tampered with
        $project_board_helper = new ProjectBoardHelper($data->post_id);
        $post = $project_board_helper->read();

        if (Auth::id() != $post->post_user_id) {
            return redirect(url('/members/project-board/view/' . $data->post_id));
        }

        // Get data and update
        $project_data = array(
            "post_id" => $data->post_id,
            "title" => $data->title,
            "description" => $data->description,
            "category" => $data->category
        );

        // Check if new image uploaded
        if ($data->hasFile('upload_image')) {
            $image = $data->file('upload_image');
            $file_path = "boards/" . Auth::id() . "/" . Carbon::now()->toDateTimeString() . "." . $image->getClientOriginalExtension();
            $upload_helper = new UploadHelper();
            $featured_image_url = $upload_helper->upload_to_s3($image, $file_path);
            $project_data["featured_image_url"] = $featured_image_url;
        } else {
            $project_data["featured_image_url"] = $post->featured_image_url;
        }
    	
        // Update
    	$project_board_helper->update($project_data);

    	// Return to member view
    	return redirect(url('/members/project-board/view/' . $data->post_id));
    }

    public function delete(Request $data) {
    	// Get ID and delete
    	$project_board_helper = new ProjectBoardHelper($data->board_id);
    	$project_board_helper->delete();

    	// Return to tool dashboard
    	return redirect(url('/members/project-board/my'));
    }

    public function view_boards() {
        $this->redirect_if_guest();

    	// Get posts
    	$project_board_helper = new ProjectBoardHelper();
    	$posts = $project_board_helper->get_all_with_pagination(24);

    	// Dynamic page elements
    	$page_header = "ProjectBoard";
    	$page_title = "ProjectBoard";

    	// Return view
    	return view('members.project-board.view')->with('page_header', $page_header)->with('page_title', $page_title)->with('posts', $posts);
    }

    public function view_post($post_id) {
        $this->redirect_if_guest();

    	// Get post
    	$project_board_helper = new ProjectBoardHelper($post_id);
    	$post = $project_board_helper->read();

    	// Dynamic page elements
    	$page_header = "View Post";
    	$page_title = $page_header;

    	// SEO Data
    	$seo_data = array(
    		"description" => strip_tags($post->description),
    		"image_url" => $post->featured_image_url
    	);

    	// Return view
    	return view('members.project-board.view-post')->with('page_title', $page_title)->with('page_header', $page_header)->with('post', $post);
    }

    public function my_posts() {
        $this->redirect_if_guest();

        // Get user posts
        $user_id = Auth::id();
        $project_board_helper = new ProjectBoardHelper();
        $posts = $project_board_helper->get_all_from_user($user_id);

        // Dynamic page elements
        $page_header = "My Project Boards";
        $page_title = $page_header;

        // Return view
        return view('members.project-board.view-my')->with('page_title', $page_title)->with('page_header', $page_header)->with('posts', $posts);
    }

    public function new_post() {
        $this->redirect_if_guest();

        // Dynamic page elements
        $page_header = "New Project";
        $page_title = $page_header;

        return view('members.project-board.new')->with('page_title', $page_title)->with('page_header', $page_header);
    }

    public function edit_post($post_id) {
        $this->redirect_if_guest();

        // Get post
        $project_board_helper = new ProjectBoardHelper($post_id);
        $post = $project_board_helper->read();

        // Redirect if not authorized
        if (Auth::id() != $post->post_user_id) {
            return redirect(url('/members/project-board/view/' . $post_id));
        }

        // Dynamic page features
        $page_header = "Edit Project";
        $page_title = $page_header;

        return view('members.project-board.edit')->with('page_title', $page_title)->with('page_header', $page_header)->with('post', $post);
    }

    /* Private functions */
    private function redirect_if_guest() {
        if (Auth::guest()) {
            redirect(url('/login'));
        }
    }
}
