<?php
namespace App\Http\Controllers;

use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{
    public function getChartData()
    {
        $data = Pendaftaran::orderBy('tahun')->get();

        return response()->json([
            'labels'    => $data->pluck('tahun'),
            'pendaftar' => $data->pluck('jumlah_pendaftar'),
            'diterima'  => $data->pluck('jumlah_diterima'),
        ]);
    }
}
