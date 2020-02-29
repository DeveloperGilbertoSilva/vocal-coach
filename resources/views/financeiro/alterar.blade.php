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
    <form class="mb-3" method="post" action="/financeiro/alterar/{{$financeiro->id}}">
        @csrf
        {{-- DADOS GERAIS --}}
        <fieldset>
            <legend>Referência</legend>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="tipo">Tipo</label>
                        <select class="form-control" name="tipo" id="tipo">
                            <option value="credito">Crédito</option>
                            <option value="debito">Débito</option>
                        </select>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="forma">Forma de pagamento</label>
                        <select class="form-control" name="forma" id="forma">
                            <option value="boleto">Boleto</option>
                            <option value="bolsista">Bolsista</option>
                            <option value="cartao_credito">Cartão de crédito</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="data">Data</label>
                        <input type="date" class="form-control" name="data" id="data" value="{{$financeiro->data}}" required>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="mes_referencia">Mês referência</label>
                        <input type="number" class="form-control" name="mes_referencia" id="mes_referencia" value="{{$financeiro->mes_referencia}}" required>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend>Outras informações</legend>
            <div class="form-group">
                <label for="valor">Valor</label>
            <input type="text" class="form-control" name="valor" id="valor" value="{{$financeiro->valor}}" required>
            </div>

            <div class="form-group">
                <label for="observacao">Observação</label>
                <textarea class="form-control" name="observacao" id="observacao" required>{{$financeiro->observacao}}</textarea>
            </div>

            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea class="form-control" name="descricao" id="descricao" required>{{$financeiro->descricao}}</textarea>
            </div>
        </fieldset>

        <button type="submit" class="btn btn-warning">Alterar registro</button>
    </form>
@endsection
