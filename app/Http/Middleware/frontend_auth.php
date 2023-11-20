<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class frontend_auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->expectsJson()) {
            toastr()->error('Please Login', 'Error', ['timeOut' => 5000]);
            return route('home');
        }
    }
}
