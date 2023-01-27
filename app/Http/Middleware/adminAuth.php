<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next){
        $isAuthenticatedAdmin = (Auth::user() && Auth::user()->role==1);
        if (!$isAuthenticatedAdmin){
            return redirect()->route('admin_login')->with('message', 'Authentication Error.');
        }
        return $next($request);
    }
}
