@extends('layout')

@section('cabecalho')
    Listagem de Coachs
@endsection

@section('descricao')
    Lista de coachs cadastrados
    <div>
        <a class="btn btn-primary" href="/coach/inserir">Registrar coach</a>
    </div>
@endsection



@section('conteudo')
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Opções</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($coachs as $coach)
                <tr>
                    <td>{{$coach->nome}}</td>
                    <td>{{$coach->email}}</td>
                    <td>
                        <a href="/coach/alterar/{{$coach->id}}" class="btn btn-warning btn-sm">Alterar</a>
                        <a href="/coach/excluir/{{$coach->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Essa ação irá excluir o registro permanentemente, deseja continuar?')">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
