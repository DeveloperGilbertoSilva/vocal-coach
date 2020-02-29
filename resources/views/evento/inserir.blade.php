@extends('layout')

@section('cabecalho')
    Inserir Evento
@endsection

@section('descricao')
    Ficha de cadastro de eventos
@endsection

<?php
    $id = 5;
?>
@section('conteudo')
    <form class="mb-3" method="post" action="/evento/inserir">
        @csrf
        {{-- DADOS GERAIS --}}
        <fieldset>
            <legend>Agendamento</legend>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="titulo">Titulo</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Insira o data" value="Teste {{$id}}" required>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="data">Data da aula</label>
                        <input type="date" class="form-control" id="data" name="data" placeholder="Insira o data" value="2017-05-12" required>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="horario">Horário</label>
                        <input type="text" class="form-control" id="horario" name="horario" placeholder="Insira o data" value="Teste {{$id}}" required>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend>Outras informações</legend>
            <div class="form-group">
                <label for="local">Local</label>
                <input type="text" class="form-control" id="local" name="local" placeholder="Insira o nome" value="Teste {{$id}}" required>
            </div>

            <div class="form-group">
                <label for="descricao">Descricao</label>
                <textarea class="form-control" id="descricao" name="descricao" placeholder="Insira o nome" required>Teste {{$id}}</textarea>
            </div>
        </fieldset>

        <button type="submit" class="btn btn-primary">Inserir registro</button>
    </form>
@endsection
