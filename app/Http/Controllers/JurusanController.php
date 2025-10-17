<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;

class JurusanController extends Controller
{
    public function index()
    {
        $jurusans = Jurusan::all()->map(function ($jurusan) {
            $jurusan->jurusan = html_entity_decode($jurusan->jurusan);
            return $jurusan;
        });
        return view('jurusan', compact('jurusans'));
    }
}
