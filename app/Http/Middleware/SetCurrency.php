<?php

namespace App\Http\Middleware;

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
        $currency_id = session('currency_id', 1); // Default: BDT (id = 1)
        $currency = Currency::find($currency_id);

        if ($currency) {
            config(['app.currency' => $currency]);
        }

        return $next($request);
    }
}
