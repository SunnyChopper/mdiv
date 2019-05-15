<?php

namespace App\Custom;

use App\BookTipsBook;
use App\BookTipsDocument;
use App\BookTipsQuestion;

class BookTipsHelper {

	public static function getAllBooks() {
		return BookTipsBook::where('is_active', 1)->get();
	}

	public static function getCurrentBook() {
		return BookTipsBook::where('is_active', 1)->whereDate('start_date', '<' , Carbon::now())->whereDate('end_date', '>', Carbon::now())->get();
	}

	public static function getOpenQuestions() {
		return BookTipsQuestion::where('status', 1)->get();
	}

	public static function getQuestionsForUser($user_id) {
		return BookTipsQuestion::where('user_id', $user_id)->get();
	}

	public static function getOpenQuestionsForUser($user_id) {
		return BookTipsQuestion::where('user_id', $user_id)->where('status', 1)->get();
	}

	public static function getDocumentsForBook($book_id) {
		return BookTipsDocument::where('book_id', $book_id)->where('status', 1)->get();
	}	

}

?>