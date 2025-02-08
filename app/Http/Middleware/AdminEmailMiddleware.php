<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminEmailMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $allowedEmails = [
            'thilinathushan2u@gmail.com'
        ];

        if (!in_array(auth()->user()->email, $allowedEmails)) {
            abort(404);
        }
        return $next($request);
    }
}
