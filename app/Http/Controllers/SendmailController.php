<?php

namespace App\Http\Controllers;

use App\Mail\Contato;
use App\Mail\Sendmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendmailController extends Controller
{

    public function contato(Request $request)
    {
        $name  = $request->name;
        $tel   = $request->tel;
        $email = $request->email;
        $message = $request->message;

        $data = [
            'name'   => $name,
            'tel'    => $tel,
            'email'  => $email,
            'message' => $message
        ];

        Mail::to('caio@srjtransporte.com.br')->send(new Contato($data));
        return redirect()->route('contato');
    }
}
