<?php

namespace App\Http\Middleware;

use Closure;


class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Haal de gebruiker uit de request
        if ($user = $request->user()) {

            // Check of deze is_admin op 1 heeft staan
            if ($user->is_admin === 1) {

                return $next($request);
            }
        }
        abort(403);
    }

}