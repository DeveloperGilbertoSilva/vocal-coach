@extends('layout')

@section('cabecalho')
    Inserir Categoria
@endsection

@section('descricao')
    Ficha de cadastro de categorias
@endsection

<?php
    $id = 5;
?>
@section('conteudo')
    <form method="post" action="/entrevista/alterar/{{$entrevista->id}}">
        @csrf
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Insira o Título" value="{{$entrevista->titulo}}" required>
        </div>

        <button type="submit" class="btn btn-warning">Alterar registro</button>
    </form>
@endsection
