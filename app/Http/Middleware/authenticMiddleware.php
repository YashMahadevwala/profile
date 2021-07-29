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
        if (!session('fullname') && !session('uid') && ($request->path == 'profile')) {
            return redirect('login');
        }
        return $next($request);
    }
}