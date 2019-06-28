<?php

namespace Javck\Easyweb2\Middleware;

use Closure;
use Request;

class ForceSSL
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
        // Getting production To avoid local uri.
        if (Request::server('HTTP_X_FORWARDED_PROTO') == 'http' && env('APP_ENV') == 'production' && env('FORCE_HTTPS') == true) {
            return redirect()->secure($request->getRequestUri());
        }
        return $next($request);
    }
}
