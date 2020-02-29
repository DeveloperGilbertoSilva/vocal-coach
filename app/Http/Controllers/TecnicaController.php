<?php

namespace App\Http\Controllers;

use App\Tecnica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TecnicaController extends Controller
{
    // CARREGAR FORMULÁRIO DE INSERÇÃO
    public function inserir(){
        return view('tecnica.inserir');
    }

    // ARMAZENAR OS REGISTRO
    public function armazenar(Request $request)
    {
        DB::beginTransaction();
            Tecnica::create([
                'descricao' => $request->descricao
            ]);
        DB::commit();

        return redirect()->route('listar-tecnicas');
    }

    // LISTAR TODOS OS REGISTROS
    public function listartecnicas()
    {
        $tecnicas = Tecnica::query()->get();
        return view('tecnica.listar', ['tecnicas'=>$tecnicas]);
    }

    // LISTAR SOMENTE 1 REGISTRO
    public function listartecnica(Request $request)
    {
        $tecnica = tecnica::findOrFail($request->id);
        return view('tecnica.alterar', ['tecnica'=>$tecnica]);
    }

    // ALTERAR REGISTRO
    public function alterar(Request $request)
    {
        $tecnica = Tecnica::findOrFail($request->id);

        DB::beginTransaction();
            $tecnica -> descricao = $request->descricao;
            $tecnica ->save();
        DB::commit();

        return redirect()->route('listar-tecnicas');
    }

    // EXCLUIR REGISTRO
    public function excluir(Request $request)
    {
        DB::beginTransaction();
            Tecnica::destroy($request->id);
        DB::commit();

        return redirect()->route('listar-tecnicas');
    }
}
