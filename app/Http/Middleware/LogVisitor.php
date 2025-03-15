<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ipAddress = $request->ip();
        $userAgent = $request->header('User-Agent');

        // Log the visitor if not already logged today
        // if (!Visitor::where('ip_address', $ipAddress)->whereDate('created_at', now()->toDateString())->exists()) {
        //     Visitor::create([
        //         'ip_address' => $ipAddress,
        //         'user_agent' => $userAgent,
        //     ]);
        // }

        //Check if the visitor has a cookie
        if (!$request->hasCookie('visited')) {
            // Log the visitor
            Visitor::create([
                'ip_address' => $ipAddress,
                'user_agent' => $userAgent,
            ]);

            // Set a cookie to mark the visitor
            cookie()->queue('visited', true, 1440); // Cookie valid for 1 day (1440 minutes)
        }

        return $next($request);
    }
}
