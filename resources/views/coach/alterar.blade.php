@extends('layout')

@section('cabecalho')
    Inserir Aluno
@endsection

@section('descricao')
    Ficha de cadastro de alunos
@endsection


@section('conteudo')
    <form class="mb-3" method="post" action="/coach/alterar/{{$coach->id}}">
        @csrf
        {{-- DADOS GERAIS --}}
        <fieldset>
            <legend>Dados Gerais</legend>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o nome" value="{{$coach->nome}}" required>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="apelido">Apelido</label>
                        <input type="text" class="form-control" id="apelido" name="apelido" placeholder="Insira o apelido" value="{{$coach->apelido}}" required>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Insira o nome" value="{{$coach->endereco}}" required>
                    </div>
                </div>
            </div>
        </fieldset>


        {{-- CONTATOS --}}
        <fieldset class="mt-3">
            <legend>Contatos</legend>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Insira o nome" value="{{$coach->telefone}}" required>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Insira o nome" value="{{$coach->email}}" required>
                    </div>
                </div>
            </div>

        </fieldset>


        {{-- OUTRAS INFORMAÇÕES --}}
        <fieldset class="mt-3">
            <legend>Dados de autenticação</legend>

            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="text" class="form-control" id="senha" name="senha" placeholder="Insira o nome" value="{{$coach->senha}}" required>
                    </div>
                </div>
            </div>
        </fieldset>

        <button type="submit" class="btn btn-warning">Alterar registro</button>
    </form>
@endsection
