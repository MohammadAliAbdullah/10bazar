<?php
use App\Models\PaymentMethod;
use App\Models\PaymentSetup;

if (!function_exists('sslcommerz')) {
    function sslcommerz(): array
    {
        $paymentMethod = PaymentMethod::where(['code' => 'CS-SSLCOM', 'is_active' => 1])->first();

        if (!$paymentMethod) {
            throw new \Exception('SSLCommerz payment method not found.');
        }

        $setup = PaymentSetup::where('payment_method_id', $paymentMethod->id)
            ->where('is_active', 1)
            ->first();

        if (!$setup) {
            throw new \Exception('SSLCommerz setup not found or inactive.');
        }
        $v = $setup->is_live == 0 ? 'v3' : 'v4';
        return [
            'projectPath' => base_path() ?? env('PROJECT_PATH'),
            // For Sandbox, use "https://sandbox.sslcommerz.com"
            // For Live, use "https://securepay.sslcommerz.com"
            'apiDomain' => $setup->is_live ? "https://securepay.sslcommerz.com" : "https://sandbox.sslcommerz.com",
            'apiCredentials' => [
                'store_id' => $setup->merchant_id,
                'store_password' => $setup->password,
            ],
            'apiUrl' => [
                'make_payment' => "/gwprocess/{$v}/api.php",
                // 'make_payment' => "/gwprocess/v4/api.php", // live version
                'transaction_status' => "/validator/api/merchantTransIDvalidationAPI.php",
                'order_validate' => "/validator/api/validationserverAPI.php",
                'refund_payment' => "/validator/api/merchantTransIDvalidationAPI.php",
                'refund_status' => "/validator/api/merchantTransIDvalidationAPI.php",
            ],
            'connect_from_localhost' => $setup->is_live == 0, // For Sandbox, use "true", For Live, use "false"
            'success_url' => '/success',
            'failed_url' => '/fail',
            'cancel_url' => '/cancel',
            'ipn_url' => '/ipn',
        ];
    }
}
