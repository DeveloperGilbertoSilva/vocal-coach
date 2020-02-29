@extends('layout')

@section('cabecalho')
    Inserir Disciplina
@endsection

@section('descricao')
    Ficha de cadastro de disciplinas
@endsection

<?php
    $id = 5;
?>
@section('conteudo')
    <form class="mb-3" method="post" action="/disciplina/inserir">
        @csrf
        {{-- DADOS GERAIS --}}
        <div class="form-group">
            <label for="descricao">Descricao</label>
            <textarea class="form-control" name="descricao" id="descricao" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Inserir registro</button>
    </form>
@endsection
