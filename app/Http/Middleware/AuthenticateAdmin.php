<?php

namespace App\Http\Middleware;

use Closure;

class AuthenticateAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$guard='')
    {
        if (!\Auth::user()->user_type_id==2) {
            return response()->view('errors.403', [], 403);
        } else {
            return  $next($request);
        }
    }
}
