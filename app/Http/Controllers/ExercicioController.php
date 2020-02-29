<?php

namespace App\Http\Controllers;

use App\Exercicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExercicioController extends Controller
{
    // CARREGAR FORMULÁRIO DE INSERÇÃO
    public function inserir(){
        return view('exercicio.inserir');
    }

    // ARMAZENAR OS REGISTRO
    public function armazenar(Request $request)
    {
        DB::beginTransaction();
            Exercicio::create([
                'numero' => $request->numero,
                'descricao' => $request->descricao
            ]);
        DB::commit();

        return redirect()->route('listar-exercicios');
    }

    // LISTAR TODOS OS REGISTROS
    public function listarExercicios()
    {
        $exercicios = Exercicio::query()->get();
        return view('exercicio.listar', ['exercicios'=>$exercicios]);
    }

    // LISTAR SOMENTE 1 REGISTRO
    public function listarExercicio(Request $request)
    {
        $exercicio = Exercicio::findOrFail($request->id);
        return view('exercicio.alterar', ['exercicio'=>$exercicio]);
    }

    // ALTERAR REGISTRO
    public function alterar(Request $request)
    {
        $exercicios = Exercicio::findOrFail($request->id);
        DB::beginTransaction();
            $exercicios -> numero = $request->numero;
            $exercicios -> descricao = $request->descricao;
            $exercicios ->save();
        DB::commit();

        return redirect()->route('listar-exercicios');
    }

    // EXCLUIR REGISTRO
    public function excluir(Request $request)
    {
        DB::beginTransaction();
            Exercicio::destroy($request->id);
        DB::commit();

        return redirect()->route('listar-exercicios');
    }
}
