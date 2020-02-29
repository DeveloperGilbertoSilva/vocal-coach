<?php

namespace App\Http\Controllers;

use App\Coach;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CoachController extends Controller
{
  // CARREGAR FORMULÁRIO DE INSERÇÃO
    public function inserir(){
        return view('coach.inserir');
    }

    // ARMAZENAR OS REGISTRO
    public function armazenar(Request $request)
    {
        DB::beginTransaction();
            Coach::create([
                'nome' => $request->nome,
                'apelido' => $request->apelido,
                'endereco' => $request->endereco,
                'telefone' => $request->telefone,
                'email' => $request->email,
                'senha' => $request->senha
            ]);
        DB::commit();

        return redirect()->route('listar-coachs');
    }

    // LISTAR TODOS OS REGISTROS
    public function listarCoachs()
    {
        $coachs = Coach::query()->get();
        return view('coach.listar', ['coachs'=>$coachs]);
    }

    // LISTAR SOMENTE 1 REGISTRO
    public function listarCoach(Request $request)
    {
        $coach = Coach::findOrFail($request->id);
        return view('coach.alterar', ['coach'=>$coach]);
    }

    // ALTERAR REGISTRO
    public function alterar(Request $request)
    {
        $coach = Coach::findOrFail($request->id);

        DB::beginTransaction();
            $coach -> nome = $request->nome;
            $coach -> apelido = $request->apelido;
            $coach -> endereco = $request->endereco;
            $coach -> telefone = $request->telefone;
            $coach -> email = $request->email;
            $coach -> senha = $request->senha;
            $coach ->save();
        DB::commit();

        return redirect()->route('listar-coachs');
    }

    // EXCLUIR REGISTRO
    public function excluir(Request $request)
    {
        DB::beginTransaction();
            Coach::destroy($request->id);
        DB::commit();

        return redirect()->route('listar-coachs');
    }
}
