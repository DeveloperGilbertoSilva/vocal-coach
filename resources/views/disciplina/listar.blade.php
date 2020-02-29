@extends('layout')

@section('cabecalho')
    Listagem de Disciplinas
@endsection

@section('descricao')
    Lista de disciplinas
    <div>
        <a class="btn btn-primary" href="/disciplina/inserir">Registrar disciplina</a>
    </div>
@endsection



@section('conteudo')
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Descrição</th>
                <th scope="col">Opções</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($disciplinas as $disciplina)
                <tr>
                    <td>{{$disciplina->descricao}}</td>
                    <td>
                        <a href="/disciplina/alterar/{{$disciplina->id}}" class="btn btn-warning btn-sm">Alterar</a>
                        <a href="/disciplina/excluir/{{$disciplina->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Essa ação irá excluir o registro permanentemente, deseja continuar?')">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
