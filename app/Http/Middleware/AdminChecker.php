<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminChecker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::check($request)) {

            return redirect()->route('login');
        }

        //role 1=admin
        if (Auth::user()->role_id === 1) {
            return $next($request);
        }

        //role 1= client
        if (Auth::user()->role_id === 2) {
            return redirect()->route('client.home');
        }

        //role 2 = user
        if (Auth::user()->role_id === 3) {
            return redirect()->route('user.home');
        }
    }
}
