<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\HuggingfaceService;

class ChatbotController extends Controller
{
    protected $chatbot;

    public function __construct(HuggingfaceService $chatbot)
    {
        $this->chatbot = $chatbot;
    }

    public function index()
    {
        return view('chatbot');
    }

    public function ask(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:255',
        ]);

        $reply = $this->chatbot->ask($request->message);

        return response()->json([
            'reply' => $reply,
        ]);
    }
}
