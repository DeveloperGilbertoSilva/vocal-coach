@extends('layout')

@section('cabecalho')
    Listagem de Aulas
@endsection

@section('descricao')
    Lista de aulas agendadas
    <div>
        <a class="btn btn-primary" href="/aula/inserir">Agendar aulas</a>
    </div>
@endsection



@section('conteudo')
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Data</th>
                <th scope="col">Tipo</th>
                <th scope="col">Opções</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($aulas as $aula)
                <tr>
                    <td>{{$aula->data}}</td>
                    <td>{{$aula->tipo}}</td>
                    <td>
                        <a href="/aula/alterar/{{$aula->id}}" class="btn btn-warning btn-sm">Alterar</a>
                        <a href="/aula/excluir/{{$aula->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Essa ação irá excluir o registro permanentemente, deseja continuar?')">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
