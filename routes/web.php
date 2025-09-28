<?php

use App\Http\Controllers\EkskulController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/ekskul', [EkskulController::class, 'index']);

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/prestasi', function () {
    return view('prestasi');
});

Route::get('/alumni', function () {
    return view('alumni');
});
