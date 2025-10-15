<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Alumni;
use App\Models\Prestasi;
use App\Models\Ekskul;
use App\Models\ActivityLog;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class VisitorController extends Controller
{
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
                ->take(5)
                ->get();
        }

        return view('admin.dashboard', $data);
    }
}
