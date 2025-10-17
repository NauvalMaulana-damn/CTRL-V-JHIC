<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Prestasi;

class PrestasiSeeder extends Seeder
{
    public function run()
    {
        $prestasis = [
            [
                'nama' => 'Syahril Faisal Ramadani',
                'subjudul' => 'Juara 1 LKS DikMen Jatim 33 - Industrial Control',
                'gambar' => 'storage/prestasi/indust-cont.jpg'
            ],
            [
                'nama' => 'Yohan Aldi Pratama',
                'subjudul' => 'Juara 1 LKS Jatim 32 - Electronics',
                'gambar' => 'storage/prestasi/electronics.jpg'
            ],
            [
                'nama' => 'Azriel & Celvin',
                'subjudul' => 'Juara 1 LKS Jatim 32 - Robot Manufacturing System',
                'gambar' => 'storage/prestasi/robot manufac.png'
            ],
            [
                'nama' => 'Arif Kurniawan',
                'subjudul' => 'Juara 2 LKS Jatim 32 - Web Technology',
                'gambar' => 'storage/prestasi/webtechn.jpeg'
            ],
            [
                'nama' => 'Tegar Reyhan',
                'subjudul' => 'Juara 1 LKS Jatim 32 - Car Painting',
                'gambar' => 'storage/prestasi/car paint.jpeg'
            ],
            [
                'nama' => 'Kayana Indrasta',
                'subjudul' => 'Juara 1 Lomba Sistem Informasi Festival 2024 - UI/UX Desain',
                'gambar' => 'storage/prestasi/uiux.jpg'
            ],
            [
                'nama' => 'Edsel Param Mustapa',
                'subjudul' => 'Juara 1 LKS Jatim 32 - IT Software Solution',
                'gambar' => 'storage/prestasi/it software.png'
            ],
            [
                'nama' => 'Iza Aska',
                'subjudul' => 'Juara 1 LKS Jatim 32 - Prototype Modeling',
                'gambar' => 'storage/prestasi/prototype model.png'
            ],
            [
                'nama' => 'Ayu Dewi',
                'subjudul' => 'Juara 3 LKS Jatim 32 - Marketing Online',
                'gambar' => 'storage/prestasi/marketing.jpeg'
            ],
            [
                'nama' => 'Rafif & Novaldi',
                'subjudul' => 'Juara 1 LKS DikMen Jatim 33 - Robot Manufacturing System',
                'gambar' => 'storage/prestasi/manufac system.jpg'
            ],
        ];

        foreach ($prestasis as $prestasi) {
            Prestasi::create($prestasi);
        }
    }
}
