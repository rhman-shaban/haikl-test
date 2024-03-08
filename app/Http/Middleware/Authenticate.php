<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class Authenticate
{

    public function handle(Request $request, Closure $next)
    {
        $Ips = User::pluck('ip')->toarray();

        if (in_array($request->ip(),$Ips)) {
            return $next($request);
        }else{
            return redirect('login')->withErrors([
                'email' => 'please login with the same network.',
            ])->onlyInput('email');;
        }
    }
}


