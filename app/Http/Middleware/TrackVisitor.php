<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Visitor;
use Illuminate\Support\Facades\DB;

class TrackVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
         // Simpan IP pengunjung dan user agent
        $ip = $request->ip();
        $userAgent = $request->header('User-Agent');

        // Catat kunjungan (boleh dikembangkan untuk filter unik per hari)
        DB::table('visitors')->insert([
            'ip_address' => $ip,
            'user_agent' => $userAgent,
            'visited_at' => now(),
        ]);

        return $next($request);
    }
}
