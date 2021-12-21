<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class admin
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
		if(Auth::check()){
        if ( $request->user()->type == 1) {
            return $next($request);
        } else {
         
			 return redirect("/error/401");
        }
		}
		else
			return route('login');
    }
}
