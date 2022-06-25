@extends('layouts.app')

@section('title', 'Cadastro')

@section('content')

<div class="container mt-5">
<h1>Cadastre um Filme</h1>
<hr>
<form action="{{ route('salas-store')}}" method="POST">
@csrf
    <div class="form-group">
       <div class="form-group">
            <label for="filme">Filme:</label>
            <input type="text" class="form-control" name="filme" placeholder="Digite o nome de um filme...">
       </div>
    <br>
       <div class="form-group">
            <label for="genero">Gêneros:</label>
            <input type="text" class="form-control" name="genero">
       </div>
    <br>
       <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" >
       </div>
    </div>
</form>
</div>

@endsection