<?php

namespace App\Providers;

use App\Models\User;
use Faker\Generator;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Notifications\Messages\MailMessage;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        VerifyEmail::toMailUsing(function (User $user, string $verification_url) {
            return (new MailMessage())
                ->subject("Welcome to " . $app_name = config('app.name') . " 🕊")
                ->line($this->app->make(Generator::class)->paragraphs(2))
                ->line('To continue, please use the  button below to verify your Email Address')
                ->action("Verify Email Address", $verification_url)
                ->line("If you did not create an account at $app_name, you may disregard this message.");
        });
    }
}
