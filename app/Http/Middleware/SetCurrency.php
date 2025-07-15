<?php

namespace App\Http\Middleware;

use App\Models\AppSetting;
use App\Models\Currency;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetCurrency
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
        // default currency
        $default_currency_id = AppSetting::first()->currency_id;
        $currency_id = session('currency_id', $default_currency_id); // Default: BDT (id = 1)
        $currency = Currency::find($currency_id);

        if ($currency) {
            config(['app.currency' => $currency]);
        }

        return $next($request);
    }
}
