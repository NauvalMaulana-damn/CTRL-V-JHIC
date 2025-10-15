<?php

use App\Http\Controllers\Admin\ActivityLogController;
use App\Http\Controllers\Admin\AlumniController as AdminAlumniController;
use App\Http\Controllers\Admin\BeritaController as AdminBeritaController;
use App\Http\Controllers\Admin\EkskulController as AdminEkskulController;
use App\Http\Controllers\Admin\PrestasiController as AdminPrestasiController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VisitorController as AdminVisitorController;

use App\Http\Controllers\LandingController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\EkskulController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrestasiController;
use Illuminate\Support\Facades\Route;

// Public routes dengan tracking visitor
Route::middleware('trackvisitor')->group(function () {
    Route::get('/', [LandingController::class, 'index'])->name('landing.index');
    Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
    Route::view('/profil', 'profil');
    Route::get('/prestasi', [PrestasiController::class, 'index'])->name('prestasi.index');
    Route::view('/jurusan', 'jurusan');
    Route::get('/ekstrakurikuler', [EkskulController::class, 'index'])->name('ekskul.index');
    Route::get('/alumni', [AlumniController::class, 'index'])->name('alumni.index');
    Route::view('/pendaftaran', 'pendaftaran');
    Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');
});

// Chatbot routes
Route::get('/chat', [ChatbotController::class, 'index'])->name('chat.index');
Route::post('/chat/ask', [ChatbotController::class, 'ask'])->name('chat.ask');

// Login routes (tanpa middleware admin)
Route::get('/admin', [LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin', [LoginController::class, 'login'])->name('admin.login.post');

// Route::prefix('admin')->group(function () {
//     Route::get('/berita/{id}', [AdminBeritaController::class, 'show'])->name('admin.berita.show');
// });

// Admin area (harus login dulu)
Route::prefix('admin')->name('admin.')->middleware(['admin'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [AdminVisitorController::class, 'dashboard'])->name('dashboard');

    // Visitor API - method getVisitorData
    Route::get('/api/visitors', [AdminVisitorController::class, 'getVisitorData'])->name('visitors.api');

    // CRUD resources
    Route::resource('ekskul', AdminEkskulController::class);
    Route::resource('berita', AdminBeritaController::class);
    Route::resource('prestasi', AdminPrestasiController::class);
    Route::resource('alumni', AdminAlumniController::class);

    // Logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // Activity Logs & User Management - Hanya SUPERADMIN
    Route::middleware('superadmin')->group(function () {
        Route::get('/logs', [ActivityLogController::class, 'index'])->name('logs.index');
        Route::get('/logs/filter', [ActivityLogController::class, 'filter'])->name('logs.filter');
        Route::get('/logs/{log}', [ActivityLogController::class, 'show'])->name('logs.show');

        // User Management
        Route::resource('users', UserController::class);
        Route::patch('/users/{user}/toggle-status', [UserController::class, 'toggleStatus'])->name('users.toggle-status');
    });
});
