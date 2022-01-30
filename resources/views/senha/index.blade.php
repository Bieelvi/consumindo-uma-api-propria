@extends('layout')

@include('navbar')

@section('header')
    Esqueci a senha    
@endsection

@section('content')
    <form action="/esqueci-senha" method="post">
        @csrf
        <label for="email" class="form-label">Digite seu email</label>
        <input type="email" class="form-control" id="email" name="email" required>

        <button class="btn btn-secondary mt-3">Recuperar</button>
    </form>
@endsection