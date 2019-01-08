<?php

namespace App\Custom;

use App\ProjectBoard;

use Auth;

class ProjectBoardHelper {
	/* Private global variables */
	private $id;

	/* Constructor */
	public function __construct($id = 0) {
		$this->id = $id;
	}

	/* Public functions */
	public function create($data) {
		// Get data and save
		$project_board = new ProjectBoard;
		$project_board->post_user_id = Auth::id();
		$project_board->title = $data["title"];
		$project_board->description = $data["description"];
		$project_board->category = $data["category"];
		$project_board->featured_image_url = $data["featured_image_url"];
		$project_board->save();

		// Return the ID of the post
		return $project_board->id;
	}

	public function read($id = 0) {
		// Check to see if no ID passed in
		if ($id == 0) {
			$id = $this->id;
		}

		// Update the project board object
		$project_board = ProjectBoard::find($id);
		$project_board->views = $project_board->views + 1;
		$project_board->save();

		// Return object
		return $project_board;
	}

	public function update($data) {
		// Get data and update
		$project_board = ProjectBoard::find($data["post_id"]);
		$project_board->title = $data["title"];
		$project_board->description = $data["description"];
		$project_board->category = $data["category"];
		$project_board->featured_image_url = $data["featured_image_url"];
		$project_board->save();
	}

	public function delete($id = 0) {
		// Check to see if no ID passed in
		if ($id == 0) {
			$id = $this->id;
		}

		// Delete
		$project_board = ProjectBoard::find($id);
		$project_board->is_active = 0;
		$project_board->save();
	}

	public function get_all() {
		return ProjectBoard::where('is_active', 1)->orderBy('created_at', 'DESC')->get();
	}

	public function get_all_with_pagination($pagination) {
		return ProjectBoard::where('is_active', 1)->orderBy('created_at', 'DESC')->paginate($pagination);
	}

	public function get_all_from_user($user_id) {
		return ProjectBoard::where('post_user_id', $user_id)->where('is_active', 1)->orderBy('created_at', 'DESC')->get();
	}
}