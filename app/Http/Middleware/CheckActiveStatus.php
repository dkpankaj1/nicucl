<?php

namespace App\Http\Middleware;

use App\Enums\AccountType;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckActiveStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (
            Auth::check()
            && Auth::user()->is_active === 0
            && Auth::user()->account_type === AccountType::RETAILER
        ) {

            // send to activation page
            dd('ok');
            // return redirect()->route('inactive.user');
        }
        return $next($request);
    }
}
