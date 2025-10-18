<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestasi;

class PrestasiController extends Controller
{
    public function index() {
        $prestasis = Prestasi::latest()->paginate(6);
        return view('prestasi', compact('prestasis'));
    }
}
