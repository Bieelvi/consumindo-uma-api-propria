@extends('layout')

@include('navbar')

@section('header')
    Skula - Usuários
@endsection

@section('content')
    
    <ul class="list-group">
    @foreach ($usuarios as $usuario)            
        <li class="list-group-item d-flex justify-content-between">
            <span>
                <img src="{{ $usuario->user->avatar }}" alt="foto perfil">
                
                <b>Nome:</b> {{ $usuario->user->first_name .' '. $usuario->user->last_name }}
            </span>

            <span> 
                <a href="/usuario/{{ $usuario->user->id }}" class="btn btn-primary">Perfil</a>
            </span>
        </li>
    @endforeach
    </ul>
@endsection