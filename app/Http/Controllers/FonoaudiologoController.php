<?php

namespace App\Http\Controllers;

use App\Fonoaudiologo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FonoaudiologoController extends Controller
{
    // CARREGAR FORMULÁRIO DE INSERÇÃO
    public function inserir(){
        return view('fonoaudiologo.inserir');
    }

    // ARMAZENAR OS REGISTRO
    public function armazenar(Request $request)
    {
        DB::beginTransaction();
            Fonoaudiologo::create([
                'data_atendimento' => $request->data_atendimento,
                'medico' => $request->medico,
                'clinica' => $request->clinica,
                'observacao' => $request->observacao
            ]);
        DB::commit();

        return redirect()->route('listar-fonoaudiologos');
    }

    // LISTAR TODOS OS REGISTROS
    public function listarfonoaudiologos()
    {
        $fonoaudiologos = Fonoaudiologo::query()->get();
        return view('fonoaudiologo.listar', ['fonoaudiologos'=>$fonoaudiologos]);
    }

    // LISTAR SOMENTE 1 REGISTRO
    public function listarfonoaudiologo(Request $request)
    {
        $fonoaudiologo = Fonoaudiologo::findOrFail($request->id);
        return view('fonoaudiologo.alterar', ['fonoaudiologo'=>$fonoaudiologo]);
    }

    // ALTERAR REGISTRO
    public function alterar(Request $request)
    {
        $fonoaudiologo = Fonoaudiologo::findOrFail($request->id);
        DB::beginTransaction();
            $fonoaudiologo -> data_atendimento = $request->data_atendimento;
            $fonoaudiologo -> medico = $request->medico;
            $fonoaudiologo -> clinica = $request->clinica;
            $fonoaudiologo -> observacao = $request->observacao;
            $fonoaudiologo ->save();
        DB::commit();

        return redirect()->route('listar-fonoaudiologos');
    }

    // EXCLUIR REGISTRO
    public function excluir(Request $request)
    {
        DB::beginTransaction();
            Fonoaudiologo::destroy($request->id);
        DB::commit();

        return redirect()->route('listar-fonoaudiologos');
    }
}
