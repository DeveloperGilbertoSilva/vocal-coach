@extends('layout')

@section('cabecalho')
    Listagem de Consultas no Fonoaudiólogo
@endsection

@section('descricao')
    Lista de consultas
    <div>
        <a class="btn btn-primary" href="/fonoaudiologo/inserir">Submeter consultas</a>
    </div>
@endsection



@section('conteudo')
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Data</th>
                <th scope="col">Clínica</th>
                <th scope="col">Opções</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($fonoaudiologos as $fonoaudiologo)
                <tr>
                    <td>{{$fonoaudiologo->data_atendimento}}</td>
                    <td>{{$fonoaudiologo->clinica}}</td>
                    <td>
                        <a href="/fonoaudiologo/alterar/{{$fonoaudiologo->id}}" class="btn btn-warning btn-sm">Alterar</a>
                        <a href="/fonoaudiologo/excluir/{{$fonoaudiologo->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Essa ação irá excluir o registro permanentemente, deseja continuar?')">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
