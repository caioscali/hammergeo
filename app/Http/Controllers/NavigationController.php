<?php

namespace App\Http\Controllers;

use App\Models\Obra;
use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function home()
    {
        return view('home', [
            'obras' => Obra::orderBy('titulo')->paginate('5')
        ]);
    }
    public function contato()
    {
        return view('contato');
    }
}
