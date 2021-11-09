<?php

namespace App\Actions;

use Illuminate\Http\Request;
use Stripe\Checkout\Session as StripeSession;
use Stripe\Event as StripeEvent;
use Stripe\Exception\SignatureVerificationException;
use Stripe\Stripe;
use Stripe\Webhook;
use UnexpectedValueException;

class StripeManager
{
    private bool $logging;

    public function __construct()
    {
        Stripe::setApiKey(config('services.stripe.secret'));
    }

    public function enableLogging(bool $enable = true)
    {
        $this->logging = $enable;
    }

    public function createCheckout(string $description, string $email, int $price): ?string
    {
        $session = StripeSession::create([
            'payment_method_types' => ['card'],
            'customer_email' => $email,
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => $description,
                    ],
                    'unit_amount' => $price,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('stripe-callback', 'success'),
            'cancel_url' => route('stripe-callback', 'cancelled'),
        ]);

        return $session->url;
    }

    public function retrieveWebhookRequest(Request $request): StripeEvent
    {
        logger()->channel('stripe')->info("Received payload {$request->collect()->toJson()}");

        logger()->channel('stripe')->info("Event type is [{$request->input('type')}]");

        $signature = $request->header('stripe-signature');
        logger()->info("Header: $signature");

        try {
            return (Webhook::constructEvent(
                file_get_contents('php://input'), $signature, config('services.stripe.webhook_secret')
            ));
        } catch (UnexpectedValueException $e) {
            // Invalid payload
            logger()->channel('stripe')->info("Failed: {$e->getMessage()}");
            abort(400);
        } catch (SignatureVerificationException $e) {
            // Invalid signature
            logger()->channel('stripe')->info("Failed: {$e->getMessage()}");
            abort(400);
        }
    }
}
