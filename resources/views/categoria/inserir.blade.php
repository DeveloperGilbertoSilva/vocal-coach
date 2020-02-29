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
    <form class="mb-3" method="post" action="/categoria/inserir">
        @csrf
        {{-- DADOS GERAIS --}}
        <div class="form-group">
            <label for="descricao">Descricao</label>
            <textarea class="form-control" name="descricao" id="descricao" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Inserir registro</button>
    </form>
@endsection
