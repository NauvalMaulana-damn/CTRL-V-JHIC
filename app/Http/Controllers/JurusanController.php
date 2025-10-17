<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;
use App\Models\JurusanStatistik;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


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

    public function incrementStats(Request $request)
    {
        // Debug: log request
        Log::info('Increment Stats Request:', $request->all());

        $request->validate([
            'departemen' => 'required|in:elektro,otomotif,pemesinan,tik',
            'type' => 'required|in:click,view'
        ]);

        try {
            $today = now()->format('Y-m-d');
            $departemen = $request->departemen;
            $type = $request->type;

            // Gunakan model atau query builder langsung
            $existing = DB::table('jurusan_statistiks')
                ->where('tanggal', $today)
                ->where('departemen', $departemen)
                ->where('type', $type)
                ->first();

            if ($existing) {
                DB::table('jurusan_statistiks')
                    ->where('id', $existing->id)
                    ->update(['jumlah' => $existing->jumlah + 1]);
            } else {
                DB::table('jurusan_statistiks')->insert([
                    'tanggal' => $today,
                    'departemen' => $departemen,
                    'type' => $type,
                    'jumlah' => 1,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }

            return response()->json([
                'success' => true,
                'message' => 'Statistik berhasil diupdate'
            ]);

        } catch (\Exception $e) {
            Log::error('Error incrementStats: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan statistik'
            ], 500);
        }
    }

    public function getStats(Request $request)
    {
        try {
            $stats = DB::table('jurusan_statistiks')
                ->where('type', 'click')
                ->select('departemen', DB::raw('SUM(jumlah) as total'))
                ->groupBy('departemen')
                ->get()
                ->pluck('total', 'departemen')
                ->toArray();

            // Pastikan semua departemen ada
            $defaultStats = [
                'elektro' => 0,
                'otomotif' => 0,
                'pemesinan' => 0,
                'tik' => 0
            ];

            $mergedStats = array_merge($defaultStats, $stats);

            return response()->json([
                'success' => true,
                'data' => $mergedStats
            ]);

        } catch (\Exception $e) {
            Log::error('Error getStats: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengambil statistik'
            ], 500);
        }
    }
}
