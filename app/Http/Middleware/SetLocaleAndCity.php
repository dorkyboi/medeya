<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\URL;

class SetLocaleAndCity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        $route = $request->route();

        $city = $route->parameter('city');
        $locale = $route->parameter('locale');

        if (!$city || !$locale)
            abort(404);

        $city = $city ?: config('app.fallback_city');
        $locale = $locale ?: config('app.fallback_locale');

        if (!in_array($city, config('app.cities')) || !in_array($locale, config('app.locales')))
            abort(404);

        app()->setLocale($locale);
        setCity($city);

        /*URL::defaults([
            'locale' => $locale,
            'city' => $city,
        ]);*/

//        $route->forgetParameter('locale');
//        $route->forgetParameter('city');

        return $next($request);
    }
}
