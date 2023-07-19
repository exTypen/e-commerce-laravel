<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::user()) {
            toastr()->error('Giriş Yapmalısın', 'Hata');
            return redirect('/');
        }else if(Auth::user()->roles->contains('role_id', 1)){
            return $next($request);
        }
        toastr()->error('Yetkiniz Bulunmamaktadır', 'Hata');
        return redirect('/');
    }
}
