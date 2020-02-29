@extends('layout')

@section('cabecalho')
    Inserir Consulta de Fonoaudiólogo
@endsection

@section('descricao')
    Ficha de cadastro de consulta
@endsection

<?php
    $id = 5;
?>
@section('conteudo')
    <form class="mb-3" method="post" action="/midia/inserir">
        @csrf
        {{-- DADOS GERAIS --}}
        <fieldset>
            <legend>Dados da matrícula</legend>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <input type="text" class="form-control" name="titulo" id="titulo" value="Teste {{$id}}" required>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="pasta">Pasta</label>
                        <select class="form-control" name="pasta" id="pasta">
                            <option value="audio">Áudios</option>
                            <option value="imagem">Imagens</option>
                            <option value="pdf">PDFs</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="arquivo">Arquivo</label>
                <input type="text" class="form-control" name="arquivo" id="arquivo" value="Teste {{$id}}" required>
            </div>
        </fieldset>

        <button type="submit" class="btn btn-primary">Inserir registro</button>
    </form>
@endsection
