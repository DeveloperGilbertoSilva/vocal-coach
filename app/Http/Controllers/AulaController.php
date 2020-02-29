<?php

namespace App\Http\Controllers;

use App\Aula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AulaController extends Controller
{
    public function inserir(){
        return view('aula.inserir');
    }

    public function armazenar(Request $request)
    {
        DB::beginTransaction();
            Aula::create([
                'data' => $request->data,
                'tipo' => $request->tipo,
                'observacao' => $request->observacao
            ]);
        DB::commit();

        return redirect()->route('listar-aulas');
    }

    public function listarAulas()
    {
        $aulas = Aula::query()->get();
        return view('aula.listar', ['aulas'=>$aulas]);
    }

    public function listarAula(Request $request)
    {
        $aula = Aula::findOrFail($request->id);
        return view('aula.alterar', ['aula'=>$aula]);
    }

    public function alterar(Request $request)
    {
        $aula = Aula::findOrFail($request->id);

        DB::beginTransaction();
            $aula -> data = $request->data;
            $aula -> tipo = $request->tipo;
            $aula -> observacao = $request->observacao;
            $aula ->save();
        DB::commit();

        return redirect()->route('listar-aulas');
    }

    public function excluir(Request $request)
    {
        DB::beginTransaction();
            Aula::destroy($request->id);
        DB::commit();

        return redirect()->route('listar-aulas');
    }
}
