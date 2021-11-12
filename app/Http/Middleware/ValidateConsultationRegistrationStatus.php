<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ValidateConsultationRegistrationStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!settings('accept_registration')) {
            alert()->error('Sorry, registrations is closed at the moment.');
            return redirect()->route('welcome');
        }

        return $next($request);
    }
}
