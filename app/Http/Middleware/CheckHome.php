<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Route;


class CheckHome
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

        // dd(Auth::check());
        // $role=Auth::user()->role;

        if(Auth::check()&&Auth::user()->role == 1){
            return response()->view('admin.dashboard');

        }
        if (Auth::check()&&Auth::user()->role == 0) {
            return redirect(route('questionnaireuser'));

        } else {
            return response()->view('auth.login');
        }
    }
}
