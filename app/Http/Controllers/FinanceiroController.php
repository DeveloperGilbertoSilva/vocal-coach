<?php

namespace App\Http\Controllers;

use App\Financeiro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FinanceiroController extends Controller
{
    // CARREGAR FORMULÁRIO DE INSERÇÃO
    public function inserir(){
        return view('financeiro.inserir');
    }

    // ARMAZENAR OS REGISTRO
    public function armazenar(Request $request)
    {
        DB::beginTransaction();
            Financeiro::create([
                'tipo' => $request->tipo,
                'forma' => $request->forma,
                'data' => $request->data,
                'mes_referencia' => $request->mes_referencia,
                'descricao' => $request->descricao,
                'valor' => $request->valor,
                'observacao' => $request->observacao
            ]);
        DB::commit();

        return redirect()->route('listar-financeiros');
    }

    // LISTAR TODOS OS REGISTROS
    public function listarfinanceiros()
    {
        $financeiros = Financeiro::query()->get();
        return view('financeiro.listar', ['financeiros'=>$financeiros]);
    }

    // LISTAR SOMENTE 1 REGISTRO
    public function listarfinanceiro(Request $request)
    {
        $financeiro = Financeiro::findOrFail($request->id);
        return view('financeiro.alterar', ['financeiro'=>$financeiro]);
    }

    // ALTERAR REGISTRO
    public function alterar(Request $request)
    {
        $financeiro = Financeiro::findOrFail($request->id);
        DB::beginTransaction();
            $financeiro -> tipo = $request->tipo;
            $financeiro -> forma = $request->forma;
            $financeiro -> data = $request->data;
            $financeiro -> mes_referencia = $request->mes_referencia;
            $financeiro -> descricao = $request->descricao;
            $financeiro -> valor = $request->valor;
            $financeiro -> observacao = $request->observacao;
            $financeiro ->save();
        DB::commit();

        return redirect()->route('listar-financeiros');
    }

    // EXCLUIR REGISTRO
    public function excluir(Request $request)
    {
        DB::beginTransaction();
            Financeiro::destroy($request->id);
        DB::commit();

        return redirect()->route('listar-financeiros');
    }
}
