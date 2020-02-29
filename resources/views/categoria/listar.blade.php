@extends('layout')

@section('cabecalho')
    Listagem de Categorias
@endsection

@section('descricao')
    Lista de categorias
    <div>
        <a class="btn btn-primary" href="/categoria/inserir">Registrar categoria</a>
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
            @foreach ($categorias as $categoria)
                <tr>
                    <td>{{$categoria->descricao}}</td>
                    <td>
                        <a href="/categoria/alterar/{{$categoria->id}}" class="btn btn-warning btn-sm">Alterar</a>
                        <a href="/categoria/excluir/{{$categoria->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Essa ação irá excluir o registro permanentemente, deseja continuar?')">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
