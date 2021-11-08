<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HasSetupEmployerAccount
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->routeIs('employer.get-started') && !$request->user()->employer_account) {
            return redirect()->route('employer.get-started');
        }

        return $next($request);
    }
}
