<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class BkashPaymentController extends Controller
{
    public function showForm()
    {
        return view('bkash-payment');
    }
    public function createPayment_dd(Request $request)
    {
        // Step 1: Get token
        $tokenResponse = Http::withHeaders([
            'Content-Type' => 'application/json',
            'username'     => config('bkash.username'),
            'password'     => config('bkash.password'),
        ])->post(config('bkash.grant_token_url'), [
            'app_key'    => config('bkash.app_key'),
            'app_secret' => config('bkash.app_secret'),
        ]);

        $token = $tokenResponse['id_token'] ?? null;

        if (!$token) {
            return redirect()->route('bkash.fail')->with('error', 'Token failed.');
        }

        // Step 2: Create payment payload
        $payload = [
            'amount' => number_format((float) $request->amount, 2, '.', ''), // "100.00"
            'currency' => 'BDT',
            'intent' => 'sale',
            'merchantInvoiceNumber' => uniqid('inv_'),
        ];

        // Step 3: Send request with explicit JSON
        $createResponse = Http::withHeaders([
            'Authorization' => $token,
            'X-APP-Key' => config('bkash.app_key'),
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ])->withBody(json_encode($payload), 'application/json')
            ->post(config('bkash.create_payment_url'));

        // Step 4: Debug raw output
        dd([
            'status' => $createResponse->status(),
            'body' => $createResponse->body(),
            'json' => $createResponse->json(),
        ]);
    }
    public function createPayment(Request $request)
    {
        // STEP 1: Get Token
        $tokenResponse = Http::withHeaders([
            'Content-Type' => 'application/json',
            'username'     => config('bkash.username'),
            'password'     => config('bkash.password'),
        ])->post(config('bkash.grant_token_url'), [
            'app_key'    => config('bkash.app_key'),
            'app_secret' => config('bkash.app_secret'),
        ]);

        $tokenData = $tokenResponse->json();
        $idToken = $tokenData['id_token'] ?? null;

        if (!$idToken) {
            return redirect()->route('bkash.fail')->with('error', 'Token generation failed.');
        }

        // STEP 2: Create Payment
        $payload = [
            'amount' => number_format((float) $request->amount, 2, '.', ''),
            'currency' => 'BDT',
            'intent' => 'sale',
            'merchantInvoiceNumber' => uniqid('inv_'),
        ];

        $createResponse = Http::withHeaders([
            'Authorization' => $idToken,
            'X-APP-Key'     => config('bkash.app_key'),
            'Accept'        => 'application/json',
            'Content-Type'  => 'application/json',
        ])->post(config('bkash.create_payment_url'), $payload); // Laravel 9+ sends this correctly as JSON

        dd($createResponse);

        $paymentData = $createResponse->json();
        dd($paymentData); // Inspect this for debugging

        if (!empty($paymentData['paymentID']) && !empty($paymentData['bkashURL'])) {
            Session::put('bkash_payment_id', $paymentData['paymentID']);
            return redirect($paymentData['bkashURL']);
        }

        return redirect()->route('bkash.fail')->with('error', $paymentData['message'] ?? 'Payment creation failed.');
    }



    public function executePayment(Request $request)
    {
        $paymentID = session('bkash_payment_id');
        $tokenResponse = Http::withHeaders([
            'Content-Type' => 'application/json',
            'username' => config('bkash.username'),
            'password' => config('bkash.password'),
        ])->post(config('bkash.grant_token_url'), [
            'app_key' => config('bkash.app_key'),
            'app_secret' => config('bkash.app_secret'),
        ]);


        $idToken = $tokenResponse['id_token'];

        $executeResponse = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => $idToken,
            'X-APP-Key' => config('bkash.app_key'),
        ])->post(config('bkash.execute_payment_url') . '/' . $paymentID);

        $paymentResult = $executeResponse->json();

        if ($paymentResult['transactionStatus'] == 'Completed') {
            return redirect()->route('bkash.success');
        }

        return redirect()->route('bkash.fail')->with('error', 'Payment execution failed.');
    }

    public function paymentSuccess()
    {
        return "Payment Successful!";
    }

    public function paymentFailed()
    {
        return "Payment Failed.";
    }
}
