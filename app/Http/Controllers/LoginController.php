<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm() {
        return view('admin.auth.login');
    }

    public function login(Request $request) {
        $creds = $request->only('username', 'password');

        if (Auth::attempt($creds)) {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->back()->with('error', 'Username atau password salah');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }
}
