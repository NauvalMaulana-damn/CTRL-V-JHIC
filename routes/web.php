<?php

use App\Http\Controllers\Admin\AlumniController as AdminAlumniController;
use App\Http\Controllers\Admin\BeritaController as AdminBeritaController;
use App\Http\Controllers\Admin\VisitorController as AdminVisitorController;
use App\Http\Controllers\Admin\PrestasiController as AdminPrestasiController;
use App\Http\Controllers\EkskulController;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\PrestasiController;
use Illuminate\Support\Facades\Route;

Route::middleware('trackvisitor')->group(function () {
    Route::view('/', 'landing');
    Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
    Route::view('/profil', 'profil');
    Route::get('/prestasi', [PrestasiController::class, 'index'])->name('prestasi.index');
    Route::view('/jurusan', 'jurusan');
    Route::get('/ekstrakurikuler', [EkskulController::class, 'index']);
    Route::get('alumni', [AlumniController::class, 'index'])->name('alumni.index');
    Route::view('/pendaftaran', 'pendaftaran');
});

// Chatbot
Route::get('/chat', [ChatbotController::class, 'index'])->name('chat.index');
Route::post('/chat/ask', [ChatbotController::class, 'ask'])->name('chat.ask');

// Admin area (prefix + name 'admin.')
Route::prefix('admin')->name('admin.')->middleware(['admin'])->group(function () {
    Route::get('/dashboard', [AdminVisitorController::class, 'dashboard'])->name('dashboard');
    Route::get('/api/visitors', [AdminVisitorController::class, 'apiData'])->name('visitors.api');

    Route::resource('berita', AdminBeritaController::class);
    Route::resource('prestasi', AdminPrestasiController::class);
    Route::view('/jurusan', 'admin.jurusan')->name('jurusan');
    Route::resource('alumni', AdminAlumniController::class);
});

// Login
Route::get('/admin', [LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin', [LoginController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');
