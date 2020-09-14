<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminSetLocale
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
        if (!session('locale'))
            session('locale', config('app.locale'));
        else
            app()->setLocale(session('locale'));

        return $next($request);
    }
}
