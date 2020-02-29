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
                'titulo' => $request->titulo
            ]);
        DB::commit();

        return redirect()->route('entrevista');
    }

    // LISTAR TODOS OS REGISTROS
    public function listarEntrevistas()
    {
        $entrevistas = Entrevista::query()->get();
        return view('entrevista.listar', ['entrevistas'=>$entrevistas]);
    }

    // LISTAR SOMENTE 1 REGISTRO
    public function listarEntrevista(Request $request)
    {
        $entrevista = Entrevista::findOrFail($request->id);
        return view('entrevista.alterar', ['entrevista'=>$entrevista]);
    }

    // ALTERAR REGISTRO
    public function alterar(Request $request)
    {
        $entrevista = Entrevista::findOrFail($request->id);

        DB::beginTransaction();
            $entrevista -> titulo = $request->titulo;
            $entrevista->save();
        DB::commit();

        return redirect()->route('listar-entrevistas');
    }

    // EXCLUIR REGISTRO
    public function excluir(Request $request)
    {
        DB::beginTransaction();
            Entrevista::destroy($request->id);
        DB::commit();

        return redirect()->route('listar-entrevistas');
    }

}
