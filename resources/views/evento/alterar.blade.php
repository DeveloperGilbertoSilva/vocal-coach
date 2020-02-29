@extends('layout')

@section('cabecalho')
    Inserir Aula
@endsection

@section('descricao')
    Ficha de cadastro de aulas
@endsection

<?php
    $id = 5;
?>
@section('conteudo')
    <form class="mb-3" method="post" action="/evento/alterar/{{$evento->id}}-">
        @csrf
        {{-- DADOS GERAIS --}}
        <fieldset>
            <legend>Agendamento</legend>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="titulo">Titulo</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Insira o data" value="{{$evento->titulo}}" required>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="data">Data da aula</label>
                        <input type="date" class="form-control" id="data" name="data" placeholder="Insira o data" value="{{$evento->data}}" required>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="horario">Horário</label>
                        <input type="text" class="form-control" id="horario" name="horario" placeholder="Insira o data" value="{{$evento->horario}}" required>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend>Outras informações</legend>
            <div class="form-group">
                <label for="local">Local</label>
                <input type="text" class="form-control" id="local" name="local" placeholder="Insira o nome" value="{{$evento->local}}" required>
            </div>

            <div class="form-group">
                <label for="descricao">Descricao</label>
                <textarea class="form-control" id="descricao" name="descricao" placeholder="Insira o nome" required>{{$evento->descricao}}</textarea>
            </div>
        </fieldset>

        <button type="submit" class="btn btn-warning">Alterar registro</button>
    </form>
@endsection
