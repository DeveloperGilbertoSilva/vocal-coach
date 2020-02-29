<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
    // CARREGAR FORMULÁRIO DE INSERÇÃO
    public function inserir(){
        return view('categoria.inserir');
    }

    // ARMAZENAR OS REGISTRO
    public function armazenar(Request $request)
    {
        DB::beginTransaction();
            Categoria::create([
                'descricao' => $request->descricao
            ]);
        DB::commit();

        return redirect()->route('listar-categorias');
    }

    // LISTAR TODOS OS REGISTROS
    public function listarCategorias()
    {
        $categorias = Categoria::query()->get();
        return view('categoria.listar', ['categorias'=>$categorias]);
    }

    // LISTAR SOMENTE 1 REGISTRO
    public function listarCategoria(Request $request)
    {
        $categoria = Categoria::findOrFail($request->id);
        return view('categoria.alterar', ['categoria'=>$categoria]);
    }

    // ALTERAR REGISTRO
    public function alterar(Request $request)
    {
        $categoria = Categoria::findOrFail($request->id);

        DB::beginTransaction();
            $categoria -> descricao = $request->descricao;
            $categoria ->save();
        DB::commit();

        return redirect()->route('listar-categorias');
    }

    // EXCLUIR REGISTRO
    public function excluir(Request $request)
    {
        DB::beginTransaction();
            Categoria::destroy($request->id);
        DB::commit();

        return redirect()->route('listar-categorias');
    }
}
