<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class WhatsAppService
{
    protected $accessToken;
    protected $phoneNumberId;

    public function __construct()
    {
        $this->accessToken = env('WHATSAPP_CLOUD_TOKEN'); 
        $this->phoneNumberId = env('WHATSAPP_PHONE_NUMBER_ID'); 
    }

    public function sendMessage($to, $message)
    {
        try {
            $url = "https://graph.facebook.com/v19.0/{$this->phoneNumberId}/messages";

            $response = Http::withToken($this->accessToken)
                ->post($url, [
                    "messaging_product" => "whatsapp",
                    "to" => $to,
                    "type" => "text",
                    "text" => ["body" => $message],
                ]);

            if ($response->successful()) {
                return $response->json();
            }

            Log::error("WhatsApp Cloud API failed: " . $response->body());
            return false;

        } catch (\Exception $e) {
            Log::error("WhatsApp message exception: " . $e->getMessage());
            return false;
        }
    }
}
