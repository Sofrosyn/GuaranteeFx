<?php

namespace App\Mail\Admin;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessageMail extends Mailable
{
    use Queueable, SerializesModels;

    private array $inputs;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $inputs)
    {
        $this->inputs = $inputs;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.contact-message-mail', ['inputs' => $this->inputs]);
    }
}
