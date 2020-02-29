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
    <form class="mb-3" method="post" action="/categoria/alterar/{{$categoria->id}}">
        @csrf
        {{-- DADOS GERAIS --}}
        <div class="form-group">
            <label for="descricao">Descricao</label>
        <textarea class="form-control" name="descricao" id="descricao" required>{{$categoria->descricao}}</textarea>
        </div>

        <button type="submit" class="btn btn-warning">Alterar registro</button>
    </form>
@endsection
