@extends('layouts.app')

@section('title', 'Listagem')

@section('content')
       
 <div class="container mt-5">
    <div class="row">
       <div class="col-10">
          <h1>Listagem de Filmes</h1>
       </div>
       <div style="text-align:right">
    <ul>    
    <a href="{{ route('salas-create')}}"class="btn btn-success"> Cadastro de Filmes</a>
    <a href="{{ route('generos-create')}}"class="btn btn-success"> Cadastro de Gêneros</a>
   </ul>  
   </div>
   <table class="table mt-3">
       <thead>
       <tr>
              <th scope="col">ID (Sala)</th>
              <th scope="col">Filme</th>
              <th scope="col">Gênero</th>
              <th scope="col">...</th>

       </tr>
       </thead>
       <tbody class="table-group-divider">
  @foreach($salas as $sala)
       <tr>
              <th>{{ $sala->id }}</th>
              <th>{{ $sala->filme }}</th>
              <th>{{ $sala->generos }}</th>
              
              <th class="d-flex">
                 <a href="{{ route('salas-edit', ['id'=> $sala->id]) }}" class="btn btn-secondary me-2 ">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                         <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                     </svg>
                 </a>
                 
        <form action="{{ route('salas-destroy', ['id'=> $sala->id]) }}" method="POST">
            @csrf
            @method('DELETE')
              <button type="submit" class="btn btn-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                </svg>
              </button>
        </form>
              </th>
       </tr>
  @endforeach       
       </tbody>
   </table>
</div>
@endsection