@extends('layout')

@section('cabecalho')
    Alterar Disciplina
@endsection

@section('descricao')
    Ficha de registro de disciplina
@endsection

<?php
    $id = 5;
?>
@section('conteudo')
    <form class="mb-3" method="post" action="/disciplina/alterar/{{$disciplina->id}}">
        @csrf
        {{-- DADOS GERAIS --}}
        <div class="form-group">
            <label for="descricao">Descricao</label>
        <textarea class="form-control" name="descricao" id="descricao" required>{{$disciplina->descricao}}</textarea>
        </div>

        <button type="submit" class="btn btn-warning">Alterar registro</button>
    </form>
@endsection
