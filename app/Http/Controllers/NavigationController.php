<?php

namespace App\Http\Controllers;

use App\Models\Obra;
use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function home()
    {
        return view('home', [
            'obras' => Obra::orderBy('titulo')
        ]);
    }
    public function contato()
    {
        return view('contato');
    }
}
