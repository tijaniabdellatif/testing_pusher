<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check() && Auth::user()->role_id == 1) {
            $request->session()->flash('status', 'welcome to you dashboard');
            return redirect()->route('admin.home');
        } elseif (Auth::guard($guard)->check() && Auth::user()->role_id == 2) {
            $request->session()->flash('status', 'welcome to you dashboard');
            return redirect()->route('client.home');
        } elseif (Auth::guard($guard)->check() && Auth::user()->role_id == 3) {
            $request->session()->flash('status', 'welcome to your dashboard');
            return redirect()->route('user.home');
        } else {
            return $next($request);
        }
    }
}
