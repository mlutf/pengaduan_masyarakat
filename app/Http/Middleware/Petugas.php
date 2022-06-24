<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Session;
use Closure;
use Illuminate\Http\Request;

class Petugas
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Session::get('level')=='petugas') {
            return $next($request);
        }else{
            return redirect()->back()->with('loginError','Silahkan Login Terlebih Dahulu');
        }
    }
}
