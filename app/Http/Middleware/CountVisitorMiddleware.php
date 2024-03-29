<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class CountVisitorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $sessionId = Session::getId();
        $ipAddress = $request->ip();
        $userAgent = $request->userAgent();

        $visitor = DB::table('visitors')
            ->where('session_id', $sessionId)
            ->first();

        if (!$visitor) {
            DB::table('visitors')->insert([
                'session_id' => $sessionId,
                'ip_address' => $ipAddress,
                'user_id' => Auth::id() ? Auth::id() : 0,
                'user_agent' => $userAgent,
                'visited_at' => now(),
            ]);
        }
        return $next($request);
    }
}
