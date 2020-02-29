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
    <form class="mb-3" method="post" action="/aula/inserir">
        @csrf
        {{-- DADOS GERAIS --}}
        <fieldset>
            <legend>Agendamento</legend>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="data">Data da aula</label>
                        <input type="date" class="form-control" id="data" name="data" placeholder="Insira o data" value="2017-05-12" required>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="tipo">Tipo</label>
                        <select class="form-control" name="tipo" id="tipo" required>
                            <option value="individual">Individual</option>
                            <option value="grupo">Em grupo</option>
                            <option value="online">Online</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="observacao">Observação</label>
                    <textarea class="form-control" id="observacao" name="observacao" placeholder="Insira o nome" required>Teste {{$id}}</textarea>
                    </div>
                </div>
            </div>
        </fieldset>

        <button type="submit" class="btn btn-primary">Inserir registro</button>
    </form>
@endsection
