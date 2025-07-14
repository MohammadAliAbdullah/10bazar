<?php

namespace App\Services;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use App\Models\MailConfig;
use App\Mail\CustomerInvoiceMail;

class MailService
{
    public static function sendCustomerInvoice($to, $data, $cc = [], $bcc = [])
    {
        $mailConfig = MailConfig::where('is_active', 1)->first();

        if (!$mailConfig) {
            throw new \Exception('No active mail configuration found.');
        }

        // Parse encryption and host
        $encryption = 'ssl';
        $host = str_replace(['ssl://', 'tls://'], '', $mailConfig->smtp_host);
        if (strpos($mailConfig->smtp_host, 'tls://') === 0) {
            $encryption = 'tls';
        }

        // Dynamically override mail config
        Config::set('mail.mailers.smtp', [
            'transport'  => 'smtp',
            'host'       => $host,
            'port'       => $mailConfig->smtp_port,
            'encryption' => $encryption,
            'username'   => $mailConfig->smtp_user,
            'password'   => $mailConfig->smtp_pass,
            'timeout'    => null,
            'auth_mode'  => null,
        ]);

        Config::set('mail.default', 'smtp');
        Config::set('mail.from.address', $mailConfig->smtp_user);
        Config::set('mail.from.name', 'Your Company Name');

        // Send mail
        Mail::to($to)->send(new CustomerInvoiceMail($data, $cc, $bcc));
    }
}
