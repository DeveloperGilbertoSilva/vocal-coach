@extends('layout')

@section('cabecalho')
    Listagem de Movimentações financeiras
@endsection

@section('descricao')
    Lista de movimentações
    <div>
        <a class="btn btn-primary" href="/financeiro/inserir">Registrar movimentação</a>
    </div>
@endsection



@section('conteudo')
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Tipo</th>
                <th scope="col">Data</th>
                <th scope="col">Opções</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($financeiros as $financeiro)
                <tr>
                    <td>{{$financeiro->tipo}}</td>
                    <td>{{$financeiro->data}}</td>
                    <td>
                        <a href="/financeiro/alterar/{{$financeiro->id}}" class="btn btn-warning btn-sm">Alterar</a>
                        <a href="/financeiro/excluir/{{$financeiro->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Essa ação irá excluir o registro permanentemente, deseja continuar?')">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
