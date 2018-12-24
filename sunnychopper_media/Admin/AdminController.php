<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Auth;
use Hash;
use Session;

class AdminController extends Controller
{

	/* Public functions */
    public function index() {
    	$page_header = "Admin Login";

    	// Redirect if needed
    	$redirect_code = $this->redirect_admin();
    	if ($redirect_code == 1) {
    		$this->login_admin();
    		return redirect(url('/admin/dashboard/'));
    	} elseif ($redirect_code == 2) {
    		return redirect(url('/members/dashboard/'));
    	}

    	return view('admin.login')->with('page_header', $page_header);
    }

    public function authenticate_user(Request $data) {
        // Get data
        $username = $data->username;
        $password = $data->password;

        // Get User object
        if (User::where('username', strtolower($username))->count() > 0) {
            $user = User::where('username', strtolower($username))->first();
            $hashed_pwd = Hash::make($password);
            $user_data = array(
                'username' => $username,
                'password' => $password
            ); 
            if (Auth::attempt($user_data)) {
                // Check for backend auth
                if ($user->backend_auth == 0) {
                    return redirect()->back()->with('admin_login_error', 'You are not authorized to access this area.');
                } else {
                    $this->login_user();
                    return redirect(url('/admin/dashboard'));
                }
            } else {
                return redirect()->back()->with('admin_login_error', 'Password is incorrect.');
            }
        } else {
            return redirect()->back()->with('admin_login_error', 'Username does not exist.');
        }
    }

    public function dashboard() {
        $page_header = "Admin Dashboard";

        return view('admin.dashboard')->with('page_header', $page_header);
    }

    /* Private functions */
    private function protect() {
        // Check to see if already logged in
        if (Session::has('admin_login')) {
            if (Session::get('admin_login') == false) {
                return redirect(url('/admin'));
            }
        } else {
            return redirect(url('/admin'));
        }
    }

    private function login_admin() {
        $user = Auth::user();
        $backend_auth = $user->backend_auth;

        Session::put('admin_login', true);
        Session::put('admin_switch', false);
        Session::put('backend_auth', $backend_auth);
        Session::save();
    }


    private function redirect_admin() {
        if (Auth::guest()) {
            return 0;
        } else {
            if (Auth::user()->backend_auth == 0) {
                return 2;
            } else {
                return 1;
            }
        }
    }
}
