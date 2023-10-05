<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class BoothMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->role == User::SUPER_ADMIM || $request->user()->role == User::BOOTH || $request->user()->role == User::DIRECTOR_GENERAL) {
            return $next($request);
        }
        return redirect('/dashboard');
    }
}
