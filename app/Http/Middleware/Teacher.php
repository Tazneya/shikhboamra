<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Teacher
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
            if(auth()->user()){
            if(auth()->user()->role=='Teacher')
            return $next($request);
            }
            else
            return redirect()->to('login');
    }
}
