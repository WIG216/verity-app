<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    // show login form
    public function login(Request $request)
    {
        return view('session.login-session');
    }

    // authentication user
    public function authentication(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);


        if(auth()->attempt($formFields, 'remember')){
            $request -> session()->regenerate();

            return redirect('dashboard')->with(['success'=>'You are logged in.']);
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

     // logout user
     public function logout(Request $request)
     {
         auth()->logout();

         $request->session()->invalidate();
         $request->session()->regenerateToken();

         return redirect('/login')->with('message', 'You have been logged out');
     }
}
