@extends('layout')

@section('cabecalho')
    Listagem de Técnicas
@endsection

@section('descricao')
    Lista de Técnicas
    <div>
        <a class="btn btn-primary" href="/tecnica/inserir">Registrar Técnica</a>
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
            @foreach ($tecnicas as $tecnica)
                <tr>
                    <td>{{$tecnica->descricao}}</td>
                    <td>
                        <a href="/tecnica/alterar/{{$tecnica->id}}" class="btn btn-warning btn-sm">Alterar</a>
                        <a href="/tecnica/excluir/{{$tecnica->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Essa ação irá excluir o registro permanentemente, deseja continuar?')">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
