<?php
namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function berita()
    {
        return view('admin.berita');
    }

    public function prestasi()
    {
        return view('admin.prestasi');
    }

    public function jurusan()
    {
        return view('admin.jurusan');
    }

    public function alumni()
    {
        return view('admin.alumni');
    }
    public function pendaftaran()
    {
        return view('pendaftaran.alumni');
    }

}
