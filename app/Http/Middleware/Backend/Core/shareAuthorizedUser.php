<?php

namespace App\Http\Middleware\Backend\Core;

use Closure;
use Illuminate\Support\Facades\Auth;

class shareAuthorizedUser
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
        view()->share('user', Auth::user());

        return $next($request);
    }
}
