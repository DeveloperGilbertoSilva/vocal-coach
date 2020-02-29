@extends('layout')

@section('cabecalho')
    Listagem de Entrevistas
@endsection

@section('descricao')
    Lista de entrevistas
    <div>
        <a class="btn btn-primary" href="/entrevista/inserir">Registrar entrevista</a>
    </div>
@endsection



@section('conteudo')
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Título</th>
                <th scope="col">Opções</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($entrevistas as $entrevista)
                <tr>
                    <td>{{$entrevista->titulo}}</td>
                    <td>
                        <a href="/entrevista/alterar/{{$entrevista->id}}" class="btn btn-warning btn-sm">Alterar</a>
                        <a href="/entrevista/excluir/{{$entrevista->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Essa ação irá excluir o registro permanentemente, deseja continuar?')">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
