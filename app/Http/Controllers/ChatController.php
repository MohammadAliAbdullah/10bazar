<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;
use Illuminate\Support\Facades\Http;

class ChatController extends Controller
{
    public function handle(Request $request)
    {
        $msg = strtolower(trim($request->message));
        $msg = preg_replace('/[^a-z0-9\s]/i', '', $msg); // Clean input

        // 👋 Greeting messages
        if (preg_match('/\b(assalamu|salaam|salam)\b/i', $msg)) {
            return response()->json(['reply' => 'Wa Alaikum Assalam! How can I help you today?']);
        }
        if (preg_match('/\b(hello|hi|hey|yo|greetings|peace be upon you|good (morning|afternoon|evening))\b/i', $msg)) {
            return response()->json(['reply' => 'Assalamu Alaikum wa Rahmatullahi wa Barakatuh! How can I help you today?']);
        }

        // 🔍 Search in FAQs
        $faq = Faq::get()->first(function ($faq) use ($msg) {
            similar_text(strtolower($faq->title), $msg, $percent);
            return $percent > 50;
        });

        if ($faq) {
            return response()->json(['reply' => $faq->content]);
        }

        // 🤖 OpenAI fallback
        return response()->json(['reply' => $this->askAI($msg)]);
    }

    private function askAI($question)
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
            ])->post('https://api.openai.com/v1/chat/completions', [
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    ['role' => 'system', 'content' => 'You are a helpful customer service assistant for an eCommerce website.'],
                    ['role' => 'user', 'content' => $question],
                ],
            ]);

            return $response->json()['choices'][0]['message']['content'] ?? "Sorry, I don't have an answer.";
        } catch (\Exception $e) {
            return "AI service is temporarily unavailable. Please try again later.";
        }
    }
}
