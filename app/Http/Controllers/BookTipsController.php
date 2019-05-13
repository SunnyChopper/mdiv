<?php

namespace App\Http\Controllers;

use Auth;
use App\BookTipsBook;
use App\BookTipsDocument;
use App\BookTipsQuestion;
use Illuminate\Http\Request;

class BookTipsController extends Controller
{
    public function create_book_tips_book(Request $data) {
    	$book = new BookTipsBook;
    	$book->title = $data->title;
    	$book->description = $data->description;
    	$book->image_url = $data->image_url;
    	$book->save();

    	return redirect(url('/admin/book-tips'));
    }

    public function read_book_tips_book($book_id) {
    	$book = BookTipsBook::find($book_id);
    	$page_title = $book->title;
    	$page_header = $page_title;
    	return view('members.book-tips.view-book')->with('page_title', $page_title)->with('page_header', $page_header)->with('book', $book);
    }

    public function update_book_tips_book(Request $data) {
    	$book = BookTipsBook::find($data->book_id);
    	$book->title = $data->title;
    	$book->description = $data->description;
    	$book->image_url = $data->image_url;
    	$book->save();

    	return redirect(url('/admin/book-tips'));
    }

    public function delete_book_tips_book(Request $data) {
    	$book = BookTipsBook::find($data->book_id);
    	$book->is_active = 0;
    	$book->save();

    	return redirect(url('/admin/book-tips'));
    }

    public function create_book_tips_question(Request $data) {
    	$question = new BookTipsQuestion;
    	$question->book_id = $data->book_id;
    	$question->user_id = Auth::id();
    	$question->title = $data->title;
    	$question->description = $data->description;
    	$question->save();

    	return redirect(url('/members/book-tips/questions'));
    }

    public function read_book_tips_question($question_id) {
    	$question = BookTipsQuestion::find($question_id);
    	$page_title = $question->title;
    	$page_header = $page_title;
    	return view('members.book-tips.view-question')->with('page_title', $page_title)->with('page_header', $page_header)->with('question'. $question);
    }

    public function update_book_tips_question(Request $data) {
    	$question = BookTipsQuestion::find($data->question_id);

    	if (isset($data->answer)) {
    		$question->answer = $data->answer;
    		// TODO: Send email to update
    		return redirect(url('/admin/book-tips/questions'));
    	} else {
	    	$question->title = $data->title;
	    	$question->description = $data->description;
	    	$question->save();

	    	return redirect(url('/members/book-tips/questions'));
    	}
    }

    public function delete_book_tips_question(Request $data) {
    	$question = BookTipsQuestion::find($data->question_id);
    	$question->is_active = 0;
    	$question->save();

    	return redirect()->back();
    }

    public function create_book_tips_document(Request $data) {
    	$doc = new BookTipsDocument;
    	$doc->book_id = $data->book_id;
    	$doc->title = $data->title;
    	$doc->description = $data->description;
    	$doc->url = $data->url;
    	$doc->save();

    	return redirect(url('/admin/book-tips/documents'));
    }

    public function read_book_tips_document($doc_id) {
    	$doc = BookTipsDocument::find($doc_id);
    	$page_title = $doc->title;
    	$page_header = $page_title;
    	return view('members.book-tips.view-document')->with('document', $doc)->with('page_title', $page_title)->with('page_header', $page_header);
    }

    public function update_book_tips_document(Request $data) {
    	$doc = BookTipsDocument::find($data->doc_id);
    	$doc->book_id = $data->book_id;
    	$doc->title = $data->title;
    	$doc->description = $data->description;
    	$doc->url = $data->url;
    	$doc->save();

    	return redirect(url('/admin/book-tips/documents'));
    }

    public function delete_book_tips_document(Request $data) {
    	$doc = BookTipsDocument::find($data->doc_id);
    	$doc->status = 0;
    	$doc->save();

    	return redirect(url('/admin/book-tips/documents'));
    }
}
