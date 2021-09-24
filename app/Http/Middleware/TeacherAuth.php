<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TeacherAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!session('user')->role === 'Teacher') {
            $request->session()->put('msg', 'Sorry, you are not allowed access this specific route');
            return redirect()->route('login-view');
        }
        return $next($request);
    }
}
