<?php

namespace App\Http\Controllers;

use App\Pergunta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerguntaController extends Controller
{
    // CARREGAR FORMULÁRIO DE INSERÇÃO
    public function inserir(){
        return view('pergunta.inserir');
    }

    // ARMAZENAR OS REGISTRO
    public function armazenar(Request $request)
    {
        DB::beginTransaction();
            Pergunta::create([
                'descricao' => $request->descricao
            ]);
        DB::commit();

        return redirect()->route('listar-perguntas');
    }

    // LISTAR TODOS OS REGISTROS
    public function listarperguntas()
    {
        $perguntas = Pergunta::query()->get();
        return view('pergunta.listar', ['perguntas'=>$perguntas]);
    }

    // LISTAR SOMENTE 1 REGISTRO
    public function listarpergunta(Request $request)
    {
        $pergunta = Pergunta::findOrFail($request->id);
        return view('pergunta.alterar', ['pergunta'=>$pergunta]);
    }

    // ALTERAR REGISTRO
    public function alterar(Request $request)
    {
        $pergunta = Pergunta::findOrFail($request->id);

        DB::beginTransaction();
            $pergunta -> descricao = $request->descricao;
            $pergunta ->save();
        DB::commit();

        return redirect()->route('listar-perguntas');
    }

    // EXCLUIR REGISTRO
    public function excluir(Request $request)
    {
        DB::beginTransaction();
            Pergunta::destroy($request->id);
        DB::commit();

        return redirect()->route('listar-perguntas');
    }
}
