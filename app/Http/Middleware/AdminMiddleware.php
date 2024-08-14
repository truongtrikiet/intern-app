<?php

namespace App\Http\Middleware;

use App\Http\Requests\UserRequest;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminMiddleware
{
    public function handle(Request $request, Closure $next) {
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }
        abort(404, 'Page not found.');
    }
}
