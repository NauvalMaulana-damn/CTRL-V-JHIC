<?php

use App\Http\Controllers\Admin\VisitorController;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\EkskulController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::middleware('trackvisitor')->group(function () {
    Route::view('/', 'landing');
    Route::view('/berita', 'berita');
    Route::view('/profil', 'profil');
    Route::view('/prestasi', 'prestasi');
    Route::view('/jurusan', 'jurusan');
    Route::get('/ekstrakurikuler', [EkskulController::class, 'index']);
    Route::view('/alumni', 'alumni');
    Route::view('/pendaftaran', 'pendaftaran');
});

// Chatbot
Route::get('/chat', [ChatbotController::class, 'index'])->name('chat.index');
Route::post('/chat/ask', [ChatbotController::class, 'ask'])->name('chat.ask');

// Admin area
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [VisitorController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/api/visitors', [VisitorController::class, 'apiData'])->name('admin.visitors.api');

    Route::view('/berita', 'admin.berita')->name('admin.berita');
    Route::view('/prestasi', 'admin.prestasi')->name('admin.prestasi');
    Route::view('/jurusan', 'admin.jurusan')->name('admin.jurusan');
    Route::view('/alumni', 'admin.alumni')->name('admin.alumni');
});

// Login
Route::get('/admin', [LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin', [LoginController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');
