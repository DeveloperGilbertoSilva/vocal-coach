<?php

namespace App\Http\Controllers;

use App\Entrevista;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EntrevistaController extends Controller
{
    // Armazenamento de registros de entrevistas
    public function armazenar(Request $request)
    {
        DB::beginTransaction();
            Entrevista::create([
                'pergunta'=>$request->pergunta
            ]);
        DB::commit();

        return redirect()->route('entrevista');
    }

    // Listagem de todos os registros existentes
    public function listar(){
        $entrevistas = Entrevista::query()->get();
        return view('aluno.armazenar', ['entrevistas'=>$entrevistas]);
    }

    // Redirecionamento para a página de resposta da entrevista
    public function answerSurvey(){
        return view('entrevista.armazenar');
    }
}
