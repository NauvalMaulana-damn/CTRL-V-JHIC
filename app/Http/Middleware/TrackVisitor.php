<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cookie;

class TrackVisitor
{
    public function handle(Request $request, Closure $next)
    {
        // Skip tracking untuk admin routes dan API
        if ($this->shouldSkipTracking($request)) {
            return $next($request);
        }

        $ip = $request->ip();
        $userAgent = $request->userAgent();
        $currentUrl = $request->fullUrl();

        // Generate atau ambil visitor_id dari cookie
        $visitorId = Cookie::get('visitor_id');
        if (!$visitorId) {
            $visitorId = 'visitor_'.md5(uniqid().$ip.$userAgent);
            Cookie::queue('visitor_id', $visitorId, 60 * 24 * 30); // 30 hari
        }

        // 🔴 FIX: Cek apakah visitor dengan ID ini sudah ada dalam 15 menit terakhir
        $recentVisit = Visitor::where('visitor_id', $visitorId)
            ->where('visited_at', '>=', now()->subMinutes(15))
            ->first();

        if (!$recentVisit) {
            // Catat kunjungan baru
            Visitor::create([
                'visitor_id' => $visitorId,
                'ip_address' => $ip,
                'user_agent' => substr($userAgent, 0, 255),
                'page' => $currentUrl,
                'visited_at' => now(),
            ]);
        } else {
            // Update waktu untuk pengunjung aktif (hanya update waktu, jangan buat record baru)
            $recentVisit->update([
                'visited_at' => now(),
                'page' => $currentUrl
            ]);
        }

        return $next($request);
    }

    /**
     * Skip tracking untuk route tertentu
     */
    private function shouldSkipTracking(Request $request): bool
    {
        $path = $request->path();

        return str_contains($path, 'admin') ||
               str_contains($path, 'login') ||
               str_contains($path, 'dashboard') ||
               str_contains($path, 'api') ||
               $request->ajax();
    }
}
