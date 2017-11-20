<?php

namespace App\Http\Middleware;

use Closure;

class AdminRules
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = '')
    {

        $code = \Auth::user()->type->code;
        $configs = config("adminRules.types.$code");
        $route = request()->route();
        $page=$route->getParameter('table');
        $collectConfigs= collect($configs)->filter(function ($v) use ($page) {
            return preg_match("/$page/", $v);
        });
            if (!$collectConfigs->count()) {
                return response()->view('errors.403', [], 403);
            } else {
                return $next($request);
            }
    }
}
