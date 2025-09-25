<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DeepseekService;

class ChatController extends Controller
{
    public function send(Request $request, DeepseekService $deepseek)
    {
        $userMessage = $request->input('message');

        // Retrieve existing chat history or start fresh
        $messages = session('chat', []);
        $messages[] = ['sender' => 'You', 'text' => $userMessage];

        // Ask DeepSeek and handle errors gracefully
        try {
            $reply = $deepseek->ask("User asked: " . $userMessage);
        } catch (\Exception $e) {
            $reply = "⚠️ Sorry, something went wrong with DeepSeek: " . $e->getMessage();
        }

        $messages[] = ['sender' => 'Bot', 'text' => $reply];

        // Save updated chat history
        session()->put('chat', $messages);

        return redirect()->route('chat.index');
    }
}
