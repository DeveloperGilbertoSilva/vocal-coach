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
    <form class="mb-3" method="post" action="/matricula/alterar/{{$matricula->id}}">
        @csrf
        {{-- DADOS GERAIS --}}
        <fieldset>
            <legend>Dados da matrícula</legend>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="data_inicio">Data de Início</label>
                        <input type="date" class="form-control" name="data_inicio" id="data_inicio" value="{{$matricula->data_inicio}}" required>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="data_fim">Data de Encerramento</label>
                        <input type="date" class="form-control" name="data_fim" id="data_fim" value="{{$matricula->data_fim}}" required>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label for="horario">Horário</label>
                    <input type="text" class="form-control" name="horario" id="horario" value="{{$matricula->horario}}" required>
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="tipo_aluno">Tipo de aluno</label>
                        <select class="form-control" name="tipo_aluno" id="tipo_aluno">
                            <option value="bolsista">Bolsista</option>
                            <option value="particular">Particular</option>
                        </select>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="tipo_aula">Tipo de aula</label>
                        <select class="form-control" name="tipo_aula" id="tipo_aula">
                            <option value="avulsa">Avulsa</option>
                            <option value="grade_fechada">Grade Fechada</option>
                        </select>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="quantidade_aulas">Quantidade</label>
                        <input type="text" class="form-control" name="quantidade_aulas" id="quantidade_aulas" value="{{$matricula->quantidade_aulas}}" required>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend>Outras informações</legend>
            <div class="form-group">
                <label for="valor_mensal">Valor mensal</label>
                <input type="text" class="form-control" name="valor_mensal" id="valor_mensal" value="{{$matricula->valor_mensal}}" required>
            </div>

            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="observacao_inicial">Observação Inicial</label>
                        <textarea class="form-control" name="observacao_inicial" id="observacao_inicial" required>{{$matricula->observacao_inicial}}</textarea>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="observacao_final">Observação Final</label>
                        <textarea class="form-control" name="observacao_final" id="observacao_final" required>{{$matricula->observacao_final}}</textarea>
                    </div>
                </div>
            </div>
        </fieldset>

        <button type="submit" class="btn btn-warning">Alterar registro</button>
    </form>
@endsection
