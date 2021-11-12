<?php

namespace App\Mail\Customer;

use App\Models\Registration;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PostRegistrationMail extends Mailable
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
            ->subject("Welcome to " . config('app.name'))
            ->to($this->registration->email)
            ->markdown('mail.post-registration-mail', [
                'user' => $this->registration,
                'payment_url' => $this->registration->getSignedPaymentUrl(),
            ]);
    }
}
