<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class authenticMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!session() -> has('fullname') && ($request->path() == 'profile')){
            return redirect('login');
        }
        if(session() -> has('fullname') && (($request->path() == 'login') || ($request->path() == 'registration'))){
            return redirect('profile');
        }
        return $next($request);
    }
}
