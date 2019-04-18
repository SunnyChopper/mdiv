<?php

namespace App\Custom;

use App\PublicCourse;
use App\PublicCourseComment;
use App\PublicCourseEnrollment;
use App\PublicCourseForum;
use App\PublicCourseForumComment;
use App\PublicCourseVideo;

class PublicCourseHelper() {

	public function getVideosForCourse($course_id) {
		return PublicCourseVideo::where('course_id', $course_id)->get();
	}

	public function numberEnrolledInCourse($course_id) {
		return PublicCourseEnrollment::where('course_id', $course_id)->count();
	}

	public function getForumsForCourse($course_id) {
		return PublicCourseForum::where('course_id', $course_id)->get();
	}

	public function getCommentsForVideo($video_id) {
		return PublicCourseComment::where('video_id', $video_id)->get();
	}

	public function getCommentsForForum($forum_id) {
		return PublicCourseForumComment::where('forum_id', $forum_id)->get();
	}

	public function isUserEnrolledInCourse($course_id, $user_id) {
		if (PublicCourseEnrollment::where('course_id', $course_id)->where('user_id', $user_id)->count() > 0) {
			return true;
		} else {
			return false;
		}
	}

}

?>