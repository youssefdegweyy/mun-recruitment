<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->role == User::SUPER_ADMIM) {
            return $next($request);
        }
        return redirect('/dashboard');
    }
}
