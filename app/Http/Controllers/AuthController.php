<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class AuthController extends BaseController
{


    public function login_post(LoginRequest $request)
    {
        if (Auth::attempt($request->only(['email', 'password']))) {
            $request->session()->regenerate();
            $user = Auth::user();
            $user->ip = $request->ip();
            $user->save();
            return redirect('/');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    
    public function login()
    {
        return view('login');
    }

    public function welcome()
    {
        return view('welcome');
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/login'); // Redirect the user to the login page after logout
    }
}