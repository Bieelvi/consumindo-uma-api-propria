@extends('layout')

@include('navbar')

@section('header')
    
@endsection

@section('content')
    <form method="post" enctype="multipart/form-data">
        @csrf
        <label for="file" class="form-label">File</label>
        <input type="file" class="form-control" id="file" name="file" required>

        <button class="btn btn-secondary mt-3">Enviar</button>
    </form>
@endsection