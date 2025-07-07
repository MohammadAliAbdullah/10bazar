<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Faq;

class ChatController extends Controller
{
    public function handle(Request $request)
    {
        $msg = strtolower(trim($request->message));
        $msg = preg_replace('/[^a-z0-9\s]/i', '', $msg); // Clean input

        // 👋 Static reply to greetings
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
        if (!$faq) {
            $faq = Faq::search($msg)->first();
        }

        if ($faq) {
            return response()->json(['reply' => $faq->content]);
        } else {
            // 🤖 Always use OpenAI for other questions
            return response()->json(['reply' => 'Please contact our customer support team.']);
            // return response()->json(['reply' => $this->askAI($msg)]);
        }
    }

    private function askAI($question)
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
            ])->post('https://api.openai.com/v1/chat/completions', [
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    ['role' => 'system', 'content' => 'You are a helpful customer support assistant for an eCommerce website. Answer user queries simply and clearly.'],
                    ['role' => 'user', 'content' => $question],
                ],
            ]);
            $data = $response->json();

            if (isset($data['error']['message'])) {
                return $data['error']['message'];  // 🔥 Echo just the error message
            } else {
                if (isset($json['choices'][0]['message']['content'])) {
                    return $json['choices'][0]['message']['content'];
                } else {
                    return "Sorry, I didn't understand that. Can you please rephrase?";
                }
            }
        } catch (\Exception $e) {
            return "Something went wrong while talking to the AI. Please try again later.";
        }
    }
}
