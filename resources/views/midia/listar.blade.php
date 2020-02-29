@extends('layout')

@section('cabecalho')
    Listagem de Mídias
@endsection

@section('descricao')
    Lista de midias
    <div>
        <a class="btn btn-primary" href="/midia/inserir">Registrar mídia</a>
    </div>
@endsection



@section('conteudo')
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Título</th>
                <th scope="col">Pasta</th>
                <th scope="col">Opções</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($midias as $midia)
                <tr>
                    <td>{{$midia->titulo}}</td>
                    <td>{{$midia->pasta}}</td>
                    <td>
                        <a href="/midia/alterar/{{$midia->id}}" class="btn btn-warning btn-sm">Alterar</a>
                        <a href="/midia/excluir/{{$midia->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Essa ação irá excluir o registro permanentemente, deseja continuar?')">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
