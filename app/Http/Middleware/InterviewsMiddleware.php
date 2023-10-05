<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class InterviewsMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->role == User::SUPER_ADMIM || $request->user()->role == User::INTERVIEWS || $request->user()->role == User::DIRECTOR_GENERAL || $request->user()->role == User::USG_FOR_AC) {
            return $next($request);
        }
        return redirect('/dashboard');
    }
}
