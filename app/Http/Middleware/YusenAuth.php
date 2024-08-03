<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class YusenAuth
{
    /**
     * Handle an incoming request for an Admin route - throw '403 Forbidden' if user does not have role of Admin
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(\Auth::user()->hasRole('Yusen Staff')) {
            return $next($request);
        } else {
            return abort(403);
        }
    }
}
