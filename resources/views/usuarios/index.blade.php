@extends('layout')

@include('navbar')

@section('header')
    Skula - Usuários
@endsection

@section('content')
    
    <ul class="list-group">
    @for ($i = 0; $i < count($usuarios); $i++)       
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span>
                <img src="http://localhost:8080{{ $usuarios[$i]->avatar }}" alt="foto perfil" height="100" width="100">
                
                <b>Nome:</b> {{ $usuarios[$i]->first_name .' '. $usuarios[$i]->last_name }}
            </span>

            <span> 
                <a href="/usuario/{{ $usuarios[$i]->id }}" class="btn btn-primary">Perfil</a>
            </span>
        </li>
        @endfor 
    </ul>
@endsection