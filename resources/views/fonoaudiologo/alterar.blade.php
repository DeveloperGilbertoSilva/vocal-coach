@extends('layout')

@section('cabecalho')
    Alterar Disciplina
@endsection

@section('descricao')
    Ficha de registro de disciplina
@endsection

<?php
    $id = 5;
?>
@section('conteudo')
    <form class="mb-3" method="post" action="/fonoaudiologo/alterar/{{$fonoaudiologo->id}}">
        @csrf
        {{-- DADOS GERAIS --}}
        <fieldset>
            <legend>Consulta</legend>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="data_atendimento">Data de atendimento</label>
                        <input type="date" class="form-control" name="data_atendimento" id="data_atendimento" value="{{$fonoaudiologo->data_atendimento}}" required>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="medico">Médico</label>
                        <input type="text" class="form-control" name="medico" id="medico" value="{{$fonoaudiologo->medico}}" required>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="clinica">Clínica</label>
                        <input type="text" class="form-control" name="clinica" id="clinica" value="{{$fonoaudiologo->clinica}}" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="observacao">Observação</label>
                <textarea class="form-control" name="observacao" id="observacao" required>{{$fonoaudiologo->observacao}}</textarea>
            </div>
        </fieldset>

        <button type="submit" class="btn btn-warning">Alterar registro</button>
    </form>
@endsection
