<?php

namespace App\Http\Controllers;

use App\Models\Sala;
use Illuminate\Http\Request;

class SalasController extends Controller
{
    public function index()
    {
        $salas = Sala::all();
        return view ('salas.index', ['salas'=> $salas]);
    }

    public function create()
    {
        return view('salas.create');
    }

    public function store(Request $request)
    {
        Sala::create($request-> all());
        return redirect()->route('salas-index');
    }
    public function edit($id)
    {
        $salas = Sala::where('id',$id)->first();
        if(!empty($salas))
        {
            return view ('salas.edit', ['salas'=> $salas]);
        }
        else
        {
           return redirect()->route('salas-index');
        }
    }
    public function update(Request $request, $id)
    {
         $data = [
              'filme' => $request->filme,
              'generos' => $request->generos,
               
         ];
        Sala::where('id',$id)->update($data);
        return redirect()->route('salas-index');
    }
    public function destroy($id)
    {
        Sala::where('id',$id)->delete();
        return redirect()->route('salas-index');
    }
}
