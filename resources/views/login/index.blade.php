@extends('layout')

@include('navbar')

@section('header')
    Login
@endsection

@section('content')
    @include('erros')

    <div>
        <form action="/login" method="post">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label" re>Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <button type="submit" class="btn btn-primary">Entrar</button>

            <a href="/cadastro" class="btn btn-secondary">Cadastre-se</a>
        </form>
        
        <a href="/esqueci-senha" class="btn btn-secondary">Esqueci a senha</a>
    </div>
@endsection