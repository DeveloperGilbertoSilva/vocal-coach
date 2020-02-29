<?php

namespace App\Http\Controllers;

use App\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventoController extends Controller
{
    // CARREGAR FORMULÁRIO DE INSERÇÃO
    public function inserir(){
        return view('evento.inserir');
    }

    // ARMAZENAR OS REGISTRO
    public function armazenar(Request $request)
    {
        DB::beginTransaction();
            Evento::create([
                'titulo' => $request->titulo,
                'data' => $request->data,
                'horario' => $request->horario,
                'local' => $request->local,
                'descricao' => $request->descricao
            ]);
        DB::commit();

        return redirect()->route('listar-eventos');
    }

    // LISTAR TODOS OS REGISTROS
    public function listarEventos()
    {
        $eventos = Evento::query()->get();
        return view('evento.listar', ['eventos'=>$eventos]);
    }

    // LISTAR SOMENTE 1 REGISTRO
    public function listarEvento(Request $request)
    {
        $evento = Evento::findOrFail($request->id);
        return view('evento.alterar', ['evento'=>$evento]);
    }

    // ALTERAR REGISTRO
    public function alterar(Request $request)
    {
        $evento = Evento::findOrFail($request->id);
        DB::beginTransaction();
            $evento -> titulo = $request->titulo;
            $evento -> data = $request->data;
            $evento -> horario = $request->horario;
            $evento -> local = $request->local;
            $evento -> descricao = $request->descricao;
            $evento ->save();
        DB::commit();

        return redirect()->route('listar-eventos');
    }

    // EXCLUIR REGISTRO
    public function excluir(Request $request)
    {
        DB::beginTransaction();
            Evento::destroy($request->id);
        DB::commit();

        return redirect()->route('listar-eventos');
    }
}
