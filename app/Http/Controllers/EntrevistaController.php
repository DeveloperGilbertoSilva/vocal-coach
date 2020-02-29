<?php

namespace App\Http\Controllers;

use App\Entrevista;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EntrevistaController extends Controller
{
    // CARREGAR FORMULÁRIO DE INSERÇÃO
    public function inserir(){
        return view('entrevista.inserir');
    }

    // ARMAZENAR OS REGISTRO
    public function armazenar(Request $request)
    {
        DB::beginTransaction();
            Entrevista::create([
                'titulo'
            ]);
        DB::commit();

        return redirect()->route('entrevista');
    }

    // LISTAR TODOS OS REGISTROS
    public function listar(){
        $entrevistas = Entrevista::query()->get();
        return view('aluno.armazenar', ['entrevistas'=>$entrevistas]);
    }

    public function alterar(Request $request)
    {
        $entrevista = Entrevista::findOrFail($request->id);

        DB::beginTransaction();
            $entrevista -> titulo = $request->titulo;
            $entrevista->save();
        DB::commit();
    }

    public function excluir(Request $request)
    {
        DB::beginTransaction();
            Entrevista::destroy($request->id);
        DB::commit();
    }

    // // Redirecionamento para a página de resposta da entrevista
    // public function answerSurvey(){
    //     return view('entrevista.armazenar');
    // }
}
