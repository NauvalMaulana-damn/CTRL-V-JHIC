<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class VisitorController extends Controller
{
    // View dashboard
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    // API data visitor
    public function apiData()
    {
        $totalVisitors = Visitor::count();
        $todayVisitors = Visitor::whereDate('visited_at', Carbon::today())->count();
        $weeklyVisitors = Visitor::select(
                DB::raw('DATE(visited_at) as date'),
                DB::raw('COUNT(*) as total')
            )
            ->where('visited_at', '>=', Carbon::now()->subDays(7))
            ->groupBy('date')
            ->orderBy('date', 'asc')
            ->get();

        return response()->json([
            'totalVisitors' => $totalVisitors,
            'todayVisitors' => $todayVisitors,
            'weeklyVisitors' => $weeklyVisitors,
        ]);
    }
}

