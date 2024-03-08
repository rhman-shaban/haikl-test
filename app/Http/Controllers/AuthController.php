<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class AuthController extends BaseController
{


    public function login_post(LoginRequest $request)
    {
        if (Auth::attempt($request->only(['email', 'password']))) {
            $request->session()->regenerate();
            $user = Auth::user();
            $user->access_token = $request->_token;

            $response = Http::post('http://anouther-web-site.test/api/login', [
                'email' => "ab.abou.abda@gmail.com",
                'password' => "password",
            ]);
    
            $data = $response->json();
            if($data){
                session(['token' => $data]);
            }
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