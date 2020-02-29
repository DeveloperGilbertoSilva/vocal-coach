@extends('layout')

@section('cabecalho')
    Inserir Pergunta
@endsection

@section('descricao')
    Inserção de perguntas para entrevista
@endsection


@section('conteudo')
    <form method="post" action="/entrevista/inserir">
        @csrf
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Insira o Título">
        </div>

        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@endsection
