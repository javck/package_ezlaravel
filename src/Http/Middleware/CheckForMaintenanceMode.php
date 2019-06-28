<?php

namespace Javck\Easyweb2\Http\Middleware;

use Closure;
use Request;
class CheckForMaintenanceMode
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
        if (env('APP_DEBUG') == true && env('APP_ENV') == 'production' && !in_array($request->getClientIp(), explode(',',env('DEBUG_IP'))))
        {
            
            //return redirect(url('maintenance-page'));
            return response()->view('maintenance');
        }

        return $next($request);
    }
}
