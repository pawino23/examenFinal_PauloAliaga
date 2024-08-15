<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Reemplaza 'your-email@example.com' con tu dirección de correo electrónico
        $toEmail = 'your-email@example.com'; 

        // Enviar el correo utilizando Mail::raw
        Mail::raw(
            "Nombre: {$request->name}\nEmail: {$request->email}\nMensaje: {$request->message}",
            function ($message) use ($toEmail) {
                $message->to($toEmail)
                        ->subject('Contacto de Examen');
            }
        );

        return redirect()->route('contacto')->with('success', 'Mensaje enviado con éxito.');
    }
}