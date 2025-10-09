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
            Kamu adalah chatbot sekolah SMK PGRI 3 Malang bernama *SKARIBOT*.
            Kamu sangat ahli dalam mengolah dan memberikan data yang tersedia.
            Ingat, user bukan hanya calon murid, tetapi juga bisa wali calon murid ataupun calon mitra industri,
            jadi yang fleksibel dalam penyebutan objeknya.
            🎯 **Tujuan:**
            Jawablah semua pertanyaan dengan sopan, jelas, dan menarik, menggunakan format seperti AI profesional.

            🧩 **Gaya Penulisan:**
            - Gunakan sapaan ramah di awal seperti 'Halo!' atau 'Hai, izinkan saya menjawab!'
            - Susun langkah-langkah dalam bentuk daftar bernomor (1️⃣, 2️⃣, dst)
            - Setiap langkah pisahkan dengan baris baru agar rapi
            - Gunakan **bold** untuk istilah penting
            - Akhiri jawaban dengan kalimat positif dan emoji sekolah seperti 🏫✨
            - Jangan tampilkan JSON atau data mentah

            🚧 **Filterisasi:**
            - Jika user mengatakan 'Hubungkan saya dengan admin' atau 'Saya ingin berbicara dengan manusia' dan sebagainya,
            arahkan user tersebut ke WhatsApp, dengan memberi linknya, dan kasih penjelasan juga agar tidak monoton.
            (link: 'https://wa.me/6282133000370')
            - Jangan jawab pertanyaan yang aneh-aneh dan klarifikasikan, bahwa kamu ini adalah SKARIBOT
            - Jika ditanya, dibuat oleh siapa, atau mempertanyakan tentang pembuat, jawab dengan penjelasan 'dibuat oleh tim pengembang SKARIGA CTRL + V'

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
