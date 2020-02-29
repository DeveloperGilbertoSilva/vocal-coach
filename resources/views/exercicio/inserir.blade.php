@extends('layout')

@section('cabecalho')
    Inserir Exercício
@endsection

@section('descricao')
    Ficha de cadastro de exercícios
@endsection

<?php
    $id = 5;
?>
@section('conteudo')
    <form class="mb-3" method="post" action="/exercicio/inserir">
        @csrf
        {{-- DADOS GERAIS --}}
        <div class="form-group">
            <label for="numero">Número</label>
            <input type="number" class="form-control" name="numero" id="numero" value="{{$id}}" required>
        </div>

        <div class="form-group">
            <label for="descricao">Descricao</label>
            <textarea class="form-control" name="descricao" id="descricao" required>Teste {{$id}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Inserir registro</button>
    </form>
@endsection
