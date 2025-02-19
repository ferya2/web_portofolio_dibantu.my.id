<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'description' => 'required|string',
        ]);

        // Data untuk email
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'company' => $request->company,
            'description' => $request->description,
            'goals' => $request->goals,
        ];

        // Kirim email
        Mail::send('emails.client_form', $data, function ($message) use ($data) {
            $message->to('your-email@example.com') // Ganti dengan email Anda
                    ->subject('Formulir Baru dari ' . $data['name']);
        });

        // Redirect atau kirim respons sukses
        return back()->with('success', 'Formulir Anda berhasil dikirim!');
    }
}

