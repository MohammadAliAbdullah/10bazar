<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use App\Services\BkashPaymentService;

class BkashPaymentController extends Controller
{
    protected $bkash;

    public function __construct(BkashPaymentService $bkash)
    {
        $this->bkash = $bkash;
    }

    public function grantToken()
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

    public function create(Request $request)
    {
        // Step 1: Ensure token
        if (!session()->has('bkash_token')) {
            $this->grantToken();
        }

        $token = session('bkash_token');

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'authorization' => $token,
            'X-APP-Key' => env('BKASH_APP_KEY'),
        ])->asJson()->post(env('BKASH_CREATE_PAYMENT_URL'), [
            'mode' => '0011',
            'payerReference' => 'user001',
            'callbackURL' => env('BKASH_CALLBACK_URL'),
            'amount' => $request->amount,
            'currency' => 'BDT',
            'intent' => 'sale',
            'merchantInvoiceNumber' => uniqid('inv'),
        ]);

        if ($response->successful()) {
            return response()->json([
                'bkashURL' => $response->json()['bkashURL']
            ]);
        }

        return response()->json([
            'error' => 'Payment creation failed',
            'debug' => $response->body(),
        ], 400);
    }




    public function execute(Request $request)
    {
        $payment = $this->bkash->executePayment($request->paymentID);

        return response()->json($payment);
    }
}
