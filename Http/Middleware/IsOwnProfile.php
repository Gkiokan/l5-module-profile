<?php

namespace Gkiokan\Profile\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsOwnProfile
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $var=null)
    {
        dd('Is this my own profile?' . $var);
        return $next($request);
    }
}
