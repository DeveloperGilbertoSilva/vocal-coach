<?php

namespace App\Http\Controllers;

use App\Aluno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlunoController extends Controller
{
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
            'situacao_cadastro' => $request->situacao_cadastro,
            'aprovacao_cadastro' => $request->aprovacao_cadastro,
            'entrevista_id' => $request->entrevista
        ]);
        DB::commit();

        return redirect()->route('aluno');
    }
}
