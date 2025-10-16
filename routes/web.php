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

// Public routes dengan tracking visitor
Route::middleware('trackvisitor')->group(function () {
    Route::get('/', [LandingController::class, 'index'])->name('landing.index');
    Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
    Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index');
    Route::get('/prestasi', [PrestasiController::class, 'index'])->name('prestasi.index');
    Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan.index');
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
    Route::patch('marquee/{marquee}/toggle-status', [AdminMarqueeController::class, 'toggleStatus'])->name('marquee.toggle-status');
    Route::resource('berita', AdminBeritaController::class);
    Route::resource('profil', AdminProfilController::class);
    Route::resource('jurusan', AdminJurusanController::class);
    Route::resource('ekskul', AdminEkskulController::class);
    Route::resource('prestasi', AdminPrestasiController::class);
    Route::resource('alumni', AdminAlumniController::class);

    Route::resource('pendaftaran', AdminPendaftaranController::class);

    // Logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // Activity Logs & User Management - Hanya SUPERADMIN
    Route::middleware('superadmin')->group(function () {
        Route::get('/logs', [ActivityLogController::class, 'index'])->name('logs.index');
        Route::get('/logs/filter', [ActivityLogController::class, 'filter'])->name('logs.filter');
        Route::get('/logs/{log}', [ActivityLogController::class, 'show'])->name('logs.show');
        Route::delete('logs/{log}', [ActivityLogController::class, 'destroy'])->name('logs.destroy');
        Route::delete('logs/filter/clear/old', [ActivityLogController::class, 'clearOldLogs'])->name('logs.clear');

        // User Management
        Route::resource('users', AdminUserController::class);
        Route::patch('/users/{user}/toggle-status', [AdminUserController::class, 'toggleStatus'])->name('users.toggle-status');
    });
});
