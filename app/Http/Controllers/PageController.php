<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function index()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        }
        return view('index');
    }

    public function login()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        }
        return view('auth.login');
    }

    public function signup()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        }
        return view('auth.signup');
    }

    public function dashboard()
    {
        if (!Auth::check()) {
            return redirect('/');
        }

        return view('dashboard');
    }

    
}
