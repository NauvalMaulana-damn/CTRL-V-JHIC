<?php

use App\Http\Controllers\Admin\ActivityLogController;
use App\Http\Controllers\Admin\AlumniController as AdminAlumniController;
use App\Http\Controllers\Admin\BeritaController as AdminBeritaController;
use App\Http\Controllers\Admin\EkskulController as AdminEkskulController;
use App\Http\Controllers\Admin\JurusanController as AdminJurusanController;
use App\Http\Controllers\Admin\MarqueeController as AdminMarqueeController;
use App\Http\Controllers\Admin\PendaftaranController as AdminPendaftaranController;
use App\Http\Controllers\Admin\PrestasiController as AdminPrestasiController;
use App\Http\Controllers\Admin\ProfilController as AdminProfilController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\VisitorController as AdminVisitorController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\EkskulController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

// Public routes dengan tracking visitor
Route::middleware('trackvisitor')->group(function () {
    Route::get('/', [LandingController::class, 'index'])->name('landing.index');
    Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
    Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index');
    Route::get('/prestasi', [PrestasiController::class, 'index'])->name('prestasi.index');
    Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan.index');
    Route::get('/jurusan/get-stats', [JurusanController::class, 'getStats'])->name('jurusan.get-stats');
    Route::get('/ekstrakurikuler', [EkskulController::class, 'index'])->name('ekskul.index');
    Route::get('/alumni', [AlumniController::class, 'index'])->name('alumni.index');
    Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran.index');
    Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');

    // Chatbot routes
    Route::post('/chat/ask', [ChatbotController::class, 'ask'])->name('chat.ask');
    Route::get('/chat/history', [ChatbotController::class, 'getHistory'])->name('chat.history');
    Route::delete('/chat/clear-history', [ChatbotController::class, 'clearHistory'])->name('chat.clear-history');
    Route::get('/chat/check-session', [ChatbotController::class, 'checkSession'])->name('chat.check-session');

    //chart data
    Route::get('/api/chart-data', [PendaftaranController::class, 'getChartData']);
});

// Login routes (tanpa middleware admin)
Route::get('/admin', [LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin', [LoginController::class, 'login'])->name('admin.login.post');

// Admin area (harus login dulu)
Route::prefix('admin')->name('admin.')->middleware(['admin'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [AdminVisitorController::class, 'dashboard'])->name('dashboard');

    // Visitor API - method getVisitorData
    Route::get('/api/visitors', [AdminVisitorController::class, 'getVisitorData'])->name('visitors.api');

    // CRUD resources
    Route::resource('marquee', AdminMarqueeController::class);
    Route::resource('berita', AdminBeritaController::class);
    Route::resource('profil', AdminProfilController::class);
    Route::resource('jurusan', AdminJurusanController::class);
    Route::resource('ekskul', AdminEkskulController::class);
    Route::resource('prestasi', AdminPrestasiController::class);
    Route::resource('alumni', AdminAlumniController::class);
    Route::resource('pendaftaran', AdminPendaftaranController::class);

    // User Management - Bisa diakses SUPERADMIN dan ADMIN (dengan batasan)
    Route::resource('users', AdminUserController::class);
    Route::patch('/users/{user}/toggle-status', [AdminUserController::class, 'toggleStatus'])
    ->name('users.toggle-status');

    // Activity Logs - Hanya SUPERADMIN yang bisa hapus logs
    Route::prefix('logs')->name('logs.')->group(function () {
        Route::get('/', [ActivityLogController::class, 'index'])->name('index');
        Route::get('/filter', [ActivityLogController::class, 'filter'])->name('filter');
        Route::get('/{log}', [ActivityLogController::class, 'show'])->name('show');

        // Hanya SUPERADMIN yang bisa hapus logs
        Route::middleware('superadmin')->group(function () {
            Route::delete('/{log}', [ActivityLogController::class, 'destroy'])->name('destroy');
            Route::delete('/filter/clear/old', [ActivityLogController::class, 'clearOldLogs'])->name('clear');
        });
    });

    // Logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::get('/ip', function (Request $request) {
    return response()->json([
        'ip' => $request->ip(),
        'ips' => $request->ips(),
        'isSecure' => $request->isSecure(),
    ]);
});

Route::post('/jurusan/increment-stats', [JurusanController::class, 'incrementStats'])
    ->name('jurusan.increment-stats')
    ->withoutMiddleware(['web']);
Route::get('/debug-jurusan-setup', function() {
    return response()->json([
        'app_url' => config('app.url'),
        'app_env' => config('app.env'),
        'csrf_token' => csrf_token(),
        'session_id' => session()->getId(),
        'routes_available' => [
            'jurusan_index' => route('jurusan.index'),
            'jurusan_increment' => route('jurusan.increment-stats'),
        ],
        'time' => now()->toISOString()
    ]);
});

Route::post('/debug-jurusan-simple', function(Request $request) {
    Log::info('=== DEBUG JURUSAN SIMPLE ===');
    Log::info('Headers:', $request->headers->all());
    Log::info('Data:', $request->all());
    Log::info('IP: ' . $request->ip());
    Log::info('Method: ' . $request->method());
    Log::info('============================');

    // Simpan ke database langsung
    DB::table('jurusan_statistiks')->insert([
        'tanggal' => now()->format('Y-m-d'),
        'departemen' => $request->departemen ?? 'debug',
        'type' => $request->type ?? 'debug',
        'jumlah' => 1,
        'created_at' => now(),
        'updated_at' => now()
    ]);

    return response()->json([
        'success' => true,
        'message' => 'DEBUG: Data received and saved',
        'received' => $request->all(),
        'saved_to_db' => true
    ]);
});

// TEST SUPER SIMPLE - tambahkan di bagian atas
Route::post('/test-simple', function(Request $request) {
    // Langsung simpan ke database tanpa log ribet
    DB::table('jurusan_statistiks')->insert([
        'tanggal' => now()->format('Y-m-d'),
        'departemen' => $request->departemen ?? 'test',
        'type' => $request->type ?? 'test',
        'jumlah' => 1,
        'created_at' => now(),
        'updated_at' => now()
    ]);

    return response()->json([
        'success' => true,
        'message' => 'SIMPLE: Data saved to DB',
        'data' => $request->all()
    ]);
});
