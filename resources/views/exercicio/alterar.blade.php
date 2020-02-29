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
    <form class="mb-3" method="post" action="/exercicio/alterar/{{$exercicio->id}}">
        @csrf
        {{-- DADOS GERAIS --}}
        <div class="form-group">
            <label for="numero">Número</label>
            <input type="number" class="form-control" name="numero" id="numero" value="{{$exercicio->numero}}" required>
        </div>

        <div class="form-group">
            <label for="descricao">Descricao</label>
            <textarea class="form-control" name="descricao" id="descricao" required>{{$exercicio->descricao}}</textarea>
        </div>

        <button type="submit" class="btn btn-warning">Alterar registro</button>
    </form>
@endsection
