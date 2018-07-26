<?php

namespace App\Http\Middleware;

use Closure;
Use Auth;

class HR
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

        $user = Auth::user();

            if ($user->isAdmin()) {
                return $next($request);
            }

            return redirect('/payroll');
    }
}
