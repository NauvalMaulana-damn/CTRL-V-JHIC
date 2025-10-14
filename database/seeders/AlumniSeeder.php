<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumni;

class AlumniSeeder extends Seeder
{
    public function run()
    {
        $alumnis = [
            [
                'name' => 'Khoko Rama Viera',
                'graduation' => 'Alumni 2018',
                'position' => 'Teknisi Mesin',
                'company' => 'Hitachi Construction Machinery Jepang',
                'description' => 'Berhasil bekerja di perusahaan konstruksi terkemuka di Jepang dengan kontrak 3 tahun.',
                'image' => 'assets/image 17.png',
                'bg_color' => 'from-[#FF885B] to-[#FF6B6B]',
                'achievements' => json_encode(['Juara 1 Lomba Kompetensi Siswa 2017', 'Sertifikasi Teknisi Internasional'])
            ],
            [
                'name' => 'Aditya Tantra',
                'graduation' => 'Alumni TKR 2018',
                'position' => 'Teknisi Otomotif',
                'company' => 'Daihatsu Motor CO.LTD Jepang',
                'description' => 'Berkarier di perusahaan otomotif ternama Jepang dengan spesialisasi mesin diesel.',
                'image' => 'assets/image 46.png',
                'bg_color' => 'from-[#FF4D4D] to-[#FF6B9D]',
                'achievements' => json_encode(['Magang di Daihatsu 2017', 'Nilai UN Tertinggi Jurusan TKR'])
            ],
            // ... tambahkan data lainnya sesuai kebutuhan
        ];

        foreach ($alumnis as $alumni) {
            Alumni::create($alumni);
        }
    }
}
