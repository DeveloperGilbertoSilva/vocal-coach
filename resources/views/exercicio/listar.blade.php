@extends('layout')

@section('cabecalho')
    Listagem de Exercícios
@endsection

@section('descricao')
    Lista de exercícios
    <div>
        <a class="btn btn-primary" href="/exercicio/inserir">Registrar exercício</a>
    </div>
@endsection



@section('conteudo')
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Número</th>
                <th scope="col">Descrição</th>
                <th scope="col">Opções</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($exercicios as $exercicio)
                <tr>
                    <td>{{$exercicio->numero}}</td>
                    <td>{{$exercicio->descricao}}</td>
                    <td>
                        <a href="/exercicio/alterar/{{$exercicio->id}}" class="btn btn-warning btn-sm">Alterar</a>
                        <a href="/exercicio/excluir/{{$exercicio->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Essa ação irá excluir o registro permanentemente, deseja continuar?')">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
