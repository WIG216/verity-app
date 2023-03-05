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
            'name' => 'required',
            'password' => 'required'
        ]);


        if(auth()->attempt($formFields, 'remember')){
            $request -> session()->regenerate();

            return redirect('/dashboard')->with(['success'=>'You are logged in.']);
        }

        return back()->withErrors(['name' => 'Invalid Credentials'])->onlyInput('name');
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
