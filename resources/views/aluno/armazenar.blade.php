@extends('layout')

@section('cabecalho')
    Inserir Aluno
@endsection

@section('descricao')
    Ficha de cadastro de alunos
@endsection


@section('conteudo')
    <form class="mb-3" method="post" action="/aluno/inserir">
        @csrf
        {{-- DADOS GERAIS --}}
        <fieldset>
            <legend>Dados Gerais</legend>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o nome" required>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="nascimento">Data de Nascimento</label>
                        <input type="date" class="form-control" id="nascimento" name="nascimento" placeholder="Insira o nome" required>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Insira o nome" required>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Insira o nome" required>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="uf">UF</label>
                        <input type="text" class="form-control" id="uf" name="uf" placeholder="Insira o nome" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="estado_civil">Estado Civil</label>
                <select class="form-control" name="estado_civil" id="estado_civil" required>
                    <option value="solteiro">Solteiro (a)</option>
                    <option value="casado">Casado (a)</option>
                    <option value="divorciado">Divorciado (a)</option>
                    <option value="viuvo">Viúvo (a)</option>
                </select>
            </div>
        </fieldset>


        {{-- CONTATOS --}}
        <fieldset class="mt-3">
            <legend>Contatos</legend>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="telefone_1">Telefone 1</label>
                        <input type="text" class="form-control" id="telefone_1" name="telefone_1" placeholder="Insira o nome" required>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="telefone_2">Telefone 2</label>
                        <input type="text" class="form-control" id="telefone_2" name="telefone_2" placeholder="Insira o nome" required>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Insira o nome" required>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="email_responsavel">E-mail do responsável</label>
                        <input type="email" class="form-control" id="email_responsavel" name="email_responsavel" placeholder="Insira o nome" required>
                    </div>
                </div>
            </div>

        </fieldset>


        {{-- OUTRAS INFORMAÇÕES --}}
        <fieldset class="mt-3">
            <legend>Outras informações</legend>

            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="dia_pagamento">Dia do pagamento</label>
                        <input type="number" class="form-control" id="dia_pagamento" name="dia_pagamento" placeholder="Insira o nome" required>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="situacao_cadastro">Situação do cadastro</label>
                        <select class="form-control" name="situacao_cadastro" id="situacao_cadastro" readonly>
                            <option value="aprovado">Aguardando entrevista</option>
                        </select>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="aprovacao_cadastro">Aprovação do cadastro</label>
                        <select class="form-control" name="aprovacao_cadastro" id="aprovacao_cadastro" required>
                            <option value="sim">Aprovado</option>
                            <option value="nao">Em espera</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col"></div>
            </div>
        </fieldset>



        <div class="form-group">
            <label for="link_material">Link do material</label>
            <input type="text" class="form-control" id="link_material" name="link_material" placeholder="Insira o nome" required>
        </div>

        {{-- <div class="form-group">
            <label for="entrevista">Entrevista</label>
            <select class="form-control" name="entrevista" id="entrevista">
                @foreach ($entrevistas as $entrevista)
                    <option value="{{$entrevista->id}}">{{$entrevista->pergunta}}</option>
                @endforeach
            </select>
        </div> --}}

        <button type="submit" class="btn btn-primary">Inserir registro</button>
    </form>
@endsection
