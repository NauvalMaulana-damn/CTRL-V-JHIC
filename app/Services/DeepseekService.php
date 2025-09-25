<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class DeepseekService
{
    protected string $endpoint = 'https://api.deepseek.com/v1/chat/completions';
    protected string $apiKey;

    public function __construct()
    {
        $this->apiKey = env('DEEPSEEK_API_KEY');
    }

    public function ask(string $prompt): string
    {
        $schoolInfo = collect([
            'identitas',
            'lokasi',
            'program_keahlian',
            'fasilitas',
            'prestasi',
            'ekstrakurikuler',
            'cara_daftar',
            'kerjasama_industri',
            'alumni',
            'sejarah'
        ])->mapWithKeys(function ($key) {
            $path = "data/{$key}.json";
            return [$key => json_decode(Storage::get($path), true)];
        })->toArray();

        // Send to DeepSeek
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->apiKey,
            'Content-Type' => 'application/json',
        ])->post($this->endpoint, [
            'model' => 'deepseek-chat',
            'messages' => [
                ['role' => 'system', 'content' => json_encode($schoolInfo, JSON_UNESCAPED_UNICODE)],
                ['role' => 'user', 'content' => $prompt]
            ],
            'stream' => false
        ]);

        return $response->json()['choices'][0]['message']['content'] ?? 'Tidak ada respons.';
    }
}
