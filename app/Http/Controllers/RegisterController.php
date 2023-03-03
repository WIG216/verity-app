<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    //show register/create form
    public function create()
    {
        return view('session.register');
    }

    //create new user
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6',
            't&c' => 'required',
        ]);


        //Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        session()->flash('success', 'Your account has been created.');
        // create user
        $user = User::create($formFields);

        //login
        auth()->login($user);

        return redirect('/login')->with('message', 'User created successfully and loggin');
    }
}
