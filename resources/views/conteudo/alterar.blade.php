@extends('layout')

@section('cabecalho')
    Inserir Aluno
@endsection

@section('descricao')
    Ficha de cadastro de alunos
@endsection


@section('conteudo')
    <form class="mb-3" method="post" action="/conteudo/alterar/{{$conteudo->id}}">
        @csrf
        {{-- DADOS GERAIS --}}
        <div class="form-group">
            <label for="descricao">Descricao</label>
            <textarea class="form-control" name="descricao" id="descricao" required>{{$conteudo->descricao}}</textarea>
        </div>

        <button type="submit" class="btn btn-warning">Alterar registro</button>
    </form>
@endsection
