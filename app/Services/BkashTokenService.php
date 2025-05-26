<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class BkashTokenService
{
    public function getToken()
    {
        // Cache token for 55 minutes
        if (Cache::has('bkash_token')) {
            return Cache::get('bkash_token');
        }

        $response = Http::withHeaders([
            'username' => config('bkash.username'),
            'password' => config('bkash.password'),
        ])->post(config('bkash.base_url') . '/tokenized/checkout/token/grant', [
            'app_key' => config('bkash.app_key'),
            'app_secret' => config('bkash.app_secret'),
        ]);

        $token = $response->json('id_token');
        Cache::put('bkash_token', $token, now()->addMinutes(55));

        return $token;
    }
}
