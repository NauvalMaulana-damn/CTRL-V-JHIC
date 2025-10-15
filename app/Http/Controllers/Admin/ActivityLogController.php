<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ActivityLog;
use Illuminate\Support\Facades\Auth;

class ActivityLogController extends Controller
{
    public function index()
    {
        $logs = ActivityLog::with('user')
            ->latest()
            ->paginate(20);

        $stats = [
            'total' => ActivityLog::count(),
            'today' => ActivityLog::today()->count(),
            'logins' => ActivityLog::loginActions()->count(),
            'crud' => ActivityLog::crudActions()->count(),
        ];

        return view('admin.logs.index', compact('logs', 'stats'));
    }

    public function show(ActivityLog $log)
    {
        // Hanya superadmin yang bisa melihat detail log
        if (!Auth::user()->isSuperadmin()) {
            abort(403);
        }

        return view('admin.logs.show', compact('log'));
    }

    public function filter(Request $request)
    {
        $query = ActivityLog::with('user');

        // Filter by action
        if ($request->action && $request->action !== 'all') {
            $query->where('action', $request->action);
        }

        // Filter by user
        if ($request->user_id) {
            $query->where('user_id', $request->user_id);
        }

        // Filter by date
        if ($request->date_from) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }

        if ($request->date_to) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        $logs = $query->latest()->paginate(20);

        return view('admin.logs.index', compact('logs'));
    }
}
