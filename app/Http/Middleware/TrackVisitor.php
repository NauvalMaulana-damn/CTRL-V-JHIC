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
        $ip = $request->ip();
        $userAgent = $request->userAgent();
        $today = Carbon::today();

        // Ambil visitor_id dari cookie, kalau belum ada, buat baru
        $visitorId = Cookie::get('visitor_id');
        if (!$visitorId) {
            $visitorId = hash('sha256', uniqid('visitor_', true));
            Cookie::queue('visitor_id', $visitorId, 60 * 24 * 30); // simpan 30 hari
        }

        // Cek apakah user sudah tercatat hari ini
        $visitor = Visitor::where('ip_address', $ip)
            ->where('user_agent', $userAgent)
            ->whereDate('visited_at', $today)
            ->first();

        if (!$visitor) {
            Visitor::create([
                'visitor_id' => $visitorId,
                'ip_address' => $ip,
                'user_agent' => $userAgent,
                'visited_at' => now(),
            ]);
        } else {
            // 🟢 Update waktu terakhir supaya bisa dihitung "aktif"
            $visitor->update(['visited_at' => now()]);
        }

        return $next($request);
    }
}
