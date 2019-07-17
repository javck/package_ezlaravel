<?php

namespace Javck\Easyweb2\Http\Middleware;

use Closure;
use Auth;

class RoleCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if(Auth::guard($guard)->check() && !isset(Auth::user()->role)){
            if($request->route()->getName() != 'voyager.logout'){
                abort(404);
            }
        }
        return $next($request);
    }
}
