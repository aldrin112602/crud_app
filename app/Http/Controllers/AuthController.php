<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //

    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        
        if (auth()->attempt($credentials)) {
            return redirect()->intended('dashboard');
        }

        return back()->withInput()->withErrors(['error' => 'Invalid login credentials. Please try again!']);
    }
}
