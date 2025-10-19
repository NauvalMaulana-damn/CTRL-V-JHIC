<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Log;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Alumni;
use App\Models\Prestasi;
use App\Models\Ekskul;
use App\Models\Pendaftaran;
use App\Models\ActivityLog;
use App\Models\User;
use App\Models\Visitor;

class VisitorController extends Controller
{
    /**
     * Display dashboard with statistics
     */
    public function dashboard()
    {
        $stats = [
            'berita' => Berita::count(),
            'alumni' => Alumni::count(),
            'prestasi' => Prestasi::count(),
            'ekskul' => Ekskul::count(),
            'pendaftaran' => Pendaftaran::count(),
            'logs' => ActivityLog::count(),
            'users' => User::count(),
        ];

        // Ambil recent logs dengan eager loading yang aman
        $recentLogs = ActivityLog::with('user')
            ->latest()
            ->limit(10)
            ->get();

        return view('admin.dashboard', compact('stats', 'recentLogs'));
    }

    /**
     * API endpoint untuk data pengunjung (digunakan oleh chart)
     */
    // Di VisitorController.php - ganti method getVisitorData()
public function getVisitorData()
{
    try {
        // Total semua pengunjung
        $totalVisitors = Visitor::count();
        
        $activeVisitors = Visitor::where('visited_at', '>=', now()->subMinutes(15))
            ->distinct('visitor_id')
            ->count('visitor_id');

        // Pengunjung hari ini
        $todayVisitors = Visitor::whereDate('visited_at', today())->count();

        // Data 7 hari terakhir
        $weeklyVisitors = [];
        for ($i = 6; $i >= 0; $i--) {
            $date = now()->subDays($i);
            $count = Visitor::whereDate('visited_at', $date->format('Y-m-d'))->count();

            $weeklyVisitors[] = [
                'date'  => $date->format('Y-m-d'),
                'total' => $count,
            ];
        }

        return response()->json([
            'success'        => true,
            'totalVisitors'  => $totalVisitors,
            'activeVisitors' => $activeVisitors,
            'todayVisitors'  => $todayVisitors,
            'weeklyVisitors' => $weeklyVisitors,
        ]);

    } catch (\Exception $e) {
        Log::error('Error fetching visitor data: ' . $e->getMessage());

        return response()->json([
            'success'        => false,
            'error'          => $e->getMessage(),
            'totalVisitors'  => 0,
            'activeVisitors' => 0,
            'todayVisitors'  => 0,
            'weeklyVisitors' => $this->getFallbackWeeklyData(),
        ], 500);
    }
}

    /**
     * Fallback data jika database error
     */
    private function getFallbackWeeklyData()
    {
        $weeklyData = [];
        for ($i = 6; $i >= 0; $i--) {
            $date         = now()->subDays($i);
            $weeklyData[] = [
                'date'  => $date->format('Y-m-d'),
                'total' => rand(10, 50), // Random data untuk demo
            ];
        }
        return $weeklyData;
    }
}
