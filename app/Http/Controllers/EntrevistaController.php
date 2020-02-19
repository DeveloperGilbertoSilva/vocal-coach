<?php

namespace App\Http\Controllers;

use App\Entrevista;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EntrevistaController extends Controller
{
    public function armazenar(Request $request)
    {
        DB::beginTransaction();
            Entrevista::create([
                'pergunta'=>$request->pergunta
            ]);
        DB::commit();

        return redirect()->route('entrevista');
    }

    public function listar(){
        $entrevistas = Entrevista::query()->get();
        return view('index', ['entrevistas'=>$entrevistas]);
    }
}
