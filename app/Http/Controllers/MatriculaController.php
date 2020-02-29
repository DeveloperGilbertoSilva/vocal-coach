<?php

namespace App\Http\Controllers;

use App\Matricula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatriculaController extends Controller
{
    // CARREGAR FORMULÁRIO DE INSERÇÃO
    public function inserir(){
        return view('matricula.inserir');
    }

    // ARMAZENAR OS REGISTRO
    public function armazenar(Request $request)
    {
        DB::beginTransaction();
            Matricula::create([
                'data_inicio' => $request->data_inicio,
                'data_fim' => $request->data_fim,
                'horario' => $request->horario,
                'tipo_aluno' => $request->tipo_aluno,
                'quantidade_aulas' => $request->quantidade_aulas,
                'tipo_aula' => $request->tipo_aula,
                'valor_mensal' => $request->valor_mensal,
                'observacao_inicial' => $request->observacao_inicial,
                'observacao_final' => $request->observacao_final
            ]);
        DB::commit();

        return redirect()->route('listar-matriculas');
    }

    // LISTAR TODOS OS REGISTROS
    public function listarmatriculas()
    {
        $matriculas = matricula::query()->get();
        return view('matricula.listar', ['matriculas'=>$matriculas]);
    }

    // LISTAR SOMENTE 1 REGISTRO
    public function listarmatricula(Request $request)
    {
        $matricula = matricula::findOrFail($request->id);
        return view('matricula.alterar', ['matricula'=>$matricula]);
    }

    // ALTERAR REGISTRO
    public function alterar(Request $request)
    {
        $matricula = matricula::findOrFail($request->id);
        DB::beginTransaction();
            $matricula -> data_inicio = $request->data_inicio;
            $matricula -> data_fim = $request->data_fim;
            $matricula -> horario = $request->horario;
            $matricula -> tipo_aluno = $request->tipo_aluno;
            $matricula -> quantidade_aulas = $request->quantidade_aulas;
            $matricula -> tipo_aula = $request->tipo_aula;
            $matricula -> valor_mensal = $request->valor_mensal;
            $matricula -> observacao_inicial = $request->observacao_inicial;
            $matricula -> observacao_final = $request->observacao_final;
            $matricula ->save();
        DB::commit();

        return redirect()->route('listar-matriculas');
    }

    // EXCLUIR REGISTRO
    public function excluir(Request $request)
    {
        DB::beginTransaction();
            matricula::destroy($request->id);
        DB::commit();

        return redirect()->route('listar-matriculas');
    }
}
