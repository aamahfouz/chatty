<?php

namespace Chatty\Http\Controllers;

use Chatty\Models\User;
use Illuminate\Http\Request ;

class AuthController extends Controller {

    public function getSignup() {
         return view ('auth.signup');
    }

	public function postSignup(Request $request) {
    	$this->validate($request, [
    		'email' => 'required|unique:users|email|max:255',
    		'username' => 'required|unique:users|alpha_dash|max:25',
    		'password' => 'required|min:6',
    		]);

    	User::create([
            'email'=> $request->input('email'),
            'username'=> $request->input('username'),
            'password' =>bcrypt($request->input('password')),
            ]);

        return redirect()
                ->route('home')
                ->with('info','Your account has been created and you can now sign in');
    }

    public function getSignin()
    {
        return view ('auth.signin');
    }

    public function postSignin(Request $request)
    {       
        $this->validate($request, [
            'email' => 'required',
             'password' => 'required'
             ]);

        dd('all ok');

    }
}
