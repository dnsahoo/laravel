<?php

namespace App\Http\Middleware;

use Closure;

class checkdns
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
        echo '<pre>';
        print_r($request);
        //print_r($next);
        return $next($request);
    }
}
