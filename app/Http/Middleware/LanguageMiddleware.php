<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageMiddleware
{
    public function handle($request, Closure $next)
    {
        $locale = Session::get('locale', config('app.locale'));
        App::setLocale($locale);
        return $next($request);
        // dd(App::setLocale(config('app.locale')));
        // if (Session::has('locale')) {
        //     App::setLocale(Session::get('locale'));
        // } else {
        //     App::setLocale(config('app.locale'));
        // }

        // return $next($request);
    }
}
