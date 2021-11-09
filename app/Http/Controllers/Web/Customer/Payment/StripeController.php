<?php

namespace App\Http\Controllers\Web\Customer\Payment;

use App\Actions\StripeManager;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Stripe\Checkout\Session as StripeSession;

class StripeController
{
    private StripeManager $stripeManager;

    public function __construct(StripeManager $stripeManager)
    {
        $this->stripeManager = $stripeManager;
    }

    public function redirectTOCheckout()
    {
       $description =  config('app.name') . " Subscription";
        $url = $this->stripeManager->createCheckout($description, auth()->user()->email, 2000);

        return redirect()->away($url, 303);
    }

    public function handleCallback(Request $request, $status)
    {
        $message  = $status = 'success' ?
            "Payment has been received and is being processed. Please allow upto 5 minutes.":
            "Payment was canceled";

        return redirect()->route('home')->with('info', $message);
    }

    public function handleWebhook(Request $request)
    {
        $event = $this->stripeManager->retrieveWebhookRequest($request);

        /** @var StripeSession $session */
        $session = $event->data->object;
        if (!$session) {
           return [];
        }

        switch ($event->type) {
            case 'checkout.session.completed':
                if ($session->payment_status == 'paid') {
                    $this->storePayment($session);
                }
                break;
            case 'checkout.session.async_payment_succeeded':
                $this->storePayment($session);
                break;
            case 'checkout.session.async_payment_failed':
                // Send an email to the customer asking them to retry their order
                break;
        }

        return [];
    }

    private function storePayment(StripeSession $session)
    {
        $user_email = $session->customer_email;

        /** @var User $user */
        $user = User::query()->where('email', $user_email)->firstOrFail();

        $user->payments()->create([
            'gateway_name' => Payment::GATEWAY_STRIPE,
            'gateway_reference' => $session->id,
            'status' => Payment::STATUS_PAID,
            'paid_at' => now(),
            'amount_paid' => $session->amount_total,
            'currency' => $session->currency,
        ]);
    }
}
