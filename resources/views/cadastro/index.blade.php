@extends('layout')

@include('navbar')

@section('header')
    Cadastre-se    
@endsection

@section('content')
    <form action="" method="post">
        @csrf
        <div class="row">
            <div class="col-3">
                <label for="primeiro_nome" class="form-label fw-bolder">Primeiro Nome</label>
                <input type="text" name="primeiro_nome" id="primeiro_nome" name="primeiro_nome" class="form-control">
            </div>
            <div class="col-3">
                <label for="ultimo_nome" class="form-label fw-bolder">Ultimo Nome</label>
                <input type="text" name="ultimo_nome" id="ultimo_nome" name="ultimo_nome" class="form-control">
            </div>
            <div class="col-3">
                <label for="email" class="form-label fw-bolder">Email</label>
                <input type="email" name="email" id="email" name="email" class="form-control">
            </div>
            <div class="col-3">
                <label for="senha" class="form-label fw-bolder">Senha</label>
                <input type="password" name="senha" id="senha" name="senha" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <label for="genero" class="form-label fw-bolder">Genero</label>
                <input type="text" name="genero" id="genero" name="genero" class="form-control">
            </div>
            <div class="col-4">
                <label for="genero" class="form-label fw-bolder">Tipo de Usuario</label>
                <select class="form-select">
                    <option value="0">Escolha</option>
                    @foreach ($tipos as $tipo)
                        <option value="{{ $tipo->id }}">{{ $tipo->type }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-4">
                <label for="data_nascimento" class="form-label fw-bolder">Data de Nascimento</label>
                <input type="date" name="data_nascimento" id="data_nascimento" name="data_nascimento" class="form-control">
            </div>
        </div>
        
        <div class="row">
            <div class="col-4">
                <label for="canal_registro" class="form-label fw-bolder">Canal de Registro</label>
                <input type="text" name="canal_registro" id="canal_registro" name="canal_registro" class="form-control">
            </div>
            <div class="col-4">
                <label for="profissao" class="form-label fw-bolder">Profissao</label>
                <input type="text" name="profissao" id="profissao" name="profissao" class="form-control">
            </div>
            <div class="col-4">
                <label for="escolaridade" class="form-label fw-bolder">Escolaridade</label>
                <input type="text" name="escolaridade" id="escolaridade" name="escolaridade" class="form-control">
            </div>
        </div>
        
        <div class="row">
            <div class="col-4">
                <label for="telefone" class="form-label fw-bolder">Celular</label>
                <input type="text" name="telefone" id="telefone" name="telefone" class="form-control">
            </div>
            <div class="col-4">
                <label for="cpf" class="form-label fw-bolder">CPF</label>
                <input type="text" name="cpf" id="cpf" name="cpf" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="descricao_perfil" class="form-label fw-bolder">Descrição do Usuario</label>
                <input type="textarea" name="descricao_perfil" id="descricao_perfil" name="descricao_perfil" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <label for="genero" class="form-label fw-bolder">Preferencias</label>
                <select class="form-select">
                    <option value="0">Escolha</option>
                    @foreach ($preferencias as $preferencia)
                        <option value="{{ $preferencia->id }}">{{ $preferencia->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <label for="pais" class="form-label fw-bolder">Pais</label>
                <input type="text" name="pais" id="pais" name="pais" class="form-control">
            </div>
            <div class="col-3">
                <label for="estado" class="form-label fw-bolder">Estado</label>
                <input type="text" name="estado" id="estado" name="estado" class="form-control">
            </div>
            <div class="col-3">
                <label for="cidade" class="form-label fw-bolder">Cidade</label>
                <input type="text" name="cidade" id="cidade" name="cidade" class="form-control">
            </div>
            <div class="col-3">
                <label for="bairro" class="form-label fw-bolder">Bairro</label>
                <input type="text" name="bairro" id="bairro" name="bairro" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <label for="rua" class="form-label fw-bolder">Rua</label>
                <input type="text" name="rua" id="rua" name="rua" class="form-control">
            </div>
            <div class="col-2">
                <label for="cep" class="form-label fw-bolder">CEP</label>
                <input type="text" name="cep" id="cep" name="cep" class="form-control">
            </div>
            <div class="col-2">
                <label for="numero_casa" class="form-label fw-bolder">Numero da Casa</label>
                <input type="text" name="numero_casa" id="numero_casa" name="numero_casa" class="form-control">
            </div>
            <div class="col-4">
                <label for="complemento" class="form-label fw-bolder">Complemento</label>
                <input type="text" name="complemento" id="complemento" name="complemento" class="form-control">
            </div>
        </div>

        <button class="btn btn-success mt-3">Criar Conta</button>
    </form>
@endsection