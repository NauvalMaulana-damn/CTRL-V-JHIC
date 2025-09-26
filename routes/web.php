<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/prestasi', function () {
    return view('prestasi');
});

Route::get('/alumni', function () {
    return view('alumni');
});
