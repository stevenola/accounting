<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {


        $user = Auth::user();

        if (!auth()->check() || !$request->user()->isAdmin()) {

            return redirect()->intended('/');
        }

        return $next($request);
    }
}
