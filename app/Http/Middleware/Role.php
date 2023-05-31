<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        $explode = explode('|', $role);

        foreach ($explode as $key => $value) {
            if ($request->user()->role->name == $value) {
                return $next($request);
            }
        }

        return abort(403, 'Unauthorized action');



        // if ($request->user()->role->name != $role) {
        //     return abort(403, 'Unauthorized action');
        // }

        // return $next($request);
    }
}
