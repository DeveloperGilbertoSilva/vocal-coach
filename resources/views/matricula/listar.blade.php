@extends('layout')

@section('cabecalho')
    Listagem de Matrículas
@endsection

@section('descricao')
    Lista de matrículas
    <div>
        <a class="btn btn-primary" href="/matricula/inserir">Registrar matrícula</a>
    </div>
@endsection



@section('conteudo')
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Data de Início</th>
                <th scope="col">Data de Encerramento</th>
                <th scope="col">Opções</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($matriculas as $matricula)
                <tr>
                    <td>{{$matricula->data_inicio}}</td>
                    <td>{{$matricula->data_fim}}</td>
                    <td>
                        <a href="/matricula/alterar/{{$matricula->id}}" class="btn btn-warning btn-sm">Alterar</a>
                        <a href="/matricula/excluir/{{$matricula->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Essa ação irá excluir o registro permanentemente, deseja continuar?')">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
