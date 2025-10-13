<?php

use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\EkskulController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/prestasi', function () {
    return view('prestasi');
});

Route::get('/jurusan', function () {
    return view('jurusan');
});

Route::get('/ekstrakurikuler', [EkskulController::class, 'index']);

Route::get('/alumni', function () {
    return view('alumni');
});

Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});

// Chatbot Routes
Route::get('/chat', [ChatbotController::class, 'index'])->name('chat.index');
Route::post('/chat/ask', [ChatbotController::class, 'ask'])->name('chat.ask');
