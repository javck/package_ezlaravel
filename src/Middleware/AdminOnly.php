<?php

namespace Javck\Easyweb2\Middleware;

use Closure;
use Request;
use Auth;

class AdminOnly
{
    /**
     * 只有管理者能進入該頁面
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->role->name != 'admin' && Auth::user()->role->name != 'super') {
            return redirect('/');
        }
        return $next($request);
    }
}
