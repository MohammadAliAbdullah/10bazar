<?php
// File: app/Mail/CustomerInvoiceMail.php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CustomerInvoiceMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $ccEmails;
    public $bccEmails;

    /**
     * Create a new message instance.
     * The constructor stays the same.
     *
     * @param array $data
     * @param array|string $ccEmails
     * @param array|string $bccEmails
     * @return void
     */
    public function __construct(array $data, $ccEmails = [], $bccEmails = [])
    {
        $this->data = $data;
        $this->ccEmails = $ccEmails;
        $this->bccEmails = $bccEmails;
    }

    /**
     * Build the message.
     * This is the only method Laravel will call to build the email.
     *
     * @return $this
     */
    public function build()
    {
        // We chain all the settings together inside this one method.
        // NOTE: The public property `$data` is automatically available in the view.
        return $this->subject(' - Your Invoice')
                    ->cc($this->ccEmails)
                    ->bcc($this->bccEmails)
                    ->view('emails.test'); // This will use resources/views/emails/test.blade.php
    }
}