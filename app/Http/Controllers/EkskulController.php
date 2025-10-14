<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ekskul;

class EkskulController extends Controller
{
    public function index()
{
    $ekskuls = Ekskul::latest()->paginate(9);
    return view('ekskul', compact('ekskuls'));
}
}
