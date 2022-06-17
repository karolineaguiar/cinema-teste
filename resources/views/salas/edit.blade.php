@extends('layouts.app')

@section('title', 'Atualizar')

@section('content')

<div class="container mt-5">
<h1>Atualize o Filme</h1>
<hr>
<form action="{{ route('salas-update',['id'=>$salas->id]) }}" method="POST">
@csrf
@method('PUT')
    <div class="form-group">
       <div class="form-group">
            <label for="filme">Filme:</label>
            <input type="text" class="form-control" name="filme" value="{{ $salas->filme}}" placeholder="Digite o nome de um filme...">
       </div>
    <br>
       <div class="form-group">
            <label for="generos">Gêneros:</label>
            <input type="text" class="form-control" name="generos" value="{{ $salas->generos}}" placeholder="Digite o gênero cinematográfico">
       </div>
    <br>
       <div class="form-group">
            <input type="submit" name="submit" class="btn btn-success" value="Atualizar" >
       </div>
    </div>
</form>
</div>

@endsection