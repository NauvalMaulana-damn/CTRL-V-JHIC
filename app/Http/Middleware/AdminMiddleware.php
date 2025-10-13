<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect()->route('admin.login')->with('error', 'Silahkan login terlebih dahulu.');
        }

        if (Auth::user()->roleKey !== env('ROLE_KEY')) {
            return redirect()->route('admin.login')->with('error', 'Anda tidak memiliki akses Admin.');
        }

        return $next($request);
    }
}
