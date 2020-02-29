@extends('layout')

@section('cabecalho')
    Listagem de Alunos
@endsection

@section('descricao')
    Lista de alunos cadastrados
    <div>
        <a class="btn btn-primary" href="/aluno/inserir">Registrar aluno</a>
    </div>
@endsection



@section('conteudo')
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Opções</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($alunos as $aluno)
                <tr>
                    <td>{{$aluno->nome}}</td>
                    <td>{{$aluno->email}}</td>
                    <td>
                        <a href="/aluno/alterar/{{$aluno->id}}" class="btn btn-warning btn-sm">Alterar</a>
                        <a href="/aluno/excluir/{{$aluno->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Essa ação irá excluir o registro permanentemente, deseja continuar?')">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
