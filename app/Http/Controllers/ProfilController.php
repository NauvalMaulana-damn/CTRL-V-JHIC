<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    public function index()
    {
        // Ambil data profil dengan relasi misi
        $profil = Profil::with('misis')->first();

        // Jika tidak ada data, redirect atau tampilkan default
        if (!$profil) {
            $profil = $this->getDefaultProfilData();
        }

        // Kirim data ke view dengan helper methods
        return view('profil', [
            'profil' => $profil,
            'getImagePath' => fn($image, $default = 'default.svg') => $this->getImagePath($image, $default)
        ]);
    }

    /**
     * Helper method untuk mendapatkan path gambar
     */
    private function getImagePath($image, $default = 'default.svg')
    {
        if ($image && $image !== 'default.svg') {
            // Cek di storage public
            if (Storage::disk('public')->exists($image)) {
                return asset('storage/' . $image);
            }
            // Cek di assets
            if (file_exists(public_path('assets/' . $image))) {
                return asset('assets/' . $image);
            }
            // Cek di root public
            if (file_exists(public_path($image))) {
                return asset($image);
            }
        }
        return asset('images/' . $default);
    }

    /**
     * Data default jika tidak ada di database
     */
    private function getDefaultProfilData()
    {
        return (object) [
            'heroImage' => 'depansekul.jpg',
            'heroTitle' => 'SKARIGA!',

            'profilImage1' => 'gedung-seluruh.jpg',
            'profilImage2' => 'foto-depanadmin.JPG',
            'profilImage3' => 'depan-alfa.webp',
            'profilDesc' => 'SMK PGRI 3 Malang dirintis sejak tahun 1986 atas prakarsa sebanyak 16 dosen dari Universitas Brawijaya, Kota Malang. Pada bulan September 1986, SMK PGRI Malang didirikan dengan nama STM PGRI Dau Malang. Pengelolaan dilakukan oleh Yayasan PGRI Kecamatan DAU Kabupaten Malang. Lokasi pembelajaran awalnya dilakukan di SD Negeri Tlogomas 2 Malang yang berlokasi di wilayah Kecamatan Dau, Kabupaten Malang.',

            'visiImage' => 'bp.Luqman_kepsek-removebg-preview.png',
            'visiImageName' => 'Moch. Lukman Hakim, S.T, M.M. - Kepala SMK PGRI 3 Malang',
            'visiDesc' => 'Menjadi SMK yang unggul dalam prestasi dengan dilandasi Iman & Taqwa serta menghasilkan tamatan yang mampu bersaing di tingkat Nasional maupun Internasional.',

            'youtubeSrc' => 'https://www.youtube.com/embed/FAwdUR9SFRU',

            'misis' => collect([
                (object) [
                    'misiImage' => 'default.svg',
                    'misiTitle' => 'Unggul & Beriman',
                    'misiDesc' => 'Menjadi SMK yang unggul dalam prestasi dengan dilandasi Iman & Taqwa serta menghasilkan tamatan yang mampu bersaing di tingkat Nasional maupun Internasional.',
                    'misiColor' => 'BLUE'
                ],
                (object) [
                    'misiImage' => 'default.svg',
                    'misiTitle' => 'Akreditasi A',
                    'misiDesc' => 'Mempertahankan dan meningkatkan akreditasi A yang telah ditetapkan oleh BAN-PDM dengan sk 1857/BAN-SM/SK/2022.',
                    'misiColor' => 'GREEN'
                ],
                (object) [
                    'misiImage' => 'default.svg',
                    'misiTitle' => 'Success By Discipline',
                    'misiDesc' => 'Dengan motto tersebut SMK PGRI 3 MALANG mampu menghasilkan lulusan yang sukses dan berkarakter disiplin.',
                    'misiColor' => 'ORANGE'
                ],
                (object) [
                    'misiImage' => 'default.svg',
                    'misiTitle' => 'Lulus Siap Kerja',
                    'misiDesc' => 'Menghasilkan lulusan yang kompeten dan siap bekerja di berbagai bidang industri dengan skill yang relevan.',
                    'misiColor' => 'RED'
                ]
            ])
        ];
    }
}
