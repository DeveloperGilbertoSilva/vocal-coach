@extends('layout')

@section('cabecalho')
    Listagem de Eventos
@endsection

@section('descricao')
    Lista de eventos agendados
    <div>
        <a class="btn btn-primary" href="/evento/inserir">Agendar evento</a>
    </div>
@endsection



@section('conteudo')
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Data</th>
                <th scope="col">Horário</th>
                <th scope="col">Opções</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($eventos as $evento)
                <tr>
                    <td>{{$evento->data}}</td>
                    <td>{{$evento->tipo}}</td>
                    <td>
                        <a href="/evento/alterar/{{$evento->id}}" class="btn btn-warning btn-sm">Alterar</a>
                        <a href="/evento/excluir/{{$evento->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Essa ação irá excluir o registro permanentemente, deseja continuar?')">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
