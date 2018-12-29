<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Custom\BlogPostHelper;

use Mail;

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

    public function contact() {
    	// Dynamic page features
    	$page_title = "Contact";
    	$page_header = "Contact";

    	return view('pages.contact')->with('page_title', $page_title)->with('page_header', $page_header);
    }

    public function submit_contact(Request $data) {
    	$to_name = "New Age Startup";
    	$to_mail = env('MAIL_USERNAME');

    	$data = array('name' => $data->name, 'email' => $data->email, 'category' => $data->category, 'body' => $data->message);

    	Mail::send('emails.contact-email', $data, function($message) use ($to_name, $to_mail) {
    		$message->to($to_mail, $to_name);
    		$message->from(env('MAIL_USERNAME'), $to_name);
    		$message->subject('🚨 New Contact Form Submission 🚨');
    	});

    	return redirect()->back()->with('success', 'Successfully submitted.');
    }
}
