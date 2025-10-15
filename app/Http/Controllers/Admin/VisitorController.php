<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visitor;
use App\Models\Berita;
use App\Models\Alumni;
use App\Models\Prestasi;
use App\Models\Ekskul;
use App\Models\ActivityLog;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class VisitorController extends Controller
{
    /**
     * Display dashboard with statistics
     */
    public function dashboard()
    {
        $user = Auth::user();

        $data = [
            'totalBerita' => Berita::count(),
            'totalAlumni' => Alumni::count(),
            'totalPrestasi' => Prestasi::count(),
            'totalEkskul' => Ekskul::count(),
        ];

        // Hanya SUPERADMIN yang melihat stats logs dan users
        if ($user->isSuperadmin()) {
            $data['totalLogs'] = ActivityLog::count();
            $data['totalUsers'] = User::count();
            $data['recentLogs'] = ActivityLog::with('user')
                ->latest()
                ->take(10)
                ->get();
        }

        return view('admin.dashboard', $data);
    }

    /**
     * API endpoint untuk data pengunjung (digunakan oleh chart)
     */
    public function getVisitorData()
    {
        try {
            // Total semua pengunjung
            $totalVisitors = Visitor::count();

            // Pengunjung aktif (dalam 30 menit terakhir)
            $activeVisitors = Visitor::where('visited_at', '>=', now()->subMinutes(30))->count();

            // Pengunjung hari ini
            $todayVisitors = Visitor::whereDate('visited_at', today())->count();

            // Data 7 hari terakhir
            $weeklyVisitors = [];
            for ($i = 6; $i >= 0; $i--) {
                $date = now()->subDays($i);
                $count = Visitor::whereDate('visited_at', $date->format('Y-m-d'))->count();

                $weeklyVisitors[] = [
                    'date' => $date->format('Y-m-d'),
                    'total' => $count
                ];
            }

            return response()->json([
                'success' => true,
                'totalVisitors' => $totalVisitors,
                'activeVisitors' => $activeVisitors,
                'todayVisitors' => $todayVisitors,
                'weeklyVisitors' => $weeklyVisitors
            ]);

        } catch (\Exception $e) {
            ActivityLog::error('Error fetching visitor data: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
                'totalVisitors' => 0,
                'activeVisitors' => 0,
                'todayVisitors' => 0,
                'weeklyVisitors' => $this->getFallbackWeeklyData()
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
            $date = now()->subDays($i);
            $weeklyData[] = [
                'date' => $date->format('Y-m-d'),
                'total' => rand(10, 50) // Random data untuk demo
            ];
        }
        return $weeklyData;
    }
}
