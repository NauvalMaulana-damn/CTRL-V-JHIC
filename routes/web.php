<?php

use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\EkskulController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/ekstrakurikuler', [EkskulController::class, 'index']);

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/prestasi', function () {
    return view('prestasi');
});
Route::get('/jurusan', function () {
    return view('jurusan');
});

Route::get('/alumni', function () {
    return view('alumni');
});

// Chatbot Routes
Route::get('/chat', [ChatbotController::class, 'index'])->name('chat.index');
Route::post('/chat/ask', [ChatbotController::class, 'ask'])->name('chat.ask');
