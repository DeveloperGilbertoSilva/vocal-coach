@extends('layout')

@section('cabecalho')
    Listagem de Disponibilidade
@endsection

@section('descricao')
    Lista de dias livres registrados
    <div>
        <a class="btn btn-primary" href="/conteudo/inserir">Registrar disponibilidade</a>
    </div>
@endsection



@section('conteudo')
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Data</th>
                <th scope="col">Opções</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($dias_livres as $dia_livre)
                <tr>
                    <td>{{$dia_livre->data}}</td>
                    <td>
                        <a href="/dia_livre/alterar/{{$dia_livre->id}}" class="btn btn-warning btn-sm">Alterar</a>
                        <a href="/dia_livre/excluir/{{$dia_livre->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Essa ação irá excluir o registro permanentemente, deseja continuar?')">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
