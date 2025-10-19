<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visitor;
use Illuminate\Support\Facades\Cookie;

class TrackVisitor
{
    public function handle(Request $request, Closure $next)
    {
        if ($this->shouldSkipTracking($request)) {
            return $next($request);
        }

        $ip = $request->ip();
        $userAgent = $request->userAgent();
        $currentUrl = $request->fullUrl();

        $visitorId = Cookie::get('visitor_id');
        if (!$visitorId) {
            $visitorId = 'visitor_'.md5(uniqid().$ip.$userAgent);
            Cookie::queue('visitor_id', $visitorId, 60 * 24 * 30);
        }

        // 🔴 Update atau buat record dengan is_active = true
        Visitor::updateOrCreate(
            ['visitor_id' => $visitorId],
            [
                'ip_address' => $ip,
                'user_agent' => substr($userAgent, 0, 255),
                'page' => $currentUrl,
                'visited_at' => now(),
                'is_active' => true, // 🔴 SELALU SET AKTIF KETIKA ADA ACTIVITY
            ]
        );

        return $next($request);
    }

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
