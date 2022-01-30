@extends('layout')

@include('navbar')

@section('header')
    Perfil de - {{ $usuario->user->first_name }}
@endsection

@section('content')
    <form action="" method="post">
        <div class="row">
            <div class="col-4">
                <label for="primeiro_nome" class="form-label fw-bolder">Primeiro Nome</label>
                <input type="text" name="primeiro_nome" id="primeiro_nome" name="primeiro_nome" class="form-control" value="{{ $usuario->user->first_name }}">
            </div>
            <div class="col-4">
                <label for="ultim_nome" class="form-label fw-bolder">Ultimo Nome</label>
                <input type="text" name="ultim_nome" id="ultim_nome" name="ultim_nome" class="form-control" value="{{ $usuario->user->last_name }}">
            </div>
            <div class="col-4">
                <label for="email" class="form-label fw-bolder">Email</label>
                <input type="text" name="email" id="email" name="email" class="form-control" value="{{ $usuario->user->email }}">
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <label for="genero" class="form-label fw-bolder">Genero</label>
                <input type="text" name="genero" id="genero" name="genero" class="form-control" value="{{ $usuario->user->genre }}">
            </div>
            <div class="col-4">
                <label for="tipo_usuario" class="form-label fw-bolder">Tipo de Usuario</label>
                <input type="text" name="tipo_usuario" id="tipo_usuario" name="tipo_usuario" class="form-control" value="{{ $usuario->user->type->type }}">
            </div>
            <div class="col-4">
                <label for="data_nascimento" class="form-label fw-bolder">Data de Nascimento</label>
                <input type="text" name="data_nascimento" id="data_nascimento" name="data_nascimento" class="form-control" value="{{ $usuario->user->birthdate->date }}">
            </div>
        </div>
        
        <div class="row">
            <div class="col-4">
                <label for="canal_registro" class="form-label fw-bolder">Canal de Registro</label>
                <input type="text" name="canal_registro" id="canal_registro" name="canal_registro" class="form-control" value="{{ $usuario->user->registration_channel }}">
            </div>
            <div class="col-4">
                <label for="profissao" class="form-label fw-bolder">Profissao</label>
                <input type="text" name="profissao" id="profissao" name="profissao" class="form-control" value="{{ $usuario->user->profession }}">
            </div>
            <div class="col-4">
                <label for="escolaridade" class="form-label fw-bolder">Escolaridade</label>
                <input type="text" name="escolaridade" id="escolaridade" name="escolaridade" class="form-control" value="{{ $usuario->user->schooling }}">
            </div>
        </div>
        
        <div class="row">
            <div class="col-4">
                <label for="telefone" class="form-label fw-bolder">Celular</label>
                <input type="text" name="telefone" id="telefone" name="telefone" class="form-control" value="{{ $usuario->user->telephone }}">
            </div>
            <div class="col-4">
                <label for="cpf" class="form-label fw-bolder">CPF</label>
                <input type="text" name="cpf" id="cpf" name="cpf" class="form-control" value="{{ $usuario->user->cpf }}">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="descricao_perfil" class="form-label fw-bolder">Descrição do Usuario</label>
                <input type="textarea" name="descricao_perfil" id="descricao_perfil" name="descricao_perfil" class="form-control" value="{{ $usuario->user->profile_description }}">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <label for="pais" class="form-label fw-bolder">Pais</label>
                <input type="text" name="pais" id="pais" name="pais" class="form-control" value="{{ $usuario->user->country }}">
            </div>
            <div class="col-3">
                <label for="estado" class="form-label fw-bolder">Estado</label>
                <input type="text" name="estado" id="estado" name="estado" class="form-control" value="{{ $usuario->user->state }}">
            </div>
            <div class="col-3">
                <label for="cidade" class="form-label fw-bolder">Cidade</label>
                <input type="text" name="cidade" id="cidade" name="cidade" class="form-control" value="{{ $usuario->user->city }}">
            </div>
            <div class="col-3">
                <label for="bairro" class="form-label fw-bolder">Bairro</label>
                <input type="text" name="bairro" id="bairro" name="bairro" class="form-control" value="{{ $usuario->user->district }}">
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <label for="rua" class="form-label fw-bolder">Rua</label>
                <input type="text" name="rua" id="rua" name="rua" class="form-control" value="{{ $usuario->user->street }}">
            </div>
            <div class="col-2">
                <label for="cep" class="form-label fw-bolder">CEP</label>
                <input type="text" name="cep" id="cep" name="cep" class="form-control" value="{{ $usuario->user->cep }}">
            </div>
            <div class="col-2">
                <label for="numero_cada" class="form-label fw-bolder">Numero da Casa</label>
                <input type="text" name="numero_cada" id="numero_cada" name="numero_cada" class="form-control" value="{{ $usuario->user->house_number }}">
            </div>
            <div class="col-4">
                <label for="complemento" class="form-label fw-bolder">Complemento</label>
                <input type="text" name="complemento" id="complemento" name="complemento" class="form-control" value="{{ $usuario->user->complement }}">
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <label for="criado_em" class="form-label fw-bolder">Criado</label>
                <input type="text" name="criado_em" id="criado_em" name="criado_em" class="form-control" value="{{ $usuario->user->create_at->date }}">
            </div>
            <div class="col-6">
                <label for="atualizado_em" class="form-label fw-bolder">Ultima Atualizacao</label>
                <input type="text" name="atualizado_em" id="atualizado_em" name="atualizado_em" class="form-control" value="{{ $usuario->user->updated_at->date }}">
            </div>
        </div>

        <button class="btn btn-success mt-3">Salvar</button>
    </form>
@endsection