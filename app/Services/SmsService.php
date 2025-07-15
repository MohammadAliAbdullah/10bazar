<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SmsService
{
    public static function send($to, $message)
    {
        try {
            // ✅ Replace with your actual SMS API credentials
            $apiUrl = 'https://sms.yourprovider.com/api/v1/send';
            $apiKey = 'YOUR_API_KEY';
            $senderId = 'YourBrand'; // Optional for some providers

            $response = Http::post($apiUrl, [
                'api_key' => $apiKey,
                'senderid' => $senderId,
                'number' => $to,
                'message' => $message,
            ]);

            if ($response->successful()) {
                return true;
            }

            Log::error('SMS failed: ' . $response->body());
            return false;
        } catch (\Exception $e) {
            Log::error('SMS Exception: ' . $e->getMessage());
            return false;
        }
    }
}
