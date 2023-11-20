<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login
{
    /**
     * Handle an incoming request.
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth()->user()->user_type == 'Admin'|| 'Vendor'|| 'Customer') {
            return $next($request);
        }
        else{
            return redirect()->route('login');

        }
        toastr('Authorized Personal Only !!!', 'error');

        return redirect('/');
    }
}
