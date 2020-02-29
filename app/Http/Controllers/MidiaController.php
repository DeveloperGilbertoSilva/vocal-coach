<?php

namespace App\Http\Controllers;

use App\Midia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MidiaController extends Controller
{
    // CARREGAR FORMULÁRIO DE INSERÇÃO
    public function inserir(){
        return view('midia.inserir');
    }

    // ARMAZENAR OS REGISTRO
    public function armazenar(Request $request)
    {
        DB::beginTransaction();
            Midia::create([
                'titulo' => $request->titulo,
                'pasta' => $request->pasta,
                'arquivo' => $request->arquivo
            ]);
        DB::commit();

        return redirect()->route('listar-midias');
    }

    // LISTAR TODOS OS REGISTROS
    public function listarMidias()
    {
        $midias = midia::query()->get();
        return view('midia.listar', ['midias'=>$midias]);
    }

    // LISTAR SOMENTE 1 REGISTRO
    public function listarMidia(Request $request)
    {
        $midia = midia::findOrFail($request->id);
        return view('midia.alterar', ['midia'=>$midia]);
    }

    // ALTERAR REGISTRO
    public function alterar(Request $request)
    {
        $midia = midia::findOrFail($request->id);
        DB::beginTransaction();
            $midia -> titulo = $request->titulo;
            $midia -> arquivo = $request->arquivo;
            $midia -> pasta = $request->pasta;
            $midia ->save();
        DB::commit();

        return redirect()->route('listar-midias');
    }

    // EXCLUIR REGISTRO
    public function excluir(Request $request)
    {
        DB::beginTransaction();
            midia::destroy($request->id);
        DB::commit();

        return redirect()->route('listar-midias');
    }
}
