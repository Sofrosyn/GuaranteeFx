<?php

namespace App\Mail\Auth;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailVerificationMail extends Mailable
{
    use Queueable, SerializesModels;

    private User $user;

    private int $verification_code;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, int $verification_code)
    {
        $this->user = $user;
        $this->verification_code = $verification_code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Email Verification')
            ->to($this->user->email)
            ->markdown('emails.auth.email_verification', [
            'code' => $this->verification_code,
        ]);
    }
}
