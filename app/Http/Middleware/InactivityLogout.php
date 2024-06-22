<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class InactivityLogout
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $lastActivity = session('lastActivityTime');
            $currentTime = now();

            if ($lastActivity && $currentTime->diffInMinutes($lastActivity) > 1) {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();

                return redirect()->route('getLogin')->with('error', 'You have been logged out due to inactivity.');
            }

            session(['lastActivityTime' => $currentTime]);
        }

        return $next($request);
    }
    }

