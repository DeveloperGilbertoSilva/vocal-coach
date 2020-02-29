@extends('layout')

@section('cabecalho')
    Inserir Coach
@endsection

@section('descricao')
    Ficha de cadastro de coach
@endsection

<?php
    $id = 6;
?>
@section('conteudo')
    <form class="mb-3" method="post" action="/dia_livre/inserir">
        @csrf
        {{-- DADOS GERAIS --}}
        <div class="form-group">
            <label for="data">Data</label>
            <input class="form-control" type="date" name="data" id="data" required>
        </div>

        <div class="form-group">
            <label for="horario">Horário</label>
            <input class="form-control" type="text" name="horario" id="horario" required>
        </div>

        <button type="submit" class="btn btn-primary">Inserir registro</button>
    </form>
@endsection
