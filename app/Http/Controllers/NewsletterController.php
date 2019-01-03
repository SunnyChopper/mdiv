<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Newsletter;

class NewsletterController extends Controller
{
    public function general(Request $data) {
    	// Subscribe to general newsletter
    	Newsletter::subscribe($data->email, ['FNAME' => $data->first_name, 'LNAME' => $data->last_name]);

    	// Redirect to thank you page
    	return redirect(url('/newsletter/thank-you'));
    }

    public function thank_you() {
    	// Dynamic page elements
    	$page_header = "Thank You";
    	$page_title = "Thank You";

    	// Return view
    	return view('pages.newsletter-thank-you')->with('page_title', $page_title)->with('page_header', $page_header);
    }
}
