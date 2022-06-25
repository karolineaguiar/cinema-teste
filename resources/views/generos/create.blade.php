@extends('layouts.app')

@section('title', 'Cadastro')

@section('content')

<div class="container mt-5">
<h1>Cadastre um Gênero</h1>
<hr>
<form action="{{ route('generos-store')}}" method="POST">
@csrf
    <div class="form-group">
       <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" placeholder="Digite o nome de um gênero cinematográfico...">
       </div>
    <br>
       <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" >
       </div>
    </div>
</form>
</div>

@endsection