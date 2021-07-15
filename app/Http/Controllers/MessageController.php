<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        
        $message = request()->validate([
            'nombre' => 'required',
            'correo' => 'required|email',
            'celular' => 'required',
            'ciudad' => 'required',
            'direccion' => 'required',
            'descripcion' => 'required',
            'marca' => 'required',
            'modelo' => 'required'
        ]);
        
        Mail::to('dalopezm11@gmail.com')->queue(new MessageReceived($message));
        return'Datos validados';
    }
}
