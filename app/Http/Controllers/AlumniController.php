<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;



class AlumniController extends Controller
{
    public function index()
    {
        $alumnis = Alumni::latest()->paginate(6);
        return view('alumni', compact('alumnis'));
    }
}
