<?php

return [
    'sandbox' => env('BKASH_SANDBOX', true),
    'app_key' => env('BKASH_APP_KEY'),
    'app_secret' => env('BKASH_APP_SECRET'),
    'username' => env('BKASH_USERNAME'),
    'password' => env('BKASH_PASSWORD'),
    'grant_token_url' => env('BKASH_GRANT_TOKEN_URL'),
    'refresh_token_url' => env('BKASH_REFRESH_TOKEN_URL'),
    'create_payment_url' => env('BKASH_CREATE_PAYMENT_URL'),
    'execute_payment_url' => env('BKASH_EXECUTE_PAYMENT_URL'),
    'payment_status_url' => env('BKASH_PAYMENT_STATUS_URL'),
    'search_transaction_url' => env('BKASH_SEARCH_TRANSACTION_URL'),
    'refund_url' => env('BKASH_REFUND_URL'),
    'refund_status_url' => env('BKASH_REFUND_STATUS_URL'),
    'callback_url' => env('BKASH_CALLBACK_URL'),
];



// return [
//     'sandbox' => env('BKASH_SANDBOX', true),

//     // Credentials
//     'app_key' => env('BKASH_APP_KEY', '4f6o0cjiki2rfm34kfdadl1eqq'),
//     'app_secret' => env('BKASH_APP_SECRET', '2is7hdktrekvrbljjh44ll3d9l1dtjo4pasmjvs5vl5qr3fug4b'),
//     'username' => env('BKASH_USERNAME', 'sandboxTokenizedUser02'),
//     'password' => env('BKASH_PASSWORD', 'sandboxTokenizedUser02@12345'),

//     // Token URLs
//     'grant_token_url' => env('BKASH_GRANT_TOKEN_URL', 'https://tokenized.sandbox.bka.sh/v1.2.0-beta/tokenized/checkout/token/grant'),
//     'refresh_token_url' => env('BKASH_REFRESH_TOKEN_URL', 'https://tokenized.sandbox.bka.sh/v1.2.0-beta/tokenized/checkout/token/refresh'),

//     // Checkout URLs
//     'create_payment_url' => env('BKASH_CREATE_PAYMENT_URL', 'https://tokenized.sandbox.bka.sh/v1.2.0-beta/tokenized/checkout/create'),
//     'execute_payment_url' => env('BKASH_EXECUTE_PAYMENT_URL', 'https://tokenized.sandbox.bka.sh/v1.2.0-beta/tokenized/checkout/execute'),
//     'payment_status_url' => env('BKASH_PAYMENT_STATUS_URL', 'https://tokenized.sandbox.bka.sh/v1.2.0-beta/tokenized/checkout/payment/status'),
//     'search_transaction_url' => env('BKASH_SEARCH_TRANSACTION_URL', 'https://tokenized.sandbox.bka.sh/v1.2.0-beta/tokenized/checkout/general/searchTransaction'),

//     // Refund URLs (optional)
//     'refund_url' => env('BKASH_REFUND_URL', 'https://tokenized.sandbox.bka.sh/v1.2.0-beta/tokenized/checkout/payment/refund'),
//     'refund_status_url' => env('BKASH_REFUND_STATUS_URL', 'https://tokenized.sandbox.bka.sh/v1.2.0-beta/tokenized/checkout/payment/refund/status'),

//     // Callback URL for async response
//     'callback_url' => env('BKASH_CALLBACK_URL', 'https://yourdomain.com/bkash/callback'),

//     // App Key Header
//     'app_key_header' => env('BKASH_APP_KEY_HEADER', 'X-APP-Key'),
// ];
