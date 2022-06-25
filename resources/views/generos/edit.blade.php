@extends('layouts.app')

@section('title', 'Atualizar')

@section('content')

<div class="container mt-5">
<h1>Atualize um gênero</h1>
<hr>
<form action="{{ route('generos-update',['id'=>$generos->id]) }}" method="POST">
@csrf
@method('PUT')
    <div class="form-group">
       <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" value="{{$generos->nome}}" placeholder="Digite o nome de um filme...">
       </div>
    <br>
       <div class="form-group">
            <input type="submit" name="submit" class="btn btn-success" value="Atualizar" >
       </div>
    </div>
</form>
</div>

@endsection