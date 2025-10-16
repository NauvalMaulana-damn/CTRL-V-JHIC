<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profil;
use App\Models\Marquee;

class ProfilController extends Controller
{
    public function index()
    {
        // Ambil data profil pertama
        $profil = Profil::first();

        // Jika tidak ada data profil, redirect atau handle error
        if (!$profil) {
            abort(404, 'Profil tidak ditemukan');
        }

        // Helper function untuk mendapatkan path gambar
        $getImagePath = function ($image, $default = 'default.svg') {
            return $image && $image !== 'default.svg'
                ? asset('storage/' . $image)
                : asset('images/' . $default);
        };

        return view('profil', compact('profil', 'getImagePath'));
    }
}
