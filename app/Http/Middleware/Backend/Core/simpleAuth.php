<?php

namespace App\Http\Middleware\Backend\Core;

use Closure;
use Illuminate\Support\Facades\Auth;

class simpleAuth
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
        Auth::loginUsingId(1);

        return $next($request);
    }
}
