@extends('layout')

@section('cabecalho')
    Listagem de Conteudos
@endsection

@section('descricao')
    Lista de conteudos cadastrados
    <div>
        <a class="btn btn-primary" href="/conteudo/inserir">Registrar conteudo</a>
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
            @foreach ($conteudos as $conteudo)
                <tr>
                    <td>{{$conteudo->descricao}}</td>
                    <td>
                        <a href="/conteudo/alterar/{{$conteudo->id}}" class="btn btn-warning btn-sm">Alterar</a>
                        <a href="/conteudo/excluir/{{$conteudo->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Essa ação irá excluir o registro permanentemente, deseja continuar?')">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
