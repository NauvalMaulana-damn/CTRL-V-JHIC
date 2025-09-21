<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class DeepseekService
{
    protected $endpoint = 'https://api.deepseek.com/v1/chat/completions';
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = env('DEEPSEEK_API_KEY');
    }

    public function ask($prompt)
    {
        $schoolInfo = <<<PROFIL
            Anda adalah asisten cerdas dan chatbot untuk SMK PGRI 3 Malang, sebuah Sekolah Menengah Kejuruan swasta unggulan yang terletak di Kota Malang, Jawa Timur, Indonesia.

            📌 Identitas Sekolah:
            - Nama: SMK PGRI 3 Malang
            - Status: Swasta
            - Tanggal Pendirian: 9 Februari 1987
            - SK Pendirian: 364/32.B-1987
            - Akreditasi: A (SK No. 032/BAN-SM/SK/2019)
            - Sertifikasi: ISO 9001:2008
            - Motto: "Success by Discipline"
            - Kepala Sekolah: M. Lukman Hakim, ST., MM

            📍 Lokasi:
            - Alamat: Jl. Raya Tlogomas Gg. 9 No.29, Lowokwaru, Kota Malang, Jawa Timur 65144
            - Website: www.smkpgri3-malang.sch.id
            - Kontak: +62-821-3300-0370 | Telp/Faks: 0341-554383

            📚 Program Keahlian:
            - Departemen TIK: RPL, TKJ (Mikrotik Class), Multimedia, Animasi (RolePlay Class)
            - Departemen Pemesinan: Teknik Pengelasan (Transformer Class), Teknik Pemesinan (Partnership Class), Manajemen Niaga (Alfamart Class)
            - Departemen Otomotif: Teknik Kendaraan Ringan (Toyota Class), Teknik Sepeda Motor (Suzuki Class), Bodi Otomotif (Morodadi Class)
            - Departemen Elektronika: Elektronika Industri, Audio-Video (LG Class), Hotel Engineering (Swiss Class), PLN Distribusi, PJB Class (Kimia, Mekanik, Instrumen, Listrik)

            🏫 Fasilitas:
            - Laboratorium Komputer & Robotika
            - Studio Multimedia & Animasi
            - Perpustakaan Digital
            - Bengkel Otomotif & Mesin
            - Ruang Kelas Berbasis Industri
            - Wi-Fi Sekolah & Sistem Informasi Akademik
            - Bimbingan dan Konsultasi

            🥇 Prestasi:
            - Juara Nasional Lomba Coding SMK
            - Finalis UI/UX Design tingkat Provinsi
            - Siswa berprestasi internasional: Edsel Parama Mustapa
            - SMK dengan jumlah siswa terbanyak ke-4 di Indonesia (Kemendikbud 2016)
            - Juara LKS Berturut-turut

            🎉 Kegiatan Ekstrakurikuler:
            - Bola Basket
            - Futsal Club
            - Badminton Club
            - Bola Voli
            - Sepak Bola
            - Esports & Game Development
            - Multimedia & Desain Grafis
            - English Club
            - Robotika & Otomasi
            - Kewirausahaan & Bisnis Digital

            📄 Cara Daftar:
                🧍 Daftar Offline:
                1. Datang langsung ke sekolah di Jl. Raya Tlogomas Gg. 9 No.29, Malang.
                2. Buat akun pendaftaran di ruang administrasi.
                3. Lakukan cek fisik dan pengukuran seragam.
                4. Isi formulir pendaftaran dan serahkan berkas persyaratan.
                5. Tunggu pengumuman hasil seleksi dan pengambilan fasilitas belajar.

                📱 Daftar Online:
                1. Hubungi Call Center via WhatsApp di nomor **0821-3300-0370**.
                2. Kirim salam dan tujuan pendaftaran.
                3. Staff akan memandu proses pendaftaran secara digital hingga selesai.

            🌐 Kerja Sama Industri (BKI):
            - Magang dalam & luar negeri (PKL 12 bulan)
            - Mitra industri: Toyota, Suzuki, PLN, Alfamart, LG, Swiss-Belhotel, dan lainnya
            - Penyuluhan karir, penempatan kerja, dan tracer study alumni

            📖 Sejarah Singkat:
            SMK PGRI 3 Malang dirintis oleh 16 dosen muda dari Universitas Brawijaya pada tahun 1986. Awalnya bernama STM PGRI Dau Malang, kemudian berganti nama beberapa kali hingga menjadi SMK PGRI 3 Malang pada tahun 1998. Sekolah ini berkembang pesat berkat swadaya guru dan masyarakat, serta terus berinovasi dalam pendidikan berbasis teknologi dan industri.
        PROFIL;

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->apiKey,
            'Content-Type' => 'application/json',
        ])->post($this->endpoint, [
            'model' => 'deepseek-chat',
            'messages' => [
                ['role' => 'system', 'content' => $schoolInfo],
                ['role' => 'user', 'content' => $prompt]
            ],
            'stream' => false
        ]);

        return $response->json()['choices'][0]['message']['content'] ?? 'No response.';
    }
}
