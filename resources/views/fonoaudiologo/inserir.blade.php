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
    <form class="mb-3" method="post" action="/fonoaudiologo/inserir">
        @csrf
        {{-- DADOS GERAIS --}}
        <fieldset>
            <legend>Consulta</legend>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="data_atendimento">Data de atendimento</label>
                        <input type="date" class="form-control" name="data_atendimento" id="data_atendimento" value="2020-12-02" required>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="medico">Médico</label>
                        <input type="text" class="form-control" name="medico" id="medico" value="Teste {{$id}}" required>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="clinica">Clínica</label>
                        <input type="text" class="form-control" name="clinica" id="clinica" value="Teste {{$id}}" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="observacao">Observação</label>
                <textarea class="form-control" name="observacao" id="observacao" required>Teste {{$id}}</textarea>
            </div>
        </fieldset>

        <button type="submit" class="btn btn-primary">Inserir registro</button>
    </form>
@endsection
