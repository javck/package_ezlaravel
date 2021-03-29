<?php

namespace Javck\Ezlaravel\Http\Middleware;

use Closure;
use Request;
use URL;

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
        if (config('app.env') == 'production' && config('ezlaravel.force_https') == true) {
            URL::forceScheme('https');
        }
        return $next($request);
    }
}
