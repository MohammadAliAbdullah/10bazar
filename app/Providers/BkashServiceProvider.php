<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BkashServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('bkash', function () {
            return new \App\Services\BkashTokenService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
