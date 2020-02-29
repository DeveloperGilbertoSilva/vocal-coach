@extends('layout')

@section('cabecalho')
    Inserir Exercício
@endsection

@section('descricao')
    Ficha de cadastro de exercícios
@endsection

<?php
    $id = 5;
?>
@section('conteudo')
    <form class="mb-3" method="post" action="/financeiro/inserir">
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
                        <input type="date" class="form-control" name="data" id="data" value="2020-12-02" required>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="mes_referencia">Mês referência</label>
                        <input type="number" class="form-control" name="mes_referencia" id="mes_referencia" value="{{$id}}" required>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend>Outras informações</legend>
            <div class="form-group">
                <label for="valor">Valor</label>
            <input type="text" class="form-control" name="valor" id="valor" value="{{$id}}" required>
            </div>

            <div class="form-group">
                <label for="observacao">Observação</label>
                <textarea class="form-control" name="observacao" id="observacao" required>Teste {{$id}}</textarea>
            </div>

            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea class="form-control" name="descricao" id="descricao" required>Teste {{$id}}</textarea>
            </div>
        </fieldset>

        <button type="submit" class="btn btn-primary">Inserir registro</button>
    </form>
@endsection
