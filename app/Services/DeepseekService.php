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
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->apiKey,
            'Content-Type' => 'application/json',
        ])->post($this->endpoint, [
            'model' => 'deepseek-chat', // or 'deepseek-reasoner' for deeper logic
            'messages' => [
                ['role' => 'system', 'content' => 'You are a helpful school assistant.'],
                ['role' => 'user', 'content' => $prompt]
            ],
            'stream' => false
        ]);

        return $response->json()['choices'][0]['message']['content'] ?? 'No response from DeepSeek.';
    }

}
