<?php

namespace App\Mail\Customer;

use App\Models\Registration;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SuccessfulPaymentMail extends Mailable
{
    use Queueable, SerializesModels;

    private Registration $registration;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Registration $registration)
    {
        $this->registration = $registration;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject(sprintf('Unlimited Access to %s', config('app.name')))
            ->to($this->registration->email)
            ->view('mail.successful-payment-mail', [
                'user' => $this->registration,
            ]);
    }
}
