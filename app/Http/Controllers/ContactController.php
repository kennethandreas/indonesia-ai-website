<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
            'phone' => 'nullable|string|max:20',
        ]);

        // Store in database
        Contact::create($validated);

        // Send email notification (optional)
        try {
            Mail::raw(
                "Pesan baru dari contact form:\n\n" .
                "Nama: {$validated['name']}\n" .
                "Email: {$validated['email']}\n" .
                "Subjek: {$validated['subject']}\n" .
                "Pesan: {$validated['message']}\n" .
                ($validated['phone'] ? "Telepon: {$validated['phone']}\n" : ""),
                function ($message) use ($validated) {
                    $message->to(config('mail.from.address'))
                           ->subject('Pesan Baru dari Contact Form: ' . $validated['subject'])
                           ->from($validated['email'], $validated['name']);
                }
            );
        } catch (\Exception $e) {
            // Log error but don't fail the request
            Log::error('Failed to send contact email: ' . $e->getMessage());
        }

        return back()->with('success', 'Pesan Anda telah berhasil dikirim! Kami akan segera menghubungi Anda.');
    }
}
