<?php

namespace App\Http\Controllers;

use App\Models\WhatsappMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WhatsappMessageController extends Controller
{
    /**
     * 📋 Show all WhatsApp messages
     */
    public function index()
    {
        $messages = WhatsappMessage::latest()->get();

        return view('dashboard.pages.whatsapp-messages.index', compact('messages'));
    }

    /**
     * 🔁 Send message again
     */
    public function sendAgain($id)
    {
        // Find the message record
        $message = WhatsappMessage::findOrFail($id);

        // Use the static number
        $staticNumber = "03422112090";

        // Convert to international format if needed
        if (str_starts_with($staticNumber, '0')) {
            $staticNumber = '+92' . substr($staticNumber, 1);
        }

        try {
            // Use the WhatsAppService template method
            app('App\Services\WhatsAppService')
                ->sendProfileApprovedTemplate($staticNumber, $message->mobile_no_name ?? $message->message);

            Log::info('WhatsApp message resent using template', [
                'message_id' => $message->id,
                'mobile' => $message->mobile_no
            ]);

            return back()->with('success', 'Message sent again successfully using template!');

        } catch (\Exception $e) {
            Log::error('Failed to resend WhatsApp template message', [
                'error' => $e->getMessage(),
                'message_id' => $message->id
            ]);

            return back()->with('error', 'Failed to send message again.');
        }
    }

}
