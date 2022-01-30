@extends('layout')

@include('navbar')

@section('header')
    Nova Senha
@endsection

@section('content')
    <form method="post">
        @csrf
        <label for="senha" class="form-label">Senha</label>
        <input type="password" class="form-control" id="senha" name="senha" required>

        <label for="confSenha" class="form-label">Confirme a Senha</label>
        <input type="password" class="form-control" id="confSenha" name="confSenha" required>

        <button class="btn btn-secondary mt-3">Enviar</button>
    </form>
@endsection