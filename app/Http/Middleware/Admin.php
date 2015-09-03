<?php

namespace App\Http\Middleware;

use App\Http\Requests\Request;
use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class Admin
{

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
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
        if(!$this->auth->check() || $user['role_id'] != 1)
        {
            return redirect('/auth/login');
        }

        return $next($request);
    }
}
