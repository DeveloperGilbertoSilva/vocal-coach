@extends('layout')

@section('cabecalho')
    Inserir Aluno
@endsection

@section('descricao')
    Ficha de cadastro de alunos
@endsection


@section('conteudo')
    <form class="mb-3" method="post" action="/dia_livre/alterar/{{$dia_livre->id}}">
        @csrf
        {{-- DADOS GERAIS --}}
        <div class="form-group">
            <label for="data">Data</label>
        <input class="form-control" type="date" name="data" id="data" value="{{$dia_livre->data}}" required>
        </div>

        <div class="form-group">
            <label for="horario">Horário</label>
            <input class="form-control" type="text" name="horario" id="horario" value="{{$dia_livre->horario}}" required>
        </div>

        <button type="submit" class="btn btn-warning">Alterar registro</button>
    </form>
@endsection
