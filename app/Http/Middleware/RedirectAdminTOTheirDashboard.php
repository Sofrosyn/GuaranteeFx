<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectAdminTOTheirDashboard
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
        if ($request->routeIs('admin.*') || !auth()->user()->is_admin) {
            return $next($request);
        }

        return response()->redirectTo(route('admin.dashboard'));
    }
}
