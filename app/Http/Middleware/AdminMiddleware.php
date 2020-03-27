<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class AdminMiddleware
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
        if(Auth::user()->usertype == 'admin')
        {
            return $next($request);
        }
        else{
            return redirect('/home')->with('status','You are not allowed to Admin Dashboard!');
        }
        
    }
}
