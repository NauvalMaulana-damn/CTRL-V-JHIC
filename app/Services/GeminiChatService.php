<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\File;

class GeminiChatService
{
    protected string $endpoint;
    protected string $apiKey;

    public function __construct()
    {
        $this->apiKey = env('GEMINI_API_KEY');
        $this->endpoint = env('GEMINI_ENDPOINT') . env('GEMINI_API_KEY');
    }

    public function ask(string $prompt): string
    {
        // Gabungkan semua data JSON sekolah
        $context = '';
        foreach (File::files(storage_path('app/data')) as $file) {
            $context .= File::get($file->getPathname()) . "\n";
        }

        $systemPrompt = "
            Kamu adalah chatbot sekolah SMK PGRI 3 Malang bernama *Skaribot*.
            Kamu sangat ahli dalam mengolah dan memberikan data yang tersedia.
            🎯 **Tujuan:**
            Jawablah semua pertanyaan dengan sopan, jelas, dan menarik, menggunakan format seperti AI profesional.

            🧩 **Gaya Penulisan:**
            - Gunakan sapaan ramah di awal seperti 'Halo!' atau 'Hai, calon siswa-siswi SMK PGRI 3 Malang!'
            - Susun langkah-langkah dalam bentuk daftar bernomor (1️⃣, 2️⃣, dst)
            - Setiap langkah pisahkan dengan baris baru agar rapi
            - Gunakan **bold** untuk istilah penting
            - Akhiri jawaban dengan kalimat positif dan emoji sekolah seperti 🏫✨
            - Jangan tampilkan JSON atau data mentah

            📚 **Data Sekolah:**
            $context
            ";

        // Kirim permintaan ke Gemini 2.5 Flash
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->post($this->endpoint, [
            'contents' => [
                [
                    'role' => 'user',
                    'parts' => [
                        ['text' => $systemPrompt . "\n\nPertanyaan pengguna:\n" . $prompt]
                    ]
                ]
            ]
        ]);

        // Ambil hasilnya
        if ($response->successful()) {
            $data = $response->json();
            return $data['candidates'][0]['content']['parts'][0]['text'] ?? "Maaf, saya tidak tahu jawabannya.";
        }

        return "Terjadi kesalahan: " . $response->body();
    }
}
