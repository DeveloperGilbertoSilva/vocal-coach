@extends('layout')

@section('cabecalho')
    Inserir Pergunta
@endsection

@section('descricao')
    Inserção de perguntas para entrevista
@endsection


@section('conteudo')
    <form method="post" action="/entrevista">
        @csrf
        <div class="form-group">
            <label for="pergunta">Pergunta</label>
            <input type="text" class="form-control" id="pergunta" name="pergunta" placeholder="Insira a pergunta">
        </div>

        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@endsection
