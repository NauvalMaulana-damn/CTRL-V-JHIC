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
    public function index()
    {
        $totalVisitors = Visitor::count();
        $todayVisitors = Visitor::whereDate('visited_at', today())->count();
        $activeVisitors = Visitor::where('visited_at', '>=', now()->subMinutes(10))->count();

        $weeklyVisitors = Visitor::selectRaw('DATE(visited_at) as date, COUNT(*) as total')
            ->where('visited_at', '>=', now()->subDays(7))
            ->groupBy('date')
            ->orderBy('date', 'asc')
            ->get();

        return response()->json([
            'totalVisitors' => $totalVisitors,
            'todayVisitors' => $todayVisitors,
            'activeVisitors' => $activeVisitors,
            'weeklyVisitors' => $weeklyVisitors,
        ]);
    }
}
