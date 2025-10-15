<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ActivityLog;

class LoginController extends Controller
{
    public function showLoginForm() {
        return view('admin.auth.login');
    }

    public function login(Request $request) {
        $creds = $request->only('username', 'password');

        if (Auth::attempt($creds)) {
            $user = Auth::user();

            // Cek jika user aktif
            if (!$user->is_active) {
                Auth::logout();
                return redirect()->back()->with('error', 'Akun Anda dinonaktifkan.');
            }

            // Log login activity
            ActivityLog::create([
                'user_id' => $user->id,
                'action' => 'LOGIN',
                'description' => "User {$user->username} ({$user->role}) logged in",
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
            ]);

            return redirect()->route('admin.dashboard')->with('success', 'Login berhasil!');
        }

        // Log failed login attempt
        ActivityLog::create([
            'user_id' => null,
            'action' => 'LOGIN_FAILED',
            'description' => "Failed login attempt for username: {$request->username}",
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        return redirect()->back()->with('error', 'Username atau password salah');
    }

    public function logout(Request $request) {
        $user = Auth::user();

        // Log logout activity sebelum logout
        if ($user) {
            ActivityLog::create([
                'user_id' => $user->id,
                'action' => 'LOGOUT',
                'description' => "User {$user->username} ({$user->role}) logged out",
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
            ]);
        }

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login')->with('success', 'Logout berhasil!');
    }
}
