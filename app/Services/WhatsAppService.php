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

    public function sendProfileApprovedTemplate($to, $customerName)
    {
        try {
            $url = "https://graph.facebook.com/v22.0/{$this->phoneNumberId}/messages";


            $payload = [
                "messaging_product" => "whatsapp",
                "to" => $to,
                "type" => "template",
                "template" => [
                    "name" => "jaspers_market_plain_text_v1", // approved template
                    "language" => ["code" => "en_US"]
                    // No components, because template has 0 placeholders
                ]
            ];


            $response = Http::withToken($this->accessToken)->post($url, $payload);

            if ($response->successful()) {
                return $response->json();
            }

            Log::error("WhatsApp Cloud API failed: " . $response->body());
            return false;

        } catch (\Exception $e) {
            Log::error("WhatsApp template message exception: " . $e->getMessage());
            return false;
        }
    }


}
