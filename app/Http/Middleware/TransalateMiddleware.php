<?php

namespace App\Http\Middleware;

use Closure;

use Session;

class TransalateMiddleware
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
        if(Session::has('local')){
            \App::setlocale( Session::get('local'));
        }
        return $next($request);
    }
}
