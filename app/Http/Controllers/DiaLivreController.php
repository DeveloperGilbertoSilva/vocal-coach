<?php

namespace App\Http\Controllers;

use App\DiaLivre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DiaLivreController extends Controller
{
    // CARREGAR FORMULÁRIO DE INSERÇÃO
    public function inserir(){
        return view('dia_livre.inserir');
    }

    // ARMAZENAR OS REGISTRO
    public function armazenar(Request $request)
    {
        DB::beginTransaction();
            DiaLivre::create([
                'data' => $request->data,
                'horario' => $request->horario
            ]);
        DB::commit();

        return redirect()->route('listar-dias_livres');
    }

    // LISTAR TODOS OS REGISTROS
    public function listarDiasLivres()
    {
        $dias_livres = DiaLivre::query()->get();
        return view('dia_livre.listar', ['dias_livres'=>$dias_livres]);
    }

    // LISTAR SOMENTE 1 REGISTRO
    public function listarDiaLivre(Request $request)
    {
        $dia_livre = DiaLivre::findOrFail($request->id);
        return view('dia_livre.alterar', ['dia_livre'=>$dia_livre]);
    }

    // ALTERAR REGISTRO
    public function alterar(Request $request)
    {
        $dia_livre = DiaLivre::findOrFail($request->id);
        DB::beginTransaction();
            $dia_livre -> data = $request->data;
            $dia_livre -> horario = $request->horario;
            $dia_livre ->save();
        DB::commit();

        return redirect()->route('listar-dias_livres');
    }

    // EXCLUIR REGISTRO
    public function excluir(Request $request)
    {
        DB::beginTransaction();
            DiaLivre::destroy($request->id);
        DB::commit();

        return redirect()->route('listar-dias_livres');
    }
}
