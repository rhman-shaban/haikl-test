<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class IpMiddleware
{
    public $Ips = User::pluck('ip')->toarray();

    public function handle(Request $request, Closure $next)
    {
        if (in_array($request->ip(), $this->Ips)) {
            return route('login');
        }

        return route('login');
    }
}