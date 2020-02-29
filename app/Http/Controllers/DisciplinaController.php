<?php

namespace App\Http\Controllers;

use App\Disciplina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DisciplinaController extends Controller
{
    // CARREGAR FORMULÁRIO DE INSERÇÃO
    public function inserir(){
        return view('disciplina.inserir');
    }

    // ARMAZENAR OS REGISTRO
    public function armazenar(Request $request)
    {
        DB::beginTransaction();
            Disciplina::create([
                'descricao' => $request->descricao
            ]);
        DB::commit();

        return redirect()->route('listar-disciplinas');
    }

    // LISTAR TODOS OS REGISTROS
    public function listarDisciplinas()
    {
        $disciplinas = Disciplina::query()->get();
        return view('disciplina.listar', ['disciplinas'=>$disciplinas]);
    }

    // LISTAR SOMENTE 1 REGISTRO
    public function listarDisciplina(Request $request)
    {
        $disciplina = Disciplina::findOrFail($request->id);
        return view('disciplina.alterar', ['disciplina'=>$disciplina]);
    }

    // ALTERAR REGISTRO
    public function alterar(Request $request)
    {
        $disciplina = Disciplina::findOrFail($request->id);
        DB::beginTransaction();
            $disciplina -> descricao = $request->descricao;
            $disciplina ->save();
        DB::commit();

        return redirect()->route('listar-disciplinas');
    }

    // EXCLUIR REGISTRO
    public function excluir(Request $request)
    {
        DB::beginTransaction();
            Disciplina::destroy($request->id);
        DB::commit();

        return redirect()->route('listar-disciplinas');
    }
}
