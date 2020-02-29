<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RespostaController extends Controller
{
    public function inserir()
    {
        return view('pergunta.inserir');
    }

    
}
