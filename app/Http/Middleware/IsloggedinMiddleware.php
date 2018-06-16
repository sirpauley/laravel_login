<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class IsloggedinMiddleware
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
      if(empty(Auth::user()->username)){
        return redirect()->route('login');
      }else{
        return $next($request);
      }
    }//handle
}
