<?php

namespace App\Http\Controllers;

use App\Aluno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlunoController extends Controller
{
    // CARREGAR FORMULÁRIO DE INSERÇÃO
    public function inserir(){
        return view('aluno.inserir');
    }

    // ARMAZENAR OS REGISTRO
    public function armazenar(Request $request)
    {
        DB::beginTransaction();
            Aluno::create([
                'nome' => $request->nome,
                'nascimento' => $request->nascimento,
                'endereco' => $request->endereco,
                'cidade' => $request->cidade,
                'uf' => $request->uf,
                'estado_civil' => $request->estado_civil,
                'telefone_1' => $request->telefone_1,
                'telefone_2' => $request->telefone_2,
                'email' => $request->email,
                'email_responsavel' => $request->email_responsavel,
                'dia_pagamento' => $request->dia_pagamento,
                'link_material' => $request->link_material,
                'situacao_cadastro' => $request->nome,
                'aprovacao_cadastro' => $request->aprovacao_cadastro,
            ]);
        DB::commit();

        return redirect()->route('listar-alunos');
    }

    // LISTAR TODOS OS REGISTROS
    public function listarAlunos()
    {
        // $alunos = DB::table('alunos')->select('id','nome', 'email')->get();
        $alunos = Aluno::listaOrdenandoNome()->get();
        return view('aluno.listar', ['alunos'=>$alunos]);
    }

    // LISTAR SOMENTE 1 REGISTRO
    public function listarAluno(Request $request)
    {
        $aluno = Aluno::findOrFail($request->id);
        return view('aluno.alterar', ['aluno'=>$aluno]);
    }

    // ALTERAR REGISTRO
    public function alterar(Request $request)
    {
        $aluno = Aluno::findOrFail($request->id);
        DB::beginTransaction();
            $aluno -> nome = $request->nome;
            $aluno -> nascimento = $request->nascimento;
            $aluno -> endereco = $request->endereco;
            $aluno -> cidade = $request->cidade;
            $aluno -> uf = $request->uf;
            $aluno -> estado_civil = $request->estado_civil;
            $aluno -> telefone_1 = $request->telefone_1;
            $aluno -> telefone_2 = $request->telefone_2;
            $aluno -> email = $request->email;
            $aluno -> email_responsavel = $request->email_responsavel;
            $aluno -> dia_pagamento = $request->dia_pagamento;
            $aluno -> link_material = $request->link_material;
            $aluno -> situacao_cadastro = $request->situacao_cadastro;
            $aluno -> aprovacao_cadastro = $request->aprovacao_cadastro;
            $aluno ->save();
        DB::commit();

        return redirect()->route('listar-alunos');
    }

    // EXCLUIR REGISTRO
    public function excluir(Request $request)
    {
        DB::beginTransaction();
            Aluno::destroy($request->id);
        DB::commit();

        return redirect()->route('listar-alunos');
    }
}
