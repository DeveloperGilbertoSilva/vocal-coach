<?php

namespace App\Http\Controllers;

use App\Aluno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class AlunoController extends Controller
{
    // Armazenarregistros de alunos
    public function armazenar(Request $request)
    {
        DB::beginTransaction();
            DB::table('alunos')->insertGetId([
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
                'situacao_cadastro' => $request->situacao_cadastro,
                'aprovacao_cadastro' => $request->aprovacao_cadastro
            ]);
        DB::commit();

        return redirect()->route('listar-alunos');
    }

    // Listar todos os registros de alunos
    public function listarAlunos()
    {
        $alunos = DB::table('alunos')->select('id','nome', 'email')->get();
        return view('aluno.listar', ['alunos'=>$alunos]);
    }

    // Listar somente um registro de aluno
    public function listarAluno(Request $request)
    {
        $aluno = Aluno::find($request->id);
        // return view('aluno.alterar', ['aluno'=>$aluno]);
        return view('aluno.alterar', ['aluno'=>$aluno]);
    }

    // Alterar registro de aluno
    public function alterar(Request $request)
    {
        DB::beginTransaction();
            DB::table('alunos')->where('id', $request->id)->update([
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
                'situacao_cadastro' => $request->situacao_cadastro,
                'aprovacao_cadastro' => $request->aprovacao_cadastro
            ]);
        DB::commit();

        return redirect()->route('listar-alunos');
    }

    // Excluir registro de aluno
    public function excluir(Request $request)
    {
        DB::beginTransaction();
            DB::table('alunos')->where('id',$request->id)->delete();
        DB::commit();

        return redirect()->route('listar-alunos');
    }
}
