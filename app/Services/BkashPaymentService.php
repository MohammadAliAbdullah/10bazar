<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class BkashPaymentService
{
    protected $baseUrl;
    protected $appKey;
    protected $appSecret;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->baseUrl = config('bkash.grant_token_url');
        $this->appKey = config('bkash.app_key');
        $this->appSecret = config('bkash.app_secret');
        $this->username = config('bkash.username');
        $this->password = config('bkash.password');
    }

    public function getToken()
    {
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'username' => env('BKASH_USERNAME'),
            'password' => env('BKASH_PASSWORD'),
            'X-APP-Key' => env('BKASH_APP_KEY'),
        ])->post(env('BKASH_GRANT_TOKEN_URL'), [
            'app_key' => env('BKASH_APP_KEY'),
            'app_secret' => env('BKASH_APP_SECRET'),
        ]);

        if ($response->successful()) {
            $data = $response->json();

            // Store token in session
            session([
                'bkash_token' => $data['id_token'],
                'bkash_refresh_token' => $data['refresh_token'],
            ]);

            return $data;
        } else {
            return response()->json(['error' => 'Token generation failed', 'debug' => $response->body()], 500);
        }
    }

    public function createPayment($amount, $invoice)
    {
        $token = $this->getToken();

        $headers = [
            'Content-Type: application/json',
            'authorization: ' . $token,
            'x-app-key: ' . config('bkash.bkash_app_key'),
        ];

        $payload = json_encode([
            'mode'                  => '0011',
            'payerReference'        => 'user001',
            'callbackURL'           => config('bkash.bkash_callback_url'),
            'amount'                => $amount,
            'currency'              => 'BDT',
            'intent'                => 'sale',
            'merchantInvoiceNumber' => $invoice,
        ]);

        $ch = curl_init(config('bkash.create_payment_url'));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }


    public function createPaymentdd($amount, $invoice)
    {
        $token = $this->getToken();

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => $token,
            'X-APP-Key' => $this->appKey,
        ])->post(config('bkash.create_payment_url'), [
            'mode' => '0011',
            'amount' => $amount,
            'currency' => 'BDT',
            'intent' => 'sale',
            'merchantInvoiceNumber' => $invoice,
            'callbackURL' => config('bkash.callback_url'),
        ]);

        return $response->json();
    }

    public function executePayment($paymentID)
    {
        $token = $this->getToken();

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => $token,
            'X-APP-Key' => $this->appKey,
        ])->post(config('bkash.execute_payment_url') . '/' . $paymentID);

        return $response->json();
    }

    public function paymentStatus($paymentID)
    {
        $token = $this->getToken();

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => $token,
            'X-APP-Key' => $this->appKey,
        ])->get(config('bkash.payment_status_url') . '/' . $paymentID);

        return $response->json();
    }
}
