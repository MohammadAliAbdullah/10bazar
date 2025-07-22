<?php
// app/Helpers/FacebookHelper.php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class FacebookHelper
{
    public static function sendServerEvent($eventName, $userData = [], $customData = [])
    {
        $pixelId = env('FACEBOOK_PIXEL_ID');
        $accessToken = env('FACEBOOK_ACCESS_TOKEN');

        if (!$pixelId || !$accessToken) {
            return false;
        }

        $endpoint = "https://graph.facebook.com/v19.0/{$pixelId}/events";

        $payload = [
            'data' => [
                [
                    'event_name' => $eventName,
                    'event_time' => time(),
                    'event_source_url' => url()->current(),
                    'user_data' => $userData,
                    'custom_data' => $customData,
                    'action_source' => 'website'
                ]
            ],
            'access_token' => $accessToken
        ];

        return Http::post($endpoint, $payload);
    }
}
