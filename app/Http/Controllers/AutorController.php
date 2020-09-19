<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Autor;

class AutorController extends Controller
{
    public function index(Request $request)
    {
        $autores=Autor::all();
        return view('autor.index',['autores'=>$autores]); 
    }
    public function create()
    {
        return view('autor.create');
    }
    public function store(Request $request)
    {
        Autor::create($request->all());
        return redirect()->route('autor.index');
    }
    public function show($id)
    {
        $autor=Autor::find($id);
        return  view('autor.show',['autor'=>$autor]);
    }
    public function edit($id)
    {
        $autor=Autor::find($id);
        return view('autor.edit',['autor'=>$autor]);
    }
    public function update(Request $request, $id)
    {
        Autor::find($id)->update($request->all());
        return redirect()->route('autor.index');
    }
    public function destroy($id)
    {
        Autor::find($id)->delete();
        return redirect()->route('autor.index');
    }
}
