<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }
    // public function handle(Request $request, Closure $next, ...$roles)
    // {
    //     if (!Auth::check()) {
    //         return redirect('/login');
    //     }

    //     $user = Auth::user();

    //     if (in_array($user->role->name, $roles)) {
    //         return $next($request);
    //     }

    //     return redirect('/login')->withErrors('You do not have access to this area.');
    // }
    public function handle(Request $request, Closure $next, $role)
    {
        if (!Auth::check() || Auth::user()->role !== $role) {
            // Redirect to home if user is not authenticated or does not have the required role
            return redirect('/');
        }

        return $next($request);
    }
}
