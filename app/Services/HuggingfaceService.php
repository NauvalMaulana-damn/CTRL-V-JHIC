<?php

namespace App\Services;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class HuggingfaceService
{
    protected array $schoolData = [];

    public function __construct()
    {
        $dataPath = storage_path('app/data');
        $jsonFiles = File::files($dataPath);

        foreach ($jsonFiles as $file) {
            $key = pathinfo($file->getFilename(), PATHINFO_FILENAME);
            $this->schoolData[$key] = json_decode(File::get($file->getPathname()), true);
        }
    }

    public function ask(string $message): string
    {
        $message = strtolower($message);

        if ($response = $this->checkIdentitas($message)) {
            return $response;
        }
        if ($response = $this->checkLokasi($message)) {
            return $response;
        }
        if ($response = $this->checkProgramKeahlian($message)) {
            return $response;
        }
        if ($response = $this->checkFasilitas($message)) {
            return $response;
        }
        if ($response = $this->checkPrestasi($message)) {
            return $response;
        }
        if ($response = $this->checkKerjasamaIndustri($message)) {
            return $response;
        }
        if ($response = $this->checkEkstrakurikuler($message)) {
            return $response;
        }
        if ($response = $this->checkSejarah($message)) {
            return $response;
        }
        if ($response = $this->checkAlumni($message)) {
            return $response;
        }
        if ($response = $this->checkCaraDaftar($message)) {
            return $response;
        }

        // === ❓ Default jika tidak cocok ===
        return "Maaf, saya belum punya informasi tentang itu 😅. Coba tanyakan hal lain seperti 'prestasi', 'jurusan', 'fasilitas', atau 'cara daftar'.";
    }

    private function checkIdentitas(string $message): ?string
    {
        if (Str::contains($message, ['identitas', 'nama sekolah', 'kepala sekolah', 'motto'])) {
            $i = $this->schoolData['identitas'];
            return "🏫 *{$i['nama']}*\nStatus: {$i['status']}\nAkreditasi: {$i['akreditasi']}\nKepala Sekolah: {$i['kepala_sekolah']}\nMotto: {$i['motto']}";
        }
        return null;
    }

    private function checkLokasi(string $message): ?string
    {
        if (Str::contains($message, ['alamat', 'lokasi', 'dimana', 'kontak'])) {
            $l = $this->schoolData['lokasi'];
            return "📍 Alamat: {$l['alamat']}\n🌐 Website: {$l['website']}\n📞 WhatsApp: {$l['kontak']['whatsapp']}\n☎️ Telepon/Faks: {$l['kontak']['telepon_faks']}";
        }
        return null;
    }

    private function checkProgramKeahlian(string $message): ?string
    {
        if (Str::contains($message, ['jurusan', 'program', 'keahlian'])) {
            $p = $this->schoolData['program_keahlian'];
            $text = "📘 *Program Keahlian di SMK PGRI 3 Malang:*\n";
            foreach ($p as $dept => $list) {
                $text .= "\n• " . Str::headline(str_replace('departemen_', '', $dept)) . ":\n   - " . implode("\n   - ", $list);
            }
            return $text;
        }
        return null;
    }

    private function checkFasilitas(string $message): ?string
    {
        if (Str::contains($message, ['fasilitas', 'sarana', 'prasarana'])) {
            $f = $this->schoolData['fasilitas'];
            return "🏢 *Fasilitas Sekolah:*\n- " . implode("\n- ", $f);
        }
        return null;
    }

    private function checkPrestasi(string $message): ?string
    {
        if (Str::contains($message, ['prestasi', 'juara', 'penghargaan'])) {
            $p = $this->schoolData['prestasi'];
            return "🏆 *Prestasi Sekolah:*\n- " . implode("\n- ", $p);
        }
        return null;
    }

    private function checkKerjasamaIndustri(string $message): ?string
    {
        if (Str::contains($message, ['industri', 'kerjasama', 'pkl', 'magang', 'mitra'])) {
            $k = $this->schoolData['kerjasama_industri'];
            $mitra = implode(", ", $k['mitra']);
            $layanan = implode(", ", $k['layanan']);
            return "🤝 *Kerjasama Industri:*\nMitra: $mitra\nMagang: {$k['magang']}\nLayanan: $layanan";
        }
        return null;
    }

    private function checkEkstrakurikuler(string $message): ?string
    {
        if (Str::contains($message, ['ekstrakurikuler', 'ekskul', 'kegiatan siswa'])) {
            $e = $this->schoolData['ekstrakurikuler'];
            return "🎯 *Kegiatan Ekstrakurikuler:*\n- " . implode("\n- ", $e);
        }
        return null;
    }

    private function checkSejarah(string $message): ?string
    {
        if (Str::contains($message, ['sejarah', 'berdiri', 'asal mula'])) {
            $s = $this->schoolData['sejarah'];
            return "📖 *Sejarah Singkat:*\n{$s['sejarah']}";
        }
        return null;
    }

    private function checkAlumni(string $message): ?string
    {
        if (Str::contains($message, ['alumni', 'lulusan'])) {
            $a = $this->schoolData['alumni'];
            $text = "🎓 *Beberapa Alumni Berprestasi:*\n";
            foreach ($a as $alum) {
                $text .= "- {$alum['nama']} (Angkatan {$alum['angkatan']})";
                if (isset($alum['pekerjaan'])) {
                    $text .= " — {$alum['pekerjaan']}";
                }
                if (isset($alum['prestasi'])) {
                    $text .= " — {$alum['prestasi']}";
                }
                $text .= "\n";
            }
            return trim($text);
        }
        return null;
    }

    private function checkCaraDaftar(string $message): ?string
    {
        if (Str::contains($message, ['daftar', 'pendaftaran', 'registrasi'])) {
            $d = $this->schoolData['cara_daftar'];

            if (Str::contains($message, ['offline'])) {
                return "📋 *Langkah Pendaftaran Offline:*\n- " . implode("\n- ", $d['offline']);
            }
            if (Str::contains($message, ['online'])) {
                return "💻 *Langkah Pendaftaran Online:*\n- " . implode("\n- ", $d['online']);
            }
            return "📋 Pendaftaran tersedia secara *offline* dan *online*. Ketik 'cara daftar offline' atau 'cara daftar online' untuk detail.";
        }
        return null;
    }
}
