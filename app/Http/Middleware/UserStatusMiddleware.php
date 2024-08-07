<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserStatusMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if ($user->status == 0) {
            return redirect()->back()->withErrors(['status' => 'Your account is waiting for approval. PLease wait few minutes. ']);
        }
        if ($user->status == 2) {
            return redirect()->back()->withErrors(['status' => 'Your account has been denied.']);
        }
        if ($user->status == 3) {
            Auth::logout();
            return redirect()->back()->withErrors(['status' => 'Your account has been locked.']);
        }

        return $next($request);
    }
}
