<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class payroll
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
        if($user->isPayroll()){
            return $next($request);
        }
        return redirect('/user');

    }
}
