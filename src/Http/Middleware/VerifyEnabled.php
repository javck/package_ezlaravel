<?php

namespace Javck\Ezlaravel\Http\Middleware;

use Closure;
use Auth;


class VerifyEnabled
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
        if(Auth::user() && Auth::user()->enabled == false){
            return redirect('/');
        }
        return $next($request);
    }
}
