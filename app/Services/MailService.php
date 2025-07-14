<?php

namespace App\Services;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use App\Models\AppSetting;
use App\Models\MailConfig;
use App\Mail\CustomerInvoiceMail;

class MailService
{
    public static function sendCustomerInvoice($to, $data)
    {
        $data['compnyName'] = $compnyName = AppSetting::first()->site_title ?? '';
        $mailConfig = MailConfig::where('is_active', 1)->first();
        // dd($compnyName);
        if (!$mailConfig) {
            return false;
        }
        // Extract and validate CC and BCC emails
        $cc = $mailConfig->cc ? array_filter(array_map('trim', explode(',', $mailConfig->cc))) : [];
        $bcc = $mailConfig->bcc ? array_filter(array_map('trim', explode(',', $mailConfig->bcc))) : [];

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
        Config::set('mail.from.name', $compnyName);
        // dd(config('mail.from.address'));
        // dd(config('mail.from.name'));
        // Send mail
        Mail::to($to)
            ->when(!empty($cc), fn($m) => $m->cc($cc))
            ->when(!empty($bcc), fn($m) => $m->bcc($bcc))
            ->send(new CustomerInvoiceMail($data));
    }
}
