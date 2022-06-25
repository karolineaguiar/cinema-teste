<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use Illuminate\Http\Request;

class GenerosController extends Controller
{
    public function index()
    {
        $generos = Genero::all();
        return view ('generos.index', ['generos'=> $generos]);
    }

    public function create()
    {
        return view('generos.create');
    }

    public function store(Request $request)
    {
        Genero::create($request-> all());
        return redirect()->route('generos-index');
    }
    public function edit($id)
    {
        $generos = Genero::where('id',$id)->first();
        if(!empty($generos))
        {
            return view ('generos.edit', ['generos'=> $generos]);
        }
        else
        {
           return redirect()->route('generos-index');
        }
    }
    public function update(Request $request, $id)
    {
         $data = [
              'nome' => $request->nome,
               
         ];
        Genero::where('id',$id)->update($data);
        return redirect()->route('generos-index');
    }
    public function destroy($id)
    {
        Genero::where('id',$id)->delete();
        return redirect()->route('generos-index');
    }
}
