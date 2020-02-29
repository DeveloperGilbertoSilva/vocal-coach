<?php

namespace App\Http\Controllers;

use App\Conteudo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConteudoController extends Controller
{
    // CARREGAR FORMULÁRIO DE INSERÇÃO
    public function inserir(){
        return view('conteudo.inserir');
    }

    // ARMAZENAR OS REGISTRO
    public function armazenar(Request $request)
    {
        DB::beginTransaction();
            Conteudo::create([
                'descricao' => $request->descricao
            ]);
        DB::commit();

        return redirect()->route('listar-conteudos');
    }

    // LISTAR TODOS OS REGISTROS
    public function listarConteudos()
    {
        $conteudos = Conteudo::query()->get();
        return view('conteudo.listar', ['conteudos'=>$conteudos]);
    }

    // LISTAR SOMENTE 1 REGISTRO
    public function listarConteudo(Request $request)
    {
        $conteudo = Conteudo::findOrFail($request->id);
        return view('conteudo.alterar', ['conteudo'=>$conteudo]);
    }

    // ALTERAR REGISTRO
    public function alterar(Request $request)
    {
        $conteudo = Conteudo::findOrFail($request->id);
        DB::beginTransaction();
            $conteudo -> descricao = $request->descricao;
            $conteudo ->save();
        DB::commit();

        return redirect()->route('listar-conteudos');
    }

    // EXCLUIR REGISTRO
    public function excluir(Request $request)
    {
        DB::beginTransaction();
            Conteudo::destroy($request->id);
        DB::commit();

        return redirect()->route('listar-conteudos');
    }
}
